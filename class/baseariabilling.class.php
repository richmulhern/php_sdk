<?php
/**
 * BaseAriaBilling.class.php
 * Web Service class that abstracts SOAP and Rest calls
 * 
 * @author    $Author: dmorfin $
 * @copyright Aria Systems, Inc
 * @version   $Rev: 4097 $ 
 * @id        $Id: baseariabilling.class.php 4097 2010-06-07 19:12:33Z dmorfin $
 */
  

abstract class BaseAriaBilling
{
    protected $__source = __FILE__;
    protected $__version = '$Rev: 4097 $';

    const REST = 0;
    const SOAP = 1;

    protected $__autoArgs = Array( );
    protected $__call_type = 0;
    protected $__timeout = 120;
    protected $__soapClient = NULL;
    protected $__debug = FALSE;
    protected $__curlHandle = NULL;
    protected $__wsdl_name = 'complete-doc_literal.wsdl';
    protected $__wsdl_version = '';

    public function __construct( $url = NULL, $options = Array( ) )
    {
        if ( is_array( $url ) and empty( $options ) )
        {
            $options = $url;
            $url = NULL;
        }
        if ( ! empty( $options['logger'] ) )
        {
            $this->__logger = $options['logger'];
        }
        if ( ! empty( $options['debug'] ) )
        {
            $this->__setDebug( );
        }
        if ( empty( $url ) and ! empty( $options['url'] ) )
        {
            $url = $options['url'];
        }
        $url = (string) $url;
        if ( empty( $url ) or ! is_string( $url ) )
        {
            throw new Exception( __CLASS__ . " requires URL parameter" );
        }
        if ( empty( $options['call_type'] ) )
        {
            // avoid warnings
            $options['call_type'] = NULL;
        }
        if ( empty( $options['output_format'] ) )
        {
            // avoid warnings
            $options['output_format'] = NULL;
        }
        if ( 
            strtoupper( $options['output_format'] ) == 'SOAP' or 
            $options['call_type'] == 'SOAP' or 
            $options['call_type'] == self::SOAP )
        {
            $this->__call_type = self::SOAP;
            $isDispatcher = strpos( $url, 'ws/api_ws_class_dispatcher.php' );
            if ( $isDispatcher )
            {
                $wsdl = substr( $url, 0, $isDispatcher );
                $wsdl .= 'Advanced/wsdl/';
                $wsdl .= $this->__wsdl_version . '/';
                $wsdl .= $this->__wsdl_name;
            }
            else
            {
                $wsdl = $url;
            }
            $this->__soapClient = new SoapClient( $wsdl, Array( 
                'connection_timeout' => $this->__timeout,
            ) );
        }
        else
        {
            $this->__url = $url;
            if ( ! empty( $options['output_format'] ) )
            {
                $this->__autoArgs += Array( 
                    'output_format' => $options['output_format'] 
                );
            }
            else
            {
                $this->__autoArgs += Array( 
                    'output_format' => 'json' 
                );
            }
        }
        // already filtered for client_no and auth_key
        $this->__setCredentials( $options );
    }

    protected function __logMessage( $message, $level )
    {
        if ( ! empty( $this->__logger ) and method_exists( $this->__logger, $level ) )
        {
            return $this->__logger->$level( $message );
        }
        if ( strpos( $message, "\n" ) === FALSE )
        {
            $message .= "\n";
        }
        echo $message;
    }
    public function __setCredentials( $args )
    {
        foreach ( $args as $key => $value )
        {
            if ( $value === NULL )
            {
                unset( $args[$key] ); // don't pass nulls down
            }
        }
        $args = array_intersect_key( $args, 
            Array( 'client_no' => 1, 'auth_key' => 1 ) 
        );
        $this->__autoArgs = $args + $this->__autoArgs;
    }

    public function __setDebug( $value = TRUE )
    {
        $this->__debug = ( $value != FALSE );
    }

