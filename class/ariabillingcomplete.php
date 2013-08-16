<?php
/**
 * AriaBillingComplete.class.php
 * Web Service class 
 * 
 * @author    AriaAPI ClassDump generated file
 * @author    $Author: rhenderson $
 * @copyright Aria Systems, Inc
 * @version   $Rev: 6008 $ generated on Thu May  5 09:29:11 2011 
 * @id        $Id: ariabillingcomplete.php 6008 2011-05-05 13:44:25Z rhenderson $
 */
  

/**
 * @package AriaBillingComplete * 
 */
class AriaBillingComplete extends BaseAriaBilling
{

    protected $__wsdl_name = 'complete-doc_literal_wrapped.wsdl';
    protected $__wsdl_version = '5.9';


    /**
     * @method get_inv_no_from_bal_xfer 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( long ) "invoice_no", ( long ) "acct_no", 
     */
    public function get_inv_no_from_bal_xfer( $transaction_id )
    {
        return $this->__ws_call( 'get_inv_no_from_bal_xfer', Array(
                'transaction_id' => $transaction_id,
            ) );
    }

    /**
     * @method void_transaction 
     * @returns ( hash )  ( long ) "new_transaction_id", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function void_transaction( $account_no, $transaction_id, $comments = NULL, $reason_code, $client_receipt_id = NULL )
    {
        return $this->__ws_call( 'void_transaction', Array(
                'account_no' => $account_no,
                'transaction_id' => $transaction_id,
                'comments' => $comments,
                'reason_code' => $reason_code,
                'client_receipt_id' => $client_receipt_id,
            ) );
    }

    /**
     * @method reinstate_transaction 
     * @returns ( hash )  ( long ) "new_transaction_id", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function reinstate_transaction( $account_no, $transaction_id, $comments = NULL )
    {
        return $this->__ws_call( 'reinstate_transaction', Array(
                'account_no' => $account_no,
                'transaction_id' => $transaction_id,
                'comments' => $comments,
            ) );
    }

    /**
     * @method transfer_account_balance 
     * @returns ( hash )  ( long ) "transaction_id", ( double ) "balance_transferred", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function transfer_account_balance( $source_account_no, $target_account_no )
    {
        return $this->__ws_call( 'transfer_account_balance', Array(
                'source_account_no' => $source_account_no,
                'target_account_no' => $target_account_no,
            ) );
    }

    /**
     * @method create_order 
     * @returns ( hash )  ( long ) "order_no", ( long ) "transaction_id", ( long ) "statement_error_cd", ( string ) "statement_error_msg", ( string ) "proc_cvv_response", ( string ) "proc_avs_response", ( string ) "proc_cavv_response", ( string ) "proc_status_code", ( string ) "proc_status_text", ( string ) "proc_payment_id", ( string ) "proc_auth_code", ( string ) "proc_merch_comments", ( long ) "invoice_no", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function create_order( $account_no, $order_line_items = NULL, $bill_immediately, $bill_seq = NULL, $client_order_id = NULL, $client_receipt_id = NULL, $alt_pay_method = NULL, $cc_number = NULL, $cc_expire_mm = NULL, $cc_expire_yyyy = NULL, $bank_routing_num = NULL, $bank_acct_num = NULL, $bill_company_name = NULL, $bill_first_name = NULL, $bill_middle_initial = NULL, $bill_last_name = NULL, $bill_address1 = NULL, $bill_address2 = NULL, $bill_city = NULL, $bill_locality = NULL, $bill_state_prov = NULL, $bill_zip = NULL, $bill_country = NULL, $bill_email = NULL, $bill_phone = NULL, $bill_phone_extension = NULL, $bill_cell_phone = NULL, $bill_work_phone = NULL, $bill_work_phone_extension = NULL, $cvv = NULL )
    {
        return $this->__ws_call( 'create_order', Array(
                'account_no' => $account_no,
                'order_line_items' => $order_line_items,
                'bill_immediately' => $bill_immediately,
                'bill_seq' => $bill_seq,
                'client_order_id' => $client_order_id,
                'client_receipt_id' => $client_receipt_id,
                'alt_pay_method' => $alt_pay_method,
                'cc_number' => $cc_number,
                'cc_expire_mm' => $cc_expire_mm,
                'cc_expire_yyyy' => $cc_expire_yyyy,
                'bank_routing_num' => $bank_routing_num,
                'bank_acct_num' => $bank_acct_num,
                'bill_company_name' => $bill_company_name,
                'bill_first_name' => $bill_first_name,
                'bill_middle_initial' => $bill_middle_initial,
                'bill_last_name' => $bill_last_name,
                'bill_address1' => $bill_address1,
                'bill_address2' => $bill_address2,
                'bill_city' => $bill_city,
                'bill_locality' => $bill_locality,
                'bill_state_prov' => $bill_state_prov,
                'bill_zip' => $bill_zip,
                'bill_country' => $bill_country,
                'bill_email' => $bill_email,
                'bill_phone' => $bill_phone,
                'bill_phone_extension' => $bill_phone_extension,
                'bill_cell_phone' => $bill_cell_phone,
                'bill_work_phone' => $bill_work_phone,
                'bill_work_phone_extension' => $bill_work_phone_extension,
                'cvv' => $cvv,
            ) );
    }

    /**
     * @method settle_account_balance 
     * @returns ( hash )  ( long ) "transaction_id", ( string ) "proc_cvv_response", ( string ) "proc_avs_response", ( string ) "proc_cavv_response", ( string ) "proc_status_code", ( string ) "proc_status_text", ( string ) "proc_payment_id", ( string ) "proc_auth_code", ( string ) "proc_merch_comments", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function settle_account_balance( $account_no, $alt_pay_method = NULL, $cc_number = NULL, $cc_expire_mm = NULL, $cc_expire_yyyy = NULL, $bank_routing_num = NULL, $bank_acct_num = NULL, $bill_company_name = NULL, $bill_first_name = NULL, $bill_middle_initial = NULL, $bill_last_name = NULL, $bill_address1 = NULL, $bill_address2 = NULL, $bill_city = NULL, $bill_locality = NULL, $bill_state_prov = NULL, $bill_zip = NULL, $bill_country = NULL, $bill_email = NULL, $bill_phone = NULL, $bill_phone_extension = NULL, $bill_cell_phone = NULL, $bill_work_phone = NULL, $bill_work_phone_extension = NULL, $cvv = NULL )
    {
        return $this->__ws_call( 'settle_account_balance', Array(
                'account_no' => $account_no,
                'alt_pay_method' => $alt_pay_method,
                'cc_number' => $cc_number,
                'cc_expire_mm' => $cc_expire_mm,
                'cc_expire_yyyy' => $cc_expire_yyyy,
                'bank_routing_num' => $bank_routing_num,
                'bank_acct_num' => $bank_acct_num,
                'bill_company_name' => $bill_company_name,
                'bill_first_name' => $bill_first_name,
                'bill_middle_initial' => $bill_middle_initial,
                'bill_last_name' => $bill_last_name,
                'bill_address1' => $bill_address1,
                'bill_address2' => $bill_address2,
                'bill_city' => $bill_city,
                'bill_locality' => $bill_locality,
                'bill_state_prov' => $bill_state_prov,
                'bill_zip' => $bill_zip,
                'bill_country' => $bill_country,
                'bill_email' => $bill_email,
                'bill_phone' => $bill_phone,
                'bill_phone_extension' => $bill_phone_extension,
                'bill_cell_phone' => $bill_cell_phone,
                'bill_work_phone' => $bill_work_phone,
                'bill_work_phone_extension' => $bill_work_phone_extension,
                'cvv' => $cvv,
            ) );
    }

    /**
     * @method collect_from_account 
     * @returns ( hash )  ( long ) "transaction_id", ( string ) "proc_cvv_response", ( string ) "proc_avs_response", ( string ) "proc_cavv_response", ( string ) "proc_status_code", ( string ) "proc_status_text", ( string ) "proc_payment_id", ( string ) "proc_auth_code", ( string ) "proc_merch_comments", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function collect_from_account( $account_no, $amount_to_collect, $bill_seq = NULL, $client_receipt_id = NULL, $specific_charge_transaction_id = NULL, $alt_pay_method = NULL, $cc_number = NULL, $cc_expire_mm = NULL, $cc_expire_yyyy = NULL, $bank_routing_num = NULL, $bank_acct_num = NULL, $bill_company_name = NULL, $bill_first_name = NULL, $bill_middle_initial = NULL, $bill_last_name = NULL, $bill_address1 = NULL, $bill_address2 = NULL, $bill_city = NULL, $bill_locality = NULL, $bill_state_prov = NULL, $bill_zip = NULL, $bill_country = NULL, $bill_email = NULL, $bill_phone = NULL, $bill_phone_extension = NULL, $bill_cell_phone = NULL, $bill_work_phone = NULL, $bill_work_phone_extension = NULL, $cvv = NULL )
    {
        return $this->__ws_call( 'collect_from_account', Array(
                'account_no' => $account_no,
                'amount_to_collect' => $amount_to_collect,
                'bill_seq' => $bill_seq,
                'client_receipt_id' => $client_receipt_id,
                'specific_charge_transaction_id' => $specific_charge_transaction_id,
                'alt_pay_method' => $alt_pay_method,
                'cc_number' => $cc_number,
                'cc_expire_mm' => $cc_expire_mm,
                'cc_expire_yyyy' => $cc_expire_yyyy,
                'bank_routing_num' => $bank_routing_num,
                'bank_acct_num' => $bank_acct_num,
                'bill_company_name' => $bill_company_name,
                'bill_first_name' => $bill_first_name,
                'bill_middle_initial' => $bill_middle_initial,
                'bill_last_name' => $bill_last_name,
                'bill_address1' => $bill_address1,
                'bill_address2' => $bill_address2,
                'bill_city' => $bill_city,
                'bill_locality' => $bill_locality,
                'bill_state_prov' => $bill_state_prov,
                'bill_zip' => $bill_zip,
                'bill_country' => $bill_country,
                'bill_email' => $bill_email,
                'bill_phone' => $bill_phone,
                'bill_phone_extension' => $bill_phone_extension,
                'bill_cell_phone' => $bill_cell_phone,
                'bill_work_phone' => $bill_work_phone,
                'bill_work_phone_extension' => $bill_work_phone_extension,
                'cvv' => $cvv,
            ) );
    }

    /**
     * @method record_external_payment 
     * @returns ( hash )  ( long ) "transaction_id", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function record_external_payment( $account_no, $reference_code = NULL, $payment_amount, $comments = NULL, $client_receipt_id = NULL, $specific_charge_transaction_id = NULL )
    {
        return $this->__ws_call( 'record_external_payment', Array(
                'account_no' => $account_no,
                'reference_code' => $reference_code,
                'payment_amount' => $payment_amount,
                'comments' => $comments,
                'client_receipt_id' => $client_receipt_id,
                'specific_charge_transaction_id' => $specific_charge_transaction_id,
            ) );
    }

    /**
     * @method record_out_going_payment 
     * @returns ( hash )  ( long ) "transaction_id", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function record_out_going_payment( $account_no, $reference_code = NULL, $payment_amount, $comments = NULL )
    {
        return $this->__ws_call( 'record_out_going_payment', Array(
                'account_no' => $account_no,
                'reference_code' => $reference_code,
                'payment_amount' => $payment_amount,
                'comments' => $comments,
            ) );
    }

    /**
     * @method apply_service_credit 
     * @returns ( hash )  ( long ) "credit_id", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function apply_service_credit( $account_no, $credit_amount, $comments = NULL, $credit_reason_code )
    {
        return $this->__ws_call( 'apply_service_credit', Array(
                'account_no' => $account_no,
                'credit_amount' => $credit_amount,
                'comments' => $comments,
                'credit_reason_code' => $credit_reason_code,
            ) );
    }

    /**
     * @method apply_cash_credit 
     * @returns ( hash )  ( long ) "transaction_id", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function apply_cash_credit( $account_no, $credit_amount, $comments = NULL, $credit_reason_code )
    {
        return $this->__ws_call( 'apply_cash_credit', Array(
                'account_no' => $account_no,
                'credit_amount' => $credit_amount,
                'comments' => $comments,
                'credit_reason_code' => $credit_reason_code,
            ) );
    }

    /**
     * @method record_standing_order 
     * @returns ( hash )  ( long ) "standing_order_no", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function record_standing_order( $account_no, $billing_interval_type = NULL, $billing_interval_units, $times_to_bill, $first_bill_date = NULL, $standing_order = NULL, $client_order_id = NULL, $client_receipt_id = NULL )
    {
        return $this->__ws_call( 'record_standing_order', Array(
                'account_no' => $account_no,
                'billing_interval_type' => $billing_interval_type,
                'billing_interval_units' => $billing_interval_units,
                'times_to_bill' => $times_to_bill,
                'first_bill_date' => $first_bill_date,
                'standing_order' => $standing_order,
                'client_order_id' => $client_order_id,
                'client_receipt_id' => $client_receipt_id,
            ) );
    }

    /**
     * @method cancel_standing_order 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function cancel_standing_order( $standing_order_no )
    {
        return $this->__ws_call( 'cancel_standing_order', Array(
                'standing_order_no' => $standing_order_no,
            ) );
    }

    /**
     * @method record_usage 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( long ) "usage_rec_no", 
     */
    public function record_usage( $acct_no = NULL, $userid = NULL, $usage_type, $usage_units, $usage_date = NULL, $billable_units = NULL, $amt = NULL, $rate = NULL, $telco_from = NULL, $telco_to = NULL, $comments = NULL, $exclude_from_billing = NULL, $exclusion_comments = NULL, $qualifier_1 = NULL, $qualifier_2 = NULL, $qualifier_3 = NULL, $qualifier_4 = NULL )
    {
        return $this->__ws_call( 'record_usage', Array(
                'acct_no' => $acct_no,
                'userid' => $userid,
                'usage_type' => $usage_type,
                'usage_units' => $usage_units,
                'usage_date' => $usage_date,
                'billable_units' => $billable_units,
                'amt' => $amt,
                'rate' => $rate,
                'telco_from' => $telco_from,
                'telco_to' => $telco_to,
                'comments' => $comments,
                'exclude_from_billing' => $exclude_from_billing,
                'exclusion_comments' => $exclusion_comments,
                'qualifier_1' => $qualifier_1,
                'qualifier_2' => $qualifier_2,
                'qualifier_3' => $qualifier_3,
                'qualifier_4' => $qualifier_4,
            ) );
    }

