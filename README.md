# Channel Advisor API
This API allows you to connect to the Channel Advisor system in order to manage orders and inventory.

*This is not the official API provided by Channel Advisor.*
*Still in development.*

### Currently Supported Services Include
*Admin Related Service*
- Admin

*Order Related Services*
- Fulfillment
- Order
- Shipping

### Example Usage for Requesting Access
```php
<?php

require 'vendor/autoload.php';

$developer_key = 'XXX';
$password = 'XXX';
$account_id = 'XXX';

// Set ChannelAdvisor Account Credentials and Service You Wish To Use
$service = ChannelAdvisor\ServiceFactory::make('admin', $developer_key, $password, $account_id);

// Output Result
$result = $service->requestAccess('local id here');
```