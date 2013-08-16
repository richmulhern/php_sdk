<?php

$error = Array( );

if ( ! function_exists( 'version_compare' ) )
{
    // not exactly the same!
    function version_compare( $version1, $version2 )
    {
        $version1 = preg_replace( '/[^[:alnum:]]+/', '.', $version1 );
        $v1 = Array( );
        preg_match_all( '/([[:alpha:]]+|[[:digit:]]+)/', $version1, $v1 );
        $version2 = preg_replace( '/[^[:alnum:]]+/', '.', $version2 );
        $v2 = Array( );
        preg_match_all( '/([[:alpha:]]+|[[:digit:]]+)/', $version2, $v2 );
        $return = 0;
        if ( isset( $v2[0][0] ) )
        {
            $return = -1;
        }
        foreach ( array_keys( $v1[0] ) as $index )
        {
            if ( is_numeric( $v1[0][$index] ) )
            {
                $v1[0][$index] = (int) $v1[0][$index];
            }
            if ( is_numeric( $v2[0][$index] ) )
            {
                $v2[0][$index] = (int) $v2[0][$index];
            }
            if ( ! isset( $v2[0][$index] ) )
            {
                $v2[0][$index] = 0;
            }
            $return = strcmp( $v1[0][$index], $v2[0][$index] );
            if ( $return !== 0 )
            {
                break;
            }
        }
        return $return;
    }
}

if ( 
    version_compare( phpversion( ), '5.1.0' ) < 0
)
{
    $error['php'] = "PHP is too old";
}

if ( 
    version_compare( phpversion( 'json' ), '1.0' ) < 0
)
{
    $error['json'] = "JSON is not installed or is too old";
}

function get_curl_version( )
{
    if ( ! extension_loaded( 'curl' ) )
    {
        return -1;
    }
    $v = curl_version( );
    return $v["version"];
}

if ( 
    version_compare( get_curl_version( ), '7.0' ) < 0
)
{
    $error['curl'] = "CURL is not installed or is too old";
}

$config_file = realpath( dirname( __FILE__ ) . '/../' );
if ( ! realpath( $config_file . '/conf/' ) )
{
    $error['configuration'] = "The path conf does not exist within $config_file";
    unset( $config_file );
}
else
{
    $config_file = realpath( dirname( __FILE__ ) . '/../conf/' );
    if ( ! realpath( $config_file . '/ussreg.ini' ) )
    {
        $error['configuration'] = "The file ussreg.ini does not exist within $config_file";
        unset( $config_file );
    }
    else
    {
        $config_file = realpath( dirname( __FILE__ ) . '/../conf/ussreg.ini' );
    }
}

$config = parse_ini_file( $config_file );

if ( ! empty( $config_file ) )
{
    if ( empty( $config['client_no'] ) ) 
    {
        $error['client_no'] = "Configuration file $config_file doesn't contain a line for 'client_no = 1234'";
    }

    if ( empty( $config['auth_key'] ) ) 
    {
        $error['auth_key'] = "Configuration file $config_file doesn't contain a line for 'auth_key = 1234'";
    }

    if ( empty( $config['api_url'] ) ) 
    {
        $error['api_url'] = "Configuration file $config_file doesn't contain a line for 'api_url = 1234'";
    }
}
if ( empty( $error ) )
{
    echo "No errors, ready to continue\n";
}
else
{
    print_r( $error );
}