    /**
     * @method get_order 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "order", 
     */
    public function get_order( $acct_no, $my_order_no = NULL, $my_client_order_id = NULL )
    {
        return $this->__ws_call( 'get_order', Array(
                'acct_no' => $acct_no,
                'my_order_no' => $my_order_no,
                'my_client_order_id' => $my_client_order_id,
            ) );
    }

    /**
     * @method get_standing_order 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "so", 
     */
    public function get_standing_order( $acct_no, $my_standing_order = NULL, $my_client_order_id = NULL )
    {
        return $this->__ws_call( 'get_standing_order', Array(
                'acct_no' => $acct_no,
                'my_standing_order' => $my_standing_order,
                'my_client_order_id' => $my_client_order_id,
            ) );
    }

    /**
     * @method get_standing_order_items 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "so_items", 
     */
    public function get_standing_order_items( $standing_order_no )
    {
        return $this->__ws_call( 'get_standing_order_items', Array(
                'standing_order_no' => $standing_order_no,
            ) );
    }

    /**
     * @method get_standing_order_hist 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "order", 
     */
    public function get_standing_order_hist( $standing_order_no )
    {
        return $this->__ws_call( 'get_standing_order_hist', Array(
                'standing_order_no' => $standing_order_no,
            ) );
    }

    /**
     * @method pre_calc_invoice 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "inv_calc_out", 
     */
    public function pre_calc_invoice( $log_id = NULL, $first_name = NULL, $mi = NULL, $last_name = NULL, $address1 = NULL, $address2 = NULL, $city = NULL, $state_prov_code = NULL, $zip_code = NULL, $country_code = NULL, $currency_code = NULL, $pre_calc_plan = NULL, $pre_calc_sku = NULL, $tax_exempt_cd = NULL )
    {
        return $this->__ws_call( 'pre_calc_invoice', Array(
                'log_id' => $log_id,
                'first_name' => $first_name,
                'mi' => $mi,
                'last_name' => $last_name,
                'address1' => $address1,
                'address2' => $address2,
                'city' => $city,
                'state_prov_code' => $state_prov_code,
                'zip_code' => $zip_code,
                'country_code' => $country_code,
                'currency_code' => $currency_code,
                'pre_calc_plan' => $pre_calc_plan,
                'pre_calc_sku' => $pre_calc_sku,
                'tax_exempt_cd' => $tax_exempt_cd,
            ) );
    }

    /**
     * @method get_order_items 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "order_items", 
     */
    public function get_order_items( $order_no )
    {
        return $this->__ws_call( 'get_order_items', Array(
                'order_no' => $order_no,
            ) );
    }

    /**
     * @method gen_invoice 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( long ) "invoice_no", 
     */
    public function gen_invoice( $acct_no, $force_pending = NULL, $client_receipt_id = NULL, $alt_bill_day = NULL )
    {
        return $this->__ws_call( 'gen_invoice', Array(
                'acct_no' => $acct_no,
                'force_pending' => $force_pending,
                'client_receipt_id' => $client_receipt_id,
                'alt_bill_day' => $alt_bill_day,
            ) );
    }

    /**
     * @method get_statement_for_invoice 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( string ) "out_statement", ( string ) "mime_type", 
     */
    public function get_statement_for_invoice( $acct_no, $invoice_no, $do_encoding = NULL )
    {
        return $this->__ws_call( 'get_statement_for_invoice', Array(
                'acct_no' => $acct_no,
                'invoice_no' => $invoice_no,
                'do_encoding' => $do_encoding,
            ) );
    }

    /**
     * @method get_statement_for_inv_size 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( long ) "num_chars", 
     */
    public function get_statement_for_inv_size( $acct_no, $invoice_no, $do_encoding = NULL )
    {
        return $this->__ws_call( 'get_statement_for_inv_size', Array(
                'acct_no' => $acct_no,
                'invoice_no' => $invoice_no,
                'do_encoding' => $do_encoding,
            ) );
    }

    /**
     * @method get_invoice_details 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "invoice_line_items", ( long ) "is_pending_ind", 
     */
    public function get_invoice_details( $acct_no, $src_transaction_id )
    {
        return $this->__ws_call( 'get_invoice_details', Array(
                'acct_no' => $acct_no,
                'src_transaction_id' => $src_transaction_id,
            ) );
    }

    /**
     * @method get_payments_on_invoice 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "invoice_payments", 
     */
    public function get_payments_on_invoice( $acct_no, $src_transaction_id = NULL )
    {
        return $this->__ws_call( 'get_payments_on_invoice', Array(
                'acct_no' => $acct_no,
                'src_transaction_id' => $src_transaction_id,
            ) );
    }

    /**
     * @method get_payment_applications 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "payment_applications", 
     */
    public function get_payment_applications( $acct_no, $src_transaction_id = NULL )
    {
        return $this->__ws_call( 'get_payment_applications', Array(
                'acct_no' => $acct_no,
                'src_transaction_id' => $src_transaction_id,
            ) );
    }

    /**
     * @method get_all_actions_by_receipt_id 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "receipt_action", 
     */
    public function get_all_actions_by_receipt_id( $acct_no, $client_receipt_id = NULL )
    {
        return $this->__ws_call( 'get_all_actions_by_receipt_id', Array(
                'acct_no' => $acct_no,
                'client_receipt_id' => $client_receipt_id,
            ) );
    }

    /**
     * @method manage_pending_invoice 
     * @returns ( hash )  ( long ) "new_invoice_no", ( long ) "collection_error_code", ( string ) "collection_error_msg", ( long ) "statement_error_code", ( string ) "statement_error_msg", ( string ) "proc_cvv_response", ( string ) "proc_avs_response", ( string ) "proc_cavv_response", ( string ) "proc_status_code", ( string ) "proc_status_text", ( string ) "proc_payment_id", ( string ) "proc_auth_code", ( string ) "proc_merch_comments", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function manage_pending_invoice( $invoice_no = NULL, $acct_no = NULL, $action_directive = NULL, $bill_seq = NULL, $alt_pay_method = NULL, $cc_number = NULL, $cc_expire_mm = NULL, $cc_expire_yyyy = NULL, $bank_routing_num = NULL, $bank_acct_num = NULL, $bill_company_name = NULL, $bill_first_name = NULL, $bill_middle_initial = NULL, $bill_last_name = NULL, $bill_address1 = NULL, $bill_address2 = NULL, $bill_city = NULL, $bill_locality = NULL, $bill_state_prov = NULL, $bill_zip = NULL, $bill_country = NULL, $bill_email = NULL, $bill_phone = NULL, $bill_phone_extension = NULL, $bill_cell_phone = NULL, $bill_work_phone = NULL, $bill_work_phone_extension = NULL, $cvv = NULL, $alt_collect_on_approve = NULL, $alt_send_statement_on_approve = NULL, $cancel_orders_on_discard = NULL )
    {
        return $this->__ws_call( 'manage_pending_invoice', Array(
                'invoice_no' => $invoice_no,
                'acct_no' => $acct_no,
                'action_directive' => $action_directive,
                'bill_seq' => $bill_seq,
                'alt_pay_method' => $alt_pay_method,
                'cc_number' => $cc_number,
                'cc_expire_mm' => $cc_expire_mm,
                'cc_expire_yyyy' => $cc_expire_yyyy,
                'bank_routing_num' => $bank_routing_num,
                'bank_acct_num' => $bank_acct_num,
                'bill_company_name' => $bill_company_name,
                'bill_first_name' => $bill_first_name,
                'bill_middle_initial' => $bill_middle_initial,
                'bill_last_name' => $bill_last_name,
                'bill_address1' => $bill_address1,
                'bill_address2' => $bill_address2,
                'bill_city' => $bill_city,
                'bill_locality' => $bill_locality,
                'bill_state_prov' => $bill_state_prov,
                'bill_zip' => $bill_zip,
                'bill_country' => $bill_country,
                'bill_email' => $bill_email,
                'bill_phone' => $bill_phone,
                'bill_phone_extension' => $bill_phone_extension,
                'bill_cell_phone' => $bill_cell_phone,
                'bill_work_phone' => $bill_work_phone,
                'bill_work_phone_extension' => $bill_work_phone_extension,
                'cvv' => $cvv,
                'alt_collect_on_approve' => $alt_collect_on_approve,
                'alt_send_statement_on_approve' => $alt_send_statement_on_approve,
                'cancel_orders_on_discard' => $cancel_orders_on_discard,
            ) );
    }

    /**
     * @method cancel_order 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function cancel_order( $acct_no, $order_no )
    {
        return $this->__ws_call( 'cancel_order', Array(
                'acct_no' => $acct_no,
                'order_no' => $order_no,
            ) );
    }

    /**
     * @method get_refund_details 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "refund_details", 
     */
    public function get_refund_details( $acct_no, $include_voided = NULL )
    {
        return $this->__ws_call( 'get_refund_details', Array(
                'acct_no' => $acct_no,
                'include_voided' => $include_voided,
            ) );
    }

