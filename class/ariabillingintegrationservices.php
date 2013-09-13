<?php

require_once('baseariabilling.class.php');

/**
 * @package AriaBillingIntegrationServices
 */
class AriaBillingIntegrationServices extends BaseAriaBilling
{

        /**
     * WSDL File used to SOAP API calls
     * @var string $__wsdl_name Filename of WSDL file.
     */
    protected $__wsdl_name = 'integration_services-doc_literal_wrapped.wsdl';
    /**
     * WSDL Version for SOAP calls
     * @var string $__wsdl_version Version of the WSDL.
     */
    protected $__wsdl_version = '6.13';
    
    /**
     * Gets detailed account level information for all accounts matching specified query.
     * @param  $username 
     * @param  $password 
     * @param  $limit 
     * @param  $offset 
     * @param  $query_string 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int starting_record This indicates the number of objects that were (or would be) skipped before beginning output.<br> total_records This is the total number of objects that matched the provided criteria.<br>array account_details 
     */
    public function get_account_details($username, $password, $limit, $offset, $query_string)
    {
        return $this->__ws_call('get_account_details', Array(
                'username' => $username,
                'password' => $password,
                'limit' => $limit,
                'offset' => $offset,
                'query_string' => $query_string
        ));
    }

    /**
     * Gets account status history for all accounts matching specified query
     * @param  $username 
     * @param  $password 
     * @param  $limit 
     * @param  $offset 
     * @param  $query_string 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int starting_record This indicates the number of objects that were (or would be) skipped before beginning output.<br> total_records This is the total number of objects that matched the provided criteria.<br>array account_status_history 
     */
    public function get_account_status_history($username, $password, $limit, $offset, $query_string)
    {
        return $this->__ws_call('get_account_status_history', Array(
                'username' => $username,
                'password' => $password,
                'limit' => $limit,
                'offset' => $offset,
                'query_string' => $query_string
        ));
    }

    /**
     * Gets account plan history for all accounts matching specified query
     * @param  $username 
     * @param  $password 
     * @param  $limit 
     * @param  $offset 
     * @param  $query_string 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int starting_record This indicates the number of objects that were (or would be) skipped before beginning output.<br> total_records This is the total number of objects that matched the provided criteria.<br>array account_plan_history 
     */
    public function get_account_plan_history($username, $password, $limit, $offset, $query_string)
    {
        return $this->__ws_call('get_account_plan_history', Array(
                'username' => $username,
                'password' => $password,
                'limit' => $limit,
                'offset' => $offset,
                'query_string' => $query_string
        ));
    }

    /**
     * Gets payment details for all accounts matching specified query
     * @param  $username 
     * @param  $password 
     * @param  $limit 
     * @param  $offset 
     * @param  $query_string 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int starting_record This indicates the number of objects that were (or would be) skipped before beginning output.<br> total_records This is the total number of objects that matched the provided criteria.<br>array payment_details 
     */
    public function get_payment_details($username, $password, $limit, $offset, $query_string)
    {
        return $this->__ws_call('get_payment_details', Array(
                'username' => $username,
                'password' => $password,
                'limit' => $limit,
                'offset' => $offset,
                'query_string' => $query_string
        ));
    }

    /**
     * Gets order details for all accounts matching specified query
     * @param  $username 
     * @param  $password 
     * @param  $limit 
     * @param  $offset 
     * @param  $query_string 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int starting_record This indicates the number of objects that were (or would be) skipped before beginning output.<br> total_records This is the total number of objects that matched the provided criteria.<br>array order_details 
     */
    public function get_order_details($username, $password, $limit, $offset, $query_string)
    {
        return $this->__ws_call('get_order_details', Array(
                'username' => $username,
                'password' => $password,
                'limit' => $limit,
                'offset' => $offset,
                'query_string' => $query_string
        ));
    }

    }
