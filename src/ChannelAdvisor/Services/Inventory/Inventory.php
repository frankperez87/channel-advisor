<?php namespace ChannelAdvisor\Services\Inventory;

use ChannelAdvisor\Services\Service;

class Inventory extends Service
{
    public function addUpsellRelationship(array $upsellInfoList)
    {
        return $this->request()->AddUpsellRelationship(array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ));
    }

    public function assignLabelListToInventoryItemList(array $labelList, $createLabelIfNotExist, array $skuList, $assignReasonDesc = '')
    {
        return $this->request()->AssignLabelListToInventoryItemList(array(
            'accountID' => $this->getAccountId(),
            'labelList' => $labelList,
            'createLabelIfNotExist' => $createLabelIfNotExist,
            'skuList' => $skuList,
            'assignReasonDesc' => $assignReasonDesc,
        ));
    }

    public function deleteInventoryItem()
    {
        return $this->request()->DeleteInventoryItem(array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ));
    }

    public function deleteUpsellRelationship()
    {
        return $this->request()->DeleteUpsellRelationship(array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ));
    }

    public function doesSkuExist()
    {
        return $this->request()->DoesSkuExist(array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ));
    }

    public function doesSkuExistList()
    {
        return $this->request()->DoesSkuExistList(array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ));
    }

    public function getClassificationConfigurationInformation()
    {
        return $this->request()->GetClassificationConfigurationInformation(array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ));
    }

    public function getDistributionCenterList()
    {
        return $this->request()->GetDistributionCenterList(array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ));
    }

    public function getFilteredInventoryItemList()
    {
        return $this->request()->GetFilteredInventoryItemList(array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ));
    }

    public function getFilteredSkuList()
    {
        return $this->request()->GetFilteredSkuList(array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ));
    }

    public function getInventoryItemAttributeList()
    {
        return $this->request()->GetInventoryItemAttributeList(array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ));
    }

    public function getInventoryItemClassificationAttributeList()
    {
        return $this->request()->GetInventoryItemClassificationAttributeList(array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ));
    }

    public function getInventoryItemImageList()
    {
        return $this->request()->GetInventoryItemImageList(array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ));
    }

    public function getInventoryItemList()
    {
        return $this->request()->GetInventoryItemList(array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ));
    }

    public function getInventoryItemQuantityInfo()
    {
        return $this->request()->GetInventoryItemQuantityInfo(array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ));
    }

    public function getInventoryItemShippingInfo()
    {
        return $this->request()->GetInventoryItemShippingInfo(array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ));
    }

    public function getInventoryItemStoreInfo()
    {
        return $this->request()->GetInventoryItemStoreInfo(array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ));
    }

    public function getInventoryItemVariationInfo()
    {
        return $this->request()->GetInventoryItemVariationInfo(array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ));
    }

    public function getInventoryQuantity()
    {
        return $this->request()->GetInventoryQuantity(array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ));
    }

    public function getInventoryQuantityList()
    {
        return $this->request()->GetInventoryQuantityList(array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ));
    }

    public function getUpsellRelationship()
    {
        return $this->request()->GetUpsellRelationship(array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ));
    }

    public function removeLabelListFromInventoryItemList()
    {
        return $this->request()->RemoveLabelListFromInventoryItemList(array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ));
    }

    public function synchInventoryItem()
    {
        return $this->request()->SynchInventoryItem(array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ));
    }

    public function synchInventoryItemList()
    {
        return $this->request()->SynchInventoryItemList(array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ));
    }

    public function updateInventoryItemQuantityAndPrice()
    {
        return $this->request()->UpdateInventoryItemQuantityAndPrice(array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ));
    }

    public function updateInventoryItemQuantityAndPriceList()
    {
        return $this->request()->UpdateInventoryItemQuantityAndPriceList(array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ));
    }

}