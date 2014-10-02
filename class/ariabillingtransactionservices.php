<?php

require_once('baseariabilling.class.php');

/**
 * @package AriaBillingTransactionServices
 */
class AriaBillingTransactionServices extends BaseAriaBilling
{

        /**
     * WSDL File used to SOAP API calls
     * @var string $__wsdl_name Filename of WSDL file.
     */
    protected $__wsdl_name = 'transaction_services-doc_literal_wrapped.wsdl';
    /**
     * WSDL Version for SOAP calls
     * @var string $__wsdl_version Version of the WSDL.
     */
    protected $__wsdl_version = '6.22';
    
    /**
     * Returns the invoice number associated with a specified balance transfer.
     * @param int $transaction_id The unique identifier for a given transaction
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int invoice_no The unique identifer of a given invoice.<br>int acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     */
    public function get_inv_no_from_bal_xfer($transaction_id)
    {
        return $this->__ws_call('get_inv_no_from_bal_xfer', Array(
                'transaction_id' => $transaction_id
        ));
    }

    /**
     * Voids a particular transaction associated with a specified account.
     * @param int $account_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $transaction_id The unique identifier for a given transaction
     * @param int $reason_code The reason a given credt was/is to be applied to the account.
     * @param string $comments Additional explanatory text relating to this API call. NOTE:  For this API method, comments are required (normally comments are not required).
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions
     * @return mixed[] int new_transaction_id This is the resulting transaction ID from the void action.<br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function void_transaction($account_no, $transaction_id, $reason_code, $comments = null, $client_receipt_id = null)
    {
        return $this->__ws_call('void_transaction', Array(
                'account_no' => $account_no,
                'transaction_id' => $transaction_id,
                'reason_code' => $reason_code,
                'comments' => $comments,
                'client_receipt_id' => $client_receipt_id
        ));
    }

    /**
     * Reinstates a previously voided transaction associated with a specified account number and transaction ID.
     * @param int $account_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $transaction_id The unique identifier for a given transaction
     * @param string $comments Additional explanatory text relating to this API call.
     * @return mixed[] int new_transaction_id This is the new transaction ID returned after successfully reinstating the transaction.<br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function reinstate_transaction($account_no, $transaction_id, $comments = null)
    {
        return $this->__ws_call('reinstate_transaction', Array(
                'account_no' => $account_no,
                'transaction_id' => $transaction_id,
                'comments' => $comments
        ));
    }

    /**
     * Transfers the balance from one account to another account.
     * @param int $source_account_no The Source account is the account who&#039;s entire balance will be credited and a the amount applied to the specified Target account.
     * @param int $target_account_no The Target account is the account that will received a debit for the entire balance of the Source account.
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions.
     * @return mixed[] int transaction_id The unique identifier for a given transaction<br>double balance_transferred The amount of money transferred from the Source to the Target account for this transaction.<br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function transfer_account_balance($source_account_no, $target_account_no, $client_receipt_id = null)
    {
        return $this->__ws_call('transfer_account_balance', Array(
                'source_account_no' => $source_account_no,
                'target_account_no' => $target_account_no,
                'client_receipt_id' => $client_receipt_id
        ));
    }

    /**
     * Creates an invoice for one or more inventory items ordered by a specified account holder. This call also has the ability to collect a payment for the invoice by specifying &quot;true&quot; (1) in the bill_immediately field.
     * @param int $account_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $bill_immediately Indicates whether to bill the account holder immediately or, if not set bill on next billing anniversary date.
     * @param array $order_line_items This is an array of line items appearing on the order. The Array elements for this argument immediately follow and are indicated as elements with a right-arrow icon.
     * @param int $bill_seq The unique identifier of the bill sequence number.
     * @param string $client_order_id This is the client-assigned order identifier.
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions
     * @param int $alt_pay_method If you wish to use the account&#039;s current form of payment, leave this value empty. If you wish to use an alternate credit card, enter &#039;1&#039; for this value.
     * @param string $cc_number Credit card number.
     * @param int $cc_expire_mm Expiration month for the credit card payment instrument.
     * @param int $cc_expire_yyyy Expiration year for the credit card payment instrument.
     * @param string $bank_routing_num The ABA routing number for the bank holding &#039;bank_acct_num&#039;
     * @param string $bank_acct_num The bank account number.
     * @param string $bill_company_name Company name of the billing contact
     * @param string $bill_first_name First name of the billing contact
     * @param string $bill_middle_initial Middle Initial of the billing contact
     * @param string $bill_last_name Last name of the billing contact
     * @param string $bill_address1 First address line of the billing contact
     * @param string $bill_address2 Second address line of the billing contact
     * @param string $bill_city City of the billing contact
     * @param string $bill_locality Locality of the billing contact
     * @param string $bill_state_prov State or Province of the billing contact. The official postal-service codes for all United States and Canada states, provinces, and territories.
     * @param string $bill_zip Zip Code of the billing contact
     * @param string $bill_country Country of the billing contact. The ISO-compliant 2-character country code abbreviation in uppercase.
     * @param string $bill_email Email of the billing contact
     * @param string $bill_phone Phone of the billing contact
     * @param string $bill_phone_extension Phone extension of the billing contact
     * @param string $bill_cell_phone Cell phone of the billing contact
     * @param string $bill_work_phone Work phone of the billing contact
     * @param string $bill_work_phone_extension Work phone extenstion of the billing contact
     * @param string $cvv Card Verification Value, used to help verify a transaction is being requested by the card holder since this value is physically printed on the credit card.
     * @param string $bill_address3 The third line of the billing address
     * @param string $do_write Boolean indicator informing Aria whether or not to actually perform the requested operation. If &#039;false&#039; is passed in this field Aria will, if applicable, calculate any potential effects stemming from this call such as pro-ration, plan assignments, etc. and return all relevant data  without actually performing the requested operation or making any changes to the account. This is useful to interfaces that wish to present the user with a &#039;confirmation page&#039; informing of the would-be effects of the requested operation prior to actually performing it.  Do_write defaults to &#039;true&#039;
     * @param string $coupon_cd A coupon code to apply to this order
     * @param string $alt_client_acct_group_id The alternate collections account group to use with a passed alternate form of payment
     * @param string $track_data1 The raw &quot;track 1&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param string $track_data2 The raw &quot;track 2&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param int $alt_inv_template_no The statement template to use when generating a statement for this order
     * @param string $client_alt_inv_template_id The client defined statement template to use when generating a statement for this order
     * @return mixed[] int order_no The unique identifier for an order in the context of an client_no and account_no.<br>int transaction_id The unique identifier for a given transaction<br>int invoicing_error_code The error code generated by Aria when Aria attempted to generate a invoice<br>string invoicing_error_msg The text message associated with &#039;invoicing_error_code&#039;<br>int statement_error_cd Error code produced when statement generation has failed.<br>string statement_error_msg The text message associated with &#039;statement_error_code&#039;<br>string proc_cvv_response The processor return code from CVV validation (deprecated)<br>string proc_avs_response Processor return code from address validation<br>string proc_cavv_response The processors return code for security validation (includes cvv)<br>string proc_status_code The processor status code<br>string proc_status_text The processors status description<br>string proc_payment_id The processor payment id<br>string proc_auth_code Authorization code provided by the issuing bank<br>string proc_merch_comments Additional information passed to payment processor<br>int invoice_no The unique identifer of a given invoice.<br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>double total_charges_before_tax Total charges on this invoice before taxes are applied<br>double total_tax_charges Total amount of taxes charged<br>double total_charges_after_tax Subtotal combining the total pre-tax charges and the total taxes charged<br>double total_credit Sum of all the credits on the invoice<br>array cart_invoice_line_items All of the items on this order. If do_write was FALSE, these are the line items which would be on the eventual invoice<br>array third_party_errors Errors from third-party systems like taxation engines are returned here, whereas the Aria-generated error codes are returned in the error_code and error_msg fields at the root level of the API return.
     */
    public function create_order($account_no, $bill_immediately, $order_line_items = null, $bill_seq = null, $client_order_id = null, $client_receipt_id = null, $alt_pay_method = null, $cc_number = null, $cc_expire_mm = null, $cc_expire_yyyy = null, $bank_routing_num = null, $bank_acct_num = null, $bill_company_name = null, $bill_first_name = null, $bill_middle_initial = null, $bill_last_name = null, $bill_address1 = null, $bill_address2 = null, $bill_city = null, $bill_locality = null, $bill_state_prov = null, $bill_zip = null, $bill_country = null, $bill_email = null, $bill_phone = null, $bill_phone_extension = null, $bill_cell_phone = null, $bill_work_phone = null, $bill_work_phone_extension = null, $cvv = null, $bill_address3 = null, $do_write = null, $coupon_cd = null, $alt_client_acct_group_id = null, $track_data1 = null, $track_data2 = null, $alt_inv_template_no = null, $client_alt_inv_template_id = null)
    {
        return $this->__ws_call('create_order', Array(
                'account_no' => $account_no,
                'bill_immediately' => $bill_immediately,
                'order_line_items' => $order_line_items,
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
                'bill_address3' => $bill_address3,
                'do_write' => $do_write,
                'coupon_cd' => $coupon_cd,
                'alt_client_acct_group_id' => $alt_client_acct_group_id,
                'track_data1' => $track_data1,
                'track_data2' => $track_data2,
                'alt_inv_template_no' => $alt_inv_template_no,
                'client_alt_inv_template_id' => $client_alt_inv_template_id
        ));
    }

