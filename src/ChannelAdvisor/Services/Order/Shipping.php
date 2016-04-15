<?php namespace ChannelAdvisor\Services\Order;

use ChannelAdvisor\Services\Service;

class Shipping extends Service
{
    public function getOrderShipmentHistoryListByOrderIds(array $orderIDList)
    {
        return $this->request()->GetOrderShipmentHistoryList([
            'accountID' => $this->getAccountId(),
            'orderIDList' => $orderIDList,
        ]);
    }

    public function getOrderShipmentHistoryListByOrderNumbers(array $clientOrderIdentifierList)
    {
        return $this->request()->GetOrderShipmentHistoryList([
            'accountID' => $this->getAccountId(),
            'clientOrderIdentifierList' => $clientOrderIdentifierList,
        ]);
    }

    public function getShippingRateList($cartID, $street, $city, $state, $postalCode, $country)
    {
        return $this->request()->GetShippingRateList([
            'accountID' => $this->getAccountId(),
            'cartID' => $cartID,
            'street' => $street,
            'city' => $city,
            'state' => $state,
            'postalCode' => $postalCode,
            'country' => $country,
        ]);
    }

    public function getShippingCarrierList()
    {
        return $this->request()->GetShippingCarrierList([
            'accountID' => $this->getAccountId(),
        ]);
    }

    public function submitOrderShipmentList(array $shipmentList)
    {
        return $this->request()->SubmitOrderShipmentList([
            'accountID' => $this->getAccountId(),
            'shipmentList' => $shipmentList,
        ]);
    }
}