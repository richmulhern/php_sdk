<?php

require_once('baseariabilling.class.php');

/**
 * @package AriaBillingAdministrationServices
 */
class AriaBillingAdministrationServices extends BaseAriaBilling
{

    
    /**
     * 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array promo_plan_set 
     */
    public function get_promo_plan_sets()
    {
        return $this->__ws_call('get_promo_plan_sets', Array(
                
        ));
    }

    /**
     * 
     * @param int $promo_plan_set_no 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int promo_plan_set_no <br>string promo_plan_set_name <br>string promo_plan_set_desc <br>array plan 
     */
    public function get_promo_plan_set_details($promo_plan_set_no)
    {
        return $this->__ws_call('get_promo_plan_set_details', Array(
                'promo_plan_set_no' => $promo_plan_set_no
        ));
    }

    /**
     * 
     * @param string $promo_plan_set_name 
     * @param string $promo_plan_set_desc 
     * @param int $plan_no Aria-assigned unique plan identifier
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int promo_plan_set_no 
     */
    public function create_promo_plan_set($promo_plan_set_name, $promo_plan_set_desc, $plan_no = null)
    {
        return $this->__ws_call('create_promo_plan_set', Array(
                'promo_plan_set_name' => $promo_plan_set_name,
                'promo_plan_set_desc' => $promo_plan_set_desc,
                'plan_no' => $plan_no
        ));
    }

    /**
     * 
     * @param int $promo_plan_set_no 
     * @param string $promo_plan_set_name 
     * @param string $promo_plan_set_desc 
     * @param int $plan_no Aria-assigned unique plan identifier
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int promo_plan_set_no 
     */
    public function update_promo_plan_set($promo_plan_set_no, $promo_plan_set_name, $promo_plan_set_desc, $plan_no = null)
    {
        return $this->__ws_call('update_promo_plan_set', Array(
                'promo_plan_set_no' => $promo_plan_set_no,
                'promo_plan_set_name' => $promo_plan_set_name,
                'promo_plan_set_desc' => $promo_plan_set_desc,
                'plan_no' => $plan_no
        ));
    }

    /**
     * Returns the list of promotion sets configured for client
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array plan_groups 
     */
    public function list_promo_sets()
    {
        return $this->__ws_call('list_promo_sets', Array(
                
        ));
    }

    /**
     * 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string client_name <br>string domain <br>string address1 <br>string address2 <br>string city <br>string locality <br>string state_prov <br>string country <br>string postal_code <br>string phone <br>string contact <br>string contact_address1 <br>string contact_address2 <br>string contact_city <br>string contact_state <br>string contact_zip <br>string contact_phone <br>string contact_email <br>string billing_contact <br>string billing_address1 <br>string billing_address2 <br>string billing_city <br>string billing_state <br>string billing_zip <br>string billing_phone <br>string billing_email <br>string contact_country <br>string contact_locality <br>string billing_country <br>string billing_locality 
     */
    public function get_company_profile()
    {
        return $this->__ws_call('get_company_profile', Array(
                
        ));
    }

    /**
     * 
     * @param string $domain 
     * @param string $address1 
     * @param string $address2 
     * @param string $city 
     * @param string $locality 
     * @param string $state_prov 
     * @param string $country 
     * @param string $postal_code 
     * @param string $phone 
     * @param string $contact 
     * @param string $contact_address1 
     * @param string $contact_address2 
     * @param string $contact_city 
     * @param string $contact_state 
     * @param string $contact_zip 
     * @param string $contact_phone 
     * @param string $contact_email 
     * @param string $billing_contact 
     * @param string $billing_address1 
     * @param string $billing_address2 
     * @param string $billing_city 
     * @param string $billing_state 
     * @param string $billing_zip 
     * @param string $billing_phone 
     * @param string $billing_email 
     * @param string $contact_country 
     * @param string $contact_locality 
     * @param string $billing_country 
     * @param string $billing_locality 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string client_name <br>string domain <br>string address1 <br>string address2 <br>string city <br>string locality <br>string state_prov <br>string country <br>string postal_code <br>string phone <br>string contact <br>string contact_address1 <br>string contact_address2 <br>string contact_city <br>string contact_state <br>string contact_zip <br>string contact_phone <br>string contact_email <br>string billing_contact <br>string billing_address1 <br>string billing_address2 <br>string billing_city <br>string billing_state <br>string billing_zip <br>string billing_phone <br>string billing_email <br>string contact_country <br>string contact_locality <br>string billing_country <br>string billing_locality 
     */
    public function set_company_profile($domain = null, $address1 = null, $address2 = null, $city = null, $locality = null, $state_prov = null, $country = null, $postal_code = null, $phone = null, $contact = null, $contact_address1 = null, $contact_address2 = null, $contact_city = null, $contact_state = null, $contact_zip = null, $contact_phone = null, $contact_email = null, $billing_contact = null, $billing_address1 = null, $billing_address2 = null, $billing_city = null, $billing_state = null, $billing_zip = null, $billing_phone = null, $billing_email = null, $contact_country = null, $contact_locality = null, $billing_country = null, $billing_locality = null)
    {
        return $this->__ws_call('set_company_profile', Array(
                'domain' => $domain,
                'address1' => $address1,
                'address2' => $address2,
                'city' => $city,
                'locality' => $locality,
                'state_prov' => $state_prov,
                'country' => $country,
                'postal_code' => $postal_code,
                'phone' => $phone,
                'contact' => $contact,
                'contact_address1' => $contact_address1,
                'contact_address2' => $contact_address2,
                'contact_city' => $contact_city,
                'contact_state' => $contact_state,
                'contact_zip' => $contact_zip,
                'contact_phone' => $contact_phone,
                'contact_email' => $contact_email,
                'billing_contact' => $billing_contact,
                'billing_address1' => $billing_address1,
                'billing_address2' => $billing_address2,
                'billing_city' => $billing_city,
                'billing_state' => $billing_state,
                'billing_zip' => $billing_zip,
                'billing_phone' => $billing_phone,
                'billing_email' => $billing_email,
                'contact_country' => $contact_country,
                'contact_locality' => $contact_locality,
                'billing_country' => $billing_country,
                'billing_locality' => $billing_locality
        ));
    }

    /**
     * Exports all the plans and related data belonging to specified client
     * @param array $plan_nos 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string serialized_data 
     */
    public function plan_export($plan_nos = null)
    {
        return $this->__ws_call('plan_export', Array(
                'plan_nos' => $plan_nos
        ));
    }

    /**
     * Import all the plans and related data resulting from plan_export. If data required by the plan does not already exist, this method will create these data.
     * @param file $import_file File containing the output of a successful call to plan_export
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function plan_import($import_file)
    {
        return $this->__ws_call('plan_import', Array(
                'import_file' => $import_file
        ));
    }

    /**
     * Returns list of inventory items created for client
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array inventory_items 
     */
    public function get_inventory_items()
    {
        return $this->__ws_call('get_inventory_items', Array(
                
        ));
    }

    /**
     * Returns details of specified inventory item
     * @param int $item_no Specifies the Inventory item number
     * @param string $currency_cd 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int item_no Specifies the Inventory item number<br>int item_type Item Type for the inventory item. Valid values are: 0 - Inventory Item, 1 - Months To Stack, 2 - Resource Item<br>string item_name Specifies the inventory item name<br>string item_desc Specifies description of Inventory item<br>int active_ind Specifies if inventory item is active or inactive. Valid values are: 0 - Inactive and 1 - Active<br>int service_no Specifies Service number for the Inventory item<br>int invoice_advancement_months Specifies months of invoice advancement for the Inventory item<br>int plan_no Aria-assigned unique plan identifier<br>string client_sku SKU specified by client for the inventory item<br>array pricing <br>string modify_price_ind Specifies if CSR&#039;s may modify Inventory item price. Valid values are: Y - Yes and N - No<br>double subunit_qty Subunit Quantity<br>string subunit_label Subunit Label<br>int days_to_expiry Specifies the number of days to expiration for resources on this SKU<br>array resources <br>double stock_level <br>array image <br>array supplemental_obj_fields 
     */
    public function get_inventory_item_details($item_no, $currency_cd)
    {
        return $this->__ws_call('get_inventory_item_details', Array(
                'item_no' => $item_no,
                'currency_cd' => $currency_cd
        ));
    }

