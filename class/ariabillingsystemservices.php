<?php

require_once('baseariabilling.class.php');

/**
 * @package AriaBillingSystemServices
 */
class AriaBillingSystemServices extends BaseAriaBilling
{

        /**
     * WSDL File used to SOAP API calls
     * @var string $__wsdl_name Filename of WSDL file.
     */
    protected $__wsdl_name = 'system_services-doc_literal_wrapped.wsdl';
    /**
     * WSDL Version for SOAP calls
     * @var string $__wsdl_version Version of the WSDL.
     */
    protected $__wsdl_version = '6.18';
    
    /**
     * Returns a detailed list of all plans associated with a client. The information returned includes the services and rate schedules associated with the plans.
     * @param int $plan_no Aria assigned unique plan identifier
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $promo_code This is the code provided the client  and used by the account holder during registration or when executing a transaction. A promotion generally provides  access to a custom set of reduced-rate plans.
     * @param int $parent_plan_no Aria assigned unique plan identifier for the parent plan
     * @param array $supp_field_names 
     * @param array $supp_field_values 
     * @param string $include_all_rate_schedules If set to &quot;true&quot;, will retrieve all of the rates and rate schedules associated with a particular plan. If left blank, will default to &quot;false&quot;.
     * @param string $include_plan_hierarchy You can use this input parameter to specify whether to retrieve the child plans associated with the returned plans or with the plan_no or parent_plan_no that you specified. If you set the include_plan_hierarchy parameter to true , then all of the child plans down to the bottom level of your plan hierarchy will be returned.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array all_client_plans A multidimensional array containing all client plans.
     */
    public function get_client_plans_all($plan_no = null, $acct_no = null, $promo_code = null, $parent_plan_no = null, $supp_field_names = null, $supp_field_values = null, $include_all_rate_schedules = null, $include_plan_hierarchy = null)
    {
        return $this->__ws_call('get_client_plans_all', Array(
                'plan_no' => $plan_no,
                'acct_no' => $acct_no,
                'promo_code' => $promo_code,
                'parent_plan_no' => $parent_plan_no,
                'supp_field_names' => $supp_field_names,
                'supp_field_values' => $supp_field_values,
                'include_all_rate_schedules' => $include_all_rate_schedules,
                'include_plan_hierarchy' => $include_plan_hierarchy
        ));
    }