    /**
     * Collects the outsanding balance from a specified account holder.
     * @param int $account_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $alt_pay_method If you wish to use the account&#039;s current form of payment, leave this value empty. If you wish to use an alternate credit card, enter &#039;1&#039; for this value.
     * @param string $cc_number Credit card number.
     * @param int $cc_expire_mm Expiration month for the credit card payment instrument.
     * @param int $cc_expire_yyyy Expiration year for the credit card payment instrument.
     * @param string $bank_routing_num The ABA routing number for the bank holding &#039;bank_acct_num&#039;
     * @param string $bank_acct_num The bank account number.
     * @param string $bill_company_name Company name of the billing contact
     * @param string $bill_first_name First name of the billing contact
     * @param string $bill_middle_initial Middle Initial of the billing contact
     * @param string $bill_last_name Last name of the billing contact
     * @param string $bill_address1 First address line of the billing contact
     * @param string $bill_address2 Second address line of the billing contact
     * @param string $bill_city City of the billing contact
     * @param string $bill_locality Locality of the billing contact
     * @param string $bill_state_prov State or Province of the billing contact. The official postal-service codes for all United States and Canada states, provinces, and territories.
     * @param string $bill_zip Zip Code of the billing contact
     * @param string $bill_country Country of the billing contact. The ISO-compliant 2-character country code abbreviation in uppercase.
     * @param string $bill_email Email of the billing contact
     * @param string $bill_phone Phone of the billing contact
     * @param string $bill_phone_extension Phone extension of the billing contact
     * @param string $bill_cell_phone Cell phone of the billing contact
     * @param string $bill_work_phone Work phone of the billing contact
     * @param string $bill_work_phone_extension Work phone extenstion of the billing contact
     * @param string $cvv Card Verification Value, used to help verify a transaction is being requested by the card holder since this value is physically printed on the credit card.
     * @param string $bill_address3 The third line of the billing address
     * @param string $alt_client_acct_group_id The one-time collections account group  to use for this particular call.  The default on the account is not changed.
     * @param string $track_data1 The raw &quot;track 1&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param string $track_data2 The raw &quot;track 2&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param string $force_balance_scope Determines what constitutes the account collectible balance for this transaction
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions.
     * @return mixed[] int transaction_id The unique identifier for a given transaction<br>string proc_cvv_response The processor return code from CVV validation (deprecated)<br>string proc_avs_response Processor return code from address validation<br>string proc_cavv_response The processors return code for security validation (includes cvv)<br>string proc_status_code The processor status code<br>string proc_status_text The processors status description<br>string proc_payment_id The processor payment id<br>string proc_auth_code Authorization code provided by the issuing bank<br>string proc_merch_comments Additional information passed to payment processor<br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function settle_account_balance($account_no, $alt_pay_method = null, $cc_number = null, $cc_expire_mm = null, $cc_expire_yyyy = null, $bank_routing_num = null, $bank_acct_num = null, $bill_company_name = null, $bill_first_name = null, $bill_middle_initial = null, $bill_last_name = null, $bill_address1 = null, $bill_address2 = null, $bill_city = null, $bill_locality = null, $bill_state_prov = null, $bill_zip = null, $bill_country = null, $bill_email = null, $bill_phone = null, $bill_phone_extension = null, $bill_cell_phone = null, $bill_work_phone = null, $bill_work_phone_extension = null, $cvv = null, $bill_address3 = null, $alt_client_acct_group_id = null, $track_data1 = null, $track_data2 = null, $force_balance_scope = null, $client_receipt_id = null)
    {
        return $this->__ws_call('settle_account_balance', Array(
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
                'bill_address3' => $bill_address3,
                'alt_client_acct_group_id' => $alt_client_acct_group_id,
                'track_data1' => $track_data1,
                'track_data2' => $track_data2,
                'force_balance_scope' => $force_balance_scope,
                'client_receipt_id' => $client_receipt_id
        ));
    }

    /**
     * Collects a specified amount from a specified account holder using the electronic method of payment on file.
     * @param int $account_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param double $amount_to_collect The amount of money to collect from the account.
     * @param int $bill_seq The unique identifier of the bill sequence number.
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions
     * @param array $specific_charge_transaction_id A list of specific charges, see below
     * @param int $alt_pay_method If you wish to use the account&#039;s current form of payment, leave this value empty. If you wish to use an alternate credit card, enter &#039;1&#039; for this value.
     * @param string $cc_number Credit card number.
     * @param int $cc_expire_mm Expiration month for the credit card payment instrument.
     * @param int $cc_expire_yyyy Expiration year for the credit card payment instrument.
     * @param string $bank_routing_num The ABA routing number for the bank holding &#039;bank_acct_num&#039;
     * @param string $bank_acct_num The bank account number.
     * @param string $bill_company_name Company name of the billing contact
     * @param string $bill_first_name First name of the billing contact
     * @param string $bill_middle_initial Middle Initial of the billing contact
     * @param string $bill_last_name Last name of the billing contact
     * @param string $bill_address1 First address line of the billing contact
     * @param string $bill_address2 Second address line of the billing contact
     * @param string $bill_city City of the billing contact
     * @param string $bill_locality Locality of the billing contact
     * @param string $bill_state_prov State or Province of the billing contact. The official postal-service codes for all United States and Canada states, provinces, and territories.
     * @param string $bill_zip Zip Code of the billing contact
     * @param string $bill_country Country of the billing contact. The ISO-compliant 2-character country code abbreviation in uppercase.
     * @param string $bill_email Email of the billing contact
     * @param string $bill_phone Phone of the billing contact
     * @param string $bill_phone_extension Phone extension of the billing contact
     * @param string $bill_cell_phone Cell phone of the billing contact
     * @param string $bill_work_phone Work phone of the billing contact
     * @param string $bill_work_phone_extension Work phone extenstion of the billing contact
     * @param string $cvv Card Verification Value, used to help verify a transaction is being requested by the card holder since this value is physically printed on the credit card.
     * @param string $bill_address3 The third line of the billing address
     * @param string $alt_client_acct_group_id The one-time collections account group  to use for this particular call.  The default on the account is not changed.
     * @param string $track_data1 The raw &quot;track 1&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param string $track_data2 The raw &quot;track 2&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param int $payment_application_method Possible values are 1, 2, or NULL. 1 is FIFO.  2 is First-DUE-First-Out.  If NULL, defaults to FIFO
     * @return mixed[] int transaction_id The unique identifier for a given transaction<br>string proc_cvv_response The processor return code from CVV validation (deprecated)<br>string proc_avs_response Processor return code from address validation<br>string proc_cavv_response The processors return code for security validation (includes cvv)<br>string proc_status_code The processor status code<br>string proc_status_text The processors status description<br>string proc_payment_id The processor payment id<br>string proc_auth_code Authorization code provided by the issuing bank<br>string proc_merch_comments Additional information passed to payment processor<br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function collect_from_account($account_no, $amount_to_collect, $bill_seq = null, $client_receipt_id = null, $specific_charge_transaction_id = null, $alt_pay_method = null, $cc_number = null, $cc_expire_mm = null, $cc_expire_yyyy = null, $bank_routing_num = null, $bank_acct_num = null, $bill_company_name = null, $bill_first_name = null, $bill_middle_initial = null, $bill_last_name = null, $bill_address1 = null, $bill_address2 = null, $bill_city = null, $bill_locality = null, $bill_state_prov = null, $bill_zip = null, $bill_country = null, $bill_email = null, $bill_phone = null, $bill_phone_extension = null, $bill_cell_phone = null, $bill_work_phone = null, $bill_work_phone_extension = null, $cvv = null, $bill_address3 = null, $alt_client_acct_group_id = null, $track_data1 = null, $track_data2 = null, $payment_application_method = null)
    {
        return $this->__ws_call('collect_from_account', Array(
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
                'bill_address3' => $bill_address3,
                'alt_client_acct_group_id' => $alt_client_acct_group_id,
                'track_data1' => $track_data1,
                'track_data2' => $track_data2,
                'payment_application_method' => $payment_application_method
        ));
    }

    /**
     * Records a payment transaction for a payment collected from an account holder without using Aria.
     * @param int $account_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $reference_code This code provides a reference correlation to the external payment.
     * @param double $payment_amount The amount of the payment being/to-be made against the outstanding account balance
     * @param string $comments Additional explanatory text relating to this API call.
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions
     * @param array $specific_charge_transaction_id A list of specific charges, see below
     * @param int $external_destination_id The external system from which this payment originated
     * @param string $external_id The ID of the corresponding record to this payment in the external system
     * @return mixed[] int transaction_id The unique identifier for a given transaction<br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function record_external_payment($account_no, $reference_code, $payment_amount, $comments = null, $client_receipt_id = null, $specific_charge_transaction_id = null, $external_destination_id = null, $external_id = null)
    {
        return $this->__ws_call('record_external_payment', Array(
                'account_no' => $account_no,
                'reference_code' => $reference_code,
                'payment_amount' => $payment_amount,
                'comments' => $comments,
                'client_receipt_id' => $client_receipt_id,
                'specific_charge_transaction_id' => $specific_charge_transaction_id,
                'external_destination_id' => $external_destination_id,
                'external_id' => $external_id
        ));
    }

    /**
     * record remittance to net terms accounts
     * @param int $account_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param double $payment_amount The amount of the payment being/to-be made against the outstanding account balance
     * @param string $reference_code The external reference code for this object, such as a check number or an ID assigned by an external system
     * @param string $comments Additional explanatory text relating to this API call.
     * @return mixed[] int transaction_id The unique identifier for a given transaction<br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function record_out_going_payment($account_no, $payment_amount, $reference_code = null, $comments = null)
    {
        return $this->__ws_call('record_out_going_payment', Array(
                'account_no' => $account_no,
                'payment_amount' => $payment_amount,
                'reference_code' => $reference_code,
                'comments' => $comments
        ));
    }

    /**
     * Applies a credit to a future invoice.
     * @param int $account_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param double $credit_amount The amount of credit to be applied to the account.
     * @param int $credit_reason_code The reason a given credt was/is to be applied to the account.
     * @param string $comments Additional explanatory text relating to this API call.
     * @return mixed[] int credit_id This identifier is returned upon successful application of credit and indicates the specific credit transaction executed against the account.<br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function apply_service_credit($account_no, $credit_amount, $credit_reason_code, $comments = null)
    {
        return $this->__ws_call('apply_service_credit', Array(
                'account_no' => $account_no,
                'credit_amount' => $credit_amount,
                'credit_reason_code' => $credit_reason_code,
                'comments' => $comments
        ));
    }

    /**
     * Issues a credit to a specified account.
     * @param int $account_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param double $credit_amount The amount of credit to be applied to the account.
     * @param int $credit_reason_code The reason a given credt was/is to be applied to the account.
     * @param string $comments Additional explanatory text relating to this API call.
     * @param array $specific_charge_transaction_id A list of specific charges, see below
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions.
     * @return mixed[] int transaction_id The unique identifier for a given transaction<br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function apply_cash_credit($account_no, $credit_amount, $credit_reason_code, $comments = null, $specific_charge_transaction_id = null, $client_receipt_id = null)
    {
        return $this->__ws_call('apply_cash_credit', Array(
                'account_no' => $account_no,
                'credit_amount' => $credit_amount,
                'credit_reason_code' => $credit_reason_code,
                'comments' => $comments,
                'specific_charge_transaction_id' => $specific_charge_transaction_id,
                'client_receipt_id' => $client_receipt_id
        ));
    }

    /**
     * Creates a pre-defined, recurring order called a standing order. A standing order will automatically generate order transactions for a specified account and a specified number of iterations with a specified time interval between iterations.
     * @param int $account_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $billing_interval_units Number of times &quot;billing_interval_type&quot; should be multiplied by in order to determine time to elapse between orders generated from this standing order (e.g. a &quot;billing_interval_type&quot; value of &quot;M&quot; combined with a &quot;billing_interval_units value of &quot;2 indicates that two months should elapse between each order generated from this standing order.
     * @param int $times_to_bill Indicator specifying the total number of orders to be generated from this standing order. Value must be &gt;0.To create an &quot;indefinite&quot; standing order, specify -1.
     * @param string $billing_interval_type Indicator specifying the type of time unit multiplied by the value provided in parameter billing_interval_units, determining the time to elapse between each order generated from this standing order.
     * @param string $first_bill_date Date to commence order generation based on this standing order. A null value causes the first order to be generated in the next Aria daily batch processing run.
     * @param array $standing_order Multidimensional array &quot;standing_order&quot;: The standing_order array represent order-based (i.e. one-time purchased) items, and valid values must be pre-defined in Aria&#039;s inventory table structure.
     * @param string $client_order_id This is the client-assigned order identifier.
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions
     * @return mixed[] int standing_order_no Aria assigned unique identifier for the standing order record created.<br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function record_standing_order($account_no, $billing_interval_units, $times_to_bill, $billing_interval_type = null, $first_bill_date = null, $standing_order = null, $client_order_id = null, $client_receipt_id = null)
    {
        return $this->__ws_call('record_standing_order', Array(
                'account_no' => $account_no,
                'billing_interval_units' => $billing_interval_units,
                'times_to_bill' => $times_to_bill,
                'billing_interval_type' => $billing_interval_type,
                'first_bill_date' => $first_bill_date,
                'standing_order' => $standing_order,
                'client_order_id' => $client_order_id,
                'client_receipt_id' => $client_receipt_id
        ));
    }

    /**
     * Cancels all future orders in a standing order. This does not cancel previously generated orders in a standing order. Please note: The cancellation goes into effect immediately and is not reversible.
     * @param int $standing_order_no Aria assigned unique identifier for the standing order record created.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function cancel_standing_order($standing_order_no)
    {
        return $this->__ws_call('cancel_standing_order', Array(
                'standing_order_no' => $standing_order_no
        ));
    }

    /**
     * Move a payment from one invoice to another.
     * @param int $account_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $payment_id Aria Event number of payment event.
     * @param array $specific_charge_transaction_id A list of specific charges, see below
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function move_payment($account_no, $payment_id, $specific_charge_transaction_id)
    {
        return $this->__ws_call('move_payment', Array(
                'account_no' => $account_no,
                'payment_id' => $payment_id,
                'specific_charge_transaction_id' => $specific_charge_transaction_id
        ));
    }

    /**
     * Creates bulk usage records for a specified client for inclusion in a future invoice. This API should not be used unless there are more than 100 records being inserted for performance reasons.
     * @param array $usage_records 
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array error_records If client record IDs are provided, an array of error codes and error messages for individual records
     */
    public function bulk_record_usage($usage_records)
    {
        return $this->__ws_call('bulk_record_usage', Array(
                'usage_records' => $usage_records
        ));
    }