    /**
     * Creates an inventory item for specified client
     * @param int $item_type Item Type for the inventory item. Valid values are: 0 - Inventory Item, 1 - Months To Stack, 2 - Resource Item
     * @param string $item_name Specifies the inventory item name
     * @param string $item_desc Specifies description of Inventory item
     * @param int $service_no Specifies Service number for the Inventory item 301- Equipment Order Items 302- Service Order Items 303- Miscellaneous Order Items 304- Tax Exempt Order Items 305- Telecom Tax Order Items
     * @param string $client_sku SKU specified by client for the inventory item
     * @param string $currency_cd Specifies the currency code for Inventory item. It is case sensitive ( ex. usd will work but USD will not ) REST input arrays are &quot;|&quot; separated lists of a single data type
     * @param string $item_price Specifies the price for Inventory item for currencies.. REST input arrays are &quot;|&quot; separated lists of a single data type Count of value passed for the &#039;price_per_unit&#039; parameter should be the same as &#039;currency_cd&#039;.
     * @param int $active_ind Specifies if inventory item is active or inactive. Valid values are: 0 - Inactive and 1 - Active
     * @param int $invoice_advancement_months Specifies months of invoice advancement for the Inventory item
     * @param int $plan_no Aria-assigned unique plan identifier
     * @param string $modify_price_ind Specifies if CSR&#039;s may modify Inventory item price. Valid values are: Y - Yes and N - No
     * @param int $subunit_qty Subunit Quantity If item_type=0 and subunit_label is not null then this field is required
     * @param string $subunit_label Subunit Label If item_type=0 and quantity_per_item is not null then this field is required
     * @param int $days_to_expiry Specifies the number of days to expiration for resources on this SKU. If item_type=2 then this field is required
     * @param string $resource_type_no The assigned identifier for a resource
     * @param string $resource_units Number of units of resource
     * @param int $stock_level_track 
     * @param double $stock_level_adjust 
     * @param array $image 
     * @param array $parent_class 
     * @param array $supplemental_obj_field 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string item_no Specifies the Inventory item number<br>string currency_cd 
     */
    public function create_inventory_item($item_type, $item_name, $item_desc, $service_no, $client_sku, $currency_cd, $item_price, $active_ind = null, $invoice_advancement_months = null, $plan_no = null, $modify_price_ind = null, $subunit_qty = null, $subunit_label = null, $days_to_expiry = null, $resource_type_no = null, $resource_units = null, $stock_level_track = null, $stock_level_adjust = null, $image = null, $parent_class = null, $supplemental_obj_field = null)
    {
        return $this->__ws_call('create_inventory_item', Array(
                'item_type' => $item_type,
                'item_name' => $item_name,
                'item_desc' => $item_desc,
                'service_no' => $service_no,
                'client_sku' => $client_sku,
                'currency_cd' => $currency_cd,
                'item_price' => $item_price,
                'active_ind' => $active_ind,
                'invoice_advancement_months' => $invoice_advancement_months,
                'plan_no' => $plan_no,
                'modify_price_ind' => $modify_price_ind,
                'subunit_qty' => $subunit_qty,
                'subunit_label' => $subunit_label,
                'days_to_expiry' => $days_to_expiry,
                'resource_type_no' => $resource_type_no,
                'resource_units' => $resource_units,
                'stock_level_track' => $stock_level_track,
                'stock_level_adjust' => $stock_level_adjust,
                'image' => $image,
                'parent_class' => $parent_class,
                'supplemental_obj_field' => $supplemental_obj_field
        ));
    }

    /**
     * Update an existing inventory item
     * @param int $item_type Item Type for the inventory item. Valid values are: 0 - Inventory Item, 1 - Months To Stack, 2 - Resource Item
     * @param string $item_name Specifies the inventory item name
     * @param string $item_desc Specifies description of Inventory item
     * @param int $service_no Specifies Service number for the Inventory item
     * @param string $currency_cd Specifies the currency code for Inventory item. It is case sensitive ( ex. usd will work but USD will not ) REST input arrays are &quot;|&quot; separated lists of a single data type
     * @param string $item_price Specifies the price for Inventory item for currencies.. REST input arrays are &quot;|&quot; separated lists of a single data type Count of value passed for the &#039;price_per_unit&#039; parameter should be the same as &#039;currency_cd&#039;.
     * @param int $active_ind Specifies if inventory item is active or inactive. Valid values are: 0 - Inactive and 1 - Active
     * @param int $invoice_advancement_months Specifies months of invoice advancement for the Inventory item
     * @param int $plan_no Aria-assigned unique plan identifier
     * @param string $modify_price_ind Specifies if CSR&#039;s may modify Inventory item price. Valid values are: Y - Yes and N - No
     * @param int $subunit_qty Subunit Quantity If item_type=0 and subunit_label is not null then this field is required
     * @param string $subunit_label Subunit Label If item_type=0 and quantity_per_item is not null then this field is required
     * @param int $days_to_expiry Specifies the number of days to expiration for resources on this SKU
     * @param string $resource_type_no The assigned identifier for a resource. This should not be null if item_type = 2 REST input arrays are &quot;|&quot; separated lists of a single data type
     * @param string $resource_units Number of units of resource. This should not be null if item_type = 2 REST input arrays are &quot;|&quot; separated lists of a single data type
     * @param int $stock_level_track 
     * @param double $stock_level_adjust 
     * @param array $image 
     * @param array $parent_class 
     * @param array $supplemental_obj_field 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string item_no Specifies the Inventory item number<br>string currency_cd 
     */
    public function update_inventory_item($item_type, $item_name, $item_desc, $service_no, $currency_cd, $item_price, $active_ind = null, $invoice_advancement_months = null, $plan_no = null, $modify_price_ind = null, $subunit_qty = null, $subunit_label = null, $days_to_expiry = null, $resource_type_no = null, $resource_units = null, $stock_level_track = null, $stock_level_adjust = null, $image = null, $parent_class = null, $supplemental_obj_field = null)
    {
        return $this->__ws_call('update_inventory_item', Array(
                'item_type' => $item_type,
                'item_name' => $item_name,
                'item_desc' => $item_desc,
                'service_no' => $service_no,
                'currency_cd' => $currency_cd,
                'item_price' => $item_price,
                'active_ind' => $active_ind,
                'invoice_advancement_months' => $invoice_advancement_months,
                'plan_no' => $plan_no,
                'modify_price_ind' => $modify_price_ind,
                'subunit_qty' => $subunit_qty,
                'subunit_label' => $subunit_label,
                'days_to_expiry' => $days_to_expiry,
                'resource_type_no' => $resource_type_no,
                'resource_units' => $resource_units,
                'stock_level_track' => $stock_level_track,
                'stock_level_adjust' => $stock_level_adjust,
                'image' => $image,
                'parent_class' => $parent_class,
                'supplemental_obj_field' => $supplemental_obj_field
        ));
    }

    /**
     * 
     * @param string $class_name 
     * @param string $class_desc 
     * @param int $active_ind 
     * @param array $parent_class 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string class_no 
     */
    public function create_item_class($class_name, $class_desc = null, $active_ind = null, $parent_class = null)
    {
        return $this->__ws_call('create_item_class', Array(
                'class_name' => $class_name,
                'class_desc' => $class_desc,
                'active_ind' => $active_ind,
                'parent_class' => $parent_class
        ));
    }

    /**
     * 
     * @param string $class_no 
     * @param string $class_name 
     * @param string $class_desc 
     * @param int $active_ind 
     * @param array $parent_class 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string class_no 
     */
    public function edit_item_class($class_no, $class_name, $class_desc = null, $active_ind = null, $parent_class = null)
    {
        return $this->__ws_call('edit_item_class', Array(
                'class_no' => $class_no,
                'class_name' => $class_name,
                'class_desc' => $class_desc,
                'active_ind' => $active_ind,
                'parent_class' => $parent_class
        ));
    }

    /**
     * Retrieve all service types
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array service_types 
     */
    public function get_service_types()
    {
        return $this->__ws_call('get_service_types', Array(
                
        ));
    }