    /**
     * @method create_account 
     * @returns ( hash )  ( long ) "account_no", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function create_account( $plan_no, $userid = NULL, $password = NULL, $status_cd, $promo_cd = NULL, $alt_rate_schedule_no = NULL, $client_receipt_id = NULL, $currency_cd = NULL )
    {
        return $this->__ws_call( 'create_account', Array(
                'plan_no' => $plan_no,
                'userid' => $userid,
                'password' => $password,
                'status_cd' => $status_cd,
                'promo_cd' => $promo_cd,
                'alt_rate_schedule_no' => $alt_rate_schedule_no,
                'client_receipt_id' => $client_receipt_id,
                'currency_cd' => $currency_cd,
            ) );
    }

    /**
     * @method update_acct_contact 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function update_acct_contact( $account_no, $first_name = NULL, $last_name = NULL, $mi = NULL, $company_name = NULL, $address1 = NULL, $address2 = NULL, $city = NULL, $locality = NULL, $state_prov = NULL, $country = NULL, $postal_code = NULL, $intl_phone = NULL, $alt_email = NULL, $birthdate = NULL )
    {
        return $this->__ws_call( 'update_acct_contact', Array(
                'account_no' => $account_no,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'mi' => $mi,
                'company_name' => $company_name,
                'address1' => $address1,
                'address2' => $address2,
                'city' => $city,
                'locality' => $locality,
                'state_prov' => $state_prov,
                'country' => $country,
                'postal_code' => $postal_code,
                'intl_phone' => $intl_phone,
                'alt_email' => $alt_email,
                'birthdate' => $birthdate,
            ) );
    }

    /**
     * @method update_acct_credentials 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function update_acct_credentials( $account_no, $password = NULL, $secret_question_answer = NULL, $secret_question = NULL, $pin = NULL )
    {
        return $this->__ws_call( 'update_acct_credentials', Array(
                'account_no' => $account_no,
                'password' => $password,
                'secret_question_answer' => $secret_question_answer,
                'secret_question' => $secret_question,
                'pin' => $pin,
            ) );
    }

    /**
     * @method update_acct_status 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function update_acct_status( $account_no, $status_cd, $queue_days = NULL, $queue_date = NULL, $force_bill_date_reset = NULL, $comments = NULL, $client_receipt_id = NULL, $alt_do_dunning = NULL )
    {
        return $this->__ws_call( 'update_acct_status', Array(
                'account_no' => $account_no,
                'status_cd' => $status_cd,
                'queue_days' => $queue_days,
                'queue_date' => $queue_date,
                'force_bill_date_reset' => $force_bill_date_reset,
                'comments' => $comments,
                'client_receipt_id' => $client_receipt_id,
                'alt_do_dunning' => $alt_do_dunning,
            ) );
    }

    /**
     * @method update_acct_supp_fields 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function update_acct_supp_fields( $account_no, $field_name = NULL, $value_text = NULL )
    {
        return $this->__ws_call( 'update_acct_supp_fields', Array(
                'account_no' => $account_no,
                'field_name' => $field_name,
                'value_text' => $value_text,
            ) );
    }

    /**
     * @method update_acct_billing_contact 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( long ) "collection_error_code", ( string ) "collection_error_msg", ( string ) "proc_cvv_response", ( string ) "proc_avs_response", ( string ) "proc_cavv_response", ( string ) "proc_status_code", ( string ) "proc_status_text", ( string ) "proc_payment_id", ( string ) "proc_auth_code", ( string ) "proc_merch_comments", 
     */
    public function update_acct_billing_contact( $account_no, $first_name = NULL, $last_name = NULL, $middle_initial = NULL, $company_name = NULL, $address1 = NULL, $address2 = NULL, $city = NULL, $locality = NULL, $state = NULL, $country = NULL, $zip = NULL, $intl_phone = NULL, $email = NULL, $do_collect = NULL, $change_status_after_coll = NULL, $reset_dates_after_status = NULL )
    {
        return $this->__ws_call( 'update_acct_billing_contact', Array(
                'account_no' => $account_no,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'middle_initial' => $middle_initial,
                'company_name' => $company_name,
                'address1' => $address1,
                'address2' => $address2,
                'city' => $city,
                'locality' => $locality,
                'state' => $state,
                'country' => $country,
                'zip' => $zip,
                'intl_phone' => $intl_phone,
                'email' => $email,
                'do_collect' => $do_collect,
                'change_status_after_coll' => $change_status_after_coll,
                'reset_dates_after_status' => $reset_dates_after_status,
            ) );
    }

    /**
     * @method update_acct_notify_method 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function update_acct_notify_method( $account_no, $notify_method )
    {
        return $this->__ws_call( 'update_acct_notify_method', Array(
                'account_no' => $account_no,
                'notify_method' => $notify_method,
            ) );
    }

    /**
     * @method get_acct_notify_method 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( long ) "notify_method", ( string ) "notify_method_name", 
     */
    public function get_acct_notify_method( $account_no )
    {
        return $this->__ws_call( 'get_acct_notify_method', Array(
                'account_no' => $account_no,
            ) );
    }

    /**
     * @method set_pay_method_bank_draft 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( long ) "collection_error_code", ( string ) "collection_error_msg", ( string ) "proc_cvv_response", ( string ) "proc_avs_response", ( string ) "proc_cavv_response", ( string ) "proc_status_code", ( string ) "proc_status_text", ( string ) "proc_payment_id", ( string ) "proc_auth_code", ( string ) "proc_merch_comments", 
     */
    public function set_pay_method_bank_draft( $account_no, $bank_routing_num = NULL, $bank_acct_num = NULL, $do_collect = NULL, $change_status_after_coll = NULL, $reset_dates_after_status = NULL )
    {
        return $this->__ws_call( 'set_pay_method_bank_draft', Array(
                'account_no' => $account_no,
                'bank_routing_num' => $bank_routing_num,
                'bank_acct_num' => $bank_acct_num,
                'do_collect' => $do_collect,
                'change_status_after_coll' => $change_status_after_coll,
                'reset_dates_after_status' => $reset_dates_after_status,
            ) );
    }

    /**
     * @method set_pay_method_cc 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( long ) "collection_error_code", ( string ) "collection_error_msg", ( string ) "proc_cvv_response", ( string ) "proc_avs_response", ( string ) "proc_cavv_response", ( string ) "proc_status_code", ( string ) "proc_status_text", ( string ) "proc_payment_id", ( string ) "proc_auth_code", ( string ) "proc_merch_comments", 
     */
    public function set_pay_method_cc( $account_no, $cc_number = NULL, $cc_expire_mm, $cc_expire_yyyy, $do_collect = NULL, $change_status_after_coll = NULL, $reset_dates_after_status = NULL )
    {
        return $this->__ws_call( 'set_pay_method_cc', Array(
                'account_no' => $account_no,
                'cc_number' => $cc_number,
                'cc_expire_mm' => $cc_expire_mm,
                'cc_expire_yyyy' => $cc_expire_yyyy,
                'do_collect' => $do_collect,
                'change_status_after_coll' => $change_status_after_coll,
                'reset_dates_after_status' => $reset_dates_after_status,
            ) );
    }

    /**
     * @method set_pay_method_net_terms 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function set_pay_method_net_terms( $account_no, $pay_method )
    {
        return $this->__ws_call( 'set_pay_method_net_terms', Array(
                'account_no' => $account_no,
                'pay_method' => $pay_method,
            ) );
    }

    /**
     * @method set_payment_responsibility 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function set_payment_responsibility( $account_no, $resp_level_cd = NULL, $senior_account_no = NULL )
    {
        return $this->__ws_call( 'set_payment_responsibility', Array(
                'account_no' => $account_no,
                'resp_level_cd' => $resp_level_cd,
                'senior_account_no' => $senior_account_no,
            ) );
    }

    /**
     * @method set_service_plan 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function set_service_plan( $account_no, $plan_no, $client_receipt_id = NULL )
    {
        return $this->__ws_call( 'set_service_plan', Array(
                'account_no' => $account_no,
                'plan_no' => $plan_no,
                'client_receipt_id' => $client_receipt_id,
            ) );
    }

    /**
     * @method set_service_plan_immediately 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function set_service_plan_immediately( $account_no, $plan_no, $client_receipt_id = NULL )
    {
        return $this->__ws_call( 'set_service_plan_immediately', Array(
                'account_no' => $account_no,
                'plan_no' => $plan_no,
                'client_receipt_id' => $client_receipt_id,
            ) );
    }

    /**
     * @method set_service_plan_number 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function set_service_plan_number( $account_no, $plan_no )
    {
        return $this->__ws_call( 'set_service_plan_number', Array(
                'account_no' => $account_no,
                'plan_no' => $plan_no,
            ) );
    }

    /**
     * @method activate_supp_plan 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function activate_supp_plan( $account_no, $supp_plan_no, $status_cd )
    {
        return $this->__ws_call( 'activate_supp_plan', Array(
                'account_no' => $account_no,
                'supp_plan_no' => $supp_plan_no,
                'status_cd' => $status_cd,
            ) );
    }

    /**
     * @method toggle_test_account 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function toggle_test_account( $account_no, $test_acct_ind = NULL )
    {
        return $this->__ws_call( 'toggle_test_account', Array(
                'account_no' => $account_no,
                'test_acct_ind' => $test_acct_ind,
            ) );
    }

    /**
     * @method validate_payment_information 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( string ) "proc_cvv_response", ( string ) "proc_avs_response", ( string ) "proc_cavv_response", ( string ) "proc_status_code", ( string ) "proc_status_text", ( string ) "proc_payment_id", ( string ) "proc_auth_code", ( string ) "proc_merch_comments", 
     */
    public function validate_payment_information( $account_no = NULL, $CVV = NULL, $seq_no = NULL, $inTrackingNumber = NULL, $inAuthValue = NULL, $alt_pay_method = NULL, $cc_number = NULL, $cc_expire_mm = NULL, $cc_expire_yyyy = NULL, $bill_company_name = NULL, $bill_first_name = NULL, $bill_middle_initial = NULL, $bill_last_name = NULL, $bill_address1 = NULL, $bill_address2 = NULL, $bill_city = NULL, $bill_locality = NULL, $bill_state_prov = NULL, $bill_zip = NULL, $bill_country = NULL, $bill_email = NULL, $bill_phone = NULL, $bill_phone_extension = NULL, $bill_cell_phone = NULL, $bill_work_phone = NULL, $bill_work_phone_extension = NULL, $currency_cd = NULL, $acct_group_no = NULL )
    {
        return $this->__ws_call( 'validate_payment_information', Array(
                'account_no' => $account_no,
                'CVV' => $CVV,
                'seq_no' => $seq_no,
                'inTrackingNumber' => $inTrackingNumber,
                'inAuthValue' => $inAuthValue,
                'alt_pay_method' => $alt_pay_method,
                'cc_number' => $cc_number,
                'cc_expire_mm' => $cc_expire_mm,
                'cc_expire_yyyy' => $cc_expire_yyyy,
                'bill_company_name' => $bill_company_name,
                'bill_first_name' => $bill_first_name,
                'bill_middle_initial' => $bill_middle_initial,
                'bill_last_name' => $bill_last_name,
                'bill_address1' => $bill_address1,
                'bill_address2' => $bill_address2,
                'bill_city' => $bill_city,
                'bill_locality' => $bill_locality,
                'bill_state_prov' => $bill_state_prov,
                'bill_zip' => $bill_zip,
                'bill_country' => $bill_country,
                'bill_email' => $bill_email,
                'bill_phone' => $bill_phone,
                'bill_phone_extension' => $bill_phone_extension,
                'bill_cell_phone' => $bill_cell_phone,
                'bill_work_phone' => $bill_work_phone,
                'bill_work_phone_extension' => $bill_work_phone_extension,
                'currency_cd' => $currency_cd,
                'acct_group_no' => $acct_group_no,
            ) );
    }

