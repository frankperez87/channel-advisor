<?php namespace ChannelAdvisor\Services\Order;

use ChannelAdvisor\Services\Service;

class Order extends Service
{
    public function getOrderList(array $orderCriteria = array())
    {
        return $this->request()->GetOrderList(array(
            'accountID' => $this->getAccountId(),
            'orderCriteria' => $orderCriteria,
        ));
    }

    public function getOrderRefundHistory($orderID)
    {
        return $this->request()->GetOrderRefundHistory(array(
            'accountID' => $this->getAccountId(),
            'orderID' => $orderID,
        ));
    }

    public function orderMerge($primaryOrderId, array $orderIDMergeList)
    {
        return $this->request()->OrderMerge(array(
            'accountID' => $this->getAccountId(),
            'primaryOrderID' => $primaryOrderId,
            'orderIDMergeList' => $orderIDMergeList,
        ));
    }

    public function orderSplit($orderId, array $lineItemIDList)
    {
        return $this->request()->OrderSplit(array(
            'accountID' => $this->getAccountId(),
            'orderID' => $orderId,
            'lineItemIDList' => $lineItemIDList,
        ));
    }

    public function submitOrder(array $order)
    {
        return $this->request()->SubmitOrder(array(
            'accountID' => $this->getAccountId(),
            'order' => $order,
        ));
    }

    public function submitOrderRefundByAmountAndOrderId($orderId, $amount, $reason, $sellerRefundId = null)
    {
        return $this->request()->SubmitOrderRefund(array(
            'accountID' => $this->getAccountId(),
            'OrderID' => $orderId,
            'Amount' => $amount,
            'AdjustmentReason' => $reason,
            'SellerRefundID' => $sellerRefundId,
        ));
    }

    public function submitOrderRefundByAmountAndWebsiteOrderId(
        $clientOrderIdentifier,
        $amount,
        $reason,
        $sellerRefundId = ''
    )
    {
        return $this->request()->SubmitOrderRefund(array(
            'accountID' => $this->getAccountId(),
            'ClientOrderIdentifier' => $clientOrderIdentifier,
            'Amount' => $amount,
            'AdjustmentReason' => $reason,
            'SellerRefundID' => $sellerRefundId,
        ));
    }

    public function submitOrderRefundByItemsAndOrderId($orderId, array $refundItems, $reason, $sellerRefundId = null)
    {
        return $this->request()->SubmitOrderRefund(array(
            'accountID' => $this->getAccountId(),
            'OrderID' => $orderId,
            'AdjustmentReason' => $reason,
            'SellerRefundID' => $sellerRefundId,
            'RefundItems' => $refundItems,
        ));
    }

    public function submitOrderRefundByItemsAndWebsiteOrderId(
        $clientOrderIdentifier,
        array $refundItems,
        $reason,
        $sellerRefundId = ''
    )
    {
        return $this->request()->SubmitOrderRefund(array(
            'accountID' => $this->getAccountId(),
            'ClientOrderIdentifier' => $clientOrderIdentifier,
            'AdjustmentReason' => $reason,
            'SellerRefundID' => $sellerRefundId,
            'RefundItems' => $refundItems,
        ));
    }

    public function setOrdersExportStatusByOrderIDs(array $orderIDList, $markAsExported = true)
    {
        return $this->request()->SetOrdersExportStatus(array(
            'accountID' => $this->getAccountId(),
            'orderIDList' => $orderIDList,
            'markAsExported' => $markAsExported,
        ));
    }

    public function setOrdersExportStatusByClientOrderIDs(array $clientOrderIdentifierList, $markAsExported = true)
    {
        return $this->request()->SetOrdersExportStatus(array(
            'accountID' => $this->getAccountId(),
            'clientOrderIdentifierList' => $clientOrderIdentifierList,
            'markAsExported' => $markAsExported,
        ));
    }

    public function setOrdersExportStatus(array $orderIDList, array $clientOrderIdentifierList, $markAsExported)
    {
        return $this->request()->SetOrdersExportStatus(array(
            'accountID' => $this->getAccountId(),
            'orderIDList' => $orderIDList,
            'clientOrderIdentifierList' => $clientOrderIdentifierList,
            'markAsExported' => $markAsExported,
        ));
    }

    public function setSellerOrderId(array $orderIDList, array $sellerOrderIDList)
    {
        return $this->request()->SetSellerOrderID(array(
            'accountID' => $this->getAccountId(),
            'orderIDList' => $orderIDList,
            'sellerOrderIDList' => $sellerOrderIDList,
        ));
    }

    public function setSellerOrderItemIdList($orderID, array $lineItemIDList, array $sellerOrderItemIDList)
    {
        return $this->request()->SetSellerOrderItemIDList(array(
            'accountID' => $this->getAccountId(),
            'orderID' => $orderID,
            'lineItemIDList' => $lineItemIDList,
            'sellerOrderItemIDList' => $sellerOrderItemIDList,
        ));
    }

    public function updateOrderList(array $updateOrderSubmitList)
    {
        return $this->request()->UpdateOrderList(array(
            'accountID' => $this->getAccountId(),
            'updateOrderSubmitList' => $updateOrderSubmitList,
        ));
    }
}