    /**
     * Retrieve all services
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array services 
     */
    public function get_services()
    {
        return $this->__ws_call('get_services', Array(
                
        ));
    }

    /**
     * Retrieve details on specified service
     * @param int $service_no Specifies the Service number
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int service_no Specifies the Service number<br>string service_name Specifies the service name<br>string service_type Specifies Service types. Valid values are: &quot;Usage Based&quot;, &quot;Recurring&quot;, &quot;Activation&quot;<br>string gl_cd Specified chart of access code<br>string taxable_ind Indicates If The service has tax associated with it [can be 0 or 1]; 1 indicates taxable and 0 indicates non taxable.<br>string tax_group Specifies tax group associated with service. This will be null if taxable_ind is set to 0<br>int usage_type Specifies usage type associated with service
     */
    public function get_service_details($service_no)
    {
        return $this->__ws_call('get_service_details', Array(
                'service_no' => $service_no
        ));
    }

    /**
     * 
     * @param int $service_no 
     * @param int $plan_no Aria-assigned unique plan identifier
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int service_no <br>string service_name <br>string service_type <br>int plan_no Aria-assigned unique plan identifier<br>string gl_cd <br>int usage_type <br>boolean is_flat_rate <br>double rate <br>array rate_schedules 
     */
    public function get_service_plan_details($service_no, $plan_no = null)
    {
        return $this->__ws_call('get_service_plan_details', Array(
                'service_no' => $service_no,
                'plan_no' => $plan_no
        ));
    }

    /**
     * Retrieve details on specified service that is on a specified plan
     * @param int $service_no Specifies the Service number
     * @param int $plan_no Aria-assigned unique plan identifier
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int plan_no Aria-assigned unique plan identifier<br>string currency_cd Specifies the currency code of plan<br>int service_no Specifies the Service number<br>string service_name Specifies the service name<br>string service_type Specifies Service types. Valid values are: &quot;Usage Based&quot;, &quot;Recurring&quot;, &quot;Activation&quot;<br>int taxable_ind Indicates If The service has tax associated with it [can be 0 or 1]; 1 indicates taxable and 0 indicates non taxable.<br>string tax_group Specifies tax group associated with service. This will be null if taxable_ind is set to 0<br>string gl_cd Specified chart of access code<br>int usage_type Specifies usage type associated with service<br>string rate_type Specifies the rate type. Valid values are:&#039;Flat Rate&#039; and &#039;Tiered Pricing&#039;<br>array rate_schedules <br>array parent_plans <br>array exclusion_plans <br>array supplemental_obj_fields 
     */
    public function get_plan_service_details($service_no, $plan_no = null)
    {
        return $this->__ws_call('get_plan_service_details', Array(
                'service_no' => $service_no,
                'plan_no' => $plan_no
        ));
    }

    /**
     * Creates a new service specific to client
     * @param string $service_name Specifies the service name
     * @param string $service_type Specifies Service types. Valid values are: &quot;Usage Based&quot;, &quot;Recurring&quot;, &quot;Activation&quot;
     * @param string $gl_cd Specified chart of access code
     * @param string $taxable_ind Indicates If The service has tax associated with it [can be 0 or 1]; 1 indicates taxable and 0 indicates non taxable.
     * @param string $tax_group Specifies tax group associated with service. This will be null if taxable_ind is set to 0. If taxable_ind is 1 then this field is required
     * @param string $usage_type Specifies usage type associated with service. If service_type is Usage then this field is required.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int service_no Aria-assigned unique identifier for service
     */
    public function create_service($service_name, $service_type, $gl_cd = null, $taxable_ind = null, $tax_group = null, $usage_type = null)
    {
        return $this->__ws_call('create_service', Array(
                'service_name' => $service_name,
                'service_type' => $service_type,
                'gl_cd' => $gl_cd,
                'taxable_ind' => $taxable_ind,
                'tax_group' => $tax_group,
                'usage_type' => $usage_type
        ));
    }

    /**
     * 
     * @param int $service_no 
     * @param string $service_name 
     * @param string $service_type 
     * @param string $gl_cd 
     * @param string $taxable_ind 
     * @param string $tax_group 
     * @param string $usage_type 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int service_no 
     */
    public function update_service($service_no, $service_name, $service_type, $gl_cd = null, $taxable_ind = null, $tax_group = null, $usage_type = null)
    {
        return $this->__ws_call('update_service', Array(
                'service_no' => $service_no,
                'service_name' => $service_name,
                'service_type' => $service_type,
                'gl_cd' => $gl_cd,
                'taxable_ind' => $taxable_ind,
                'tax_group' => $tax_group,
                'usage_type' => $usage_type
        ));
    }

    /**
     * 
     * @param int $service_no 
     * @param int $plan_no Aria-assigned unique plan identifier
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int service_no <br>int plan_no Aria-assigned unique plan identifier
     */
    public function update_plan_service_details($service_no, $plan_no = null)
    {
        return $this->__ws_call('update_plan_service_details', Array(
                'service_no' => $service_no,
                'plan_no' => $plan_no
        ));
    }

    /**
     * Retrieve all client defined supplemental fields
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array supp_fields 
     */
    public function get_supp_fields()
    {
        return $this->__ws_call('get_supp_fields', Array(
                
        ));
    }

    /**
     * Retrieve details on specified client defined supplemental field
     * @param string $field_name Supplemental field name
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string field_name Specifies the Supplemental field<br>string field_desc Specifies the field description for the Supplemental field<br>int field_order Field Order For The Supplemental Field<br>int required_ind Indicates If The Supplemental Field is required, [can be 0 or 1]; 1 indicates required.<br>int hidden_ind Indicates If The Supplemental Field is hidden or displayed, [can be 0 or 1]; 1 indicates hidden<br>string presentation_mode Indicates Presentation Mode i.e. Form input type. Valid values : text, textarea, select, radio, checkbox<br>int min_no_sel Indicates Minimum Number Of Selections From List Of Valid Values Allowed For The Supplemental Field<br>int max_no_sel Indicates Maximum Number Of Selections From List Of Valid Values Allowed For The Supplemental Field<br>string additional_html <br>string extra_validation_methods <br>array field_options 
     */
    public function get_supp_field_details($field_name)
    {
        return $this->__ws_call('get_supp_field_details', Array(
                'field_name' => $field_name
        ));
    }

    /**
     * Creates a supplemental field for specified client
     * @param string $field_name Specifies the Supplemental field name
     * @param int $field_order Field Order For The Supplemental Field
     * @param string $presentation_mode Indicates Presentation Mode i.e. Form input type. Valid values : text, textarea, select, radio, checkbox
     * @param string $field_desc Specifies the field description for the Supplemental field
     * @param int $required_ind Indicates If The Supplemental Field is required, [can be 0 or 1]; 1 indicates required.
     * @param int $hidden_ind Indicates If The Supplemental Field is hidden or displayed, [can be 0 or 1]; 1 indicates hidden
     * @param int $sel_ind Indicates If The Supplemental Field has selection options i.e. if field contains one or more values from a list of valid values. [can be 0 or 1]; 1 indicates has selection options.
     * @param int $min_no_sel Indicates Minimum Number Of Selections From List Of Valid Values Allowed For The Supplemental Field
     * @param int $max_no_sel Indicates Maximum Number Of Selections From List Of Valid Values Allowed For The Supplemental Field
     * @param string $display_text Display Text For Selection Option. REST input arrays are &quot;|&quot; separated lists of a single data type. This field cannot be null if presentation_mode is select, radio or checkbox. Number of entries must be at least the value in max_no_sel.
     * @param string $option_value Value For Selection Option. REST input arrays are &quot;|&quot; separated lists of a single data type This field cannot be null if presentation_mode is select, radio or checkbox. Number of entries must be at least the value in max_no_sel
     * @param int $option_value_order Display Order For Selection Option. REST input arrays are &quot;|&quot; separated lists of a single data type This field cannot be null if presentation_mode is select, radio or checkbox. Number of entries must be at least the value in max_no_sel.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string field_name Specifies the Supplemental field
     */
    public function create_supp_field($field_name, $field_order, $presentation_mode, $field_desc = null, $required_ind = null, $hidden_ind = null, $sel_ind = null, $min_no_sel = null, $max_no_sel = null, $display_text = null, $option_value = null, $option_value_order = null)
    {
        return $this->__ws_call('create_supp_field', Array(
                'field_name' => $field_name,
                'field_order' => $field_order,
                'presentation_mode' => $presentation_mode,
                'field_desc' => $field_desc,
                'required_ind' => $required_ind,
                'hidden_ind' => $hidden_ind,
                'sel_ind' => $sel_ind,
                'min_no_sel' => $min_no_sel,
                'max_no_sel' => $max_no_sel,
                'display_text' => $display_text,
                'option_value' => $option_value,
                'option_value_order' => $option_value_order
        ));
    }