    /**
     * Specifies whether a client should receive event notification messages. If you disable event notification, this simply stops the transmission of the messages but does not prevent the event notification records from being created.  If event notification is  re-enabled, then the client will receive queued notification messages in the order in which they were created.
     * @param string $on_off_indicator A boolean argument to turn provisioning messages on and off (on=true/1, off=false/0)
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function set_prov_engine($on_off_indicator = null)
    {
        return $this->__ws_call('set_prov_engine', Array(
                'on_off_indicator' => $on_off_indicator
        ));
    }

    /**
     * Returns the upload statistics for a specified client usage file.
     * @param string $file_name Filename of the targe file submitted for load.
     * @return mixed[] int status_cd This is the status of the object inquestion for the current API call.<br>string load_date_time Date and time the file load was attempted.<br>int recs_received Total number of records received<br>int recs_loaded Total number of records successfully loaded<br>int recs_failed Total number of records that failed to load.<br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_auf_status($file_name = null)
    {
        return $this->__ws_call('get_auf_status', Array(
                'file_name' => $file_name
        ));
    }

    /**
     * Returns the county of origin for a specified IP address.
     * @param string $ip_address IP address of the account holder, derived from their current session.
     * @return mixed[] string country_code This is a phone number dialing predicate indicating the country to dial.<br>string country_name Country name returned from a search using the provided IP address.<br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_country_from_ip($ip_address = null)
    {
        return $this->__ws_call('get_country_from_ip', Array(
                'ip_address' => $ip_address
        ));
    }

    /**
     * get an array of values for an array of input web replacement strings
     * @param string $filter_currency_cd The 3-character ISO-compliant currency code in lowercase for monetary values used in the context of this API method.
     * @param string $return_no_cost_items A boolean value that asserts the API call should include no-cost items in its returned results (true/1=yes, false/0=no).
     * @param int $filter_item_no Aria assigned unique identifier indicating Client Inventory Item.
     * @return mixed[] array client_items <br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_client_items($filter_currency_cd = null, $return_no_cost_items = null, $filter_item_no = null)
    {
        return $this->__ws_call('get_client_items', Array(
                'filter_currency_cd' => $filter_currency_cd,
                'return_no_cost_items' => $return_no_cost_items,
                'filter_item_no' => $filter_item_no
        ));
    }

    /**
     * Returns a list of inventory items associated with a client. The information returned includes prices, services, images, supplemental fields, and classes associated with the items.
     * @param string $filter_currency_cd The 3-character ISO-compliant currency code in lowercase for monetary values used in the context of this API method.
     * @param string $return_no_cost_items A boolean value that asserts the API call should include no-cost items in its returned results (true/1=yes, false/0=no).
     * @param int $filter_item_no Aria assigned unique identifier indicating Client Inventory Item.
     * @param string $include_inactive_items Specifies whether inactive inventory items need to be included or not
     * @return mixed[] array all_client_items <br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_client_items_all($filter_currency_cd = null, $return_no_cost_items = null, $filter_item_no = null, $include_inactive_items = null)
    {
        return $this->__ws_call('get_client_items_all', Array(
                'filter_currency_cd' => $filter_currency_cd,
                'return_no_cost_items' => $return_no_cost_items,
                'filter_item_no' => $filter_item_no,
                'include_inactive_items' => $include_inactive_items
        ));
    }

    /**
     * Returns a list of prices for inventory item.
     * @param int $filter_item_no Aria assigned unique identifier indicating Client Inventory Item.
     * @param string $filter_currency_cd The 3-character ISO-compliant currency code in lowercase for monetary values used in the context of this API method.
     * @param string $return_no_cost_items A boolean value that asserts the API call should include no-cost items in its returned results (true/1=yes, false/0=no).
     * @return mixed[] array all_item_prices <br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_client_item_prices($filter_item_no, $filter_currency_cd = null, $return_no_cost_items = null)
    {
        return $this->__ws_call('get_client_item_prices', Array(
                'filter_item_no' => $filter_item_no,
                'filter_currency_cd' => $filter_currency_cd,
                'return_no_cost_items' => $return_no_cost_items
        ));
    }

    /**
     * Returns a list of supplemental fields for inventory item.
     * @param int $filter_item_no Aria assigned unique identifier indicating Client Inventory Item.
     * @return mixed[] array all_item_supp_fields <br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_client_item_supp_fields($filter_item_no)
    {
        return $this->__ws_call('get_client_item_supp_fields', Array(
                'filter_item_no' => $filter_item_no
        ));
    }

    /**
     * Returns a list of classes for inventory item.
     * @param int $filter_item_no Aria assigned unique identifier indicating Client Inventory Item.
     * @return mixed[] array all_item_classes <br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_client_item_classes($filter_item_no)
    {
        return $this->__ws_call('get_client_item_classes', Array(
                'filter_item_no' => $filter_item_no
        ));
    }

    /**
     * get an array of values for an array of input web replacement strings
     * @param array $web_vals_in 
     * @return mixed[] array web_vals_out <br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_web_replacement_vals($web_vals_in = null)
    {
        return $this->__ws_call('get_web_replacement_vals', Array(
                'web_vals_in' => $web_vals_in
        ));
    }

    /**
     * Returns a summary list of all plans associated with a client.
     * @param int $plan_no The unique plan identifier, if only one plan is desired.
     * @return mixed[] array plans_basic <br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_client_plans_basic($plan_no = null)
    {
        return $this->__ws_call('get_client_plans_basic', Array(
                'plan_no' => $plan_no
        ));
    }

    /**
     * Returns information about the rates for a particular service in a specified plan.
     * @param int $plan_no The unique plan identifier.
     * @return mixed[] array plan_services <br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_client_plan_services($plan_no)
    {
        return $this->__ws_call('get_client_plan_services', Array(
                'plan_no' => $plan_no
        ));
    }

    /**
     * Returns information about the rates for a particular service in a specified plan.
     * @param int $plan_no The unique plan identifier.
     * @param int $service_no Aria assigned unique service identifier
     * @param int $alt_rate_schedule_no Alternative Rate Schedule Number. The alt_rate_schedule_no is the unique identifier for an alternative rate schedule that can be assigned to the account holder in place of the default rate schedule. This is often done by CSR&#039;s to provide special compensation or discounts as incentives to account holders.
     * @return mixed[] array plan_service_rates Represents the rates for the default rate schedule for the default currency for the plan<br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_client_plan_service_rates($plan_no, $service_no, $alt_rate_schedule_no = null)
    {
        return $this->__ws_call('get_client_plan_service_rates', Array(
                'plan_no' => $plan_no,
                'service_no' => $service_no,
                'alt_rate_schedule_no' => $alt_rate_schedule_no
        ));
    }

    /**
     * Returns a list of countries and corresponding currencies assigned to a client.
     * @return mixed[] array client_country <br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_client_countries()
    {
        return $this->__ws_call('get_client_countries', Array(
                
        ));
    }

    /**
     * Subscribes a client to a specified event class.
     * @param int $class_no The class to assign to the client
     * @param string $do_write Boolean indicator informing Aria whether or not to actually perform the requested plan assignment/de-assignment. If &#039;false&#039; is passed in this field Aria will, if applicable, calculate any potential proration effect that would result from this call and return that value in the output field &#039;proration_result_amount&#039; described below without actually performing the requested operation or charging/crediting the account. This is useful to interfaces that wish to present the user with a &#039;confirmation page&#039; informing of the would-be effects of the requested operation prior to actually performing it.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array events An array of events returned from the successful completion of this API call
     */
    public function subscribe_event_class($class_no, $do_write = null)
    {
        return $this->__ws_call('subscribe_event_class', Array(
                'class_no' => $class_no,
                'do_write' => $do_write
        ));
    }

