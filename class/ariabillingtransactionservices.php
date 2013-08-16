<?php
/**
 * AriaBillingTransactionServices.class.php
 * Web Service class 
 * 
 * @author    AriaAPI ClassDump generated file
 * @author    $Author: dmorfin $
 * @copyright Aria Systems, Inc
 * @version   $Rev: 4589 $ generated on Fri Nov  5 10:22:27 2010 
 * @id        $Id: ariabillingtransactionservices.php 4589 2010-11-05 14:27:05Z dmorfin $
 */
  

/**
 * @package AriaBillingTransactionServices * 
 */
class AriaBillingTransactionServices extends BaseAriaBilling
{

    protected $__wsdl_name = 'transaction_services-doc_literal_wrapped.wsdl';
    protected $__wsdl_version = '5.7';


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
     * @returns ( hash )  ( long ) "order_no", ( long ) "transaction_id", ( long ) "statement_error_cd", ( string ) "statement_error_msg", ( long ) "error_code", ( string ) "error_msg", 
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
     * @returns ( hash )  ( long ) "transaction_id", ( long ) "error_code", ( string ) "error_msg", 
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
     * @returns ( hash )  ( long ) "transaction_id", ( long ) "error_code", ( string ) "error_msg", 
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
    public function gen_invoice( $acct_no, $force_pending = NULL, $client_receipt_id = NULL )
    {
        return $this->__ws_call( 'gen_invoice', Array(
                'acct_no' => $acct_no,
                'force_pending' => $force_pending,
                'client_receipt_id' => $client_receipt_id,
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
     * @returns ( hash )  ( long ) "new_invoice_no", ( long ) "collection_error_code", ( string ) "collection_error_msg", ( long ) "statement_error_code", ( string ) "statement_error_msg", ( long ) "error_code", ( string ) "error_msg", 
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
}