    /**
     * @method ban_acct 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function ban_acct( $account_no = NULL, $userid = NULL, $days_to_restore = NULL, $date_to_restore = NULL, $reason_cd = NULL, $comments = NULL )
    {
        return $this->__ws_call( 'ban_acct', Array(
                'account_no' => $account_no,
                'userid' => $userid,
                'days_to_restore' => $days_to_restore,
                'date_to_restore' => $date_to_restore,
                'reason_cd' => $reason_cd,
                'comments' => $comments,
            ) );
    }

    /**
     * @method get_acct_trans_history 
     * @returns ( hash )  ( array ) "history", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function get_acct_trans_history( $account_no, $transaction_type = NULL, $start_date = NULL, $end_date = NULL, $record_limit = NULL, $filter_statement_no = NULL )
    {
        return $this->__ws_call( 'get_acct_trans_history', Array(
                'account_no' => $account_no,
                'transaction_type' => $transaction_type,
                'start_date' => $start_date,
                'end_date' => $end_date,
                'record_limit' => $record_limit,
                'filter_statement_no' => $filter_statement_no,
            ) );
    }

    /**
     * @method get_payment_methods 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "pay_methods", 
     */
    public function get_payment_methods( $account_no, $seq_no = NULL )
    {
        return $this->__ws_call( 'get_payment_methods', Array(
                'account_no' => $account_no,
                'seq_no' => $seq_no,
            ) );
    }

    /**
     * @method update_payment_method 
     * @returns ( hash )  ( long ) "seq_no", ( long ) "error_code", ( string ) "error_msg", ( long ) "collection_error_code", ( string ) "collection_error_msg", ( string ) "proc_cvv_response", ( string ) "proc_avs_response", ( string ) "proc_cavv_response", ( string ) "proc_status_code", ( string ) "proc_status_text", ( string ) "proc_payment_id", ( string ) "proc_auth_code", ( string ) "proc_merch_comments", 
     */
    public function update_payment_method( $account_number, $first_name = NULL, $last_name = NULL, $middle_initial = NULL, $company_name = NULL, $address1 = NULL, $address2 = NULL, $city = NULL, $locality = NULL, $state = NULL, $country = NULL, $zip = NULL, $intl_phone = NULL, $phone_npa = NULL, $phone_nxx = NULL, $phone_suffix = NULL, $phone_extension = NULL, $email = NULL, $pay_method = NULL, $cc_number = NULL, $cc_expire_mm = NULL, $cc_expire_yyyy = NULL, $bank_routing_num = NULL, $bank_acct_num = NULL, $do_collect = NULL, $change_status_after_coll = NULL, $reset_dates_after_status = NULL, $client_receipt_id = NULL )
    {
        return $this->__ws_call( 'update_payment_method', Array(
                'account_number' => $account_number,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'middle_initial' => $middle_initial,
                'company_name' => $company_name,
                'address1' => $address1,
                'address2' => $address2,
                'city' => $city,
                'locality' => $locality,
                'state' => $state,
                'country' => $country,
                'zip' => $zip,
                'intl_phone' => $intl_phone,
                'phone_npa' => $phone_npa,
                'phone_nxx' => $phone_nxx,
                'phone_suffix' => $phone_suffix,
                'phone_extension' => $phone_extension,
                'email' => $email,
                'pay_method' => $pay_method,
                'cc_number' => $cc_number,
                'cc_expire_mm' => $cc_expire_mm,
                'cc_expire_yyyy' => $cc_expire_yyyy,
                'bank_routing_num' => $bank_routing_num,
                'bank_acct_num' => $bank_acct_num,
                'do_collect' => $do_collect,
                'change_status_after_coll' => $change_status_after_coll,
                'reset_dates_after_status' => $reset_dates_after_status,
                'client_receipt_id' => $client_receipt_id,
            ) );
    }

    /**
     * @method authorize_electronic_payment 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( string ) "proc_cvv_response", ( string ) "proc_avs_response", ( string ) "proc_cavv_response", ( string ) "proc_status_code", ( string ) "proc_status_text", ( string ) "proc_payment_id", ( string ) "proc_auth_code", ( string ) "proc_merch_comments", 
     */
    public function authorize_electronic_payment( $account_number, $amount, $payment_source = NULL, $CVV = NULL, $bill_seq = NULL, $inTrackingNumber = NULL, $inAuthValue = NULL )
    {
        return $this->__ws_call( 'authorize_electronic_payment', Array(
                'account_number' => $account_number,
                'amount' => $amount,
                'payment_source' => $payment_source,
                'CVV' => $CVV,
                'bill_seq' => $bill_seq,
                'inTrackingNumber' => $inTrackingNumber,
                'inAuthValue' => $inAuthValue,
            ) );
    }

    /**
     * @method get_queued_service_plans 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "queued_plans", ( long ) "current_rate_schedule_no", 
     */
    public function get_queued_service_plans( $account_number )
    {
        return $this->__ws_call( 'get_queued_service_plans', Array(
                'account_number' => $account_number,
            ) );
    }

    /**
     * @method cancel_queued_service_plan 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function cancel_queued_service_plan( $account_number )
    {
        return $this->__ws_call( 'cancel_queued_service_plan', Array(
                'account_number' => $account_number,
            ) );
    }

    /**
     * @method get_acct_status_history 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "stat_hist", 
     */
    public function get_acct_status_history( $account_number )
    {
        return $this->__ws_call( 'get_acct_status_history', Array(
                'account_number' => $account_number,
            ) );
    }

    /**
     * @method get_acct_plan_history 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "plan_hist", 
     */
    public function get_acct_plan_history( $account_number )
    {
        return $this->__ws_call( 'get_acct_plan_history', Array(
                'account_number' => $account_number,
            ) );
    }

    /**
     * @method get_acct_supp_plan_history 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "supp_plan_hist", 
     */
    public function get_acct_supp_plan_history( $acct_no, $plan_no = NULL )
    {
        return $this->__ws_call( 'get_acct_supp_plan_history', Array(
                'acct_no' => $acct_no,
                'plan_no' => $plan_no,
            ) );
    }

    /**
     * @method get_available_plans 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "plans", 
     */
    public function get_available_plans( $acct_no )
    {
        return $this->__ws_call( 'get_available_plans', Array(
                'acct_no' => $acct_no,
            ) );
    }

    /**
     * @method get_available_plans_all 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "all_plans", 
     */
    public function get_available_plans_all( $acct_no )
    {
        return $this->__ws_call( 'get_available_plans_all', Array(
                'acct_no' => $acct_no,
            ) );
    }

    /**
     * @method get_plans_by_promo_code 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "plans", 
     */
    public function get_plans_by_promo_code( $promo_code = NULL )
    {
        return $this->__ws_call( 'get_plans_by_promo_code', Array(
                'promo_code' => $promo_code,
            ) );
    }

    /**
     * @method get_plans_by_promo_code_all 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "all_plans", 
     */
    public function get_plans_by_promo_code_all( $promo_code = NULL )
    {
        return $this->__ws_call( 'get_plans_by_promo_code_all', Array(
                'promo_code' => $promo_code,
            ) );
    }

    /**
     * @method get_acct_details_all 
     * @returns ( hash )  ( string ) "first_name", ( string ) "mi", ( string ) "last_name", ( string ) "userid", ( string ) "birthdate", ( string ) "job_title", ( string ) "salutation", ( string ) "senior_acct_no", ( string ) "client_acct_id", ( string ) "resp_level_cd", ( string ) "is_test_acct", ( string ) "alt_email", ( string ) "address1", ( string ) "address2", ( string ) "city", ( string ) "state_prov", ( string ) "locality", ( string ) "postal_code", ( string ) "country", ( string ) "company_name", ( string ) "cell_phone_npa", ( string ) "cell_phone_nxx", ( string ) "cell_phone_suffix", ( string ) "fax_phone", ( string ) "intl_cell_phone", ( string ) "intl_phone", ( string ) "phone_extension", ( string ) "phone_npa", ( string ) "phone_nxx", ( string ) "phone_suffix", ( string ) "work_phone_extension", ( string ) "work_phone_npa", ( string ) "work_phone_nxx", ( string ) "work_phone_suffix", ( string ) "bill_day", ( string ) "created", ( string ) "date_to_expire", ( string ) "date_to_suspend", ( string ) "last_arrears_bill_thru_date", ( string ) "last_bill_date", ( string ) "last_bill_thru_date", ( string ) "next_bill_date", ( string ) "plan_date", ( string ) "status_date", ( string ) "status_degrade_date", ( string ) "status_cd", ( string ) "status_label", ( string ) "plan_no", ( string ) "plan_name", ( string ) "plan_units", ( string ) "notify_method", ( string ) "notify_method_name", ( string ) "PASSWORD", ( string ) "pin", ( string ) "secret_question", ( string ) "secret_question_answer", ( string ) "pay_method", ( string ) "pay_method_name", ( string ) "currency_cd", ( string ) "tax_id", ( string ) "billing_email", ( string ) "billing_first_name", ( string ) "billing_middle_initial", ( string ) "billing_last_name", ( string ) "billing_address1", ( string ) "billing_address2", ( string ) "billing_city", ( string ) "billing_state", ( string ) "billing_locality", ( string ) "billing_zip", ( string ) "billing_country", ( string ) "cc_suffix", ( string ) "cc_expire_mm", ( string ) "cc_expire_yyyy", ( string ) "cc_id", ( string ) "bank_acct_suffix", ( string ) "bank_routing_no", ( string ) "billing_cell_phone_npa", ( string ) "billing_cell_phone_nxx", ( string ) "billing_cell_phone_suffix", ( string ) "billing_company_name", ( string ) "billing_intl_phone", ( string ) "billing_phone_extension", ( string ) "billing_phone_npa", ( string ) "billing_phone_nxx", ( string ) "billing_phone_suffix", ( string ) "billing_work_phone_extension", ( string ) "billing_work_phone_npa", ( string ) "billing_work_phone_nxx", ( string ) "billing_work_phone_suffix", ( string ) "balance", ( string ) "acct_create_client_receipt_id", ( string ) "plan_client_receipt_id", ( string ) "status_client_receipt_id", ( string ) "taxpayer_id", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function get_acct_details_all( $acct_no )
    {
        return $this->__ws_call( 'get_acct_details_all', Array(
                'acct_no' => $acct_no,
            ) );
    }

    /**
     * @method get_child_accts 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "child_accts", 
     */
    public function get_child_accts( $parent_acct_no, $do_multi_level = NULL )
    {
        return $this->__ws_call( 'get_child_accts', Array(
                'parent_acct_no' => $parent_acct_no,
                'do_multi_level' => $do_multi_level,
            ) );
    }

    /**
     * @method get_family_trans_history 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "fam_trans", 
     */
    public function get_family_trans_history( $parent_acct_no, $do_multi_level = NULL, $trans_type = NULL, $start_date = NULL, $end_date = NULL, $record_limit = NULL )
    {
        return $this->__ws_call( 'get_family_trans_history', Array(
                'parent_acct_no' => $parent_acct_no,
                'do_multi_level' => $do_multi_level,
                'trans_type' => $trans_type,
                'start_date' => $start_date,
                'end_date' => $end_date,
                'record_limit' => $record_limit,
            ) );
    }

