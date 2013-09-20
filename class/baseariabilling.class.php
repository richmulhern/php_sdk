<?php

class BaseAriaBilling
{
    protected $__source = __FILE__;
    protected $__version = '$Rev: 4097 $';

    const REST = 0;
    const SOAP = 1;

    protected $__autoArgs = Array( );
    protected $__soapClient = NULL;
    protected $__curlHandle = NULL;
    protected $__wsdl_name = 'complete-doc_literal.wsdl';
    protected $__wsdl_version = '';
    protected $url = '';

    protected $credentials = array();
    protected $args = array();

    protected $options = array(
        'client_no' => null,
        'auth_key' => null,
        'call_type' =>  'rest',
        'output_format' => 'json',
        'debug' => false,
        'logger' => null,
        'timeout' => 120,
        'wsdl_version' => '6.13',
        'wsdl_name' => 'complete-doc_literal.wsdl'
    );

    public function __construct( $url, $options = Array( ) )
    {
        $this->url = $url;

        $options = array_intersect_key($options, $this->getOptions());

        $this->setOptions($options);

        $this->setArg('client_no', $this->getOption('client_no'));
        $this->setArg('auth_key', $this->getOption('auth_key'));

        $this->__autoArgs = $this->args;

        if ($this->isSoap())
        {
            $this->__soapClient = new SoapClient( $this->getUrl(), Array(
                'connection_timeout' => $this->getOption('timeout'),
            ) );
        }
    }

    protected function __logMessage($message, $level)
    {
        $logger = $this->getOption('logger');

        if($logger && method_exists($logger, $level))
        {
            return $this->$logger->$level( $message );
        }
        if(strpos( $message, "\n" ) === false )
        {
            $message .= "\n";
        }
        echo $message;
    }

    public function getArgs()
    {
        return $this->args;
    }

    public function setArg($name, $value)
    {
        $this->args[$name] = $value;
    }

    public function setOptions($options)
    {
        $this->options = array_merge($this->options, $options);
    }

    public function getOptions()
    {
        return $this->options;
    }

    public function setOption($name, $value)
    {
        $this->options[$name] = $value;
    }

    public function getOption($name)
    {
        return $this->options[$name];
    }

    protected function isSoap()
    {
        $callType = $this->getOption('call_type');
        $outputFormat = $this->getOption('output_format');

        if(strtolower($outputFormat) == 'soap' || strtolower($callType) == 'soap' || $callType == self::SOAP || $outputFormat == self::SOAP)
        {
            return true;
        }
    }

    protected function isRest()
    {
        return !$this->isSoap();
    }

    protected function getUrl()
    {
        $isDispatcher = strpos( $this->url, 'ws/api_ws_class_dispatcher.php' );

        if($this->isSoap() && $isDispatcher)
        {
            $url = substr($this->url, 0, $isDispatcher);
            $url .= 'Advanced/wsdl/';
            $url .= $this->__wsdl_version.'/';
            $url .= $this->__wsdl_name;
            return $url;
        }

        return $this->url;
    }

    protected function __obj_to_array( $obj )
    {
        if(is_object( $obj ) )
        {
            $obj = (Array) $obj;
        }
        if(is_array( $obj ) )
        {
            foreach ( $obj as $key => $value )
            {
                $obj[$key] = $this->__obj_to_array( $value );
            }
        }
        return $obj;
    }

    public function __ws_call( $method, $args = array())
    {
        if($this->getOption('debug') == true )
        {
            $this->__logMessage( "Calling $method with arguments:\n" .
                print_r( $args, true ), 'debug'
            );
        }

        $args = array_filter($args); //remove null values
        $args = array_merge($this->getArgs(), $args);

        try
        {
            //$args = array_merge( $this->__autoArgs, $args );
            //$args['client_no'] = $this->getOption('client_no');
            //$args['auth_key'] = $this->getOption('auth_key');

            if($this->isRest())
            {
                $args['output_format'] = $this->getOption('output_format');
                $result = $this->__restClient( Array( 'rest_call' => $method ) + $args );

            }
            else
            {
                $result = $this->__soapClient->__soapCall( $method, Array(
                    $method => $args
                ) );

                $result = $this->__obj_to_array( $result );
            }
        }
        catch ( Exception $e )
        {
            $result = Array( 'error_code' => -1, );
            if($e->getCode( ) != 0 )
            {
                $result['error_code'] = $e->getCode( );
            }
            $eClass = get_class( $e );
            $eMessage = $e->getMessage( );
            $result['error_msg'] = "Caught ($eClass): $eMessage";
        }
        if($this->getOption('debug'))
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
            if(is_array( $param ) and is_array( current( $param ) ) )
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
                        if(empty( $parameters[$name] ) )
                        {
                            $parameters[$name] = Array( );
                        }
                        if(is_array( $parameters[$name] ) )
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
        if($this->__curlHandle === null )
        {
            $this->__curlHandle = curl_init( );
            curl_setopt( $this->__curlHandle, CURLOPT_RETURNTRANSFER, true );
            curl_setopt( $this->__curlHandle, CURLOPT_POST, 1 );
            curl_setopt( $this->__curlHandle, CURLOPT_URL, $this->getUrl() );
            curl_setopt( $this->__curlHandle, CURLOPT_TIMEOUT, $this->getOption('timeout') );
        }

        //die(print_r($parameters));
        curl_setopt( $this->__curlHandle,
            CURLOPT_POSTFIELDS, http_build_query( $parameters )
        );
        $response = curl_exec( $this->__curlHandle );
        if($response !== false && ! mb_detect_encoding( $response, 'UTF-8', true ) )
        {
            $response = utf8_encode( $response );
        }
        if($response === false )
        {
            if($this->getOption('debug') )
            {
                $this->__logMessage( "Failed to contact server: " .
                    curl_error( $this->__curlHandle ), 'debug' );
            }
            throw new Exception( "Failed to contact server: " .
                curl_error( $this->__curlHandle ) );
        }
        elseif(stripos( $response, '<wddxpacket' ) !== false )
        {
            // result is wddx encoded
            $result = wddx_deserialize( $response );
        }
        elseif(strpos( $response, '{' ) === 0 )
        {
            // result appears to be json encoded
            $result = json_decode( $response, true );
        }
        elseif(strpos( $response, '=' ) > 0 )
        {
            // response might be http url encoded
            parse_str( $response, $result );
        }
        else
        {
            if($this->__debug )
            {
                $this->__logMessage( "Raw return result: \n" . $response, 'debug' );
            }
            throw new Exception( "Unable to parse results" );
        }
        return $result;
    }
}