    /**
     * Unsubscribes a client from a specified event class.
     * @param int $class_no The event class number to unsubscribe from.
     * @param string $do_write Boolean indicator informing Aria whether or not to actually perform the requested plan assignment/de-assignment. If &#039;false&#039; is passed in this field Aria will, if applicable, calculate any potential proration effect that would result from this call and return that value in the output field &#039;proration_result_amount&#039; described below without actually performing the requested operation or charging/crediting the account. This is useful to interfaces that wish to present the user with a &#039;confirmation page&#039; informing of the would-be effects of the requested operation prior to actually performing it.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array events An Array of events being unsubscribed to.
     */
    public function unsubscribe_event_class($class_no, $do_write = null)
    {
        return $this->__ws_call('unsubscribe_event_class', Array(
                'class_no' => $class_no,
                'do_write' => $do_write
        ));
    }

    /**
     * Subscribes a client to a specified event notification. Please note: In order for this call to work, the client must already be subscribed to the event class to which the specified event belongs.
     * @param int $event_id The unique identifier for a given provisioning event.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function subscribe_event($event_id)
    {
        return $this->__ws_call('subscribe_event', Array(
                'event_id' => $event_id
        ));
    }

    /**
     * Unsubscribes a client from a specified event notification.
     * @param int $event_id The unique identifier for a given provisioning event.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function unsubscribe_event($event_id)
    {
        return $this->__ws_call('unsubscribe_event', Array(
                'event_id' => $event_id
        ));
    }

    /**
     * Subscribes a client to a specified group of event notifications. Please note: In order for this call to work, the client must already be subscribed to the event class to which the specified events belong.
     * @param array $event_list 
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function subscribe_events($event_list = null)
    {
        return $this->__ws_call('subscribe_events', Array(
                'event_list' => $event_list
        ));
    }

    /**
     * Unsubscribes a client from a group of specified event notifications.
     * @param array $event_list 
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function unsubscribe_events($event_list = null)
    {
        return $this->__ws_call('unsubscribe_events', Array(
                'event_list' => $event_list
        ));
    }

    /**
     * Indicates whether a client is subscribed to the specified event notification class.
     * @param int $class_no The event class to query of the superclass
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string response Array of events the client has subscribed to.
     */
    public function client_has_event_class($class_no)
    {
        return $this->__ws_call('client_has_event_class', Array(
                'class_no' => $class_no
        ));
    }

