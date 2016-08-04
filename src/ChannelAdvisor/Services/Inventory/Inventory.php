<?php namespace ChannelAdvisor\Services\Inventory;

use ChannelAdvisor\Services\Service;

class Inventory extends Service
{
    public function addUpsellRelationship(array $upsellInfoList)
    {
        return $this->request()->AddUpsellRelationship([
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ]);
    }

    public function assignLabelListToInventoryItemList(array $labelList, $createLabelIfNotExist, array $skuList, $assignReasonDesc = '')
    {
        return $this->request()->AssignLabelListToInventoryItemList([
            'accountID' => $this->getAccountId(),
            'labelList' => $labelList,
            'createLabelIfNotExist' => $createLabelIfNotExist,
            'skuList' => $skuList,
            'assignReasonDesc' => $assignReasonDesc,
        ]);
    }

    public function deleteInventoryItem()
    {
        return $this->request()->DeleteInventoryItem([
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ]);
    }

    public function deleteUpsellRelationship()
    {
        return $this->request()->DeleteUpsellRelationship([
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ]);
    }

    public function doesSkuExist()
    {
        return $this->request()->DoesSkuExist([
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ]);
    }

    public function doesSkuExistList()
    {
        return $this->request()->DoesSkuExistList([
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ]);
    }

    public function getClassificationConfigurationInformation()
    {
        return $this->request()->GetClassificationConfigurationInformation([
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ]);
    }

    public function getDistributionCenterList()
    {
        return $this->request()->GetDistributionCenterList([
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ]);
    }

    public function getFilteredInventoryItemList()
    {
        return $this->request()->GetFilteredInventoryItemList([
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ]);
    }

    public function getFilteredSkuList()
    {
        return $this->request()->GetFilteredSkuList([
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ]);
    }

    public function getInventoryItemAttributeList()
    {
        return $this->request()->GetInventoryItemAttributeList([
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ]);
    }

    public function getInventoryItemClassificationAttributeList()
    {
        return $this->request()->GetInventoryItemClassificationAttributeList([
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ]);
    }

    public function getInventoryItemImageList()
    {
        return $this->request()->GetInventoryItemImageList([
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ]);
    }

    public function getInventoryItemList()
    {
        return $this->request()->GetInventoryItemList([
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ]);
    }

    public function getInventoryItemQuantityInfo()
    {
        return $this->request()->GetInventoryItemQuantityInfo([
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ]);
    }

    public function getInventoryItemShippingInfo()
    {
        return $this->request()->GetInventoryItemShippingInfo([
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ]);
    }

    public function getInventoryItemStoreInfo()
    {
        return $this->request()->GetInventoryItemStoreInfo([
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ]);
    }

    public function getInventoryItemVariationInfo()
    {
        return $this->request()->GetInventoryItemVariationInfo([
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ]);
    }

    public function getInventoryQuantity()
    {
        return $this->request()->GetInventoryQuantity([
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ]);
    }

    public function getInventoryQuantityList()
    {
        return $this->request()->GetInventoryQuantityList([
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ]);
    }

    public function getUpsellRelationship()
    {
        return $this->request()->GetUpsellRelationship([
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ]);
    }

    public function removeLabelListFromInventoryItemList()
    {
        return $this->request()->RemoveLabelListFromInventoryItemList([
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ]);
    }

    public function synchInventoryItem()
    {
        return $this->request()->SynchInventoryItem([
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ]);
    }

    public function synchInventoryItemList()
    {
        return $this->request()->SynchInventoryItemList([
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ]);
    }

    public function updateInventoryItemQuantityAndPrice()
    {
        return $this->request()->UpdateInventoryItemQuantityAndPrice([
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ]);
    }

    public function updateInventoryItemQuantityAndPriceList()
    {
        return $this->request()->UpdateInventoryItemQuantityAndPriceList([
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        ]);
    }

}