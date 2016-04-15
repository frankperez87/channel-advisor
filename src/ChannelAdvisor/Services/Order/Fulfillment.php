<?php namespace ChannelAdvisor\Services\Order;

use ChannelAdvisor\Services\Service;

class Fulfillment extends Service
{
    public function createOrderFulfillmentsByOrderId($orderID, array $fulfillmentList)
    {
        return $this->request()->GetOrderList([
            'accountID' => $this->getAccountId(),
            'orderID' => $orderID,
            'fulfillmentList' => $fulfillmentList,
        ]);
    }

    public function createOrderFulfillmentsByOrderNumber($clientOrderIdentifier, array $fulfillmentList)
    {
        return $this->request()->GetOrderList([
            'accountID' => $this->getAccountId(),
            'clientOrderIdentifier' => $clientOrderIdentifier,
            'fulfillmentList' => $fulfillmentList,
        ]);
    }

    public function getOrderFulfillmentDetailListByOrderIds(array $orderIDList)
    {
        return $this->request()->GetOrderFulfillmentDetailList([
            'accountID' => $this->getAccountId(),
            'orderIDList' => $orderIDList,
        ]);
    }

    public function getOrderFulfillmentDetailListByOrderNumbers(array $clientOrderIdentifierList)
    {
        return $this->request()->GetOrderFulfillmentDetailList([
            'accountID' => $this->getAccountId(),
            'clientOrderIdentifierList' => $clientOrderIdentifierList,
        ]);
    }

    public function moveFulfillmentItemsByOrderId($orderID, $destinationFulfillmentID, array $sourceFulfillmentItemList)
    {
        return $this->request()->MoveFulfillmentItems([
            'accountID' => $this->getAccountId(),
            'orderID' => $orderID,
            'destinationFulfillmentID' => $destinationFulfillmentID,
            'sourceFulfillmentItemList' => $sourceFulfillmentItemList,
        ]);
    }

    public function moveFulfillmentItemsByOrderNumber($clientOrderIdentifier, $destinationFulfillmentID, array $sourceFulfillmentItemList)
    {
        return $this->request()->MoveFulfillmentItems([
            'accountID' => $this->getAccountId(),
            'clientOrderIdentifier' => $clientOrderIdentifier,
            'destinationFulfillmentID' => $destinationFulfillmentID,
            'sourceFulfillmentItemList' => $sourceFulfillmentItemList,
        ]);
    }

    public function updateOrderFulfillmentsByOrderId($orderID, array $fulfillmentUpdateList)
    {
        return $this->request()->MoveFulfillmentItems([
            'accountID' => $this->getAccountId(),
            'orderID' => $orderID,
            'fulfillmentUpdateList' => $fulfillmentUpdateList,
        ]);
    }

    public function updateOrderFulfillmentsByOrderNumber($clientOrderIdentifier, array $fulfillmentUpdateList)
    {
        return $this->request()->MoveFulfillmentItems([
            'accountID' => $this->getAccountId(),
            'clientOrderIdentifier' => $clientOrderIdentifier,
            'fulfillmentUpdateList' => $fulfillmentUpdateList,
        ]);
    }
}