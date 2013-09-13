<?php

require_once('baseariabilling.class.php');

/**
 * @package AriaBillingAccountServices
 */
class AriaBillingAccountServices extends BaseAriaBilling
{

        /**
     * WSDL File used to SOAP API calls
     * @var string $__wsdl_name Filename of WSDL file.
     */
    protected $__wsdl_name = 'account_services-doc_literal_wrapped.wsdl';
    /**
     * WSDL Version for SOAP calls
     * @var string $__wsdl_version Version of the WSDL.
     */
    protected $__wsdl_version = '6.13';
    
    /**
     * Get coupon detailed information including credit templates, discount rules, discount bundles.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $coupon_cd If passed, only the details for the coupon specified will be returned.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array coupons 
     */
    public function get_coupon_details($acct_no = null, $coupon_cd = null)
    {
        return $this->__ws_call('get_coupon_details', Array(
                'acct_no' => $acct_no,
                'coupon_cd' => $coupon_cd
        ));
    }

    /**
     * Deletes the coupon from the account and cancels any unconsumed credits on the account associated with the coupon
     * @param string $coupon_cd The code of the coupon to remove from the account
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function delete_acct_coupon($coupon_cd, $acct_no = null)
    {
        return $this->__ws_call('delete_acct_coupon', Array(
                'coupon_cd' => $coupon_cd,
                'acct_no' => $acct_no
        ));
    }

    /**
     * Updates the contact information for a specified account. To delete a piece of contact information, set the corresponding field to &quot;~&quot;. Leaving a field blank will retain the existing information in the field.
     * @param int $account_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $first_name Contact Fist name
     * @param string $last_name Contact Last name
     * @param string $mi Middle Initial of the contact.
     * @param string $company_name Company name of the contact
     * @param string $address1 First address line of the contact
     * @param string $address2 Second address line of the contact
     * @param string $city City of the contact
     * @param string $locality Locality of the contact
     * @param string $state_prov State or Province of the contact address.
     * @param string $country Country of the contact
     * @param string $postal_code Postal/Zip code for the contact address.
     * @param string $intl_phone This is the international phone number of the contact
     * @param string $alt_email Alternate email address for contact.
     * @param string $birthdate Contact date of birth
     * @param string $address3 The third line of the address
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function update_acct_contact($account_no, $first_name = null, $last_name = null, $mi = null, $company_name = null, $address1 = null, $address2 = null, $city = null, $locality = null, $state_prov = null, $country = null, $postal_code = null, $intl_phone = null, $alt_email = null, $birthdate = null, $address3 = null)
    {
        return $this->__ws_call('update_acct_contact', Array(
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
                'address3' => $address3
        ));
    }

    /**
     * Changes the password, secret question, secret answer, and/or personal identification number for a specified account.
     * @param int $account_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $password Password for the given user
     * @param string $secret_question_answer The response to a users &#039;secret_question&#039;
     * @param string $secret_question The users secret question recorded to recover a password.
     * @param string $pin Persinal Identification number
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function update_acct_credentials($account_no, $password = null, $secret_question_answer = null, $secret_question = null, $pin = null)
    {
        return $this->__ws_call('update_acct_credentials', Array(
                'account_no' => $account_no,
                'password' => $password,
                'secret_question_answer' => $secret_question_answer,
                'secret_question' => $secret_question,
                'pin' => $pin
        ));
    }

    /**
     * Sets the status of a a specified account and optionally indicates the number of days or date in the future on which the status change should go into effect. This call can also reset the billing dates on the status change date for accounts changing from a non-billable to a billable status.
     * @param int $account_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $status_cd This is the status of the object inquestion for the current API call.
     * @param int $queue_days Days in to queue before the status change occurs.
     * @param string $queue_date Specific date for the status change to occur
     * @param int $force_bill_date_reset Reset the billing anniversary date to coincide with the status change.
     * @param string $comments Additional explanitory text relating to this API call.
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions
     * @param string $alt_do_dunning When set to true, indicates that dunning should be initiated.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function update_acct_status($account_no, $status_cd, $queue_days = null, $queue_date = null, $force_bill_date_reset = null, $comments = null, $client_receipt_id = null, $alt_do_dunning = null)
    {
        return $this->__ws_call('update_acct_status', Array(
                'account_no' => $account_no,
                'status_cd' => $status_cd,
                'queue_days' => $queue_days,
                'queue_date' => $queue_date,
                'force_bill_date_reset' => $force_bill_date_reset,
                'comments' => $comments,
                'client_receipt_id' => $client_receipt_id,
                'alt_do_dunning' => $alt_do_dunning
        ));
    }

    /**
     * Changes the value of a particular supplemental field associated with a specified account.
     * @param int $account_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $field_name The machine-readable name of this field
     * @param string $value_text The string value of the named supplemental field.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function update_acct_supp_fields($account_no, $field_name = null, $value_text = null)
    {
        return $this->__ws_call('update_acct_supp_fields', Array(
                'account_no' => $account_no,
                'field_name' => $field_name,
                'value_text' => $value_text
        ));
    }

    /**
     * Updates the billing contact information for a specified account. To delete a piece of billing contact information, set the corresponding field to &quot;~&quot;. Leaving a field blank will retain the existing information in the field.
     * @param int $account_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param  $do_collect 
     * @param  $change_status_after_coll 
     * @param  $reset_dates_after_status 
     * @param string $first_name Contact Fist name
     * @param string $last_name Contact Last name
     * @param string $middle_initial The Middle Initial of the contact.
     * @param string $company_name Company name of the contact
     * @param string $address1 First address line of the contact
     * @param string $address2 Second address line of the contact
     * @param string $city City of the contact
     * @param string $locality Locality of the contact
     * @param string $state State or Province of the contact address.
     * @param string $country Country of the contact
     * @param string $zip The contact&#039;s zip/postal code.
     * @param string $intl_phone This is the international phone number of the contact
     * @param string $email Email of the contact
     * @param string $address3 The third line of the address
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int collection_error_code If a collection is attempted, returns the error code associated with the collection.<br>string collection_error_msg The error message associated with collection_error_code.<br>string proc_cvv_response The processor return code from CVV validation (deprecated)<br>string proc_avs_response Processor return code from address validation<br>string proc_cavv_response The processors return code for security validation (includes cvv)<br>string proc_status_code The processor status code<br>string proc_status_text The processors status description<br>string proc_payment_id The processor payment id<br>string proc_auth_code Authorization code provided by the issuing bank<br>string proc_merch_comments Additional information passed to payment processor
     */
    public function update_acct_billing_contact($account_no, $do_collect, $change_status_after_coll, $reset_dates_after_status, $first_name = null, $last_name = null, $middle_initial = null, $company_name = null, $address1 = null, $address2 = null, $city = null, $locality = null, $state = null, $country = null, $zip = null, $intl_phone = null, $email = null, $address3 = null)
    {
        return $this->__ws_call('update_acct_billing_contact', Array(
                'account_no' => $account_no,
                'do_collect' => $do_collect,
                'change_status_after_coll' => $change_status_after_coll,
                'reset_dates_after_status' => $reset_dates_after_status,
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
                'address3' => $address3
        ));
    }

    /**
     * Sets the method by which invoices are sent to a specified account.
     * @param int $account_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $notify_method If notification method is not provided, value will default to 1 (HTML email).
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function update_acct_notify_method($account_no, $notify_method)
    {
        return $this->__ws_call('update_acct_notify_method', Array(
                'account_no' => $account_no,
                'notify_method' => $notify_method
        ));
    }

    /**
     * Returns the method by which statements are sent to a specified account.
     * @param int $account_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts..
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int notify_method If notification method is not provided, value will default to 1 (HTML emal).<br>string notify_method_name The name of the notify method to be used in communicating with the account holder.
     */
    public function get_acct_notify_method($account_no)
    {
        return $this->__ws_call('get_acct_notify_method', Array(
                'account_no' => $account_no
        ));
    }

    /**
     * Sets a validated bank account as the payment method of a specified account.
     * @param int $account_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param  $do_collect 
     * @param  $change_status_after_coll 
     * @param  $reset_dates_after_status 
     * @param string $bank_routing_num The ABA routing number for the bank holding &#039;bank_acct_num&#039;
     * @param string $bank_acct_num The bank account number.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int collection_error_code If a collection is attempted, returns the error code associated with the collection.<br>string collection_error_msg The error message associated with collection_error_code.<br>string proc_cvv_response The processor return code from CVV validation (deprecated)<br>string proc_avs_response Processor return code from address validation<br>string proc_cavv_response The processors return code for security validation (includes cvv)<br>string proc_status_code The processor status code<br>string proc_status_text The processors status description<br>string proc_payment_id The processor payment id<br>string proc_auth_code Authorization code provided by the issuing bank<br>string proc_merch_comments Additional information passed to payment processor
     */
    public function set_pay_method_bank_draft($account_no, $do_collect, $change_status_after_coll, $reset_dates_after_status, $bank_routing_num = null, $bank_acct_num = null)
    {
        return $this->__ws_call('set_pay_method_bank_draft', Array(
                'account_no' => $account_no,
                'do_collect' => $do_collect,
                'change_status_after_coll' => $change_status_after_coll,
                'reset_dates_after_status' => $reset_dates_after_status,
                'bank_routing_num' => $bank_routing_num,
                'bank_acct_num' => $bank_acct_num
        ));
    }

    /**
     * Sets a validated credit card as the payment method of a specified account.
     * @param int $account_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $cc_expire_mm Expiration month for the credit card payment instrument.
     * @param int $cc_expire_yyyy Expiration year for the credit card payment instrument.
     * @param  $do_collect 
     * @param  $change_status_after_coll 
     * @param  $reset_dates_after_status 
     * @param string $cc_number Credit card number.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int collection_error_code If a collection is attempted, returns the error code associated with the collection.<br>string collection_error_msg The error message associated with collection_error_code.<br>string proc_cvv_response The processor return code from CVV validation (deprecated)<br>string proc_avs_response Processor return code from address validation<br>string proc_cavv_response The processors return code for security validation (includes cvv)<br>string proc_status_code The processor status code<br>string proc_status_text The processors status description<br>string proc_payment_id The processor payment id<br>string proc_auth_code Authorization code provided by the issuing bank<br>string proc_merch_comments Additional information passed to payment processor
     */
    public function set_pay_method_cc($account_no, $cc_expire_mm, $cc_expire_yyyy, $do_collect, $change_status_after_coll, $reset_dates_after_status, $cc_number = null)
    {
        return $this->__ws_call('set_pay_method_cc', Array(
                'account_no' => $account_no,
                'cc_expire_mm' => $cc_expire_mm,
                'cc_expire_yyyy' => $cc_expire_yyyy,
                'do_collect' => $do_collect,
                'change_status_after_coll' => $change_status_after_coll,
                'reset_dates_after_status' => $reset_dates_after_status,
                'cc_number' => $cc_number
        ));
    }

    /**
     * Sets a form of net terms as the payment method of a specified account.
     * @param int $account_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $pay_method This is the method_id corresponding to a payment method such as credit card, Electronic Check, Pre-Paid, Net Terms, etc.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function set_pay_method_net_terms($account_no, $pay_method)
    {
        return $this->__ws_call('set_pay_method_net_terms', Array(
                'account_no' => $account_no,
                'pay_method' => $pay_method
        ));
    }

    /**
     * Specifies the account that is responsible for paying a particular customer&#039;s invoices.
     * @param int $account_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $resp_level_cd The responsibility level code. These are values 1 through 4 as described in the legend for this argument.
     * @param int $senior_account_no The account number of the account assuming payment responsibility for billing.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function set_payment_responsibility($account_no, $resp_level_cd = null, $senior_account_no = null)
    {
        return $this->__ws_call('set_payment_responsibility', Array(
                'account_no' => $account_no,
                'resp_level_cd' => $resp_level_cd,
                'senior_account_no' => $senior_account_no
        ));
    }

    /**
     * 
     * @param int $account_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $plan_no Aria assigned unique plan identifier
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function set_service_plan_immediately($account_no, $plan_no = null, $client_receipt_id = null)
    {
        return $this->__ws_call('set_service_plan_immediately', Array(
                'account_no' => $account_no,
                'plan_no' => $plan_no,
                'client_receipt_id' => $client_receipt_id
        ));
    }

    /**
     * Changes a specified account from a live account to a test account or from a test account to a live account.
     * @param int $account_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $test_acct_ind This argument indicates the account is a test account and is treated as such in the system.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function toggle_test_account($account_no, $test_acct_ind = null)
    {
        return $this->__ws_call('toggle_test_account', Array(
                'account_no' => $account_no,
                'test_acct_ind' => $test_acct_ind
        ));
    }

    /**
     * Determines the validity of a credit card by performing an authorization transaction.  The default authorization amount is $1.  Please note: In order to use this call, your payment processor must support credit card authorizations.
     * @param int $account_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $CVV The CVV code for the payment method given
     * @param int $seq_no The unique bill sequence number.
     * @param string $inTrackingNumber The XID used for 3DSecure if 3DSecure was used for this authorization
     * @param string $inAuthValue The 3DSecure authorization value
     * @param int $alt_pay_method If you wish to use the account&#039;s current form of payment, leave this value empty. If you wish to use an alternate credit card, enter &#039;1&#039; for this value.
     * @param string $cc_number Credit card number.
     * @param int $cc_expire_mm Expiration month for the credit card payment instrument.
     * @param int $cc_expire_yyyy Expiration year for the credit card payment instrument.
     * @param string $bill_company_name Company name of the billing contact
     * @param string $bill_first_name First name of the billing contact
     * @param string $bill_middle_initial Middle Initial of the billing contact
     * @param string $bill_last_name Last name of the billing contact
     * @param string $bill_address1 First address line of the billing contact
     * @param string $bill_address2 Second address line of the billing contact
     * @param string $bill_city City of the billing contact
     * @param string $bill_locality Locality of the billing contact
     * @param string $bill_state_prov State or Province of the billing contact
     * @param string $bill_zip Zip Code of the billing contact
     * @param string $bill_country Country of the billing contact
     * @param string $bill_email Email of the billing contact
     * @param string $bill_phone Phone of the billing contact
     * @param string $bill_phone_extension Phone extension of the billing contact
     * @param string $bill_cell_phone The billing cell phone associated with the account
     * @param string $bill_work_phone Work phone of the billing contact
     * @param string $bill_work_phone_extension Work phone extenstion of the billing contact
     * @param string $currency_cd The 3-digit ISO currency code for monetary values used in the context of this API method.
     * @param int $acct_group_no The collections account group for this account
     * @param string $bill_address3 The third line of the billing address
     * @param string $alt_client_acct_group_id The one-time collections account group  to use for this particular call.  The default on the account is not changed.
     * @param string $track_data1 The raw &quot;track 1&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param string $track_data2 The raw &quot;track 2&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string proc_cvv_response The processor return code from CVV validation (deprecated)<br>string proc_avs_response Processor return code from address validation<br>string proc_cavv_response The processors return code for security validation (includes cvv)<br>string proc_status_code The processor status code<br>string proc_status_text The processors status description<br>string proc_payment_id The processor payment id<br>string proc_auth_code Authorization code provided by the issuing bank<br>string proc_merch_comments Additional information passed to payment processor
     */
    public function validate_payment_information($account_no = null, $CVV = null, $seq_no = null, $inTrackingNumber = null, $inAuthValue = null, $alt_pay_method = null, $cc_number = null, $cc_expire_mm = null, $cc_expire_yyyy = null, $bill_company_name = null, $bill_first_name = null, $bill_middle_initial = null, $bill_last_name = null, $bill_address1 = null, $bill_address2 = null, $bill_city = null, $bill_locality = null, $bill_state_prov = null, $bill_zip = null, $bill_country = null, $bill_email = null, $bill_phone = null, $bill_phone_extension = null, $bill_cell_phone = null, $bill_work_phone = null, $bill_work_phone_extension = null, $currency_cd = null, $acct_group_no = null, $bill_address3 = null, $alt_client_acct_group_id = null, $track_data1 = null, $track_data2 = null)
    {
        return $this->__ws_call('validate_payment_information', Array(
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
                'bill_address3' => $bill_address3,
                'alt_client_acct_group_id' => $alt_client_acct_group_id,
                'track_data1' => $track_data1,
                'track_data2' => $track_data2
        ));
    }

    /**
     * Sets an account&#039;s status to temporary ban and optionally sets the number of days after which or date on which the ban will be removed and the account will be returned to its previous status.
     * @param int $account_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $userid The users unique identifier.
     * @param int $days_to_restore Number of days the ban is to be in place before being restored.
     * @param string $date_to_restore An optional method (to days_to_restore) allowing for you to set the date when the account will be restored.
     * @param int $reason_cd The reason why this account was banned
     * @param string $comments Additional explanitory text relating to this API call.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function ban_acct($account_no = null, $userid = null, $days_to_restore = null, $date_to_restore = null, $reason_cd = null, $comments = null)
    {
        return $this->__ws_call('ban_acct', Array(
                'account_no' => $account_no,
                'userid' => $userid,
                'days_to_restore' => $days_to_restore,
                'date_to_restore' => $date_to_restore,
                'reason_cd' => $reason_cd,
                'comments' => $comments
        ));
    }

    /**
     * Returns a list of financial transactions associated with an account. You can filter the transactions using criteria such as transaction type, date range, or statement number.
     * @param int $account_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts..
     * @param int $transaction_type Transaciton type to search account history for.
     * @param string $start_date Specifies start date. The date is in the format yyyy-mm-dd
     * @param string $end_date Specifies end date. The date is in the format yyyy-mm-dd
     * @param int $record_limit This is the maximum number of records to retrieve from the query.
     * @param int $filter_statement_no Statement number filter to use when querying for account transaction history.
     * @param string $include_void_transactions Allows whether or not to include void transactions.
     * @return mixed[] array history <br>int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_acct_trans_history($account_no, $transaction_type = null, $start_date = null, $end_date = null, $record_limit = null, $filter_statement_no = null, $include_void_transactions = null)
    {
        return $this->__ws_call('get_acct_trans_history', Array(
                'account_no' => $account_no,
                'transaction_type' => $transaction_type,
                'start_date' => $start_date,
                'end_date' => $end_date,
                'record_limit' => $record_limit,
                'filter_statement_no' => $filter_statement_no,
                'include_void_transactions' => $include_void_transactions
        ));
    }

    /**
     * This API is used to update the payment method on an account.  Newly recorded payment methods are automatically made the default payment method on the account.
     * @param int $account_number Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param  $do_collect 
     * @param  $change_status_after_coll 
     * @param  $reset_dates_after_status 
     * @param string $first_name Billing address first name
     * @param string $last_name Billing address last name
     * @param string $middle_initial Billing address middle initial
     * @param string $company_name Billing address company name
     * @param string $address1 Billing street address line one
     * @param string $address2 Billing street address line two
     * @param string $city Billing address city
     * @param string $locality Billing address locality
     * @param string $state Billing address state
     * @param string $country Billing address ISO-compatible 2-letter country code
     * @param string $zip Billing address zip or postal code
     * @param string $intl_phone Billing address international phone number
     * @param string $phone_npa Billing address NPA for North American area plan area code
     * @param string $phone_nxx Billing address telephone exchange
     * @param string $phone_suffix Billing address telephone suffix
     * @param string $phone_extension Billing address telephone extension
     * @param string $email Billing address contact email
     * @param string $pay_method Billing address payment method code
     * @param string $cc_number Credit card number, if payment method is CC
     * @param int $cc_expire_mm Credit card expiration month, 2-digit
     * @param int $cc_expire_yyyy Credit card expiration year, 4-digit
     * @param string $bank_routing_num Bank account routing number
     * @param string $bank_acct_num Bank account number
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions
     * @return mixed[] int seq_no The sequence number of this payment, as it appears on the account<br>int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int collection_error_code The error code for the collection portion of this call, if a collection was attempted<br>string collection_error_msg The error message for the collection portion of this call, if a collection was attempted<br>string proc_cvv_response The processor return code from CVV validation (deprecated)<br>string proc_avs_response Processor return code from address validation<br>string proc_cavv_response The processors return code for security validation (includes cvv)<br>string proc_status_code The processor status code<br>string proc_status_text The processors status description<br>string proc_payment_id The processor payment id<br>string proc_auth_code Authorization code provided by the issuing bank<br>string proc_merch_comments Additional information passed to payment processor
     */
    public function update_payment_method($account_number, $do_collect, $change_status_after_coll, $reset_dates_after_status, $first_name = null, $last_name = null, $middle_initial = null, $company_name = null, $address1 = null, $address2 = null, $city = null, $locality = null, $state = null, $country = null, $zip = null, $intl_phone = null, $phone_npa = null, $phone_nxx = null, $phone_suffix = null, $phone_extension = null, $email = null, $pay_method = null, $cc_number = null, $cc_expire_mm = null, $cc_expire_yyyy = null, $bank_routing_num = null, $bank_acct_num = null, $client_receipt_id = null)
    {
        return $this->__ws_call('update_payment_method', Array(
                'account_number' => $account_number,
                'do_collect' => $do_collect,
                'change_status_after_coll' => $change_status_after_coll,
                'reset_dates_after_status' => $reset_dates_after_status,
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
                'client_receipt_id' => $client_receipt_id
        ));
    }

    /**
     * Authorizes a credit card for a specified amount. Please note: This API call does not collect a payment.
     * @param int $account_number Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param double $amount The monetary amount of the electronic payment.
     * @param int $payment_source Records the source of this payment information
     * @param string $CVV Card Verification Value, used to help verify a transaction is being requested by the card holder since this value is physically printed on the credit card.
     * @param int $bill_seq The unique identifier of the bill sequence number.
     * @param string $inTrackingNumber The XID used for 3DSecure if 3DSecure was used for this authorization
     * @param string $inAuthValue The 3DSecure authorization value
     * @param string $alt_client_acct_group_id The one-time collections account group  to use for this particular call.  The default on the account is not changed.
     * @param string $track_data1 The raw &quot;track 1&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param string $track_data2 The raw &quot;track 2&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string proc_cvv_response The processor return code from CVV validation (deprecated)<br>string proc_avs_response Processor return code from address validation<br>string proc_cavv_response The processors return code for security validation (includes cvv)<br>string proc_status_code The processor status code<br>string proc_status_text The processors status description<br>string proc_payment_id The processor payment id<br>string proc_auth_code Authorization code provided by the issuing bank<br>string proc_merch_comments Additional information passed to payment processor
     */
    public function authorize_electronic_payment($account_number, $amount, $payment_source = null, $CVV = null, $bill_seq = null, $inTrackingNumber = null, $inAuthValue = null, $alt_client_acct_group_id = null, $track_data1 = null, $track_data2 = null)
    {
        return $this->__ws_call('authorize_electronic_payment', Array(
                'account_number' => $account_number,
                'amount' => $amount,
                'payment_source' => $payment_source,
                'CVV' => $CVV,
                'bill_seq' => $bill_seq,
                'inTrackingNumber' => $inTrackingNumber,
                'inAuthValue' => $inAuthValue,
                'alt_client_acct_group_id' => $alt_client_acct_group_id,
                'track_data1' => $track_data1,
                'track_data2' => $track_data2
        ));
    }

    /**
     * Returns a list of master plan changes scheduled to go into effect for a specified account.
     * @param int $account_number Aria-assigned account identifier. This value is unique across all Aria-managed accounts..
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array queued_plans An array of plans queued for the specified account number<br>int current_rate_schedule_no The current rate schedule number for the plan used by the specified account number
     */
    public function get_queued_service_plans($account_number)
    {
        return $this->__ws_call('get_queued_service_plans', Array(
                'account_number' => $account_number
        ));
    }

    /**
     * Cancels all plan changes scheduled to go into effect for a specified account.
     * @param int $account_number Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param array $plan_no_to_remove 
     * @param string $remove_all_queued_plan_no Boolean &#039;true&#039; or &#039;false&#039; indicator informing user whether or not to actually perform all plans cancellation at the account level. If &#039;false&#039; is passed in this field, the queued_plan_no should be populated with Aria plan number(s).
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function cancel_queued_service_plan($account_number, $plan_no_to_remove = null, $remove_all_queued_plan_no = null)
    {
        return $this->__ws_call('cancel_queued_service_plan', Array(
                'account_number' => $account_number,
                'plan_no_to_remove' => $plan_no_to_remove,
                'remove_all_queued_plan_no' => $remove_all_queued_plan_no
        ));
    }

    /**
     * Returns the history of modifications to an acccount&#039;s status.
     * @param int $account_number Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array stat_hist An array of status history records for the account.
     */
    public function get_acct_status_history($account_number)
    {
        return $this->__ws_call('get_acct_status_history', Array(
                'account_number' => $account_number
        ));
    }

    /**
     * Returns the list of plans currently and previously assigned to an account.
     * @param int $account_number Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array plan_hist This is an array of plan history records.
     */
    public function get_acct_plan_history($account_number)
    {
        return $this->__ws_call('get_acct_plan_history', Array(
                'account_number' => $account_number
        ));
    }

    /**
     * Returns a list of current and previous supplemental plans assigned to an account.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $plan_no Aria assigned unique plan identifier
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array supp_plan_hist 
     */
    public function get_acct_supp_plan_history($acct_no = null, $plan_no = null)
    {
        return $this->__ws_call('get_acct_supp_plan_history', Array(
                'acct_no' => $acct_no,
                'plan_no' => $plan_no
        ));
    }

    /**
     * gets selectable plans based on current plan
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array plans An array of plans.
     */
    public function get_available_plans($acct_no = null)
    {
        return $this->__ws_call('get_available_plans', Array(
                'acct_no' => $acct_no
        ));
    }

    /**
     * gets selectable plans based on current plan, along with their services and rate schedules
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array all_plans This return value is a multidimensional array describing the detail of all available plans.
     */
    public function get_available_plans_all($acct_no = null)
    {
        return $this->__ws_call('get_available_plans_all', Array(
                'acct_no' => $acct_no
        ));
    }

    /**
     * Returns a summary list of plans associated with a specified promotion code.
     * @param string $promo_code This is the code provided the client  and used by the account holder during registration or when executing a transaction. A promotion generally provides  access to a custom set of reduced-rate plans.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array plans This return value is a multidimensional array describing the detail of all available plans on this promo code.
     */
    public function get_plans_by_promo_code($promo_code = null)
    {
        return $this->__ws_call('get_plans_by_promo_code', Array(
                'promo_code' => $promo_code
        ));
    }

    /**
     * Returns a detailed list of plans associated with a specified promotion code. The information returned includes the services and rate schedules associated with the plans.
     * @param string $promo_code This is the code provided the client  and used by the account holder during registration or when executing a transaction. A promotion generally provides  access to a custom set of reduced-rate plans.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array all_plans This return value is a multidimensional array describing the detail of all available plans.
     */
    public function get_plans_by_promo_code_all($promo_code = null)
    {
        return $this->__ws_call('get_plans_by_promo_code_all', Array(
                'promo_code' => $promo_code
        ));
    }

