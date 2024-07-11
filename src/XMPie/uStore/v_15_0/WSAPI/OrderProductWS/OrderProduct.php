<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS;

class OrderProduct extends ReturnObject
{

    /**
     * @var int $OrderProductID
     */
    protected $OrderProductID = null;

    /**
     * @var int $OrderID
     */
    protected $OrderID = null;

    /**
     * @var int $ProductID
     */
    protected $ProductID = null;

    /**
     * @var int $QuantityPerRecipient
     */
    protected $QuantityPerRecipient = null;

    /**
     * @var int $NumRecipients
     */
    protected $NumRecipients = null;

    /**
     * @var int $TotalQuantity
     */
    protected $TotalQuantity = null;

    /**
     * @var float $ProductUnitPrice
     */
    protected $ProductUnitPrice = null;

    /**
     * @var float $PricePerRecipient
     */
    protected $PricePerRecipient = null;

    /**
     * @var float $ProductPriceSubtotal
     */
    protected $ProductPriceSubtotal = null;

    /**
     * @var float $TotalPrice
     */
    protected $TotalPrice = null;

    /**
     * @var int $RecipientListID
     */
    protected $RecipientListID = null;

    /**
     * @var boolean $RecipientListGdprDeleted
     */
    protected $RecipientListGdprDeleted = null;

    /**
     * @var int $RecipientDataSourceID
     */
    protected $RecipientDataSourceID = null;

    /**
     * @var int $RecipientFilterID
     */
    protected $RecipientFilterID = null;

    /**
     * @var int $RecipientDataSourceTableID
     */
    protected $RecipientDataSourceTableID = null;

    /**
     * @var boolean $IsDraft
     */
    protected $IsDraft = null;

    /**
     * @var boolean $IsSavedDraft
     */
    protected $IsSavedDraft = null;

    /**
     * @var string $ExtraParamsXml
     */
    protected $ExtraParamsXml = null;

    /**
     * @var \DateTime $DateAdded
     */
    protected $DateAdded = null;

    /**
     * @var int $OrderQueueID
     */
    protected $OrderQueueID = null;

    /**
     * @var int $UproduceJobID
     */
    protected $UproduceJobID = null;

    /**
     * @var int $StatusID
     */
    protected $StatusID = null;

    /**
     * @var int $RecipientListModelID
     */
    protected $RecipientListModelID = null;

    /**
     * @var string $DocumentXml
     */
    protected $DocumentXml = null;

    /**
     * @var string $AggregationCriteria
     */
    protected $AggregationCriteria = null;

    /**
     * @var int $JobGroupID
     */
    protected $JobGroupID = null;

    /**
     * @var string $DocAggregationCriteria
     */
    protected $DocAggregationCriteria = null;

    /**
     * @var string $FlatCsvxFilePath
     */
    protected $FlatCsvxFilePath = null;

    /**
     * @var int $UproduceHandlingFlatJobID
     */
    protected $UproduceHandlingFlatJobID = null;

    /**
     * @var int $DeliveryMethod
     */
    protected $DeliveryMethod = null;

    /**
     * @var int $DeliveryServiceID
     */
    protected $DeliveryServiceID = null;

    /**
     * @var float $DeliveryPrice
     */
    protected $DeliveryPrice = null;

    /**
     * @var int $ParentOrderProductID
     */
    protected $ParentOrderProductID = null;

    /**
     * @var float $Cost
     */
    protected $Cost = null;

    /**
     * @var CircleProjectOrderProductDetails $CircleInfo
     */
    protected $CircleInfo = null;

    /**
     * @var int $StoreID
     */
    protected $StoreID = null;

