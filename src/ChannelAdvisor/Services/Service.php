<?php namespace ChannelAdvisor\Services;

abstract class Service
{
    protected $client;

    public function __construct($client)
    {
        $this->client = $client;
    }

    public function ping()
    {
        return $this->request()->Ping();
    }

    public function request()
    {
        return $this->client->make();
    }

    public function getAccountId()
    {
        return $this->client->getAccountId();
    }
}