    /**
     * @method create_order_with_plans 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( long ) "order_no", ( long ) "invoice_no", ( array ) "cart_invoice_line_items", ( long ) "collection_error_code", ( string ) "collection_error_msg", ( long ) "statement_error_code", ( string ) "statement_error_msg", ( long ) "transaction_id", ( string ) "proc_cvv_response", ( string ) "proc_avs_response", ( string ) "proc_cavv_response", ( string ) "proc_status_code", ( string ) "proc_status_text", ( string ) "proc_payment_id", ( string ) "proc_auth_code", ( string ) "proc_merch_comments", 
     */
    public function create_order_with_plans( $acct_no, $order_line_items = NULL, $cart_supp_plans = NULL, $client_order_id = NULL, $coupon_code = NULL, $comments = NULL, $do_write = NULL, $client_receipt_id = NULL, $bill_seq = NULL, $alt_pay_method = NULL, $cc_number = NULL, $cc_expire_mm = NULL, $cc_expire_yyyy = NULL, $bank_routing_num = NULL, $bank_acct_num = NULL, $bill_company_name = NULL, $bill_first_name = NULL, $bill_middle_initial = NULL, $bill_last_name = NULL, $bill_address1 = NULL, $bill_address2 = NULL, $bill_city = NULL, $bill_locality = NULL, $bill_state_prov = NULL, $bill_zip = NULL, $bill_country = NULL, $bill_email = NULL, $bill_phone = NULL, $bill_phone_extension = NULL, $bill_cell_phone = NULL, $bill_work_phone = NULL, $bill_work_phone_extension = NULL, $cvv = NULL )
    {
        return $this->__ws_call( 'create_order_with_plans', Array(
                'acct_no' => $acct_no,
                'order_line_items' => $order_line_items,
                'cart_supp_plans' => $cart_supp_plans,
                'client_order_id' => $client_order_id,
                'coupon_code' => $coupon_code,
                'comments' => $comments,
                'do_write' => $do_write,
                'client_receipt_id' => $client_receipt_id,
                'bill_seq' => $bill_seq,
                'alt_pay_method' => $alt_pay_method,
                'cc_number' => $cc_number,
                'cc_expire_mm' => $cc_expire_mm,
                'cc_expire_yyyy' => $cc_expire_yyyy,
                'bank_routing_num' => $bank_routing_num,
                'bank_acct_num' => $bank_acct_num,
                'bill_company_name' => $bill_company_name,
                'bill_first_name' => $bill_first_name,
                'bill_middle_initial' => $bill_middle_initial,
                'bill_last_name' => $bill_last_name,
                'bill_address1' => $bill_address1,
                'bill_address2' => $bill_address2,
                'bill_city' => $bill_city,
                'bill_locality' => $bill_locality,
                'bill_state_prov' => $bill_state_prov,
                'bill_zip' => $bill_zip,
                'bill_country' => $bill_country,
                'bill_email' => $bill_email,
                'bill_phone' => $bill_phone,
                'bill_phone_extension' => $bill_phone_extension,
                'bill_cell_phone' => $bill_cell_phone,
                'bill_work_phone' => $bill_work_phone,
                'bill_work_phone_extension' => $bill_work_phone_extension,
                'cvv' => $cvv,
            ) );
    }

    /**
     * @method update_existing_billing_info 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( long ) "collection_error_code", ( string ) "collection_error_msg", ( string ) "proc_cvv_response", ( string ) "proc_avs_response", ( string ) "proc_cavv_response", ( string ) "proc_status_code", ( string ) "proc_status_text", ( string ) "proc_payment_id", ( string ) "proc_auth_code", ( string ) "proc_merch_comments", 
     */
    public function update_existing_billing_info( $acct_no, $seq_no = NULL, $address1 = NULL, $address2 = NULL, $city = NULL, $state = NULL, $zip = NULL, $country = NULL, $cc_expire_mm = NULL, $cc_expire_yyyy = NULL, $phone_npa = NULL, $phone_nxx = NULL, $phone_suffix = NULL, $phone_ext = NULL, $phone_country_cd = NULL, $intl_phone = NULL, $email = NULL, $locality = NULL, $cell_phone_npa = NULL, $cell_phone_nxx = NULL, $cell_phone_suffix = NULL, $work_phone_npa = NULL, $work_phone_nxx = NULL, $work_phone_suffix = NULL, $work_phone_ext = NULL, $do_collect = NULL, $change_status_after_coll = NULL, $reset_dates_after_status = NULL )
    {
        return $this->__ws_call( 'update_existing_billing_info', Array(
                'acct_no' => $acct_no,
                'seq_no' => $seq_no,
                'address1' => $address1,
                'address2' => $address2,
                'city' => $city,
                'state' => $state,
                'zip' => $zip,
                'country' => $country,
                'cc_expire_mm' => $cc_expire_mm,
                'cc_expire_yyyy' => $cc_expire_yyyy,
                'phone_npa' => $phone_npa,
                'phone_nxx' => $phone_nxx,
                'phone_suffix' => $phone_suffix,
                'phone_ext' => $phone_ext,
                'phone_country_cd' => $phone_country_cd,
                'intl_phone' => $intl_phone,
                'email' => $email,
                'locality' => $locality,
                'cell_phone_npa' => $cell_phone_npa,
                'cell_phone_nxx' => $cell_phone_nxx,
                'cell_phone_suffix' => $cell_phone_suffix,
                'work_phone_npa' => $work_phone_npa,
                'work_phone_nxx' => $work_phone_nxx,
                'work_phone_suffix' => $work_phone_suffix,
                'work_phone_ext' => $work_phone_ext,
                'do_collect' => $do_collect,
                'change_status_after_coll' => $change_status_after_coll,
                'reset_dates_after_status' => $reset_dates_after_status,
            ) );
    }

    /**
     * @method send_acct_email 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function send_acct_email( $user_id = NULL, $template_class = NULL, $template_no = NULL, $client_receipt_id = NULL )
    {
        return $this->__ws_call( 'send_acct_email', Array(
                'user_id' => $user_id,
                'template_class' => $template_class,
                'template_no' => $template_no,
                'client_receipt_id' => $client_receipt_id,
            ) );
    }

    /**
     * @method userid_exists 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function userid_exists( $user_id = NULL )
    {
        return $this->__ws_call( 'userid_exists', Array(
                'user_id' => $user_id,
            ) );
    }

    /**
     * @method userid_is_available 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function userid_is_available( $user_id = NULL )
    {
        return $this->__ws_call( 'userid_is_available', Array(
                'user_id' => $user_id,
            ) );
    }

    /**
     * @method get_standing_usage 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "su", 
     */
    public function get_standing_usage( $acct_no )
    {
        return $this->__ws_call( 'get_standing_usage', Array(
                'acct_no' => $acct_no,
            ) );
    }

    /**
     * @method record_standing_usage 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function record_standing_usage( $acct_no, $usage_type = NULL, $usage_units = NULL, $next_usage_date = NULL, $alt_desc = NULL, $plan_no = NULL, $first_usage_date = NULL, $recurring_ind = NULL )
    {
        return $this->__ws_call( 'record_standing_usage', Array(
                'acct_no' => $acct_no,
                'usage_type' => $usage_type,
                'usage_units' => $usage_units,
                'next_usage_date' => $next_usage_date,
                'alt_desc' => $alt_desc,
                'plan_no' => $plan_no,
                'first_usage_date' => $first_usage_date,
                'recurring_ind' => $recurring_ind,
            ) );
    }

    /**
     * @method disable_standing_usage 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function disable_standing_usage( $acct_no, $standing_usage_rec_no, $comments = NULL )
    {
        return $this->__ws_call( 'disable_standing_usage', Array(
                'acct_no' => $acct_no,
                'standing_usage_rec_no' => $standing_usage_rec_no,
                'comments' => $comments,
            ) );
    }

    /**
     * @method disable_standing_usage_by_plan 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function disable_standing_usage_by_plan( $acct_no, $plan_no, $comments = NULL )
    {
        return $this->__ws_call( 'disable_standing_usage_by_plan', Array(
                'acct_no' => $acct_no,
                'plan_no' => $plan_no,
                'comments' => $comments,
            ) );
    }

    /**
     * @method disable_all_standing_usage 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function disable_all_standing_usage( $acct_no, $comments = NULL )
    {
        return $this->__ws_call( 'disable_all_standing_usage', Array(
                'acct_no' => $acct_no,
                'comments' => $comments,
            ) );
    }

    /**
     * @method get_acct_plans 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "acct_plans", 
     */
    public function get_acct_plans( $acct_no )
    {
        return $this->__ws_call( 'get_acct_plans', Array(
                'acct_no' => $acct_no,
            ) );
    }

    /**
     * @method get_acct_plans_all 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "all_acct_plans", 
     */
    public function get_acct_plans_all( $acct_no )
    {
        return $this->__ws_call( 'get_acct_plans_all', Array(
                'acct_no' => $acct_no,
            ) );
    }

    /**
     * @method get_acct_supp_fields 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "supp_fields", 
     */
    public function get_acct_supp_fields( $acct_no )
    {
        return $this->__ws_call( 'get_acct_supp_fields', Array(
                'acct_no' => $acct_no,
            ) );
    }

    /**
     * @method get_supp_field_values 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "supp_field_values", 
     */
    public function get_supp_field_values( $acct_no, $field_name = NULL )
    {
        return $this->__ws_call( 'get_supp_field_values', Array(
                'acct_no' => $acct_no,
                'field_name' => $field_name,
            ) );
    }

    /**
     * @method get_supp_plans_by_promo_code 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "plans", 
     */
    public function get_supp_plans_by_promo_code( $promo_code = NULL )
    {
        return $this->__ws_call( 'get_supp_plans_by_promo_code', Array(
                'promo_code' => $promo_code,
            ) );
    }

    /**
     * @method get_supp_plans_by_promo_code_all 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "all_plans", 
     */
    public function get_supp_plans_by_promo_code_all( $promo_code = NULL )
    {
        return $this->__ws_call( 'get_supp_plans_by_promo_code_all', Array(
                'promo_code' => $promo_code,
            ) );
    }

    /**
     * @method assign_supp_plan 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( double ) "proration_result_amount", ( long ) "invoice_no", 
     */
    public function assign_supp_plan( $acct_no, $supp_plan_no, $alt_rate_schedule_no = NULL, $num_plan_units = NULL, $coupon_code = NULL, $assignment_directive = NULL, $comments = NULL, $do_write = NULL, $client_receipt_id = NULL, $contract_type_no = NULL, $contract_alt_recur_fee = NULL, $contract_length_months = NULL, $contract_cancel_fee = NULL, $contract_comments = NULL, $contract_start_date = NULL, $offset_months = NULL, $auto_offset_months_option = NULL )
    {
        return $this->__ws_call( 'assign_supp_plan', Array(
                'acct_no' => $acct_no,
                'supp_plan_no' => $supp_plan_no,
                'alt_rate_schedule_no' => $alt_rate_schedule_no,
                'num_plan_units' => $num_plan_units,
                'coupon_code' => $coupon_code,
                'assignment_directive' => $assignment_directive,
                'comments' => $comments,
                'do_write' => $do_write,
                'client_receipt_id' => $client_receipt_id,
                'contract_type_no' => $contract_type_no,
                'contract_alt_recur_fee' => $contract_alt_recur_fee,
                'contract_length_months' => $contract_length_months,
                'contract_cancel_fee' => $contract_cancel_fee,
                'contract_comments' => $contract_comments,
                'contract_start_date' => $contract_start_date,
                'offset_months' => $offset_months,
                'auto_offset_months_option' => $auto_offset_months_option,
            ) );
    }

    /**
     * @method cancel_supp_plan 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( double ) "proration_result_amount", ( long ) "invoice_no", 
     */
    public function cancel_supp_plan( $acct_no, $supp_plan_no, $assignment_directive = NULL, $comments = NULL, $do_write = NULL, $client_receipt_id = NULL )
    {
        return $this->__ws_call( 'cancel_supp_plan', Array(
                'acct_no' => $acct_no,
                'supp_plan_no' => $supp_plan_no,
                'assignment_directive' => $assignment_directive,
                'comments' => $comments,
                'do_write' => $do_write,
                'client_receipt_id' => $client_receipt_id,
            ) );
    }