    /**
     * Returns all available information about an account such as contact information, demographic information, dates associated with the account, account status, plan, notification method, password, and billing information.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] string first_name Contact Fist name<br>string mi Middle initial of the contact<br>string last_name Contact Last name<br>string userid The users unique identifier.<br>string birthdate Contact date of birth<br>string job_title The job title of the contact.<br>string salutation The contact&#039;s salutation (such as Mr., Ms., Dr., etc.)<br>string senior_acct_no The senior_acct_no is the unique account number for the parent account and is used in establishing parent-child billing relationships.<br>string client_acct_id This is the client-assigned identifier for the account.<br>string resp_level_cd The responsibility level code. These are values 1 through 4 as described in the legend for this argument.<br>string is_test_acct A Boolean value indicating that the account is a test account.<br>string alt_email Alternate email address for contact.<br>string address1 First address line of the contact<br>string address2 Second address line of the contact<br>string city City of the contact<br>string state_prov State or Province of the contact<br>string locality Locality of the contact<br>string postal_code Postal/Zip code for the contact address.<br>string country Country of the contact<br>string company_name Company name of the contact<br>string cell_phone_npa Cell phone Numbering Plan Area value (also known as area code).<br>string cell_phone_nxx Cell phone Exchange (first 3 numbers following the area code/NPA).<br>string cell_phone_suffix Cell phone number (this is the number on the exchange/NXX for the target phone).<br>string fax_phone The FAX phone number for the contact.<br>string intl_cell_phone The international cell phone number of the contact.<br>string intl_phone This is the international phone number of the contact<br>string phone_extension The extension for the contact&#039;s phone number.<br>string phone_npa Phone Numbering Plan Area value (also known as area code).<br>string phone_nxx Phone Exchange (first 3 numbers following the area code/NPA).<br>string phone_suffix Phone number (this is the number on the exchange/NXX for the target phone).<br>string work_phone The full work phone number<br>string work_phone_extension The office/desk extension of the contact&#039;s work phone, if any.<br>string work_phone_npa Phone Numbering Plan Area value (also known as area code).<br>string work_phone_nxx Phone Exchange (first 3 numbers following the area code/NPA).<br>string work_phone_suffix Phone number (this is the number on the exchange/NXX for the target phone).<br>string bill_day The billing anniversary day.<br>string created Date the account was created.<br>string date_to_expire The date the account is scheduled to expire.<br>string date_to_suspend The date the account is scheduled to be suspended.<br>string last_arrears_bill_thru_date The most recent date at which the account was fully billed in arrears<br>string last_bill_date The last date the account was billed<br>string last_bill_thru_date The date through which the account has been billed.<br>string next_bill_date The next bill date for the account.<br>string plan_date The date the plan assigned to the account.<br>string status_date This is the date the status on the account was set.<br>string status_degrade_date The date the account status was degraded.<br>string status_cd This is the status of the object inquestion for the current API call.<br>string status_label This is the human-readbale status of the account.<br>int plan_no Aria assigned unique plan identifier<br>string plan_name Name of the Master Subscription Plan for this account<br>string plan_units The number of plan units to assign.<br>string notify_method If notification method is not provided, value will default to 1 (HTML email).<br>string notify_method_name The name of the notify method to be used in communicating with the account holder.<br>string PASSWORD The account&#039;s reg/uss password<br>string pin Persinal Identification number<br>string secret_question The users secret question recorded to recover a password.<br>string secret_question_answer The response to a users &#039;secret_question&#039;<br>string pay_method This is the method_id corresponding to a payment method such as credit card, Electronic Check, Pre-Paid, Net Terms, etc.<br>string pay_method_name The human-readable name of the payment method.<br>string currency_cd The 3-digit ISO currency code for monetary values used in the context of this API method.<br>string tax_id This is the Tax Identification Number or EIN of the account holder.<br>string billing_email The email address of the billing contact, or the general billing email address.<br>string billing_first_name The first name of the billing contact for the account.<br>string billing_middle_initial The middle initial of the billing contact.<br>string billing_last_name The last name of the billing contact.<br>string billing_address1 Street address (number and name) of the billing contact address.<br>string billing_address2 The second billing address line (for example: bldg, suite, apt., etc.)<br>string billing_city The city name of the billing contact address.<br>string billing_state The state or province of the billing contact&#039;s address.<br>string billing_locality The billing contact&#039;s locality (for example: county, rural unincorporated area name).<br>string billing_zip The zip or postal code for the billing contact&#039;s address.<br>string billing_country The country for the billing contact&#039;s address.<br>string cc_suffix The last 4 digits of the credit card number<br>string cc_expire_mm Expiration month for the credit card payment instrument.<br>string cc_expire_yyyy Expiration year for the credit card payment instrument.<br>string cc_id A numeric code indicating the type of credit card<br>string bank_acct_suffix The last 4 digits of the bank account<br>string bank_routing_no This is the ABA (American Banking Association) unique identifier for the fincancial institution.<br>string billing_cell_phone The billing cell phone area code.<br>string billing_cell_phone_npa The 3 digit exchange number for the billing contact&#039;s cell phone.<br>string billing_cell_phone_nxx The 3 digit exchange number for the billing contact&#039;s cell phone.<br>string billing_cell_phone_suffix The cell phone number. Digits following the NXX exchange digits.<br>string billing_company_name The company or DBA name of the billing contact.<br>string billing_intl_phone The international phone number of the billing contact.<br>string billing_phone_extension The office, desk or group extension for the billing contact&#039;s phone number.<br>string billing_phone_npa The billing contact&#039;s area code.<br>string billing_phone_nxx The exchange number for the billing contact phone. (The NXX follows the NPA and preceeds the phone number).<br>string billing_phone_suffix The last digits of the billing contact&#039;s phone number, immediately following the NPA and NXX (also referred to as the phone number).<br>string billing_work_phone The full billing work phone number<br>string billing_work_phone_extension The extension of the billing contact work phone.<br>string billing_work_phone_npa The exchange number of the billing contact&#039;s work phone (immediately follows the NPA).<br>string billing_work_phone_nxx The exchange number of the billing contact&#039;s work phone (immediately follows the NPA).<br>string billing_work_phone_suffix The last digits of the billing contact&#039;s work phone (immediately follows the NPA and NXX), also referred to as the &quot;phone number&quot;.<br>string balance The outstanding balance for this account.<br>string acct_create_client_receipt_id The client-specified receipt ID, returned for this account creation in any API which returns receipt IDs at this level.  Useful for auditing and tracking<br>string plan_client_receipt_id The client-specified receipt ID, returned for this plan creation or assignment in any API which returns receipt IDs at this level.  Useful for auditing and tracking<br>string status_client_receipt_id The client-specified receipt ID, returned for this account status change in any API which returns receipt IDs at this level.  Useful for auditing and tracking<br>string taxpayer_id Taxpayer Identification number.<br>int alt_msg_template_no Email template number assigned to this account.<br>int seq_func_group_no Functional account group number specifically designated for statement sequence number assignment.<br>string promo_cd This is the code provided the client  and used by the account holder during registration or when executing a transaction. A promotion generally provides access to a custom set of reduced-rate plans.<br>string address3 The third line of the address<br>string billing_address3 The third line of the billing address<br>string address_verification_code The address verification code for account contact address<br>double address_match_score The score of match for account contact address verification code<br>string billing_address_verification_code The address verification code for account billing address<br>double billing_address_match_score The score of match for account billing address verification code<br>int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_acct_details_all($acct_no = null)
    {
        return $this->__ws_call('get_acct_details_all', Array(
                'acct_no' => $acct_no
        ));
    }

    /**
     * Returns all child account numbers associated with a specified parent account number.
     * @param int $parent_acct_no The parent account for this child account. Designating a parent account number implies the account holder is under a parent account umbrella.
     * @param string $do_multi_level Allow mult-level account hierarchies.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array child_accts 
     */
    public function get_child_accts($parent_acct_no, $do_multi_level = null)
    {
        return $this->__ws_call('get_child_accts', Array(
                'parent_acct_no' => $parent_acct_no,
                'do_multi_level' => $do_multi_level
        ));
    }

    /**
     * Returns the transaction history of parent and child accounts
     * @param int $parent_acct_no The parent account for this child account. Designating a parent account number implies the account holder is under a parent account umbrella.
     * @param string $do_multi_level Allow mult-level account hierarchies.
     * @param int $trans_type Valid transaction type to use when searching family transaction history.
     * @param string $start_date Specifies start date. The date is in the format yyyy-mm-dd
     * @param string $end_date Specifies end date. The date is in the format yyyy-mm-dd
     * @param int $record_limit This is the maximum number of records to retrieve from the query.
     * @param string $include_void_transactions Allows whether or not to include void transactions.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array fam_trans 
     */
    public function get_family_trans_history($parent_acct_no, $do_multi_level = null, $trans_type = null, $start_date = null, $end_date = null, $record_limit = null, $include_void_transactions = null)
    {
        return $this->__ws_call('get_family_trans_history', Array(
                'parent_acct_no' => $parent_acct_no,
                'do_multi_level' => $do_multi_level,
                'trans_type' => $trans_type,
                'start_date' => $start_date,
                'end_date' => $end_date,
                'record_limit' => $record_limit,
                'include_void_transactions' => $include_void_transactions
        ));
    }

    /**
     * updates some billing info including contact info and credit card expiration
     * @param  $do_collect 
     * @param  $change_status_after_coll 
     * @param  $reset_dates_after_status 
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $seq_no The unique bill sequence number
     * @param string $address1 First address line of the contact
     * @param string $address2 second address line of the contact
     * @param string $city City of the contact
     * @param string $state State or Province of the contact
     * @param string $zip The contact&#039;s zip/postal code
     * @param string $country Country of the contact
     * @param int $cc_expire_mm Expiration month for the credit card payment instrument.
     * @param int $cc_expire_yyyy Expiration year for the credit card payment instrument.
     * @param int $phone_npa Phone Numbering Plan Area value (also known as area code).
     * @param int $phone_nxx Phone Exchange (first 3 numbers following the area code/NPA).
     * @param string $phone_suffix Phone number (this is the number on the exchange/NXX for the target phone).
     * @param string $phone_ext The extension for the contact phone
     * @param string $phone_country_cd The country code dialing prefix for the phone number
     * @param string $intl_phone This is the international phone number of the contact
     * @param string $email Email of the contact
     * @param string $locality Locality of the contact
     * @param int $cell_phone_npa Cell phone Numbering Plan Area value (also known as area code).
     * @param int $cell_phone_nxx Cell phone Exchange (first 3 numbers following the area code/NPA).
     * @param string $cell_phone_suffix Cell phone number (this is the number on the exchange/NXX for the target phone).
     * @param int $work_phone_npa Phone Numbering Plan Area value (also known as area code).
     * @param int $work_phone_nxx Phone Exchange (first 3 numbers following the area code/NPA).
     * @param string $work_phone_suffix Phone number (this is the number on the exchange/NXX for the target phone).
     * @param string $work_phone_ext The extension for the contact work phone
     * @param string $address3 The third line of the address
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int collection_error_code If a collection is attempted, returns the error code associated with the collection.<br>string collection_error_msg The error message associated with collection_error_code.<br>string proc_cvv_response The processor return code from CVV validation (deprecated)<br>string proc_avs_response Processor return code from address validation<br>string proc_cavv_response The processors return code for security validation (includes cvv)<br>string proc_status_code The processor status code<br>string proc_status_text The processors status description<br>string proc_payment_id The processor payment id<br>string proc_auth_code Authorization code provided by the issuing bank<br>string proc_merch_comments Additional information passed to payment processor
     */
    public function update_existing_billing_info($do_collect, $change_status_after_coll, $reset_dates_after_status, $acct_no = null, $seq_no = null, $address1 = null, $address2 = null, $city = null, $state = null, $zip = null, $country = null, $cc_expire_mm = null, $cc_expire_yyyy = null, $phone_npa = null, $phone_nxx = null, $phone_suffix = null, $phone_ext = null, $phone_country_cd = null, $intl_phone = null, $email = null, $locality = null, $cell_phone_npa = null, $cell_phone_nxx = null, $cell_phone_suffix = null, $work_phone_npa = null, $work_phone_nxx = null, $work_phone_suffix = null, $work_phone_ext = null, $address3 = null)
    {
        return $this->__ws_call('update_existing_billing_info', Array(
                'do_collect' => $do_collect,
                'change_status_after_coll' => $change_status_after_coll,
                'reset_dates_after_status' => $reset_dates_after_status,
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
                'address3' => $address3
        ));
    }

    /**
     * Sends a specified message type to a particular account holder identified by a user ID.
     * @param string $user_id Account&#039;s user ID. Alternative to using acct_no.
     * @param string $template_class Email Template Class is the category of email templates to choose from
     * @param int $template_no The specific Email Template to send
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function send_acct_email($user_id = null, $template_class = null, $template_no = null, $client_receipt_id = null)
    {
        return $this->__ws_call('send_acct_email', Array(
                'user_id' => $user_id,
                'template_class' => $template_class,
                'template_no' => $template_no,
                'client_receipt_id' => $client_receipt_id
        ));
    }

    /**
     * Determines whether a specified user ID is already in use
     * @param string $user_id Account&#039;s user ID. Alternative to using acct_no.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function userid_exists($user_id = null)
    {
        return $this->__ws_call('userid_exists', Array(
                'user_id' => $user_id
        ));
    }

    /**
     * Determines whether a specified user ID is available for use.
     * @param string $user_id Account&#039;s user ID. Alternative to using acct_no.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function userid_is_available($user_id = null)
    {
        return $this->__ws_call('userid_is_available', Array(
                'user_id' => $user_id
        ));
    }

    /**
     * Returns all active standing usage records associated with a specified account.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array su 
     */
    public function get_standing_usage($acct_no = null)
    {
        return $this->__ws_call('get_standing_usage', Array(
                'acct_no' => $acct_no
        ));
    }

    /**
     * Creates a new standing usage record for a specified account.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $usage_type The type of usage being consumed by the account holder
     * @param double $usage_units The volume of usage consumed by the account holder.
     * @param string $next_usage_date The next date usage will be recorded
     * @param string $alt_desc Alternate description of the usage being recorded
     * @param int $plan_no Aria assigned unique plan identifier
     * @param string $first_usage_date The date of the first usage to record
     * @param string $recurring_ind Indicates whether or not this service is a recurring service
     * @param string $usage_type_code The ID of the usage type associated with this line
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function record_standing_usage($acct_no = null, $usage_type = null, $usage_units = null, $next_usage_date = null, $alt_desc = null, $plan_no = null, $first_usage_date = null, $recurring_ind = null, $usage_type_code = null)
    {
        return $this->__ws_call('record_standing_usage', Array(
                'acct_no' => $acct_no,
                'usage_type' => $usage_type,
                'usage_units' => $usage_units,
                'next_usage_date' => $next_usage_date,
                'alt_desc' => $alt_desc,
                'plan_no' => $plan_no,
                'first_usage_date' => $first_usage_date,
                'recurring_ind' => $recurring_ind,
                'usage_type_code' => $usage_type_code
        ));
    }

    /**
     * Disables a particular standing usage record for a specified account.
     * @param int $standing_usage_rec_no The record number of the standing usage order, as returned by the get_standing_usage API
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $comments Additional explanitory text relating to this API call.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function disable_standing_usage($standing_usage_rec_no, $acct_no = null, $comments = null)
    {
        return $this->__ws_call('disable_standing_usage', Array(
                'standing_usage_rec_no' => $standing_usage_rec_no,
                'acct_no' => $acct_no,
                'comments' => $comments
        ));
    }

    /**
     * disable all standing_usage recs for gievn acct_no
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $plan_no Aria assigned unique plan identifier
     * @param string $comments Additional explanitory text relating to this API call.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function disable_standing_usage_by_plan($acct_no = null, $plan_no = null, $comments = null)
    {
        return $this->__ws_call('disable_standing_usage_by_plan', Array(
                'acct_no' => $acct_no,
                'plan_no' => $plan_no,
                'comments' => $comments
        ));
    }

    /**
     * disable all standing_usage recs for gievn acct_no
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $comments Additional explanitory text relating to this API call.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function disable_all_standing_usage($acct_no = null, $comments = null)
    {
        return $this->__ws_call('disable_all_standing_usage', Array(
                'acct_no' => $acct_no,
                'comments' => $comments
        ));
    }

    /**
     * Returns the details of the master and supplemental plans most recently assigned to a specified account.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array acct_plans 
     */
    public function get_acct_plans($acct_no = null)
    {
        return $this->__ws_call('get_acct_plans', Array(
                'acct_no' => $acct_no
        ));
    }

    /**
     * Returns the plan, service, and rate schedule data for all master and supplemental plans assigned to a specified account.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array all_acct_plans 
     */
    public function get_acct_plans_all($acct_no = null)
    {
        return $this->__ws_call('get_acct_plans_all', Array(
                'acct_no' => $acct_no
        ));
    }

    /**
     * Returns a list of supplemental field names and values associated with an account.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array supp_fields 
     */
    public function get_acct_supp_fields($acct_no = null)
    {
        return $this->__ws_call('get_acct_supp_fields', Array(
                'acct_no' => $acct_no
        ));
    }

    /**
     * Returns the values for a particular supplemental field associated with a specified account.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $field_name The machine-readable name of this field
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array supp_field_values 
     */
    public function get_supp_field_values($acct_no = null, $field_name = null)
    {
        return $this->__ws_call('get_supp_field_values', Array(
                'acct_no' => $acct_no,
                'field_name' => $field_name
        ));
    }

    /**
     * Returns a summary list of supplemental plans associated with a specified promotion code.
     * @param string $promo_code This is the code provided the client  and used by the account holder during registration or when executing a transaction. A promotion generally provides  access to a custom set of reduced-rate plans.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array plans 
     */
    public function get_supp_plans_by_promo_code($promo_code = null)
    {
        return $this->__ws_call('get_supp_plans_by_promo_code', Array(
                'promo_code' => $promo_code
        ));
    }

    /**
     * Returns a detailed list of supplemental plans associated with a specified promotion code. The information returned includes the services and rate schedules associated with the plans.
     * @param string $promo_code This is the code provided the client  and used by the account holder during registration or when executing a transaction. A promotion generally provides  access to a custom set of reduced-rate plans.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array all_plans This return value is a multidimensional array describing the detail of all available plans.
     */
    public function get_supp_plans_by_promo_code_all($promo_code = null)
    {
        return $this->__ws_call('get_supp_plans_by_promo_code_all', Array(
                'promo_code' => $promo_code
        ));
    }

    /**
     * Assigns one supplemental plan to a specified account. To assign multiple supplemental plans to an account, use the assign_supp_plan_multi method.
     * @param int $supp_plan_no The Aria-assigned identifier for a supplemental service plan. Allowable values are limited to valid custom plan numbers for client.
     * @param  $offset_interval 
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $alt_rate_schedule_no Alternative Rate Schedule Number. The alt_rate_schedule_no is the unique identifier for an alternative rate schedule that can be assigned to the account holder in place of the default rate schedule. This is often done by CSR&#039;s to provide special compensation or discounts as incentives to account holders.
     * @param int $num_plan_units The factor by which all future recurring fees for this plan will be multiplied on future invoices for this account. EXAMPLE: An account wishes to have the supplemental plan titled Seats of XYZ Application assigned to them, with a monthly flat cost of $10.00 per seat. To assign 5 seats of this plan to the account, resulting in a monthly charge of $50.00 to the account, a value of 5 should be passed in this field.
     * @param string $coupon_code The code of the coupon to which to apply the discount.  If code is not valid for any reason, an appropriate error code is returned and the entire transaction (including the supp plan assignment and any possible invoice creation) is rolled back.
     * @param int $assignment_directive The scope rule to be applied to this assignment/de-assignment request, governing both the date upon which the assignment should take place (immediately or on the account&#039;s anniversary date) and the proration rule that should be applied (per client&#039;s default rules for proration on plan assignment v. forcing proration on or off for this request only). Default behavior is to assign plan to account on the account&#039;s anniversary date, resulting in no proration effect.
     * @param string $comments Additional explanitory text relating to this API call.
     * @param string $do_write Boolean indicator informing Aria whether or not to actually perform the requested operation. If &#039;false&#039; is passed in this field Aria will, if applicable, calculate any potential effects stemming from this call such as pro-ration, plan assignments, etc. and return all relevant data  without actually performing the requested operation or making any changes to the account. This is useful to interfaces that wish to present the user with a &#039;confirmation page&#039; informing of the would-be effects of the requested operation prior to actually performing it.  Do_write defaults to &#039;true&#039;
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions
     * @param int $contract_type_no The Aria Contract Type number.
     * @param double $contract_alt_recur_fee Alternate contract recurring fee to assign.
     * @param int $contract_length_months The number of months the contract is to be in effect.
     * @param double $contract_cancel_fee The fee to be charged if the contract is cancelled by the account holder.
     * @param string $contract_comments Free-form text comments regarding this contract.
     * @param string $contract_start_date The date the contract goes into effect
     * @param int $offset_months For plan recurring intervals of longer than one month, the number of months to offset proration and first bill date
     * @param int $auto_offset_months_option Automatically set the offset for the billing anniversary month.
     * @param string $alt_proration_start_date This argument specifies and alternate proration start date.
     * @param string $alt_client_acct_group_id The one-time collections account group  to use for this particular call.  The default on the account is not changed.
     * @param array $new_acct_custom_rates 
     * @param string $effective_date If the assignment directive is for future date assignment, this is the effective date for that assignment
     * @param string $contract_end_date Allows the caller to set a specific end date when creating or modifying plan contracts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>double proration_result_amount The currency amount of any resulting proration action performed as a result of the requested plan change. For plan assignments with an assignment directive of &#039;1&#039; (perform on anniversary date), or &#039;2&#039; (honor client default proration action) when the default configuration is to not do proration, or &#039;3&#039; (force no proration), the value returned in this field will always be &#039;0&#039;. When proration is performed the value returned in this field will either be a positive currency value (indicating a resulting charge to the account) or a negative currency value (indicating a credit to the account). If the value passed in field do_write is false then any positive or negative value returned in this field is notational only, demonstrating what proration effect would be applied to the account if the requested plan assignment/de-assignment were to be actually performed.<br>int invoice_no The unique identifer of a given invoice.<br>array supp_plan_line_items <br>double total_charges_before_tax Total amount to be charged to the account before taxes have been calculated.<br>double total_tax_charges Total taxes as calculated for the amount of the transaction.<br>double total_charges_after_tax Total amount to be charged to the account after taxes have been calculated.<br>double total_credit The total amount of the credit to be applied to the account<br>double total_tax_credit The tax amount of the credit to be applies<br>double total_credit_before_tax The credit to be applied before tax is taken into account<br>double total The grand total of this invoice<br>double expectd_activation_fee The predicted activation fee based on activation fee charges on supplemental plans on this invoice<br>double expectd_mthly_recurring_cost The predicted monthly recurring cost of the items and plans on this invoice<br>double expectd_annu_recurring_cost The predicted annual recurring cost of the items and plans on this invoice<br>array third_party_errors Errors from third-party systems like taxation engines are returned here, whereas the Aria-generated error codes are returned in the error_code and error_msg fields at the root level of the API return.
     */
    public function assign_supp_plan($supp_plan_no, $offset_interval, $acct_no = null, $alt_rate_schedule_no = null, $num_plan_units = null, $coupon_code = null, $assignment_directive = null, $comments = null, $do_write = null, $client_receipt_id = null, $contract_type_no = null, $contract_alt_recur_fee = null, $contract_length_months = null, $contract_cancel_fee = null, $contract_comments = null, $contract_start_date = null, $offset_months = null, $auto_offset_months_option = null, $alt_proration_start_date = null, $alt_client_acct_group_id = null, $new_acct_custom_rates = null, $effective_date = null, $contract_end_date = null)
    {
        return $this->__ws_call('assign_supp_plan', Array(
                'supp_plan_no' => $supp_plan_no,
                'offset_interval' => $offset_interval,
                'acct_no' => $acct_no,
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
                'alt_proration_start_date' => $alt_proration_start_date,
                'alt_client_acct_group_id' => $alt_client_acct_group_id,
                'new_acct_custom_rates' => $new_acct_custom_rates,
                'effective_date' => $effective_date,
                'contract_end_date' => $contract_end_date
        ));
    }

    /**
     * Cancels the supplemental plans assigned to a specified account.
     * @param int $supp_plan_no The Aria-assigned identifier for a supplemental service plan. Allowable values are limited to valid custom plan numbers for client.
     * @param  $offset_interval 
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $assignment_directive The scope rule to be applied to this assignment/de-assignment request, governing both the date upon which the assignment should take place (immediately or on the account&#039;s anniversary date) and the proration rule that should be applied (per client&#039;s default rules for proration on plan assignment v. forcing proration on or off for this request only). Default behavior is to assign plan to account on the account&#039;s anniversary date, resulting in no proration effect.
     * @param string $comments Additional explanitory text relating to this API call.
     * @param string $do_write Boolean indicator informing Aria whether or not to actually perform the requested operation. If &#039;false&#039; is passed in this field Aria will, if applicable, calculate any potential effects stemming from this call such as pro-ration, plan assignments, etc. and return all relevant data  without actually performing the requested operation or making any changes to the account. This is useful to interfaces that wish to present the user with a &#039;confirmation page&#039; informing of the would-be effects of the requested operation prior to actually performing it.  Do_write defaults to &#039;true&#039;
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions
     * @param string $alt_proration_start_date This argument specifies and alternate proration start date.
     * @param string $effective_date If the assignment directive is for future date assignment, this is the effective date for that assignment
     * @param string $invoice_unbilled_usage Specifies the unbilled usage to be invoiced or not.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>double proration_result_amount The currency amount of any resulting proration action performed as a result of the requested plan change. For plan assignments with an assignment directive of &#039;1&#039; (perform on anniversary date), or &#039;2&#039; (honor client default proration action) when the default configuration is to not do proration, or &#039;3&#039; (force no proration), the value returned in this field will always be &#039;0&#039;. When proration is performed the value returned in this field will either be a positive currency value (indicating a resulting charge to the account) or a negative currency value (indicating a credit to the account). If the value passed in field do_write is false then any positive or negative value returned in this field is notational only, demonstrating what proration effect would be applied to the account if the requested plan assignment/de-assignment were to be actually performed.<br>int invoice_no The unique identifer of a given invoice.<br>array supp_plan_line_items <br>double total_charges_before_tax Total amount to be charged to the account before taxes have been calculated.<br>double total_tax_charges Total taxes as calculated for the amount of the transaction.<br>double total_charges_after_tax Total amount to be charged to the account after taxes have been calculated.<br>double total_credit The total amount of the credit to be applied to the account<br>double total_tax_credit The tax amount of the credit to be applies<br>double total_credit_before_tax The credit to be applied before tax is taken into account<br>double total The grand total of this invoice<br>double proration_credit_result_amount The total proration credit granted to the account<br>double proration_credit_amount The non-tax proration credit granted to the account<br>double proration_tax_amount The prorated refund of the initial tax amount<br>array third_party_errors Errors from third-party systems like taxation engines are returned here, whereas the Aria-generated error codes are returned in the error_code and error_msg fields at the root level of the API return.
     */
    public function cancel_supp_plan($supp_plan_no, $offset_interval, $acct_no = null, $assignment_directive = null, $comments = null, $do_write = null, $client_receipt_id = null, $alt_proration_start_date = null, $effective_date = null, $invoice_unbilled_usage = null)
    {
        return $this->__ws_call('cancel_supp_plan', Array(
                'supp_plan_no' => $supp_plan_no,
                'offset_interval' => $offset_interval,
                'acct_no' => $acct_no,
                'assignment_directive' => $assignment_directive,
                'comments' => $comments,
                'do_write' => $do_write,
                'client_receipt_id' => $client_receipt_id,
                'alt_proration_start_date' => $alt_proration_start_date,
                'effective_date' => $effective_date,
                'invoice_unbilled_usage' => $invoice_unbilled_usage
        ));
    }

    /**
     * Changes the rate schedule and/or the number of units of a supplemental plan assigned to a specified account.
     * @param int $supp_plan_no The Aria-assigned identifier for a supplemental service plan. Allowable values are limited to valid custom plan numbers for client.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $alt_rate_schedule_no Alternate rate schedule number to assign (if any). If none is specified then the default rate schedule number will be used.
     * @param int $num_plan_units The factor by which all future recurring fees for this plan will be multiplied on future invoices for this account. EXAMPLE: An account wishes to have the supplemental plan titled Seats of XYZ Application assigned to them, with a monthly flat cost of $10.00 per seat. To assign 5 seats of this plan to the account, resulting in a monthly charge of $50.00 to the account, a value of 5 should be passed in this field.
     * @param string $coupon_code The code of the coupon to which to apply the discount.  If code is not valid for any reason, an appropriate error code is returned and the entire transaction (including the supp plan assignment and any possible invoice creation) is rolled back.
     * @param int $assignment_directive The scope rule to be applied to this assignment/de-assignment request, governing both the date upon which the assignment should take place (immediately or on the account&#039;s anniversary date) and the proration rule that should be applied (per client&#039;s default rules for proration on plan assignment v. forcing proration on or off for this request only). Default behavior is to assign plan to account on the account&#039;s anniversary date, resulting in no proration effect.
     * @param string $comments Additional explanitory text relating to this API call.
     * @param string $do_write Boolean indicator informing Aria whether or not to actually perform the requested operation. If &#039;false&#039; is passed in this field Aria will, if applicable, calculate any potential effects stemming from this call such as pro-ration, plan assignments, etc. and return all relevant data  without actually performing the requested operation or making any changes to the account. This is useful to interfaces that wish to present the user with a &#039;confirmation page&#039; informing of the would-be effects of the requested operation prior to actually performing it.  Do_write defaults to &#039;true&#039;
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions
     * @param array $new_acct_custom_rates 
     * @param string $effective_date If the assignment directive is for future date assignment, this is the effective date for that assignment
     * @param int $offset_interval If assigning a change on an anniversary day, the number of billing periods by which to delay that change
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>double proration_result_amount The currency amount of any resulting proration action performed as a result of the requested plan change. For plan assignments with an assignment directive of &#039;1&#039; (perform on anniversary date), or &#039;2&#039; (honor client default proration action) when the default configuration is to not do proration, or &#039;3&#039; (force no proration), the value returned in this field will always be &#039;0&#039;. When proration is performed the value returned in this field will either be a positive currency value (indicating a resulting charge to the account) or a negative currency value (indicating a credit to the account). If the value passed in field do_write is false then any positive or negative value returned in this field is notational only, demonstrating what proration effect would be applied to the account if the requested plan assignment/de-assignment were to be actually performed.<br>int invoice_no The unique identifer of a given invoice.<br>array supp_plan_line_items <br>double total_charges_before_tax Total amount to be charged to the account before taxes have been calculated.<br>double total_tax_charges Total taxes as calculated for the amount of the transaction.<br>double total_charges_after_tax Total amount to be charged to the account after taxes have been calculated.<br>double total_credit The total amount of the credit to be applied to the account<br>double total_tax_credit The tax amount of the credit to be applies<br>double total_credit_before_tax The credit to be applied before tax is taken into account<br>double total The grand total of this invoice<br>double proration_credit_result_amount The pro-rated credit amount for this invoice<br>double proration_credit_amount The pro-rated credit amount for this invoice<br>double proration_tax_amount The pro-rated tax credit amount for this invoice<br>double expectd_activation_fee The predicted activation fee based on activation fee charges on supplemental plans on this invoice<br>double expectd_mthly_recurring_cost The predicted monthly recurring cost of the items and plans on this invoice<br>double expectd_annu_recurring_cost The predicted annual recurring cost of the items and plans on this invoice<br>array third_party_errors Errors from third-party systems like taxation engines are returned here, whereas the Aria-generated error codes are returned in the error_code and error_msg fields at the root level of the API return.
     */
    public function modify_supp_plan($supp_plan_no, $acct_no = null, $alt_rate_schedule_no = null, $num_plan_units = null, $coupon_code = null, $assignment_directive = null, $comments = null, $do_write = null, $client_receipt_id = null, $new_acct_custom_rates = null, $effective_date = null, $offset_interval = null)
    {
        return $this->__ws_call('modify_supp_plan', Array(
                'supp_plan_no' => $supp_plan_no,
                'acct_no' => $acct_no,
                'alt_rate_schedule_no' => $alt_rate_schedule_no,
                'num_plan_units' => $num_plan_units,
                'coupon_code' => $coupon_code,
                'assignment_directive' => $assignment_directive,
                'comments' => $comments,
                'do_write' => $do_write,
                'client_receipt_id' => $client_receipt_id,
                'new_acct_custom_rates' => $new_acct_custom_rates,
                'effective_date' => $effective_date,
                'offset_interval' => $offset_interval
        ));
    }