    /**
     * Creates a usage record for for a specified account for inclusion in a future invoice.
     * @param double $usage_units The volume of usage consumed by the account holder.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $userid Client(or user)-assigned account identifier. If &quot;acct_no&quot; is not provided, must correctly identify the account to which the given usage record is to be assigned. All usage records must identify either an &quot;acct_no&quot; or a &quot;userid&quot;.
     * @param int $usage_type Aria assigned identifier for the type of usage being recorded. Either this field  OR &quot;usage_type_code&quot; must be passed into the API to denote which usage type to  record. Please consult Aria support representatives for a list of allowable  usage_type values for the given client.
     * @param string $usage_date The date the usage was consumed by the account holder.
     * @param double $billable_units If the number of units of usage incurred differs from the number of units to be accrued for billing purposes, this fields provides for the optional designation of the billable units. If null, the number of units provided in &quot;usage_units&quot; will be billed.
     * @param double $amt Optional currency value (with up to 2 positions after the decimal) denoting a specific total amount for which the account holder should be charged for this specific usage record. If this field (and field &quot;&quot;rate&quot;&quot;) are null (the standard case) the system will aggregate the number of units on this usage record with all other usage records of the same type on this account within the same billing period at invoicing time and bill the account holder for the aggregate total per the rate structures defined by their applicable service plans.This field should not be used under normal circumstances.&quot;
     * @param double $rate Optional currency value (with up to 5 positions after the decimal) denoting a specific amount per unit for which the account holder should be charged for each unit of usage denoted on this specific usage record. This field is ignored if a value is provided in field &quot;&quot;amt&quot;&quot;. If this field (and field &quot;&quot;amt&quot;&quot;) are null (the standard case) the system will aggregate the number of units on this usage record with all other usage records of the same type on this account within the same billing period at invoicing time and bill the account holder for the aggregate total per the rate structures defined by their applicable service plans. This field should not be used under normal circumstances.&quot;
     * @param string $telco_from The unconstrained string identifying the &quot;sender&quot; of the message represented by this usage record. Intended for usage records that represent a telecom-based form of usage whereby the sender/originator and the recipient/terminator of the message/usage record are desired to be recorded as notational-only elements (e.g. a phone call whereby the &quot;from&quot; telephone number and the &quot;to&quot; telephone number are desired as notational elements). Does not effect assignment, categorization, rating, or billing/invoicing in any way.
     * @param string $telco_to The unconstrained string identifying the &quot;recipient&quot; of the message represented by this usage record. Intended for usage records that represent a telecom-based form of usage whereby the sender/originator and the recipient/terminator of the message/usage record are desired to be recorded as notational-only elements (e.g. a phone call whereby the &quot;from&quot; telephone number and the &quot;to&quot; telephone number are desired as notational elements). Does not effect assignment, categorization, rating, or billing/invoicing in any way.
     * @param string $comments Additional explanatory text relating to this API call.
     * @param string $exclude_from_billing Determines whether or not the given usage record should be entirely and permanently excluded from inclusion in any future billing (invoicing) process. Setting this value to &quot;true&quot; results in the usage record being recorded for notational purposes only.
     * @param string $exclusion_comments Free text comments intended to explain the decision to exclude this record from billing. Only honored/recorded if value passed to &quot;exclude_from_billing&quot; = &quot;true&quot;.
     * @param string $qualifier_1 Client-defined string of any value meant for internal use and/or display to customers in statements.
     * @param string $qualifier_2 Client-defined string of any value meant for internal use and/or display to customers in statements.
     * @param string $qualifier_3 Client-defined string of any value meant for internal use and/or display to customers in statements.
     * @param string $qualifier_4 Client-defined string of any value meant for internal use and/or display to customers in statements.
     * @param int $parent_usage_rec_no The Aria assigned parent usage record identifier for a child account.
     * @param string $usage_type_code Client-assigned identifier for the type of usage being recorded.  Either this field OR &quot;usage_type&quot; must be passed into the API to denote  which usage type to record.
     * @param string $client_record_id Client-provided unique identifier for a given usage record
     * @param string $caller_id Client-provided unique identifier for a given account
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int usage_rec_no Aria assigned usage record identifier
     */
    public function record_usage($usage_units, $acct_no = null, $userid = null, $usage_type = null, $usage_date = null, $billable_units = null, $amt = null, $rate = null, $telco_from = null, $telco_to = null, $comments = null, $exclude_from_billing = null, $exclusion_comments = null, $qualifier_1 = null, $qualifier_2 = null, $qualifier_3 = null, $qualifier_4 = null, $parent_usage_rec_no = null, $usage_type_code = null, $client_record_id = null, $caller_id = null)
    {
        return $this->__ws_call('record_usage', Array(
                'usage_units' => $usage_units,
                'acct_no' => $acct_no,
                'userid' => $userid,
                'usage_type' => $usage_type,
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
                'parent_usage_rec_no' => $parent_usage_rec_no,
                'usage_type_code' => $usage_type_code,
                'client_record_id' => $client_record_id,
                'caller_id' => $caller_id
        ));
    }