    /**
     * @method modify_supp_plan 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( double ) "proration_result_amount", ( long ) "invoice_no", 
     */
    public function modify_supp_plan( $acct_no, $supp_plan_no, $alt_rate_schedule_no = NULL, $num_plan_units = NULL, $coupon_code = NULL, $assignment_directive = NULL, $comments = NULL, $do_write = NULL, $client_receipt_id = NULL )
    {
        return $this->__ws_call( 'modify_supp_plan', Array(
                'acct_no' => $acct_no,
                'supp_plan_no' => $supp_plan_no,
                'alt_rate_schedule_no' => $alt_rate_schedule_no,
                'num_plan_units' => $num_plan_units,
                'coupon_code' => $coupon_code,
                'assignment_directive' => $assignment_directive,
                'comments' => $comments,
                'do_write' => $do_write,
                'client_receipt_id' => $client_receipt_id,
            ) );
    }

    /**
     * @method replace_supp_plan 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( double ) "proration_result_amount", ( long ) "invoice_no", 
     */
    public function replace_supp_plan( $acct_no, $existing_supp_plan_no, $new_supp_plan_no, $alt_rate_schedule_no = NULL, $num_plan_units = NULL, $coupon_code = NULL, $assignment_directive = NULL, $comments = NULL, $do_write = NULL, $client_receipt_id = NULL, $offset_months = NULL, $auto_offset_months_option = NULL )
    {
        return $this->__ws_call( 'replace_supp_plan', Array(
                'acct_no' => $acct_no,
                'existing_supp_plan_no' => $existing_supp_plan_no,
                'new_supp_plan_no' => $new_supp_plan_no,
                'alt_rate_schedule_no' => $alt_rate_schedule_no,
                'num_plan_units' => $num_plan_units,
                'coupon_code' => $coupon_code,
                'assignment_directive' => $assignment_directive,
                'comments' => $comments,
                'do_write' => $do_write,
                'client_receipt_id' => $client_receipt_id,
                'offset_months' => $offset_months,
                'auto_offset_months_option' => $auto_offset_months_option,
            ) );
    }

    /**
     * @method get_avail_child_plans_for_plan 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "plans", 
     */
    public function get_avail_child_plans_for_plan( $in_plan_no )
    {
        return $this->__ws_call( 'get_avail_child_plans_for_plan', Array(
                'in_plan_no' => $in_plan_no,
            ) );
    }

    /**
     * @method get_avail_child_plans_for_plan_all 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "all_plans", 
     */
    public function get_avail_child_plans_for_plan_all( $in_plan_no )
    {
        return $this->__ws_call( 'get_avail_child_plans_for_plan_all', Array(
                'in_plan_no' => $in_plan_no,
            ) );
    }

    /**
     * @method get_avail_child_plans_for_acct 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "plans", 
     */
    public function get_avail_child_plans_for_acct( $acct_no )
    {
        return $this->__ws_call( 'get_avail_child_plans_for_acct', Array(
                'acct_no' => $acct_no,
            ) );
    }

    /**
     * @method get_avail_child_plans_for_acct_all 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "all_plans", 
     */
    public function get_avail_child_plans_for_acct_all( $acct_no )
    {
        return $this->__ws_call( 'get_avail_child_plans_for_acct_all', Array(
                'acct_no' => $acct_no,
            ) );
    }

    /**
     * @method get_acct_groups_by_client 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "acct_groups", 
     */
    public function get_acct_groups_by_client(  )
    {
        return $this->__ws_call( 'get_acct_groups_by_client', Array(
            ) );
    }

    /**
     * @method get_acct_groups_by_acct 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "acct_groups", 
     */
    public function get_acct_groups_by_acct( $acct_no = NULL, $user_id = NULL )
    {
        return $this->__ws_call( 'get_acct_groups_by_acct', Array(
                'acct_no' => $acct_no,
                'user_id' => $user_id,
            ) );
    }

    /**
     * @method assign_functional_acct_group 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function assign_functional_acct_group( $acct_no, $group_no )
    {
        return $this->__ws_call( 'assign_functional_acct_group', Array(
                'acct_no' => $acct_no,
                'group_no' => $group_no,
            ) );
    }

    /**
     * @method assign_collections_acct_group 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function assign_collections_acct_group( $acct_no, $group_no )
    {
        return $this->__ws_call( 'assign_collections_acct_group', Array(
                'acct_no' => $acct_no,
                'group_no' => $group_no,
            ) );
    }

    /**
     * @method remove_acct_from_group 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function remove_acct_from_group( $acct_no, $group_no )
    {
        return $this->__ws_call( 'remove_acct_from_group', Array(
                'acct_no' => $acct_no,
                'group_no' => $group_no,
            ) );
    }

    /**
     * @method create_acct_complete 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( long ) "acct_no", ( string ) "out_userid", ( long ) "invoicing_error_code", ( string ) "invoicing_error_msg", ( long ) "invoice_no", ( string ) "proc_cvv_response", ( string ) "proc_avs_response", ( string ) "proc_cavv_response", ( string ) "proc_status_code", ( string ) "proc_status_text", ( string ) "proc_payment_id", ( string ) "proc_auth_code", ( string ) "proc_merch_comments", 
     */
    public function create_acct_complete( $alt_start_date = NULL, $client_acct_id = NULL, $userid = NULL, $status_cd = NULL, $master_plan_no, $master_plan_units = NULL, $supp_plans = NULL, $supp_plan_units = NULL, $notify_method = NULL, $promo_cd = NULL, $password = NULL, $secret_question = NULL, $secret_question_answer = NULL, $first_name = NULL, $mi = NULL, $last_name = NULL, $company_name = NULL, $address1 = NULL, $address2 = NULL, $city = NULL, $locality = NULL, $state_prov = NULL, $country = NULL, $postal_cd = NULL, $phone = NULL, $phone_ext = NULL, $cell_phone = NULL, $work_phone = NULL, $work_phone_ext = NULL, $email = NULL, $birthdate = NULL, $bill_first_name = NULL, $bill_mi = NULL, $bill_last_name = NULL, $bill_company_name = NULL, $bill_address1 = NULL, $bill_address2 = NULL, $bill_city = NULL, $bill_locality = NULL, $bill_state_prov = NULL, $bill_country = NULL, $bill_postal_cd = NULL, $bill_phone = NULL, $bill_phone_ext = NULL, $bill_cell_phone = NULL, $bill_work_phone = NULL, $bill_work_phone_ext = NULL, $bill_email = NULL, $pay_method = NULL, $cc_number = NULL, $cc_expire_mm = NULL, $cc_expire_yyyy = NULL, $bank_acct_no = NULL, $bank_routing_no = NULL, $resp_level_cd = NULL, $senior_acct_no = NULL, $functional_acct_groups = NULL, $collections_acct_groups = NULL, $supp_field_names = NULL, $supp_field_values = NULL, $test_acct_ind = NULL, $status_until_alt_start = NULL, $balance_forward = NULL, $alt_bill_day = NULL, $do_full_invoicing = NULL, $do_prorated_invoicing = NULL, $master_plan_alt_rate_sched_no = NULL, $supp_plan_alt_rate_sched_no = NULL, $client_receipt_id = NULL, $currency_cd = NULL, $cvv = NULL, $taxpayer_id = NULL, $bill_agreement_id = NULL, $retroactive_start_date = NULL )
    {
        return $this->__ws_call( 'create_acct_complete', Array(
                'alt_start_date' => $alt_start_date,
                'client_acct_id' => $client_acct_id,
                'userid' => $userid,
                'status_cd' => $status_cd,
                'master_plan_no' => $master_plan_no,
                'master_plan_units' => $master_plan_units,
                'supp_plans' => $supp_plans,
                'supp_plan_units' => $supp_plan_units,
                'notify_method' => $notify_method,
                'promo_cd' => $promo_cd,
                'password' => $password,
                'secret_question' => $secret_question,
                'secret_question_answer' => $secret_question_answer,
                'first_name' => $first_name,
                'mi' => $mi,
                'last_name' => $last_name,
                'company_name' => $company_name,
                'address1' => $address1,
                'address2' => $address2,
                'city' => $city,
                'locality' => $locality,
                'state_prov' => $state_prov,
                'country' => $country,
                'postal_cd' => $postal_cd,
                'phone' => $phone,
                'phone_ext' => $phone_ext,
                'cell_phone' => $cell_phone,
                'work_phone' => $work_phone,
                'work_phone_ext' => $work_phone_ext,
                'email' => $email,
                'birthdate' => $birthdate,
                'bill_first_name' => $bill_first_name,
                'bill_mi' => $bill_mi,
                'bill_last_name' => $bill_last_name,
                'bill_company_name' => $bill_company_name,
                'bill_address1' => $bill_address1,
                'bill_address2' => $bill_address2,
                'bill_city' => $bill_city,
                'bill_locality' => $bill_locality,
                'bill_state_prov' => $bill_state_prov,
                'bill_country' => $bill_country,
                'bill_postal_cd' => $bill_postal_cd,
                'bill_phone' => $bill_phone,
                'bill_phone_ext' => $bill_phone_ext,
                'bill_cell_phone' => $bill_cell_phone,
                'bill_work_phone' => $bill_work_phone,
                'bill_work_phone_ext' => $bill_work_phone_ext,
                'bill_email' => $bill_email,
                'pay_method' => $pay_method,
                'cc_number' => $cc_number,
                'cc_expire_mm' => $cc_expire_mm,
                'cc_expire_yyyy' => $cc_expire_yyyy,
                'bank_acct_no' => $bank_acct_no,
                'bank_routing_no' => $bank_routing_no,
                'resp_level_cd' => $resp_level_cd,
                'senior_acct_no' => $senior_acct_no,
                'functional_acct_groups' => $functional_acct_groups,
                'collections_acct_groups' => $collections_acct_groups,
                'supp_field_names' => $supp_field_names,
                'supp_field_values' => $supp_field_values,
                'test_acct_ind' => $test_acct_ind,
                'status_until_alt_start' => $status_until_alt_start,
                'balance_forward' => $balance_forward,
                'alt_bill_day' => $alt_bill_day,
                'do_full_invoicing' => $do_full_invoicing,
                'do_prorated_invoicing' => $do_prorated_invoicing,
                'master_plan_alt_rate_sched_no' => $master_plan_alt_rate_sched_no,
                'supp_plan_alt_rate_sched_no' => $supp_plan_alt_rate_sched_no,
                'client_receipt_id' => $client_receipt_id,
                'currency_cd' => $currency_cd,
                'cvv' => $cvv,
                'taxpayer_id' => $taxpayer_id,
                'bill_agreement_id' => $bill_agreement_id,
                'retroactive_start_date' => $retroactive_start_date,
            ) );
    }

    /**
     * @method apply_coupon_to_acct 
     * @returns ( hash )  ( string ) "user_success_msg", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function apply_coupon_to_acct( $acct_no, $coupon_code = NULL )
    {
        return $this->__ws_call( 'apply_coupon_to_acct', Array(
                'acct_no' => $acct_no,
                'coupon_code' => $coupon_code,
            ) );
    }

    /**
     * @method create_advanced_service_credit 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function create_advanced_service_credit( $acct_no, $amount = NULL, $reason_code = NULL, $comments = NULL, $eligible_plan_no = NULL, $eligible_service_no = NULL, $alt_service_no_to_apply = NULL, $frequency_no = NULL, $frequency_interval_months = NULL, $initial_credit_date = NULL, $percent_amount = NULL, $percent_eval_plan_no = NULL, $percent_eval_service_no = NULL )
    {
        return $this->__ws_call( 'create_advanced_service_credit', Array(
                'acct_no' => $acct_no,
                'amount' => $amount,
                'reason_code' => $reason_code,
                'comments' => $comments,
                'eligible_plan_no' => $eligible_plan_no,
                'eligible_service_no' => $eligible_service_no,
                'alt_service_no_to_apply' => $alt_service_no_to_apply,
                'frequency_no' => $frequency_no,
                'frequency_interval_months' => $frequency_interval_months,
                'initial_credit_date' => $initial_credit_date,
                'percent_amount' => $percent_amount,
                'percent_eval_plan_no' => $percent_eval_plan_no,
                'percent_eval_service_no' => $percent_eval_service_no,
            ) );
    }

    /**
     * @method get_acct_no_from_user_id 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( long ) "acct_no", 
     */
    public function get_acct_no_from_user_id( $user_id = NULL )
    {
        return $this->__ws_call( 'get_acct_no_from_user_id', Array(
                'user_id' => $user_id,
            ) );
    }