    /**
     * return array of all available child plans subordinate to the given input plan number
     * @param int $existing_supp_plan_no The Supplemental Plan number to be replaced from this action.
     * @param int $new_supp_plan_no The new Supplemental Plan number to use as the replacement supplemental plan.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $alt_rate_schedule_no Alternative Rate Schedule Number. The alt_rate_schedule_no is the unique identifier for an alternative rate schedule that can be assigned to the account holder in place of the default rate schedule. This is often done by CSR&#039;s to provide special compensation or discounts as incentives to account holders.
     * @param int $num_plan_units The factor by which all future recurring fees for this plan will be multiplied on future invoices for this account. EXAMPLE: An account wishes to have the supplemental plan titled Seats of XYZ Application assigned to them, with a monthly flat cost of $10.00 per seat. To assign 5 seats of this plan to the account, resulting in a monthly charge of $50.00 to the account, a value of 5 should be passed in this field.
     * @param string $coupon_code The code of the coupon to which to apply the discount.  If code is not valid for any reason, an appropriate error code is returned and the entire transaction (including the supp plan assignment and any possible invoice creation) is rolled back.
     * @param int $assignment_directive The scope rule to be applied to this assignment/de-assignment request, governing both the date upon which the assignment should take place (immediately or on the account&#039;s anniversary date) and the proration rule that should be applied (per client&#039;s default rules for proration on plan assignment v. forcing proration on or off for this request only). Default behavior is to assign plan to account on the account&#039;s anniversary date, resulting in no proration effect.
     * @param string $comments Additional explanitory text relating to this API call.
     * @param string $do_write Boolean indicator informing Aria whether or not to actually perform the requested operation. If &#039;false&#039; is passed in this field Aria will, if applicable, calculate any potential effects stemming from this call such as pro-ration, plan assignments, etc. and return all relevant data  without actually performing the requested operation or making any changes to the account. This is useful to interfaces that wish to present the user with a &#039;confirmation page&#039; informing of the would-be effects of the requested operation prior to actually performing it.  Do_write defaults to &#039;true&#039;
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions
     * @param int $offset_months Number of months to add to the prorated period.
     * @param int $auto_offset_months_option Automatically set offset months
     * @param string $alt_client_acct_group_id The one-time collections account group  to use for this particular call.  The default on the account is not changed.
     * @param array $new_acct_custom_rates 
     * @param string $effective_date If the assignment directive is for future date assignment, this is the effective date for that assignment
     * @param int $offset_interval If assigning a change on an anniversary day, the number of billing periods by which to delay that change
     * @param string $invoice_unbilled_usage Specifies the unbilled usage to be invoiced or not.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>double proration_result_amount The currency amount of any resulting proration action performed as a result of the requested plan change. For plan assignments with an assignment directive of &#039;1&#039; (perform on anniversary date), or &#039;2&#039; (honor client default proration action) when the default configuration is to not do proration, or &#039;3&#039; (force no proration), the value returned in this field will always be &#039;0&#039;. When proration is performed the value returned in this field will either be a positive currency value (indicating a resulting charge to the account) or a negative currency value (indicating a credit to the account). If the value passed in field do_write is false then any positive or negative value returned in this field is notational only, demonstrating what proration effect would be applied to the account if the requested plan assignment/de-assignment were to be actually performed.<br>int invoice_no The unique identifer of a given invoice.<br>array supp_plan_line_items <br>double total_charges_before_tax Total amount to be charged to the account before taxes have been calculated.<br>double total_tax_charges Total taxes as calculated for the amount of the transaction.<br>double total_charges_after_tax Total amount to be charged to the account after taxes have been calculated.<br>double total_credit The total amount of the credit to be applied to the account<br>double total_tax_credit The tax amount of the credit to be applies<br>double total_credit_before_tax The credit to be applied before tax is taken into account<br>double total The grand total of this invoice<br>double proration_credit_result_amount The pro-rated credit amount for this invoice<br>double proration_credit_amount The pro-rated credit amount for this invoice<br>double proration_tax_amount The pro-rated tax credit amount for this invoice<br>double expectd_activation_fee The predicted activation fee based on activation fee charges on supplemental plans on this invoice<br>double expectd_mthly_recurring_cost The predicted monthly recurring cost of the items and plans on this invoice<br>double expectd_annu_recurring_cost The predicted annual recurring cost of the items and plans on this invoice<br>array third_party_errors Errors from third-party systems like taxation engines are returned here, whereas the Aria-generated error codes are returned in the error_code and error_msg fields at the root level of the API return.
     */
    public function replace_supp_plan($existing_supp_plan_no, $new_supp_plan_no, $acct_no = null, $alt_rate_schedule_no = null, $num_plan_units = null, $coupon_code = null, $assignment_directive = null, $comments = null, $do_write = null, $client_receipt_id = null, $offset_months = null, $auto_offset_months_option = null, $alt_client_acct_group_id = null, $new_acct_custom_rates = null, $effective_date = null, $offset_interval = null, $invoice_unbilled_usage = null)
    {
        return $this->__ws_call('replace_supp_plan', Array(
                'existing_supp_plan_no' => $existing_supp_plan_no,
                'new_supp_plan_no' => $new_supp_plan_no,
                'acct_no' => $acct_no,
                'alt_rate_schedule_no' => $alt_rate_schedule_no,
                'num_plan_units' => $num_plan_units,
                'coupon_code' => $coupon_code,
                'assignment_directive' => $assignment_directive,
                'comments' => $comments,
                'do_write' => $do_write,
                'client_receipt_id' => $client_receipt_id,
                'offset_months' => $offset_months,
                'auto_offset_months_option' => $auto_offset_months_option,
                'alt_client_acct_group_id' => $alt_client_acct_group_id,
                'new_acct_custom_rates' => $new_acct_custom_rates,
                'effective_date' => $effective_date,
                'offset_interval' => $offset_interval,
                'invoice_unbilled_usage' => $invoice_unbilled_usage
        ));
    }

    /**
     * return array of all available child plans subordinate to the given input plan number
     * @param int $in_plan_no Plan for which to query available child plans
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array plans 
     */
    public function get_avail_child_plans_for_plan($in_plan_no)
    {
        return $this->__ws_call('get_avail_child_plans_for_plan', Array(
                'in_plan_no' => $in_plan_no
        ));
    }

    /**
     * return all available child plans subordinate to the given input plan number, along with their services and rate schedules.
     * @param int $in_plan_no The Plan number to acquire a list of all child plans for.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array all_plans This return value is a multidimensional array describing the detail of all available plans.
     */
    public function get_avail_child_plans_for_plan_all($in_plan_no)
    {
        return $this->__ws_call('get_avail_child_plans_for_plan_all', Array(
                'in_plan_no' => $in_plan_no
        ));
    }

    /**
     * return array of all available child plans available for assignment to the given acct, based on the plans currently assigned to that acct
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array plans 
     */
    public function get_avail_child_plans_for_acct($acct_no = null)
    {
        return $this->__ws_call('get_avail_child_plans_for_acct', Array(
                'acct_no' => $acct_no
        ));
    }

    /**
     * return all available child plans available for assignment to the given acct, based on the plans currently assigned to that acct, along with their services and rate schedules.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array all_plans This return value is a multidimensional array describing the detail of all available plans.
     */
    public function get_avail_child_plans_for_acct_all($acct_no = null)
    {
        return $this->__ws_call('get_avail_child_plans_for_acct_all', Array(
                'acct_no' => $acct_no
        ));
    }

    /**
     * Returns the list of account groups associated with a client.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array acct_groups 
     */
    public function get_acct_groups_by_client()
    {
        return $this->__ws_call('get_acct_groups_by_client', Array(
                
        ));
    }

    /**
     * Returns the list of account groups to which an account belongs.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $user_id Account&#039;s user ID. Alternative to using acct_no.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array acct_groups 
     */
    public function get_acct_groups_by_acct($acct_no = null, $user_id = null)
    {
        return $this->__ws_call('get_acct_groups_by_acct', Array(
                'acct_no' => $acct_no,
                'user_id' => $user_id
        ));
    }

    /**
     * Assigns a specified account to a functional account group. Please note: If you attempt to assign an account to a collections account group using this API call, you will encounter an error. You can use the assign_collections_acct_group call to assign an account to a collections account group.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $group_no The group number to use when retreiveing plans assigned to a group.
     * @param string $client_acct_group_id If group_no is left null, this argument should be the client-assigned group ID to assign
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function assign_functional_acct_group($acct_no = null, $group_no = null, $client_acct_group_id = null)
    {
        return $this->__ws_call('assign_functional_acct_group', Array(
                'acct_no' => $acct_no,
                'group_no' => $group_no,
                'client_acct_group_id' => $client_acct_group_id
        ));
    }

    /**
     * Assigns a specified account to a collections account group.  If the account&#039;s payment method is credit card, a $1 authorization will be performed on the credit card using the new group&#039;s payment processor before the group assignment is completed. Please note: If you attempt to use this API call to assign an account to a functional account group, you will encounter an error. You can use the assign_functional_acct_group call to assign an account to a functional account group.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $group_no The group number to use when retreiveing plans assigned to a group.
     * @param string $client_acct_group_id If group_no is left null, this argument should be the client-assigned group ID to assign
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function assign_collections_acct_group($acct_no = null, $group_no = null, $client_acct_group_id = null)
    {
        return $this->__ws_call('assign_collections_acct_group', Array(
                'acct_no' => $acct_no,
                'group_no' => $group_no,
                'client_acct_group_id' => $client_acct_group_id
        ));
    }

    /**
     * Removes a particular account from a specified account group.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $group_no The group number to use when retreiveing plans assigned to a group.
     * @param string $client_acct_group_id If group_no is left null, this argument should be the client-assigned group ID to de-assign
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function remove_acct_from_group($acct_no = null, $group_no = null, $client_acct_group_id = null)
    {
        return $this->__ws_call('remove_acct_from_group', Array(
                'acct_no' => $acct_no,
                'group_no' => $group_no,
                'client_acct_group_id' => $client_acct_group_id
        ));
    }

    /**
     * Creates an account with an extensive set of data elements including the customer&#039;s contact information, billing information, master and supplemental plans, account groups, supplemental fields, and several other data elements. This call also allows you to specify alternate billing dates for a new account.
     * @param int $master_plan_no The Master Subscription plan number.
     * @param string $alt_start_date This is an alternative start date for the account. This date can be used to delay providing services to the account holder (for example: until they have been email validated).
     * @param string $client_acct_id This is the client-assigned identifier for the account.
     * @param string $userid The users unique identifier.
     * @param int $status_cd This is the status of the object inquestion for the current API call.
     * @param int $master_plan_units This is multiplier variiable for the recurring rate on the plan. Generally this value is 1, indicating the face value of the plan&#039;s recurring fee is used.
     * @param array $supp_plans 
     * @param array $supp_plan_units 
     * @param int $notify_method If notification method is not provided, value will default to 1 (HTML emal).
     * @param string $promo_cd This is the code provided the client  and used by the account holder during registration or when executing a transaction. A promotion generally provides access to a custom set of reduced-rate plans.
     * @param string $password Password for the given user
     * @param string $secret_question The users secret question recorded to recover a password.
     * @param string $secret_question_answer The response to a users &#039;secret_question
     * @param string $first_name Contact Fist name
     * @param string $mi The Middle Initial of the contact.
     * @param string $last_name Contact Last name
     * @param string $company_name Company name of the contact
     * @param string $address1 First address line of the contact
     * @param string $address2 second address line of the contact
     * @param string $city City of the contact
     * @param string $locality Locality of the contact
     * @param string $state_prov State or Province of the contact
     * @param string $country Country of the contact
     * @param string $postal_cd Postal/Zip code for the contact address.
     * @param string $phone The phone number of the contact
     * @param string $phone_ext The extension for the contact phone
     * @param string $cell_phone The contact cell phone.
     * @param string $work_phone Work phone number of the contact.
     * @param string $work_phone_ext The extension for the contact work phone
     * @param string $email Email of the contact
     * @param string $birthdate Contact date of birth
     * @param string $bill_first_name First name of the billing contact
     * @param string $bill_mi Middle Initial of the billing contact
     * @param string $bill_last_name Last name of the billing contact
     * @param string $bill_company_name Company name of the billing contact
     * @param string $bill_address1 First address line of the billing contact
     * @param string $bill_address2 second address line of the billing contact
     * @param string $bill_city City of the billing contact
     * @param string $bill_locality Locality of the billing contact
     * @param string $bill_state_prov State or Province of the billing contact
     * @param string $bill_country Country of the billing contact
     * @param string $bill_postal_cd This is the postal code for the billing contact address.
     * @param string $bill_phone Phone of the billing contact
     * @param string $bill_phone_ext This is the billing contacts extension for the bill_phone given.
     * @param string $bill_cell_phone Cell phone of the billing contact
     * @param string $bill_work_phone Work phone of the billing contact
     * @param string $bill_work_phone_ext This is the work phone extension for the billing contact work phone.
     * @param string $bill_email Email of the billing contact
     * @param int $pay_method This is the method_id corresponding to a payment method such as credit card, Electronic Check, Pre-Paid, Net Terms, etc.
     * @param string $cc_number Credit card number.
     * @param int $cc_expire_mm Expiration month for the credit card payment instrument.
     * @param int $cc_expire_yyyy Expiration year for the credit card payment instrument.
     * @param string $bank_acct_no This is the bank account number of the account holder&#039;s payment method. Together with the (ABA) bank_routing_no, this value is used to execute electronic check or ACH transactions.
     * @param string $bank_routing_no This is the ABA (American Banking Association) unique identifier for the fincancial institution.
     * @param int $resp_level_cd The responsibility level code. These are values 1 through 4 as described in the legend for this argument.
     * @param int $senior_acct_no The senior_acct_no is the unique account number for the parent account and is used in establishing parent-child billing relationships.
     * @param array $functional_acct_groups 
     * @param array $collections_acct_groups 
     * @param array $supp_field_names 
     * @param array $supp_field_values 
     * @param int $test_acct_ind This argument indicates the account is a test account and is treated as such in the system.
     * @param int $status_until_alt_start The status for the account prior to alt_start_date. This is only used if the alternate start date is used.
     * @param double $balance_forward A fixed amount, positive or negative, that the newly created account should owe (or be owed) immediately upon creation.  Generally used when converting accounts from other systems into Aria.
     * @param int $alt_bill_day The day of the month that will act in perpetuity as the account&#039;s billing anniversary day.
     * @param string $do_full_invoicing Boolean indicator to override client&#039;s default configured behavior for performing full invoicing on this account as part of this call.
     * @param string $do_prorated_invoicing Prorate the invoice to the end of the billing cycle
     * @param int $master_plan_alt_rate_sched_no The alternate rate schedule number for the master subscription plan being considered.
     * @param array $supp_plan_alt_rate_sched_no 
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions
     * @param string $currency_cd The 3-digit ISO currency code for monetary values used in the context of this API method.
     * @param string $cvv Card Verification Value, used to help verify a transaction is being requested by the card holder since this value is physically printed on the credit card.
     * @param string $taxpayer_id Taxpayer Identification number.
     * @param string $bill_agreement_id Unique ID of the bill agreement.
     * @param string $retroactive_start_date Date to set for retroactive start.
     * @param array $coupon_codes 
     * @param array $new_acct_custom_rates 
     * @param int $alt_msg_template_no Email template number assigned to this account.
     * @param int $seq_func_group_no Functional account group number specifically designated for statement sequence number assignment.
     * @param array $new_acct_plan_contracts 
     * @param string $address3 The third line of the address
     * @param string $bill_address3 The third line of the billing address
     * @param array $usage_accumulation_config The array of plans for which to enable usage accumulation
     * @param array $enable_usage_pooling_plan_no 
     * @param array $client_func_acct_group_ids 
     * @param array $client_coll_acct_group_ids 
     * @param string $track_data1 The raw &quot;track 1&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param string $track_data2 The raw &quot;track 2&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param string $do_write Boolean indicator informing Aria whether or not to actually perform the requested operation. If &#039;false&#039; is passed in this field Aria will, if applicable, calculate any potential effects stemming from this call such as pro-ration, plan assignments, etc. and return all relevant data  without actually performing the requested operation or making any changes to the account. This is useful to interfaces that wish to present the user with a &#039;confirmation page&#039; informing of the would-be effects of the requested operation prior to actually performing it.  Do_write defaults to &#039;true&#039;
     * @param int $tax_exemption_level To provide Tax Exemption Level for the account
     * @param int $cn_alt_msg_template_no The alternate email template number to use for this account
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.<br>string out_userid The user ID, unique among all accounts for this Aria client, assigned to the newly created account.  If input parameter &quot;user_id&quot; was provided, the same value will be returned.  If no &quot;user_id&quot; was provided as input and the client is configured within Aria for automatic generation of random user_id values OR is configured to use account email addresses as user_ids, the generated value will be returned.<br>int invoicing_error_code Aria-defined error code specific to any error encountered during any invoicing/billing processes performed inline as a result of this method call.<br>string invoicing_error_msg The explanatory text corresponding to the value returned (if any) in output &quot;invoicing_error_code&quot;.<br>int invoice_no The unique identifer of the invoice, if any, created automatically by Aria in conjunction with this call.<br>string proc_cvv_response The processor return code from CVV validation (deprecated)<br>string proc_avs_response Processor return code from address validation<br>string proc_cavv_response The processors return code for security validation (includes cvv)<br>string proc_status_code The processor status code<br>string proc_status_text The processors status description<br>string proc_payment_id The processor payment id<br>string proc_auth_code Authorization code provided by the issuing bank<br>string proc_merch_comments Additional information passed to payment processor<br>array out_new_acct_plan_contracts <br>double invoice_charges_before_tax Charges before tax on the initial invoice for this account<br>double invoice_tax_charges Tax charges on the initial invoice for this account<br>double invoice_charges_after_tax The sum of invoice_charges_before_tax and invoice_tax_charges<br>double invoice_credit_amount The amount of credit on the initial invoice for this account<br>double invoice_total_amount The total owed on the initial invoice for this account<br>array new_acct_invoice_line_items <br>array third_party_errors Errors from third-party systems like taxation engines are returned here, whereas the Aria-generated error codes are returned in the error_code and error_msg fields at the root level of the API return.
     */
    public function create_acct_complete($master_plan_no, $alt_start_date = null, $client_acct_id = null, $userid = null, $status_cd = null, $master_plan_units = null, $supp_plans = null, $supp_plan_units = null, $notify_method = null, $promo_cd = null, $password = null, $secret_question = null, $secret_question_answer = null, $first_name = null, $mi = null, $last_name = null, $company_name = null, $address1 = null, $address2 = null, $city = null, $locality = null, $state_prov = null, $country = null, $postal_cd = null, $phone = null, $phone_ext = null, $cell_phone = null, $work_phone = null, $work_phone_ext = null, $email = null, $birthdate = null, $bill_first_name = null, $bill_mi = null, $bill_last_name = null, $bill_company_name = null, $bill_address1 = null, $bill_address2 = null, $bill_city = null, $bill_locality = null, $bill_state_prov = null, $bill_country = null, $bill_postal_cd = null, $bill_phone = null, $bill_phone_ext = null, $bill_cell_phone = null, $bill_work_phone = null, $bill_work_phone_ext = null, $bill_email = null, $pay_method = null, $cc_number = null, $cc_expire_mm = null, $cc_expire_yyyy = null, $bank_acct_no = null, $bank_routing_no = null, $resp_level_cd = null, $senior_acct_no = null, $functional_acct_groups = null, $collections_acct_groups = null, $supp_field_names = null, $supp_field_values = null, $test_acct_ind = null, $status_until_alt_start = null, $balance_forward = null, $alt_bill_day = null, $do_full_invoicing = null, $do_prorated_invoicing = null, $master_plan_alt_rate_sched_no = null, $supp_plan_alt_rate_sched_no = null, $client_receipt_id = null, $currency_cd = null, $cvv = null, $taxpayer_id = null, $bill_agreement_id = null, $retroactive_start_date = null, $coupon_codes = null, $new_acct_custom_rates = null, $alt_msg_template_no = null, $seq_func_group_no = null, $new_acct_plan_contracts = null, $address3 = null, $bill_address3 = null, $usage_accumulation_config = null, $enable_usage_pooling_plan_no = null, $client_func_acct_group_ids = null, $client_coll_acct_group_ids = null, $track_data1 = null, $track_data2 = null, $do_write = null, $tax_exemption_level = null, $cn_alt_msg_template_no = null)
    {
        return $this->__ws_call('create_acct_complete', Array(
                'master_plan_no' => $master_plan_no,
                'alt_start_date' => $alt_start_date,
                'client_acct_id' => $client_acct_id,
                'userid' => $userid,
                'status_cd' => $status_cd,
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
                'coupon_codes' => $coupon_codes,
                'new_acct_custom_rates' => $new_acct_custom_rates,
                'alt_msg_template_no' => $alt_msg_template_no,
                'seq_func_group_no' => $seq_func_group_no,
                'new_acct_plan_contracts' => $new_acct_plan_contracts,
                'address3' => $address3,
                'bill_address3' => $bill_address3,
                'usage_accumulation_config' => $usage_accumulation_config,
                'enable_usage_pooling_plan_no' => $enable_usage_pooling_plan_no,
                'client_func_acct_group_ids' => $client_func_acct_group_ids,
                'client_coll_acct_group_ids' => $client_coll_acct_group_ids,
                'track_data1' => $track_data1,
                'track_data2' => $track_data2,
                'do_write' => $do_write,
                'tax_exemption_level' => $tax_exemption_level,
                'cn_alt_msg_template_no' => $cn_alt_msg_template_no
        ));
    }