    /**
     * Returns information about the orders associated with a specified account.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $my_order_no If this value is not null, then information about this specific order number will be retrieved. If null, then all orders for the given acct_no will be retrieved.
     * @param string $my_client_order_id Client specified order id.
     * @param int $limit_records Limits the number of records which are returned.
     * @param int $details_flag If 1, also returns the order line items
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array order An array containing the order record
     */
    public function get_order($acct_no, $my_order_no = null, $my_client_order_id = null, $limit_records = null, $details_flag = null)
    {
        return $this->__ws_call('get_order', Array(
                'acct_no' => $acct_no,
                'my_order_no' => $my_order_no,
                'my_client_order_id' => $my_client_order_id,
                'limit_records' => $limit_records,
                'details_flag' => $details_flag
        ));
    }

    /**
     * Provides information about one or more standing orders associated with a speficied account.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $my_standing_order If this value is not null, then information about this specific standing order number will be retrieved. If null, then all standing order for the given acct_no will be retrieved.
     * @param string $my_client_order_id Client defined order id.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array so 
     */
    public function get_standing_order($acct_no, $my_standing_order = null, $my_client_order_id = null)
    {
        return $this->__ws_call('get_standing_order', Array(
                'acct_no' => $acct_no,
                'my_standing_order' => $my_standing_order,
                'my_client_order_id' => $my_client_order_id
        ));
    }

