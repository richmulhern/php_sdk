<?php

require_once('baseariabilling.class.php');

/**
 * @package AriaBillingAuthenticationServices
 */
class AriaBillingAuthenticationServices extends BaseAriaBilling
{

        /**
     * WSDL File used to SOAP API calls
     * @var string $__wsdl_name Filename of WSDL file.
     */
    protected $__wsdl_name = 'authentication_services-doc_literal_wrapped.wsdl';
    /**
     * WSDL Version for SOAP calls
     * @var string $__wsdl_version Version of the WSDL.
     */
    protected $__wsdl_version = '6.23';
    
    /**
     * Verify a client number and auth key combination
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function authenticate_caller()
    {
        return $this->__ws_call('authenticate_caller', Array(
                
        ));
    }

    }
