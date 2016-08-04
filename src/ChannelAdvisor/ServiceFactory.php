<?php namespace ChannelAdvisor;

use ChannelAdvisor\Services\Admin\Admin;
use ChannelAdvisor\Services\Order\Fulfillment;
use ChannelAdvisor\Services\Order\Order;
use ChannelAdvisor\Services\Order\Shipping;
use ChannelAdvisor\Services\Inventory\Inventory;

class ServiceFactory
{
    public static function make($service, $developer_key, $password, $account_id)
    {
        $client = new Client($developer_key, $password, $account_id);

        switch ($service) {
            case 'admin':
                $client->setUrls(
                    'https://api.channeladvisor.com/ChannelAdvisorAPI/v7/AdminService.asmx?WSDL',
                    'http://api.channeladvisor.com/webservices/'
                );
                $service = new Admin($client);
                break;
            case 'order':
                $client->setUrls(
                    'https://api.channeladvisor.com/ChannelAdvisorAPI/v7/OrderService.asmx?WSDL',
                    'http://api.channeladvisor.com/webservices/'
                );
                $service = new Order($client);
                break;
            case 'fulfillment':
                $client->setUrls(
                    'https://api.channeladvisor.com/ChannelAdvisorAPI/V7/FulfillmentService.asmx?WSDL',
                    'http://api.channeladvisor.com/webservices/'
                );
                $service = new Fulfillment($client);
                break;
            case 'shipping':
                $client->setUrls(
                    'https://api.channeladvisor.com/ChannelAdvisorAPI/v7/ShippingService.asmx?WSDL',
                    'http://api.channeladvisor.com/webservices/'
                );
                $service = new Shipping($client);
                break;
            case 'inventory':
                $client->setUrls(
                    'https://api.channeladvisor.com/ChannelAdvisorAPI/v7/InventoryService.asmx?WSDL',
                    'http://api.channeladvisor.com/webservices/'
                );
                $service = new Inventory($client);
                break;
        }

        return $service;
    }
}