    /**
     * @method get_user_id_from_acct_no 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( string ) "user_id", 
     */
    public function get_user_id_from_acct_no( $acct_no )
    {
        return $this->__ws_call( 'get_user_id_from_acct_no', Array(
                'acct_no' => $acct_no,
            ) );
    }

    /**
     * @method get_acct_plan_contract 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "acct_plan_contract", 
     */
    public function get_acct_plan_contract( $acct_no, $plan_no )
    {
        return $this->__ws_call( 'get_acct_plan_contract', Array(
                'acct_no' => $acct_no,
                'plan_no' => $plan_no,
            ) );
    }

    /**
     * @method create_acct_plan_contract 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( long ) "contract_no", 
     */
    public function create_acct_plan_contract( $acct_no, $plan_no, $type_no = NULL, $alt_recur_fee = NULL, $length_months = NULL, $cancel_fee = NULL, $create_comments = NULL, $start_date = NULL, $do_auto_discard = NULL )
    {
        return $this->__ws_call( 'create_acct_plan_contract', Array(
                'acct_no' => $acct_no,
                'plan_no' => $plan_no,
                'type_no' => $type_no,
                'alt_recur_fee' => $alt_recur_fee,
                'length_months' => $length_months,
                'cancel_fee' => $cancel_fee,
                'create_comments' => $create_comments,
                'start_date' => $start_date,
                'do_auto_discard' => $do_auto_discard,
            ) );
    }

    /**
     * @method modify_acct_plan_contract 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function modify_acct_plan_contract( $acct_no, $contract_no, $type_no = NULL, $alt_recur_fee = NULL, $length_months = NULL, $cancel_fee = NULL, $start_date = NULL, $update_comments = NULL )
    {
        return $this->__ws_call( 'modify_acct_plan_contract', Array(
                'acct_no' => $acct_no,
                'contract_no' => $contract_no,
                'type_no' => $type_no,
                'alt_recur_fee' => $alt_recur_fee,
                'length_months' => $length_months,
                'cancel_fee' => $cancel_fee,
                'start_date' => $start_date,
                'update_comments' => $update_comments,
            ) );
    }

    /**
     * @method cancel_acct_plan_contract 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function cancel_acct_plan_contract( $acct_no, $contract_no, $update_comments = NULL )
    {
        return $this->__ws_call( 'cancel_acct_plan_contract', Array(
                'acct_no' => $acct_no,
                'contract_no' => $contract_no,
                'update_comments' => $update_comments,
            ) );
    }

    /**
     * @method get_usage_history 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "usage_history_records", 
     */
    public function get_usage_history( $acct_no, $specified_usage_type_no = NULL, $date_range_start = NULL, $date_range_end = NULL )
    {
        return $this->__ws_call( 'get_usage_history', Array(
                'acct_no' => $acct_no,
                'specified_usage_type_no' => $specified_usage_type_no,
                'date_range_start' => $date_range_start,
                'date_range_end' => $date_range_end,
            ) );
    }

    /**
     * @method get_acct_message 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( string ) "message_body", ( string ) "mime_type", 
     */
    public function get_acct_message( $acct_no = NULL, $message_id, $do_encoding = NULL )
    {
        return $this->__ws_call( 'get_acct_message', Array(
                'acct_no' => $acct_no,
                'message_id' => $message_id,
                'do_encoding' => $do_encoding,
            ) );
    }

    /**
     * @method get_acct_message_size 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( long ) "num_chars", 
     */
    public function get_acct_message_size( $acct_no = NULL, $message_id, $do_encoding = NULL )
    {
        return $this->__ws_call( 'get_acct_message_size', Array(
                'acct_no' => $acct_no,
                'message_id' => $message_id,
                'do_encoding' => $do_encoding,
            ) );
    }

    /**
     * @method update_master_plan 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( double ) "proration_result_amount", ( long ) "collection_error_code", ( string ) "collection_error_msg", ( long ) "statement_error_code", ( string ) "statement_error_msg", ( string ) "proc_cvv_response", ( string ) "proc_avs_response", ( string ) "proc_cavv_response", ( string ) "proc_status_code", ( string ) "proc_status_text", ( string ) "proc_payment_id", ( string ) "proc_auth_code", ( string ) "proc_merch_comments", ( long ) "invoice_no", ( array ) "cancelled_supp_plans", 
     */
    public function update_master_plan( $acct_no, $master_plan_no = NULL, $alt_rate_schedule_no = NULL, $num_plan_units = NULL, $assignment_directive = NULL, $do_write = NULL, $client_receipt_id = NULL, $force_currency_change = NULL, $auto_cancel_supp_plans = NULL, $offset_months = NULL )
    {
        return $this->__ws_call( 'update_master_plan', Array(
                'acct_no' => $acct_no,
                'master_plan_no' => $master_plan_no,
                'alt_rate_schedule_no' => $alt_rate_schedule_no,
                'num_plan_units' => $num_plan_units,
                'assignment_directive' => $assignment_directive,
                'do_write' => $do_write,
                'client_receipt_id' => $client_receipt_id,
                'force_currency_change' => $force_currency_change,
                'auto_cancel_supp_plans' => $auto_cancel_supp_plans,
                'offset_months' => $offset_months,
            ) );
    }

    /**
     * @method update_acct_complete 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( double ) "proration_result_amount", ( long ) "collection_error_code", ( string ) "collection_error_msg", ( long ) "parent_child_sync_error_code", ( string ) "parent_child_sync_error_msg", ( long ) "master_plan_error_code", ( string ) "master_plan_error_msg", ( long ) "master_plan_coll_error_code", ( string ) "master_plan_coll_error_msg", ( long ) "master_plan_stmt_error_code", ( string ) "master_plan_stmt_error_msg", ( string ) "proc_cvv_response", ( string ) "proc_avs_response", ( string ) "proc_cavv_response", ( string ) "proc_status_code", ( string ) "proc_status_text", ( string ) "proc_payment_id", ( string ) "proc_auth_code", ( string ) "proc_merch_comments", ( long ) "invoice_no", ( array ) "cancelled_supp_plans", 
     */
    public function update_acct_complete( $acct_no, $first_name = NULL, $last_name = NULL, $middle_initial = NULL, $company_name = NULL, $address1 = NULL, $address2 = NULL, $city = NULL, $locality = NULL, $state_prov = NULL, $country = NULL, $postal_cd = NULL, $phone = NULL, $phone_ext = NULL, $cell_phone = NULL, $work_phone = NULL, $work_phone_ext = NULL, $email = NULL, $birthdate = NULL, $bill_first_name = NULL, $bill_last_name = NULL, $bill_middle_initial = NULL, $bill_company_name = NULL, $bill_address1 = NULL, $bill_address2 = NULL, $bill_city = NULL, $bill_locality = NULL, $bill_state_prov = NULL, $bill_country = NULL, $bill_postal_cd = NULL, $bill_phone = NULL, $bill_phone_ext = NULL, $bill_cell_phone = NULL, $bill_work_phone = NULL, $bill_work_phone_ext = NULL, $bill_email = NULL, $pay_method = NULL, $cc_number = NULL, $cc_expire_mm = NULL, $cc_expire_yyyy = NULL, $bank_routing_num = NULL, $bank_acct_num = NULL, $master_plan_no = NULL, $master_plan_alt_rate_sched_no = NULL, $master_plan_units = NULL, $master_plan_assign_directive = NULL, $update_acct_supp_field = NULL, $update_acct_func_group = NULL, $update_acct_coll_group = NULL, $status_cd = NULL, $notify_method = NULL, $password = NULL, $secret_question = NULL, $secret_question_answer = NULL, $pin = NULL, $test_acct_ind = NULL, $resp_level_cd = NULL, $senior_acct_no = NULL, $client_acct_id = NULL, $do_collect = NULL, $change_status_after_coll = NULL, $reset_dates_after_status = NULL, $client_receipt_id = NULL, $alt_do_dunning = NULL, $force_currency_change = NULL, $cvv = NULL, $taxpayer_id = NULL, $bill_agreement_id = NULL, $auto_cancel_supp_plans = NULL, $offset_months = NULL )
    {
        return $this->__ws_call( 'update_acct_complete', Array(
                'acct_no' => $acct_no,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'middle_initial' => $middle_initial,
                'company_name' => $company_name,
                'address1' => $address1,
                'address2' => $address2,
                'city' => $city,
                'locality' => $locality,
                'state_prov' => $state_prov,
                'country' => $country,
                'postal_cd' => $postal_cd,
                'phone' => $phone,
                'phone_ext' => $phone_ext,
                'cell_phone' => $cell_phone,
                'work_phone' => $work_phone,
                'work_phone_ext' => $work_phone_ext,
                'email' => $email,
                'birthdate' => $birthdate,
                'bill_first_name' => $bill_first_name,
                'bill_last_name' => $bill_last_name,
                'bill_middle_initial' => $bill_middle_initial,
                'bill_company_name' => $bill_company_name,
                'bill_address1' => $bill_address1,
                'bill_address2' => $bill_address2,
                'bill_city' => $bill_city,
                'bill_locality' => $bill_locality,
                'bill_state_prov' => $bill_state_prov,
                'bill_country' => $bill_country,
                'bill_postal_cd' => $bill_postal_cd,
                'bill_phone' => $bill_phone,
                'bill_phone_ext' => $bill_phone_ext,
                'bill_cell_phone' => $bill_cell_phone,
                'bill_work_phone' => $bill_work_phone,
                'bill_work_phone_ext' => $bill_work_phone_ext,
                'bill_email' => $bill_email,
                'pay_method' => $pay_method,
                'cc_number' => $cc_number,
                'cc_expire_mm' => $cc_expire_mm,
                'cc_expire_yyyy' => $cc_expire_yyyy,
                'bank_routing_num' => $bank_routing_num,
                'bank_acct_num' => $bank_acct_num,
                'master_plan_no' => $master_plan_no,
                'master_plan_alt_rate_sched_no' => $master_plan_alt_rate_sched_no,
                'master_plan_units' => $master_plan_units,
                'master_plan_assign_directive' => $master_plan_assign_directive,
                'update_acct_supp_field' => $update_acct_supp_field,
                'update_acct_func_group' => $update_acct_func_group,
                'update_acct_coll_group' => $update_acct_coll_group,
                'status_cd' => $status_cd,
                'notify_method' => $notify_method,
                'password' => $password,
                'secret_question' => $secret_question,
                'secret_question_answer' => $secret_question_answer,
                'pin' => $pin,
                'test_acct_ind' => $test_acct_ind,
                'resp_level_cd' => $resp_level_cd,
                'senior_acct_no' => $senior_acct_no,
                'client_acct_id' => $client_acct_id,
                'do_collect' => $do_collect,
                'change_status_after_coll' => $change_status_after_coll,
                'reset_dates_after_status' => $reset_dates_after_status,
                'client_receipt_id' => $client_receipt_id,
                'alt_do_dunning' => $alt_do_dunning,
                'force_currency_change' => $force_currency_change,
                'cvv' => $cvv,
                'taxpayer_id' => $taxpayer_id,
                'bill_agreement_id' => $bill_agreement_id,
                'auto_cancel_supp_plans' => $auto_cancel_supp_plans,
                'offset_months' => $offset_months,
            ) );
    }

