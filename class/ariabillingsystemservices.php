<?php
/**
 * AriaBillingSystemServices.class.php
 * Web Service class 
 * 
 * @author    AriaAPI ClassDump generated file
 * @author    $Author: dmorfin $
 * @copyright Aria Systems, Inc
 * @version   $Rev: 4589 $ generated on Fri Nov  5 10:22:27 2010 
 * @id        $Id: ariabillingsystemservices.php 4589 2010-11-05 14:27:05Z dmorfin $
 */
  

/**
 * @package AriaBillingSystemServices * 
 */
class AriaBillingSystemServices extends BaseAriaBilling
{

    protected $__wsdl_name = 'system_services-doc_literal_wrapped.wsdl';
    protected $__wsdl_version = '5.7';


    /**
     * @method set_prov_engine 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function set_prov_engine( $on_off_indicator = NULL )
    {
        return $this->__ws_call( 'set_prov_engine', Array(
                'on_off_indicator' => $on_off_indicator,
            ) );
    }

    /**
     * @method get_auf_status 
     * @returns ( hash )  ( long ) "status_cd", ( string ) "load_date_time", ( long ) "recs_received", ( long ) "recs_loaded", ( long ) "recs_failed", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function get_auf_status( $file_name = NULL )
    {
        return $this->__ws_call( 'get_auf_status', Array(
                'file_name' => $file_name,
            ) );
    }

    /**
     * @method get_country_from_ip 
     * @returns ( hash )  ( string ) "country_code", ( string ) "country_name", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function get_country_from_ip( $ip_address = NULL )
    {
        return $this->__ws_call( 'get_country_from_ip', Array(
                'ip_address' => $ip_address,
            ) );
    }

    /**
     * @method get_client_plans 
     * @returns ( hash )  ( array ) "client_plans", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function get_client_plans(  )
    {
        return $this->__ws_call( 'get_client_plans', Array(
            ) );
    }

    /**
     * @method get_client_items 
     * @returns ( hash )  ( array ) "client_items", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function get_client_items( $in_currency_cd = NULL, $return_no_cost_items = NULL )
    {
        return $this->__ws_call( 'get_client_items', Array(
                'in_currency_cd' => $in_currency_cd,
                'return_no_cost_items' => $return_no_cost_items,
            ) );
    }

    /**
     * @method get_web_replacement_vals 
     * @returns ( hash )  ( array ) "web_vals_out", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function get_web_replacement_vals( $web_vals_in = NULL )
    {
        return $this->__ws_call( 'get_web_replacement_vals', Array(
                'web_vals_in' => $web_vals_in,
            ) );
    }

    /**
     * @method get_client_plans_all 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "all_client_plans", 
     */
    public function get_client_plans_all( $plan_no = NULL )
    {
        return $this->__ws_call( 'get_client_plans_all', Array(
                'plan_no' => $plan_no,
            ) );
    }

    /**
     * @method get_client_plans_basic 
     * @returns ( hash )  ( array ) "plans_basic", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function get_client_plans_basic( $plan_no = NULL )
    {
        return $this->__ws_call( 'get_client_plans_basic', Array(
                'plan_no' => $plan_no,
            ) );
    }

    /**
     * @method get_client_plan_services 
     * @returns ( hash )  ( array ) "plan_services", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function get_client_plan_services( $plan_no )
    {
        return $this->__ws_call( 'get_client_plan_services', Array(
                'plan_no' => $plan_no,
            ) );
    }

    /**
     * @method get_client_plan_service_rates 
     * @returns ( hash )  ( array ) "plan_service_rates", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function get_client_plan_service_rates( $plan_no, $service_no, $alt_rate_schedule_no = NULL )
    {
        return $this->__ws_call( 'get_client_plan_service_rates', Array(
                'plan_no' => $plan_no,
                'service_no' => $service_no,
                'alt_rate_schedule_no' => $alt_rate_schedule_no,
            ) );
    }

    /**
     * @method get_client_countries 
     * @returns ( hash )  ( array ) "client_country", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function get_client_countries(  )
    {
        return $this->__ws_call( 'get_client_countries', Array(
            ) );
    }

    /**
     * @method subscribe_event_class 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "events", 
     */
    public function subscribe_event_class( $class_no, $do_write = NULL )
    {
        return $this->__ws_call( 'subscribe_event_class', Array(
                'class_no' => $class_no,
                'do_write' => $do_write,
            ) );
    }

