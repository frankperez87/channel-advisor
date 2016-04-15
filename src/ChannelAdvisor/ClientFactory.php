<?php namespace ChannelAdvisor;

class ClientFactory
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
                break;
            case 'order':
                $client->setUrls(
                    'https://api.channeladvisor.com/ChannelAdvisorAPI/v7/OrderService.asmx?WSDL',
                    'http://api.channeladvisor.com/webservices/'
                );
                break;
            case 'fulfillment':
                $client->setUrls(
                    'https://api.channeladvisor.com/ChannelAdvisorAPI/V7/FulfillmentService.asmx?WSDL',
                    'http://api.channeladvisor.com/webservices/'
                );
                break;
            case 'shipping':
                $client->setUrls(
                    'https://api.channeladvisor.com/ChannelAdvisorAPI/v7/ShippingService.asmx?WSDL',
                    'http://api.channeladvisor.com/webservices/'
                );
                break;
        }

        return $client;
    }
}