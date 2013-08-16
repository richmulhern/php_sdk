<?php
/**
 * AriaBillingSsoussServices.class.php
 * Web Service class 
 * 
 * @author    AriaAPI ClassDump generated file
 * @author    $Author: dmorfin $
 * @copyright Aria Systems, Inc
 * @version   $Rev: 4589 $ generated on Fri Nov  5 10:22:28 2010 
 * @id        $Id: ariabillingssoussservices.php 4589 2010-11-05 14:27:05Z dmorfin $
 */
  

/**
 * @package AriaBillingSsoussServices * 
 */
class AriaBillingSsoussServices extends BaseAriaBilling
{

    protected $__wsdl_name = 'ssouss_services-doc_literal_wrapped.wsdl';
    protected $__wsdl_version = '5.7';


    /**
     * @method set_session_auth 
     * @returns ( hash )  ( string ) "session_id", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function set_session_auth( $user_id = NULL, $password = NULL )
    {
        return $this->__ws_call( 'set_session_auth', Array(
                'user_id' => $user_id,
                'password' => $password,
            ) );
    }

    /**
     * @method set_session 
     * @returns ( hash )  ( string ) "session_id", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function set_session( $user_id = NULL )
    {
        return $this->__ws_call( 'set_session', Array(
                'user_id' => $user_id,
            ) );
    }

    /**
     * @method validate_session 
     * @returns ( hash )  ( string ) "user_id", ( long ) "account_no", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function validate_session( $session_id = NULL )
    {
        return $this->__ws_call( 'validate_session', Array(
                'session_id' => $session_id,
            ) );
    }

    /**
     * @method keep_alive 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function keep_alive( $session_id = NULL )
    {
        return $this->__ws_call( 'keep_alive', Array(
                'session_id' => $session_id,
            ) );
    }

    /**
     * @method kill_session 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function kill_session( $session_id = NULL )
    {
        return $this->__ws_call( 'kill_session', Array(
                'session_id' => $session_id,
            ) );
    }
}