    /**
     * Generates a random string of letters and/or numbers.
     * @param string $rand_type Identifies what type of characters are returned in the random string. &quot;A&quot; = letters only. &quot;N&quot; = numbers only. &quot;M&quot; = mixed/alphanumeric (default).
     * @param int $rand_length Identifies how many characters should be in the random string.
     * @param string $rand_case Identifies the case of the letters returned in the random string. &quot;U&quot; = upper. &quot;L&quot; = lower. &quot;M&quot; = mixed (default).
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string random_string Random string generated by the API method.
     */
    public function gen_random_string($rand_type = null, $rand_length = null, $rand_case = null)
    {
        return $this->__ws_call('gen_random_string', Array(
                'rand_type' => $rand_type,
                'rand_length' => $rand_length,
                'rand_case' => $rand_case
        ));
    }

    /**
     * Returns a list of rate schedules associated with a specified plan. The plan&#039;s default rate schedule will always be the first rate schedule returned and the remaining rate schedules will be sorted by schedule number.
     * @param int $plan_no The unique plan identifier.
     * @param string $currency_cd The 3-character ISO-compliant currency code in lowercase for monetary values used in the context of this API method.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array rate_sched An array of the rate schedules for the requested plan
     */
    public function get_rate_schedules_for_plan($plan_no, $currency_cd = null)
    {
        return $this->__ws_call('get_rate_schedules_for_plan', Array(
                'plan_no' => $plan_no,
                'currency_cd' => $currency_cd
        ));
    }

    /**
     * Returns the current version number of the Aria platform.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string version The current system version.  Note that Aria system versions are store in a standard syntax by which major and minor versions are separated by a period or decimal point. Therefore, version 6.10 was released more than a year after version 6.2, despite 6.1 being less than 6.2.
     */
    public function get_current_system_version()
    {
        return $this->__ws_call('get_current_system_version', Array(
                
        ));
    }

    /**
     * Returns a list of all client receipt IDs entered as input parameters for any API  call to Aria.
     * @param string $start_date_range The start-date of the given date range.
     * @param string $end_date_range The end-date of the given date range
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array client_receipt 
     */
    public function get_all_client_receipt_ids($start_date_range = null, $end_date_range = null)
    {
        return $this->__ws_call('get_all_client_receipt_ids', Array(
                'start_date_range' => $start_date_range,
                'end_date_range' => $end_date_range
        ));
    }