    /**
     * Update an existing client defined supplemental field
     * @param string $field_name Specifies the Supplemental field name
     * @param string $field_desc Specifies the field description for the Supplemental field
     * @param int $field_order Field Order For The Supplemental Field
     * @param int $required_ind Indicates If The Supplemental Field is required, [can be 0 or 1]; 1 indicates required.Any value entered will be ignored if there is at least an account with this supplemental field
     * @param int $hidden_ind Indicates If The Supplemental Field is hidden or displayed, [can be 0 or 1]; 1 indicates hidden. Any value entered will be ignored if there is at least an account with this supplemental field.
     * @param int $sel_ind Indicates If The Supplemental Field has selection options i.e. if field contains one or more values from a list of valid values. [can be 0 or 1]; 1 indicates has selection options. Any value entered will be ignored if there is at least an account with this supplemental field
     * @param string $presentation_mode Indicates Presentation Mode i.e. Form input type. Valid values : text, textarea, select, radio, checkbox. Any value entered will be ignored if there is at least an account with this supplemental field.
     * @param int $min_no_sel Indicates Minimum Number Of Selections From List Of Valid Values Allowed For The Supplemental Field.Any value entered will be ignored if there is at least an account with this supplemental field
     * @param int $max_no_sel Indicates Maximum Number Of Selections From List Of Valid Values Allowed For The Supplemental Field.Any value entered will be ignored if there is at least an account with this supplemental field
     * @param string $display_text Display Text For Selection Option. REST input arrays are &quot;|&quot; separated lists of a single data type Any value entered will be ignored if there is at least an account with this supplemental field.
     * @param string $option_value Value For Selection Option. REST input arrays are &quot;|&quot; separated lists of a single data type Any value entered will be ignored if there is at least an account with this supplemental field.
     * @param int $option_value_order Display Order For Selection Option. REST input arrays are &quot;|&quot; separated lists of a single data type.Any value entered will be ignored if there is at least an account with this supplemental field
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string field_name Specifies the Supplemental field
     */
    public function update_supp_field($field_name, $field_desc = null, $field_order = null, $required_ind = null, $hidden_ind = null, $sel_ind = null, $presentation_mode = null, $min_no_sel = null, $max_no_sel = null, $display_text = null, $option_value = null, $option_value_order = null)
    {
        return $this->__ws_call('update_supp_field', Array(
                'field_name' => $field_name,
                'field_desc' => $field_desc,
                'field_order' => $field_order,
                'required_ind' => $required_ind,
                'hidden_ind' => $hidden_ind,
                'sel_ind' => $sel_ind,
                'presentation_mode' => $presentation_mode,
                'min_no_sel' => $min_no_sel,
                'max_no_sel' => $max_no_sel,
                'display_text' => $display_text,
                'option_value' => $option_value,
                'option_value_order' => $option_value_order
        ));
    }

    /**
     * Returns list of client created coupons
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array services 
     */
    public function get_coupons()
    {
        return $this->__ws_call('get_coupons', Array(
                
        ));
    }

    /**
     * Returns details of specified coupon
     * @param string $coupon_cd Coupon Code
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string coupon_cd Specifies Coupon Code<br>string coupon_desc Specifies Coupon description<br>string coupon_msg Specifies Coupon Message<br>int status_ind Specifies Coupon status. Valid values are [0, 1]1 indicates coupon is Active. 0 indicates coupon Inactive<br>int no_of_uses Specifies number of uses after which coupon get expires.Related to coupon expiry detail<br>string start_date Specifies start date. The date is in the format &quot;yyyy-mm-dd&quot;Related to coupon expiry detail<br>string end_date Specifies start date. The date is in the format &quot;yyyy-mm-dd&quot;Related to coupon expiry detail<br>array credit_template <br>int eligible_plan_no Eligible service plan number. If eligible_plan_no is present then eligible_service_no is also set and vice-versa. This means that coupon can only be applied against a specific type of charge. But If both values are null then it means that coupon can be applied against any change.<br>int eligible_service_no Eligible service number<br>int no_of_credits This parameter is related to information about generation frequency. i.e. Number of credits If this value is set along with time_between_credits, then it means that generation frequency is multiple.<br>int time_between_credits Time interval between credits<br>int discount_type Specifies discount type. Valid values are [1 or 2] 1 - Indicates flat rate 2 - Indicates percentage<br>double discount_amt Specifies discount amount. If discount_type is set to 1, then this range of valid values of this parameter is &gt; 0 to 9999, but if its set to &quot;2&quot; then its range is &gt; 0 to 100&#039;<br>int percentage_plan_no Specifies Percentage plan number. This value is only set if discount_type is 2 i.e. discount type is Percentage<br>int percentage_service_no Specifies Percentage service number. This value is only set if discount_type is 2 i.e. discount type is Percentage<br>int alt_service_no Specifies Alternative service number. If this value is null, then for coupon can be Service code to use is standard
     */
    public function get_coupon_details($coupon_cd)
    {
        return $this->__ws_call('get_coupon_details', Array(
                'coupon_cd' => $coupon_cd
        ));
    }

    /**
     * Creates a coupon
     * @param string $coupon_cd Specifies Coupon Code
     * @param int $status_ind Specifies Coupon status. Valid values are [0, 1]1 indicates coupon is Active. 0 indicates coupon Inactive
     * @param string $start_date Specifies start date. The date is in the format &quot;yyyy-mm-dd&quot;Related to coupon expiry detail
     * @param string $end_date Specifies start date. The date is in the format &quot;yyyy-mm-dd&quot;Related to coupon expiry detail
     * @param string $coupon_desc Specifies Coupon description
     * @param string $coupon_msg Specifies Coupon Message
     * @param int $no_of_uses Specifies number of uses after which coupon get expires.Related to coupon expiry detail
     * @param array $template 
     * @param array $existing_template 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string coupon_cd Coupon Code
     */
    public function create_coupon($coupon_cd, $status_ind, $start_date, $end_date, $coupon_desc = null, $coupon_msg = null, $no_of_uses = null, $template = null, $existing_template = null)
    {
        return $this->__ws_call('create_coupon', Array(
                'coupon_cd' => $coupon_cd,
                'status_ind' => $status_ind,
                'start_date' => $start_date,
                'end_date' => $end_date,
                'coupon_desc' => $coupon_desc,
                'coupon_msg' => $coupon_msg,
                'no_of_uses' => $no_of_uses,
                'template' => $template,
                'existing_template' => $existing_template
        ));
    }

    /**
     * Update an existing coupon
     * @param string $coupon_cd Specifies Coupon Code
     * @param int $status_ind Specifies Coupon status. Valid values are [0, 1] 1 indicates coupon is Active. 0 indicates coupon Inactive.
     * @param string $start_date Specifies start date. The date is in the format &quot;yyyy-mm-dd&quot; Related to coupon expiry detail
     * @param string $end_date Specifies end date. The date is in the format &quot;yyyy-mm-dd&quot; Related to coupon expiry detail
     * @param string $coupon_desc Specifies Coupon description
     * @param string $coupon_msg Specifies Coupon Message
     * @param int $no_of_uses Specifies number of uses after which coupon get expires. Related to coupon expiry detail
     * @param array $template Specifies existing templates to be associated with the coupon. REST input arrays should passed in the following format: existing_template[0]=1243&amp;existing_template[1]=1002 etc.
     * @param array $existing_template 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string coupon_cd Coupon code
     */
    public function update_coupon($coupon_cd, $status_ind, $start_date, $end_date, $coupon_desc = null, $coupon_msg = null, $no_of_uses = null, $template = null, $existing_template = null)
    {
        return $this->__ws_call('update_coupon', Array(
                'coupon_cd' => $coupon_cd,
                'status_ind' => $status_ind,
                'start_date' => $start_date,
                'end_date' => $end_date,
                'coupon_desc' => $coupon_desc,
                'coupon_msg' => $coupon_msg,
                'no_of_uses' => $no_of_uses,
                'template' => $template,
                'existing_template' => $existing_template
        ));
    }

