#Aria PHP SDK

PHP SDK to work with Aria's APIs. For more information and examples go to [Aria Developer Central](http://developer.ariasystems.net).

##Usage

```php
require_once('class/ariabillingcomplete.php');

$aria = new AriaBillingComplete('https://secure.ariasystems.net/api/ws/api_ws_class_dispatcher.php',
    Array(
        'client_no' => CLIENT_NO,
        'auth_key' => AUTH_KEY
    )
);

$result = $aria->userid_exists('testtesttest');

print_r($result); // Array ( [error_code] => 1009 [error_msg] => account does not exist )
```