    protected function __obj_to_array( $obj )
    {
        if ( is_object( $obj ) )
        {
            $obj = (Array) $obj;
        }
        if ( is_array( $obj ) )
        {
            foreach ( $obj as $key => $value )
            {
                $obj[$key] = $this->__obj_to_array( $value );
            }
        }
        return $obj;
    }
    protected function __ws_call( $method, $args )
    {
        if ( $this->__debug )
        {
            $this->__logMessage( "Calling $method with arguments:\n" .
                print_r( $args, true ), 'debug'
            );
        }
        foreach ( $args as $key => $value )
        {
            if ( $value === NULL )
            {
                unset( $args[$key] ); // don't pass nulls down
            }
        }
        try
        {
            $args = array_merge( $this->__autoArgs, $args );
            if ( $this->__call_type == self::SOAP )
            {
                $result = $this->__soapClient->__soapCall( $method, Array( 
                    $method => $args 
                ) );
                $result = $this->__obj_to_array( $result );
            }
            else
            {
                $result = $this->__restClient( Array( 'rest_call' => $method ) + $args );
            }
        }
        catch ( Exception $e )
        {
            $result = Array( 'error_code' => -1, );
            if ( $e->getCode( ) != 0 )
            {
                $result['error_code'] = $e->getCode( );
            }
            $eClass = get_class( $e );
            $eMessage = $e->getMessage( );
            $result['error_msg'] = "Caught ($eClass): $eMessage";
        }
        if ( $this->__debug )
        {
            $this->__logMessage( "Call $method returned with:\n" .
                print_r( $result, true ), 'debug'
            );
        }
        return $result;
    }
    protected function __restClient( $parameters = Array( ) )
    {
        foreach ( $parameters as $key => $param )
        {
            if ( is_array( $param ) and is_array( current( $param ) ) )
            {
                // Two dimensional arrays require special handling.
                // The rows must be parsed to convert them to one 
                // dimensional arrays in the main parameter list that
                // have the same keys as the row.
                $keylist = Array( );
                foreach ( $param as $row )
                {
                    foreach ( $row as $name => $value )
                    {
                        $keylist[] = $name;
                        if ( empty( $parameters[$name] ) )
                        {
                            $parameters[$name] = Array( );
                        }
                        if ( is_array( $parameters[$name] ) )
                        {
                            $parameters[$name][] = $value;
                        }
                        else
                        {
                            throw new Exception( "Declaration of array overwrites variable in REST call" );
                        }
                    }
                }
                unset( $parameters[$key] );
            }
        }
        if ( $this->__curlHandle === null )
        {
            $this->__curlHandle = curl_init( );
            curl_setopt( $this->__curlHandle, CURLOPT_RETURNTRANSFER, true );
            curl_setopt( $this->__curlHandle, CURLOPT_POST, 1 );
            curl_setopt( $this->__curlHandle, CURLOPT_URL, $this->__url );
            curl_setopt( $this->__curlHandle, CURLOPT_TIMEOUT, $this->__timeout );
        }
        curl_setopt( $this->__curlHandle,
            CURLOPT_POSTFIELDS, http_build_query( $parameters ) 
        );
        $response = curl_exec( $this->__curlHandle );
        if ( $response !== false && ! mb_detect_encoding( $response, 'UTF-8', true ) )
        {
            $response = utf8_encode( $response );
        }
        if ( $response === false )
        {
            if ( $this->__debug )
            {
                $this->__logMessage( "Failed to contact server: " . 
                    curl_error( $this->__curlHandle ), 'debug' );
            }
            throw new Exception( "Failed to contact server: " . 
                curl_error( $this->__curlHandle ) );
        }
        elseif ( stripos( $response, '<wddxpacket' ) !== false )
        {
            // result is wddx encoded
            $result = wddx_deserialize( $response );
        }
        elseif ( strpos( $response, '{' ) === 0 )
        {
            // result appears to be json encoded
            $result = json_decode( $response, true );
        }
        elseif ( strpos( $response, '=' ) > 0 )
        {
            // response might be http url encoded
            parse_str( $response, $result );
        }
        else
        {
            if ( $this->__debug )
            {
                $this->__logMessage( "Raw return result: \n" . $response, 'debug' );
            }
            throw new Exception( "Unable to parse results" );
        }
        return $result;
    }
}