    /**
     * Deletes the coupons.
     * @param array $coupon_nos Specifies the coupon numbers to be deleted. Eg coupon_nos[0]=10012341&amp;coupon_nos[1]=10023432 etc
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array coupons Coupon Code
     */
    public function delete_coupons($coupon_nos = null)
    {
        return $this->__ws_call('delete_coupons', Array(
                'coupon_nos' => $coupon_nos
        ));
    }

    /**
     * Returns list of client created credit templates
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array credit_templates 
     */
    public function get_recurring_credit_templates()
    {
        return $this->__ws_call('get_recurring_credit_templates', Array(
                
        ));
    }

    /**
     * Returns details of credit template
     * @param int $credit_template_no Specifies the Inventory item number
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int recurring_credit_template_no Specifies currently assigned recurring credit template associated with coupon. All of the remaining parameters are dependent on this.<br>string credit_template_name Recurring credit template name<br>int eligible_plan_no Eligible service plan number. If eligible_plan_no is present then eligible_service_no is also set and vice-versa. This means that coupon can only be applied against a specific type of charge. But If both values are null then it means that coupon can be applied against any change.<br>int eligible_service_no Eligible service number<br>int no_of_credits This parameter is related to information about generation frequency. i.e. Number of credits If this value is set along with time_between_credits, then it means that generation frequency is multiple.<br>int time_between_credits Time interval between credits<br>int discount_type Specifies discount type. Valid values are [1 or 2] 1 - Indicates flat rate 2 - Indicates percentage<br>double discount_amt Specifies discount amount<br>int percentage_plan_no Specifies Percentage plan number. This value is only set if discount_type is 2 i.e. discount type is Percentage<br>int percentage_service_no Specifies Percentage service number. This value is only set if discount_type is 2 i.e. discount type is Percentage<br>int alt_service_no Specifies Alternative service number. If this value is null, then for coupon can be Service code to use is standard<br>array coupons 
     */
    public function get_recurring_credit_template_details($credit_template_no)
    {
        return $this->__ws_call('get_recurring_credit_template_details', Array(
                'credit_template_no' => $credit_template_no
        ));
    }

    /**
     * 
     * @param string $credit_template_name 
     * @param int $eligible_plan_no 
     * @param int $eligible_service_no 
     * @param int $discount_type 
     * @param double $discount_amt 
     * @param int $no_of_credits 
     * @param int $credit_interval_months 
     * @param int $percentage_plan_no 
     * @param int $percentage_service_no 
     * @param int $alt_service_no 
     * @param array $coupon 
     * @param array $existing_coupon 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string credit_template_no 
     */
    public function create_credit_template($credit_template_name, $eligible_plan_no, $eligible_service_no, $discount_type, $discount_amt, $no_of_credits, $credit_interval_months, $percentage_plan_no, $percentage_service_no, $alt_service_no, $coupon = null, $existing_coupon = null)
    {
        return $this->__ws_call('create_credit_template', Array(
                'credit_template_name' => $credit_template_name,
                'eligible_plan_no' => $eligible_plan_no,
                'eligible_service_no' => $eligible_service_no,
                'discount_type' => $discount_type,
                'discount_amt' => $discount_amt,
                'no_of_credits' => $no_of_credits,
                'credit_interval_months' => $credit_interval_months,
                'percentage_plan_no' => $percentage_plan_no,
                'percentage_service_no' => $percentage_service_no,
                'alt_service_no' => $alt_service_no,
                'coupon' => $coupon,
                'existing_coupon' => $existing_coupon
        ));
    }

    /**
     * 
     * @param string $credit_template_no 
     * @param string $credit_template_name 
     * @param int $eligible_plan_no 
     * @param int $eligible_service_no 
     * @param int $discount_type 
     * @param double $discount_amt 
     * @param int $no_of_credits 
     * @param int $credit_interval_months 
     * @param int $percentage_plan_no 
     * @param int $percentage_service_no 
     * @param int $alt_service_no 
     * @param array $coupon 
     * @param array $existing_coupon 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string credit_template_no 
     */
    public function update_credit_template($credit_template_no, $credit_template_name, $eligible_plan_no, $eligible_service_no, $discount_type, $discount_amt, $no_of_credits, $credit_interval_months, $percentage_plan_no, $percentage_service_no, $alt_service_no, $coupon = null, $existing_coupon = null)
    {
        return $this->__ws_call('update_credit_template', Array(
                'credit_template_no' => $credit_template_no,
                'credit_template_name' => $credit_template_name,
                'eligible_plan_no' => $eligible_plan_no,
                'eligible_service_no' => $eligible_service_no,
                'discount_type' => $discount_type,
                'discount_amt' => $discount_amt,
                'no_of_credits' => $no_of_credits,
                'credit_interval_months' => $credit_interval_months,
                'percentage_plan_no' => $percentage_plan_no,
                'percentage_service_no' => $percentage_service_no,
                'alt_service_no' => $alt_service_no,
                'coupon' => $coupon,
                'existing_coupon' => $existing_coupon
        ));
    }

    /**
     * Deletes the templates.
     * @param array $template_nos Specifies the coupon numbers to be deleted. Eg template_nos[0]=10012341&amp;template_nos[1]=10023432 etc
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function delete_templates($template_nos = null)
    {
        return $this->__ws_call('delete_templates', Array(
                'template_nos' => $template_nos
        ));
    }

    /**
     * Returns all service plans for client
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array plans 
     */
    public function get_plans()
    {
        return $this->__ws_call('get_plans', Array(
                
        ));
    }

    /**
     * Returns details for specified service plan
     * @param int $plan_no Aria-assigned unique plan identifier
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int plan_no Aria-assigned unique plan identifier<br>string plan_name Plan Name<br>int plan_level Plan Level. [can be 0 or 1]; 0 - Master plan 1 - indicates Supplemental Plan<br>string plan_type Specifies Plan Type. Valid values are [ Recurring, Free, Pre-paid, Unknown ]<br>string plan_description Specifies plan description<br>array plan_groups <br>string currency_cd Specifies the currency code of plan<br>string billing_interval Billing Interval [ can be either of 1, 3, 6 or 12 ) 1 - Monthly 3 - Quarterly 6 - Semi-Annually 12 - Annually<br>string usage_billing_interval <br>int active_ind Specifies if inventory item is active or inactive. Valid values are: 0 - Inactive and 1 - Active<br>string rollover_months Specifies rollover months. Valid values are from 0 to 24<br>int rollover_plan_no Plan number<br>string allow_child_accounts <br>int dunning_plan_no Specifies dunning plan associated with this plan<br>int free_trial_type Specifies free trial duration.Valid values are : &quot;days&quot; or &quot;months&quot;<br>int free_trial_duration Specifies free trial duration.Valid values are from 0 to 99<br>int initial_free_months <br>int acct_status_cd <br>int rollover_status_days <br>int rollover_status_cd <br>int template_no Specifies invoice template class associated with master plan<br>int plan_cancel_min_month Specifies the minimum term months for cancellation service<br>string how_to_apply_min_fee <br>string is_deletable <br>array services <br>array resources <br>array parent_plans <br>array exclusion_plans <br>array supplemental_obj_fields 
     */
    public function get_plan_details($plan_no = null)
    {
        return $this->__ws_call('get_plan_details', Array(
                'plan_no' => $plan_no
        ));
    }

    /**
     * 
     * @return mixed[] 
     */
    public function create_plan()
    {
        return $this->__ws_call('create_plan', Array(
                
        ));
    }