    /**
     * @method unsubscribe_event_class 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "events", 
     */
    public function unsubscribe_event_class( $class_no, $do_write = NULL )
    {
        return $this->__ws_call( 'unsubscribe_event_class', Array(
                'class_no' => $class_no,
                'do_write' => $do_write,
            ) );
    }

    /**
     * @method subscribe_event 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function subscribe_event( $event_id )
    {
        return $this->__ws_call( 'subscribe_event', Array(
                'event_id' => $event_id,
            ) );
    }

    /**
     * @method unsubscribe_event 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function unsubscribe_event( $event_id )
    {
        return $this->__ws_call( 'unsubscribe_event', Array(
                'event_id' => $event_id,
            ) );
    }

    /**
     * @method subscribe_events 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function subscribe_events( $event_list = NULL )
    {
        return $this->__ws_call( 'subscribe_events', Array(
                'event_list' => $event_list,
            ) );
    }

    /**
     * @method unsubscribe_events 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function unsubscribe_events( $event_list = NULL )
    {
        return $this->__ws_call( 'unsubscribe_events', Array(
                'event_list' => $event_list,
            ) );
    }

    /**
     * @method client_has_event_class 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( string ) "response", 
     */
    public function client_has_event_class( $class_no )
    {
        return $this->__ws_call( 'client_has_event_class', Array(
                'class_no' => $class_no,
            ) );
    }

    /**
     * @method gen_random_string 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( string ) "random_string", 
     */
    public function gen_random_string( $rand_type = NULL, $rand_length = NULL, $rand_case = NULL )
    {
        return $this->__ws_call( 'gen_random_string', Array(
                'rand_type' => $rand_type,
                'rand_length' => $rand_length,
                'rand_case' => $rand_case,
            ) );
    }

    /**
     * @method get_rate_schedules_for_plan 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "rate_sched", 
     */
    public function get_rate_schedules_for_plan( $plan_no )
    {
        return $this->__ws_call( 'get_rate_schedules_for_plan', Array(
                'plan_no' => $plan_no,
            ) );
    }

    /**
     * @method get_current_system_version 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( string ) "version", 
     */
    public function get_current_system_version(  )
    {
        return $this->__ws_call( 'get_current_system_version', Array(
            ) );
    }

    /**
     * @method get_all_client_receipt_ids 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "client_receipt", 
     */
    public function get_all_client_receipt_ids( $start_date_range = NULL, $end_date_range = NULL )
    {
        return $this->__ws_call( 'get_all_client_receipt_ids', Array(
                'start_date_range' => $start_date_range,
                'end_date_range' => $end_date_range,
            ) );
    }

    /**
     * @method get_reg_uss_params 
     * @returns ( hash )  ( array ) "out_reg_uss_params", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function get_reg_uss_params( $session_id )
    {
        return $this->__ws_call( 'get_reg_uss_params', Array(
                'session_id' => $session_id,
            ) );
    }

    /**
     * @method set_reg_uss_params 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function set_reg_uss_params( $session_id, $override_timeout_minutes = NULL, $in_reg_uss_params )
    {
        return $this->__ws_call( 'set_reg_uss_params', Array(
                'session_id' => $session_id,
                'override_timeout_minutes' => $override_timeout_minutes,
                'in_reg_uss_params' => $in_reg_uss_params,
            ) );
    }

    /**
     * @method get_reg_uss_config_params 
     * @returns ( hash )  ( array ) "out_reg_uss_config_params", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function get_reg_uss_config_params( $set_name )
    {
        return $this->__ws_call( 'get_reg_uss_config_params', Array(
                'set_name' => $set_name,
            ) );
    }

    /**
     * @method set_reg_uss_config_params 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function set_reg_uss_config_params( $set_name, $in_reg_uss_config_params )
    {
        return $this->__ws_call( 'set_reg_uss_config_params', Array(
                'set_name' => $set_name,
                'in_reg_uss_config_params' => $in_reg_uss_config_params,
            ) );
    }
}
