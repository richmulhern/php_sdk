#Aria Systems PHP SDK

The Aria Systems PHP SDK is a collection of classes that make it easy to use the [Aria Systems](http://www.ariasystems.com/) REST and SOAP web services in your PHP application. The PHP SDK works with Aria Systems Core, Object-Query, and Admintools APIs.

##Installation

Download the [zip archive](https://github.com/richmulhern/php_sdk/archive/master.zip), extract the files, and include them in your PHP application with the [php require_once method](http://php.net/manual/en/function.require-once.php).

```php
require_once('class/ariabillingcomplete.php');
```

##Usage

The PHP SDK includes classes for each series of web services and a complete class that includes a method for each Core API. To make a service call instantiate the complete class or the
class for the service you want to use with the URL of environment to call and a configuration array. Each API call is made as a method on your class. A successful call will return an array.
If there are no errors the result should return an error_code of 0 and error_msg of "OK".

```php
require_once('class/ariabillingcomplete.php');

$aria = new AriaBillingComplete('https://secure.ariasystems.net/api/ws/api_ws_class_dispatcher.php',
    Array(
        'client_no' => CLIENT_NO,
        'auth_key' => AUTH_KEY
    )
);

$result = $aria->authenticate_caller();

print_r($result); // Array ( [error_code] => 0, [error_msg] => OK )
```

##More Information

For more information check out [Aria Systems Developer Central](http://developer.ariasystems.net) for more examples, details, and support on [Aria Systems](http://www.ariasystems.com/) services and features.