    /**
     * Creates a service plan for specified client
     * @param string $plan_name Specifies Plan Name
     * @param string $plan_description Specifies plan description
     * @param string $plan_type Specifies Plan Type. Valid values are [ &#039;Master Recurring Plan&#039;, &#039;Master Pre-paid Plan&#039;, &#039;Master Free Plan&#039;, &#039;Supplemental Recurring Plan&#039;, &#039;Supplemental Free Plan&#039;]
     * @param string $currency Specifies the currency code of plan
     * @param string $billing_interval Billing Interval [ can be either of 1, 3, 6 or 12 ) 1 - Monthly 3 - Quarterly 6 - Semi-Annually 12 - Annually
     * @param array $plan_groups 
     * @param string $usage_billing_interval 
     * @param int $active Specifies if inventory item is active or inactive. Valid values are: 0 - Inactive and 1 - Active
     * @param string $rollover_months Specifies rollover months. Valid values are from 0 to 24
     * @param int $rollover_plan_no Rollover Plan number
     * @param int $initial_free_months 
     * @param int $acct_status_cd 
     * @param int $rollover_status_days 
     * @param int $rollover_status_cd 
     * @param int $dunning_plan_no Specifies dunning plan associated with this plan
     * @param int $template_no Specifies invoice template class associated with master plan
     * @param string $apply_cancellation Specifies whether to apply cancellation or not. Valid values: Yes or No. If marked as &#039;Yes&#039; then should also provide at least one cancellation service
     * @param int $plan_cancel_min_month Specifies the minimum term months for cancellation service
     * @param string $apply_minimum_fee 
     * @param string $how_to_apply_minimum_fee 
     * @param array $schedule 
     * @param array $service 
     * @param array $resource 
     * @param int $arc_service_no 
     * @param array $parent_plans 
     * @param array $exclusion_plans 
     * @param array $supplemental_obj_field 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int plan_no Aria-assigned unique plan identifier
     */
    public function create_new_plan($plan_name, $plan_description, $plan_type, $currency, $billing_interval, $plan_groups = null, $usage_billing_interval = null, $active = null, $rollover_months = null, $rollover_plan_no = null, $initial_free_months = null, $acct_status_cd = null, $rollover_status_days = null, $rollover_status_cd = null, $dunning_plan_no = null, $template_no = null, $apply_cancellation = null, $plan_cancel_min_month = null, $apply_minimum_fee = null, $how_to_apply_minimum_fee = null, $schedule = null, $service = null, $resource = null, $arc_service_no = null, $parent_plans = null, $exclusion_plans = null, $supplemental_obj_field = null)
    {
        return $this->__ws_call('create_new_plan', Array(
                'plan_name' => $plan_name,
                'plan_description' => $plan_description,
                'plan_type' => $plan_type,
                'currency' => $currency,
                'billing_interval' => $billing_interval,
                'plan_groups' => $plan_groups,
                'usage_billing_interval' => $usage_billing_interval,
                'active' => $active,
                'rollover_months' => $rollover_months,
                'rollover_plan_no' => $rollover_plan_no,
                'initial_free_months' => $initial_free_months,
                'acct_status_cd' => $acct_status_cd,
                'rollover_status_days' => $rollover_status_days,
                'rollover_status_cd' => $rollover_status_cd,
                'dunning_plan_no' => $dunning_plan_no,
                'template_no' => $template_no,
                'apply_cancellation' => $apply_cancellation,
                'plan_cancel_min_month' => $plan_cancel_min_month,
                'apply_minimum_fee' => $apply_minimum_fee,
                'how_to_apply_minimum_fee' => $how_to_apply_minimum_fee,
                'schedule' => $schedule,
                'service' => $service,
                'resource' => $resource,
                'arc_service_no' => $arc_service_no,
                'parent_plans' => $parent_plans,
                'exclusion_plans' => $exclusion_plans,
                'supplemental_obj_field' => $supplemental_obj_field
        ));
    }

    /**
     * Edit a service plan for specified client
     * @param string $plan_name Specifies Plan Name
     * @param int $plan_type Specifies Plan Type. Valid values are [ &#039;Master Recurring Plan&#039;, &#039;Master Pre-paid Plan&#039;, &#039;Master Free Plan&#039;, &#039;Supplemental Recurring Plan&#039;, &#039;Supplemental Free Plan&#039;]
     * @param string $billing_interval Billing Interval [ can be either of 1, 3, 6 or 12 ) 1 - Monthly 3 - Quarterly 6 - Semi-Annually 12 - Annually
     * @param string $currency Specifies the currency code
     * @param int $plan_no Aria-assigned unique plan identifier
     * @param string $plan_description Specifies plan description
     * @param array $plan_groups 
     * @param int $active Specifies Plan Status.Valid values are &quot;1&quot; or &quot;0&quot; 1 - Active 0 - Inactive
     * @param string $usage_billing_interval Usage billing Interval [ can be either of 1, 3, 6, 12 or custom ) 1 - Monthly 3 - Quarterly 6 - Semi-Annually 12 - Annually. For custom the user can provide any number but not greater than 36 months. Also the usage billing interval cannot be greater than the plan billing_interval
     * @param int $template_no Specifies invoice template class associated with master plan
     * @param string $rollover_months Specifies rollover months. Valid values are from 0 to 24
     * @param int $rollover_plan Rollover Plan number. Rollover information is required for Pre-paid plans
     * @param int $dunning_plan_no Specifies dunning plan associated with this plan
     * @param int $initial_free_months Specifies initial free month.Valid values are : 1 to 12
     * @param int $acct_status_cd Specifies the status of an account when the plan is assigned to a account. Valid values are ( 1- Active, 61 - Active non-billable, 41 - Active trial, 31- Installation pending, 99 - Permanent, 32- Registered pending activation )
     * @param int $rollover_status_days Specifies the number of days the newly created account will remain in its initial status. Valid value are 1 through 28
     * @param int $rollover_status_cd Specifies the status the account will be in after its initial status. Valid values are ( 1 -&gt; Active, 99-&gt;Permanent, -1 -&gt; suspened, -3 -&gt; terminated)
     * @param int $allow_child_accts Specifies whether a plan can have child accounts or not. Valid values are &quot;1&quot; or &quot;0&quot; 1 - Yes 0 - No
     * @param string $apply_cancellation Specifies whether to apply cancellation or not. Valid values: Yes or No. If marked as &#039;Yes&#039; then should also provide at least one cancellation service.Apply cancellation is set when the plan is created and cannot be modified except for the min terms(months)
     * @param int $plan_cancel_min_month Specifies the minimum term months for cancellation service
     * @param string $apply_minimum_fee Specifies whether to apply minimum fee or not. Valid values: Yes or No. If marked as &#039;Yes&#039; then should also provide at least one minimum fee service.
     * @param int $how_to_apply_minimum_fee Specifies when to apply min fee. Valid values are 0 which means &#039;All Invoices&#039; and 1 which means &#039;After first invoice&#039;.
     * @param array $schedule 
     * @param array $service 
     * @param array $resource 
     * @param int $arc_service_no Specifies one of the recurring service for the plan to which the resource is being applied
     * @param array $parent_plans 
     * @param array $exclusion_plans 
     * @param array $supplemental_obj_field 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int plan_no Aria-assigned unique plan identifier
     */
    public function edit_plan($plan_name, $plan_type, $billing_interval, $currency, $plan_no = null, $plan_description = null, $plan_groups = null, $active = null, $usage_billing_interval = null, $template_no = null, $rollover_months = null, $rollover_plan = null, $dunning_plan_no = null, $initial_free_months = null, $acct_status_cd = null, $rollover_status_days = null, $rollover_status_cd = null, $allow_child_accts = null, $apply_cancellation = null, $plan_cancel_min_month = null, $apply_minimum_fee = null, $how_to_apply_minimum_fee = null, $schedule = null, $service = null, $resource = null, $arc_service_no = null, $parent_plans = null, $exclusion_plans = null, $supplemental_obj_field = null)
    {
        return $this->__ws_call('edit_plan', Array(
                'plan_name' => $plan_name,
                'plan_type' => $plan_type,
                'billing_interval' => $billing_interval,
                'currency' => $currency,
                'plan_no' => $plan_no,
                'plan_description' => $plan_description,
                'plan_groups' => $plan_groups,
                'active' => $active,
                'usage_billing_interval' => $usage_billing_interval,
                'template_no' => $template_no,
                'rollover_months' => $rollover_months,
                'rollover_plan' => $rollover_plan,
                'dunning_plan_no' => $dunning_plan_no,
                'initial_free_months' => $initial_free_months,
                'acct_status_cd' => $acct_status_cd,
                'rollover_status_days' => $rollover_status_days,
                'rollover_status_cd' => $rollover_status_cd,
                'allow_child_accts' => $allow_child_accts,
                'apply_cancellation' => $apply_cancellation,
                'plan_cancel_min_month' => $plan_cancel_min_month,
                'apply_minimum_fee' => $apply_minimum_fee,
                'how_to_apply_minimum_fee' => $how_to_apply_minimum_fee,
                'schedule' => $schedule,
                'service' => $service,
                'resource' => $resource,
                'arc_service_no' => $arc_service_no,
                'parent_plans' => $parent_plans,
                'exclusion_plans' => $exclusion_plans,
                'supplemental_obj_field' => $supplemental_obj_field
        ));
    }

