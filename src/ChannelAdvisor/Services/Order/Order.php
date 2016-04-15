<?php namespace ChannelAdvisor\Services\Order;

use ChannelAdvisor\Services\Service;

class Order extends Service
{
    public function getOrderList(array $orderCriteria = [])
    {
        return $this->request()->GetOrderList([
            'accountID' => $this->getAccountId(),
            'orderCriteria' => $orderCriteria,
        ]);
    }

    public function getOrderRefundHistory($orderID)
    {
        return $this->request()->GetOrderRefundHistory([
            'accountID' => $this->getAccountId(),
            'orderID' => $orderId,
        ]);
    }

    public function orderMerge($primaryOrderId, array $orderIDMergeList)
    {
        return $this->request()->OrderMerge([
            'accountID' => $this->getAccountId(),
            'primaryOrderID' => $primaryOrderId,
            'orderIDMergeList' => $orderIDMergeList,
        ]);
    }

    public function orderSplit($orderId, array $lineItemIDList)
    {
        return $this->request()->OrderSplit([
            'accountID' => $this->getAccountId(),
            'orderID' => $orderId,
            'lineItemIDList' => $lineItemIDList,
        ]);
    }

    public function submitOrder(array $order)
    {
        return $this->request()->SubmitOrder([
            'accountID' => $this->getAccountId(),
            'order' => $order,
        ]);
    }

    public function submitOrderRefundByAmountAndOrderId($orderId, $amount, $reason, $sellerRefundId = null)
    {
        return $this->request()->SubmitOrderRefund([
            'accountID' => $this->getAccountId(),
            'OrderID' => $orderId,
            'Amount' => $amount,
            'AdjustmentReason' => $reason,
            'SellerRefundID' => $sellerRefundId,
        ]);
    }

    public function submitOrderRefundByAmountAndWebsiteOrderId(
        $clientOrderIdentifier,
        $amount,
        $reason,
        $sellerRefundId = ''
    ) {
        return $this->request()->SubmitOrderRefund([
            'accountID' => $this->getAccountId(),
            'ClientOrderIdentifier' => $clientOrderIdentifier,
            'Amount' => $amount,
            'AdjustmentReason' => $reason,
            'SellerRefundID' => $sellerRefundId,
        ]);
    }

    public function submitOrderRefundByItemsAndOrderId($orderId, array $refundItems, $reason, $sellerRefundId = null)
    {
        return $this->request()->SubmitOrderRefund([
            'accountID' => $this->getAccountId(),
            'OrderID' => $orderId,
            'AdjustmentReason' => $reason,
            'SellerRefundID' => $sellerRefundId,
            'RefundItems' => $refundItems,
        ]);
    }

    public function submitOrderRefundByItemsAndWebsiteOrderId(
        $clientOrderIdentifier,
        array $refundItems,
        $reason,
        $sellerRefundId = ''
    ) {
        return $this->request()->SubmitOrderRefund([
            'accountID' => $this->getAccountId(),
            'ClientOrderIdentifier' => $clientOrderIdentifier,
            'AdjustmentReason' => $reason,
            'SellerRefundID' => $sellerRefundId,
            'RefundItems' => $refundItems,
        ]);
    }

    public function setOrdersExportStatus(array $orderIDList, array $clientOrderIdentifierList, $markAsExported)
    {
        return $this->request()->SetOrdersExportStatus([
            'accountID' => $this->getAccountId(),
            'orderIDList' => $orderIDList,
            'clientOrderIdentifierList' => $clientOrderIdentifierList,
            'markAsExported' => $markAsExported,
        ]);
    }

    public function setSellerOrderId(array $orderIDList, array $sellerOrderIDList)
    {
        return $this->request()->SetSellerOrderID([
            'accountID' => $this->getAccountId(),
            'orderIDList' => $orderIDList,
            'sellerOrderIDList' => $sellerOrderIDList,
        ]);
    }

    public function setSellerOrderItemIdList($orderID, array $lineItemIDList, array $sellerOrderItemIDList)
    {
        return $this->request()->SetSellerOrderItemIDList([
            'accountID' => $this->getAccountId(),
            'orderID' => $orderID,
            'lineItemIDList' => $lineItemIDList,
            'sellerOrderItemIDList' => $sellerOrderItemIDList,
        ]);
    }

    public function updateOrderList(array $updateOrderSubmitList)
    {
        return $this->request()->UpdateOrderList([
            'accountID' => $this->getAccountId(),
            'updateOrderSubmitList' => $updateOrderSubmitList,
        ]);
    }
}