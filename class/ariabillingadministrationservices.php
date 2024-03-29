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
     * @param int $promo_plan_set_no Aria assigned number for the promo plan set
     * @param string $client_plan_type_id Client defined unique identifier
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int promo_plan_set_no Aria assigned number for the promo plan set<br>string promo_plan_set_name Specifies the name of a promotional plan set<br>string promo_plan_set_desc Specifies the description of a promotional plan set<br>string client_plan_type_id Client defined unique identifier<br>array plan 
     */
    public function get_promo_plan_set_details($promo_plan_set_no, $client_plan_type_id)
    {
        return $this->__ws_call('get_promo_plan_set_details', Array(
                'promo_plan_set_no' => $promo_plan_set_no,
                'client_plan_type_id' => $client_plan_type_id
        ));
    }

    /**
     * 
     * @param string $promo_plan_set_name Specifies the name of a promotional plan set
     * @param string $promo_plan_set_desc Specifies the description of a promotional plan set
     * @param string $client_plan_type_id Client defined unique identifier
     * @param string $plan_no Aria-assigned unique plan identifier
     * @param string $client_plan_id Client defined unique identifier
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int promo_plan_set_no Aria assigned number for the promo plan set
     */
    public function create_promo_plan_set($promo_plan_set_name, $promo_plan_set_desc, $client_plan_type_id = null, $plan_no = null, $client_plan_id = null)
    {
        return $this->__ws_call('create_promo_plan_set', Array(
                'promo_plan_set_name' => $promo_plan_set_name,
                'promo_plan_set_desc' => $promo_plan_set_desc,
                'client_plan_type_id' => $client_plan_type_id,
                'plan_no' => $plan_no,
                'client_plan_id' => $client_plan_id
        ));
    }

    /**
     * 
     * @param int $promo_plan_set_no Aria assigned number for the promo plan set
     * @param string $promo_plan_set_name Specifies the name of a promotional plan set
     * @param string $promo_plan_set_desc Specifies the description of a promotional plan set
     * @param string $client_plan_type_id Client defined unique identifier
     * @param string $plan_no Plan number
     * @param string $client_plan_id Client defined unique identifier
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int promo_plan_set_no Aria assigned number for the promo plan set
     */
    public function update_promo_plan_set($promo_plan_set_no, $promo_plan_set_name, $promo_plan_set_desc, $client_plan_type_id, $plan_no = null, $client_plan_id = null)
    {
        return $this->__ws_call('update_promo_plan_set', Array(
                'promo_plan_set_no' => $promo_plan_set_no,
                'promo_plan_set_name' => $promo_plan_set_name,
                'promo_plan_set_desc' => $promo_plan_set_desc,
                'client_plan_type_id' => $client_plan_type_id,
                'plan_no' => $plan_no,
                'client_plan_id' => $client_plan_id
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
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string client_name Specifies the name of the client<br>string domain Specifies the domain<br>string address1 Specifies the number and street name<br>string address2 Specifies the floor number, building number, etc.<br>string city Specifies the city<br>string locality Specifies the locality<br>string state_prov Specifies the state or province<br>string country Specifies the country<br>string postal_code Specifies the postal code<br>string phone Specifies the phone number<br>string contact Specifies the contact<br>string contact_address1 Specifies the number and street name of the contact<br>string contact_address2 Specifies the floor number, building number, etc. of the contact<br>string contact_city Specifies the contact city<br>string contact_state Specifies the contact state<br>string contact_zip Specifies the contact zip code<br>string contact_phone Specifies the contact phone number<br>string contact_email Specifies the contact email address<br>string billing_contact Specifies the billing contact<br>string billing_address1 Specifies the number and street name of the billing contact<br>string billing_address2 Specifies the floor number, building number, etc. of the billing contact<br>string billing_city Specifies the billing city<br>string billing_state Specifies the billing state<br>string billing_zip Specifies the billing zip code<br>string billing_phone Specifies the billing phone number<br>string billing_email Specifies the billing email address<br>string contact_country Specifies the contact country<br>string contact_locality Specifies the contact locality<br>string billing_country Specifies the billing country<br>string billing_locality Specifies the billing locality
     */
    public function get_company_profile()
    {
        return $this->__ws_call('get_company_profile', Array(
                
        ));
    }

    /**
     * 
     * @param string $domain Specifies the domain
     * @param string $address1 Specifies the number and street name
     * @param string $address2 Specifies the floor number, building number, etc.
     * @param string $city Specifies the city
     * @param string $locality Specifies the locality
     * @param string $state_prov Specifies the state or province
     * @param string $country Specifies the country
     * @param string $postal_code Specifies the postal code
     * @param string $phone Specifies the phone number
     * @param string $contact Specifies the contact
     * @param string $contact_address1 Specifies the number and street name of the contact
     * @param string $contact_address2 Specifies the floor number, building number, etc. of the contact
     * @param string $contact_city Specifies the contact city
     * @param string $contact_state Specifies the contact state
     * @param string $contact_zip Specifies the contact zip code
     * @param string $contact_phone Specifies the contact phone number
     * @param string $contact_email Specifies the contact email address
     * @param string $billing_contact Specifies the billing contact
     * @param string $billing_address1 Specifies the number and street name of the billing contact
     * @param string $billing_address2 Specifies the floor number, building number, etc. of the billing contact
     * @param string $billing_city Specifies the billing city
     * @param string $billing_state Specifies the billing state
     * @param string $billing_zip Specifies the billing zip code
     * @param string $billing_phone Specifies the billing phone number
     * @param string $billing_email Specifies the billing email address
     * @param string $contact_country Specifies the contact country
     * @param string $contact_locality Specifies the contact locality
     * @param string $billing_country Specifies the billing country
     * @param string $billing_locality Specifies the billing locality
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string client_name Specifies the name of the client<br>string domain Specifies the domain<br>string address1 Specifies the number and street name<br>string address2 Specifies the floor number, building number, etc.<br>string city Specifies the city<br>string locality Specifies the locality<br>string state_prov Specifies the state or province<br>string country Specifies the country<br>string postal_code Specifies the postal code<br>string phone Specifies the phone number<br>string contact Specifies the contact<br>string contact_address1 Specifies the number and street name of the contact<br>string contact_address2 Specifies the floor number, building number, etc. of the contact<br>string contact_city Specifies the contact city<br>string contact_state Specifies the contact state<br>string contact_zip Specifies the contact zip code<br>string contact_phone Specifies the contact phone number<br>string contact_email Specifies the contact email address<br>string billing_contact Specifies the billing contact<br>string billing_address1 Specifies the number and street name of the billing contact<br>string billing_address2 Specifies the floor number, building number, etc. of the billing contact<br>string billing_city Specifies the billing city<br>string billing_state Specifies the billing state<br>string billing_zip Specifies the billing zip code<br>string billing_phone Specifies the billing phone number<br>string billing_email Specifies the billing email address<br>string contact_country Specifies the contact country<br>string contact_locality Specifies the contact locality<br>string billing_country Specifies the billing country<br>string billing_locality Specifies the billing locality
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
     * @param string $client_item_id Client defined unique identifier
     * @param string $currency_cd Specifies the currency code of Inventory item
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int item_no Specifies the Inventory item number<br>string client_item_id Client defined unique identifier<br>int item_type Item Type for the inventory item. Valid values are: 0 - Inventory Item, 1 - Months To Stack, 2 - Resource Item<br>string item_name Specifies the inventory item name<br>string item_desc Specifies description of Inventory item<br>int active_ind Specifies if inventory item is active or inactive. Valid values are: 0 - Inactive and 1 - Active<br>int service_no Specifies Service number for the Inventory item<br>string client_service_id Client defined unique identifier<br>int invoice_advancement_months Specifies months of invoice advancement for the Inventory item<br>int plan_no Specifies Master Plan number for the Inventory item<br>string client_plan_id Client defined unique identifier<br>string client_sku SKU specified by client for the inventory item<br>array pricing <br>string modify_price_ind Specifies if CSR&#039;s may modify Inventory item price. Valid values are: Y - Yes and N - No<br>double subunit_qty Subunit Quantity<br>string subunit_label Subunit Label<br>int days_to_expiry Specifies the number of days to expiration for resources on this SKU<br>array resources <br>int stock_level Specifies the stock level of the inventory item<br>array image <br>array supplemental_obj_fields 
     */
    public function get_inventory_item_details($item_no, $client_item_id, $currency_cd)
    {
        return $this->__ws_call('get_inventory_item_details', Array(
                'item_no' => $item_no,
                'client_item_id' => $client_item_id,
                'currency_cd' => $currency_cd
        ));
    }

    /**
     * Creates an inventory item for specified client
     * @param int $item_type Item Type for the inventory item. Valid values are: 0 - Inventory Item, 1 - Months To Stack (Deprecated), 2 - Resource Item
     * @param string $item_name Specifies the inventory item name
     * @param string $item_desc Specifies description of Inventory item
     * @param array $service 
     * @param string $client_sku SKU specified by client for the inventory item
     * @param string $currency_cd Specifies the currency code for Inventory item. It is case sensitive ( ex. usd will work but USD will not ) REST input arrays are &quot;|&quot; separated lists of a single data type
     * @param string $item_price Specifies the price for Inventory item for currencies.. REST input arrays are &quot;|&quot; separated lists of a single data type Count of value passed for the &#039;price_per_unit&#039; parameter should be the same as &#039;currency_cd&#039;.
     * @param string $client_item_id Specifies Client defined unique id for the item
     * @param int $active_ind Specifies if inventory item is active or inactive. Valid values are: 0 - Inactive and 1 - Active
     * @param int $invoice_advancement_months Specifies months of invoice advancement for the Inventory item
     * @param int $plan_no Specifies Master Plan number for the Inventory item
     * @param string $client_plan_id Specifies Client defined unique id for the plan
     * @param boolean $tax_inclusive_ind This flag denotes if a rate is inclusive of the taxes. Value of 1 means tax inclusive rates and a value of 0 (default) means tax exclusive rates.
     * @param string $modify_price_ind Specifies if CSR&#039;s may modify Inventory item price. Valid values are: Y - Yes and N - No
     * @param int $subunit_qty Subunit Quantity If item_type=0 and subunit_label is not null then this field is required
     * @param string $subunit_label Subunit Label If item_type=0 and quantity_per_item is not null then this field is required
     * @param int $days_to_expiry Specifies the number of days to expiration for resources on this SKU. If item_type=2 then this field is required
     * @param string $resource_type_no The assigned identifier for a resource
     * @param string $resource_units Number of units of resource
     * @param int $stock_level_track Specifies whether the stock level can be adjusted or not. Allowed values are 1 or 0
     * @param double $stock_level_adjust Specifies the number to adjust the stock level with
     * @param array $image 
     * @param array $parent_class 
     * @param array $supplemental_obj_field 
     * @param string $commodity_cd Commodity Code
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string item_no Specifies the Inventory item number<br>string currency_cd Specifies the currency code of Inventory item
     */
    public function create_inventory_item($item_type, $item_name, $item_desc, $service, $client_sku, $currency_cd, $item_price, $client_item_id = null, $active_ind = null, $invoice_advancement_months = null, $plan_no = null, $client_plan_id = null, $tax_inclusive_ind = null, $modify_price_ind = null, $subunit_qty = null, $subunit_label = null, $days_to_expiry = null, $resource_type_no = null, $resource_units = null, $stock_level_track = null, $stock_level_adjust = null, $image = null, $parent_class = null, $supplemental_obj_field = null, $commodity_cd = null)
    {
        return $this->__ws_call('create_inventory_item', Array(
                'item_type' => $item_type,
                'item_name' => $item_name,
                'item_desc' => $item_desc,
                'service' => $service,
                'client_sku' => $client_sku,
                'currency_cd' => $currency_cd,
                'item_price' => $item_price,
                'client_item_id' => $client_item_id,
                'active_ind' => $active_ind,
                'invoice_advancement_months' => $invoice_advancement_months,
                'plan_no' => $plan_no,
                'client_plan_id' => $client_plan_id,
                'tax_inclusive_ind' => $tax_inclusive_ind,
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
                'supplemental_obj_field' => $supplemental_obj_field,
                'commodity_cd' => $commodity_cd
        ));
    }

    /**
     * Update an existing inventory item
     * @param string $item_no Specifies the Inventory item number
     * @param string $item_name Specifies the inventory item name
     * @param string $item_desc Specifies description of Inventory item
     * @param string $client_item_id Specifies Client defined unique id for the item
     * @param int $service_no Specifies Service number for the Inventory item
     * @param string $client_service_id Specifies Client defined unique id for the service
     * @param string $currency_cd Specifies the currency code for Inventory item. It is case sensitive ( ex. usd will work but USD will not ) REST input arrays are &quot;|&quot; separated lists of a single data type
     * @param string $item_price Specifies the price for Inventory item for currencies.. REST input arrays are &quot;|&quot; separated lists of a single data type Count of value passed for the &#039;price_per_unit&#039; parameter should be the same as &#039;currency_cd&#039;.
     * @param int $active_ind Specifies if inventory item is active or inactive. Valid values are: 0 - Inactive and 1 - Active
     * @param int $invoice_advancement_months Specifies months of invoice advancement for the Inventory item
     * @param int $plan_no Specifies Master Plan number for the Inventory item
     * @param string $client_plan_id Specifies Client defined unique id for the plan
     * @param string $modify_price_ind Specifies if CSR&#039;s may modify Inventory item price. Valid values are: Y - Yes and N - No
     * @param int $subunit_qty Subunit Quantity If item_type=0 and subunit_label is not null then this field is required
     * @param string $subunit_label Subunit Label If item_type=0 and quantity_per_item is not null then this field is required
     * @param int $days_to_expiry Specifies the number of days to expiration for resources on this SKU
     * @param string $resource_type_no The assigned identifier for a resource. This should not be null if item_type = 2 REST input arrays are &quot;|&quot; separated lists of a single data type
     * @param string $resource_units Number of units of resource. This should not be null if item_type = 2 REST input arrays are &quot;|&quot; separated lists of a single data type
     * @param int $stock_level_track Specifies whether the stock level can be adjusted or not. Allowed values are 1 or 0
     * @param double $stock_level_adjust Specifies the number to adjust the stock level with
     * @param array $image 
     * @param array $parent_class 
     * @param array $supplemental_obj_field 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string item_no Specifies the Inventory item number<br>string currency_cd Specifies the currency code of Inventory item
     */
    public function update_inventory_item($item_no, $item_name, $item_desc, $client_item_id, $service_no, $client_service_id, $currency_cd, $item_price, $active_ind = null, $invoice_advancement_months = null, $plan_no = null, $client_plan_id = null, $modify_price_ind = null, $subunit_qty = null, $subunit_label = null, $days_to_expiry = null, $resource_type_no = null, $resource_units = null, $stock_level_track = null, $stock_level_adjust = null, $image = null, $parent_class = null, $supplemental_obj_field = null)
    {
        return $this->__ws_call('update_inventory_item', Array(
                'item_no' => $item_no,
                'item_name' => $item_name,
                'item_desc' => $item_desc,
                'client_item_id' => $client_item_id,
                'service_no' => $service_no,
                'client_service_id' => $client_service_id,
                'currency_cd' => $currency_cd,
                'item_price' => $item_price,
                'active_ind' => $active_ind,
                'invoice_advancement_months' => $invoice_advancement_months,
                'plan_no' => $plan_no,
                'client_plan_id' => $client_plan_id,
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
     * @param string $class_name Specifies the class name
     * @param string $class_desc Specifies the class description
     * @param int $active_ind Specifies whether the class is active or not
     * @param string $client_inventory_class_id Client defined unique identifier
     * @param array $parent_class 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string class_no Specifies the class number for the newly created item class
     */
    public function create_item_class($class_name, $class_desc = null, $active_ind = null, $client_inventory_class_id = null, $parent_class = null)
    {
        return $this->__ws_call('create_item_class', Array(
                'class_name' => $class_name,
                'class_desc' => $class_desc,
                'active_ind' => $active_ind,
                'client_inventory_class_id' => $client_inventory_class_id,
                'parent_class' => $parent_class
        ));
    }

    /**
     * 
     * @param string $class_no 
     * @param string $class_name Specifies the class name
     * @param string $client_inventory_class_id Client defined unique identifier
     * @param string $class_desc Specifies the class description
     * @param int $active_ind Specifies whether the class is active or not
     * @param array $parent_class 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string class_no Specifies the class number for the item class
     */
    public function edit_item_class($class_no, $class_name, $client_inventory_class_id, $class_desc = null, $active_ind = null, $parent_class = null)
    {
        return $this->__ws_call('edit_item_class', Array(
                'class_no' => $class_no,
                'class_name' => $class_name,
                'client_inventory_class_id' => $client_inventory_class_id,
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
     * @param string $client_service_id Client defined unique id
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int service_no Specifies the Service number<br>string client_service_id Client defined unique id<br>string service_name Specifies the service name<br>string service_type Specifies Service types. Valid values are: &quot;Usage Based&quot;, &quot;Recurring&quot;, &quot;Activation&quot;<br>string gl_cd Specifies chart of access code<br>string taxable_ind Indicates If The service has tax associated with it [can be 0 or 1]; 1 indicates taxable and 0 indicates non taxable.<br>string tax_group Specifies tax group associated with service. This will be null if taxable_ind is set to 0<br>string client_tax_group_id Client defined unique identifier<br>int usage_type Specifies usage type associated with service<br>string commodity_cd Commodity Code
     */
    public function get_service_details($service_no, $client_service_id)
    {
        return $this->__ws_call('get_service_details', Array(
                'service_no' => $service_no,
                'client_service_id' => $client_service_id
        ));
    }

    /**
     * Retrieve details on specified service that is on a specified plan
     * @param int $service_no Specifies the Service number
     * @param string $client_service_id Client defined unique id
     * @param int $plan_no Plan Number
     * @param string $client_plan_id Client defined unique id
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int plan_no Plan Number<br>string client_plan_id Client defined unique id<br>string currency_cd Specifies the currency code of plan<br>int service_no Specifies the Service number<br>string service_name Specifies the service name<br>string service_type Specifies Service types. Valid values are: &quot;Usage Based&quot;, &quot;Recurring&quot;, &quot;Activation&quot;<br>string client_service_id Client defined unique id<br>int taxable_ind Indicates If The service has tax associated with it [can be 0 or 1]; 1 indicates taxable and 0 indicates non taxable.<br>string tax_group Specifies tax group associated with service. This will be null if taxable_ind is set to 0<br>string client_tax_group_id Client defined unique identifier<br>string gl_cd Specifies chart of access code<br>int usage_type Specifies usage type associated with service<br>string rate_type Specifies the rate type. Valid values are:&#039;Flat Rate&#039; and &#039;Tiered Pricing&#039;<br>array rate_schedules <br>array parent_plans <br>array parent_plan_ids <br>array exclusion_plans <br>array supplemental_obj_fields <br>string commodity_cd Commodity Code
     */
    public function get_plan_service_details($service_no, $client_service_id, $plan_no, $client_plan_id)
    {
        return $this->__ws_call('get_plan_service_details', Array(
                'service_no' => $service_no,
                'client_service_id' => $client_service_id,
                'plan_no' => $plan_no,
                'client_plan_id' => $client_plan_id
        ));
    }

    /**
     * Creates a new service specific to client
     * @param string $service_name Specifies the service name
     * @param string $service_type Specifies Service types. Valid values are: &quot;Usage Based&quot;, &quot;Recurring&quot;, &quot;Activation&quot;
     * @param string $gl_cd Specifies chart of access code
     * @param string $taxable_ind Indicates If The service has tax associated with it [can be 0 or 1]; 1 indicates taxable and 0 indicates non taxable.
     * @param string $tax_group Specifies tax group associated with service. This will be null if taxable_ind is set to 0. If taxable_ind is 1 then this field is required
     * @param string $usage_type Specifies usage type associated with service. If service_type is Usage then this field is required.
     * @param string $client_service_id Client defined unique id
     * @param array $supplemental_obj_field 
     * @param string $commodity_cd Commodity Code
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int service_no Aria-assigned unique identifier for service
     */
    public function create_service($service_name, $service_type, $gl_cd, $taxable_ind = null, $tax_group = null, $usage_type = null, $client_service_id = null, $supplemental_obj_field = null, $commodity_cd = null)
    {
        return $this->__ws_call('create_service', Array(
                'service_name' => $service_name,
                'service_type' => $service_type,
                'gl_cd' => $gl_cd,
                'taxable_ind' => $taxable_ind,
                'tax_group' => $tax_group,
                'usage_type' => $usage_type,
                'client_service_id' => $client_service_id,
                'supplemental_obj_field' => $supplemental_obj_field,
                'commodity_cd' => $commodity_cd
        ));
    }

    /**
     * 
     * @param int $service_no Specifies the service number
     * @param string $service_name Specifies the service name
     * @param string $service_type Specifies Service types. Valid values are: &quot;Usage Based&quot;, &quot;Recurring&quot;, &quot;Activation&quot;
     * @param string $client_service_id Client defined unique id
     * @param string $gl_cd Specifies chart of access code
     * @param string $taxable_ind Indicates If The service has tax associated with it [can be 0 or 1]; 1 indicates taxable and 0 indicates non taxable.
     * @param string $tax_group Specifies tax group associated with service. This will be null if taxable_ind is set to 0
     * @param string $usage_type Specifies usage type associated with service. If service_type is Usage then this field is required.
     * @param string $commodity_cd Commodity Code
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int service_no Specifies the service number
     */
    public function update_service($service_no, $service_name, $service_type, $client_service_id, $gl_cd = null, $taxable_ind = null, $tax_group = null, $usage_type = null, $commodity_cd = null)
    {
        return $this->__ws_call('update_service', Array(
                'service_no' => $service_no,
                'service_name' => $service_name,
                'service_type' => $service_type,
                'client_service_id' => $client_service_id,
                'gl_cd' => $gl_cd,
                'taxable_ind' => $taxable_ind,
                'tax_group' => $tax_group,
                'usage_type' => $usage_type,
                'commodity_cd' => $commodity_cd
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
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array coupons 
     */
    public function get_coupons()
    {
        return $this->__ws_call('get_coupons', Array(
                
        ));
    }

    /**
     * Returns details of specified coupon
     * @param string $coupon_cd Coupon Code
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string coupon_cd Specifies Coupon Code<br>string coupon_desc Specifies Coupon description<br>string coupon_msg Specifies Coupon Message<br>int status_ind Specifies Coupon status. Valid values are [0, 1]. 1 indicates coupon is Active. 0 indicates coupon Inactive.<br>int no_of_uses Specifies number of uses after which coupon get expires. Related to coupon expiry detail.<br>string start_date Specifies start date. The date is in the format &quot;yyyy-mm-dd&quot;Related to coupon expiry detail<br>string end_date Specifies start date. The date is in the format &quot;yyyy-mm-dd&quot;Related to coupon expiry detail<br>array credit_template <br>array discount_rule <br>array discount_bundle 
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
     * @param int $status_ind Specifies Coupon status. Valid values are [0, 1]. 1 indicates coupon is Active. 0 indicates coupon Inactive.
     * @param string $start_date Specifies start date. The date is in the format &quot;yyyy-mm-dd&quot;Related to coupon expiry detail
     * @param string $end_date Specifies start date. The date is in the format &quot;yyyy-mm-dd&quot;Related to coupon expiry detail
     * @param string $coupon_desc Specifies Coupon description
     * @param string $coupon_msg Specifies Coupon Message
     * @param int $no_of_uses Specifies number of uses after which coupon get expires. Related to coupon expiry detail.
     * @param array $template 
     * @param array $existing_template 
     * @param array $existing_template_id 
     * @param array $discount_rule 
     * @param array $existing_discount_rule 
     * @param array $existing_discount_rule_id 
     * @param array $discount_bundle 
     * @param array $existing_discount_bundle 
     * @param array $existing_discount_bundle_id 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string coupon_cd Coupon Code
     */
    public function create_coupon($coupon_cd, $status_ind, $start_date, $end_date, $coupon_desc = null, $coupon_msg = null, $no_of_uses = null, $template = null, $existing_template = null, $existing_template_id = null, $discount_rule = null, $existing_discount_rule = null, $existing_discount_rule_id = null, $discount_bundle = null, $existing_discount_bundle = null, $existing_discount_bundle_id = null)
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
                'existing_template' => $existing_template,
                'existing_template_id' => $existing_template_id,
                'discount_rule' => $discount_rule,
                'existing_discount_rule' => $existing_discount_rule,
                'existing_discount_rule_id' => $existing_discount_rule_id,
                'discount_bundle' => $discount_bundle,
                'existing_discount_bundle' => $existing_discount_bundle,
                'existing_discount_bundle_id' => $existing_discount_bundle_id
        ));
    }

    /**
     * Update an existing coupon
     * @param string $coupon_cd Specifies Coupon Code
     * @param int $status_ind Specifies Coupon status. Valid values are [0, 1]. 1 indicates coupon is Active. 0 indicates coupon Inactive.
     * @param string $start_date Specifies start date. The date is in the format &quot;yyyy-mm-dd&quot;. Related to coupon expiry detail.
     * @param string $end_date Specifies end date. The date is in the format &quot;yyyy-mm-dd&quot;. Related to coupon expiry detail.
     * @param string $coupon_desc Specifies Coupon description
     * @param string $coupon_msg Specifies Coupon Message
     * @param int $no_of_uses Specifies number of uses after which coupon get expires. Related to coupon expiry detail.
     * @param array $template Specifies existing templates to be associated with the coupon. REST input arrays should passed in the following format: existing_template[0]=1243&amp;existing_template[1]=1002 etc.
     * @param array $existing_template 
     * @param array $existing_template_id 
     * @param array $discount_rule 
     * @param array $existing_discount_rule 
     * @param array $existing_discount_rule_id 
     * @param array $discount_bundle 
     * @param array $existing_discount_bundle 
     * @param array $existing_discount_bundle_id 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string coupon_cd Coupon code
     */
    public function update_coupon($coupon_cd, $status_ind, $start_date, $end_date, $coupon_desc = null, $coupon_msg = null, $no_of_uses = null, $template = null, $existing_template = null, $existing_template_id = null, $discount_rule = null, $existing_discount_rule = null, $existing_discount_rule_id = null, $discount_bundle = null, $existing_discount_bundle = null, $existing_discount_bundle_id = null)
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
                'existing_template' => $existing_template,
                'existing_template_id' => $existing_template_id,
                'discount_rule' => $discount_rule,
                'existing_discount_rule' => $existing_discount_rule,
                'existing_discount_rule_id' => $existing_discount_rule_id,
                'discount_bundle' => $discount_bundle,
                'existing_discount_bundle' => $existing_discount_bundle,
                'existing_discount_bundle_id' => $existing_discount_bundle_id
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
     * @param int $credit_template_no Specifies the recurring credit template number.
     * @param string $client_credit_template_id Client defined unique id
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int recurring_credit_template_no Specifies currently assigned recurring credit template associated with coupon. All of the remaining parameters are dependent on this.<br>string credit_template_name Recurring credit template name<br>string client_credit_template_id Client defined unique id<br>int eligible_plan_no Eligible service plan number. If eligible_plan_no is present then eligible_service_no is also set and vice-versa. This means that coupon can only be applied against a specific type of charge. But If both values are null then it means that coupon can be applied against any change.<br>string eligible_client_plan_id Specifies Client defined unique id<br>int eligible_service_no Eligible service number<br>string eligible_client_service_id Specifies Client defined unique id<br>array eligible_service_types Service type code for which the credit is applicable.<br>int no_of_credits This parameter is related to information about generation frequency. i.e. Number of credits If this value is set along with time_between_credits, then it means that generation frequency is multiple.<br>int time_between_credits Time interval between credits<br>string discount_type Specifies discount type as &#039;Flat&#039; or &#039;Percentage&#039;. Valid values are [1 or 2] 1 - Indicates flat rate 2 - Indicates percentage<br>double discount_amt Specifies discount amount<br>int percentage_plan_no Specifies Percentage plan number. This value is only set if discount_type is 2 i.e. discount type is Percentage<br>string percentage_client_plan_id Specifies Client defined unique id<br>int percentage_service_no Specifies Percentage service number. This value is only set if discount_type is 2 i.e. discount type is Percentage<br>string percentage_client_service_id Specifies Client defined unique id<br>int alt_service_no Specifies Alternative service number. If this value is null, then for coupon can be Service code to use is standard<br>string alt_client_service_id Specifies Client defined unique id<br>array coupons 
     */
    public function get_recurring_credit_template_details($credit_template_no, $client_credit_template_id)
    {
        return $this->__ws_call('get_recurring_credit_template_details', Array(
                'credit_template_no' => $credit_template_no,
                'client_credit_template_id' => $client_credit_template_id
        ));
    }

    /**
     * 
     * @param string $credit_template_name Recurring credit template name. If both an existing template name and a new template name is provided, the new template name will be used to create a new template.
     * @param int $discount_type Specifies discount type. Valid values are [1 or 2]. 1 - Indicates flat rate, 2 - Indicates percentage.
     * @param double $discount_amt Specifies discount amount. If discount_type is set to 1, then this range of valid values of this parameter is &gt; 0 to 9999, but if it&#039;s set to &quot;2&quot; then its range is &gt; 0 to 100.
     * @param int $no_of_credits This parameter is related to information about generation frequency. i.e. Number of credits If this value is set along with time_between_credits, then it means that generation frequency is multiple.
     * @param int $credit_interval_months Time interval between credits in months
     * @param int $eligible_plan_no Eligible service plan number. If eligible_plan_no is present then eligible_service_no is also set and vice-versa. This means that coupon can only be applied against a specific type of charge. But If both values are null then it means that coupon can be applied against any change.
     * @param string $eligible_client_plan_id Specifies Client defined unique id
     * @param int $eligible_service_no Eligible service number
     * @param string $eligible_client_service_id Specifies Client defined unique id
     * @param array $eligible_service_types Service type code for which the credit is applicable
     * @param int $percentage_plan_no Specifies Percentage plan number. This value is only set if discount_type is 2 i.e. discount type is Percentage
     * @param string $percentage_client_plan_id Specifies Client defined unique id
     * @param int $percentage_service_no Specifies Percentage service number. This value is only set if discount_type is 2 i.e. discount type is Percentage
     * @param string $percentage_client_service_id Specifies Client defined unique id
     * @param int $alt_service_no Specifies Alternative service number. If this value is null, then for coupon can be Service code to use is standard
     * @param string $alt_client_service_id Specifies Client defined unique id
     * @param string $client_credit_template_id Client defined unique id
     * @param array $coupon 
     * @param array $existing_coupon 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string credit_template_no Specifies the recurring credit template number.
     */
    public function create_credit_template($credit_template_name, $discount_type, $discount_amt, $no_of_credits, $credit_interval_months, $eligible_plan_no = null, $eligible_client_plan_id = null, $eligible_service_no = null, $eligible_client_service_id = null, $eligible_service_types = null, $percentage_plan_no = null, $percentage_client_plan_id = null, $percentage_service_no = null, $percentage_client_service_id = null, $alt_service_no = null, $alt_client_service_id = null, $client_credit_template_id = null, $coupon = null, $existing_coupon = null)
    {
        return $this->__ws_call('create_credit_template', Array(
                'credit_template_name' => $credit_template_name,
                'discount_type' => $discount_type,
                'discount_amt' => $discount_amt,
                'no_of_credits' => $no_of_credits,
                'credit_interval_months' => $credit_interval_months,
                'eligible_plan_no' => $eligible_plan_no,
                'eligible_client_plan_id' => $eligible_client_plan_id,
                'eligible_service_no' => $eligible_service_no,
                'eligible_client_service_id' => $eligible_client_service_id,
                'eligible_service_types' => $eligible_service_types,
                'percentage_plan_no' => $percentage_plan_no,
                'percentage_client_plan_id' => $percentage_client_plan_id,
                'percentage_service_no' => $percentage_service_no,
                'percentage_client_service_id' => $percentage_client_service_id,
                'alt_service_no' => $alt_service_no,
                'alt_client_service_id' => $alt_client_service_id,
                'client_credit_template_id' => $client_credit_template_id,
                'coupon' => $coupon,
                'existing_coupon' => $existing_coupon
        ));
    }

    /**
     * 
     * @param string $credit_template_no Specifies the recurring credit template number.
     * @param string $credit_template_name Recurring credit template name. If both an existing template name and a new template name is provided, the new template name will be used to create a new template.
     * @param int $discount_type Specifies discount type. Valid values are [1 or 2]. 1 - Indicates flat rate, 2 - Indicates percentage.
     * @param double $discount_amt Specifies discount amount. If discount_type is set to 1, then this range of valid values of this parameter is &gt; 0 to 9999, but if it&#039;s set to &quot;2&quot; then its range is &gt; 0 to 100.
     * @param int $no_of_credits This parameter is related to information about generation frequency. i.e. Number of credits If this value is set along with time_between_credits, then it means that generation frequency is multiple.
     * @param int $credit_interval_months Time interval between credits in months
     * @param string $client_credit_template_id Client Defined unique id
     * @param int $eligible_plan_no Eligible service plan number. If eligible_plan_no is present then eligible_service_no is also set and vice-versa. This means that coupon can only be applied against a specific type of charge. But If both values are null then it means that coupon can be applied against any change.
     * @param string $eligible_client_plan_id Specifies Client defined unique id
     * @param int $eligible_service_no Eligible service number
     * @param string $eligible_client_service_id Specifies Client defined unique id
     * @param array $eligible_service_types Service type code for which the credit is applicable
     * @param int $percentage_plan_no Specifies Percentage plan number. This value is only set if discount_type is 2 i.e. discount type is Percentage
     * @param string $percentage_client_plan_id Specifies Client defined unique id
     * @param int $percentage_service_no Specifies Percentage service number. This value is only set if discount_type is 2 i.e. discount type is Percentage
     * @param string $percentage_client_service_id Specifies Client defined unique id
     * @param int $alt_service_no Specifies Alternative service number. If this value is null, then for coupon can be Service code to use is standard
     * @param string $alt_client_service_id Specifies Client defined unique id
     * @param array $coupon 
     * @param array $existing_coupon 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string credit_template_no Specifies the recurring credit template number.
     */
    public function update_credit_template($credit_template_no, $credit_template_name, $discount_type, $discount_amt, $no_of_credits, $credit_interval_months, $client_credit_template_id, $eligible_plan_no = null, $eligible_client_plan_id = null, $eligible_service_no = null, $eligible_client_service_id = null, $eligible_service_types = null, $percentage_plan_no = null, $percentage_client_plan_id = null, $percentage_service_no = null, $percentage_client_service_id = null, $alt_service_no = null, $alt_client_service_id = null, $coupon = null, $existing_coupon = null)
    {
        return $this->__ws_call('update_credit_template', Array(
                'credit_template_no' => $credit_template_no,
                'credit_template_name' => $credit_template_name,
                'discount_type' => $discount_type,
                'discount_amt' => $discount_amt,
                'no_of_credits' => $no_of_credits,
                'credit_interval_months' => $credit_interval_months,
                'client_credit_template_id' => $client_credit_template_id,
                'eligible_plan_no' => $eligible_plan_no,
                'eligible_client_plan_id' => $eligible_client_plan_id,
                'eligible_service_no' => $eligible_service_no,
                'eligible_client_service_id' => $eligible_client_service_id,
                'eligible_service_types' => $eligible_service_types,
                'percentage_plan_no' => $percentage_plan_no,
                'percentage_client_plan_id' => $percentage_client_plan_id,
                'percentage_service_no' => $percentage_service_no,
                'percentage_client_service_id' => $percentage_client_service_id,
                'alt_service_no' => $alt_service_no,
                'alt_client_service_id' => $alt_client_service_id,
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
     * Creates a discount rule
     * @param string $label Specifies Discount Rule Name
     * @param string $rule_id Specifies client rule id for Discount Rule
     * @param string $description Specifies description for the Discount Rule
     * @param string $ext_description Specifies description that can be added to invoice/statment and is visible to account holder.
     * @param int $flat_percent_ind Specifies whether the discount is going to be flat or percentage based.
     * @param double $amount Specifies the amount of discount.
     * @param string $currency Specifies the currency code of the rule
     * @param string $duration_type_ind Specifies the duration type. Valid values are [ U, M] for uses and months
     * @param string $inline_offset_ind Specifies how the discount will be displayed in the invoice.Valid values are [I, O]
     * @param int $service_code_to_use Specifies which service code to use. Valid values are [0,1] where 0 uses the same service as the &#039;charge&#039; line item and 1 uses a specific service
     * @param int $scope_no Specifies the charges eligible for the discount.
     * @param int $max_applicable_months Specifies the duration of the discount in months.
     * @param int $max_applications_per_acct Specifies the number of times the discount can be applied.
     * @param int $alt_service_no_2_apply Specifies the specific service code to use.
     * @param string $alt_service_id_2_apply Specifies the specific service code to use.
     * @param string $applicable_trans_scope Specifies whether the discount is applied to each or all transactions.
     * @param array $plan_no Aria-assigned unique plan identifier
     * @param array $client_plan_id 
     * @param array $service_no 
     * @param array $client_service_id 
     * @param array $item_no 
     * @param array $client_item_id 
     * @param string $use_all_or_nth_subs_rule Specifies whether to apply discount when &#039;all&#039; the plans are under the account or &#039;some&#039; of the plans are are under the account.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string rule_no Rule No
     */
    public function create_discount_rule($label, $rule_id, $description, $ext_description, $flat_percent_ind, $amount, $currency, $duration_type_ind, $inline_offset_ind, $service_code_to_use, $scope_no, $max_applicable_months = null, $max_applications_per_acct = null, $alt_service_no_2_apply = null, $alt_service_id_2_apply = null, $applicable_trans_scope = null, $plan_no = null, $client_plan_id = null, $service_no = null, $client_service_id = null, $item_no = null, $client_item_id = null, $use_all_or_nth_subs_rule = null)
    {
        return $this->__ws_call('create_discount_rule', Array(
                'label' => $label,
                'rule_id' => $rule_id,
                'description' => $description,
                'ext_description' => $ext_description,
                'flat_percent_ind' => $flat_percent_ind,
                'amount' => $amount,
                'currency' => $currency,
                'duration_type_ind' => $duration_type_ind,
                'inline_offset_ind' => $inline_offset_ind,
                'service_code_to_use' => $service_code_to_use,
                'scope_no' => $scope_no,
                'max_applicable_months' => $max_applicable_months,
                'max_applications_per_acct' => $max_applications_per_acct,
                'alt_service_no_2_apply' => $alt_service_no_2_apply,
                'alt_service_id_2_apply' => $alt_service_id_2_apply,
                'applicable_trans_scope' => $applicable_trans_scope,
                'plan_no' => $plan_no,
                'client_plan_id' => $client_plan_id,
                'service_no' => $service_no,
                'client_service_id' => $client_service_id,
                'item_no' => $item_no,
                'client_item_id' => $client_item_id,
                'use_all_or_nth_subs_rule' => $use_all_or_nth_subs_rule
        ));
    }

    /**
     * Creates a discount bundle
     * @param string $bundle_name Specifies the name for the discount bundle.
     * @param string $bundle_id Specifies bundle id for discount Bundle
     * @param string $bundle_description Specifies description for the discount Bundle
     * @param string $allow_overlap_ind Specifies if the rules in the bundle can overlap or not.
     * @param array $rules 
     * @param array $rule_ids 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string rule_no Rule No
     */
    public function create_discount_bundle($bundle_name, $bundle_id, $bundle_description, $allow_overlap_ind, $rules = null, $rule_ids = null)
    {
        return $this->__ws_call('create_discount_bundle', Array(
                'bundle_name' => $bundle_name,
                'bundle_id' => $bundle_id,
                'bundle_description' => $bundle_description,
                'allow_overlap_ind' => $allow_overlap_ind,
                'rules' => $rules,
                'rule_ids' => $rule_ids
        ));
    }

    /**
     * Lists all the discount bundles for the client
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int bundle_no Specifies the no for the discount bundle.<br>string bundle_name Specifies the name for the discount bundle.<br>string bundle_id Specifies bundle id for discount Bundle<br>string description Specifies description for the discount Bundle
     */
    public function get_discount_bundles()
    {
        return $this->__ws_call('get_discount_bundles', Array(
                
        ));
    }

    /**
     * Lists all the details of a given discount bundle
     * @param int $bundle_no Specifies the bundle number
     * @param string $bundle_id Specifies bundle id for discount Bundle
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int bundle_no Specifies the no for the discount bundle.<br>string bundle_name Specifies the name for the discount bundle.<br>string bundle_id Specifies bundle id for discount Bundle<br>string description Specifies description for the discount Bundle<br>string allow_overlap_ind Specifies if the rules in the bundle can overlap or not.<br>array rules <br>array rule_ids 
     */
    public function get_discount_bundle_details($bundle_no, $bundle_id)
    {
        return $this->__ws_call('get_discount_bundle_details', Array(
                'bundle_no' => $bundle_no,
                'bundle_id' => $bundle_id
        ));
    }

    /**
     * Lists all the discount rules for the client
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int rule_no Specifies the no for the discount rule.<br>string rule_id Specifies client rule id for Discount Rule<br>string description Specifies description for the Discount Rule<br>string ext_description Specifies description that can be added to invoice/statment and is visible to account holder.<br>int flat_percent_ind Specifies whether the discount is going to be flat or percentage based.<br>double amount Specifies the amount of discount.<br>string currency Specifies the currency code of the rule.
     */
    public function get_discount_rules()
    {
        return $this->__ws_call('get_discount_rules', Array(
                
        ));
    }

    /**
     * Lists all the details of a given discount rule
     * @param int $rule_no Specifies the rule number
     * @param string $client_rule_id Client defined unique identifier
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int rule_no Specifies the no for the discount rule.<br>string rule_id Specifies client rule id for Discount Rule<br>string description Specifies description for the Discount Rule<br>string ext_description Specifies description that can be added to invoice/statment and is visible to account holder.<br>int flat_percent_ind Specifies whether the discount is going to be flat or percentage based.<br>double amount Specifies the amount of discount.<br>string currency Specifies the currency code of the rule<br>string duration_type_ind Specifies the duration type. Valid values are [ U, M] for uses and months<br>int max_applicable_months Specifies the duration of the discount in months.<br>int max_applications_per_acct Specifies the number of times the discount can be applied.<br>string inline_offset_ind Specifies how the discount will be displayed in the invoice.<br>int service_code_to_use Specifies which service code to use.<br>int alt_service_no_2_apply Specifies the specific service code to use.<br>string alt_service_id_2_apply Specifies the client defined id for specific service code to use.<br>int scope_no Specifies the charges eligible for the discount.<br>array plan_no Aria-assigned unique plan identifier<br>array client_plan_id <br>array service_no <br>array client_service_id <br>array item_no <br>array client_item_id 
     */
    public function get_discount_rule_details($rule_no, $client_rule_id)
    {
        return $this->__ws_call('get_discount_rule_details', Array(
                'rule_no' => $rule_no,
                'client_rule_id' => $client_rule_id
        ));
    }

    /**
     * Deletes the rules.
     * @param array $rule_nos Specifies the rule numbers to be deleted. Eg rule_nos[0]=10012341&amp;rule_nos[1]=10023432 etc
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function delete_rules($rule_nos = null)
    {
        return $this->__ws_call('delete_rules', Array(
                'rule_nos' => $rule_nos
        ));
    }

    /**
     * Deletes the bundles.
     * @param array $bundle_nos Specifies the bundle numbers to be deleted. Eg bundle_nos[0]=10012341&amp;bundle_nos[1]=10023432 etc
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function delete_bundles($bundle_nos = null)
    {
        return $this->__ws_call('delete_bundles', Array(
                'bundle_nos' => $bundle_nos
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
     * @param int $plan_no Plan Number
     * @param string $client_plan_id Client defined unique identifier
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int plan_no Plan Number<br>string client_plan_id Client defined unique identifier<br>string plan_name Plan Name<br>int plan_level Plan Level. [can be 0 or 1]; 0 - Master plan 1 - indicates Supplemental Plan<br>string plan_type Specifies Plan Type. Valid values are [ Recurring, Free, Pre-paid, Unknown ]<br>string plan_description Specifies plan description<br>array plan_groups <br>array plan_group_ids <br>string currency_cd Specifies the currency code of plan<br>string billing_interval Billing Interval [ can be either of 1, 3, 6 or 12 ) 1 - Monthly 3 - Quarterly 6 - Semi-Annually 12 - Annually<br>string usage_billing_interval Usage billing Interval [ can be either of 1, 3, 6, 12 or custom ) 1 - Monthly 3 - Quarterly 6 - Semi-Annually 12 - Annually. For custom the user can provide any number but not greater than 36 months. Also the usage billing interval cannot be greater than the plan billing_interval<br>int active_ind Specifies if inventory item is active or inactive. Valid values are: 0 - Inactive and 1 - Active<br>string rollover_months Specifies rollover months. Valid values are from 0 to 24<br>int rollover_plan_no Plan number<br>string rollover_client_plan_id Client defined identifier for rollover plan number<br>string allow_child_accounts Specifies whether a plan can have child accounts or not. Valid values are &quot;1&quot; or &quot;0&quot; 1 - Yes 0 - No. The parameter has been depreciated. Value will be overrided to 1<br>int dunning_plan_no Specifies dunning plan associated with this plan<br>string dunning_client_plan_id Specifies client defined identifier of the dunning plan associated with this plan<br>int free_trial_type Specifies free trial duration.Valid values are : &quot;days&quot; or &quot;months&quot;<br>int free_trial_duration Specifies free trial duration.Valid values are from 0 to 99<br>int initial_free_months Specifies initial free month. Valid values are : 1 to 12.<br>int acct_status_cd Specifies the status of an account when the plan is assigned to a account. Valid values are ( 1- Active, 61 - Active non-billable, 41 - Active trial, 31- Installation pending, 99 - Permanent, 32- Registered pending activation )<br>int rollover_status_days Specifies the number of days the newly created account will remain in its initial status. Valid value are 1 through 28<br>int rollover_status_cd Specifies the status the account will be in after its initial status. Valid values are ( 1 -&gt; Active, 99-&gt;Permanent, -1 -&gt; suspened, -3 -&gt; terminated)<br>int template_no Specifies invoice template class associated with master plan<br>string template_id Specifies client defined identifier for the invoice template class associated with master plan<br>int plan_cancel_min_month Specifies the minimum term months for cancellation service<br>string how_to_apply_min_fee Specifies when to apply min fee. Valid values are 0 which means &#039;All Invoices&#039; and 1 which means &#039;After first invoice&#039;.<br>string is_deletable Specifies whether or not this plan can be deleted<br>array services <br>array resources <br>array parent_plans <br>array parent_plan_ids <br>array exclusion_plans <br>array supplemental_obj_fields <br>array surcharges <br>string proration_invoice_timing_cd Specifies whether to create a separate invoice for prorated charges immediately, or defer to the next anniversary date.
     */
    public function get_plan_details($plan_no, $client_plan_id)
    {
        return $this->__ws_call('get_plan_details', Array(
                'plan_no' => $plan_no,
                'client_plan_id' => $client_plan_id
        ));
    }

    /**
     * Creates a service plan for specified client
     * @param string $plan_name Specifies Plan Name
     * @param string $plan_description Specifies plan description
     * @param string $plan_type Specifies Plan Type. Valid values are [ &#039;Master Recurring Plan&#039;, &#039;Master Pre-paid Plan&#039;, &#039;Master Free Plan&#039;, &#039;Supplemental Recurring Plan&#039;, &#039;Supplemental Free Plan&#039;]
     * @param string $currency Specifies the currency code of plan
     * @param string $billing_interval Billing Interval [ can be either of 1, 3, 6 or 12 ) 1 - Monthly 3 - Quarterly 6 - Semi-Annually 12 - Annually
     * @param string $client_plan_id Client defined unique identifier
     * @param array $plan_group 
     * @param array $plan_group_id 
     * @param string $usage_billing_interval Usage billing Interval [ can be either of 1, 3, 6, 12 or custom ) 1 - Monthly 3 - Quarterly 6 - Semi-Annually 12 - Annually. For custom the user can provide any number but not greater than 36 months. Also the usage billing interval cannot be greater than the plan billing_interval
     * @param int $active Specifies if inventory item is active or inactive. Valid values are: 0 - Inactive and 1 - Active
     * @param string $rollover_months Specifies rollover months. Valid values are from 0 to 24
     * @param int $rollover_plan_no Rollover Plan number
     * @param string $rollover_client_plan_id Client defined unique identifier
     * @param int $initial_free_months Specifies initial free month. Valid values are : 1 to 12.
     * @param int $acct_status_cd Specifies the status of an account when the plan is assigned to a account. Valid values are ( 1- Active, 61 - Active non-billable, 41 - Active trial, 31- Installation pending, 99 - Permanent, 32- Registered pending activation )
     * @param int $rollover_status_days Specifies the number of days the newly created account will remain in its initial status. Valid value are 1 through 28
     * @param int $rollover_status_cd Specifies the status the account will be in after its initial status. Valid values are ( 1 -&gt; Active, 99-&gt;Permanent, -1 -&gt; suspened, -3 -&gt; terminated)
     * @param int $dunning_plan_no Specifies dunning plan associated with this plan
     * @param string $dunning_client_plan_id Client defined unique identifier
     * @param int $template_no Specifies invoice template class associated with master plan
     * @param string $client_email_template_id Client defined unique identifier.
     * @param string $apply_cancellation Specifies whether to apply cancellation or not. Valid values: Yes or No. If marked as &#039;Yes&#039; then should also provide at least one cancellation service
     * @param int $plan_cancel_min_month Specifies the minimum term months for cancellation service
     * @param string $apply_minimum_fee Specifies whether to apply minimum fee or not. Valid values: Yes or No. If marked as &#039;Yes&#039; then should also provide at least one minimum fee service.
     * @param string $how_to_apply_minimum_fee Specifies when to apply min fee. Valid values are 0 which means &#039;All Invoices&#039; and 1 which means &#039;After first invoice&#039;.
     * @param array $schedule 
     * @param array $service 
     * @param array $resource 
     * @param int $arc_service_no Specifies one of the recurring service for the plan to which the resource is being applied
     * @param array $parent_plans 
     * @param array $parent_client_plan_ids 
     * @param array $exclusion_plans 
     * @param array $supplemental_obj_field 
     * @param boolean $template_ind This flag is used to create a plan template. Value of 1 creates the plan as a template. Value of 0 (default) creates a regular plan.
     * @param array $child_plans 
     * @param string $notification_template_group_no This field is used to associate an existing notification template group to the plan.
     * @param string $credit_note_template_no This field is used to associate an existing credit note template to the plan.
     * @param array $surcharge_no 
     * @param array $client_surcharge_id 
     * @param string $proration_invoice_timing_cd Determines whether to create a separate invoice for prorated charges immediately, or defer to the next anniversary date.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string plan_no Plan Number
     */
    public function create_new_plan($plan_name, $plan_description, $plan_type, $currency, $billing_interval, $client_plan_id = null, $plan_group = null, $plan_group_id = null, $usage_billing_interval = null, $active = null, $rollover_months = null, $rollover_plan_no = null, $rollover_client_plan_id = null, $initial_free_months = null, $acct_status_cd = null, $rollover_status_days = null, $rollover_status_cd = null, $dunning_plan_no = null, $dunning_client_plan_id = null, $template_no = null, $client_email_template_id = null, $apply_cancellation = null, $plan_cancel_min_month = null, $apply_minimum_fee = null, $how_to_apply_minimum_fee = null, $schedule = null, $service = null, $resource = null, $arc_service_no = null, $parent_plans = null, $parent_client_plan_ids = null, $exclusion_plans = null, $supplemental_obj_field = null, $template_ind = null, $child_plans = null, $notification_template_group_no = null, $credit_note_template_no = null, $surcharge_no = null, $client_surcharge_id = null, $proration_invoice_timing_cd = null)
    {
        return $this->__ws_call('create_new_plan', Array(
                'plan_name' => $plan_name,
                'plan_description' => $plan_description,
                'plan_type' => $plan_type,
                'currency' => $currency,
                'billing_interval' => $billing_interval,
                'client_plan_id' => $client_plan_id,
                'plan_group' => $plan_group,
                'plan_group_id' => $plan_group_id,
                'usage_billing_interval' => $usage_billing_interval,
                'active' => $active,
                'rollover_months' => $rollover_months,
                'rollover_plan_no' => $rollover_plan_no,
                'rollover_client_plan_id' => $rollover_client_plan_id,
                'initial_free_months' => $initial_free_months,
                'acct_status_cd' => $acct_status_cd,
                'rollover_status_days' => $rollover_status_days,
                'rollover_status_cd' => $rollover_status_cd,
                'dunning_plan_no' => $dunning_plan_no,
                'dunning_client_plan_id' => $dunning_client_plan_id,
                'template_no' => $template_no,
                'client_email_template_id' => $client_email_template_id,
                'apply_cancellation' => $apply_cancellation,
                'plan_cancel_min_month' => $plan_cancel_min_month,
                'apply_minimum_fee' => $apply_minimum_fee,
                'how_to_apply_minimum_fee' => $how_to_apply_minimum_fee,
                'schedule' => $schedule,
                'service' => $service,
                'resource' => $resource,
                'arc_service_no' => $arc_service_no,
                'parent_plans' => $parent_plans,
                'parent_client_plan_ids' => $parent_client_plan_ids,
                'exclusion_plans' => $exclusion_plans,
                'supplemental_obj_field' => $supplemental_obj_field,
                'template_ind' => $template_ind,
                'child_plans' => $child_plans,
                'notification_template_group_no' => $notification_template_group_no,
                'credit_note_template_no' => $credit_note_template_no,
                'surcharge_no' => $surcharge_no,
                'client_surcharge_id' => $client_surcharge_id,
                'proration_invoice_timing_cd' => $proration_invoice_timing_cd
        ));
    }

    /**
     * Edit a service plan for specified client
     * @param string $plan_no Specifies Plan Number
     * @param string $plan_name Specifies Plan Name
     * @param string $client_plan_id Client defined unique identifier
     * @param int $plan_type Specifies Plan Type. Valid values are [ &#039;Master Recurring Plan&#039;, &#039;Master Pre-paid Plan&#039;, &#039;Master Free Plan&#039;, &#039;Supplemental Recurring Plan&#039;, &#039;Supplemental Free Plan&#039;]
     * @param string $billing_interval Billing Interval [ can be either of 1, 3, 6 or 12 ) 1 - Monthly 3 - Quarterly 6 - Semi-Annually 12 - Annually
     * @param string $currency Specifies the currency code
     * @param string $plan_description Specifies plan description
     * @param array $plan_group 
     * @param array $plan_group_id 
     * @param int $active Specifies Plan Status.Valid values are &quot;1&quot; or &quot;0&quot; 1 - Active 0 - Inactive
     * @param string $usage_billing_interval Usage billing Interval [ can be either of 1, 3, 6, 12 or custom ) 1 - Monthly 3 - Quarterly 6 - Semi-Annually 12 - Annually. For custom the user can provide any number but not greater than 36 months. Also the usage billing interval cannot be greater than the plan billing_interval
     * @param int $template_no Specifies invoice template class associated with master plan
     * @param string $client_email_template_id Client defined unique identifier.
     * @param string $rollover_months Specifies rollover months. Valid values are from 0 to 24
     * @param int $rollover_plan_no Rollover Plan number. Rollover information is required for Pre-paid plans
     * @param string $rollover_client_plan_id Client defined unique identifier
     * @param int $dunning_plan_no Specifies dunning plan associated with this plan
     * @param string $dunning_client_plan_id Client defined unique identifier
     * @param int $initial_free_months Specifies initial free month. Valid values are : 1 to 12.
     * @param int $acct_status_cd Specifies the status of an account when the plan is assigned to a account. Valid values are ( 1- Active, 61 - Active non-billable, 41 - Active trial, 31- Installation pending, 99 - Permanent, 32- Registered pending activation )
     * @param int $rollover_status_days Specifies the number of days the newly created account will remain in its initial status. Valid value are 1 through 28
     * @param int $rollover_status_cd Specifies the status the account will be in after its initial status. Valid values are ( 1 -&gt; Active, 99-&gt;Permanent, -1 -&gt; suspened, -3 -&gt; terminated)
     * @param int $allow_child_accts Specifies whether a plan can have child accounts or not. Valid values are &quot;1&quot; or &quot;0&quot; 1 - Yes 0 - No. The parameter has been depreciated. Value will be overrided to 1
     * @param string $apply_cancellation Specifies whether to apply cancellation or not. Valid values: Yes or No. If marked as &#039;Yes&#039; then should also provide at least one cancellation service.Apply cancellation is set when the plan is created and cannot be modified except for the min terms(months)
     * @param int $plan_cancel_min_month Specifies the minimum term months for cancellation service
     * @param string $apply_minimum_fee Specifies whether to apply minimum fee or not. Valid values: Yes or No. If marked as &#039;Yes&#039; then should also provide at least one minimum fee service.
     * @param int $how_to_apply_minimum_fee Specifies when to apply min fee. Valid values are 0 which means &#039;All Invoices&#039; and 1 which means &#039;After first invoice&#039;.
     * @param array $schedule 
     * @param array $service 
     * @param array $resource 
     * @param int $arc_service_no Specifies one of the recurring service for the plan to which the resource is being applied
     * @param array $parent_plans 
     * @param array $parent_client_plan_ids 
     * @param array $exclusion_plans 
     * @param array $supplemental_obj_field 
     * @param array $child_plans 
     * @param string $notification_template_group_no This field is used to associate an existing notification template group to the plan.
     * @param string $credit_note_template_no This field is used to associate an existing credit note template to the plan.
     * @param array $surcharge_no 
     * @param array $client_surcharge_id 
     * @param string $proration_invoice_timing_cd Determines whether to create a separate invoice for prorated charges immediately, or defer to the next anniversary date.
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string plan_no Plan Number
     */
    public function edit_plan($plan_no, $plan_name, $client_plan_id, $plan_type, $billing_interval, $currency, $plan_description = null, $plan_group = null, $plan_group_id = null, $active = null, $usage_billing_interval = null, $template_no = null, $client_email_template_id = null, $rollover_months = null, $rollover_plan_no = null, $rollover_client_plan_id = null, $dunning_plan_no = null, $dunning_client_plan_id = null, $initial_free_months = null, $acct_status_cd = null, $rollover_status_days = null, $rollover_status_cd = null, $allow_child_accts = null, $apply_cancellation = null, $plan_cancel_min_month = null, $apply_minimum_fee = null, $how_to_apply_minimum_fee = null, $schedule = null, $service = null, $resource = null, $arc_service_no = null, $parent_plans = null, $parent_client_plan_ids = null, $exclusion_plans = null, $supplemental_obj_field = null, $child_plans = null, $notification_template_group_no = null, $credit_note_template_no = null, $surcharge_no = null, $client_surcharge_id = null, $proration_invoice_timing_cd = null)
    {
        return $this->__ws_call('edit_plan', Array(
                'plan_no' => $plan_no,
                'plan_name' => $plan_name,
                'client_plan_id' => $client_plan_id,
                'plan_type' => $plan_type,
                'billing_interval' => $billing_interval,
                'currency' => $currency,
                'plan_description' => $plan_description,
                'plan_group' => $plan_group,
                'plan_group_id' => $plan_group_id,
                'active' => $active,
                'usage_billing_interval' => $usage_billing_interval,
                'template_no' => $template_no,
                'client_email_template_id' => $client_email_template_id,
                'rollover_months' => $rollover_months,
                'rollover_plan_no' => $rollover_plan_no,
                'rollover_client_plan_id' => $rollover_client_plan_id,
                'dunning_plan_no' => $dunning_plan_no,
                'dunning_client_plan_id' => $dunning_client_plan_id,
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
                'parent_client_plan_ids' => $parent_client_plan_ids,
                'exclusion_plans' => $exclusion_plans,
                'supplemental_obj_field' => $supplemental_obj_field,
                'child_plans' => $child_plans,
                'notification_template_group_no' => $notification_template_group_no,
                'credit_note_template_no' => $credit_note_template_no,
                'surcharge_no' => $surcharge_no,
                'client_surcharge_id' => $client_surcharge_id,
                'proration_invoice_timing_cd' => $proration_invoice_timing_cd
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
     * @param string $client_plan_id Client defined unique identifier
     * @param string $plan_name Specifies plan name
     * @param string $new_client_plan_id Client defined unique identifier for new plan
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int plan_no Aria-assigned unique plan identifier
     */
    public function copy_plan($plan_no, $client_plan_id, $plan_name = null, $new_client_plan_id = null)
    {
        return $this->__ws_call('copy_plan', Array(
                'plan_no' => $plan_no,
                'client_plan_id' => $client_plan_id,
                'plan_name' => $plan_name,
                'new_client_plan_id' => $new_client_plan_id
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
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int usage_type_no Unique identifier for usage type<br>string usage_type_name Name of usage type<br>string usage_type_desc Description of usage type<br>string usage_type_cd Client defined unique identifier<br>string usage_unit_type Unit type for usage type<br>string client_usage_unit_type_id Client defined unique identifier<br>boolean is_editable Specifies is usage type is editable. Valid values are : &quot;true&quot; - Usage type is editable &quot;false&quot; - Usage type is not editable because one of the reason:- 1. This usage type is system standard. It is available for all clients and therefore not Editable. 2. This usage type is custom to this client. It is associated with a service and therefore not Editable.
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
     * @param string $usage_type_code Client defined unique identifier
     * @param string $usage_type_display_string Specifies the display name for this usage type
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int usage_type_no Unique identifier for usage type
     */
    public function create_usage_type($usage_type_name, $usage_type_desc, $usage_unit_type_no, $usage_type_code = null, $usage_type_display_string = null)
    {
        return $this->__ws_call('create_usage_type', Array(
                'usage_type_name' => $usage_type_name,
                'usage_type_desc' => $usage_type_desc,
                'usage_unit_type_no' => $usage_unit_type_no,
                'usage_type_code' => $usage_type_code,
                'usage_type_display_string' => $usage_type_display_string
        ));
    }

    /**
     * Updates an existing usage type
     * @param int $usage_type_no Unique identifier for usage type
     * @param string $usage_type_name Name of usage type
     * @param string $usage_type_desc Description of usage type
     * @param int $usage_unit_type_no Unique identifier for usage type unit
     * @param string $usage_type_code Client defined unique identifier
     * @param string $usage_type_display_string Specifies the display name for this usage type
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int usage_type_no Unique identifier for usage type
     */
    public function update_usage_type($usage_type_no, $usage_type_name, $usage_type_desc, $usage_unit_type_no, $usage_type_code = null, $usage_type_display_string = null)
    {
        return $this->__ws_call('update_usage_type', Array(
                'usage_type_no' => $usage_type_no,
                'usage_type_name' => $usage_type_name,
                'usage_type_desc' => $usage_type_desc,
                'usage_unit_type_no' => $usage_unit_type_no,
                'usage_type_code' => $usage_type_code,
                'usage_type_display_string' => $usage_type_display_string
        ));
    }

    /**
     * 
     * @param string $field_name Specifies the Supplemental field name
     * @param string $description Specifies the field description for the Supplemental field
     * @param int $min_no_sel Indicates Minimum Number Of Selections From List Of Valid Values Allowed For The Supplemental Field
     * @param int $max_no_sel Indicates Maximum Number Of Selections From List Of Valid Values Allowed For The Supplemental Field
     * @param string $datatype Specifies the datatype of the fields (e.g. date, string, etc.)
     * @param string $form_input_type Specifies the type of input element this field should be (e.g. input, select, checkbox, etc.)
     * @param string $use_allowed_vals_ind Indicates whether this field is only allowed to have a predefined set of values
     * @param string $option_value Value For Selection Option. REST input arrays are &quot;|&quot; separated lists of a single data type Any value entered will be ignored if there is at least an account with this supplemental field.
     * @param string $option_value_order Display Order For Selection Option. REST input arrays are &quot;|&quot; separated lists of a single data type.Any value entered will be ignored if there is at least an account with this supplemental field
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int field_no Aria assigned unique number to identify this field
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
     * @param int $field_no Aria assigned unique number to identify this field
     * @param string $field_name Specifies the Supplemental field name
     * @param string $description Specifies the field description for the Supplemental field
     * @param string $min_no_sel Indicates Minimum Number Of Selections From List Of Valid Values Allowed For The Supplemental Field
     * @param int $max_no_sel Indicates Maximum Number Of Selections From List Of Valid Values Allowed For The Supplemental Field
     * @param string $datatype Specifies the datatype of the fields (e.g. date, string, etc.)
     * @param string $form_input_type Specifies the type of input element this field should be (e.g. input, select, checkbox, etc.)
     * @param string $use_allowed_vals_ind Indicates whether this field is only allowed to have a predefined set of values
     * @param string $option_value Value For Selection Option. REST input arrays are &quot;|&quot; separated lists of a single data type Any value entered will be ignored if there is at least an account with this supplemental field.
     * @param string $option_value_order Display Order For Selection Option. REST input arrays are &quot;|&quot; separated lists of a single data type.Any value entered will be ignored if there is at least an account with this supplemental field
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
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int field_no Aria assigned unique number to identify this field<br>string field_name Specifies the Supplemental field name<br>string description Specifies the field description for the Supplemental field<br>string datatype Specifies the datatype of the fields (e.g. date, string, etc.)<br>string min_no_sel Indicates Minimum Number Of Selections From List Of Valid Values Allowed For The Supplemental Field<br>int max_no_sel Indicates Maximum Number Of Selections From List Of Valid Values Allowed For The Supplemental Field<br>string form_input_type Specifies the type of input element this field should be (e.g. input, select, checkbox, etc.)<br>array allowed_values <br>array associated_objects 
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
     * @param string $client_plan_change_group_id Client defined identifier for Plan group number
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int group_no Unique identifier for plan group<br>string group_name Name of plan group<br>string group_desc Description of plan group<br>string client_plan_change_group_id Client defined unique identifier<br>string group_usage Indicate usage of plan group. Possible values are: 1 - CSR only 2 - USS only 3 - Both CSR and USS<br>array plans 
     */
    public function get_plan_group_details($group_no, $client_plan_change_group_id)
    {
        return $this->__ws_call('get_plan_group_details', Array(
                'group_no' => $group_no,
                'client_plan_change_group_id' => $client_plan_change_group_id
        ));
    }

    /**
     * Creates a new plan group
     * @param string $group_name Name of plan group
     * @param string $group_desc Description of plan group
     * @param string $group_usage Indicate usage of plan group. Possible values are: 1 - CSR only 2 - USS only 3 - Both CSR and USS
     * @param string $client_plan_change_group_id Client defined unique identifier
     * @param string $group_plans &quot;|&quot; separated list of plans to be associated to this plan group. Please note that this list must contain valid plan numbers for that particular client number or the API will error
     * @param string $group_plan_ids &quot;|&quot; separated list of client plan ids to be associated to this plan group. Please note that this list must contain valid plan numbers for that particular client number or the API will error
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int group_no Unique identifier for plan group
     */
    public function create_plan_group($group_name, $group_desc, $group_usage, $client_plan_change_group_id = null, $group_plans = null, $group_plan_ids = null)
    {
        return $this->__ws_call('create_plan_group', Array(
                'group_name' => $group_name,
                'group_desc' => $group_desc,
                'group_usage' => $group_usage,
                'client_plan_change_group_id' => $client_plan_change_group_id,
                'group_plans' => $group_plans,
                'group_plan_ids' => $group_plan_ids
        ));
    }

    /**
     * Creates a new plan group
     * @param int $group_no Unique identifier for plan group
     * @param string $group_name Name of plan group
     * @param string $group_desc Description of plan group
     * @param string $group_usage Indicate usage of plan group. Possible values are: 1 - CSR only 2 - USS only 3 - Both CSR and USS
     * @param string $client_plan_change_group_id Client defined unique identifier
     * @param string $group_plans &quot;|&quot; separated list of plans to be associated to this plan group. Please note that this list must contain valid plan numbers for that particular client number or the API will error
     * @param string $group_plan_ids &quot;|&quot; separated list of client plan ids to be associated to this plan group. Please note that this list must contain valid plan numbers for that particular client number or the API will error
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int group_no Unique identifier for plan group
     */
    public function update_plan_group($group_no, $group_name, $group_desc, $group_usage, $client_plan_change_group_id, $group_plans = null, $group_plan_ids = null)
    {
        return $this->__ws_call('update_plan_group', Array(
                'group_no' => $group_no,
                'group_name' => $group_name,
                'group_desc' => $group_desc,
                'group_usage' => $group_usage,
                'client_plan_change_group_id' => $client_plan_change_group_id,
                'group_plans' => $group_plans,
                'group_plan_ids' => $group_plan_ids
        ));
    }

    /**
     * Creates a new plan group
     * @param string $group_list &quot;|&quot; separated list of plan groups to be deleted&#039;
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array plan_groups 
     */
    public function delete_plan_group($group_list)
    {
        return $this->__ws_call('delete_plan_group', Array(
                'group_list' => $group_list
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
     * Returns all surcharges for a client
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>array surcharges 
     */
    public function get_surcharges()
    {
        return $this->__ws_call('get_surcharges', Array(
                
        ));
    }

    /**
     * Returns the details of a surcharge
     * @param int $surcharge_no Specifies Surcharge No
     * @param string $client_surcharge_id Specifies the client defined id for surcharge
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int surcharge_no Specifies Surcharge No<br>string surcharge_name Specifies Surcharge Name<br>string client_surcharge_id Specifies client defined id for Surcharge<br>string description Specifies description for the Surcharge<br>string ext_description Specifies description that can be added to statment and is visible to the user.<br>string currency_cd Specifies the currency code of the surcharge<br>string surcharge_type_cd Specifies whether the discount is going to be fixed or percentage based.<br>string inline_offset_ind Specifies how the discount will be displayed in the invoice.<br>string apply_b4_or_after_discount_cd Specifies whether the surcharge should consider item totals before or after discounts are applied<br>int apply_to_zero_invoice_ind Specifies whether the minimum surcharge should apply to zero dollar invoice or not.<br>int tax_group Specifies the tax group to be used while calculating surcharge.<br>string gl_cd Specifies the revenue account chart of access code<br>string ar_gl_cd Specifies the account recievable chart of access code<br>int scope_no Specifies the charges eligible for the discount.<br>array plan_no Aria-assigned unique plan identifier<br>array client_plan_id <br>array service_no <br>array client_service_id <br>array item_no <br>array client_item_id <br>array plan_service <br>array surcharge_tier 
     */
    public function get_surcharge_details($surcharge_no, $client_surcharge_id)
    {
        return $this->__ws_call('get_surcharge_details', Array(
                'surcharge_no' => $surcharge_no,
                'client_surcharge_id' => $client_surcharge_id
        ));
    }

    /**
     * Creates a surcharge
     * @param string $surcharge_name Specifies Surcharge Name
     * @param string $description Specifies description for the Surcharge
     * @param string $ext_description Specifies description that can be added to statment and is visible to the user.
     * @param string $currency_cd Specifies the currency code of the surcharge
     * @param string $surcharge_type_cd Specifies whether the discount is going to be fixed or percentage based.
     * @param string $inline_offset_ind Specifies how the discount will be displayed in the invoice.
     * @param string $apply_b4_or_after_discount_cd Specifies whether the surcharge should consider item totals before or after discounts are applied
     * @param int $scope_no Specifies the charges eligible for the discount.
     * @param array $surcharge_tier 
     * @param string $client_surcharge_id Specifies client defined id for Surcharge
     * @param int $apply_to_zero_invoice_ind Specifies whether the minimum surcharge should apply to zero dollar invoice or not.
     * @param int $tax_group Specifies the tax group to be used while calculating surcharge.
     * @param string $gl_cd Specifies the revenue account chart of access code
     * @param string $ar_gl_cd Specifies the account recievable chart of access code
     * @param array $plan_no Aria-assigned unique plan identifier
     * @param array $client_plan_id 
     * @param array $service_no 
     * @param array $client_service_id 
     * @param array $item_no 
     * @param array $client_item_id 
     * @param array $schedule 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string surcharge_no Surcharge No
     */
    public function create_surcharge($surcharge_name, $description, $ext_description, $currency_cd, $surcharge_type_cd, $inline_offset_ind, $apply_b4_or_after_discount_cd, $scope_no, $surcharge_tier, $client_surcharge_id = null, $apply_to_zero_invoice_ind = null, $tax_group = null, $gl_cd = null, $ar_gl_cd = null, $plan_no = null, $client_plan_id = null, $service_no = null, $client_service_id = null, $item_no = null, $client_item_id = null, $schedule = null)
    {
        return $this->__ws_call('create_surcharge', Array(
                'surcharge_name' => $surcharge_name,
                'description' => $description,
                'ext_description' => $ext_description,
                'currency_cd' => $currency_cd,
                'surcharge_type_cd' => $surcharge_type_cd,
                'inline_offset_ind' => $inline_offset_ind,
                'apply_b4_or_after_discount_cd' => $apply_b4_or_after_discount_cd,
                'scope_no' => $scope_no,
                'surcharge_tier' => $surcharge_tier,
                'client_surcharge_id' => $client_surcharge_id,
                'apply_to_zero_invoice_ind' => $apply_to_zero_invoice_ind,
                'tax_group' => $tax_group,
                'gl_cd' => $gl_cd,
                'ar_gl_cd' => $ar_gl_cd,
                'plan_no' => $plan_no,
                'client_plan_id' => $client_plan_id,
                'service_no' => $service_no,
                'client_service_id' => $client_service_id,
                'item_no' => $item_no,
                'client_item_id' => $client_item_id,
                'schedule' => $schedule
        ));
    }

    /**
     * Creates a surcharge
     * @param string $surcharge_no Surcharge No
     * @param string $surcharge_name Specifies Surcharge Name
     * @param string $client_surcharge_id Specifies client defined id for Surcharge
     * @param string $description Specifies description for the Surcharge
     * @param string $ext_description Specifies description that can be added to statment and is visible to the user.
     * @param string $currency_cd Specifies the currency code of the surcharge
     * @param int $scope_no Specifies the charges eligible for the discount.
     * @param array $surcharge_tier 
     * @param int $apply_to_zero_invoice_ind Specifies whether the minimum surcharge should apply to zero dollar invoice or not.
     * @param array $plan_no Aria-assigned unique plan identifier
     * @param array $client_plan_id 
     * @param array $service_no 
     * @param array $client_service_id 
     * @param array $item_no 
     * @param array $client_item_id 
     * @param array $schedule 
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>string surcharge_no Surcharge No
     */
    public function edit_surcharge($surcharge_no, $surcharge_name, $client_surcharge_id, $description, $ext_description, $currency_cd, $scope_no, $surcharge_tier, $apply_to_zero_invoice_ind = null, $plan_no = null, $client_plan_id = null, $service_no = null, $client_service_id = null, $item_no = null, $client_item_id = null, $schedule = null)
    {
        return $this->__ws_call('edit_surcharge', Array(
                'surcharge_no' => $surcharge_no,
                'surcharge_name' => $surcharge_name,
                'client_surcharge_id' => $client_surcharge_id,
                'description' => $description,
                'ext_description' => $ext_description,
                'currency_cd' => $currency_cd,
                'scope_no' => $scope_no,
                'surcharge_tier' => $surcharge_tier,
                'apply_to_zero_invoice_ind' => $apply_to_zero_invoice_ind,
                'plan_no' => $plan_no,
                'client_plan_id' => $client_plan_id,
                'service_no' => $service_no,
                'client_service_id' => $client_service_id,
                'item_no' => $item_no,
                'client_item_id' => $client_item_id,
                'schedule' => $schedule
        ));
    }

    /**
     * Deletes the surcharge.
     * @param array $surcharge_no Specifies the coupon numbers to be deleted. Eg surcharge_no[0]=10012341&amp;surcharge_no[1]=10023432 etc
     * @param array $client_surcharge_id Specifies client defined id for Surcharge. Eg surcharge_no[0]=10012341&amp;surcharge_no[1]=10023432 etc
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function delete_surcharge($surcharge_no, $client_surcharge_id)
    {
        return $this->__ws_call('delete_surcharge', Array(
                'surcharge_no' => $surcharge_no,
                'client_surcharge_id' => $client_surcharge_id
        ));
    }

    /**
     * Returns all the revrec profiles for a client
     * @return mixed[] int profile_id Profile Id<br>string profile_name Specifies Profile Name<br>string client_profile_id Specifies client defined id for Profile<br>string profile_desc Specifies description for the Profile
     */
    public function get_revrec_profiles()
    {
        return $this->__ws_call('get_revrec_profiles', Array(
                
        ));
    }

    /**
     * Return the details of a revrec profile
     * @param int $profile_id Profile Id
     * @param string $client_profile_id Client defined identifier for profile.
     * @return mixed[] string profile_name Specifies Profile Name<br>string client_profile_id Specifies client defined id for Profile<br>string profile_desc Specifies description for the Profile<br>int on_plan_payment_date Specifies whether to recognise revenue on Plan Payment Dates or not. Valid values are 0 or 1<br>int on_order_payment_date Specifies whether to recognise revenue on Order Payment Dates or not. Valid values are 0 or 1<br>int on_order_fulfill_date Specifies whether to recognise revenue on Order Fulfilled Dates or not. Valid values are 0 or 1
     */
    public function get_revrec_profile_details($profile_id, $client_profile_id)
    {
        return $this->__ws_call('get_revrec_profile_details', Array(
                'profile_id' => $profile_id,
                'client_profile_id' => $client_profile_id
        ));
    }

    /**
     * Creates a revrec profile
     * @param string $profile_name Specifies Profile Name
     * @param string $client_profile_id Specifies client defined id for Profile
     * @param string $profile_desc Specifies description for the Profile
     * @param int $on_plan_payment_date Specifies whether to recognise revenue on Plan Payment Dates or not. Valid values are 0 or 1
     * @param int $on_order_payment_date Specifies whether to recognise revenue on Order Payment Dates or not. Valid values are 0 or 1
     * @param int $on_order_fulfill_date Specifies whether to recognise revenue on Order Fulfilled Dates or not. Valid values are 0 or 1
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int profile_id Profile Id
     */
    public function create_revrec_profile($profile_name, $client_profile_id = null, $profile_desc = null, $on_plan_payment_date = null, $on_order_payment_date = null, $on_order_fulfill_date = null)
    {
        return $this->__ws_call('create_revrec_profile', Array(
                'profile_name' => $profile_name,
                'client_profile_id' => $client_profile_id,
                'profile_desc' => $profile_desc,
                'on_plan_payment_date' => $on_plan_payment_date,
                'on_order_payment_date' => $on_order_payment_date,
                'on_order_fulfill_date' => $on_order_fulfill_date
        ));
    }

    /**
     * Updates a revrec profile
     * @param int $profile_id Profile Id
     * @param string $profile_name Specifies Profile Name
     * @param string $client_profile_id Specifies client defined id for Profile
     * @param string $profile_desc Specifies description for the Profile
     * @param int $on_plan_payment_date Specifies whether to recognise revenue on Plan Payment Dates or not. Valid values are 0 or 1
     * @param int $on_order_payment_date Specifies whether to recognise revenue on Order Payment Dates or not. Valid values are 0 or 1
     * @param int $on_order_fulfill_date Specifies whether to recognise revenue on Order Fulfilled Dates or not. Valid values are 0 or 1
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.<br>int profile_id Profile Id
     */
    public function update_revrec_profile($profile_id, $profile_name, $client_profile_id, $profile_desc = null, $on_plan_payment_date = null, $on_order_payment_date = null, $on_order_fulfill_date = null)
    {
        return $this->__ws_call('update_revrec_profile', Array(
                'profile_id' => $profile_id,
                'profile_name' => $profile_name,
                'client_profile_id' => $client_profile_id,
                'profile_desc' => $profile_desc,
                'on_plan_payment_date' => $on_plan_payment_date,
                'on_order_payment_date' => $on_order_payment_date,
                'on_order_fulfill_date' => $on_order_fulfill_date
        ));
    }

    /**
     * Deletes a revrec profile
     * @param int $profile_id Specifies Profile Id
     * @param string $client_profile_id Specifies client defined id for Profile
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function delete_revrec_profile($profile_id, $client_profile_id)
    {
        return $this->__ws_call('delete_revrec_profile', Array(
                'profile_id' => $profile_id,
                'client_profile_id' => $client_profile_id
        ));
    }

    /**
     * 
     * @param string $session_id Specifies the session id to be validated
     * @return mixed[] int error_code Aria-assigned error identifier. 0 indicates no error<br>string error_msg Textual description of any error that occurred.  &quot;OK&quot; if there was no error.
     */
    public function validate_admin_session($session_id)
    {
        return $this->__ws_call('validate_admin_session', Array(
                'session_id' => $session_id
        ));
    }

    }