    /**
     * @param int $OrderProductID
     * @param int $OrderID
     * @param int $ProductID
     * @param int $QuantityPerRecipient
     * @param int $NumRecipients
     * @param int $TotalQuantity
     * @param float $ProductUnitPrice
     * @param float $PricePerRecipient
     * @param float $ProductPriceSubtotal
     * @param float $TotalPrice
     * @param int $RecipientListID
     * @param boolean $RecipientListGdprDeleted
     * @param int $RecipientDataSourceID
     * @param int $RecipientFilterID
     * @param int $RecipientDataSourceTableID
     * @param boolean $IsDraft
     * @param boolean $IsSavedDraft
     * @param \DateTime $DateAdded
     * @param int $OrderQueueID
     * @param int $UproduceJobID
     * @param int $StatusID
     * @param int $RecipientListModelID
     * @param int $JobGroupID
     * @param int $UproduceHandlingFlatJobID
     * @param int $DeliveryMethod
     * @param int $DeliveryServiceID
     * @param float $DeliveryPrice
     * @param int $ParentOrderProductID
     * @param float $Cost
     * @param int $StoreID
     */
    public function __construct($OrderProductID = null, $OrderID = null, $ProductID = null, $QuantityPerRecipient = null, $NumRecipients = null, $TotalQuantity = null, $ProductUnitPrice = null, $PricePerRecipient = null, $ProductPriceSubtotal = null, $TotalPrice = null, $RecipientListID = null, $RecipientListGdprDeleted = null, $RecipientDataSourceID = null, $RecipientFilterID = null, $RecipientDataSourceTableID = null, $IsDraft = null, $IsSavedDraft = null, \DateTime $DateAdded = null, $OrderQueueID = null, $UproduceJobID = null, $StatusID = null, $RecipientListModelID = null, $JobGroupID = null, $UproduceHandlingFlatJobID = null, $DeliveryMethod = null, $DeliveryServiceID = null, $DeliveryPrice = null, $ParentOrderProductID = null, $Cost = null, $StoreID = null)
    {
      $this->OrderProductID = $OrderProductID;
      $this->OrderID = $OrderID;
      $this->ProductID = $ProductID;
      $this->QuantityPerRecipient = $QuantityPerRecipient;
      $this->NumRecipients = $NumRecipients;
      $this->TotalQuantity = $TotalQuantity;
      $this->ProductUnitPrice = $ProductUnitPrice;
      $this->PricePerRecipient = $PricePerRecipient;
      $this->ProductPriceSubtotal = $ProductPriceSubtotal;
      $this->TotalPrice = $TotalPrice;
      $this->RecipientListID = $RecipientListID;
      $this->RecipientListGdprDeleted = $RecipientListGdprDeleted;
      $this->RecipientDataSourceID = $RecipientDataSourceID;
      $this->RecipientFilterID = $RecipientFilterID;
      $this->RecipientDataSourceTableID = $RecipientDataSourceTableID;
      $this->IsDraft = $IsDraft;
      $this->IsSavedDraft = $IsSavedDraft;
      $this->DateAdded = $DateAdded ? $DateAdded->format(\DateTime::ATOM) : null;
      $this->OrderQueueID = $OrderQueueID;
      $this->UproduceJobID = $UproduceJobID;
      $this->StatusID = $StatusID;
      $this->RecipientListModelID = $RecipientListModelID;
      $this->JobGroupID = $JobGroupID;
      $this->UproduceHandlingFlatJobID = $UproduceHandlingFlatJobID;
      $this->DeliveryMethod = $DeliveryMethod;
      $this->DeliveryServiceID = $DeliveryServiceID;
      $this->DeliveryPrice = $DeliveryPrice;
      $this->ParentOrderProductID = $ParentOrderProductID;
      $this->Cost = $Cost;
      $this->StoreID = $StoreID;
    }

    /**
     * @return int
     */
    public function getOrderProductID()
    {
      return $this->OrderProductID;
    }

    /**
     * @param int $OrderProductID
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setOrderProductID($OrderProductID)
    {
      $this->OrderProductID = $OrderProductID;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderID()
    {
      return $this->OrderID;
    }

    /**
     * @param int $OrderID
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setOrderID($OrderID)
    {
      $this->OrderID = $OrderID;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductID()
    {
      return $this->ProductID;
    }

    /**
     * @param int $ProductID
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantityPerRecipient()
    {
      return $this->QuantityPerRecipient;
    }

    /**
     * @param int $QuantityPerRecipient
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setQuantityPerRecipient($QuantityPerRecipient)
    {
      $this->QuantityPerRecipient = $QuantityPerRecipient;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumRecipients()
    {
      return $this->NumRecipients;
    }

    /**
     * @param int $NumRecipients
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setNumRecipients($NumRecipients)
    {
      $this->NumRecipients = $NumRecipients;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalQuantity()
    {
      return $this->TotalQuantity;
    }

    /**
     * @param int $TotalQuantity
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setTotalQuantity($TotalQuantity)
    {
      $this->TotalQuantity = $TotalQuantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getProductUnitPrice()
    {
      return $this->ProductUnitPrice;
    }

    /**
     * @param float $ProductUnitPrice
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setProductUnitPrice($ProductUnitPrice)
    {
      $this->ProductUnitPrice = $ProductUnitPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getPricePerRecipient()
    {
      return $this->PricePerRecipient;
    }

    /**
     * @param float $PricePerRecipient
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setPricePerRecipient($PricePerRecipient)
    {
      $this->PricePerRecipient = $PricePerRecipient;
      return $this;
    }

    /**
     * @return float
     */
    public function getProductPriceSubtotal()
    {
      return $this->ProductPriceSubtotal;
    }