    /**
     * Provides information about the line items in a specified standing order.
     * @param int $standing_order_no Standing Order number to query.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array so_items An array containing the standing order items.
     */
    public function get_standing_order_items($standing_order_no)
    {
        return $this->__ws_call('get_standing_order_items', Array(
                'standing_order_no' => $standing_order_no
        ));
    }

    /**
     * Provides information about the orders that have been created using a specified standing order.
     * @param int $standing_order_no Unique ID for this standing order.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array order An array containing related order history records.
     */
    public function get_standing_order_hist($standing_order_no)
    {
        return $this->__ws_call('get_standing_order_hist', Array(
                'standing_order_no' => $standing_order_no
        ));
    }

    /**
     * Calculates a hypothetical invoice based on geographic data and hypothetical invoice line items and returns the taxes that would appear on that hypothetical invoice based on the taxation configuration rules currently set up for the client within Aria.
     * @param string $log_id When using a client&#039;s custom tax server, this value will identify the Aria log entry for the tax server request.
     * @param string $first_name Contact Fist name
     * @param string $mi The Middle Initial of the contact.
     * @param string $last_name Contact Last name
     * @param string $address1 First address line of the contact
     * @param string $address2 second address line of the contact
     * @param string $city City of the contact
     * @param string $state_prov_code State or Province of the contact. The official postal-service codes for all United States and Canada states, provinces, and territories.
     * @param string $zip_code Postal/Zip code for the contact address.
     * @param string $country_code Country of the contact
     * @param string $currency_code The 3-character ISO-compliant currency code in lowercase for monetary values used in the context of this API method.
     * @param array $pre_calc_plan 
     * @param array $pre_calc_sku 
     * @param int $tax_exempt_cd Tax exemption status (this is not part of the above arrays). For Aria taxes, 0=not exempt, 1=exempt from state taxes, 2=exempt from country taxes, 3=exempt from state and country taxes. Values may be different for client&#039;s custom tax servers.
     * @param string $address3 The third line of the address
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array inv_calc_out <br>array third_party_errors Errors from third-party systems like taxation engines are returned here, whereas the Aria-generated error codes are returned in the error_code and error_msg fields at the root level of the API return.
     */
    public function pre_calc_invoice($log_id = null, $first_name = null, $mi = null, $last_name = null, $address1 = null, $address2 = null, $city = null, $state_prov_code = null, $zip_code = null, $country_code = null, $currency_code = null, $pre_calc_plan = null, $pre_calc_sku = null, $tax_exempt_cd = null, $address3 = null)
    {
        return $this->__ws_call('pre_calc_invoice', Array(
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
                'address3' => $address3
        ));
    }

    /**
     * Returns information about the items in a particular order associated with a specified account.
     * @param int $order_no The unique identifier for an order in the context of an client_no and account_no.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array order_items 
     */
    public function get_order_items($order_no)
    {
        return $this->__ws_call('get_order_items', Array(
                'order_no' => $order_no
        ));
    }

    /**
     * Generates an invoice for a specified account.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $force_pending Determines whether or not to create the invoice as a pending invoice (if client is not already configured to do so). Note: if client is configured for pending invoices, passing &quot;false&quot; here will NOT override the client setting.
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions
     * @param int $alt_bill_day Alternate bill day.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int invoice_no The unique identifer of a given invoice.<br>array third_party_errors Errors from third-party systems like taxation engines are returned here, whereas the Aria-generated error codes are returned in the error_code and error_msg fields at the root level of the API return.
     */
    public function gen_invoice($acct_no, $force_pending = null, $client_receipt_id = null, $alt_bill_day = null)
    {
        return $this->__ws_call('gen_invoice', Array(
                'acct_no' => $acct_no,
                'force_pending' => $force_pending,
                'client_receipt_id' => $client_receipt_id,
                'alt_bill_day' => $alt_bill_day
        ));
    }

    /**
     * Get account&#039;s preview statement.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param double $alt_stmt_template_no The statement template to use when generating a statement in a format other than account statement template
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string out_statement The returned account statement.<br>string mime_type MIME type for statement encoding.
     */
    public function get_acct_preview_statement($acct_no, $alt_stmt_template_no = null)
    {
        return $this->__ws_call('get_acct_preview_statement', Array(
                'acct_no' => $acct_no,
                'alt_stmt_template_no' => $alt_stmt_template_no
        ));
    }

    /**
     * Returns a statement associated with a specified account and invoice.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $invoice_no The unique identifer of a given invoice.
     * @param string $do_encoding True indicates to acquire the message size after doing MIME encoding, False acquires message size without MIME encoding.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string out_statement The returned account statement.<br>string mime_type MIME type for statement encoding.
     */
    public function get_statement_for_invoice($acct_no, $invoice_no, $do_encoding = null)
    {
        return $this->__ws_call('get_statement_for_invoice', Array(
                'acct_no' => $acct_no,
                'invoice_no' => $invoice_no,
                'do_encoding' => $do_encoding
        ));
    }

    /**
     * Returns the number of characters in a statement associated with a specified account and invoice. You can use this call to determine the size of a statement before trying to capture the statement in a variable.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $invoice_no The unique identifer of a given invoice.
     * @param string $do_encoding True indicates to acquire the message size after doing MIME encoding, False acquires message size without MIME encoding.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int num_chars The number of the characters in the statement.
     */
    public function get_statement_for_inv_size($acct_no, $invoice_no, $do_encoding = null)
    {
        return $this->__ws_call('get_statement_for_inv_size', Array(
                'acct_no' => $acct_no,
                'invoice_no' => $invoice_no,
                'do_encoding' => $do_encoding
        ));
    }

    /**
     * Returns the line items of a specified invoice.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $src_transaction_id Either the Aria transaction ID or the Aria invoice number for the invoice
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array invoice_line_items Array of invoice line items for this invoice.<br>int is_pending_ind Whether or not this invoice is pending
     */
    public function get_invoice_details($acct_no, $src_transaction_id)
    {
        return $this->__ws_call('get_invoice_details', Array(
                'acct_no' => $acct_no,
                'src_transaction_id' => $src_transaction_id
        ));
    }

    /**
     * Returns a list of credit transactions that have been applied against a particular charge transaction for a specified account.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $src_transaction_id Either the Aria transaction ID or the Aria invoice number for the invoice
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array invoice_payments Array of invoice payments returned upon succesful completion of the API call.
     */
    public function get_payments_on_invoice($acct_no, $src_transaction_id = null)
    {
        return $this->__ws_call('get_payments_on_invoice', Array(
                'acct_no' => $acct_no,
                'src_transaction_id' => $src_transaction_id
        ));
    }

    /**
     * Returns a list of charge transactions against which a particular credit transaction has been applied for a specified account.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $src_transaction_id Aria transaction ID for the credit transaction (e.g., Payment)
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array payment_applications An Array of payment applications.
     */
    public function get_payment_applications($acct_no, $src_transaction_id = null)
    {
        return $this->__ws_call('get_payment_applications', Array(
                'acct_no' => $acct_no,
                'src_transaction_id' => $src_transaction_id
        ));
    }

    /**
     * Returns a list of actions associated with a particular combination of client receipt ID and account.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array receipt_action 
     */
    public function get_all_actions_by_receipt_id($acct_no, $client_receipt_id = null)
    {
        return $this->__ws_call('get_all_actions_by_receipt_id', Array(
                'acct_no' => $acct_no,
                'client_receipt_id' => $client_receipt_id
        ));
    }