    /**
     * creates a hierarchy of accounts with a single call
     * @param int $a1_master_plan_no The Master Subscription plan number.
     * @param string $do_write Boolean indicator informing Aria whether or not to actually perform the requested operation. If &#039;false&#039; is passed in this field Aria will, if applicable, calculate any potential effects stemming from this call such as pro-ration, plan assignments, etc. and return all relevant data  without actually performing the requested operation or making any changes to the account. This is useful to interfaces that wish to present the user with a &#039;confirmation page&#039; informing of the would-be effects of the requested operation prior to actually performing it.  Do_write defaults to &#039;true&#039;
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions
     * @param string $a1_alt_start_date This is an alternative start date for the account. This date can be used to delay providing services to the account holder (for example: until they have been email validated).
     * @param string $a1_client_acct_id This is the client-assigned identifier for the account.
     * @param string $a1_userid The users unique identifier.
     * @param int $a1_status_cd This is the status of the object inquestion for the current API call.
     * @param int $a1_master_plan_units This is multiplier variiable for the recurring rate on the plan. Generally this value is 1, indicating the face value of the plan&#039;s recurring fee is used.
     * @param array $a1_supp_plans 
     * @param array $a1_supp_plan_units 
     * @param int $a1_notify_method If notification method is not provided, value will default to 1 (HTML emal).
     * @param string $a1_promo_cd This is the code provided the client  and used by the account holder during registration or when executing a transaction. A promotion generally provides access to a custom set of reduced-rate plans.
     * @param string $a1_password Password for the given user
     * @param string $a1_secret_question The users secret question recorded to recover a password.
     * @param string $a1_secret_question_answer The response to a users &#039;secret_question
     * @param string $a1_first_name Contact Fist name
     * @param string $a1_mi The Middle Initial of the contact.
     * @param string $a1_last_name Contact Last name
     * @param string $a1_company_name Company name of the contact
     * @param string $a1_address1 First address line of the contact
     * @param string $a1_address2 second address line of the contact
     * @param string $a1_city City of the contact
     * @param string $a1_locality Locality of the contact
     * @param string $a1_state_prov State or Province of the contact
     * @param string $a1_country Country of the contact
     * @param string $a1_postal_cd Postal/Zip code for the contact address.
     * @param string $a1_phone The phone number of the contact
     * @param string $a1_phone_ext The extension for the contact phone
     * @param string $a1_cell_phone The contact cell phone.
     * @param string $a1_work_phone Work phone number of the contact.
     * @param string $a1_work_phone_ext The extension for the contact work phone
     * @param string $a1_email Email of the contact
     * @param string $a1_birthdate Contact date of birth
     * @param string $a1_bill_first_name First name of the billing contact
     * @param string $a1_bill_mi Middle Initial of the billing contact
     * @param string $a1_bill_last_name Last name of the billing contact
     * @param string $a1_bill_company_name Company name of the billing contact
     * @param string $a1_bill_address1 First address line of the billing contact
     * @param string $a1_bill_address2 second address line of the billing contact
     * @param string $a1_bill_city City of the billing contact
     * @param string $a1_bill_locality Locality of the billing contact
     * @param string $a1_bill_state_prov State or Province of the billing contact
     * @param string $a1_bill_country Country of the billing contact
     * @param string $a1_bill_postal_cd This is the postal code for the billing contact address.
     * @param string $a1_bill_phone Phone of the billing contact
     * @param string $a1_bill_phone_ext This is the billing contacts extension for the bill_phone given.
     * @param string $a1_bill_cell_phone Cell phone of the billing contact
     * @param string $a1_bill_work_phone Work phone of the billing contact
     * @param string $a1_bill_work_phone_ext This is the work phone extension for the billing contact work phone.
     * @param string $a1_bill_email Email of the billing contact
     * @param int $a1_pay_method This is the method_id corresponding to a payment method such as credit card, Electronic Check, Pre-Paid, Net Terms, etc.
     * @param string $a1_cc_number Credit card number.
     * @param int $a1_cc_expire_mm Expiration month for the credit card payment instrument.
     * @param int $a1_cc_expire_yyyy Expiration year for the credit card payment instrument.
     * @param string $a1_bank_acct_no This is the bank account number of the account holder&#039;s payment method. Together with the (ABA) bank_routing_no, this value is used to execute electronic check or ACH transactions.
     * @param string $a1_bank_routing_no This is the ABA (American Banking Association) unique identifier for the fincancial institution.
     * @param int $a1_resp_level_cd The responsibility level code. These are values 1 through 4 as described in the legend for this argument.
     * @param array $a1_functional_acct_groups 
     * @param array $a1_collections_acct_groups 
     * @param array $a1_supp_field_names 
     * @param array $a1_supp_field_values 
     * @param int $a1_test_acct_ind This argument indicates the account is a test account and is treated as such in the system.
     * @param int $a1_status_until_alt_start The status for the account prior to alt_start_date. This is only used if the alternate start date is used.
     * @param double $a1_balance_forward A fixed amount, positive or negative, that the newly created account should owe (or be owed) immediately upon creation.  Generally used when converting accounts from other systems into Aria.
     * @param int $a1_alt_bill_day The day of the month that will act in perpetuity as the account&#039;s billing anniversary day.
     * @param string $a1_do_full_invoicing Boolean indicator to override client&#039;s default configured behavior for performing full invoicing on this account as part of this call.
     * @param string $a1_do_prorated_invoicing Prorate the invoice to the end of the billing cycle
     * @param int $a1_master_plan_alt_rate_sched_no The alternate rate schedule number for the master subscription plan being considered.
     * @param array $a1_supp_plan_alt_rate_sched_no 
     * @param string $a1_currency_cd The ISO-compliant 3-digit currency code to use as the default currency for this account
     * @param string $a1_cvv Card Verification Value, used to help verify a transaction is being requested by the card holder since this value is physically printed on the credit card.
     * @param string $a1_taxpayer_id Taxpayer Identification number.
     * @param string $a1_bill_agreement_id Unique ID of the bill agreement.
     * @param string $a1_retroactive_start_date Date to set for retroactive start.
     * @param array $a1_coupon_codes 
     * @param array $a1_new_acct_custom_rates 
     * @param int $a1_alt_msg_template_no Email template number assigned to this account.
     * @param int $a1_seq_func_group_no Functional account group number specifically designated for statement sequence number assignment.
     * @param array $a1_new_acct_plan_contracts 
     * @param string $a1_address3 The third line of the address
     * @param string $a1_bill_address3 The third line of the billing address
     * @param array $a1_usage_accumulation_config The array of plans for which to enable usage accumulation
     * @param array $a1_enable_usage_pooling_plan_no 
     * @param array $a1_client_func_acct_group_ids 
     * @param array $a1_client_coll_acct_group_ids 
     * @param string $a1_track_data1 The raw &quot;track 1&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param string $a1_track_data2 The raw &quot;track 2&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param int $a1_tax_exemption_level To provide Tax Exemption Level for the account
     * @param int $a1_cn_alt_msg_template_no The alternate email template number to use for this account
     * @param string $a2_alt_start_date This is an alternative start date for the account. This date can be used to delay providing services to the account holder (for example: until they have been email validated).
     * @param string $a2_client_acct_id This is the client-assigned identifier for the account.
     * @param string $a2_userid The users unique identifier.
     * @param int $a2_status_cd This is the status of the object inquestion for the current API call.
     * @param int $a2_master_plan_no The Master Subscription plan number.
     * @param int $a2_master_plan_units This is multiplier variiable for the recurring rate on the plan. Generally this value is 1, indicating the face value of the plan&#039;s recurring fee is used.
     * @param array $a2_supp_plans 
     * @param array $a2_supp_plan_units 
     * @param int $a2_notify_method If notification method is not provided, value will default to 1 (HTML emal).
     * @param string $a2_promo_cd This is the code provided the client  and used by the account holder during registration or when executing a transaction. A promotion generally provides access to a custom set of reduced-rate plans.
     * @param string $a2_password Password for the given user
     * @param string $a2_secret_question The users secret question recorded to recover a password.
     * @param string $a2_secret_question_answer The response to a users &#039;secret_question
     * @param string $a2_first_name Contact Fist name
     * @param string $a2_mi The Middle Initial of the contact.
     * @param string $a2_last_name Contact Last name
     * @param string $a2_company_name Company name of the contact
     * @param string $a2_address1 First address line of the contact
     * @param string $a2_address2 second address line of the contact
     * @param string $a2_city City of the contact
     * @param string $a2_locality Locality of the contact
     * @param string $a2_state_prov State or Province of the contact
     * @param string $a2_country Country of the contact
     * @param string $a2_postal_cd Postal/Zip code for the contact address.
     * @param string $a2_phone The phone number of the contact
     * @param string $a2_phone_ext The extension for the contact phone
     * @param string $a2_cell_phone The contact cell phone.
     * @param string $a2_work_phone Work phone number of the contact.
     * @param string $a2_work_phone_ext The extension for the contact work phone
     * @param string $a2_email Email of the contact
     * @param string $a2_birthdate Contact date of birth
     * @param string $a2_bill_first_name First name of the billing contact
     * @param string $a2_bill_mi Middle Initial of the billing contact
     * @param string $a2_bill_last_name Last name of the billing contact
     * @param string $a2_bill_company_name Company name of the billing contact
     * @param string $a2_bill_address1 First address line of the billing contact
     * @param string $a2_bill_address2 second address line of the billing contact
     * @param string $a2_bill_city City of the billing contact
     * @param string $a2_bill_locality Locality of the billing contact
     * @param string $a2_bill_state_prov State or Province of the billing contact
     * @param string $a2_bill_country Country of the billing contact
     * @param string $a2_bill_postal_cd This is the postal code for the billing contact address.
     * @param string $a2_bill_phone Phone of the billing contact
     * @param string $a2_bill_phone_ext This is the billing contacts extension for the bill_phone given.
     * @param string $a2_bill_cell_phone Cell phone of the billing contact
     * @param string $a2_bill_work_phone Work phone of the billing contact
     * @param string $a2_bill_work_phone_ext This is the work phone extension for the billing contact work phone.
     * @param string $a2_bill_email Email of the billing contact
     * @param int $a2_pay_method This is the method_id corresponding to a payment method such as credit card, Electronic Check, Pre-Paid, Net Terms, etc.
     * @param string $a2_cc_number Credit card number.
     * @param int $a2_cc_expire_mm Expiration month for the credit card payment instrument.
     * @param int $a2_cc_expire_yyyy Expiration year for the credit card payment instrument.
     * @param string $a2_bank_acct_no This is the bank account number of the account holder&#039;s payment method. Together with the (ABA) bank_routing_no, this value is used to execute electronic check or ACH transactions.
     * @param string $a2_bank_routing_no This is the ABA (American Banking Association) unique identifier for the fincancial institution.
     * @param int $a2_resp_level_cd The responsibility level code. These are values 1 through 4 as described in the legend for this argument.
     * @param array $a2_functional_acct_groups 
     * @param array $a2_collections_acct_groups 
     * @param array $a2_supp_field_names 
     * @param array $a2_supp_field_values 
     * @param int $a2_test_acct_ind This argument indicates the account is a test account and is treated as such in the system.
     * @param int $a2_status_until_alt_start The status for the account prior to alt_start_date. This is only used if the alternate start date is used.
     * @param double $a2_balance_forward A fixed amount, positive or negative, that the newly created account should owe (or be owed) immediately upon creation.  Generally used when converting accounts from other systems into Aria.
     * @param int $a2_alt_bill_day The day of the month that will act in perpetuity as the account&#039;s billing anniversary day.
     * @param string $a2_do_full_invoicing Boolean indicator to override client&#039;s default configured behavior for performing full invoicing on this account as part of this call.
     * @param string $a2_do_prorated_invoicing Prorate the invoice to the end of the billing cycle
     * @param int $a2_master_plan_alt_rate_sched_no The alternate rate schedule number for the master subscription plan being considered.
     * @param array $a2_supp_plan_alt_rate_sched_no 
     * @param string $a2_currency_cd The ISO-compliant 3-digit currency code to use as the default currency for this account
     * @param string $a2_cvv Card Verification Value, used to help verify a transaction is being requested by the card holder since this value is physically printed on the credit card.
     * @param string $a2_taxpayer_id Taxpayer Identification number.
     * @param string $a2_bill_agreement_id Unique ID of the bill agreement.
     * @param string $a2_retroactive_start_date Date to set for retroactive start.
     * @param array $a2_coupon_codes 
     * @param array $a2_new_acct_custom_rates 
     * @param int $a2_alt_msg_template_no Email template number assigned to this account.
     * @param int $a2_seq_func_group_no Functional account group number specifically designated for statement sequence number assignment.
     * @param array $a2_new_acct_plan_contracts 
     * @param string $a2_address3 The third line of the address
     * @param string $a2_bill_address3 The third line of the billing address
     * @param array $a2_usage_accumulation_config The array of plans for which to enable usage accumulation
     * @param array $a2_enable_usage_pooling_plan_no 
     * @param array $a2_client_func_acct_group_ids 
     * @param array $a2_client_coll_acct_group_ids 
     * @param string $a2_track_data1 The raw &quot;track 1&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param string $a2_track_data2 The raw &quot;track 2&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param int $a2_tax_exemption_level To provide Tax Exemption Level for the account
     * @param int $a2_cn_alt_msg_template_no The alternate email template number to use for this account
     * @param string $a3_alt_start_date This is an alternative start date for the account. This date can be used to delay providing services to the account holder (for example: until they have been email validated).
     * @param string $a3_client_acct_id This is the client-assigned identifier for the account.
     * @param string $a3_userid The users unique identifier.
     * @param int $a3_status_cd This is the status of the object inquestion for the current API call.
     * @param int $a3_master_plan_no The Master Subscription plan number.
     * @param int $a3_master_plan_units This is multiplier variiable for the recurring rate on the plan. Generally this value is 1, indicating the face value of the plan&#039;s recurring fee is used.
     * @param array $a3_supp_plans 
     * @param array $a3_supp_plan_units 
     * @param int $a3_notify_method If notification method is not provided, value will default to 1 (HTML emal).
     * @param string $a3_promo_cd This is the code provided the client  and used by the account holder during registration or when executing a transaction. A promotion generally provides access to a custom set of reduced-rate plans.
     * @param string $a3_password Password for the given user
     * @param string $a3_secret_question The users secret question recorded to recover a password.
     * @param string $a3_secret_question_answer The response to a users &#039;secret_question
     * @param string $a3_first_name Contact Fist name
     * @param string $a3_mi The Middle Initial of the contact.
     * @param string $a3_last_name Contact Last name
     * @param string $a3_company_name Company name of the contact
     * @param string $a3_address1 First address line of the contact
     * @param string $a3_address2 second address line of the contact
     * @param string $a3_city City of the contact
     * @param string $a3_locality Locality of the contact
     * @param string $a3_state_prov State or Province of the contact
     * @param string $a3_country Country of the contact
     * @param string $a3_postal_cd Postal/Zip code for the contact address.
     * @param string $a3_phone The phone number of the contact
     * @param string $a3_phone_ext The extension for the contact phone
     * @param string $a3_cell_phone The contact cell phone.
     * @param string $a3_work_phone Work phone number of the contact.
     * @param string $a3_work_phone_ext The extension for the contact work phone
     * @param string $a3_email Email of the contact
     * @param string $a3_birthdate Contact date of birth
     * @param string $a3_bill_first_name First name of the billing contact
     * @param string $a3_bill_mi Middle Initial of the billing contact
     * @param string $a3_bill_last_name Last name of the billing contact
     * @param string $a3_bill_company_name Company name of the billing contact
     * @param string $a3_bill_address1 First address line of the billing contact
     * @param string $a3_bill_address2 second address line of the billing contact
     * @param string $a3_bill_city City of the billing contact
     * @param string $a3_bill_locality Locality of the billing contact
     * @param string $a3_bill_state_prov State or Province of the billing contact
     * @param string $a3_bill_country Country of the billing contact
     * @param string $a3_bill_postal_cd This is the postal code for the billing contact address.
     * @param string $a3_bill_phone Phone of the billing contact
     * @param string $a3_bill_phone_ext This is the billing contacts extension for the bill_phone given.
     * @param string $a3_bill_cell_phone Cell phone of the billing contact
     * @param string $a3_bill_work_phone Work phone of the billing contact
     * @param string $a3_bill_work_phone_ext This is the work phone extension for the billing contact work phone.
     * @param string $a3_bill_email Email of the billing contact
     * @param int $a3_pay_method This is the method_id corresponding to a payment method such as credit card, Electronic Check, Pre-Paid, Net Terms, etc.
     * @param string $a3_cc_number Credit card number.
     * @param int $a3_cc_expire_mm Expiration month for the credit card payment instrument.
     * @param int $a3_cc_expire_yyyy Expiration year for the credit card payment instrument.
     * @param string $a3_bank_acct_no This is the bank account number of the account holder&#039;s payment method. Together with the (ABA) bank_routing_no, this value is used to execute electronic check or ACH transactions.
     * @param string $a3_bank_routing_no This is the ABA (American Banking Association) unique identifier for the fincancial institution.
     * @param int $a3_resp_level_cd The responsibility level code. These are values 1 through 4 as described in the legend for this argument.
     * @param array $a3_functional_acct_groups 
     * @param array $a3_collections_acct_groups 
     * @param array $a3_supp_field_names 
     * @param array $a3_supp_field_values 
     * @param int $a3_test_acct_ind This argument indicates the account is a test account and is treated as such in the system.
     * @param int $a3_status_until_alt_start The status for the account prior to alt_start_date. This is only used if the alternate start date is used.
     * @param double $a3_balance_forward A fixed amount, positive or negative, that the newly created account should owe (or be owed) immediately upon creation.  Generally used when converting accounts from other systems into Aria.
     * @param int $a3_alt_bill_day The day of the month that will act in perpetuity as the account&#039;s billing anniversary day.
     * @param string $a3_do_full_invoicing Boolean indicator to override client&#039;s default configured behavior for performing full invoicing on this account as part of this call.
     * @param string $a3_do_prorated_invoicing Prorate the invoice to the end of the billing cycle
     * @param int $a3_master_plan_alt_rate_sched_no The alternate rate schedule number for the master subscription plan being considered.
     * @param array $a3_supp_plan_alt_rate_sched_no 
     * @param string $a3_currency_cd The ISO-compliant 3-digit currency code to use as the default currency for this account
     * @param string $a3_cvv Card Verification Value, used to help verify a transaction is being requested by the card holder since this value is physically printed on the credit card.
     * @param string $a3_taxpayer_id Taxpayer Identification number.
     * @param string $a3_bill_agreement_id Unique ID of the bill agreement.
     * @param string $a3_retroactive_start_date Date to set for retroactive start.
     * @param array $a3_coupon_codes 
     * @param array $a3_new_acct_custom_rates 
     * @param int $a3_alt_msg_template_no Email template number assigned to this account.
     * @param int $a3_seq_func_group_no Functional account group number specifically designated for statement sequence number assignment.
     * @param array $a3_new_acct_plan_contracts 
     * @param string $a3_address3 The third line of the address
     * @param string $a3_bill_address3 The third line of the billing address
     * @param array $a3_usage_accumulation_config The array of plans for which to enable usage accumulation
     * @param array $a3_enable_usage_pooling_plan_no 
     * @param array $a3_client_func_acct_group_ids 
     * @param array $a3_client_coll_acct_group_ids 
     * @param string $a3_track_data1 The raw &quot;track 1&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param string $a3_track_data2 The raw &quot;track 2&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param int $a3_tax_exemption_level To provide Tax Exemption Level for the account
     * @param int $a3_cn_alt_msg_template_no The alternate email template number to use for this account
     * @param string $a4_alt_start_date This is an alternative start date for the account. This date can be used to delay providing services to the account holder (for example: until they have been email validated).
     * @param string $a4_client_acct_id This is the client-assigned identifier for the account.
     * @param string $a4_userid The users unique identifier.
     * @param int $a4_status_cd This is the status of the object inquestion for the current API call.
     * @param int $a4_master_plan_no The Master Subscription plan number.
     * @param int $a4_master_plan_units This is multiplier variiable for the recurring rate on the plan. Generally this value is 1, indicating the face value of the plan&#039;s recurring fee is used.
     * @param array $a4_supp_plans 
     * @param array $a4_supp_plan_units 
     * @param int $a4_notify_method If notification method is not provided, value will default to 1 (HTML emal).
     * @param string $a4_promo_cd This is the code provided the client  and used by the account holder during registration or when executing a transaction. A promotion generally provides access to a custom set of reduced-rate plans.
     * @param string $a4_password Password for the given user
     * @param string $a4_secret_question The users secret question recorded to recover a password.
     * @param string $a4_secret_question_answer The response to a users &#039;secret_question
     * @param string $a4_first_name Contact Fist name
     * @param string $a4_mi The Middle Initial of the contact.
     * @param string $a4_last_name Contact Last name
     * @param string $a4_company_name Company name of the contact
     * @param string $a4_address1 First address line of the contact
     * @param string $a4_address2 second address line of the contact
     * @param string $a4_city City of the contact
     * @param string $a4_locality Locality of the contact
     * @param string $a4_state_prov State or Province of the contact
     * @param string $a4_country Country of the contact
     * @param string $a4_postal_cd Postal/Zip code for the contact address.
     * @param string $a4_phone The phone number of the contact
     * @param string $a4_phone_ext The extension for the contact phone
     * @param string $a4_cell_phone The contact cell phone.
     * @param string $a4_work_phone Work phone number of the contact.
     * @param string $a4_work_phone_ext The extension for the contact work phone
     * @param string $a4_email Email of the contact
     * @param string $a4_birthdate Contact date of birth
     * @param string $a4_bill_first_name First name of the billing contact
     * @param string $a4_bill_mi Middle Initial of the billing contact
     * @param string $a4_bill_last_name Last name of the billing contact
     * @param string $a4_bill_company_name Company name of the billing contact
     * @param string $a4_bill_address1 First address line of the billing contact
     * @param string $a4_bill_address2 second address line of the billing contact
     * @param string $a4_bill_city City of the billing contact
     * @param string $a4_bill_locality Locality of the billing contact
     * @param string $a4_bill_state_prov State or Province of the billing contact
     * @param string $a4_bill_country Country of the billing contact
     * @param string $a4_bill_postal_cd This is the postal code for the billing contact address.
     * @param string $a4_bill_phone Phone of the billing contact
     * @param string $a4_bill_phone_ext This is the billing contacts extension for the bill_phone given.
     * @param string $a4_bill_cell_phone Cell phone of the billing contact
     * @param string $a4_bill_work_phone Work phone of the billing contact
     * @param string $a4_bill_work_phone_ext This is the work phone extension for the billing contact work phone.
     * @param string $a4_bill_email Email of the billing contact
     * @param int $a4_pay_method This is the method_id corresponding to a payment method such as credit card, Electronic Check, Pre-Paid, Net Terms, etc.
     * @param string $a4_cc_number Credit card number.
     * @param int $a4_cc_expire_mm Expiration month for the credit card payment instrument.
     * @param int $a4_cc_expire_yyyy Expiration year for the credit card payment instrument.
     * @param string $a4_bank_acct_no This is the bank account number of the account holder&#039;s payment method. Together with the (ABA) bank_routing_no, this value is used to execute electronic check or ACH transactions.
     * @param string $a4_bank_routing_no This is the ABA (American Banking Association) unique identifier for the fincancial institution.
     * @param int $a4_resp_level_cd The responsibility level code. These are values 1 through 4 as described in the legend for this argument.
     * @param array $a4_functional_acct_groups 
     * @param array $a4_collections_acct_groups 
     * @param array $a4_supp_field_names 
     * @param array $a4_supp_field_values 
     * @param int $a4_test_acct_ind This argument indicates the account is a test account and is treated as such in the system.
     * @param int $a4_status_until_alt_start The status for the account prior to alt_start_date. This is only used if the alternate start date is used.
     * @param double $a4_balance_forward A fixed amount, positive or negative, that the newly created account should owe (or be owed) immediately upon creation.  Generally used when converting accounts from other systems into Aria.
     * @param int $a4_alt_bill_day The day of the month that will act in perpetuity as the account&#039;s billing anniversary day.
     * @param string $a4_do_full_invoicing Boolean indicator to override client&#039;s default configured behavior for performing full invoicing on this account as part of this call.
     * @param string $a4_do_prorated_invoicing Prorate the invoice to the end of the billing cycle
     * @param int $a4_master_plan_alt_rate_sched_no The alternate rate schedule number for the master subscription plan being considered.
     * @param array $a4_supp_plan_alt_rate_sched_no 
     * @param string $a4_currency_cd The ISO-compliant 3-digit currency code to use as the default currency for this account
     * @param string $a4_cvv Card Verification Value, used to help verify a transaction is being requested by the card holder since this value is physically printed on the credit card.
     * @param string $a4_taxpayer_id Taxpayer Identification number.
     * @param string $a4_bill_agreement_id Unique ID of the bill agreement.
     * @param string $a4_retroactive_start_date Date to set for retroactive start.
     * @param array $a4_coupon_codes 
     * @param array $a4_new_acct_custom_rates 
     * @param int $a4_alt_msg_template_no Email template number assigned to this account.
     * @param int $a4_seq_func_group_no Functional account group number specifically designated for statement sequence number assignment.
     * @param array $a4_new_acct_plan_contracts 
     * @param string $a4_address3 The third line of the address
     * @param string $a4_bill_address3 The third line of the billing address
     * @param array $a4_usage_accumulation_config The array of plans for which to enable usage accumulation
     * @param array $a4_enable_usage_pooling_plan_no 
     * @param array $a4_client_func_acct_group_ids 
     * @param array $a4_client_coll_acct_group_ids 
     * @param string $a4_track_data1 The raw &quot;track 1&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param string $a4_track_data2 The raw &quot;track 2&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param int $a4_tax_exemption_level To provide Tax Exemption Level for the account
     * @param int $a4_cn_alt_msg_template_no The alternate email template number to use for this account
     * @param string $a5_alt_start_date This is an alternative start date for the account. This date can be used to delay providing services to the account holder (for example: until they have been email validated).
     * @param string $a5_client_acct_id This is the client-assigned identifier for the account.
     * @param string $a5_userid The users unique identifier.
     * @param int $a5_status_cd This is the status of the object inquestion for the current API call.
     * @param int $a5_master_plan_no The Master Subscription plan number.
     * @param int $a5_master_plan_units This is multiplier variiable for the recurring rate on the plan. Generally this value is 1, indicating the face value of the plan&#039;s recurring fee is used.
     * @param array $a5_supp_plans 
     * @param array $a5_supp_plan_units 
     * @param int $a5_notify_method If notification method is not provided, value will default to 1 (HTML emal).
     * @param string $a5_promo_cd This is the code provided the client  and used by the account holder during registration or when executing a transaction. A promotion generally provides access to a custom set of reduced-rate plans.
     * @param string $a5_password Password for the given user
     * @param string $a5_secret_question The users secret question recorded to recover a password.
     * @param string $a5_secret_question_answer The response to a users &#039;secret_question
     * @param string $a5_first_name Contact Fist name
     * @param string $a5_mi The Middle Initial of the contact.
     * @param string $a5_last_name Contact Last name
     * @param string $a5_company_name Company name of the contact
     * @param string $a5_address1 First address line of the contact
     * @param string $a5_address2 second address line of the contact
     * @param string $a5_city City of the contact
     * @param string $a5_locality Locality of the contact
     * @param string $a5_state_prov State or Province of the contact
     * @param string $a5_country Country of the contact
     * @param string $a5_postal_cd Postal/Zip code for the contact address.
     * @param string $a5_phone The phone number of the contact
     * @param string $a5_phone_ext The extension for the contact phone
     * @param string $a5_cell_phone The contact cell phone.
     * @param string $a5_work_phone Work phone number of the contact.
     * @param string $a5_work_phone_ext The extension for the contact work phone
     * @param string $a5_email Email of the contact
     * @param string $a5_birthdate Contact date of birth
     * @param string $a5_bill_first_name First name of the billing contact
     * @param string $a5_bill_mi Middle Initial of the billing contact
     * @param string $a5_bill_last_name Last name of the billing contact
     * @param string $a5_bill_company_name Company name of the billing contact
     * @param string $a5_bill_address1 First address line of the billing contact
     * @param string $a5_bill_address2 second address line of the billing contact
     * @param string $a5_bill_city City of the billing contact
     * @param string $a5_bill_locality Locality of the billing contact
     * @param string $a5_bill_state_prov State or Province of the billing contact
     * @param string $a5_bill_country Country of the billing contact
     * @param string $a5_bill_postal_cd This is the postal code for the billing contact address.
     * @param string $a5_bill_phone Phone of the billing contact
     * @param string $a5_bill_phone_ext This is the billing contacts extension for the bill_phone given.
     * @param string $a5_bill_cell_phone Cell phone of the billing contact
     * @param string $a5_bill_work_phone Work phone of the billing contact
     * @param string $a5_bill_work_phone_ext This is the work phone extension for the billing contact work phone.
     * @param string $a5_bill_email Email of the billing contact
     * @param int $a5_pay_method This is the method_id corresponding to a payment method such as credit card, Electronic Check, Pre-Paid, Net Terms, etc.
     * @param string $a5_cc_number Credit card number.
     * @param int $a5_cc_expire_mm Expiration month for the credit card payment instrument.
     * @param int $a5_cc_expire_yyyy Expiration year for the credit card payment instrument.
     * @param string $a5_bank_acct_no This is the bank account number of the account holder&#039;s payment method. Together with the (ABA) bank_routing_no, this value is used to execute electronic check or ACH transactions.
     * @param string $a5_bank_routing_no This is the ABA (American Banking Association) unique identifier for the fincancial institution.
     * @param int $a5_resp_level_cd The responsibility level code. These are values 1 through 4 as described in the legend for this argument.
     * @param array $a5_functional_acct_groups 
     * @param array $a5_collections_acct_groups 
     * @param array $a5_supp_field_names 
     * @param array $a5_supp_field_values 
     * @param int $a5_test_acct_ind This argument indicates the account is a test account and is treated as such in the system.
     * @param int $a5_status_until_alt_start The status for the account prior to alt_start_date. This is only used if the alternate start date is used.
     * @param double $a5_balance_forward A fixed amount, positive or negative, that the newly created account should owe (or be owed) immediately upon creation.  Generally used when converting accounts from other systems into Aria.
     * @param int $a5_alt_bill_day The day of the month that will act in perpetuity as the account&#039;s billing anniversary day.
     * @param string $a5_do_full_invoicing Boolean indicator to override client&#039;s default configured behavior for performing full invoicing on this account as part of this call.
     * @param string $a5_do_prorated_invoicing Prorate the invoice to the end of the billing cycle
     * @param int $a5_master_plan_alt_rate_sched_no The alternate rate schedule number for the master subscription plan being considered.
     * @param array $a5_supp_plan_alt_rate_sched_no 
     * @param string $a5_currency_cd The ISO-compliant 3-digit currency code to use as the default currency for this account
     * @param string $a5_cvv Card Verification Value, used to help verify a transaction is being requested by the card holder since this value is physically printed on the credit card.
     * @param string $a5_taxpayer_id Taxpayer Identification number.
     * @param string $a5_bill_agreement_id Unique ID of the bill agreement.
     * @param string $a5_retroactive_start_date Date to set for retroactive start.
     * @param array $a5_coupon_codes 
     * @param array $a5_new_acct_custom_rates 
     * @param int $a5_alt_msg_template_no Email template number assigned to this account.
     * @param int $a5_seq_func_group_no Functional account group number specifically designated for statement sequence number assignment.
     * @param array $a5_new_acct_plan_contracts 
     * @param string $a5_address3 The third line of the address
     * @param string $a5_bill_address3 The third line of the billing address
     * @param array $a5_usage_accumulation_config The array of plans for which to enable usage accumulation
     * @param array $a5_enable_usage_pooling_plan_no 
     * @param array $a5_client_func_acct_group_ids 
     * @param array $a5_client_coll_acct_group_ids 
     * @param string $a5_track_data1 The raw &quot;track 1&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param string $a5_track_data2 The raw &quot;track 2&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param int $a5_tax_exemption_level To provide Tax Exemption Level for the account
     * @param int $a5_cn_alt_msg_template_no The alternate email template number to use for this account
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int a1_error_code Aria-assigned error identifier. 0 indicates no error.<br>string a1_error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int a1_acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.<br>string a1_out_userid The user ID, unique among all accounts for this Aria client, assigned to the newly created account.  If input parameter &quot;user_id&quot; was provided, the same value will be returned.  If no &quot;user_id&quot; was provided as input and the client is configured within Aria for automatic generation of random user_id values OR is configured to use account email addresses as user_ids, the generated value will be returned.<br>string a1_out_client_acct_id The client_acct_id of this account, if one was supplied by the client.<br>int a1_invoicing_error_code Aria-defined error code specific to any error encountered during any invoicing/billing processes performed inline as a result of this method call.<br>string a1_invoicing_error_msg The explanatory text corresponding to the value returned (if any) in output &quot;invoicing_error_code&quot;.<br>int a1_invoice_no The unique identifer of the invoice, if any, created automatically by Aria in conjunction with this call.<br>string a1_proc_cvv_response The processor return code from CVV validation (deprecated)<br>string a1_proc_avs_response Processor return code from address validation<br>string a1_proc_cavv_response The processors return code for security validation (includes cvv)<br>string a1_proc_status_code The processor status code<br>string a1_proc_status_text The processors status description<br>string a1_proc_payment_id The processor payment id<br>string a1_proc_auth_code Authorization code provided by the issuing bank<br>string a1_proc_merch_comments Additional information passed to payment processor<br>array a1_out_new_acct_plan_contracts <br>double a1_invoice_charges_before_tax Charges before tax on the initial invoice for this account<br>double a1_invoice_tax_charges Tax charges on the initial invoice for this account<br>double a1_invoice_charges_after_tax The sum of invoice_charges_before_tax and invoice_tax_charges<br>double a1_invoice_credit_amount The amount of credit on the initial invoice for this account<br>double a1_invoice_total_amount The total owed on the initial invoice for this account<br>array a1_new_acct_invoice_line_items <br>array a1_third_party_errors Errors from third-party systems like taxation engines are returned here, whereas the Aria-generated error codes are returned in the error_code and error_msg fields at the root level of the API return.<br>int a2_error_code Aria-assigned error identifier. 0 indicates no error.<br>string a2_error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int a2_acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.<br>string a2_out_userid The user ID, unique among all accounts for this Aria client, assigned to the newly created account.  If input parameter &quot;user_id&quot; was provided, the same value will be returned.  If no &quot;user_id&quot; was provided as input and the client is configured within Aria for automatic generation of random user_id values OR is configured to use account email addresses as user_ids, the generated value will be returned.<br>string a2_out_client_acct_id The client_acct_id of this account, if one was supplied by the client.<br>int a2_invoicing_error_code Aria-defined error code specific to any error encountered during any invoicing/billing processes performed inline as a result of this method call.<br>string a2_invoicing_error_msg The explanatory text corresponding to the value returned (if any) in output &quot;invoicing_error_code&quot;.<br>int a2_invoice_no The unique identifer of the invoice, if any, created automatically by Aria in conjunction with this call.<br>string a2_proc_cvv_response The processor return code from CVV validation (deprecated)<br>string a2_proc_avs_response Processor return code from address validation<br>string a2_proc_cavv_response The processors return code for security validation (includes cvv)<br>string a2_proc_status_code The processor status code<br>string a2_proc_status_text The processors status description<br>string a2_proc_payment_id The processor payment id<br>string a2_proc_auth_code Authorization code provided by the issuing bank<br>string a2_proc_merch_comments Additional information passed to payment processor<br>array a2_out_new_acct_plan_contracts <br>double a2_invoice_charges_before_tax Charges before tax on the initial invoice for this account<br>double a2_invoice_tax_charges Tax charges on the initial invoice for this account<br>double a2_invoice_charges_after_tax The sum of invoice_charges_before_tax and invoice_tax_charges<br>double a2_invoice_credit_amount The amount of credit on the initial invoice for this account<br>double a2_invoice_total_amount The total owed on the initial invoice for this account<br>array a2_new_acct_invoice_line_items <br>array a2_third_party_errors Errors from third-party systems like taxation engines are returned here, whereas the Aria-generated error codes are returned in the error_code and error_msg fields at the root level of the API return.<br>int a3_error_code Aria-assigned error identifier. 0 indicates no error.<br>string a3_error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int a3_acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.<br>string a3_out_userid The user ID, unique among all accounts for this Aria client, assigned to the newly created account.  If input parameter &quot;user_id&quot; was provided, the same value will be returned.  If no &quot;user_id&quot; was provided as input and the client is configured within Aria for automatic generation of random user_id values OR is configured to use account email addresses as user_ids, the generated value will be returned.<br>string a3_out_client_acct_id The client_acct_id of this account, if one was supplied by the client.<br>int a3_invoicing_error_code Aria-defined error code specific to any error encountered during any invoicing/billing processes performed inline as a result of this method call.<br>string a3_invoicing_error_msg The explanatory text corresponding to the value returned (if any) in output &quot;invoicing_error_code&quot;.<br>int a3_invoice_no The unique identifer of the invoice, if any, created automatically by Aria in conjunction with this call.<br>string a3_proc_cvv_response The processor return code from CVV validation (deprecated)<br>string a3_proc_avs_response Processor return code from address validation<br>string a3_proc_cavv_response The processors return code for security validation (includes cvv)<br>string a3_proc_status_code The processor status code<br>string a3_proc_status_text The processors status description<br>string a3_proc_payment_id The processor payment id<br>string a3_proc_auth_code Authorization code provided by the issuing bank<br>string a3_proc_merch_comments Additional information passed to payment processor<br>array a3_out_new_acct_plan_contracts <br>double a3_invoice_charges_before_tax Charges before tax on the initial invoice for this account<br>double a3_invoice_tax_charges Tax charges on the initial invoice for this account<br>double a3_invoice_charges_after_tax The sum of invoice_charges_before_tax and invoice_tax_charges<br>double a3_invoice_credit_amount The amount of credit on the initial invoice for this account<br>double a3_invoice_total_amount The total owed on the initial invoice for this account<br>array a3_new_acct_invoice_line_items <br>array a3_third_party_errors Errors from third-party systems like taxation engines are returned here, whereas the Aria-generated error codes are returned in the error_code and error_msg fields at the root level of the API return.<br>int a4_error_code Aria-assigned error identifier. 0 indicates no error.<br>string a4_error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int a4_acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.<br>string a4_out_userid The user ID, unique among all accounts for this Aria client, assigned to the newly created account.  If input parameter &quot;user_id&quot; was provided, the same value will be returned.  If no &quot;user_id&quot; was provided as input and the client is configured within Aria for automatic generation of random user_id values OR is configured to use account email addresses as user_ids, the generated value will be returned.<br>string a4_out_client_acct_id The client_acct_id of this account, if one was supplied by the client.<br>int a4_invoicing_error_code Aria-defined error code specific to any error encountered during any invoicing/billing processes performed inline as a result of this method call.<br>string a4_invoicing_error_msg The explanatory text corresponding to the value returned (if any) in output &quot;invoicing_error_code&quot;.<br>int a4_invoice_no The unique identifer of the invoice, if any, created automatically by Aria in conjunction with this call.<br>string a4_proc_cvv_response The processor return code from CVV validation (deprecated)<br>string a4_proc_avs_response Processor return code from address validation<br>string a4_proc_cavv_response The processors return code for security validation (includes cvv)<br>string a4_proc_status_code The processor status code<br>string a4_proc_status_text The processors status description<br>string a4_proc_payment_id The processor payment id<br>string a4_proc_auth_code Authorization code provided by the issuing bank<br>string a4_proc_merch_comments Additional information passed to payment processor<br>array a4_out_new_acct_plan_contracts <br>double a4_invoice_charges_before_tax Charges before tax on the initial invoice for this account<br>double a4_invoice_tax_charges Tax charges on the initial invoice for this account<br>double a4_invoice_charges_after_tax The sum of invoice_charges_before_tax and invoice_tax_charges<br>double a4_invoice_credit_amount The amount of credit on the initial invoice for this account<br>double a4_invoice_total_amount The total owed on the initial invoice for this account<br>array a4_new_acct_invoice_line_items <br>array a4_third_party_errors Errors from third-party systems like taxation engines are returned here, whereas the Aria-generated error codes are returned in the error_code and error_msg fields at the root level of the API return.<br>int a5_error_code Aria-assigned error identifier. 0 indicates no error.<br>string a5_error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int a5_acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.<br>string a5_out_userid The user ID, unique among all accounts for this Aria client, assigned to the newly created account.  If input parameter &quot;user_id&quot; was provided, the same value will be returned.  If no &quot;user_id&quot; was provided as input and the client is configured within Aria for automatic generation of random user_id values OR is configured to use account email addresses as user_ids, the generated value will be returned.<br>string a5_out_client_acct_id The client_acct_id of this account, if one was supplied by the client.<br>int a5_invoicing_error_code Aria-defined error code specific to any error encountered during any invoicing/billing processes performed inline as a result of this method call.<br>string a5_invoicing_error_msg The explanatory text corresponding to the value returned (if any) in output &quot;invoicing_error_code&quot;.<br>int a5_invoice_no The unique identifer of the invoice, if any, created automatically by Aria in conjunction with this call.<br>string a5_proc_cvv_response The processor return code from CVV validation (deprecated)<br>string a5_proc_avs_response Processor return code from address validation<br>string a5_proc_cavv_response The processors return code for security validation (includes cvv)<br>string a5_proc_status_code The processor status code<br>string a5_proc_status_text The processors status description<br>string a5_proc_payment_id The processor payment id<br>string a5_proc_auth_code Authorization code provided by the issuing bank<br>string a5_proc_merch_comments Additional information passed to payment processor<br>array a5_out_new_acct_plan_contracts <br>double a5_invoice_charges_before_tax Charges before tax on the initial invoice for this account<br>double a5_invoice_tax_charges Tax charges on the initial invoice for this account<br>double a5_invoice_charges_after_tax The sum of invoice_charges_before_tax and invoice_tax_charges<br>double a5_invoice_credit_amount The amount of credit on the initial invoice for this account<br>double a5_invoice_total_amount The total owed on the initial invoice for this account<br>array a5_new_acct_invoice_line_items <br>array a5_third_party_errors Errors from third-party systems like taxation engines are returned here, whereas the Aria-generated error codes are returned in the error_code and error_msg fields at the root level of the API return.
     */
    public function create_acct_hierarchy($a1_master_plan_no, $do_write = null, $client_receipt_id = null, $a1_alt_start_date = null, $a1_client_acct_id = null, $a1_userid = null, $a1_status_cd = null, $a1_master_plan_units = null, $a1_supp_plans = null, $a1_supp_plan_units = null, $a1_notify_method = null, $a1_promo_cd = null, $a1_password = null, $a1_secret_question = null, $a1_secret_question_answer = null, $a1_first_name = null, $a1_mi = null, $a1_last_name = null, $a1_company_name = null, $a1_address1 = null, $a1_address2 = null, $a1_city = null, $a1_locality = null, $a1_state_prov = null, $a1_country = null, $a1_postal_cd = null, $a1_phone = null, $a1_phone_ext = null, $a1_cell_phone = null, $a1_work_phone = null, $a1_work_phone_ext = null, $a1_email = null, $a1_birthdate = null, $a1_bill_first_name = null, $a1_bill_mi = null, $a1_bill_last_name = null, $a1_bill_company_name = null, $a1_bill_address1 = null, $a1_bill_address2 = null, $a1_bill_city = null, $a1_bill_locality = null, $a1_bill_state_prov = null, $a1_bill_country = null, $a1_bill_postal_cd = null, $a1_bill_phone = null, $a1_bill_phone_ext = null, $a1_bill_cell_phone = null, $a1_bill_work_phone = null, $a1_bill_work_phone_ext = null, $a1_bill_email = null, $a1_pay_method = null, $a1_cc_number = null, $a1_cc_expire_mm = null, $a1_cc_expire_yyyy = null, $a1_bank_acct_no = null, $a1_bank_routing_no = null, $a1_resp_level_cd = null, $a1_functional_acct_groups = null, $a1_collections_acct_groups = null, $a1_supp_field_names = null, $a1_supp_field_values = null, $a1_test_acct_ind = null, $a1_status_until_alt_start = null, $a1_balance_forward = null, $a1_alt_bill_day = null, $a1_do_full_invoicing = null, $a1_do_prorated_invoicing = null, $a1_master_plan_alt_rate_sched_no = null, $a1_supp_plan_alt_rate_sched_no = null, $a1_currency_cd = null, $a1_cvv = null, $a1_taxpayer_id = null, $a1_bill_agreement_id = null, $a1_retroactive_start_date = null, $a1_coupon_codes = null, $a1_new_acct_custom_rates = null, $a1_alt_msg_template_no = null, $a1_seq_func_group_no = null, $a1_new_acct_plan_contracts = null, $a1_address3 = null, $a1_bill_address3 = null, $a1_usage_accumulation_config = null, $a1_enable_usage_pooling_plan_no = null, $a1_client_func_acct_group_ids = null, $a1_client_coll_acct_group_ids = null, $a1_track_data1 = null, $a1_track_data2 = null, $a1_tax_exemption_level = null, $a1_cn_alt_msg_template_no = null, $a2_alt_start_date = null, $a2_client_acct_id = null, $a2_userid = null, $a2_status_cd = null, $a2_master_plan_no = null, $a2_master_plan_units = null, $a2_supp_plans = null, $a2_supp_plan_units = null, $a2_notify_method = null, $a2_promo_cd = null, $a2_password = null, $a2_secret_question = null, $a2_secret_question_answer = null, $a2_first_name = null, $a2_mi = null, $a2_last_name = null, $a2_company_name = null, $a2_address1 = null, $a2_address2 = null, $a2_city = null, $a2_locality = null, $a2_state_prov = null, $a2_country = null, $a2_postal_cd = null, $a2_phone = null, $a2_phone_ext = null, $a2_cell_phone = null, $a2_work_phone = null, $a2_work_phone_ext = null, $a2_email = null, $a2_birthdate = null, $a2_bill_first_name = null, $a2_bill_mi = null, $a2_bill_last_name = null, $a2_bill_company_name = null, $a2_bill_address1 = null, $a2_bill_address2 = null, $a2_bill_city = null, $a2_bill_locality = null, $a2_bill_state_prov = null, $a2_bill_country = null, $a2_bill_postal_cd = null, $a2_bill_phone = null, $a2_bill_phone_ext = null, $a2_bill_cell_phone = null, $a2_bill_work_phone = null, $a2_bill_work_phone_ext = null, $a2_bill_email = null, $a2_pay_method = null, $a2_cc_number = null, $a2_cc_expire_mm = null, $a2_cc_expire_yyyy = null, $a2_bank_acct_no = null, $a2_bank_routing_no = null, $a2_resp_level_cd = null, $a2_functional_acct_groups = null, $a2_collections_acct_groups = null, $a2_supp_field_names = null, $a2_supp_field_values = null, $a2_test_acct_ind = null, $a2_status_until_alt_start = null, $a2_balance_forward = null, $a2_alt_bill_day = null, $a2_do_full_invoicing = null, $a2_do_prorated_invoicing = null, $a2_master_plan_alt_rate_sched_no = null, $a2_supp_plan_alt_rate_sched_no = null, $a2_currency_cd = null, $a2_cvv = null, $a2_taxpayer_id = null, $a2_bill_agreement_id = null, $a2_retroactive_start_date = null, $a2_coupon_codes = null, $a2_new_acct_custom_rates = null, $a2_alt_msg_template_no = null, $a2_seq_func_group_no = null, $a2_new_acct_plan_contracts = null, $a2_address3 = null, $a2_bill_address3 = null, $a2_usage_accumulation_config = null, $a2_enable_usage_pooling_plan_no = null, $a2_client_func_acct_group_ids = null, $a2_client_coll_acct_group_ids = null, $a2_track_data1 = null, $a2_track_data2 = null, $a2_tax_exemption_level = null, $a2_cn_alt_msg_template_no = null, $a3_alt_start_date = null, $a3_client_acct_id = null, $a3_userid = null, $a3_status_cd = null, $a3_master_plan_no = null, $a3_master_plan_units = null, $a3_supp_plans = null, $a3_supp_plan_units = null, $a3_notify_method = null, $a3_promo_cd = null, $a3_password = null, $a3_secret_question = null, $a3_secret_question_answer = null, $a3_first_name = null, $a3_mi = null, $a3_last_name = null, $a3_company_name = null, $a3_address1 = null, $a3_address2 = null, $a3_city = null, $a3_locality = null, $a3_state_prov = null, $a3_country = null, $a3_postal_cd = null, $a3_phone = null, $a3_phone_ext = null, $a3_cell_phone = null, $a3_work_phone = null, $a3_work_phone_ext = null, $a3_email = null, $a3_birthdate = null, $a3_bill_first_name = null, $a3_bill_mi = null, $a3_bill_last_name = null, $a3_bill_company_name = null, $a3_bill_address1 = null, $a3_bill_address2 = null, $a3_bill_city = null, $a3_bill_locality = null, $a3_bill_state_prov = null, $a3_bill_country = null, $a3_bill_postal_cd = null, $a3_bill_phone = null, $a3_bill_phone_ext = null, $a3_bill_cell_phone = null, $a3_bill_work_phone = null, $a3_bill_work_phone_ext = null, $a3_bill_email = null, $a3_pay_method = null, $a3_cc_number = null, $a3_cc_expire_mm = null, $a3_cc_expire_yyyy = null, $a3_bank_acct_no = null, $a3_bank_routing_no = null, $a3_resp_level_cd = null, $a3_functional_acct_groups = null, $a3_collections_acct_groups = null, $a3_supp_field_names = null, $a3_supp_field_values = null, $a3_test_acct_ind = null, $a3_status_until_alt_start = null, $a3_balance_forward = null, $a3_alt_bill_day = null, $a3_do_full_invoicing = null, $a3_do_prorated_invoicing = null, $a3_master_plan_alt_rate_sched_no = null, $a3_supp_plan_alt_rate_sched_no = null, $a3_currency_cd = null, $a3_cvv = null, $a3_taxpayer_id = null, $a3_bill_agreement_id = null, $a3_retroactive_start_date = null, $a3_coupon_codes = null, $a3_new_acct_custom_rates = null, $a3_alt_msg_template_no = null, $a3_seq_func_group_no = null, $a3_new_acct_plan_contracts = null, $a3_address3 = null, $a3_bill_address3 = null, $a3_usage_accumulation_config = null, $a3_enable_usage_pooling_plan_no = null, $a3_client_func_acct_group_ids = null, $a3_client_coll_acct_group_ids = null, $a3_track_data1 = null, $a3_track_data2 = null, $a3_tax_exemption_level = null, $a3_cn_alt_msg_template_no = null, $a4_alt_start_date = null, $a4_client_acct_id = null, $a4_userid = null, $a4_status_cd = null, $a4_master_plan_no = null, $a4_master_plan_units = null, $a4_supp_plans = null, $a4_supp_plan_units = null, $a4_notify_method = null, $a4_promo_cd = null, $a4_password = null, $a4_secret_question = null, $a4_secret_question_answer = null, $a4_first_name = null, $a4_mi = null, $a4_last_name = null, $a4_company_name = null, $a4_address1 = null, $a4_address2 = null, $a4_city = null, $a4_locality = null, $a4_state_prov = null, $a4_country = null, $a4_postal_cd = null, $a4_phone = null, $a4_phone_ext = null, $a4_cell_phone = null, $a4_work_phone = null, $a4_work_phone_ext = null, $a4_email = null, $a4_birthdate = null, $a4_bill_first_name = null, $a4_bill_mi = null, $a4_bill_last_name = null, $a4_bill_company_name = null, $a4_bill_address1 = null, $a4_bill_address2 = null, $a4_bill_city = null, $a4_bill_locality = null, $a4_bill_state_prov = null, $a4_bill_country = null, $a4_bill_postal_cd = null, $a4_bill_phone = null, $a4_bill_phone_ext = null, $a4_bill_cell_phone = null, $a4_bill_work_phone = null, $a4_bill_work_phone_ext = null, $a4_bill_email = null, $a4_pay_method = null, $a4_cc_number = null, $a4_cc_expire_mm = null, $a4_cc_expire_yyyy = null, $a4_bank_acct_no = null, $a4_bank_routing_no = null, $a4_resp_level_cd = null, $a4_functional_acct_groups = null, $a4_collections_acct_groups = null, $a4_supp_field_names = null, $a4_supp_field_values = null, $a4_test_acct_ind = null, $a4_status_until_alt_start = null, $a4_balance_forward = null, $a4_alt_bill_day = null, $a4_do_full_invoicing = null, $a4_do_prorated_invoicing = null, $a4_master_plan_alt_rate_sched_no = null, $a4_supp_plan_alt_rate_sched_no = null, $a4_currency_cd = null, $a4_cvv = null, $a4_taxpayer_id = null, $a4_bill_agreement_id = null, $a4_retroactive_start_date = null, $a4_coupon_codes = null, $a4_new_acct_custom_rates = null, $a4_alt_msg_template_no = null, $a4_seq_func_group_no = null, $a4_new_acct_plan_contracts = null, $a4_address3 = null, $a4_bill_address3 = null, $a4_usage_accumulation_config = null, $a4_enable_usage_pooling_plan_no = null, $a4_client_func_acct_group_ids = null, $a4_client_coll_acct_group_ids = null, $a4_track_data1 = null, $a4_track_data2 = null, $a4_tax_exemption_level = null, $a4_cn_alt_msg_template_no = null, $a5_alt_start_date = null, $a5_client_acct_id = null, $a5_userid = null, $a5_status_cd = null, $a5_master_plan_no = null, $a5_master_plan_units = null, $a5_supp_plans = null, $a5_supp_plan_units = null, $a5_notify_method = null, $a5_promo_cd = null, $a5_password = null, $a5_secret_question = null, $a5_secret_question_answer = null, $a5_first_name = null, $a5_mi = null, $a5_last_name = null, $a5_company_name = null, $a5_address1 = null, $a5_address2 = null, $a5_city = null, $a5_locality = null, $a5_state_prov = null, $a5_country = null, $a5_postal_cd = null, $a5_phone = null, $a5_phone_ext = null, $a5_cell_phone = null, $a5_work_phone = null, $a5_work_phone_ext = null, $a5_email = null, $a5_birthdate = null, $a5_bill_first_name = null, $a5_bill_mi = null, $a5_bill_last_name = null, $a5_bill_company_name = null, $a5_bill_address1 = null, $a5_bill_address2 = null, $a5_bill_city = null, $a5_bill_locality = null, $a5_bill_state_prov = null, $a5_bill_country = null, $a5_bill_postal_cd = null, $a5_bill_phone = null, $a5_bill_phone_ext = null, $a5_bill_cell_phone = null, $a5_bill_work_phone = null, $a5_bill_work_phone_ext = null, $a5_bill_email = null, $a5_pay_method = null, $a5_cc_number = null, $a5_cc_expire_mm = null, $a5_cc_expire_yyyy = null, $a5_bank_acct_no = null, $a5_bank_routing_no = null, $a5_resp_level_cd = null, $a5_functional_acct_groups = null, $a5_collections_acct_groups = null, $a5_supp_field_names = null, $a5_supp_field_values = null, $a5_test_acct_ind = null, $a5_status_until_alt_start = null, $a5_balance_forward = null, $a5_alt_bill_day = null, $a5_do_full_invoicing = null, $a5_do_prorated_invoicing = null, $a5_master_plan_alt_rate_sched_no = null, $a5_supp_plan_alt_rate_sched_no = null, $a5_currency_cd = null, $a5_cvv = null, $a5_taxpayer_id = null, $a5_bill_agreement_id = null, $a5_retroactive_start_date = null, $a5_coupon_codes = null, $a5_new_acct_custom_rates = null, $a5_alt_msg_template_no = null, $a5_seq_func_group_no = null, $a5_new_acct_plan_contracts = null, $a5_address3 = null, $a5_bill_address3 = null, $a5_usage_accumulation_config = null, $a5_enable_usage_pooling_plan_no = null, $a5_client_func_acct_group_ids = null, $a5_client_coll_acct_group_ids = null, $a5_track_data1 = null, $a5_track_data2 = null, $a5_tax_exemption_level = null, $a5_cn_alt_msg_template_no = null)
    {
        return $this->__ws_call('create_acct_hierarchy', Array(
                'a1_master_plan_no' => $a1_master_plan_no,
                'do_write' => $do_write,
                'client_receipt_id' => $client_receipt_id,
                'a1_alt_start_date' => $a1_alt_start_date,
                'a1_client_acct_id' => $a1_client_acct_id,
                'a1_userid' => $a1_userid,
                'a1_status_cd' => $a1_status_cd,
                'a1_master_plan_units' => $a1_master_plan_units,
                'a1_supp_plans' => $a1_supp_plans,
                'a1_supp_plan_units' => $a1_supp_plan_units,
                'a1_notify_method' => $a1_notify_method,
                'a1_promo_cd' => $a1_promo_cd,
                'a1_password' => $a1_password,
                'a1_secret_question' => $a1_secret_question,
                'a1_secret_question_answer' => $a1_secret_question_answer,
                'a1_first_name' => $a1_first_name,
                'a1_mi' => $a1_mi,
                'a1_last_name' => $a1_last_name,
                'a1_company_name' => $a1_company_name,
                'a1_address1' => $a1_address1,
                'a1_address2' => $a1_address2,
                'a1_city' => $a1_city,
                'a1_locality' => $a1_locality,
                'a1_state_prov' => $a1_state_prov,
                'a1_country' => $a1_country,
                'a1_postal_cd' => $a1_postal_cd,
                'a1_phone' => $a1_phone,
                'a1_phone_ext' => $a1_phone_ext,
                'a1_cell_phone' => $a1_cell_phone,
                'a1_work_phone' => $a1_work_phone,
                'a1_work_phone_ext' => $a1_work_phone_ext,
                'a1_email' => $a1_email,
                'a1_birthdate' => $a1_birthdate,
                'a1_bill_first_name' => $a1_bill_first_name,
                'a1_bill_mi' => $a1_bill_mi,
                'a1_bill_last_name' => $a1_bill_last_name,
                'a1_bill_company_name' => $a1_bill_company_name,
                'a1_bill_address1' => $a1_bill_address1,
                'a1_bill_address2' => $a1_bill_address2,
                'a1_bill_city' => $a1_bill_city,
                'a1_bill_locality' => $a1_bill_locality,
                'a1_bill_state_prov' => $a1_bill_state_prov,
                'a1_bill_country' => $a1_bill_country,
                'a1_bill_postal_cd' => $a1_bill_postal_cd,
                'a1_bill_phone' => $a1_bill_phone,
                'a1_bill_phone_ext' => $a1_bill_phone_ext,
                'a1_bill_cell_phone' => $a1_bill_cell_phone,
                'a1_bill_work_phone' => $a1_bill_work_phone,
                'a1_bill_work_phone_ext' => $a1_bill_work_phone_ext,
                'a1_bill_email' => $a1_bill_email,
                'a1_pay_method' => $a1_pay_method,
                'a1_cc_number' => $a1_cc_number,
                'a1_cc_expire_mm' => $a1_cc_expire_mm,
                'a1_cc_expire_yyyy' => $a1_cc_expire_yyyy,
                'a1_bank_acct_no' => $a1_bank_acct_no,
                'a1_bank_routing_no' => $a1_bank_routing_no,
                'a1_resp_level_cd' => $a1_resp_level_cd,
                'a1_functional_acct_groups' => $a1_functional_acct_groups,
                'a1_collections_acct_groups' => $a1_collections_acct_groups,
                'a1_supp_field_names' => $a1_supp_field_names,
                'a1_supp_field_values' => $a1_supp_field_values,
                'a1_test_acct_ind' => $a1_test_acct_ind,
                'a1_status_until_alt_start' => $a1_status_until_alt_start,
                'a1_balance_forward' => $a1_balance_forward,
                'a1_alt_bill_day' => $a1_alt_bill_day,
                'a1_do_full_invoicing' => $a1_do_full_invoicing,
                'a1_do_prorated_invoicing' => $a1_do_prorated_invoicing,
                'a1_master_plan_alt_rate_sched_no' => $a1_master_plan_alt_rate_sched_no,
                'a1_supp_plan_alt_rate_sched_no' => $a1_supp_plan_alt_rate_sched_no,
                'a1_currency_cd' => $a1_currency_cd,
                'a1_cvv' => $a1_cvv,
                'a1_taxpayer_id' => $a1_taxpayer_id,
                'a1_bill_agreement_id' => $a1_bill_agreement_id,
                'a1_retroactive_start_date' => $a1_retroactive_start_date,
                'a1_coupon_codes' => $a1_coupon_codes,
                'a1_new_acct_custom_rates' => $a1_new_acct_custom_rates,
                'a1_alt_msg_template_no' => $a1_alt_msg_template_no,
                'a1_seq_func_group_no' => $a1_seq_func_group_no,
                'a1_new_acct_plan_contracts' => $a1_new_acct_plan_contracts,
                'a1_address3' => $a1_address3,
                'a1_bill_address3' => $a1_bill_address3,
                'a1_usage_accumulation_config' => $a1_usage_accumulation_config,
                'a1_enable_usage_pooling_plan_no' => $a1_enable_usage_pooling_plan_no,
                'a1_client_func_acct_group_ids' => $a1_client_func_acct_group_ids,
                'a1_client_coll_acct_group_ids' => $a1_client_coll_acct_group_ids,
                'a1_track_data1' => $a1_track_data1,
                'a1_track_data2' => $a1_track_data2,
                'a1_tax_exemption_level' => $a1_tax_exemption_level,
                'a1_cn_alt_msg_template_no' => $a1_cn_alt_msg_template_no,
                'a2_alt_start_date' => $a2_alt_start_date,
                'a2_client_acct_id' => $a2_client_acct_id,
                'a2_userid' => $a2_userid,
                'a2_status_cd' => $a2_status_cd,
                'a2_master_plan_no' => $a2_master_plan_no,
                'a2_master_plan_units' => $a2_master_plan_units,
                'a2_supp_plans' => $a2_supp_plans,
                'a2_supp_plan_units' => $a2_supp_plan_units,
                'a2_notify_method' => $a2_notify_method,
                'a2_promo_cd' => $a2_promo_cd,
                'a2_password' => $a2_password,
                'a2_secret_question' => $a2_secret_question,
                'a2_secret_question_answer' => $a2_secret_question_answer,
                'a2_first_name' => $a2_first_name,
                'a2_mi' => $a2_mi,
                'a2_last_name' => $a2_last_name,
                'a2_company_name' => $a2_company_name,
                'a2_address1' => $a2_address1,
                'a2_address2' => $a2_address2,
                'a2_city' => $a2_city,
                'a2_locality' => $a2_locality,
                'a2_state_prov' => $a2_state_prov,
                'a2_country' => $a2_country,
                'a2_postal_cd' => $a2_postal_cd,
                'a2_phone' => $a2_phone,
                'a2_phone_ext' => $a2_phone_ext,
                'a2_cell_phone' => $a2_cell_phone,
                'a2_work_phone' => $a2_work_phone,
                'a2_work_phone_ext' => $a2_work_phone_ext,
                'a2_email' => $a2_email,
                'a2_birthdate' => $a2_birthdate,
                'a2_bill_first_name' => $a2_bill_first_name,
                'a2_bill_mi' => $a2_bill_mi,
                'a2_bill_last_name' => $a2_bill_last_name,
                'a2_bill_company_name' => $a2_bill_company_name,
                'a2_bill_address1' => $a2_bill_address1,
                'a2_bill_address2' => $a2_bill_address2,
                'a2_bill_city' => $a2_bill_city,
                'a2_bill_locality' => $a2_bill_locality,
                'a2_bill_state_prov' => $a2_bill_state_prov,
                'a2_bill_country' => $a2_bill_country,
                'a2_bill_postal_cd' => $a2_bill_postal_cd,
                'a2_bill_phone' => $a2_bill_phone,
                'a2_bill_phone_ext' => $a2_bill_phone_ext,
                'a2_bill_cell_phone' => $a2_bill_cell_phone,
                'a2_bill_work_phone' => $a2_bill_work_phone,
                'a2_bill_work_phone_ext' => $a2_bill_work_phone_ext,
                'a2_bill_email' => $a2_bill_email,
                'a2_pay_method' => $a2_pay_method,
                'a2_cc_number' => $a2_cc_number,
                'a2_cc_expire_mm' => $a2_cc_expire_mm,
                'a2_cc_expire_yyyy' => $a2_cc_expire_yyyy,
                'a2_bank_acct_no' => $a2_bank_acct_no,
                'a2_bank_routing_no' => $a2_bank_routing_no,
                'a2_resp_level_cd' => $a2_resp_level_cd,
                'a2_functional_acct_groups' => $a2_functional_acct_groups,
                'a2_collections_acct_groups' => $a2_collections_acct_groups,
                'a2_supp_field_names' => $a2_supp_field_names,
                'a2_supp_field_values' => $a2_supp_field_values,
                'a2_test_acct_ind' => $a2_test_acct_ind,
                'a2_status_until_alt_start' => $a2_status_until_alt_start,
                'a2_balance_forward' => $a2_balance_forward,
                'a2_alt_bill_day' => $a2_alt_bill_day,
                'a2_do_full_invoicing' => $a2_do_full_invoicing,
                'a2_do_prorated_invoicing' => $a2_do_prorated_invoicing,
                'a2_master_plan_alt_rate_sched_no' => $a2_master_plan_alt_rate_sched_no,
                'a2_supp_plan_alt_rate_sched_no' => $a2_supp_plan_alt_rate_sched_no,
                'a2_currency_cd' => $a2_currency_cd,
                'a2_cvv' => $a2_cvv,
                'a2_taxpayer_id' => $a2_taxpayer_id,
                'a2_bill_agreement_id' => $a2_bill_agreement_id,
                'a2_retroactive_start_date' => $a2_retroactive_start_date,
                'a2_coupon_codes' => $a2_coupon_codes,
                'a2_new_acct_custom_rates' => $a2_new_acct_custom_rates,
                'a2_alt_msg_template_no' => $a2_alt_msg_template_no,
                'a2_seq_func_group_no' => $a2_seq_func_group_no,
                'a2_new_acct_plan_contracts' => $a2_new_acct_plan_contracts,
                'a2_address3' => $a2_address3,
                'a2_bill_address3' => $a2_bill_address3,
                'a2_usage_accumulation_config' => $a2_usage_accumulation_config,
                'a2_enable_usage_pooling_plan_no' => $a2_enable_usage_pooling_plan_no,
                'a2_client_func_acct_group_ids' => $a2_client_func_acct_group_ids,
                'a2_client_coll_acct_group_ids' => $a2_client_coll_acct_group_ids,
                'a2_track_data1' => $a2_track_data1,
                'a2_track_data2' => $a2_track_data2,
                'a2_tax_exemption_level' => $a2_tax_exemption_level,
                'a2_cn_alt_msg_template_no' => $a2_cn_alt_msg_template_no,
                'a3_alt_start_date' => $a3_alt_start_date,
                'a3_client_acct_id' => $a3_client_acct_id,
                'a3_userid' => $a3_userid,
                'a3_status_cd' => $a3_status_cd,
                'a3_master_plan_no' => $a3_master_plan_no,
                'a3_master_plan_units' => $a3_master_plan_units,
                'a3_supp_plans' => $a3_supp_plans,
                'a3_supp_plan_units' => $a3_supp_plan_units,
                'a3_notify_method' => $a3_notify_method,
                'a3_promo_cd' => $a3_promo_cd,
                'a3_password' => $a3_password,
                'a3_secret_question' => $a3_secret_question,
                'a3_secret_question_answer' => $a3_secret_question_answer,
                'a3_first_name' => $a3_first_name,
                'a3_mi' => $a3_mi,
                'a3_last_name' => $a3_last_name,
                'a3_company_name' => $a3_company_name,
                'a3_address1' => $a3_address1,
                'a3_address2' => $a3_address2,
                'a3_city' => $a3_city,
                'a3_locality' => $a3_locality,
                'a3_state_prov' => $a3_state_prov,
                'a3_country' => $a3_country,
                'a3_postal_cd' => $a3_postal_cd,
                'a3_phone' => $a3_phone,
                'a3_phone_ext' => $a3_phone_ext,
                'a3_cell_phone' => $a3_cell_phone,
                'a3_work_phone' => $a3_work_phone,
                'a3_work_phone_ext' => $a3_work_phone_ext,
                'a3_email' => $a3_email,
                'a3_birthdate' => $a3_birthdate,
                'a3_bill_first_name' => $a3_bill_first_name,
                'a3_bill_mi' => $a3_bill_mi,
                'a3_bill_last_name' => $a3_bill_last_name,
                'a3_bill_company_name' => $a3_bill_company_name,
                'a3_bill_address1' => $a3_bill_address1,
                'a3_bill_address2' => $a3_bill_address2,
                'a3_bill_city' => $a3_bill_city,
                'a3_bill_locality' => $a3_bill_locality,
                'a3_bill_state_prov' => $a3_bill_state_prov,
                'a3_bill_country' => $a3_bill_country,
                'a3_bill_postal_cd' => $a3_bill_postal_cd,
                'a3_bill_phone' => $a3_bill_phone,
                'a3_bill_phone_ext' => $a3_bill_phone_ext,
                'a3_bill_cell_phone' => $a3_bill_cell_phone,
                'a3_bill_work_phone' => $a3_bill_work_phone,
                'a3_bill_work_phone_ext' => $a3_bill_work_phone_ext,
                'a3_bill_email' => $a3_bill_email,
                'a3_pay_method' => $a3_pay_method,
                'a3_cc_number' => $a3_cc_number,
                'a3_cc_expire_mm' => $a3_cc_expire_mm,
                'a3_cc_expire_yyyy' => $a3_cc_expire_yyyy,
                'a3_bank_acct_no' => $a3_bank_acct_no,
                'a3_bank_routing_no' => $a3_bank_routing_no,
                'a3_resp_level_cd' => $a3_resp_level_cd,
                'a3_functional_acct_groups' => $a3_functional_acct_groups,
                'a3_collections_acct_groups' => $a3_collections_acct_groups,
                'a3_supp_field_names' => $a3_supp_field_names,
                'a3_supp_field_values' => $a3_supp_field_values,
                'a3_test_acct_ind' => $a3_test_acct_ind,
                'a3_status_until_alt_start' => $a3_status_until_alt_start,
                'a3_balance_forward' => $a3_balance_forward,
                'a3_alt_bill_day' => $a3_alt_bill_day,
                'a3_do_full_invoicing' => $a3_do_full_invoicing,
                'a3_do_prorated_invoicing' => $a3_do_prorated_invoicing,
                'a3_master_plan_alt_rate_sched_no' => $a3_master_plan_alt_rate_sched_no,
                'a3_supp_plan_alt_rate_sched_no' => $a3_supp_plan_alt_rate_sched_no,
                'a3_currency_cd' => $a3_currency_cd,
                'a3_cvv' => $a3_cvv,
                'a3_taxpayer_id' => $a3_taxpayer_id,
                'a3_bill_agreement_id' => $a3_bill_agreement_id,
                'a3_retroactive_start_date' => $a3_retroactive_start_date,
                'a3_coupon_codes' => $a3_coupon_codes,
                'a3_new_acct_custom_rates' => $a3_new_acct_custom_rates,
                'a3_alt_msg_template_no' => $a3_alt_msg_template_no,
                'a3_seq_func_group_no' => $a3_seq_func_group_no,
                'a3_new_acct_plan_contracts' => $a3_new_acct_plan_contracts,
                'a3_address3' => $a3_address3,
                'a3_bill_address3' => $a3_bill_address3,
                'a3_usage_accumulation_config' => $a3_usage_accumulation_config,
                'a3_enable_usage_pooling_plan_no' => $a3_enable_usage_pooling_plan_no,
                'a3_client_func_acct_group_ids' => $a3_client_func_acct_group_ids,
                'a3_client_coll_acct_group_ids' => $a3_client_coll_acct_group_ids,
                'a3_track_data1' => $a3_track_data1,
                'a3_track_data2' => $a3_track_data2,
                'a3_tax_exemption_level' => $a3_tax_exemption_level,
                'a3_cn_alt_msg_template_no' => $a3_cn_alt_msg_template_no,
                'a4_alt_start_date' => $a4_alt_start_date,
                'a4_client_acct_id' => $a4_client_acct_id,
                'a4_userid' => $a4_userid,
                'a4_status_cd' => $a4_status_cd,
                'a4_master_plan_no' => $a4_master_plan_no,
                'a4_master_plan_units' => $a4_master_plan_units,
                'a4_supp_plans' => $a4_supp_plans,
                'a4_supp_plan_units' => $a4_supp_plan_units,
                'a4_notify_method' => $a4_notify_method,
                'a4_promo_cd' => $a4_promo_cd,
                'a4_password' => $a4_password,
                'a4_secret_question' => $a4_secret_question,
                'a4_secret_question_answer' => $a4_secret_question_answer,
                'a4_first_name' => $a4_first_name,
                'a4_mi' => $a4_mi,
                'a4_last_name' => $a4_last_name,
                'a4_company_name' => $a4_company_name,
                'a4_address1' => $a4_address1,
                'a4_address2' => $a4_address2,
                'a4_city' => $a4_city,
                'a4_locality' => $a4_locality,
                'a4_state_prov' => $a4_state_prov,
                'a4_country' => $a4_country,
                'a4_postal_cd' => $a4_postal_cd,
                'a4_phone' => $a4_phone,
                'a4_phone_ext' => $a4_phone_ext,
                'a4_cell_phone' => $a4_cell_phone,
                'a4_work_phone' => $a4_work_phone,
                'a4_work_phone_ext' => $a4_work_phone_ext,
                'a4_email' => $a4_email,
                'a4_birthdate' => $a4_birthdate,
                'a4_bill_first_name' => $a4_bill_first_name,
                'a4_bill_mi' => $a4_bill_mi,
                'a4_bill_last_name' => $a4_bill_last_name,
                'a4_bill_company_name' => $a4_bill_company_name,
                'a4_bill_address1' => $a4_bill_address1,
                'a4_bill_address2' => $a4_bill_address2,
                'a4_bill_city' => $a4_bill_city,
                'a4_bill_locality' => $a4_bill_locality,
                'a4_bill_state_prov' => $a4_bill_state_prov,
                'a4_bill_country' => $a4_bill_country,
                'a4_bill_postal_cd' => $a4_bill_postal_cd,
                'a4_bill_phone' => $a4_bill_phone,
                'a4_bill_phone_ext' => $a4_bill_phone_ext,
                'a4_bill_cell_phone' => $a4_bill_cell_phone,
                'a4_bill_work_phone' => $a4_bill_work_phone,
                'a4_bill_work_phone_ext' => $a4_bill_work_phone_ext,
                'a4_bill_email' => $a4_bill_email,
                'a4_pay_method' => $a4_pay_method,
                'a4_cc_number' => $a4_cc_number,
                'a4_cc_expire_mm' => $a4_cc_expire_mm,
                'a4_cc_expire_yyyy' => $a4_cc_expire_yyyy,
                'a4_bank_acct_no' => $a4_bank_acct_no,
                'a4_bank_routing_no' => $a4_bank_routing_no,
                'a4_resp_level_cd' => $a4_resp_level_cd,
                'a4_functional_acct_groups' => $a4_functional_acct_groups,
                'a4_collections_acct_groups' => $a4_collections_acct_groups,
                'a4_supp_field_names' => $a4_supp_field_names,
                'a4_supp_field_values' => $a4_supp_field_values,
                'a4_test_acct_ind' => $a4_test_acct_ind,
                'a4_status_until_alt_start' => $a4_status_until_alt_start,
                'a4_balance_forward' => $a4_balance_forward,
                'a4_alt_bill_day' => $a4_alt_bill_day,
                'a4_do_full_invoicing' => $a4_do_full_invoicing,
                'a4_do_prorated_invoicing' => $a4_do_prorated_invoicing,
                'a4_master_plan_alt_rate_sched_no' => $a4_master_plan_alt_rate_sched_no,
                'a4_supp_plan_alt_rate_sched_no' => $a4_supp_plan_alt_rate_sched_no,
                'a4_currency_cd' => $a4_currency_cd,
                'a4_cvv' => $a4_cvv,
                'a4_taxpayer_id' => $a4_taxpayer_id,
                'a4_bill_agreement_id' => $a4_bill_agreement_id,
                'a4_retroactive_start_date' => $a4_retroactive_start_date,
                'a4_coupon_codes' => $a4_coupon_codes,
                'a4_new_acct_custom_rates' => $a4_new_acct_custom_rates,
                'a4_alt_msg_template_no' => $a4_alt_msg_template_no,
                'a4_seq_func_group_no' => $a4_seq_func_group_no,
                'a4_new_acct_plan_contracts' => $a4_new_acct_plan_contracts,
                'a4_address3' => $a4_address3,
                'a4_bill_address3' => $a4_bill_address3,
                'a4_usage_accumulation_config' => $a4_usage_accumulation_config,
                'a4_enable_usage_pooling_plan_no' => $a4_enable_usage_pooling_plan_no,
                'a4_client_func_acct_group_ids' => $a4_client_func_acct_group_ids,
                'a4_client_coll_acct_group_ids' => $a4_client_coll_acct_group_ids,
                'a4_track_data1' => $a4_track_data1,
                'a4_track_data2' => $a4_track_data2,
                'a4_tax_exemption_level' => $a4_tax_exemption_level,
                'a4_cn_alt_msg_template_no' => $a4_cn_alt_msg_template_no,
                'a5_alt_start_date' => $a5_alt_start_date,
                'a5_client_acct_id' => $a5_client_acct_id,
                'a5_userid' => $a5_userid,
                'a5_status_cd' => $a5_status_cd,
                'a5_master_plan_no' => $a5_master_plan_no,
                'a5_master_plan_units' => $a5_master_plan_units,
                'a5_supp_plans' => $a5_supp_plans,
                'a5_supp_plan_units' => $a5_supp_plan_units,
                'a5_notify_method' => $a5_notify_method,
                'a5_promo_cd' => $a5_promo_cd,
                'a5_password' => $a5_password,
                'a5_secret_question' => $a5_secret_question,
                'a5_secret_question_answer' => $a5_secret_question_answer,
                'a5_first_name' => $a5_first_name,
                'a5_mi' => $a5_mi,
                'a5_last_name' => $a5_last_name,
                'a5_company_name' => $a5_company_name,
                'a5_address1' => $a5_address1,
                'a5_address2' => $a5_address2,
                'a5_city' => $a5_city,
                'a5_locality' => $a5_locality,
                'a5_state_prov' => $a5_state_prov,
                'a5_country' => $a5_country,
                'a5_postal_cd' => $a5_postal_cd,
                'a5_phone' => $a5_phone,
                'a5_phone_ext' => $a5_phone_ext,
                'a5_cell_phone' => $a5_cell_phone,
                'a5_work_phone' => $a5_work_phone,
                'a5_work_phone_ext' => $a5_work_phone_ext,
                'a5_email' => $a5_email,
                'a5_birthdate' => $a5_birthdate,
                'a5_bill_first_name' => $a5_bill_first_name,
                'a5_bill_mi' => $a5_bill_mi,
                'a5_bill_last_name' => $a5_bill_last_name,
                'a5_bill_company_name' => $a5_bill_company_name,
                'a5_bill_address1' => $a5_bill_address1,
                'a5_bill_address2' => $a5_bill_address2,
                'a5_bill_city' => $a5_bill_city,
                'a5_bill_locality' => $a5_bill_locality,
                'a5_bill_state_prov' => $a5_bill_state_prov,
                'a5_bill_country' => $a5_bill_country,
                'a5_bill_postal_cd' => $a5_bill_postal_cd,
                'a5_bill_phone' => $a5_bill_phone,
                'a5_bill_phone_ext' => $a5_bill_phone_ext,
                'a5_bill_cell_phone' => $a5_bill_cell_phone,
                'a5_bill_work_phone' => $a5_bill_work_phone,
                'a5_bill_work_phone_ext' => $a5_bill_work_phone_ext,
                'a5_bill_email' => $a5_bill_email,
                'a5_pay_method' => $a5_pay_method,
                'a5_cc_number' => $a5_cc_number,
                'a5_cc_expire_mm' => $a5_cc_expire_mm,
                'a5_cc_expire_yyyy' => $a5_cc_expire_yyyy,
                'a5_bank_acct_no' => $a5_bank_acct_no,
                'a5_bank_routing_no' => $a5_bank_routing_no,
                'a5_resp_level_cd' => $a5_resp_level_cd,
                'a5_functional_acct_groups' => $a5_functional_acct_groups,
                'a5_collections_acct_groups' => $a5_collections_acct_groups,
                'a5_supp_field_names' => $a5_supp_field_names,
                'a5_supp_field_values' => $a5_supp_field_values,
                'a5_test_acct_ind' => $a5_test_acct_ind,
                'a5_status_until_alt_start' => $a5_status_until_alt_start,
                'a5_balance_forward' => $a5_balance_forward,
                'a5_alt_bill_day' => $a5_alt_bill_day,
                'a5_do_full_invoicing' => $a5_do_full_invoicing,
                'a5_do_prorated_invoicing' => $a5_do_prorated_invoicing,
                'a5_master_plan_alt_rate_sched_no' => $a5_master_plan_alt_rate_sched_no,
                'a5_supp_plan_alt_rate_sched_no' => $a5_supp_plan_alt_rate_sched_no,
                'a5_currency_cd' => $a5_currency_cd,
                'a5_cvv' => $a5_cvv,
                'a5_taxpayer_id' => $a5_taxpayer_id,
                'a5_bill_agreement_id' => $a5_bill_agreement_id,
                'a5_retroactive_start_date' => $a5_retroactive_start_date,
                'a5_coupon_codes' => $a5_coupon_codes,
                'a5_new_acct_custom_rates' => $a5_new_acct_custom_rates,
                'a5_alt_msg_template_no' => $a5_alt_msg_template_no,
                'a5_seq_func_group_no' => $a5_seq_func_group_no,
                'a5_new_acct_plan_contracts' => $a5_new_acct_plan_contracts,
                'a5_address3' => $a5_address3,
                'a5_bill_address3' => $a5_bill_address3,
                'a5_usage_accumulation_config' => $a5_usage_accumulation_config,
                'a5_enable_usage_pooling_plan_no' => $a5_enable_usage_pooling_plan_no,
                'a5_client_func_acct_group_ids' => $a5_client_func_acct_group_ids,
                'a5_client_coll_acct_group_ids' => $a5_client_coll_acct_group_ids,
                'a5_track_data1' => $a5_track_data1,
                'a5_track_data2' => $a5_track_data2,
                'a5_tax_exemption_level' => $a5_tax_exemption_level,
                'a5_cn_alt_msg_template_no' => $a5_cn_alt_msg_template_no
        ));
    }

