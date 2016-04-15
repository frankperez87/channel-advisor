<?php namespace ChannelAdvisor;

use SoapClient;
use SoapHeader;

class Client
{
    private $developer_key;
    private $password;
    private $account_id;
    private $wsdl_url;
    private $api_url;

    public function __construct($developer_key, $password, $account_id)
    {
        $this->developer_key = $developer_key;
        $this->password = $password;
        $this->account_id = $account_id;
    }

    public function setUrls($wsdl_url, $api_url)
    {
        $this->wsdl_url = $wsdl_url;
        $this->api_url = $api_url;

        return $this;
    }

    public function getDeveloperKey()
    {
        return $this->developer_key;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getAccountId()
    {
        return $this->account_id;
    }

    public function getWsdlUrl()
    {
        return $this->wsdl_url;
    }

    public function getApiUrl()
    {
        return $this->api_url;
    }

    public function make()
    {
        $client = new SoapClient($this->wsdl_url);

        $soap_header = new SoapHeader(
            $this->api_url,
            'APICredentials',
            array(
                'DeveloperKey' => $this->developer_key,
                'Password' => $this->password
            )
        );

        $client->__setSoapHeaders($soap_header);

        return $client;
    }
}