    /**
     * Returns a list of inventory items associated with a client.
     * @param string $filter_currency_cd The 3-character ISO-compliant currency code in lowercase for monetary values used in the context of this API method.
     * @param string $return_no_cost_items A boolean value that asserts the API call should include no-cost items in its returned results (true/1=yes, false/0=no).
     * @param int $filter_item_no Aria assigned unique identifier indicating Client Inventory Item.
     * @param string $include_inactive_items Specifies whether inactive inventory items need to be included or not
     * @return mixed[] array items_basic <br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_client_items_basic($filter_currency_cd = null, $return_no_cost_items = null, $filter_item_no = null, $include_inactive_items = null)
    {
        return $this->__ws_call('get_client_items_basic', Array(
                'filter_currency_cd' => $filter_currency_cd,
                'return_no_cost_items' => $return_no_cost_items,
                'filter_item_no' => $filter_item_no,
                'include_inactive_items' => $include_inactive_items
        ));
    }

    /**
     * Returns the parameter name-value pairs for a specified session ID.
     * @param string $session_id Client-assigned identifier for the application session.
     * @return mixed[] array out_reg_uss_params <br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_reg_uss_params($session_id)
    {
        return $this->__ws_call('get_reg_uss_params', Array(
                'session_id' => $session_id
        ));
    }

    /**
     * Creates a configuration set that can be used to customize the functionality within a specified session of a registration or User Self Service application.
     * @param string $session_id Client-assigned identifier for the application session.
     * @param array $in_reg_uss_params 
     * @param int $override_timeout_minutes Number of minutes from current time until session expires
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function set_reg_uss_params($session_id, $in_reg_uss_params, $override_timeout_minutes = null)
    {
        return $this->__ws_call('set_reg_uss_params', Array(
                'session_id' => $session_id,
                'in_reg_uss_params' => $in_reg_uss_params,
                'override_timeout_minutes' => $override_timeout_minutes
        ));
    }

    /**
     * Removes the parameter name-value pairs in a particular session.
     * @param string $session_id Client-assigned identifier for the application session.
     * @param array $param_names 
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function delete_reg_uss_params($session_id, $param_names)
    {
        return $this->__ws_call('delete_reg_uss_params', Array(
                'session_id' => $session_id,
                'param_names' => $param_names
        ));
    }

    /**
     * Replaces the parameter name-value pairs in a particular configuration set with a specified set of new parameter name-value pairs.
     * @param string $session_id Client-assigned identifier for the application session.
     * @param array $in_reg_uss_params 
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function replace_reg_uss_params($session_id, $in_reg_uss_params)
    {
        return $this->__ws_call('replace_reg_uss_params', Array(
                'session_id' => $session_id,
                'in_reg_uss_params' => $in_reg_uss_params
        ));
    }

    /**
     * Removes all of the parameter name-value pairs associated with a particular session ID.
     * @param string $session_id Client-assigned identifier for the application session.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function clear_reg_uss_params($session_id)
    {
        return $this->__ws_call('clear_reg_uss_params', Array(
                'session_id' => $session_id
        ));
    }

    /**
     * Creates a configuration set that can be used to customize the global functionality of a registration or User Self Service application.
     * @param string $set_name Client-defined identifier for this set of global application configuration parameters.
     * @return mixed[] array out_reg_uss_config_params <br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_reg_uss_config_params($set_name)
    {
        return $this->__ws_call('get_reg_uss_config_params', Array(
                'set_name' => $set_name
        ));
    }

    /**
     * Creates a configuration set that can be used to customize the global functionality of a registration or User Self Service application.
     * @param string $set_name Client-defined identifier for this set of global application configuration parameters.
     * @param array $in_reg_uss_config_params 
     * @param string $set_description The description to be used for a newly-created set
     * @param int $set_type_no If creating a new set, the set type number, for determining if this is reg, USS, etc.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function set_reg_uss_config_params($set_name, $in_reg_uss_config_params, $set_description = null, $set_type_no = null)
    {
        return $this->__ws_call('set_reg_uss_config_params', Array(
                'set_name' => $set_name,
                'in_reg_uss_config_params' => $in_reg_uss_config_params,
                'set_description' => $set_description,
                'set_type_no' => $set_type_no
        ));
    }

    /**
     * Removes the parameter name-value pairs in a specified configuration set created using the set_reg_uss_config_params call.
     * @param string $set_name Client-defined identifier for this set of global application configuration parameters.
     * @param array $param_names 
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function delete_reg_uss_config_params($set_name, $param_names)
    {
        return $this->__ws_call('delete_reg_uss_config_params', Array(
                'set_name' => $set_name,
                'param_names' => $param_names
        ));
    }

    /**
     * Replaces the parameter name-value pairs in a particular configuration set with a specified set of new parameter name-value pairs.
     * @param string $set_name Client-defined identifier for this set of global application configuration parameters.
     * @param array $in_reg_uss_config_params 
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function replace_reg_uss_config_params($set_name, $in_reg_uss_config_params)
    {
        return $this->__ws_call('replace_reg_uss_config_params', Array(
                'set_name' => $set_name,
                'in_reg_uss_config_params' => $in_reg_uss_config_params
        ));
    }

    /**
     * Removes all of the parameter name-value pairs in a specified configuration set created using the set_reg_uss_config_params API call.
     * @param string $set_name Client-defined identifier for this set of global application configuration parameters.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function clear_reg_uss_config_params($set_name)
    {
        return $this->__ws_call('clear_reg_uss_config_params', Array(
                'set_name' => $set_name
        ));
    }

    /**
     * Updates the stock level of a particular inventory item.  Inventory item stock levels are returned by the APIs which fetch full client item details
     * @param array $inventory_item_stock 
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array new_inventory_item_stock 
     */
    public function update_inventory_item_stock($inventory_item_stock)
    {
        return $this->__ws_call('update_inventory_item_stock', Array(
                'inventory_item_stock' => $inventory_item_stock
        ));
    }