    /**
     * Assigns a coupon code to a specified account. The appropriate service credits will then be applied to the account based on the credit template associated with the coupon code.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $coupon_code The code of the coupon to which to apply the discount.  If code is not valid for any reason, an appropriate error code is returned and the entire transaction (including the supp plan assignment and any possible invoice creation) is rolled back.
     * @return mixed[] string user_success_msg The message to display to account the holder upon successful application of the coupon code they&#039;ve provided.<br>int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function apply_coupon_to_acct($acct_no = null, $coupon_code = null)
    {
        return $this->__ws_call('apply_coupon_to_acct', Array(
                'acct_no' => $acct_no,
                'coupon_code' => $coupon_code
        ));
    }

    /**
     * Generates an invoice for a specified account.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param double $amount The amount of service credit to create on the account.
     * @param int $reason_code The reason a given credt was/is to be applied to the account.
     * @param string $comments Free form optional text up to 300 characters. For display within AdminTools when viewing all credit records on an account.
     * @param int $eligible_plan_no If used must be used in conjunction with field &quot;eligible_plan_no&quot;. If the credit(s) to be created are to be applied as offsets to ANY charge incurred by the account holder, leave both of these fields empty. If the credit(s) to be created are to be applied as offsets to a specific type of charge, then that specific plan_no and service_no combination referencing that type of charge are to be supplied in these two fields.
     * @param int $eligible_service_no If used must be used in conjunction with field &quot;eligible_service_no&quot;. If the credit(s) to be created are to be applied as offsets to ANY charge incurred by the account holder, leave both of these fields empty. If the credit(s) to be created are to be applied as offsets to a specific type of charge, then that specific plan_no and service_no combination referencing that type of charge are to be supplied in these two fields.
     * @param int $alt_service_no_to_apply Under default conditions, when a service credit on an account is consumed (resulting in negative line items attached to account invoices) the service_no value used by Aria on those invoice line items is the &quot;universal&quot; Aria service_no for service credits, specifically &quot;0&quot;. This results in financial reports which group charges by service_no putting all consumed service credits into the same service_no 0 &quot;bucket&quot;. If the client wishes for this credit, once consumed, to go into any other service_no &quot;bucket&quot;, that service_no must be supplied in this field. Any Aria-standard or custom-to-client service number may be used. A common (but not required) use of this field is in conjunction with the eligible_plan_no/eligible_service_no fields described above, e.g.: Client offers plan_no XXXX with a recurring fee of service_no YYYY. A credit is attached to an account (which has plan XXXX) specifying these two values in the &quot;eligible_&quot; fields described above, which means that the credit will be consumed as an offset against and plan XXXX/service YYYY charges incurred by the account holder. Additionally, the client provides value YYYY in this field, which means that when the service credit is consumed the negative line item it creates on the account holder&#039;s invoice will use the same service no as the charge it offsets. If the amount of the recurring fee for plan XXXX/service YYYY is $10 (resulting in a positive line item of $10 with service YYYY on their invoice), and if the amount of the credit line item is $5 (resulting in a negative line item of -$2 with service YYYY on their invoice) the net result in any financial report that groups by service_no will be $8 (as opposed to $10 in service YYYY and -$2 in service 0).
     * @param int $frequency_no Number of times the service credit should be applied to the account
     * @param int $frequency_interval_months Number of months between application of service credit to the account
     * @param string $initial_credit_date Date on which the recurring service credit should start to be applied
     * @param double $percent_amount The percent amount of the credit to be created for the account. For example if the account is to to receive a10% discount.
     * @param int $percent_eval_plan_no The plan number against which to apply the percent discount.
     * @param int $percent_eval_service_no The service to which the percent discount is to be applied.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function create_advanced_service_credit($acct_no = null, $amount = null, $reason_code = null, $comments = null, $eligible_plan_no = null, $eligible_service_no = null, $alt_service_no_to_apply = null, $frequency_no = null, $frequency_interval_months = null, $initial_credit_date = null, $percent_amount = null, $percent_eval_plan_no = null, $percent_eval_service_no = null)
    {
        return $this->__ws_call('create_advanced_service_credit', Array(
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
                'percent_eval_service_no' => $percent_eval_service_no
        ));
    }

    /**
     * Returns the account number associated with a specified user ID.
     * @param string $user_id Client (or user)-assigned unique account identifier.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     */
    public function get_acct_no_from_user_id($user_id = null)
    {
        return $this->__ws_call('get_acct_no_from_user_id', Array(
                'user_id' => $user_id
        ));
    }