    /**
     * @param float $ProductPriceSubtotal
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setProductPriceSubtotal($ProductPriceSubtotal)
    {
      $this->ProductPriceSubtotal = $ProductPriceSubtotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalPrice()
    {
      return $this->TotalPrice;
    }

    /**
     * @param float $TotalPrice
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setTotalPrice($TotalPrice)
    {
      $this->TotalPrice = $TotalPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getRecipientListID()
    {
      return $this->RecipientListID;
    }

    /**
     * @param int $RecipientListID
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setRecipientListID($RecipientListID)
    {
      $this->RecipientListID = $RecipientListID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRecipientListGdprDeleted()
    {
      return $this->RecipientListGdprDeleted;
    }

    /**
     * @param boolean $RecipientListGdprDeleted
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setRecipientListGdprDeleted($RecipientListGdprDeleted)
    {
      $this->RecipientListGdprDeleted = $RecipientListGdprDeleted;
      return $this;
    }

    /**
     * @return int
     */
    public function getRecipientDataSourceID()
    {
      return $this->RecipientDataSourceID;
    }

    /**
     * @param int $RecipientDataSourceID
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setRecipientDataSourceID($RecipientDataSourceID)
    {
      $this->RecipientDataSourceID = $RecipientDataSourceID;
      return $this;
    }

    /**
     * @return int
     */
    public function getRecipientFilterID()
    {
      return $this->RecipientFilterID;
    }

    /**
     * @param int $RecipientFilterID
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setRecipientFilterID($RecipientFilterID)
    {
      $this->RecipientFilterID = $RecipientFilterID;
      return $this;
    }

    /**
     * @return int
     */
    public function getRecipientDataSourceTableID()
    {
      return $this->RecipientDataSourceTableID;
    }

    /**
     * @param int $RecipientDataSourceTableID
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setRecipientDataSourceTableID($RecipientDataSourceTableID)
    {
      $this->RecipientDataSourceTableID = $RecipientDataSourceTableID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDraft()
    {
      return $this->IsDraft;
    }

    /**
     * @param boolean $IsDraft
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setIsDraft($IsDraft)
    {
      $this->IsDraft = $IsDraft;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSavedDraft()
    {
      return $this->IsSavedDraft;
    }

    /**
     * @param boolean $IsSavedDraft
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setIsSavedDraft($IsSavedDraft)
    {
      $this->IsSavedDraft = $IsSavedDraft;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtraParamsXml()
    {
      return $this->ExtraParamsXml;
    }

    /**
     * @param string $ExtraParamsXml
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setExtraParamsXml($ExtraParamsXml)
    {
      $this->ExtraParamsXml = $ExtraParamsXml;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateAdded()
    {
      if ($this->DateAdded == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateAdded);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateAdded
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setDateAdded(\DateTime $DateAdded)
    {
      $this->DateAdded = $DateAdded->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderQueueID()
    {
      return $this->OrderQueueID;
    }

    /**
     * @param int $OrderQueueID
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setOrderQueueID($OrderQueueID)
    {
      $this->OrderQueueID = $OrderQueueID;
      return $this;
    }

    /**
     * @return int
     */
    public function getUproduceJobID()
    {
      return $this->UproduceJobID;
    }