    /**
     * Returns a list of currencies assigned to a client.
     * @return mixed[] array client_currency <br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_client_currencies()
    {
        return $this->__ws_call('get_client_currencies', Array(
                
        ));
    }

    /**
     * Returns all images associated with a given inventory item
     * @param int $item_no The item number by which to search for images
     * @return mixed[] array item_images <br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_client_item_images($item_no)
    {
        return $this->__ws_call('get_client_item_images', Array(
                'item_no' => $item_no
        ));
    }

    /**
     * returns all the parent classes for that client
     * @return mixed[] array top_item_class <br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_top_level_item_class()
    {
        return $this->__ws_call('get_top_level_item_class', Array(
                
        ));
    }

    /**
     * returns the immediate parent classes for that client
     * @param int $filter_class_no An item class number to use to filter results.
     * @return mixed[] array parent_item_class <br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_parent_for_item_class($filter_class_no)
    {
        return $this->__ws_call('get_parent_for_item_class', Array(
                'filter_class_no' => $filter_class_no
        ));
    }

    /**
     * returns the immediate child classes for that client
     * @param int $filter_class_no An item class number to use to filter results.
     * @return mixed[] array child_item_class <br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_child_for_item_class($filter_class_no)
    {
        return $this->__ws_call('get_child_for_item_class', Array(
                'filter_class_no' => $filter_class_no
        ));
    }

    /**
     * returns the items for a given class
     * @param int $filter_class_no An item class number to use to filter results.
     * @return mixed[] array class_items <br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_items_by_class($filter_class_no)
    {
        return $this->__ws_call('get_items_by_class', Array(
                'filter_class_no' => $filter_class_no
        ));
    }

    /**
     * Returns the master plans associated with a particular value for a supplemental object field.
     * @param string $field_val The value of the supplemental field which all returned plans should possess
     * @param int $field_no The plan supplemental field number which is being searched against
     * @param string $field_name The optional name of this supplemental field, if the number is not known
     * @return mixed[] array master_plans_by_supp_field <br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_master_plans_by_supp_field($field_val, $field_no = null, $field_name = null)
    {
        return $this->__ws_call('get_master_plans_by_supp_field', Array(
                'field_val' => $field_val,
                'field_no' => $field_no,
                'field_name' => $field_name
        ));
    }

    /**
     * Returns a list of supplemental plans associated with a specified value for a supplemental object field.
     * @param string $field_val The value of the supplemental field which all returned plans should possess
     * @param int $field_no The plan supplemental field number which is being searched against
     * @param string $field_name The optional name of this supplemental field, if the number is not known
     * @return mixed[] array supp_plans_by_supp_field <br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_supp_plans_by_supp_field($field_val, $field_no = null, $field_name = null)
    {
        return $this->__ws_call('get_supp_plans_by_supp_field', Array(
                'field_val' => $field_val,
                'field_no' => $field_no,
                'field_name' => $field_name
        ));
    }

    /**
     * Returns the inventory items associated with a particular value for a supplemental object field.
     * @param string $field_val The value of the supplemental field which all returned plans should possess
     * @param int $field_no The plan supplemental field number which is being searched against
     * @param string $field_name The optional name of this supplemental field, if the number is not known
     * @return mixed[] array items_by_supp_field <br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_items_by_supp_field($field_val, $field_no = null, $field_name = null)
    {
        return $this->__ws_call('get_items_by_supp_field', Array(
                'field_val' => $field_val,
                'field_no' => $field_no,
                'field_name' => $field_name
        ));
    }

    /**
     * Returns the list of email templates associated with a client.
     * @return mixed[] array templates_by_client <br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_email_templates()
    {
        return $this->__ws_call('get_email_templates', Array(
                
        ));
    }

    /**
     * Returns the current virtual date, and virtual time for the given client, plus actual system date and system time, and the number of offset hours between the virtual and system date/time. In Production systems these values will have no offset/delta between them as virtual time is only supported in non-production systems.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string virtual_date The current virtual system date for the given client, in format YYYY-MM-DD (after application of input parameter &quot;offset_hours&quot;).<br>string virtual_time The current virtual system time for the given client, in format HH24:MI:SS (after application of input parameter &quot;offset_hours&quot;).<br>string system_date The current actual system date,in format YYYY-MM-DD.<br>string system_time The current actual system time,in format HH24:MI:SS.<br>int current_offset_hours The difference, in truncated hours, between the client&#039;s current virtual date/time and the actual system date/time. Will always be zero or a positive integer in non-production systems, and will always be a zero in production systems after application of input parameter &quot;offset_hours&quot;).<br>string is_batch_running Returns &quot;Y&quot; or &quot;N&quot; depending on if the batch jobs are running in the background.
     */
    public function get_virtual_datetime()
    {
        return $this->__ws_call('get_virtual_datetime', Array(
                
        ));
    }