    /**
     * Returns the user ID associated with a specified account number.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string user_id The user ID of the account requested
     */
    public function get_user_id_from_acct_no($acct_no = null)
    {
        return $this->__ws_call('get_user_id_from_acct_no', Array(
                'acct_no' => $acct_no
        ));
    }

    /**
     * Returns any single-plan contract currently associated with a specified account and plan.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $plan_no Aria assigned unique plan identifier
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array acct_plan_contract 
     */
    public function get_acct_plan_contract($acct_no = null, $plan_no = null)
    {
        return $this->__ws_call('get_acct_plan_contract', Array(
                'acct_no' => $acct_no,
                'plan_no' => $plan_no
        ));
    }

    /**
     * Creates a single-plan contract for a specified account holder and plan. The plan can be a master plan or a supplemental plan.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $plan_no Aria assigned unique plan identifier
     * @param int $type_no The type of contract end action to be enforced by this contract.
     * @param double $alt_recur_fee The alternate recurring fee.
     * @param int $length_months The number of months (for example in reference to a contract).
     * @param double $cancel_fee The cancellation fee to assess against the account based on early cancellation rules.
     * @param string $create_comments Comments about the billing contact during the creation of the billing contact record.
     * @param string $start_date Specifies start date. The date is in the format yyyy-mm-dd
     * @param string $do_auto_discard Specifies whether or not, upon creation of this contract, whether or not the system should automatically discard any existing contracts in-effect that cover the same plan or set of plans.
     * @param string $end_date Allows the caller to set a specific end date when creating or modifying plan contracts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int contract_no This is the contract number for the account.
     */
    public function create_acct_plan_contract($acct_no = null, $plan_no = null, $type_no = null, $alt_recur_fee = null, $length_months = null, $cancel_fee = null, $create_comments = null, $start_date = null, $do_auto_discard = null, $end_date = null)
    {
        return $this->__ws_call('create_acct_plan_contract', Array(
                'acct_no' => $acct_no,
                'plan_no' => $plan_no,
                'type_no' => $type_no,
                'alt_recur_fee' => $alt_recur_fee,
                'length_months' => $length_months,
                'cancel_fee' => $cancel_fee,
                'create_comments' => $create_comments,
                'start_date' => $start_date,
                'do_auto_discard' => $do_auto_discard,
                'end_date' => $end_date
        ));
    }

    /**
     * Modifies a particular single-plan contract assigned to a specified account.
     * @param int $contract_no This is the contract number for the account.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $type_no The type of contract end action to be enforced by this contract.
     * @param double $alt_recur_fee The alternate recurring fee.
     * @param int $length_months The number of months (for example in reference to a contract).
     * @param double $cancel_fee The cancellation fee to assess against the account based on early cancellation rules.
     * @param string $start_date Specifies contract start date. The date is in the format yyyy-mm-dd
     * @param string $update_comments Free-form text comments regarding the modification of this contract.
     * @param string $end_date Allows the caller to set a specific end date when creating or modifying plan contracts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function modify_acct_plan_contract($contract_no, $acct_no = null, $type_no = null, $alt_recur_fee = null, $length_months = null, $cancel_fee = null, $start_date = null, $update_comments = null, $end_date = null)
    {
        return $this->__ws_call('modify_acct_plan_contract', Array(
                'contract_no' => $contract_no,
                'acct_no' => $acct_no,
                'type_no' => $type_no,
                'alt_recur_fee' => $alt_recur_fee,
                'length_months' => $length_months,
                'cancel_fee' => $cancel_fee,
                'start_date' => $start_date,
                'update_comments' => $update_comments,
                'end_date' => $end_date
        ));
    }

    /**
     * Cancels a single-plan contract assigned to a specified account holder.
     * @param int $contract_no This is the contract number for the account.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $update_comments Free-form text comments regarding the contract cancellation action.
     * @param int $close_status Contract Closure Status (per the allowable values legend)
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function cancel_acct_plan_contract($contract_no, $acct_no = null, $update_comments = null, $close_status = null)
    {
        return $this->__ws_call('cancel_acct_plan_contract', Array(
                'contract_no' => $contract_no,
                'acct_no' => $acct_no,
                'update_comments' => $update_comments,
                'close_status' => $close_status
        ));
    }

    /**
     * Returns the usage records associated with a specified account for a particular date range.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $specified_usage_type_no The Aria-assigned usage type number to use when searching for usage history records.
     * @param string $date_range_start The start-date of the given date range.
     * @param string $date_range_end The end-date of the given date range
     * @param string $specified_usage_type_code Optional client-defined usage type code
     * @param array $usage_qualifier_1 
     * @param array $usage_qualifier_2 
     * @param array $usage_qualifier_3 
     * @param array $usage_qualifier_4 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array usage_history_records A multidimensional array of usage history records attached to the account (and optional specified usage type) for given date range
     */
    public function get_usage_history($acct_no = null, $specified_usage_type_no = null, $date_range_start = null, $date_range_end = null, $specified_usage_type_code = null, $usage_qualifier_1 = null, $usage_qualifier_2 = null, $usage_qualifier_3 = null, $usage_qualifier_4 = null)
    {
        return $this->__ws_call('get_usage_history', Array(
                'acct_no' => $acct_no,
                'specified_usage_type_no' => $specified_usage_type_no,
                'date_range_start' => $date_range_start,
                'date_range_end' => $date_range_end,
                'specified_usage_type_code' => $specified_usage_type_code,
                'usage_qualifier_1' => $usage_qualifier_1,
                'usage_qualifier_2' => $usage_qualifier_2,
                'usage_qualifier_3' => $usage_qualifier_3,
                'usage_qualifier_4' => $usage_qualifier_4
        ));
    }

    /**
     * Returns the body of a particular email message sent to a specified account holder.
     * @param int $message_id Unique identifier of the message sent during provisioning to the account
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $do_encoding True indicates to acquire the message size after doing MIME encoding, False acquires message size without MIME encoding.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string message_body Content of the message sent to the account holder.<br>string mime_type The mime type of the message, e.g.&quot;text/plain&quot; or &quot;text/html&quot;.
     */
    public function get_acct_message($message_id, $acct_no = null, $do_encoding = null)
    {
        return $this->__ws_call('get_acct_message', Array(
                'message_id' => $message_id,
                'acct_no' => $acct_no,
                'do_encoding' => $do_encoding
        ));
    }