    /**
     * Approves, discards, or regenerates a pending invoice. A pending invoice can be retrieved based on the invoice number or account number. After a pending invoice is approved, this call can also collect a payment and send a statement.If the collection fails, the pending invoice will automatically be voided provided the system setting &quot;Auto Void Pending Invoice on Collection Failure&quot; is set to True.
     * @param int $invoice_no The unique identifer of a given invoice.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $action_directive Identifies which action to take on the pending invoice. If null, defaults to &quot;approve pending invoice&quot;.
     * @param int $bill_seq The unique identifier of the bill sequence number.
     * @param int $alt_pay_method If you wish to use the account&#039;s current form of payment, leave this value empty. If you wish to use an alternate credit card, enter &#039;1&#039; for this value.
     * @param string $cc_number Credit card number.
     * @param int $cc_expire_mm Expiration month for the credit card payment instrument.
     * @param int $cc_expire_yyyy Expiration year for the credit card payment instrument.
     * @param string $bank_routing_num The ABA routing number for the bank holding &#039;bank_acct_num&#039;
     * @param string $bank_acct_num The bank account number.
     * @param string $bill_company_name Company name of the billing contact
     * @param string $bill_first_name First name of the billing contact
     * @param string $bill_middle_initial Middle Initial of the billing contact
     * @param string $bill_last_name Last name of the billing contact
     * @param string $bill_address1 First address line of the billing contact
     * @param string $bill_address2 Second address line of the billing contact
     * @param string $bill_city City of the billing contact
     * @param string $bill_locality Locality of the billing contact
     * @param string $bill_state_prov State or Province of the billing contact. The official postal-service codes for all United States and Canada states, provinces, and territories.
     * @param string $bill_zip Zip Code of the billing contact
     * @param string $bill_country ISO-compliant 2-country code abbreviation for the billing address country in uppercase.
     * @param string $bill_email Email of the billing contact
     * @param string $bill_phone Phone of the billing contact
     * @param string $bill_phone_extension Phone extension of the billing contact
     * @param string $bill_cell_phone Cell phone of the billing contact
     * @param string $bill_work_phone Work phone of the billing contact
     * @param string $bill_work_phone_extension Work phone extenstion of the billing contact
     * @param string $cvv Card Verification Value, used to help verify a transaction is being requested by the card holder since this value is physically printed on the credit card.
     * @param string $alt_collect_on_approve If value is non-null, overrides the client setting regarding whether or not to automatically collect after approving the invoice. Leave this value null to use the client setting.
     * @param string $alt_send_statement_on_approve If value is non-null, overrides the client setting regarding whether or not to automatically send a statement after approving the invoice. Leave this value null to use the client setting.
     * @param string $cancel_orders_on_discard If true then orders will be canceled if the action directive is set to discard pending invoices.
     * @param string $bill_address3 The third line of the billing address
     * @param string $track_data1 The raw &quot;track 1&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param string $track_data2 The raw &quot;track 2&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions.
     * @return mixed[] int new_invoice_no The new invoice number generated.<br>int collection_error_code If a collection is attempted, returns the error code associated with the collection.<br>string collection_error_msg The error message associated with collection_error_code.<br>int statement_error_code Error code for statement generation failure.<br>string statement_error_msg The text message associated with &#039;statement_error_code&#039;<br>string proc_cvv_response The processor return code from CVV validation (deprecated)<br>string proc_avs_response Processor return code from address validation<br>string proc_cavv_response The processors return code for security validation (includes cvv)<br>string proc_status_code The processor status code<br>string proc_status_text The processors status description<br>string proc_payment_id The processor payment id<br>string proc_auth_code Authorization code provided by the issuing bank<br>string proc_merch_comments Additional information passed to payment processor<br>int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function manage_pending_invoice($invoice_no = null, $acct_no = null, $action_directive = null, $bill_seq = null, $alt_pay_method = null, $cc_number = null, $cc_expire_mm = null, $cc_expire_yyyy = null, $bank_routing_num = null, $bank_acct_num = null, $bill_company_name = null, $bill_first_name = null, $bill_middle_initial = null, $bill_last_name = null, $bill_address1 = null, $bill_address2 = null, $bill_city = null, $bill_locality = null, $bill_state_prov = null, $bill_zip = null, $bill_country = null, $bill_email = null, $bill_phone = null, $bill_phone_extension = null, $bill_cell_phone = null, $bill_work_phone = null, $bill_work_phone_extension = null, $cvv = null, $alt_collect_on_approve = null, $alt_send_statement_on_approve = null, $cancel_orders_on_discard = null, $bill_address3 = null, $track_data1 = null, $track_data2 = null, $client_receipt_id = null)
    {
        return $this->__ws_call('manage_pending_invoice', Array(
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
                'bill_address3' => $bill_address3,
                'track_data1' => $track_data1,
                'track_data2' => $track_data2,
                'client_receipt_id' => $client_receipt_id
        ));
    }

    /**
     * Cancels an account holder&#039;s order and stops all billing related to the order if the following are true: The order has not yet been billed and the order has not already been canceled.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $order_no The unique identifier for an order in the context of an client_no and account_no.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function cancel_order($acct_no, $order_no)
    {
        return $this->__ws_call('cancel_order', Array(
                'acct_no' => $acct_no,
                'order_no' => $order_no
        ));
    }

    /**
     * Returns refund information, including invoice reversals, for a specified account.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $include_voided Include voided invoices in the search results.
     * @param int $aria_event_no Aria Event number of the writeoff event
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array refund_details 
     */
    public function get_refund_details($acct_no, $include_voided = null, $aria_event_no = null)
    {
        return $this->__ws_call('get_refund_details', Array(
                'acct_no' => $acct_no,
                'include_voided' => $include_voided,
                'aria_event_no' => $aria_event_no
        ));
    }