    /**
     * @param int $UproduceJobID
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setUproduceJobID($UproduceJobID)
    {
      $this->UproduceJobID = $UproduceJobID;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatusID()
    {
      return $this->StatusID;
    }

    /**
     * @param int $StatusID
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setStatusID($StatusID)
    {
      $this->StatusID = $StatusID;
      return $this;
    }

    /**
     * @return int
     */
    public function getRecipientListModelID()
    {
      return $this->RecipientListModelID;
    }

    /**
     * @param int $RecipientListModelID
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setRecipientListModelID($RecipientListModelID)
    {
      $this->RecipientListModelID = $RecipientListModelID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocumentXml()
    {
      return $this->DocumentXml;
    }

    /**
     * @param string $DocumentXml
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setDocumentXml($DocumentXml)
    {
      $this->DocumentXml = $DocumentXml;
      return $this;
    }

    /**
     * @return string
     */
    public function getAggregationCriteria()
    {
      return $this->AggregationCriteria;
    }

    /**
     * @param string $AggregationCriteria
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setAggregationCriteria($AggregationCriteria)
    {
      $this->AggregationCriteria = $AggregationCriteria;
      return $this;
    }

    /**
     * @return int
     */
    public function getJobGroupID()
    {
      return $this->JobGroupID;
    }

    /**
     * @param int $JobGroupID
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setJobGroupID($JobGroupID)
    {
      $this->JobGroupID = $JobGroupID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocAggregationCriteria()
    {
      return $this->DocAggregationCriteria;
    }

    /**
     * @param string $DocAggregationCriteria
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setDocAggregationCriteria($DocAggregationCriteria)
    {
      $this->DocAggregationCriteria = $DocAggregationCriteria;
      return $this;
    }

    /**
     * @return string
     */
    public function getFlatCsvxFilePath()
    {
      return $this->FlatCsvxFilePath;
    }

    /**
     * @param string $FlatCsvxFilePath
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setFlatCsvxFilePath($FlatCsvxFilePath)
    {
      $this->FlatCsvxFilePath = $FlatCsvxFilePath;
      return $this;
    }

    /**
     * @return int
     */
    public function getUproduceHandlingFlatJobID()
    {
      return $this->UproduceHandlingFlatJobID;
    }

    /**
     * @param int $UproduceHandlingFlatJobID
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setUproduceHandlingFlatJobID($UproduceHandlingFlatJobID)
    {
      $this->UproduceHandlingFlatJobID = $UproduceHandlingFlatJobID;
      return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryMethod()
    {
      return $this->DeliveryMethod;
    }

    /**
     * @param int $DeliveryMethod
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setDeliveryMethod($DeliveryMethod)
    {
      $this->DeliveryMethod = $DeliveryMethod;
      return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryServiceID()
    {
      return $this->DeliveryServiceID;
    }

    /**
     * @param int $DeliveryServiceID
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setDeliveryServiceID($DeliveryServiceID)
    {
      $this->DeliveryServiceID = $DeliveryServiceID;
      return $this;
    }

    /**
     * @return float
     */
    public function getDeliveryPrice()
    {
      return $this->DeliveryPrice;
    }

    /**
     * @param float $DeliveryPrice
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setDeliveryPrice($DeliveryPrice)
    {
      $this->DeliveryPrice = $DeliveryPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentOrderProductID()
    {
      return $this->ParentOrderProductID;
    }

    /**
     * @param int $ParentOrderProductID
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setParentOrderProductID($ParentOrderProductID)
    {
      $this->ParentOrderProductID = $ParentOrderProductID;
      return $this;
    }

    /**
     * @return float
     */
    public function getCost()
    {
      return $this->Cost;
    }

    /**
     * @param float $Cost
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setCost($Cost)
    {
      $this->Cost = $Cost;
      return $this;
    }

    /**
     * @return CircleProjectOrderProductDetails
     */
    public function getCircleInfo()
    {
      return $this->CircleInfo;
    }

    /**
     * @param CircleProjectOrderProductDetails $CircleInfo
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setCircleInfo($CircleInfo)
    {
      $this->CircleInfo = $CircleInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getStoreID()
    {
      return $this->StoreID;
    }

    /**
     * @param int $StoreID
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\OrderProduct
     */
    public function setStoreID($StoreID)
    {
      $this->StoreID = $StoreID;
      return $this;
    }

}