    /**
     * Returns the size in bytes of the body of a particular email message sent to a specified account holder.
     * @param int $message_id Unique identifier of the message sent during provisioning to the account
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $do_encoding True indicates to acquire the message size after doing MIME encoding, False acquires message size without MIME encoding.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int num_chars The number of characters of the message_id requested.
     */
    public function get_acct_message_size($message_id, $acct_no = null, $do_encoding = null)
    {
        return $this->__ws_call('get_acct_message_size', Array(
                'message_id' => $message_id,
                'acct_no' => $acct_no,
                'do_encoding' => $do_encoding
        ));
    }

    /**
     * Changes the master plan assigned to a specified account holder. This call also has the ability to cancel the supplemental plans associated with the account holder&#039;s previous master plan.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $master_plan_no The Master Subscription plan number.
     * @param int $alt_rate_schedule_no Alternative Rate Schedule Number. The alt_rate_schedule_no is the unique identifier for an alternative rate schedule that can be assigned to the account holder in place of the default rate schedule. This is often done by CSR&#039;s to provide special compensation or discounts as incentives to account holders.
     * @param int $num_plan_units The factor by which all future recurring fees for this plan will be multiplied on future invoices for this account. EXAMPLE: An account wishes to have the supplemental plan titled Seats of XYZ Application assigned to them, with a monthly flat cost of $10.00 per seat. To assign 5 seats of this plan to the account, resulting in a monthly charge of $50.00 to the account, a value of 5 should be passed in this field.
     * @param int $assignment_directive The scope rule to be applied to this assignment/de-assignment request, governing both the date upon which the assignment should take place (immediately or on the account&#039;s anniversary date) and the proration rule that should be applied (per client&#039;s default rules for proration on plan assignment v. forcing proration on or off for this request only). Default behavior is to assign plan to account on the account&#039;s anniversary date, resulting in no proration effect.
     * @param string $do_write Boolean indicator informing Aria whether or not to actually perform the requested operation. If &#039;false&#039; is passed in this field Aria will, if applicable, calculate any potential effects stemming from this call such as pro-ration, plan assignments, etc. and return all relevant data  without actually performing the requested operation or making any changes to the account. This is useful to interfaces that wish to present the user with a &#039;confirmation page&#039; informing of the would-be effects of the requested operation prior to actually performing it.  Do_write defaults to &#039;true&#039;
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions
     * @param string $force_currency_change Force currency change during update. Generally  this is necessary when the update is taking  place to accommodate for an account holder  moving from one area to another where the  local currency is different.
     * @param string $auto_cancel_supp_plans This boolean asserts that supplemental plans are automatically cancelled if necessary.
     * @param int $offset_months Number of months to add to the prorated period.
     * @param string $alt_proration_start_date This argument specifies and alternate proration start date.
     * @param string $alt_client_acct_group_id The one-time collections account group  to use for this particular call.  The default on the account is not changed.
     * @param array $new_acct_custom_rates 
     * @param string $effective_date If the assignment directive is for future date assignment, this is the effective date for that assignment
     * @param int $offset_interval If assigning a change on an anniversary day, the number of billing periods by which to delay that change
     * @param string $invoice_unbilled_usage Specifies the unbilled usage to be invoiced or not.
     * @param string $coupon_code A coupon code to apply to this account
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>double proration_result_amount The currency amount of any resulting proration action performed as a result of the requested plan change. For plan assignments with an assignment directive of &#039;1&#039; (perform on anniversary date), or &#039;2&#039; (honor client default proration action) when the default configuration is to not do proration, or &#039;3&#039; (force no proration), the value returned in this field will always be &#039;0&#039;. When proration is performed the value returned in this field will either be a positive currency value (indicating a resulting charge to the account) or a negative currency value (indicating a credit to the account). If the value passed in field do_write is false then any positive or negative value returned in this field is notational only, demonstrating what proration effect would be applied to the account if the requested plan assignment/de-assignment were to be actually performed.<br>int collection_error_code If a collection is attempted, returns the error code associated with the collection.<br>string collection_error_msg The error message associated with collection_error_code.<br>int statement_error_code The error code if statement generation fails.<br>string statement_error_msg The text message associated with &#039;statement_error_code&#039;<br>string proc_cvv_response The processor return code from CVV validation (deprecated)<br>string proc_avs_response Processor return code from address validation<br>string proc_cavv_response The processors return code for security validation (includes cvv)<br>string proc_status_code The processor status code<br>string proc_status_text The processors status description<br>string proc_payment_id The processor payment id<br>string proc_auth_code Authorization code provided by the issuing bank<br>string proc_merch_comments Additional information passed to payment processor<br>int invoice_no The unique identifer of a given invoice.<br>array cancelled_supp_plans An array containing the supplemental plans cancelled.<br>double expectd_activation_fee The activation fee the account holder can expect based on the activation fees of the plans on this invoice<br>double expectd_mthly_recurring_cost Regardless of the billing interval on the account, the monthly recurring cost of this change<br>double expectd_annu_recurring_cost <br>array upd_acct_invoice_line_items <br>double total_charges_before_tax Total amount to be charged to the account before taxes have been calculated.<br>double total_tax_charges Total taxes as calculated for the amount of the transaction.<br>double total_charges_after_tax Total amount to be charged to the account after taxes have been calculated.<br>double total_credit The total amount of the credit to be applied to the account<br>double total_tax_credit The tax amount of the credit to be applies<br>double total_credit_before_tax The credit to be applied before tax is taken into account<br>double total The grand total of this invoice<br>array third_party_errors Errors from third-party systems like taxation engines are returned here, whereas the Aria-generated error codes are returned in the error_code and error_msg fields at the root level of the API return.
     */
    public function update_master_plan($acct_no = null, $master_plan_no = null, $alt_rate_schedule_no = null, $num_plan_units = null, $assignment_directive = null, $do_write = null, $client_receipt_id = null, $force_currency_change = null, $auto_cancel_supp_plans = null, $offset_months = null, $alt_proration_start_date = null, $alt_client_acct_group_id = null, $new_acct_custom_rates = null, $effective_date = null, $offset_interval = null, $invoice_unbilled_usage = null, $coupon_code = null)
    {
        return $this->__ws_call('update_master_plan', Array(
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
                'alt_proration_start_date' => $alt_proration_start_date,
                'alt_client_acct_group_id' => $alt_client_acct_group_id,
                'new_acct_custom_rates' => $new_acct_custom_rates,
                'effective_date' => $effective_date,
                'offset_interval' => $offset_interval,
                'invoice_unbilled_usage' => $invoice_unbilled_usage,
                'coupon_code' => $coupon_code
        ));
    }

    /**
     * 
     * @param  $do_collect 
     * @param  $change_status_after_coll 
     * @param  $reset_dates_after_status 
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $first_name Contact Fist name
     * @param string $last_name Contact Last name
     * @param string $middle_initial The Middle Initial of the contact.
     * @param string $company_name Company name of the contact
     * @param string $address1 First address line of the contact
     * @param string $address2 second address line of the contact
     * @param string $city City of the contact
     * @param string $locality Locality of the contact
     * @param string $state_prov State or Province of the contact
     * @param string $country Country of the contact
     * @param string $postal_cd Postal/Zip code for the contact address.
     * @param string $phone The phone number of the contact
     * @param string $phone_ext The extension for the contact phone
     * @param string $cell_phone The contact cell phone.
     * @param string $work_phone Work phone number of the contact.
     * @param string $work_phone_ext The extension for the contact work phone
     * @param string $email Email of the contact
     * @param string $birthdate Contact date of birth
     * @param string $bill_first_name First name of the billing contact
     * @param string $bill_last_name Last name of the billing contact
     * @param string $bill_middle_initial Middle Initial of the billing contact
     * @param string $bill_company_name Company name of the billing contact
     * @param string $bill_address1 First address line of the billing contact
     * @param string $bill_address2 second address line of the billing contact
     * @param string $bill_city City of the billing contact
     * @param string $bill_locality Locality of the billing contact
     * @param string $bill_state_prov State or Province of the billing contact
     * @param string $bill_country Country of the billing contact
     * @param string $bill_postal_cd This is the postal code for the billing contact address.
     * @param string $bill_phone Phone of the billing contact
     * @param string $bill_phone_ext This is the billing contacts extension for the bill_phone given.
     * @param string $bill_cell_phone Cell phone of the billing contact
     * @param string $bill_work_phone Work phone of the billing contact
     * @param string $bill_work_phone_ext This is the work phone extension for the billing contact work phone.
     * @param string $bill_email Email of the billing contact
     * @param int $pay_method This is the method_id corresponding to a payment method such as credit card, Electronic Check, Pre-Paid, Net Terms, etc.
     * @param string $cc_number Credit card number.
     * @param int $cc_expire_mm Expiration month for the credit card payment instrument.
     * @param int $cc_expire_yyyy Expiration year for the credit card payment instrument.
     * @param string $bank_routing_num The ABA routing number for the bank holding &#039;bank_acct_num&#039;
     * @param string $bank_acct_num The bank account number.
     * @param int $master_plan_no The Master Subscription plan number.
     * @param int $master_plan_alt_rate_sched_no The alternate rate schedule number for the master subscription plan being considered.
     * @param int $master_plan_units This is multiplier variiable for the recurring rate on the plan. Generally this value is 1, indicating the face value of the plan&#039;s recurring fee is used.
     * @param int $master_plan_assign_directive The scope rule to be applied to this assignment/de-assignment request, governing both the date upon which the assignment should take place (immediately or on the account&#039;s anniversary date) and the proration rule that should be applied (per client&#039;s default rules for proration on plan assignment v. forcing proration on or off for this request only). Default behavior is to assign plan to account on the account&#039;s anniversary date, resulting in no proration effect.
     * @param array $update_acct_supp_field Array of supplemental field values to be updated.
     * @param array $update_acct_func_group Array of functional groups to update.
     * @param array $update_acct_coll_group Array of account collection groups to update
     * @param int $status_cd This is the status of the object inquestion for the current API call.
     * @param int $notify_method If notification method is not provided, value will default to 1 (HTML email).
     * @param string $password Password for the given user
     * @param string $secret_question The users secret question recorded to recover a password.
     * @param string $secret_question_answer The response to a users &#039;secret_question&#039;
     * @param string $pin Persinal Identification number
     * @param int $test_acct_ind This argument indicates the account is a test account and is treated as such in the system.
     * @param int $resp_level_cd The responsibility level code. These are values 1 through 4 as described in the legend for this argument.
     * @param int $senior_acct_no The senior_acct_no is the unique account number for the parent account and is used in establishing parent-child billing relationships.
     * @param string $client_acct_id This is the client-assigned identifier for the account.
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions
     * @param string $alt_do_dunning If you are changing the account&#039;s status, AND the new status is part of the account&#039;s dunning plan, the account can go through the full dunning process which includes dunning fees, dunning notifications, and queuing the account for the next dunning step. If this value is NULL, the clients default setting will be honored. If true or false, this input will be honored instead of the clients default setting. If the status change is being queued for a future date, this value will be ignored and ONLY the clients default setting will be honored.
     * @param string $force_currency_change Force a currency change on update. This is generally necesary when an account moves from one country to another and the new country has a different monetary currency.
     * @param string $cvv Card Verification Value, used to help verify a transaction is being requested by the card holder since this value is physically printed on the credit card.
     * @param string $taxpayer_id Taxpayer Identification number.
     * @param string $bill_agreement_id The unique identified for the billing agreement assigned by Aria
     * @param string $auto_cancel_supp_plans When changing an account&#039;s master plan number, this value determines whether or not to automatically cancel all supplemental plans that are not mapped to the new master plan. A null value defaults to �false�.
     * @param int $offset_months Number of months to add to the prorated period.
     * @param string $alt_proration_start_date This argument specifies and alternate proration start date.
     * @param int $alt_msg_template_no Email template number assigned to this account.
     * @param int $seq_func_group_no Functional account group number specifically designated for statement sequence number assignment.
     * @param string $address3 The third line of the address
     * @param string $bill_address3 The third line of the billing address
     * @param array $usage_accumulation_config 
     * @param array $enable_usage_pooling_plan_no 
     * @param array $disable_usage_pooling_plan_no 
     * @param string $alt_client_acct_group_id The one-time collections account group  to use for this particular call.  The default on the account is not changed.
     * @param string $track_data1 The raw &quot;track 1&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param string $track_data2 The raw &quot;track 2&quot; data from a swiped credit card used in a card-present transaction to initiate this request
     * @param int $offset_interval If assigning a change on an anniversary day, the number of billing periods by which to delay that change
     * @param int $tax_exemption_level The tax exemption level of this account
     * @param int $cn_alt_msg_template_no The alternate email template number to use for this account
     * @param string $promo_cd This is the code provided the client  and used by the account holder during registration or when executing a transaction. A promotion generally provides access to a custom set of reduced-rate plans.
     * @param string $invoice_unbilled_usage Specifies the unbilled usage to be invoiced or not.
     * @param string $coupon_code A coupon code to apply to this account
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>double proration_result_amount The currency amount of any resulting proration action performed as a result of the requested plan change. For plan assignments with an assignment directive of &#039;1&#039; (perform on anniversary date), or &#039;2&#039; (honor client default proration action) when the default configuration is to not do proration, or &#039;3&#039; (force no proration), the value returned in this field will always be &#039;0&#039;. When proration is performed the value returned in this field will either be a positive currency value (indicating a resulting charge to the account) or a negative currency value (indicating a credit to the account). If the value passed in field do_write is false then any positive or negative value returned in this field is notational only, demonstrating what proration effect would be applied to the account if the requested plan assignment/de-assignment were to be actually performed.<br>int collection_error_code If a collection is attempted, returns the error code associated with the collection.<br>string collection_error_msg The error message associated with collection_error_code.<br>int parent_child_sync_error_code The result of the synchronization of the parent/child billing dates (if attempted).<br>string parent_child_sync_error_msg The corresponding text error message for the parent_child_sync_error_code value.<br>int master_plan_error_code Error code returned upon failure when attempting to update the master plan<br>string master_plan_error_msg Human-readable error message corresponding to master_plan_error_code<br>int master_plan_coll_error_code Error code for master plan collection errors.<br>string master_plan_coll_error_msg Human-readable error text corresponding to the master_plan_coll_error_code<br>int master_plan_stmt_error_code Error code returned upon failure to update the master plan statement<br>string master_plan_stmt_error_msg Human-readable error message corresponding to master_plan_stmt_error_code.<br>string proc_cvv_response The processor return code from CVV validation (deprecated)<br>string proc_avs_response Processor return code from address validation<br>string proc_cavv_response The processors return code for security validation (includes cvv)<br>string proc_status_code The processor status code<br>string proc_status_text The processors status description<br>string proc_payment_id The processor payment id<br>string proc_auth_code Authorization code provided by the issuing bank<br>string proc_merch_comments Additional information passed to payment processor<br>int invoice_no The unique identifer of a given invoice.<br>array cancelled_supp_plans <br>array third_party_errors Errors from third-party systems like taxation engines are returned here, whereas the Aria-generated error codes are returned in the error_code and error_msg fields at the root level of the API return.
     */
    public function update_acct_complete($do_collect, $change_status_after_coll, $reset_dates_after_status, $acct_no = null, $first_name = null, $last_name = null, $middle_initial = null, $company_name = null, $address1 = null, $address2 = null, $city = null, $locality = null, $state_prov = null, $country = null, $postal_cd = null, $phone = null, $phone_ext = null, $cell_phone = null, $work_phone = null, $work_phone_ext = null, $email = null, $birthdate = null, $bill_first_name = null, $bill_last_name = null, $bill_middle_initial = null, $bill_company_name = null, $bill_address1 = null, $bill_address2 = null, $bill_city = null, $bill_locality = null, $bill_state_prov = null, $bill_country = null, $bill_postal_cd = null, $bill_phone = null, $bill_phone_ext = null, $bill_cell_phone = null, $bill_work_phone = null, $bill_work_phone_ext = null, $bill_email = null, $pay_method = null, $cc_number = null, $cc_expire_mm = null, $cc_expire_yyyy = null, $bank_routing_num = null, $bank_acct_num = null, $master_plan_no = null, $master_plan_alt_rate_sched_no = null, $master_plan_units = null, $master_plan_assign_directive = null, $update_acct_supp_field = null, $update_acct_func_group = null, $update_acct_coll_group = null, $status_cd = null, $notify_method = null, $password = null, $secret_question = null, $secret_question_answer = null, $pin = null, $test_acct_ind = null, $resp_level_cd = null, $senior_acct_no = null, $client_acct_id = null, $client_receipt_id = null, $alt_do_dunning = null, $force_currency_change = null, $cvv = null, $taxpayer_id = null, $bill_agreement_id = null, $auto_cancel_supp_plans = null, $offset_months = null, $alt_proration_start_date = null, $alt_msg_template_no = null, $seq_func_group_no = null, $address3 = null, $bill_address3 = null, $usage_accumulation_config = null, $enable_usage_pooling_plan_no = null, $disable_usage_pooling_plan_no = null, $alt_client_acct_group_id = null, $track_data1 = null, $track_data2 = null, $offset_interval = null, $tax_exemption_level = null, $cn_alt_msg_template_no = null, $promo_cd = null, $invoice_unbilled_usage = null, $coupon_code = null)
    {
        return $this->__ws_call('update_acct_complete', Array(
                'do_collect' => $do_collect,
                'change_status_after_coll' => $change_status_after_coll,
                'reset_dates_after_status' => $reset_dates_after_status,
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
                'client_receipt_id' => $client_receipt_id,
                'alt_do_dunning' => $alt_do_dunning,
                'force_currency_change' => $force_currency_change,
                'cvv' => $cvv,
                'taxpayer_id' => $taxpayer_id,
                'bill_agreement_id' => $bill_agreement_id,
                'auto_cancel_supp_plans' => $auto_cancel_supp_plans,
                'offset_months' => $offset_months,
                'alt_proration_start_date' => $alt_proration_start_date,
                'alt_msg_template_no' => $alt_msg_template_no,
                'seq_func_group_no' => $seq_func_group_no,
                'address3' => $address3,
                'bill_address3' => $bill_address3,
                'usage_accumulation_config' => $usage_accumulation_config,
                'enable_usage_pooling_plan_no' => $enable_usage_pooling_plan_no,
                'disable_usage_pooling_plan_no' => $disable_usage_pooling_plan_no,
                'alt_client_acct_group_id' => $alt_client_acct_group_id,
                'track_data1' => $track_data1,
                'track_data2' => $track_data2,
                'offset_interval' => $offset_interval,
                'tax_exemption_level' => $tax_exemption_level,
                'cn_alt_msg_template_no' => $cn_alt_msg_template_no,
                'promo_cd' => $promo_cd,
                'invoice_unbilled_usage' => $invoice_unbilled_usage,
                'coupon_code' => $coupon_code
        ));
    }

    /**
     * Returns a list of all client receipt IDs associated with a specified account.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $start_date_range The start-date of the given date range.
     * @param string $end_date_range The end-date of the given date range
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array acct_receipt An array of account receipt records.
     */
    public function get_all_acct_receipt_ids($acct_no = null, $start_date_range = null, $end_date_range = null)
    {
        return $this->__ws_call('get_all_acct_receipt_ids', Array(
                'acct_no' => $acct_no,
                'start_date_range' => $start_date_range,
                'end_date_range' => $end_date_range
        ));
    }

    /**
     * send account holder email message using client&#039;s configured template for class &#039;Z&#039;
     * @param int $resource_threshold_level The value at which resources should be replenished.
     * @param int $resource_balance The remaining units left of the resource
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $resource_name The human-readable resource name (e.g.money, time, access, etc.)
     * @param string $resource_units_label The label for resource units (e.g. peices, tokens, credits, etc.)
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function send_arc_threshold_email($resource_threshold_level, $resource_balance, $acct_no = null, $resource_name = null, $resource_units_label = null)
    {
        return $this->__ws_call('send_arc_threshold_email', Array(
                'resource_threshold_level' => $resource_threshold_level,
                'resource_balance' => $resource_balance,
                'acct_no' => $acct_no,
                'resource_name' => $resource_name,
                'resource_units_label' => $resource_units_label
        ));
    }

    /**
     * Sets the tax exemption level for a specified account.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $exemption_level Exemption level code
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function set_acct_tax_exempt_status($acct_no = null, $exemption_level = null)
    {
        return $this->__ws_call('set_acct_tax_exempt_status', Array(
                'acct_no' => $acct_no,
                'exemption_level' => $exemption_level
        ));
    }

    /**
     * Returns an account&#039;s tax exemption level (none, federal, state, or both federal and state).
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int exemption_level Exemption level code<br>string exemption_level_desc Exemption level text description
     */
    public function get_acct_tax_exempt_status($acct_no = null)
    {
        return $this->__ws_call('get_acct_tax_exempt_status', Array(
                'acct_no' => $acct_no
        ));
    }

    /**
     * For accounts in the pending installation status, marks the installation as failed or successful, causing the account to be either terminated or activated accordingly.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $install_complete_ind Boolean indicating the account installation process is complete.
     * @param string $comments Additional explanitory text relating to this API call.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function close_acct_installation($acct_no = null, $install_complete_ind = null, $comments = null)
    {
        return $this->__ws_call('close_acct_installation', Array(
                'acct_no' => $acct_no,
                'install_complete_ind' => $install_complete_ind,
                'comments' => $comments
        ));
    }

    /**
     * For a specified account, this call returns all service credits whose credit amounts have not yet been fully applied.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array unapplied_service_credits A multidimensional array of service credit records for the given account
     */
    public function get_unapplied_service_credits($acct_no = null)
    {
        return $this->__ws_call('get_unapplied_service_credits', Array(
                'acct_no' => $acct_no
        ));
    }

    /**
     * Returns a list of recurring credits associated with a specified account.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $filter_credit_no The recurring credit number to use in order to filter results.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array recurring_credit_info 
     */
    public function get_recurring_credit_info($acct_no = null, $filter_credit_no = null)
    {
        return $this->__ws_call('get_recurring_credit_info', Array(
                'acct_no' => $acct_no,
                'filter_credit_no' => $filter_credit_no
        ));
    }

    /**
     * Returns the invoice number of a pending invoice associated with a specified account.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int invoice_no The unique identifer of a given invoice.
     */
    public function get_pending_invoice_no($acct_no = null)
    {
        return $this->__ws_call('get_pending_invoice_no', Array(
                'acct_no' => $acct_no
        ));
    }

    /**
     * Removes the form of payment associated with the account and replaces it with Other/None.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function remove_pay_method($acct_no = null)
    {
        return $this->__ws_call('remove_pay_method', Array(
                'acct_no' => $acct_no
        ));
    }

    /**
     * Applies custom rates to a particular plan and service assigned to a specified account. Please note: Custom rates can be assigned to only recurring and usage-based services.
     * @param int $service_no Aria assigned unique service identifier
     * @param array $custom_acct_rates This is a multidimensional array containing elements with the attributes rate_seq_no, rate_per_unit, from_unit, to_unit.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $plan_no Aria assigned unique plan identifier
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function assign_custom_acct_rates($service_no, $custom_acct_rates, $acct_no = null, $plan_no = null)
    {
        return $this->__ws_call('assign_custom_acct_rates', Array(
                'service_no' => $service_no,
                'custom_acct_rates' => $custom_acct_rates,
                'acct_no' => $acct_no,
                'plan_no' => $plan_no
        ));
    }

    /**
     * For the given input specified electronic form of payment (credit card number, checking acct number, etc.) return list of acct_nos on file that already have that form of payment assigned to them.
     * @param int $pay_method Determines if this is a credit card or bank account being searched against
     * @param string $form_payment_acct_id The account ID (credit card number of bank account number) of the payment method being searched for
     * @param string $bank_routing_num If pay method is 2 (ACH), this is the routing number corresponding to the payment account ID
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array accts_with_pay_method 
     */
    public function get_accts_with_existing_pay_method($pay_method, $form_payment_acct_id, $bank_routing_num = null)
    {
        return $this->__ws_call('get_accts_with_existing_pay_method', Array(
                'pay_method' => $pay_method,
                'form_payment_acct_id' => $form_payment_acct_id,
                'bank_routing_num' => $bank_routing_num
        ));
    }

    /**
     * Adjusts the billing date for a specified account to a date in the future or a date in the past. Based on client configuration, this call can also adjust billing dates for all accounts in a parent/child hierarchy.
     * @param int $action_directive Defines what to do with any pending invoices upon adjustment.
     * @param int $adjustment_days Number of days to adjust the billing date.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $comments Additional explanitory text relating to this API call.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function adjust_billing_dates($action_directive, $adjustment_days, $acct_no = null, $comments = null)
    {
        return $this->__ws_call('adjust_billing_dates', Array(
                'action_directive' => $action_directive,
                'adjustment_days' => $adjustment_days,
                'acct_no' => $acct_no,
                'comments' => $comments
        ));
    }

    /**
     * Adds comments to a specified account record.
     * @param string $comment The content/body text of the account comment being created.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function write_acct_comment($comment, $acct_no = null)
    {
        return $this->__ws_call('write_acct_comment', Array(
                'comment' => $comment,
                'acct_no' => $acct_no
        ));
    }

    /**
     * Returns the comments associated with a particular account for a specified date range.
     * @param string $date_range_start The start-date of the given date range.
     * @param string $date_range_end The end-date of the given date range
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $do_url_encoding A boolean value that informs the API method to do MIME Encoding of the data to be returned (if any).
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array acct_comments 
     */
    public function get_acct_comments($date_range_start, $date_range_end, $acct_no = null, $do_url_encoding = null)
    {
        return $this->__ws_call('get_acct_comments', Array(
                'date_range_start' => $date_range_start,
                'date_range_end' => $date_range_end,
                'acct_no' => $acct_no,
                'do_url_encoding' => $do_url_encoding
        ));
    }

    /**
     * Updates or deletes one or more supplemental fields and/or values associated with a specified account. This call honors any requirements for minimum and maximum number of values. In addition, this call does not delete required supplemental fields.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param array $acct_supp_fields This is a multidimensional array containing the elements supp_field_name,  supp_field_value and supp_field_directive.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function modify_acct_supp_fields($acct_no = null, $acct_supp_fields = null)
    {
        return $this->__ws_call('modify_acct_supp_fields', Array(
                'acct_no' => $acct_no,
                'acct_supp_fields' => $acct_supp_fields
        ));
    }

    /**
     * Removes the alternate rate schedule assigned to a specified account.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $plan_no Aria assigned unique plan identifier
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function remove_custom_acct_rates($acct_no = null, $plan_no = null)
    {
        return $this->__ws_call('remove_custom_acct_rates', Array(
                'acct_no' => $acct_no,
                'plan_no' => $plan_no
        ));
    }

    /**
     * Returns the list of all statements generated for a specified account.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $user_id Account&#039;s user ID. Alternative to using acct_no.
     * @param string $start_date Specifies start date. The date is in the format yyyy-mm-dd
     * @param string $end_date Specifies end date. The date is in the format yyyy-mm-dd
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array statement_history 
     */
    public function get_acct_statement_history($acct_no = null, $user_id = null, $start_date = null, $end_date = null)
    {
        return $this->__ws_call('get_acct_statement_history', Array(
                'acct_no' => $acct_no,
                'user_id' => $user_id,
                'start_date' => $start_date,
                'end_date' => $end_date
        ));
    }

    /**
     * Returns the invoice history for a specified account. The call can return invoices for all billing dates or only invoices for a particular billing date range.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $user_id Account&#039;s user ID. Alternative to using acct_no.
     * @param string $start_bill_date The beginning of the date range to search for account invoices.
     * @param string $end_bill_date The end of the range to search for invoice history on the account.
     * @param string $include_voided Include voided invoices in the search results.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array invoice_history 
     */
    public function get_acct_invoice_history($acct_no = null, $user_id = null, $start_bill_date = null, $end_bill_date = null, $include_voided = null)
    {
        return $this->__ws_call('get_acct_invoice_history', Array(
                'acct_no' => $acct_no,
                'user_id' => $user_id,
                'start_bill_date' => $start_bill_date,
                'end_bill_date' => $end_bill_date,
                'include_voided' => $include_voided
        ));
    }

    /**
     * Returns the contents of a particular statement associated with a specified account.
     * @param int $statement_no The unique ID of the statement for which the details are being fetched
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $do_encoding True indicates to acquire the message size after doing MIME encoding, False acquires message size without MIME encoding.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string statement_content The contents of the statement<br>string mime_type MIME type for statement encoding.
     */
    public function get_statement_content($statement_no, $acct_no = null, $do_encoding = null)
    {
        return $this->__ws_call('get_statement_content', Array(
                'statement_no' => $statement_no,
                'acct_no' => $acct_no,
                'do_encoding' => $do_encoding
        ));
    }

    /**
     * Returns the number of characters in the given statement.
     * @param int $statement_no The unique ID of the statement for which the details are being fetched
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $do_encoding True indicates to acquire the message size after doing MIME encoding, False acquires message size without MIME encoding.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int num_chars The size of the message as a count of characters.
     */
    public function get_statement_content_size($statement_no, $acct_no = null, $do_encoding = null)
    {
        return $this->__ws_call('get_statement_content_size', Array(
                'statement_no' => $statement_no,
                'acct_no' => $acct_no,
                'do_encoding' => $do_encoding
        ));
    }

