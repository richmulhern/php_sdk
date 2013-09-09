#Aria PHP SDK

PHP SDK to work with Aria's APIs.

##Usage

```php
require_once('class/ariabillingcomplete.php');

$aria = new AriaBillingComplete(
    Array(
        'client_no' => CLIENT_NO,
        'auth_key' => AUTH_KEY,
        'url' => 'https://secure.ariasystems.net/api/ws/api_ws_class_dispatcher.php',
    )
);

$result = $aria->userid_exists('testtesttest');

print_r($result); // Array ( [error_code] => 1009 [error_msg] => account does not exist )
```
