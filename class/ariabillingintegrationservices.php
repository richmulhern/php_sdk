<?php
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
    protected $__wsdl_version = '6.14';

    /**
     * Gets detailed account level information for all accounts matching specified query.
     * @param string $username The login name of the user making this request. It is the same name that is used to log in to the Aria Administration and Configuration Tool.
     * @param string $password The password of the user making this request. It is the same password that is used to log in to the Aria Administration and Configuration Tool.
     * @param string $query_string The criteria which all returned objects must match. Different objects have a different set of searchable criteria.Fields marked with &quot;*Query&quot; in the returns section can be used as part of the query_string. Valid operations for the query string include &quot;=&quot;, &quot;!=&quot;, &quot;&lt;&quot;, &quot;&lt;=&quot;, &quot;&gt;=&quot;, &quot;&gt;&quot;, &quot;IS NULL&quot;, &quot;IS NOT NULL&quot;, &quot;LIKE&quot;, and &quot;NOT LIKE&quot;. The first operand must always be a field name, and the second operand must always be a value (except for &quot;IS NULL&quot; and &quot;IS NOT NULL&quot;, where the second operand is implicitly &quot;NULL&quot;). If the second operand contains a space, less than, greater than, or equals sign, then it must be enclosed in double quotes. The second operand may not contain double quotes. Multiple conditions must be joined with either &quot;AND&quot; or &quot;OR&quot;. Additionally, any queryable field can also be used to order the results, by appending &quot;ORDER BY&quot; to the query, followed by a field name and either &quot;ASC&quot; or &quot;DESC&quot;.
     * @param int $limit The maximum number of objects that should be returned by this call.
     * @param int $offset The number of records to skip. Note that both &quot;0&quot; and NULL will cause the interface not to skip any records.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int starting_record This indicates the number of objects that were (or would be) skipped before beginning output.<br> total_records This is the total number of objects that matched the provided criteria.<br>array account_details 
     */
    public function get_account_details($username, $password, $query_string, $limit = null, $offset = null)
    {
        return $this->__ws_call('get_account_details', Array(
                'username' => $username,
                'password' => $password,
                'query_string' => $query_string,
                'limit' => $limit,
                'offset' => $offset
        ));
    }

    /**
     * Gets account status history for all accounts matching specified query
     * @param string $username The login name of the user making this request. It is the same name that is used to log in to the Aria Administration and Configuration Tool.
     * @param string $password The password of the user making this request. It is the same password that is used to log in to the Aria Administration and Configuration Tool.
     * @param string $query_string The criteria which all returned objects must match. Different objects have a different set of searchable criteria.Fields marked with &quot;*Query&quot; in the returns section can be used as part of the query_string. Valid operations for the query string include &quot;=&quot;, &quot;!=&quot;, &quot;&lt;&quot;, &quot;&lt;=&quot;, &quot;&gt;=&quot;, &quot;&gt;&quot;, &quot;IS NULL&quot;, &quot;IS NOT NULL&quot;, &quot;LIKE&quot;, and &quot;NOT LIKE&quot;. The first operand must always be a field name, and the second operand must always be a value (except for &quot;IS NULL&quot; and &quot;IS NOT NULL&quot;, where the second operand is implicitly &quot;NULL&quot;). If the second operand contains a space, less than, greater than, or equals sign, then it must be enclosed in double quotes. The second operand may not contain double quotes. Multiple conditions must be joined with either &quot;AND&quot; or &quot;OR&quot;. Additionally, any queryable field can also be used to order the results, by appending &quot;ORDER BY&quot; to the query, followed by a field name and either &quot;ASC&quot; or &quot;DESC&quot;.
     * @param int $limit The maximum number of objects that should be returned by this call.
     * @param int $offset The number of records to skip. Note that both &quot;0&quot; and NULL will cause the interface not to skip any records.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int starting_record This indicates the number of objects that were (or would be) skipped before beginning output.<br> total_records This is the total number of objects that matched the provided criteria.<br>array account_status_history 
     */
    public function get_account_status_history($username, $password, $query_string, $limit = null, $offset = null)
    {
        return $this->__ws_call('get_account_status_history', Array(
                'username' => $username,
                'password' => $password,
                'query_string' => $query_string,
                'limit' => $limit,
                'offset' => $offset
        ));
    }

    /**
     * Gets account plan history for all accounts matching specified query
     * @param string $username The login name of the user making this request. It is the same name that is used to log in to the Aria Administration and Configuration Tool.
     * @param string $password The password of the user making this request. It is the same password that is used to log in to the Aria Administration and Configuration Tool.
     * @param string $query_string The criteria which all returned objects must match. Different objects have a different set of searchable criteria.Fields marked with &quot;*Query&quot; in the returns section can be used as part of the query_string. Valid operations for the query string include &quot;=&quot;, &quot;!=&quot;, &quot;&lt;&quot;, &quot;&lt;=&quot;, &quot;&gt;=&quot;, &quot;&gt;&quot;, &quot;IS NULL&quot;, &quot;IS NOT NULL&quot;, &quot;LIKE&quot;, and &quot;NOT LIKE&quot;. The first operand must always be a field name, and the second operand must always be a value (except for &quot;IS NULL&quot; and &quot;IS NOT NULL&quot;, where the second operand is implicitly &quot;NULL&quot;). If the second operand contains a space, less than, greater than, or equals sign, then it must be enclosed in double quotes. The second operand may not contain double quotes. Multiple conditions must be joined with either &quot;AND&quot; or &quot;OR&quot;. Additionally, any queryable field can also be used to order the results, by appending &quot;ORDER BY&quot; to the query, followed by a field name and either &quot;ASC&quot; or &quot;DESC&quot;.
     * @param int $limit The maximum number of objects that should be returned by this call.
     * @param int $offset The number of records to skip. Note that both &quot;0&quot; and NULL will cause the interface not to skip any records.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int starting_record This indicates the number of objects that were (or would be) skipped before beginning output.<br> total_records This is the total number of objects that matched the provided criteria.<br>array account_plan_history 
     */
    public function get_account_plan_history($username, $password, $query_string, $limit = null, $offset = null)
    {
        return $this->__ws_call('get_account_plan_history', Array(
                'username' => $username,
                'password' => $password,
                'query_string' => $query_string,
                'limit' => $limit,
                'offset' => $offset
        ));
    }

    /**
     * Gets payment details for all accounts matching specified query
     * @param string $username The login name of the user making this request. It is the same name that is used to log in to the Aria Administration and Configuration Tool.
     * @param string $password The password of the user making this request. It is the same password that is used to log in to the Aria Administration and Configuration Tool.
     * @param string $query_string The criteria which all returned objects must match. Different objects have a different set of searchable criteria.Fields marked with &quot;*Query&quot; in the returns section can be used as part of the query_string. Valid operations for the query string include &quot;=&quot;, &quot;!=&quot;, &quot;&lt;&quot;, &quot;&lt;=&quot;, &quot;&gt;=&quot;, &quot;&gt;&quot;, &quot;IS NULL&quot;, &quot;IS NOT NULL&quot;, &quot;LIKE&quot;, and &quot;NOT LIKE&quot;. The first operand must always be a field name, and the second operand must always be a value (except for &quot;IS NULL&quot; and &quot;IS NOT NULL&quot;, where the second operand is implicitly &quot;NULL&quot;). If the second operand contains a space, less than, greater than, or equals sign, then it must be enclosed in double quotes. The second operand may not contain double quotes. Multiple conditions must be joined with either &quot;AND&quot; or &quot;OR&quot;. Additionally, any queryable field can also be used to order the results, by appending &quot;ORDER BY&quot; to the query, followed by a field name and either &quot;ASC&quot; or &quot;DESC&quot;.
     * @param int $limit The maximum number of objects that should be returned by this call.
     * @param int $offset The number of records to skip. Note that both &quot;0&quot; and NULL will cause the interface not to skip any records.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int starting_record This indicates the number of objects that were (or would be) skipped before beginning output.<br> total_records This is the total number of objects that matched the provided criteria.<br>array payment_details 
     */
    public function get_payment_details($username, $password, $query_string, $limit = null, $offset = null)
    {
        return $this->__ws_call('get_payment_details', Array(
                'username' => $username,
                'password' => $password,
                'query_string' => $query_string,
                'limit' => $limit,
                'offset' => $offset
        ));
    }

    /**
     * Gets order details for all accounts matching specified query
     * @param string $username The login name of the user making this request. It is the same name that is used to log in to the Aria Administration and Configuration Tool.
     * @param string $password The password of the user making this request. It is the same password that is used to log in to the Aria Administration and Configuration Tool.
     * @param string $query_string The criteria which all returned objects must match. Different objects have a different set of searchable criteria.Fields marked with &quot;*Query&quot; in the returns section can be used as part of the query_string. Valid operations for the query string include &quot;=&quot;, &quot;!=&quot;, &quot;&lt;&quot;, &quot;&lt;=&quot;, &quot;&gt;=&quot;, &quot;&gt;&quot;, &quot;IS NULL&quot;, &quot;IS NOT NULL&quot;, &quot;LIKE&quot;, and &quot;NOT LIKE&quot;. The first operand must always be a field name, and the second operand must always be a value (except for &quot;IS NULL&quot; and &quot;IS NOT NULL&quot;, where the second operand is implicitly &quot;NULL&quot;). If the second operand contains a space, less than, greater than, or equals sign, then it must be enclosed in double quotes. The second operand may not contain double quotes. Multiple conditions must be joined with either &quot;AND&quot; or &quot;OR&quot;. Additionally, any queryable field can also be used to order the results, by appending &quot;ORDER BY&quot; to the query, followed by a field name and either &quot;ASC&quot; or &quot;DESC&quot;.
     * @param int $limit The maximum number of objects that should be returned by this call.
     * @param int $offset The number of records to skip. Note that both &quot;0&quot; and NULL will cause the interface not to skip any records.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int starting_record This indicates the number of objects that were (or would be) skipped before beginning output.<br> total_records This is the total number of objects that matched the provided criteria.<br>array order_details 
     */
    public function get_order_details($username, $password, $query_string, $limit = null, $offset = null)
    {
        return $this->__ws_call('get_order_details', Array(
                'username' => $username,
                'password' => $password,
                'query_string' => $query_string,
                'limit' => $limit,
                'offset' => $offset
        ));
    }

    }