    /**
     * allows creation of order and plan changes on a single invoice
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param array $order_line_items 
     * @param array $cart_supp_plans 
     * @param string $client_order_id This is the client-assigned order identifier.
     * @param string $coupon_code (DEPRECATED)  This parameter is deprecated as of Release 6.21 and replaced with coupon_codes. The code of the coupon to which to apply the discount.  If code is not valid for any reason, an appropriate error code is returned and the entire transaction (including the supp plan assignment and any possible invoice creation) is rolled back.
     * @param string $comments Additional explanatory text relating to this API call.
     * @param string $do_write Boolean indicator informing Aria whether or not to actually perform the requested plan assignment/de-assignment. If &#039;false&#039; is passed in this field Aria will, if applicable, calculate any potential proration effect that would result from this call and return that value in the output field &#039;proration_result_amount&#039; described below without actually performing the requested operation or charging/crediting the account. This is useful to interfaces that wish to present the user with a &#039;confirmation page&#039; informing of the would-be effects of the requested operation prior to actually performing it.  Do_write defaults to &#039;true&#039;
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions
     * @param int $bill_seq The billing sequence number
     * @param int $alt_pay_method If you wish to use the account&#039;s current form of payment, leave this value empty. If you wish to use an alternate credit card, enter &#039;1&#039; for this value.
     * @param string $cc_number Credit card number.
     * @param int $cc_expire_mm Expiration month for the credit card payment instrument.
     * @param int $cc_expire_yyyy Expiration year for the credit card payment instrument.
     * @param string $bank_routing_num The ABA routing number for the bank holding &#039;bank_acct_num&#039;
     * @param string $bank_acct_num The bank account number.
     * @param string $bill_company_name Company name of the billing contact
     * @param string $bill_first_name First name of the billing contact
     * @param string $bill_middle_initial Middle Initial of the billing contact
     * @param string $bill_last_name Last name of the billing contact
     * @param string $bill_address1 First address line of the billing contact
     * @param string $bill_address2 Second address line of the billing contact
     * @param string $bill_city City of the billing contact
     * @param string $bill_locality Locality of the billing contact
     * @param string $bill_state_prov State or Province of the billing contact. The official postal-service codes for all United States and Canada states, provinces, and territories.
     * @param string $bill_zip Zip Code of the billing contact
     * @param string $bill_country Country of the billing contact. The ISO-compliant 2-character country code abbreviation in uppercase.
     * @param string $bill_email Email of the billing contact
     * @param string $bill_phone Phone of the billing contact
     * @param string $bill_phone_extension Phone extension of the billing contact
     * @param string $bill_cell_phone Cell phone of the billing contact
     * @param string $bill_work_phone Work phone of the billing contact
     * @param string $bill_work_phone_extension Work phone extenstion of the billing contact
     * @param string $cvv Card Verification Value, used to help verify a transaction is being requested by the card holder since this value is physically printed on the credit card.
     * @param string $bill_address3 The third line of the billing address
     * @param string $track_data1 The raw &quot;track 1&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param string $track_data2 The raw &quot;track 2&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param int $alt_inv_template_no The invoice template number to use for this order, if different from the default template
     * @param int $sync_mstr_bill_dates_override Overrides the client-level setting that determines whether or not master plan billing dates should be reset when assigning a new supplemental plan. If this value is left empty, the client-level setting will take effect.
     * @param array $multiple_coupons 
     * @param string $client_alt_inv_template_id The client alternate invoice template number to use for this order, if different from the default template
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int order_no The unique identifier for an order in the context of an client_no and account_no.<br>int invoice_no The unique identifer of a given invoice.<br>array cart_invoice_line_items <br>int invoicing_error_code The error code generated by Aria when Aria attempted to generate a invoice<br>string invoicing_error_msg The text message associated with &#039;invoicing_error_code&#039;<br>int collection_error_code If a collection is attempted, returns the error code associated with the collection.<br>string collection_error_msg The error message associated with collection_error_code.<br>int statement_error_code The error code generated by Aria when Aria attempted to generate a statement<br>string statement_error_msg The text message associated with &#039;statement_error_code&#039;<br>int transaction_id The unique identifier for a given transaction<br>string proc_cvv_response The processor return code from CVV validation (deprecated)<br>string proc_avs_response Processor return code from address validation<br>string proc_cavv_response The processors return code for security validation (includes cvv)<br>string proc_status_code The processor status code<br>string proc_status_text The processors status description<br>string proc_payment_id The processor payment id<br>string proc_auth_code Authorization code provided by the issuing bank<br>string proc_merch_comments Additional information passed to payment processor<br>array third_party_errors Errors from third-party systems like taxation engines are returned here, whereas the Aria-generated error codes are returned in the error_code and error_msg fields at the root level of the API return.
     */
    public function create_order_with_plans($acct_no, $order_line_items = null, $cart_supp_plans = null, $client_order_id = null, $coupon_code = null, $comments = null, $do_write = null, $client_receipt_id = null, $bill_seq = null, $alt_pay_method = null, $cc_number = null, $cc_expire_mm = null, $cc_expire_yyyy = null, $bank_routing_num = null, $bank_acct_num = null, $bill_company_name = null, $bill_first_name = null, $bill_middle_initial = null, $bill_last_name = null, $bill_address1 = null, $bill_address2 = null, $bill_city = null, $bill_locality = null, $bill_state_prov = null, $bill_zip = null, $bill_country = null, $bill_email = null, $bill_phone = null, $bill_phone_extension = null, $bill_cell_phone = null, $bill_work_phone = null, $bill_work_phone_extension = null, $cvv = null, $bill_address3 = null, $track_data1 = null, $track_data2 = null, $alt_inv_template_no = null, $sync_mstr_bill_dates_override = null, $multiple_coupons = null, $client_alt_inv_template_id = null)
    {
        return $this->__ws_call('create_order_with_plans', Array(
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
                'bill_address3' => $bill_address3,
                'track_data1' => $track_data1,
                'track_data2' => $track_data2,
                'alt_inv_template_no' => $alt_inv_template_no,
                'sync_mstr_bill_dates_override' => $sync_mstr_bill_dates_override,
                'multiple_coupons' => $multiple_coupons,
                'client_alt_inv_template_id' => $client_alt_inv_template_id
        ));
    }

    /**
     * Returns an array of payment records for a a given acct_no that are considered refundable.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array refundable_payments 
     */
    public function get_refundable_payments($acct_no)
    {
        return $this->__ws_call('get_refundable_payments', Array(
                'acct_no' => $acct_no
        ));
    }

    /**
     * Returns the list of invoice line items that were fully or partially paid. The purpose of this is to provide the information necessary to complete invoice line item refunds.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $payment_transaction_id The payment transaction by which to search for invoices
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array reversible_invoices 
     */
    public function get_reversible_invs_by_payment($acct_no, $payment_transaction_id)
    {
        return $this->__ws_call('get_reversible_invs_by_payment', Array(
                'acct_no' => $acct_no,
                'payment_transaction_id' => $payment_transaction_id
        ));
    }

    /**
     * Isues refunds of payment amounts and any invoice line items to be reversed for a specified account.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $payment_transaction_id The Aria-generated transaction ID of the payment made.
     * @param int $reason_code The refund reason code.
     * @param double $total_refund_amount The total amount intended to refund. If it is null and auto is set to &#039;true&#039;, the refund amount is calculated based on line items reversed.
     * @param string $refund_check_number The check number associated to the refund.
     * @param string $comments The user comment on the refund.
     * @param string $do_write If is is set to &#039;FALSE&#039;, this API will function as in preview mode. No refund and/or reversal will be written to database. The function will merely return the reversal line items including calculated taxes.  If it is set to &#039;true&#039;, the refund and reversal, if any, will be commited.
     * @param string $auto_calc_refund This indicates if the refund amount is to be calculated based on reversal line itmes. If auto_calc_refund is set to &#039;true&#039; and if do_write is &#039;true&#039;, if the total_refund_amount is not null, process will use the input total_refund_amount, but if the total_refund_amount is null, then the total_refund_amount will be equal to the calculated total reversal amount.  However, do_write = &#039;true&#039; and auto_calc_refund = &#039;false&#039; is not a valid combination and will error out.
     * @param array $invoices_to_reverse 
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>double applied_total_refund_amount The total amount that has been refunded.  If inAuto is TRUE, this amount will equal to the total reversal amount.<br>double applied_total_reversal_amount The total amount that has been reversed on this invoice line. This amount is calculated for relevant tax lines.<br>int transaction_id Event number that was recorded in the account transaction table for this refund.<br>array reversed_invoice_lines 
     */
    public function issue_refund_to_acct($acct_no, $payment_transaction_id, $reason_code, $total_refund_amount = null, $refund_check_number = null, $comments = null, $do_write = null, $auto_calc_refund = null, $invoices_to_reverse = null, $client_receipt_id = null)
    {
        return $this->__ws_call('issue_refund_to_acct', Array(
                'acct_no' => $acct_no,
                'payment_transaction_id' => $payment_transaction_id,
                'reason_code' => $reason_code,
                'total_refund_amount' => $total_refund_amount,
                'refund_check_number' => $refund_check_number,
                'comments' => $comments,
                'do_write' => $do_write,
                'auto_calc_refund' => $auto_calc_refund,
                'invoices_to_reverse' => $invoices_to_reverse,
                'client_receipt_id' => $client_receipt_id
        ));
    }

    /**
     * Update the refund check number on a refund processed without a check number earlier.
     * @param int $transaction_id The unique identifier for a given transaction
     * @param int $refund_check_number The check number associated to the refund.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $acct_user_id Client (or user)-assigned unique account identifier.
     * @param string $client_acct_id This is the client-assigned identifier for the account.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function update_refund_check_no($transaction_id, $refund_check_number, $acct_no = null, $acct_user_id = null, $client_acct_id = null)
    {
        return $this->__ws_call('update_refund_check_no', Array(
                'transaction_id' => $transaction_id,
                'refund_check_number' => $refund_check_number,
                'acct_no' => $acct_no,
                'acct_user_id' => $acct_user_id,
                'client_acct_id' => $client_acct_id
        ));
    }

    /**
     * Returns the writeoff details of an account.
     * @param int $acct_no Aria assigned unique identifier indicating each email template created in Aria.
     * @param int $aria_event_no Aria Event number of the writeoff event
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array writeoff_details A multidimensional array containing the details of all writeoffs applied to an account.
     */
    public function get_writeoff_details($acct_no, $aria_event_no)
    {
        return $this->__ws_call('get_writeoff_details', Array(
                'acct_no' => $acct_no,
                'aria_event_no' => $aria_event_no
        ));
    }

