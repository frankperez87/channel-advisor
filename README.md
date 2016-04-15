# Channel Advisor API
This API allows you to connect to the Channel Advisor system in order to manage orders and inventory.

*This is not the official API provided by Channel Advisor.*

### Example Usage for Requesting Access
```php
<?php

require 'vendor/autoload.php';

$developer_key = 'XXX';
$password = 'XXX';
$account_id = 'XXX';

// Set ChannelAdvisor Account Credentials and Service
$client = ChannelAdvisor\ClientFactory::make('admin', $developer_key, $password, $account_id);

// Request API Access
$admin = new \ChannelAdvisor\Services\Admin\Admin($client);

$result = $admin->requestAccess('local id here');
```