    /**
     * Updates the plan service details of an existing plan. For the list of schedules and services, those specified will be modified, those not specified but were previously associated with the plan will be deleted. Note that the default schedule for each currency already supported must be provided
     * @param int $plan_no Aria-assigned unique plan identifier
     * @param array $schedule 
     * @param array $service 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int service_no Service number<br>int plan_no Aria-assigned unique plan identifier
     */
    public function edit_plan_service_details($plan_no = null, $schedule = null, $service = null)
    {
        return $this->__ws_call('edit_plan_service_details', Array(
                'plan_no' => $plan_no,
                'schedule' => $schedule,
                'service' => $service
        ));
    }

    /**
     * 
     * @param array $plan_nos 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array plans 
     */
    public function delete_plans($plan_nos = null)
    {
        return $this->__ws_call('delete_plans', Array(
                'plan_nos' => $plan_nos
        ));
    }

    /**
     * 
     * @param int $plan_no Aria-assigned unique plan identifier
     * @param string $plan_name 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int plan_no Aria-assigned unique plan identifier
     */
    public function copy_plan($plan_no = null, $plan_name = null)
    {
        return $this->__ws_call('copy_plan', Array(
                'plan_no' => $plan_no,
                'plan_name' => $plan_name
        ));
    }

    /**
     * 
     * @return mixed[] 
     */
    public function update_master_plan()
    {
        return $this->__ws_call('update_master_plan', Array(
                
        ));
    }

    /**
     * 
     * @return mixed[] 
     */
    public function update_supplemental_plan()
    {
        return $this->__ws_call('update_supplemental_plan', Array(
                
        ));
    }

    /**
     * List all promotions
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array promotions 
     */
    public function get_promotions()
    {
        return $this->__ws_call('get_promotions', Array(
                
        ));
    }

    /**
     * Returns details of promotion
     * @param string $promo_cd Unique identifier for promotion
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int client_no Aria-assigned unique identifier indicating the Aria client providing service to this account.<br>string promo_cd Unique identifier for promotion<br>string promo_desc Description of promotion<br>string start_date Start date of given Promotion. The date format must be yyyy-mm-dd<br>string exp_date Expiry date of given Promotion. The date format must be yyyy-mm-dd<br>string max_uses Maximum number of possible usage for this promotion<br>string plan_type_name Plan type name of Plan Type, associated with this Promotion<br>string plan_type_desc Plan type description of Plan Type, associated with this Promotion
     */
    public function get_promotion_details($promo_cd)
    {
        return $this->__ws_call('get_promotion_details', Array(
                'promo_cd' => $promo_cd
        ));
    }

    /**
     * Creates a new promotion
     * @param string $promo_cd Unique identifier for promotion
     * @param string $promo_desc Description of promotion
     * @param int $promo_plan_set_no Unique identifier of promotional plan set that this promotion is associated with
     * @param string $no_of_uses Maximum number of possible usage of that Promotion before it gets expired. If this parameter is set then,start_date and end_date need not be set.
     * @param string $start_date Start date of given Promotion. The date format must be yyyy-mm-dd. If this parameter is set then no_of_uses need not be set. If only this parameter is set and end_date is not set, then system assumes that Promotion will never expire and it becomes valid from given start_date.
     * @param string $exp_date Expiry date of given Promotion. The date format must be yyyy-mm-dd. If this parameter is set then no_of_uses need not be set. If this is set with start_date then it means that promotion will be valid between these two dates.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string promo_cd Unique identifier for promotion
     */
    public function create_promotion($promo_cd, $promo_desc, $promo_plan_set_no, $no_of_uses = null, $start_date = null, $exp_date = null)
    {
        return $this->__ws_call('create_promotion', Array(
                'promo_cd' => $promo_cd,
                'promo_desc' => $promo_desc,
                'promo_plan_set_no' => $promo_plan_set_no,
                'no_of_uses' => $no_of_uses,
                'start_date' => $start_date,
                'exp_date' => $exp_date
        ));
    }

    /**
     * Updates an existing promotion
     * @param string $promo_cd Unique identifier for promotion
     * @param string $promo_desc Description of promotion
     * @param int $promo_plan_set_no Unique identifier of promotional plan set that this promotion is associated with
     * @param string $no_of_uses Maximum number of possible usage of that Promotion before it gets expired. If this parameter is set then,start_date and end_date need not be set.
     * @param string $start_date Start date of given Promotion. The date format must be yyyy-mm-dd. If this parameter is set then no_of_uses need not be set. If only this parameter is set and end_date is not set, then system assumes that Promotion will never expire and it becomes valid from given start_date.
     * @param string $exp_date Expiry date of given Promotion. The date format must be yyyy-mm-dd. If this parameter is set then no_of_uses need not be set. If this is set with start_date then it means that promotion will be valid between these two dates.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string promo_cd Unique identifier for promotion
     */
    public function update_promotion($promo_cd, $promo_desc, $promo_plan_set_no, $no_of_uses = null, $start_date = null, $exp_date = null)
    {
        return $this->__ws_call('update_promotion', Array(
                'promo_cd' => $promo_cd,
                'promo_desc' => $promo_desc,
                'promo_plan_set_no' => $promo_plan_set_no,
                'no_of_uses' => $no_of_uses,
                'start_date' => $start_date,
                'exp_date' => $exp_date
        ));
    }

    /**
     * List all usage types
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array usage_types 
     */
    public function get_usage_types()
    {
        return $this->__ws_call('get_usage_types', Array(
                
        ));
    }

    /**
     * Returns details of specified usage type
     * @param int $usage_type_no Unique identifier for usage type
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int usage_type_no Unique identifier for usage type<br>string usage_type_name Name of usage type<br>string usage_type_desc Description of usage type<br>string usage_unit_type Unit type for usage type<br>boolean is_editable Specifies is usage type is editable. Valid values are : &quot;true&quot; - Usage type is editable &quot;false&quot; - Usage type is not editable because one of the reason:- 1. This usage type is system standard. It is available for all clients and therefore not Editable. 2. This usage type is custom to this client. It is associated with a service and therefore not Editable.
     */
    public function get_usage_type_details($usage_type_no)
    {
        return $this->__ws_call('get_usage_type_details', Array(
                'usage_type_no' => $usage_type_no
        ));
    }

    /**
     * Lists all unit types available for usage types
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array usage_unit_types 
     */
    public function get_usage_unit_types()
    {
        return $this->__ws_call('get_usage_unit_types', Array(
                
        ));
    }

    /**
     * Creates a new usage type
     * @param string $usage_type_name Name of usage type
     * @param string $usage_type_desc Description of usage type
     * @param int $usage_unit_type_no Unique identifier for usage type unit
     * @param string $usage_type_display_string 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int usage_type_no Unique identifier for usage type
     */
    public function create_usage_type($usage_type_name, $usage_type_desc, $usage_unit_type_no, $usage_type_display_string = null)
    {
        return $this->__ws_call('create_usage_type', Array(
                'usage_type_name' => $usage_type_name,
                'usage_type_desc' => $usage_type_desc,
                'usage_unit_type_no' => $usage_unit_type_no,
                'usage_type_display_string' => $usage_type_display_string
        ));
    }