    /**
     * Returns the contents of a particular xml statement associated with a specified account.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $xml_statement_no The unique xml statement number.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string xml_statement_content The xml statement content.
     */
    public function get_aria_xml_statement($acct_no, $xml_statement_no)
    {
        return $this->__ws_call('get_aria_xml_statement', Array(
                'acct_no' => $acct_no,
                'xml_statement_no' => $xml_statement_no
        ));
    }

    /**
     * Returns a list of payments associated with an account.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $start_date Specifies start date. The date is in the format yyyy-mm-dd
     * @param string $end_date Specifies end date. The date is in the format yyyy-mm-dd
     * @param int $limit_records Specifies the number of payment transactions to be returned. There will be no limits if not specified.
     * @param int $details_flag If 1, also return the details for the payments
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array payment_history An Array of payment details.
     */
    public function get_acct_payment_history($acct_no, $start_date = null, $end_date = null, $limit_records = null, $details_flag = null)
    {
        return $this->__ws_call('get_acct_payment_history', Array(
                'acct_no' => $acct_no,
                'start_date' => $start_date,
                'end_date' => $end_date,
                'limit_records' => $limit_records,
                'details_flag' => $details_flag
        ));
    }

    /**
     * Returns the list of invoices on which the payment has been applied.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $transaction_id Payment transaction ID for which the application details are to be retrieved.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array payment_application_details An Array of account payment application details.
     */
    public function get_payment_application_dtls($acct_no, $transaction_id)
    {
        return $this->__ws_call('get_payment_application_dtls', Array(
                'acct_no' => $acct_no,
                'transaction_id' => $transaction_id
        ));
    }

    /**
     * Returns the list of optional transaction qualifiers submitted for the given Transaction ID.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $transaction_id Transaction ID for which the optional transaction qualifiers are to be  retrieved.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string trans_create_user Specifies the user ID that created the transaction.<br>string trans_create_date Specifies the date/time on which the transaction was created. The date is in the format yyyy-mm-dd hh24:mi:ss.<br>array extended_transaction_qualifiers An  Array of optional transaction qualifiers for the given transaction ID.
     */
    public function get_extended_transaction_info($acct_no, $transaction_id)
    {
        return $this->__ws_call('get_extended_transaction_info', Array(
                'acct_no' => $acct_no,
                'transaction_id' => $transaction_id
        ));
    }

    /**
     * If usage recorded in the Aria system was incorrect in some way, this API allows that usage to be discarded.  Usage is still contained within the Aria system, but is not billable and will return with excluded reason codes if usage is fetched.  Fetching usage from Aria prior to calling this API is not required, as it accepts either Aria-defined usage codes or client-defined usage codes.
     * @param array $usage_record_nos 
     * @param array $client_record_ids 
     * @param int $exclusion_reason_cd The exclude reason code, defining why these usage records are being removed
     * @param string $exclusion_comment Optional comment on the reason behind this API call
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array failed_records 
     */
    public function discard_usage($usage_record_nos = null, $client_record_ids = null, $exclusion_reason_cd = null, $exclusion_comment = null)
    {
        return $this->__ws_call('discard_usage', Array(
                'usage_record_nos' => $usage_record_nos,
                'client_record_ids' => $client_record_ids,
                'exclusion_reason_cd' => $exclusion_reason_cd,
                'exclusion_comment' => $exclusion_comment
        ));
    }

    /**
     * Create write-off or dispute the given invoice.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $invoice_no The unique identifer of a given invoice.
     * @param double $amount The amount to writeoff/dispute.
     * @param int $reason_code Reason code to writeoff/dispute.
     * @param string $comments Comments to writeoff/dispute.
     * @param int $do_dispute Specifies whether to dispute or not.
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int rec_no Write-off/dispute record number.<br>string created_by Write-off/dispute creator name.<br>double amount Write-off/dispute amount.<br>int invoice_no The unique identifer of a given invoice.<br>string invoice_date Invoice date.<br>double invoice_amt Invoice amount.<br>string dispute_creation_date Dispute created date.<br>string dispute_exp_date Dispute expiration date.<br>string comments Write-off/dispute comments.<br>int reason_code Write-off/dispute reason code.<br>int secondary_reason_code Dispute reason code.<br>int dispute_ind Specifies Write-off or dispute.<br>string can_unsettle Specifies if this dispute can be unsettled.
     */
    public function create_writeoff_or_dispute($acct_no, $invoice_no, $amount, $reason_code, $comments, $do_dispute = null, $client_receipt_id = null)
    {
        return $this->__ws_call('create_writeoff_or_dispute', Array(
                'acct_no' => $acct_no,
                'invoice_no' => $invoice_no,
                'amount' => $amount,
                'reason_code' => $reason_code,
                'comments' => $comments,
                'do_dispute' => $do_dispute,
                'client_receipt_id' => $client_receipt_id
        ));
    }

    /**
     * Retrieve the write-offs and disputes made on the account.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $dispute_or_writeoff_flag Specifies if the api should return write off details or dispute details or both
     * @param int $details_flag Flag to indicate whether the api will return writeoff invoices or not.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array write_off_info 
     */
    public function get_acct_writeoff_or_disputes($acct_no, $dispute_or_writeoff_flag = null, $details_flag = null)
    {
        return $this->__ws_call('get_acct_writeoff_or_disputes', Array(
                'acct_no' => $acct_no,
                'dispute_or_writeoff_flag' => $dispute_or_writeoff_flag,
                'details_flag' => $details_flag
        ));
    }

    /**
     * Get the eligible invoices to write-off or dispute.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array invoice_details 
     */
    public function get_invoices_to_writeoff_or_dispute($acct_no)
    {
        return $this->__ws_call('get_invoices_to_writeoff_or_dispute', Array(
                'acct_no' => $acct_no
        ));
    }

    /**
     * Settle dispute for the given dispute number.
     * @param int $acct_no Aria assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $dispute_no Dispute number.
     * @param int $settlement_action The amount need to be writeoff/dispute.
     * @param string $comments Comments to settle dispute.
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions.
     * @return mixed[] int error_code Aria assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int rec_no Write-off/dispute record number.<br>string created_by Write-off/dispute creator name.<br>double amount Write-off/dispute amount.<br>int invoice_no The unique identifer of a given invoice.<br>string invoice_date Invoice date.<br>double invoice_amt Invoice amount.<br>string dispute_creation_date Dispute create date.<br>string dispute_exp_date Dispute expiration date.<br>string comments Write-off/dispute comments.<br>int reason_code Write-off/dispute reason code.<br>int secondary_reason_code Dispute reason code.<br>int dispute_ind Specifies dispute or writeoff<br>string can_unsettle Specifies if this dispute can be unsettled.
     */
    public function settle_dispute_hold($acct_no, $dispute_no, $settlement_action, $comments = null, $client_receipt_id = null)
    {
        return $this->__ws_call('settle_dispute_hold', Array(
                'acct_no' => $acct_no,
                'dispute_no' => $dispute_no,
                'settlement_action' => $settlement_action,
                'comments' => $comments,
                'client_receipt_id' => $client_receipt_id
        ));
    }

    }