    /**
     * Inidicates whether an account has ever ordered or paid for a specified inventory item (SKU).
     * @param string $sku Client-assigned SKU code for product or service being referenced.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int ordered_ind Boolean value indicating the SKU has been ordered<br>int billed_ind Boolean value indicating the SKU has been billed to the customer.<br>int paid_ind Boolean value indicating the product or service has been paid for.
     */
    public function get_acct_has_ordered_sku($sku, $acct_no = null)
    {
        return $this->__ws_call('get_acct_has_ordered_sku', Array(
                'sku' => $sku,
                'acct_no' => $acct_no
        ));
    }

    /**
     * Inidicates whether a user ID has ever ordered or paid for a specified inventory item (SKU).
     * @param string $user_id The user ID of the account in question
     * @param string $sku Client-assigned SKU code for product or service being referenced.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.<br>int ordered_ind Boolean value indicating the SKU has been ordered<br>int billed_ind Boolean value indicating the SKU has been billed to the customer.<br>int paid_ind Boolean value indicating the product or service has been paid for.
     */
    public function get_userid_has_ordered_sku($user_id, $sku)
    {
        return $this->__ws_call('get_userid_has_ordered_sku', Array(
                'user_id' => $user_id,
                'sku' => $sku
        ));
    }

    /**
     * Assigns multiple supplemental plans to a specified account.
     * @param array $supp_plans_to_assign 
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $assignment_directive The scope rule to be applied to this assignment/de-assignment request, governing both the date upon which the assignment should take place (immediately or on the account&#039;s anniversary date) and the proration rule that should be applied (per client&#039;s default rules for proration on plan assignment v. forcing proration on or off for this request only). Default behavior is to  assign plan to account on the account&#039;s anniversary date, resulting in no proration effect.
     * @param string $do_write Boolean indicator informing Aria whether or not to actually perform the requested operation. If &#039;false&#039; is passed in this field Aria will, if applicable, calculate any potential effects stemming from this call such as pro-ration, plan assignments, etc. and return all relevant data  without actually performing the requested operation or making any changes to the account. This is useful to interfaces that wish to present the user with a &#039;confirmation page&#039; informing of the would-be effects of the requested operation prior to actually performing it.  Do_write defaults to &#039;true&#039;
     * @param string $comments Additional explanitory text relating to this API call.
     * @param string $client_receipt_id Client defined unique identifier used to track related system actions
     * @param string $alt_proration_start_date This argument specifies and alternate proration start date.
     * @param array $coupon_codes 
     * @param string $effective_date If the assignment directive is for future date assignment, this is the effective date for that assignment
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>double proration_result_amount The currency amount of any resulting proration action performed as a result of the requested plan change. For plan assignments with an assignment directive of &#039;1&#039; (perform on anniversary date), or &#039;2&#039; (honor client default proration action) when the default configuration is to not do proration, or &#039;3&#039; (force no proration), the value returned in this field will always be &#039;0&#039;. When proration is performed the value returned in this field will either be a positive currency value (indicating a resulting charge to the account) or a negative currency value (indicating a credit to the account). If the value passed in field do_write is false then any positive or negative value returned in this field is notational only, demonstrating what proration effect would be applied to the account if the requested plan assignment/de-assignment were to be actually performed.<br>int invoice_no The unique identifer of a given invoice.<br>array multi_sp_invoice_line_items <br>int collection_error_code If a collection is attempted, returns the error code associated with the collection.<br>string collection_error_msg The error message associated with collection_error_code.<br>int statement_error_code The error code generated when attempting to create the statement resulting from this call, if any<br>string statement_error_msg The text message associated with &#039;statement_error_code&#039;<br>string proc_cvv_response The processor return code from CVV validation (deprecated)<br>string proc_avs_response Processor return code from address validation<br>string proc_cavv_response The processors return code for security validation (includes cvv)<br>string proc_status_code The processor status code<br>string proc_status_text The processors status description<br>string proc_payment_id The processor payment id<br>string proc_auth_code Authorization code provided by the issuing bank<br>string proc_merch_comments Additional information passed to payment processor<br>double total_charges_before_tax Total amount to be charged to the account before taxes have been calculated.<br>double total_tax_charges Total taxes as calculated for the amount of the transaction.<br>double total_charges_after_tax Total amount to be charged to the account after taxes have been calculated.<br>double total_credit The total amount of the credit to be applied to the account<br>double total_tax_credit The tax amount of the credit to be applies<br>double total_credit_before_tax The credit to be applied before tax is taken into account<br>double total The grand total of this invoice<br>double expectd_activation_fee The predicted activation fee based on activation fee charges on supplemental plans on this invoice<br>double expectd_mthly_recurring_cost The predicted monthly recurring cost of the items and plans on this invoice<br>double expectd_annu_recurring_cost The predicted annual recurring cost of the items and plans on this invoice<br>array third_party_errors Errors from third-party systems like taxation engines are returned here, whereas the Aria-generated error codes are returned in the error_code and error_msg fields at the root level of the API return.
     */
    public function assign_supp_plan_multi($supp_plans_to_assign, $acct_no = null, $assignment_directive = null, $do_write = null, $comments = null, $client_receipt_id = null, $alt_proration_start_date = null, $coupon_codes = null, $effective_date = null)
    {
        return $this->__ws_call('assign_supp_plan_multi', Array(
                'supp_plans_to_assign' => $supp_plans_to_assign,
                'acct_no' => $acct_no,
                'assignment_directive' => $assignment_directive,
                'do_write' => $do_write,
                'comments' => $comments,
                'client_receipt_id' => $client_receipt_id,
                'alt_proration_start_date' => $alt_proration_start_date,
                'coupon_codes' => $coupon_codes,
                'effective_date' => $effective_date
        ));
    }

    /**
     * Returns the historical data related to the account&#039;s payment methods.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $filter_seq_no An Aria-assigned billiing sequence number used to filter results.
     * @return mixed[] array acct_pay_methods <br>int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function get_acct_payment_methods($acct_no = null, $filter_seq_no = null)
    {
        return $this->__ws_call('get_acct_payment_methods', Array(
                'acct_no' => $acct_no,
                'filter_seq_no' => $filter_seq_no
        ));
    }

    /**
     * Generates a statement based on an invoice that has not been inluded in a statement. This call can also send the statement to the billing email address of a specified account. Please note: If there is more than one invoice that has not been included in an invoice, an error will occur. If the send_email  field is set to true, and the account does not have a billing email address, an error will occur.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $send_email A boolean directive to send the statement via email to the account holder.
     * @return mixed[] int statement_no The unique statement number.<br>int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function gen_statement($acct_no = null, $send_email = null)
    {
        return $this->__ws_call('gen_statement', Array(
                'acct_no' => $acct_no,
                'send_email' => $send_email
        ));
    }

    /**
     * Deletes all unused credits associated with a particular coupon.
     * @param string $coupon_cd Client-defined unqique coupon code.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function cancel_unconsumed_credit($coupon_cd, $acct_no = null)
    {
        return $this->__ws_call('cancel_unconsumed_credit', Array(
                'coupon_cd' => $coupon_cd,
                'acct_no' => $acct_no
        ));
    }

    /**
     * Deletes all credits specified in the list.
     * @param array $credit_ids 
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function cancel_unapplied_svce_credits($credit_ids, $acct_no = null)
    {
        return $this->__ws_call('cancel_unapplied_svce_credits', Array(
                'credit_ids' => $credit_ids,
                'acct_no' => $acct_no
        ));
    }

    /**
     * Return the current currency_cd and balance for the given acct_no.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string currency_cd The 3-digit ISO currency code for monetary values used in the context of this API method.<br>string balance The outstanding balance on the account.
     */
    public function get_acct_balance($acct_no = null)
    {
        return $this->__ws_call('get_acct_balance', Array(
                'acct_no' => $acct_no
        ));
    }

    /**
     * Returns all information related to summary value of unbilled usage on the account.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string currency_cd The 3-digit ISO currency code for monetary values used in the context of this API method.<br>string currency_name Human-readable currency name, in English.<br>double acct_mtd_threshold_amount The month-to-date threshold amount which, when crossed over or under by the account&#039;s running month-to-date unbilled usage balance, triggers an email notification of such to the account holder (if client is configured for such notices).<br>double acct_ptd_threshold_amount The billing-period-to-date threshold amount which, when crossed over or under by the account&#039;s running billing-period-to-date unbilled usage balance, triggers an email notification of such to the account holder (if client is configured for such notices).<br>double client_mtd_threshold_amount The month-to-date threshold amount which, when crossed over or under by the account&#039;s running month-to-date unbilled usage balance, triggers provisioning event notification of such to the client (if client is configured for receipt of such events).<br>double client_ptd_threshold_amount The billing-period-to-date threshold amount which, when crossed over or under by the account&#039;s running billing-period-to-date unbilled usage balance, triggers provisioning event notification of such to the client (if client is configured for receipt of such events).<br>double mtd_balance_amount The account&#039;s current month-to-date unbilled usage currency value.<br>double ptd_balance_amount The account&#039;s current billing-period-to-date unbilled usage currency value.<br>string acct_mtd_delta_sign A symbolic indicator as to whether the value in parameter &quot;acct_mtd_delta_amount&quot; is above, below, or equal to its associated threshold value.<br>double acct_mtd_delta_amount A symbolic indicator as to whether the value in parameter &quot;acct_mtd_delta_amount&quot; is above, below, or equal to its associated threshold value.<br>string acct_ptd_delta_sign A symbolic indicator as to whether the value in parameter &quot;acct_mtd_delta_amount&quot; is above, below, or equal to its associated threshold value.<br>double acct_ptd_delta_amount A symbolic indicator as to whether the value in parameter &quot;acct_mtd_delta_amount&quot; is above, below, or equal to its associated threshold value.<br>string client_mtd_delta_sign A symbolic indicator as to whether the value in parameter &quot;acct_mtd_delta_amount&quot; is above, below, or equal to its associated threshold value.<br>double client_mtd_delta_amount A symbolic indicator as to whether the value in parameter &quot;acct_mtd_delta_amount&quot; is above, below, or equal to its associated threshold value.<br>string client_ptd_delta_sign A symbolic indicator as to whether the value in parameter &quot;acct_mtd_delta_amount&quot; is above, below, or equal to its associated threshold value.<br>double client_ptd_delta_amount A symbolic indicator as to whether the value in parameter &quot;acct_mtd_delta_amount&quot; is above, below, or equal to its associated threshold value.<br>double unapp_svc_credit_bal_amount A symbolic indicator as to whether the value in parameter &quot;acct_mtd_delta_amount&quot; is above, below, or equal to its associated threshold value.<br>string unapp_svc_credit_delta_sign A symbolic indicator as to whether the value in parameter &quot;acct_mtd_delta_amount&quot; is above, below, or equal to its associated threshold value.<br>double unapp_svc_credit_delta_amount A symbolic indicator as to whether the value in parameter &quot;acct_mtd_delta_amount&quot; is above, below, or equal to its associated threshold value.<br>array unbilled_usage_recs 
     */
    public function get_unbilled_usage_summary($acct_no = null)
    {
        return $this->__ws_call('get_unbilled_usage_summary', Array(
                'acct_no' => $acct_no
        ));
    }

    /**
     * Set the Month-To-Date unbilled usage threshold amount on the account for account-holder notifications.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param double $amount The new month-to-date threshold amount for triggering the sending of account-holder email notices when crossed over or under.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function set_acct_usg_mtd_threshold($acct_no = null, $amount = null)
    {
        return $this->__ws_call('set_acct_usg_mtd_threshold', Array(
                'acct_no' => $acct_no,
                'amount' => $amount
        ));
    }

    /**
     * Set the Billing-Period-To-Date unbilled usage threshold amount on the account for account-holder notifications.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param double $amount The new month-to-date threshold amount for triggering the sending of account-holder email notices when crossed over or under.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function set_acct_usg_ptd_threshold($acct_no = null, $amount = null)
    {
        return $this->__ws_call('set_acct_usg_ptd_threshold', Array(
                'acct_no' => $acct_no,
                'amount' => $amount
        ));
    }

    /**
     * Set the Month-To-Date unbilled usage threshold amount on the account for client event notifications.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param double $amount The new month-to-date threshold amount for triggering the sending of account-holder email notices when crossed over or under.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function set_client_usg_mtd_threshold($acct_no = null, $amount = null)
    {
        return $this->__ws_call('set_client_usg_mtd_threshold', Array(
                'acct_no' => $acct_no,
                'amount' => $amount
        ));
    }

    /**
     * Set the Billing-Period-To-Date unbilled usage threshold amount on the account for client event notifications.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param double $amount The new month-to-date threshold amount for triggering the sending of account-holder email notices when crossed over or under.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function set_client_usg_ptd_threshold($acct_no = null, $amount = null)
    {
        return $this->__ws_call('set_client_usg_ptd_threshold', Array(
                'acct_no' => $acct_no,
                'amount' => $amount
        ));
    }

    /**
     * Reset the account&#039;s Month-To-Date unbilled usage balance to zero.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function reset_usg_mtd_bal($acct_no = null)
    {
        return $this->__ws_call('reset_usg_mtd_bal', Array(
                'acct_no' => $acct_no
        ));
    }

    /**
     * Reset the account&#039;s Billing-Period-To-Date unbilled usage balance to zero.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function reset_usg_ptd_bal($acct_no = null)
    {
        return $this->__ws_call('reset_usg_ptd_bal', Array(
                'acct_no' => $acct_no
        ));
    }

    /**
     * Returns any multi-plan contract currently associated with a specified account.
     * @param int $contract_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int type_no The type of contract end action to be enforced by this contract.<br>int length_months The number of months, starting from start_date, that the given contract will be in effect.<br>string create_comments CSR or API-provided comments provided at time of contract creation.<br>string update_comments Comments provided at time of last contract update.<br>string create_date The date the contract was created.<br>string update_date The date the contract was last modified.<br>string start_date Specifies contract start date. The date is in the format yyyy-mm-dd<br>string end_date Contract end date<br>string status_code Status code of this contract.<br>int plan_no Aria assigned unique plan identifier<br>array plan_name 
     */
    public function get_acct_multiplan_contract($contract_no, $acct_no = null)
    {
        return $this->__ws_call('get_acct_multiplan_contract', Array(
                'contract_no' => $contract_no,
                'acct_no' => $acct_no
        ));
    }

    /**
     * Creates a multi-plan contract for a specified account holder and specified list of plans. The plans can be master plans or supplemental plans.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $plan_no Aria assigned unique plan identifier
     * @param int $type_no The type of contract end action to be enforced by this contract.
     * @param int $length_months The number of months, starting from start_date, that the given contract will be in effect.
     * @param string $create_comments CSR or API-provided comments provided at time of contract creation.
     * @param string $start_date Specifies contract start date. The date is in the format yyyy-mm-dd
     * @param string $do_auto_discard Specifies whether or not, upon creation of this contract, whether or not the system should automatically discard any existing contracts in-effect that cover the same plan or set of plans.
     * @param string $end_date Allows the caller to set a specific end date when creating or modifying plan contracts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int contract_no Aria assigned unique contract identifier
     */
    public function create_acct_multiplan_contract($acct_no = null, $plan_no = null, $type_no = null, $length_months = null, $create_comments = null, $start_date = null, $do_auto_discard = null, $end_date = null)
    {
        return $this->__ws_call('create_acct_multiplan_contract', Array(
                'acct_no' => $acct_no,
                'plan_no' => $plan_no,
                'type_no' => $type_no,
                'length_months' => $length_months,
                'create_comments' => $create_comments,
                'start_date' => $start_date,
                'do_auto_discard' => $do_auto_discard,
                'end_date' => $end_date
        ));
    }

    /**
     * Modifies a particular multi-plan contract assigned to a specified account.
     * @param int $contract_no Aria assigned unique contract identifier
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $type_no The type of contract t the end action to be enforced by this contract.
     * @param int $length_months The number of months, starting from start_date, that the given contract will be in effect.
     * @param string $start_date Specifies contract start date. The date is in the format yyyy-mm-dd
     * @param string $update_comments Comments provided at time of last contract update.
     * @param int $modify_directive Whether to add or remove the contract
     * @param array $plans_input 
     * @param string $end_date Allows the caller to set a specific end date when creating or modifying plan contracts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function modify_acct_multiplan_contract($contract_no, $acct_no = null, $type_no = null, $length_months = null, $start_date = null, $update_comments = null, $modify_directive = null, $plans_input = null, $end_date = null)
    {
        return $this->__ws_call('modify_acct_multiplan_contract', Array(
                'contract_no' => $contract_no,
                'acct_no' => $acct_no,
                'type_no' => $type_no,
                'length_months' => $length_months,
                'start_date' => $start_date,
                'update_comments' => $update_comments,
                'modify_directive' => $modify_directive,
                'plans_input' => $plans_input,
                'end_date' => $end_date
        ));
    }

    /**
     * Cancels a multi-plan contract assigned to a specified account holder.
     * @param int $contract_no Aria assigned unique contract identifier
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $update_comments Comments provided at time of last contract update.
     * @param int $close_status Contract Closure Status (per the allowable values legend)
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function cancel_acct_multiplan_contract($contract_no, $acct_no = null, $update_comments = null, $close_status = null)
    {
        return $this->__ws_call('cancel_acct_multiplan_contract', Array(
                'contract_no' => $contract_no,
                'acct_no' => $acct_no,
                'update_comments' => $update_comments,
                'close_status' => $close_status
        ));
    }

    /**
     * Returns any universal contract currently associated with a specified account.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int type_no The type of contract &quot;end action&quot; to be enforced by this contract.<br>int length_months The number of months, starting from start_date, that the given contract will be in effect.<br>string create_comments CSR or API-provided comments provided at time of contract creation.<br>string update_comments Comments provided at time of last contract update.<br>string create_date The date the contract was created.<br>string update_date The date the contract was last modified.<br>string start_date Specifies contract start date. The date is in the format yyyy-mm-dd<br>string end_date Contract end date<br>string status_code Status code of this contract.
     */
    public function get_acct_universal_contract($acct_no = null)
    {
        return $this->__ws_call('get_acct_universal_contract', Array(
                'acct_no' => $acct_no
        ));
    }

    /**
     * Creates a universal contract for a specified account holder.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $type_no The type of contract &quot;end action&quot; to be enforced by this contract.
     * @param int $length_months The number of months, starting from start_date, that the given contract will be in effect.
     * @param string $create_comments CSR or API-provided comments provided at time of contract creation.
     * @param string $start_date Specifies contract start date. The date is in the format yyyy-mm-dd
     * @param string $end_date Allows the caller to set a specific end date when creating or modifying plan contracts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int contract_no Aria assigned unique contract identifier
     */
    public function create_acct_universal_contract($acct_no = null, $type_no = null, $length_months = null, $create_comments = null, $start_date = null, $end_date = null)
    {
        return $this->__ws_call('create_acct_universal_contract', Array(
                'acct_no' => $acct_no,
                'type_no' => $type_no,
                'length_months' => $length_months,
                'create_comments' => $create_comments,
                'start_date' => $start_date,
                'end_date' => $end_date
        ));
    }

    /**
     * Modifies a universal contract assigned to a specified account.
     * @param int $contract_no Aria assigned unique contract identifier
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $type_no The type of contract &quot;end action&quot; to be enforced by this contract.
     * @param int $length_months The number of months, starting from start_date, that the given contract will be in effect.
     * @param string $start_date Specifies contract start date. The date is in the format yyyy-mm-dd
     * @param string $update_comments Comments provided at time of last contract update.
     * @param string $end_date Allows the caller to set a specific end date when creating or modifying plan contracts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function modify_acct_universal_contract($contract_no, $acct_no = null, $type_no = null, $length_months = null, $start_date = null, $update_comments = null, $end_date = null)
    {
        return $this->__ws_call('modify_acct_universal_contract', Array(
                'contract_no' => $contract_no,
                'acct_no' => $acct_no,
                'type_no' => $type_no,
                'length_months' => $length_months,
                'start_date' => $start_date,
                'update_comments' => $update_comments,
                'end_date' => $end_date
        ));
    }

    /**
     * Cancels a universal contract assigned to a specified account holder.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $update_comments Comments provided at time of last contract update.
     * @param int $close_status Contract Closure Status (per the allowable values legend)
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function cancel_acct_universal_contract($acct_no = null, $update_comments = null, $close_status = null)
    {
        return $this->__ws_call('cancel_acct_universal_contract', Array(
                'acct_no' => $acct_no,
                'update_comments' => $update_comments,
                'close_status' => $close_status
        ));
    }

    /**
     * Returns an array of all active (in effect) contracts associated with the given account.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array all_acct_active_contracts The list of all contracts currently in effect for the given account.
     */
    public function get_all_acct_active_contracts($acct_no = null)
    {
        return $this->__ws_call('get_all_acct_active_contracts', Array(
                'acct_no' => $acct_no
        ));
    }

    /**
     * Returns the account hierarchy details.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $hierarchy_filter Specifies the filter which may be parent only, child only or complete hierarchy.
     * @param int $include_current_acct Specifies the current account to be included or not.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array acct_hierarchy_details 
     */
    public function get_acct_hierarchy_details($acct_no = null, $hierarchy_filter = null, $include_current_acct = null)
    {
        return $this->__ws_call('get_acct_hierarchy_details', Array(
                'acct_no' => $acct_no,
                'hierarchy_filter' => $hierarchy_filter,
                'include_current_acct' => $include_current_acct
        ));
    }

    /**
     * Returns an array of all status contracts associated with the given account. Also provide option to filter by status
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $filter_status_code The filter_status_code is the Aria code used to filter account contract for Inactive or Active (0 or 1).
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array all_acct_contracts 
     */
    public function get_all_acct_contracts($acct_no = null, $filter_status_code = null)
    {
        return $this->__ws_call('get_all_acct_contracts', Array(
                'acct_no' => $acct_no,
                'filter_status_code' => $filter_status_code
        ));
    }

    /**
     * Assign or remove the alternate message template for the given template class.
     * @param string $template_class Aria assigned unique identification code for message template class.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $acct_user_id Client (or user)-assigned unique account identifier.
     * @param string $client_acct_id This is the client-assigned identifier for the account.
     * @param int $override_template_no Aria assigned unique template identifier for the message template.
     * @param int $behavioral_option Specifies the distillation behavioral option that is to be used for this template class. The possible values are 1, 2, and 3. Value of 1 is Distill and send message. Value of 2 is Distill message but do not send. Value of 3 is Produce no message.
     * @param int $override_template_option Specifies the template override options.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function set_acct_notify_override($template_class, $acct_no = null, $acct_user_id = null, $client_acct_id = null, $override_template_no = null, $behavioral_option = null, $override_template_option = null)
    {
        return $this->__ws_call('set_acct_notify_override', Array(
                'template_class' => $template_class,
                'acct_no' => $acct_no,
                'acct_user_id' => $acct_user_id,
                'client_acct_id' => $client_acct_id,
                'override_template_no' => $override_template_no,
                'behavioral_option' => $behavioral_option,
                'override_template_option' => $override_template_option
        ));
    }

    /**
     * Assign or de_assign notification template group at the account level.
     * @param string $notification_template_group_id Client-defined, case-insensitive unique ID of up to 50 characters in length (with no &quot;withespace&quot;) to designate a notification template group.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $acct_user_id Client (or user)-assigned unique account identifier.
     * @param string $client_acct_id This is the client-assigned identifier for the account.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function set_acct_notify_tmplt_grp($notification_template_group_id, $acct_no = null, $acct_user_id = null, $client_acct_id = null)
    {
        return $this->__ws_call('set_acct_notify_tmplt_grp', Array(
                'notification_template_group_id' => $notification_template_group_id,
                'acct_no' => $acct_no,
                'acct_user_id' => $acct_user_id,
                'client_acct_id' => $client_acct_id
        ));
    }

    /**
     * Retrieve notification template groups assigned at various levels on the account.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $acct_user_id Client (or user)-assigned unique account identifier.
     * @param string $client_acct_id This is the client-assigned identifier for the account.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array acct_notification_details 
     */
    public function get_acct_notification_details($acct_no = null, $acct_user_id = null, $client_acct_id = null)
    {
        return $this->__ws_call('get_acct_notification_details', Array(
                'acct_no' => $acct_no,
                'acct_user_id' => $acct_user_id,
                'client_acct_id' => $client_acct_id
        ));
    }

    /**
     * Returns an array of all credits associated with the given account. Also provide option to limit number of records.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param int $limit_records An input to limit the number of records returning back.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array acct_credits 
     */
    public function get_acct_credits($acct_no = null, $limit_records = null)
    {
        return $this->__ws_call('get_acct_credits', Array(
                'acct_no' => $acct_no,
                'limit_records' => $limit_records
        ));
    }

    /**
     * This call returns a particular service credit for an account at a credit level.
     * @param int $credit_no Aria assigned unique identifier
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string created_by Specifies the user ID that created the transaction.<br>string created_date Specifies the date the credit was created.<br>double amount The amount of service credit to create on the account.<br>string credit_type The type of credit: e.g. service or cash.<br>double applied_amount The amount of credit to be applied to the account.<br>double unapplied_amount Amount remaining of the total credit to apply to account.<br>int reason_code Reason code for why the credit was created.<br>string reason_text The text description of the credit reason code.<br>string comments Additional explanitory text relating to this API call.
     */
    public function get_acct_credit_details($credit_no, $acct_no = null)
    {
        return $this->__ws_call('get_acct_credit_details', Array(
                'credit_no' => $credit_no,
                'acct_no' => $acct_no
        ));
    }

    /**
     * This call returns all reason codes for a particular client.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array credit_reason_codes 
     */
    public function get_credit_reason_codes()
    {
        return $this->__ws_call('get_credit_reason_codes', Array(
                
        ));
    }

    /**
     * Confirms that a billing agreement has been accepted by the account user, and that PayPal is able to authorize a payment against that billing agreement. The token is a PayPal session token created by the init_paypal_bill_agreement call. If the billing agreement was accepted, then Aria saves the associated agreement identifier in the database to use for future transactions with this account.The merchant must have their PayPal Payment Receiving Preferences (under Profile on PayPal) set to block &quot;pay with eCheck&quot; (the box must be checked, and this does not prevent PayPal  users from funding transactions with their bank account). If this is not done,  any end user who needs to pay remaining balances (beyond the amount in their  PayPal account) with a bank account will be unable to make payments. When the  box is checked, such bank account funded payments will be secured by the user&#039;s  credit card in case the bank account transfer fails. The merchant may also choose  to have alternate currencies converted to their primary currency on that screen.  Merchants who would like to collect in multiple currencies should either elect  to convert there, or add additional Currency Balances in their PayPal Profile.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $token PayPal assigned session token retrieved with init_paypal_bill_agreement
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function save_paypal_bill_agreement($acct_no = null, $token = null)
    {
        return $this->__ws_call('save_paypal_bill_agreement', Array(
                'acct_no' => $acct_no,
                'token' => $token
        ));
    }

    /**
     * Creates a session with PayPal so that an account user can set up a billing agreement with an Aria client. The call returns a session token from PayPal, plus a client configured return_url (aka PayPal Agreement Confirmation URL) to instruct the USS/Reg software where it should direct the end user for the next step. PayPal will consider the token valid for 15 minutes. This API call does not store any information in the Aria database, but requires that the followup call to save_paypal_bill_agreement call is made while the token is valid.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string return_url Client configured return_url (aka PayPal Agreement Confirmation URL) to instruct the USS/Reg software what PayPal link it should use to direct the end user to the next step<br>string token PayPal supplied token that maintains the billing agreement session. Valid only for 15 minutes.
     */
    public function init_paypal_bill_agreement($acct_no = null)
    {
        return $this->__ws_call('init_paypal_bill_agreement', Array(
                'acct_no' => $acct_no
        ));
    }

    /**
     * Get the service outage for the given account number.
     * @param string $outage_start_date The date of the beginning of the service outage for which a credit is being calculated.
     * @param string $outage_end_date The date of the end of the service outage for which a credit is being calculated.
     * @param int $acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.
     * @param string $outage_start_time The time the service outage started on the date provided in outage_start_date, in 24-hour format
     * @param string $outage_end_time The time the service outage ended on the date provided in outage_end_date, in 24-hour format
     * @param array $plans_to_get_outage 
     * @param double $adjust_percent If a full pro-rated credit is not desired, this adjustment factor will be multiplied against the calculated credit to deliver a final value.  Allowable values for this field are numbers between 0 and 100, and represent a percentage
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error.<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int acct_no Aria-assigned account identifier. This value is unique across all Aria-managed accounts.<br>array service_outage_line_items <br>double total_outage_credit Sum total of the credit amounts of all the effected service plans<br>double adjusted_outage_credit Total outage credit adjusted based on the adjustment percentage provided in the input adjust_percent
     */
    public function get_acct_service_outage_credit($outage_start_date, $outage_end_date, $acct_no = null, $outage_start_time = null, $outage_end_time = null, $plans_to_get_outage = null, $adjust_percent = null)
    {
        return $this->__ws_call('get_acct_service_outage_credit', Array(
                'outage_start_date' => $outage_start_date,
                'outage_end_date' => $outage_end_date,
                'acct_no' => $acct_no,
                'outage_start_time' => $outage_start_time,
                'outage_end_time' => $outage_end_time,
                'plans_to_get_outage' => $plans_to_get_outage,
                'adjust_percent' => $adjust_percent
        ));
    }

    }