    /**
     * Takes a number of hours by which to further advance virtual time for the given client, then returns the same output elements as &quot;get_virtual_datetime&quot;, as well as the new/current offset hours value AFTER application of the input offset hours value.  Use of this method in production systems will return an &quot;operation not allowed&quot; error as virtual time is only supported in non-production systems.
     * @param int $offset_hours The positive integer number of hours by which to advance the given client&#039;s current virtual time.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string virtual_date The current virtual system date for the given client, in format YYYY-MM-DD (after application of input parameter &quot;offset_hours&quot;).<br>string virtual_time The current virtual system time for the given client, in format HH24:MI:SS (after application of input parameter &quot;offset_hours&quot;).<br>string system_date The current actual system date,in format YYYY-MM-DD.<br>string system_time The current actual system time,in format HH24:MI:SS.<br>int current_offset_hours The difference, in truncated hours, between the client&#039;s current virtual date/time and the actual system date/time. Will always be zero or a positive integer in non-production systems, and will always be a zero in production systems after application of input parameter &quot;offset_hours&quot;).
     */
    public function advance_virtual_datetime($offset_hours)
    {
        return $this->__ws_call('advance_virtual_datetime', Array(
                'offset_hours' => $offset_hours
        ));
    }

    /**
     * Returns a string representing the current status of the daily batch processing job for the given client and date.
     * @param string $batch_date The (virtual) system date to be examined for current operational status of its daily batch jobs.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string status An upper-case string, from a list of allowable values, representing the current status of the daily batch process for the given input client and batch date.
     */
    public function get_daily_batch_status($batch_date)
    {
        return $this->__ws_call('get_daily_batch_status', Array(
                'batch_date' => $batch_date
        ));
    }

    /**
     * Sets an external system ID for an internal Aria data object
     * @param int $destination_id The external system identifier
     * @param int $source_type_id The type of Aria object being referenced
     * @param int $object_id The ID of the Aria object being referenced
     * @param string $external_id The external system ID being assigned
     * @param int $action_directive Either &quot;add&quot; or &quot;merge&quot;
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function set_external_object_id($destination_id, $source_type_id, $object_id, $external_id, $action_directive = null)
    {
        return $this->__ws_call('set_external_object_id', Array(
                'destination_id' => $destination_id,
                'source_type_id' => $source_type_id,
                'object_id' => $object_id,
                'external_id' => $external_id,
                'action_directive' => $action_directive
        ));
    }

    }
