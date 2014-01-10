<?php

require_once('baseariabilling.class.php');

/**
 * @package AriaBillingSsoussServices
 */
class AriaBillingSsoussServices extends BaseAriaBilling
{

        /**
     * WSDL File used to SOAP API calls
     * @var string $__wsdl_name Filename of WSDL file.
     */
    protected $__wsdl_name = 'ssouss_services-doc_literal_wrapped.wsdl';
    /**
     * WSDL Version for SOAP calls
     * @var string $__wsdl_version Version of the WSDL.
     */
    protected $__wsdl_version = '6.18';
    
    /**
     * Authenticates a customer who logs into a User Self Service application with a user ID and password. Starts an Aria session for the customer that is logged in. Within the Aria session, you can perform functions such as securely processing payment transactions or securely retrieving account information.
     * @param string $user_id Account&#039;s user ID. Alternative to using acct_no.
     * @param string $password Password for the given user
     * @return mixed[] string session_id Client-assigned identifier for the application session.<br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function set_session_auth($user_id = null, $password = null)
    {
        return $this->__ws_call('set_session_auth', Array(
                'user_id' => $user_id,
                'password' => $password
        ));
    }

    /**
     * Starts an Aria session for a specified user ID.  Within an Aria session, you can perform functions such as securely processing payment transactions or securely retrieving account information in registration or User Self Service applications.
     * @param string $user_id Account&#039;s user ID. Alternative to using acct_no.
     * @param int $acct_no Account&#039;s Account #.  Alternative to using user ID
     * @return mixed[] string session_id Client-assigned identifier for the application session.<br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function set_session($user_id = null, $acct_no = null)
    {
        return $this->__ws_call('set_session', Array(
                'user_id' => $user_id,
                'acct_no' => $acct_no
        ));
    }

    /**
     * Determines the validity of a specified session and the user with which a session ID is associated.
     * @param string $session_id Client-assigned identifier for the application session.
     * @return mixed[] string user_id Account&#039;s user ID. Alternative to using acct_no.<br>int account_no Aria assigned account identifier. This value is unique across all Aria-managed accounts..<br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function validate_session($session_id = null)
    {
        return $this->__ws_call('validate_session', Array(
                'session_id' => $session_id
        ));
    }

    /**
     * Increase the given valid session&#039;s expiry time by the number of minutes pre-defined for the client.
     * @param string $session_id A session ID is a unique number that a Web site&#039;s server assigns a specific user for the duration of that user&#039;s visit (session).
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function keep_alive($session_id = null)
    {
        return $this->__ws_call('keep_alive', Array(
                'session_id' => $session_id
        ));
    }

    /**
     * Ends a customer&#039;s session in a registration or User Self Service application.
     * @param string $session_id Client-assigned identifier for the application session.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function kill_session($session_id = null)
    {
        return $this->__ws_call('kill_session', Array(
                'session_id' => $session_id
        ));
    }

    }