    /**
     * Updates an existing usage type
     * @param int $usage_type_no Unique identifier for usage type
     * @param string $usage_type_name Name of usage type
     * @param string $usage_type_desc Description of usage type
     * @param int $usage_unit_type_no Unique identifier for usage type unit
     * @param string $usage_type_display_string 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int usage_type_no Unique identifier for usage type
     */
    public function update_usage_type($usage_type_no, $usage_type_name, $usage_type_desc, $usage_unit_type_no, $usage_type_display_string = null)
    {
        return $this->__ws_call('update_usage_type', Array(
                'usage_type_no' => $usage_type_no,
                'usage_type_name' => $usage_type_name,
                'usage_type_desc' => $usage_type_desc,
                'usage_unit_type_no' => $usage_unit_type_no,
                'usage_type_display_string' => $usage_type_display_string
        ));
    }

    /**
     * 
     * @param string $field_name 
     * @param string $description 
     * @param string $min_no_sel 
     * @param int $max_no_sel 
     * @param string $datatype 
     * @param string $form_input_type 
     * @param string $use_allowed_vals_ind 
     * @param string $option_value 
     * @param string $option_value_order 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int field_no 
     */
    public function create_supp_obj_field($field_name, $description = null, $min_no_sel = null, $max_no_sel = null, $datatype = null, $form_input_type = null, $use_allowed_vals_ind = null, $option_value = null, $option_value_order = null)
    {
        return $this->__ws_call('create_supp_obj_field', Array(
                'field_name' => $field_name,
                'description' => $description,
                'min_no_sel' => $min_no_sel,
                'max_no_sel' => $max_no_sel,
                'datatype' => $datatype,
                'form_input_type' => $form_input_type,
                'use_allowed_vals_ind' => $use_allowed_vals_ind,
                'option_value' => $option_value,
                'option_value_order' => $option_value_order
        ));
    }

    /**
     * 
     * @param int $field_no 
     * @param string $field_name 
     * @param string $description 
     * @param string $min_no_sel 
     * @param int $max_no_sel 
     * @param string $datatype 
     * @param string $form_input_type 
     * @param string $use_allowed_vals_ind 
     * @param string $option_value 
     * @param string $option_value_order 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int field_no 
     */
    public function update_supp_obj_field($field_no, $field_name, $description = null, $min_no_sel = null, $max_no_sel = null, $datatype = null, $form_input_type = null, $use_allowed_vals_ind = null, $option_value = null, $option_value_order = null)
    {
        return $this->__ws_call('update_supp_obj_field', Array(
                'field_no' => $field_no,
                'field_name' => $field_name,
                'description' => $description,
                'min_no_sel' => $min_no_sel,
                'max_no_sel' => $max_no_sel,
                'datatype' => $datatype,
                'form_input_type' => $form_input_type,
                'use_allowed_vals_ind' => $use_allowed_vals_ind,
                'option_value' => $option_value,
                'option_value_order' => $option_value_order
        ));
    }

    /**
     * 
     * @param int $field_no 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int field_no <br>string field_name <br>string description <br>string datatype <br>string min_no_sel <br>int max_no_sel <br>string form_input_type <br>array allowed_values <br>array associated_objects 
     */
    public function get_supp_obj_fields($field_no)
    {
        return $this->__ws_call('get_supp_obj_fields', Array(
                'field_no' => $field_no
        ));
    }

    /**
     * Lists all plan groups
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array plan_groups 
     */
    public function get_plan_groups()
    {
        return $this->__ws_call('get_plan_groups', Array(
                
        ));
    }

    /**
     * Returns details of specified plan group
     * @param int $group_no Plan group number
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int group_no Unique identifier for plan group<br>string group_name Name of plan group<br>string group_desc Description of plan group<br>string group_usage Indicate usage of plan group. Possible values are: 1 – CSR only 2 – USS only 3 – Both CSR and USS<br>array plans 
     */
    public function get_plan_group_details($group_no)
    {
        return $this->__ws_call('get_plan_group_details', Array(
                'group_no' => $group_no
        ));
    }

    /**
     * Creates a new plan group
     * @param string $group_name Name of plan group
     * @param string $group_desc Description of plan group
     * @param string $group_usage Indicate usage of plan group. Possible values are: 1 – CSR only 2 – USS only 3 – Both CSR and USS
     * @param string $group_plans “|” separated list of plans to be associated to this plan group. Please note that this list must contain valid plan numbers for that particular client number or the API will error
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int group_no Unique identifier for plan group
     */
    public function create_plan_group($group_name, $group_desc, $group_usage, $group_plans = null)
    {
        return $this->__ws_call('create_plan_group', Array(
                'group_name' => $group_name,
                'group_desc' => $group_desc,
                'group_usage' => $group_usage,
                'group_plans' => $group_plans
        ));
    }

    /**
     * Creates a new plan group
     * @param int $group_no Unique identifier for plan group
     * @param string $group_name Name of plan group
     * @param string $group_desc Description of plan group
     * @param string $group_usage Indicate usage of plan group. Possible values are: 1 – CSR only 2 – USS only 3 – Both CSR and USS
     * @param string $group_plans “|” separated list of plans to be associated to this plan group. Please note that this list must contain valid plan numbers for that particular client number or the API will error
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int group_no Unique identifier for plan group
     */
    public function update_plan_group($group_no, $group_name, $group_desc, $group_usage, $group_plans = null)
    {
        return $this->__ws_call('update_plan_group', Array(
                'group_no' => $group_no,
                'group_name' => $group_name,
                'group_desc' => $group_desc,
                'group_usage' => $group_usage,
                'group_plans' => $group_plans
        ));
    }

    /**
     * Creates a new plan group
     * @param string $group_list “|” separated list of plan groups to be deleted
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array plan_groups 
     */
    public function delete_plan_group($group_list)
    {
        return $this->__ws_call('delete_plan_group', Array(
                'group_list' => $group_list
        ));
    }

    /**
     * 
     * @return mixed[] 
     */
    public function view_processor_config()
    {
        return $this->__ws_call('view_processor_config', Array(
                
        ));
    }

    /**
     * 
     * @return mixed[] 
     */
    public function edit_processor_config()
    {
        return $this->__ws_call('edit_processor_config', Array(
                
        ));
    }

    /**
     * 
     * @return mixed[] 
     */
    public function delete_processor_config()
    {
        return $this->__ws_call('delete_processor_config', Array(
                
        ));
    }

    /**
     * 
     * @return mixed[] 
     */
    public function add_processor_config()
    {
        return $this->__ws_call('add_processor_config', Array(
                
        ));
    }

    /**
     * Retrieve all client defined Chart Of Accounts
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array coa_list 
     */
    public function list_coa()
    {
        return $this->__ws_call('list_coa', Array(
                
        ));
    }

    /**
     * Create client defined Chart Of Account entry
     * @param string $coa_code Client defined COA code that should be returned to financial applications
     * @param string $coa_description Description of the COA entry
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array coa 
     */
    public function add_coa($coa_code, $coa_description = null)
    {
        return $this->__ws_call('add_coa', Array(
                'coa_code' => $coa_code,
                'coa_description' => $coa_description
        ));
    }

    /**
     * Retrieve a single client defined Chart Of Account entry
     * @param int $coa_id Chart of Accounts ID number assigned by Aria
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array coa 
     */
    public function get_coa($coa_id)
    {
        return $this->__ws_call('get_coa', Array(
                'coa_id' => $coa_id
        ));
    }

    /**
     * Edit a client defined Chart Of Account entry
     * @param int $coa_id Chart of Accounts ID number assigned by Aria
     * @param string $coa_code Client defined COA code that should be returned to financial applications
     * @param string $coa_description Description of the COA entry
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array coa 
     */
    public function edit_coa($coa_id, $coa_code = null, $coa_description = null)
    {
        return $this->__ws_call('edit_coa', Array(
                'coa_id' => $coa_id,
                'coa_code' => $coa_code,
                'coa_description' => $coa_description
        ));
    }

    /**
     * 
     * @param string $session_id 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function validate_admin_session($session_id)
    {
        return $this->__ws_call('validate_admin_session', Array(
                'session_id' => $session_id
        ));
    }

    }