    /**
     * @method get_all_acct_receipt_ids 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "acct_receipt", 
     */
    public function get_all_acct_receipt_ids( $acct_no, $start_date_range = NULL, $end_date_range = NULL )
    {
        return $this->__ws_call( 'get_all_acct_receipt_ids', Array(
                'acct_no' => $acct_no,
                'start_date_range' => $start_date_range,
                'end_date_range' => $end_date_range,
            ) );
    }

    /**
     * @method send_arc_threshold_email 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function send_arc_threshold_email( $acct_no, $resource_name = NULL, $resource_units_label = NULL, $resource_threshold_level, $resource_balance )
    {
        return $this->__ws_call( 'send_arc_threshold_email', Array(
                'acct_no' => $acct_no,
                'resource_name' => $resource_name,
                'resource_units_label' => $resource_units_label,
                'resource_threshold_level' => $resource_threshold_level,
                'resource_balance' => $resource_balance,
            ) );
    }

    /**
     * @method set_acct_tax_exempt_status 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function set_acct_tax_exempt_status( $acct_no, $exemption_level = NULL )
    {
        return $this->__ws_call( 'set_acct_tax_exempt_status', Array(
                'acct_no' => $acct_no,
                'exemption_level' => $exemption_level,
            ) );
    }

    /**
     * @method get_acct_tax_exempt_status 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( long ) "exemption_level", ( string ) "exemption_level_desc", 
     */
    public function get_acct_tax_exempt_status( $acct_no )
    {
        return $this->__ws_call( 'get_acct_tax_exempt_status', Array(
                'acct_no' => $acct_no,
            ) );
    }

    /**
     * @method close_acct_installation 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function close_acct_installation( $acct_no, $install_complete_ind = NULL, $comments = NULL )
    {
        return $this->__ws_call( 'close_acct_installation', Array(
                'acct_no' => $acct_no,
                'install_complete_ind' => $install_complete_ind,
                'comments' => $comments,
            ) );
    }

    /**
     * @method get_unapplied_service_credits 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "unapplied_service_credits", 
     */
    public function get_unapplied_service_credits( $acct_no )
    {
        return $this->__ws_call( 'get_unapplied_service_credits', Array(
                'acct_no' => $acct_no,
            ) );
    }

    /**
     * @method get_recurring_credit_info 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "recurring_credit_info", 
     */
    public function get_recurring_credit_info( $acct_no, $filter_credit_no = NULL )
    {
        return $this->__ws_call( 'get_recurring_credit_info', Array(
                'acct_no' => $acct_no,
                'filter_credit_no' => $filter_credit_no,
            ) );
    }

    /**
     * @method get_pending_invoice_no 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( long ) "invoice_no", 
     */
    public function get_pending_invoice_no( $acct_no )
    {
        return $this->__ws_call( 'get_pending_invoice_no', Array(
                'acct_no' => $acct_no,
            ) );
    }

    /**
     * @method remove_pay_method 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function remove_pay_method( $acct_no )
    {
        return $this->__ws_call( 'remove_pay_method', Array(
                'acct_no' => $acct_no,
            ) );
    }

    /**
     * @method assign_custom_acct_rates 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function assign_custom_acct_rates( $acct_no, $plan_no, $service_no, $custom_acct_rates )
    {
        return $this->__ws_call( 'assign_custom_acct_rates', Array(
                'acct_no' => $acct_no,
                'plan_no' => $plan_no,
                'service_no' => $service_no,
                'custom_acct_rates' => $custom_acct_rates,
            ) );
    }

    /**
     * @method get_accts_with_existing_pay_method 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "accts_with_pay_method", 
     */
    public function get_accts_with_existing_pay_method( $pay_method, $form_payment_acct_id, $bank_routing_num = NULL )
    {
        return $this->__ws_call( 'get_accts_with_existing_pay_method', Array(
                'pay_method' => $pay_method,
                'form_payment_acct_id' => $form_payment_acct_id,
                'bank_routing_num' => $bank_routing_num,
            ) );
    }

    /**
     * @method adjust_billing_dates 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function adjust_billing_dates( $acct_no, $action_directive, $adjustment_days, $comments = NULL )
    {
        return $this->__ws_call( 'adjust_billing_dates', Array(
                'acct_no' => $acct_no,
                'action_directive' => $action_directive,
                'adjustment_days' => $adjustment_days,
                'comments' => $comments,
            ) );
    }

    /**
     * @method write_acct_comment 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function write_acct_comment( $acct_no, $comment )
    {
        return $this->__ws_call( 'write_acct_comment', Array(
                'acct_no' => $acct_no,
                'comment' => $comment,
            ) );
    }

    /**
     * @method get_acct_comments 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "acct_comments", 
     */
    public function get_acct_comments( $acct_no, $date_range_start, $date_range_end, $do_url_encoding = NULL )
    {
        return $this->__ws_call( 'get_acct_comments', Array(
                'acct_no' => $acct_no,
                'date_range_start' => $date_range_start,
                'date_range_end' => $date_range_end,
                'do_url_encoding' => $do_url_encoding,
            ) );
    }

    /**
     * @method modify_acct_supp_fields 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function modify_acct_supp_fields( $acct_no, $acct_supp_fields = NULL )
    {
        return $this->__ws_call( 'modify_acct_supp_fields', Array(
                'acct_no' => $acct_no,
                'acct_supp_fields' => $acct_supp_fields,
            ) );
    }

    /**
     * @method remove_custom_acct_rates 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function remove_custom_acct_rates( $acct_no, $plan_no )
    {
        return $this->__ws_call( 'remove_custom_acct_rates', Array(
                'acct_no' => $acct_no,
                'plan_no' => $plan_no,
            ) );
    }

    /**
     * @method get_acct_statement_history 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "statement_history", 
     */
    public function get_acct_statement_history( $acct_no = NULL, $user_id = NULL, $start_date = NULL, $end_date = NULL )

    {
        return $this->__ws_call( 'get_acct_statement_history', Array(
                'acct_no' => $acct_no,
                'user_id' => $user_id,
                'start_date' => $start_date,
                'end_date' => $end_date,
            ) );
    }

    /**
     * @method get_acct_invoice_history 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "invoice_history", 
     */
    public function get_acct_invoice_history( $acct_no = NULL, $user_id = NULL, $start_bill_date = NULL, $end_bill_date = NULL, $include_voided = NULL )
    {
        return $this->__ws_call( 'get_acct_invoice_history', Array(
                'acct_no' => $acct_no,
                'user_id' => $user_id,
                'start_bill_date' => $start_bill_date,
                'end_bill_date' => $end_bill_date,
                'include_voided' => $include_voided,
            ) );
    }

    /**
     * @method get_statement_content 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( string ) "statement_content", ( string ) "mime_type", 
     */
    public function get_statement_content( $acct_no, $statement_no, $do_encoding = NULL )
    {
        return $this->__ws_call( 'get_statement_content', Array(
                'acct_no' => $acct_no,
                'statement_no' => $statement_no,
                'do_encoding' => $do_encoding,
            ) );
    }

    /**
     * @method get_statement_content_size 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( long ) "num_chars", 
     */
    public function get_statement_content_size( $acct_no, $statement_no, $do_encoding = NULL )
    {
        return $this->__ws_call( 'get_statement_content_size', Array(
                'acct_no' => $acct_no,
                'statement_no' => $statement_no,
                'do_encoding' => $do_encoding,
            ) );
    }

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
    public function get_client_items( $filter_currency_cd = NULL, $return_no_cost_items = NULL )
    {
        return $this->__ws_call( 'get_client_items', Array(
                'filter_currency_cd' => $filter_currency_cd,
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
     * @method delete_reg_uss_params 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function delete_reg_uss_params( $session_id, $param_names )
    {
        return $this->__ws_call( 'delete_reg_uss_params', Array(
                'session_id' => $session_id,
                'param_names' => $param_names,
            ) );
    }

    /**
     * @method replace_reg_uss_params 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function replace_reg_uss_params( $session_id, $in_reg_uss_params )
    {
        return $this->__ws_call( 'replace_reg_uss_params', Array(
                'session_id' => $session_id,
                'in_reg_uss_params' => $in_reg_uss_params,
            ) );
    }

    /**
     * @method clear_reg_uss_params 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function clear_reg_uss_params( $session_id )
    {
        return $this->__ws_call( 'clear_reg_uss_params', Array(
                'session_id' => $session_id,
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

    /**
     * @method delete_reg_uss_config_params 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function delete_reg_uss_config_params( $set_name, $param_names )
    {
        return $this->__ws_call( 'delete_reg_uss_config_params', Array(
                'set_name' => $set_name,
                'param_names' => $param_names,
            ) );
    }

    /**
     * @method replace_reg_uss_config_params 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function replace_reg_uss_config_params( $set_name, $in_reg_uss_config_params )
    {
        return $this->__ws_call( 'replace_reg_uss_config_params', Array(
                'set_name' => $set_name,
                'in_reg_uss_config_params' => $in_reg_uss_config_params,
            ) );
    }

    /**
     * @method clear_reg_uss_config_params 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function clear_reg_uss_config_params( $set_name )
    {
        return $this->__ws_call( 'clear_reg_uss_config_params', Array(
                'set_name' => $set_name,
            ) );
    }

    /**
     * @method update_inventory_item_stock 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( array ) "new_inventory_item_stock", 
     */
    public function update_inventory_item_stock( $inventory_item_stock )
    {

        return $this->__ws_call( 'update_inventory_item_stock', Array(
                'inventory_item_stock' => $inventory_item_stock,
            ) );
    }

    /**
     * @method get_acct_has_ordered_sku 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( long ) "ordered_ind", ( long ) "billed_ind", ( long ) "paid_ind", 
     */
    public function get_acct_has_ordered_sku( $acct_no, $sku )
    {
        return $this->__ws_call( 'get_acct_has_ordered_sku', Array(
                'acct_no' => $acct_no,
                'sku' => $sku,
            ) );
    }

    /**
     * @method get_userid_has_ordered_sku 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( long ) "acct_no", ( long ) "ordered_ind", ( long ) "billed_ind", ( long ) "paid_ind", 
     */
    public function get_userid_has_ordered_sku( $user_id, $sku )
    {
        return $this->__ws_call( 'get_userid_has_ordered_sku', Array(
                'user_id' => $user_id,
                'sku' => $sku,
            ) );
    }

    /**
     * @method get_client_currencies 
     * @returns ( hash )  ( array ) "client_currency", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function get_client_currencies(  )
    {
        return $this->__ws_call( 'get_client_currencies', Array(
            ) );
    }

    /**
     * @method get_client_item_images 
     * @returns ( hash )  ( array ) "item_images", ( long ) "error_code", ( string ) "error_msg", 
     */
    public function get_client_item_images( $item_no )
    {
        return $this->__ws_call( 'get_client_item_images', Array(
                'item_no' => $item_no,
            ) );
    }

    /**
     * @method authenticate_caller 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function authenticate_caller(  )
    {
        return $this->__ws_call( 'authenticate_caller', Array(
            ) );
    }

    /**
     * @method init_paypal_bill_agreement 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", ( string ) "return_url", ( string ) "token", 
     */
    public function init_paypal_bill_agreement( $acct_no )
    {
        return $this->__ws_call( 'init_paypal_bill_agreement', Array(
                'acct_no' => $acct_no,
            ) );
    }

    /**
     * @method save_paypal_bill_agreement 
     * @returns ( hash )  ( long ) "error_code", ( string ) "error_msg", 
     */
    public function save_paypal_bill_agreement( $acct_no, $token )
    {
        return $this->__ws_call( 'save_paypal_bill_agreement', Array(
                'acct_no' => $acct_no,
                'token' => $token,
            ) );
    }
}
