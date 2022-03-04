<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS;

class ProductProperty extends ReturnObject
{

    /**
     * @var int $PropertyID
     */
    protected $PropertyID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $ExternalID
     */
    protected $ExternalID = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $DefaultValue
     */
    protected $DefaultValue = null;

    /**
     * @var ArrayOfFieldOption $Options
     */
    protected $Options = null;

    /**
     * @var int $UIControlTypeID
     */
    protected $UIControlTypeID = null;

    /**
     * @var string $UIControlParamsXml
     */
    protected $UIControlParamsXml = null;

    /**
     * @var int $DisplayOrder
     */
    protected $DisplayOrder = null;

    /**
     * @var int $PropertyValueAutoFillTypeID
     */
    protected $PropertyValueAutoFillTypeID = null;

    /**
     * @var int $StatusID
     */
    protected $StatusID = null;

    /**
     * @var int $ProductID
     */
    protected $ProductID = null;

    /**
     * @var boolean $IsGlobal
     */
    protected $IsGlobal = null;

    /**
     * @var boolean $MandatoryInEveryProduct
     */
    protected $MandatoryInEveryProduct = null;

    /**
     * @var boolean $StoreAdminMayChangeValue
     */
    protected $StoreAdminMayChangeValue = null;

    /**
     * @var boolean $StoreAdminMayChangeConfig
     */
    protected $StoreAdminMayChangeConfig = null;

    /**
     * @var boolean $VisibleToCustomer
     */
    protected $VisibleToCustomer = null;

    /**
     * @var boolean $CustomerMayChangeValue
     */
    protected $CustomerMayChangeValue = null;

    /**
     * @var boolean $UsedInPricingCalculation
     */
    protected $UsedInPricingCalculation = null;

    /**
     * @var boolean $UsedInShippingCostCalculation
     */
    protected $UsedInShippingCostCalculation = null;

    /**
     * @var boolean $SuperUserMayChangeConfig
     */
    protected $SuperUserMayChangeConfig = null;

    /**
     * @var boolean $AffectsAggregation
     */
    protected $AffectsAggregation = null;

    /**
     * @var boolean $UsedForLogicalName
     */
    protected $UsedForLogicalName = null;

    /**
     * @var int $BasePropertyID
     */
    protected $BasePropertyID = null;

    /**
     * @var int $DatasourceQueryID
     */
    protected $DatasourceQueryID = null;

    /**
     * @var boolean $UsedForSplitShipping
     */
    protected $UsedForSplitShipping = null;

    /**
     * @var int $DependentOnFieldOptionID
     */
    protected $DependentOnFieldOptionID = null;

    /**
     * @var int $PropertyUnitID
     */
    protected $PropertyUnitID = null;

    /**
     * @param int $PropertyID
     * @param int $UIControlTypeID
     * @param int $DisplayOrder
     * @param int $PropertyValueAutoFillTypeID
     * @param int $StatusID
     * @param int $ProductID
     * @param boolean $IsGlobal
     * @param boolean $MandatoryInEveryProduct
     * @param boolean $StoreAdminMayChangeValue
     * @param boolean $StoreAdminMayChangeConfig
     * @param boolean $VisibleToCustomer
     * @param boolean $CustomerMayChangeValue
     * @param boolean $UsedInPricingCalculation
     * @param boolean $UsedInShippingCostCalculation
     * @param boolean $SuperUserMayChangeConfig
     * @param boolean $AffectsAggregation
     * @param boolean $UsedForLogicalName
     * @param int $BasePropertyID
     * @param int $DatasourceQueryID
     * @param boolean $UsedForSplitShipping
     * @param int $DependentOnFieldOptionID
     * @param int $PropertyUnitID
     */
    public function __construct($PropertyID = null, $UIControlTypeID = null, $DisplayOrder = null, $PropertyValueAutoFillTypeID = null, $StatusID = null, $ProductID = null, $IsGlobal = null, $MandatoryInEveryProduct = null, $StoreAdminMayChangeValue = null, $StoreAdminMayChangeConfig = null, $VisibleToCustomer = null, $CustomerMayChangeValue = null, $UsedInPricingCalculation = null, $UsedInShippingCostCalculation = null, $SuperUserMayChangeConfig = null, $AffectsAggregation = null, $UsedForLogicalName = null, $BasePropertyID = null, $DatasourceQueryID = null, $UsedForSplitShipping = null, $DependentOnFieldOptionID = null, $PropertyUnitID = null)
    {
      $this->PropertyID = $PropertyID;
      $this->UIControlTypeID = $UIControlTypeID;
      $this->DisplayOrder = $DisplayOrder;
      $this->PropertyValueAutoFillTypeID = $PropertyValueAutoFillTypeID;
      $this->StatusID = $StatusID;
      $this->ProductID = $ProductID;
      $this->IsGlobal = $IsGlobal;
      $this->MandatoryInEveryProduct = $MandatoryInEveryProduct;
      $this->StoreAdminMayChangeValue = $StoreAdminMayChangeValue;
      $this->StoreAdminMayChangeConfig = $StoreAdminMayChangeConfig;
      $this->VisibleToCustomer = $VisibleToCustomer;
      $this->CustomerMayChangeValue = $CustomerMayChangeValue;
      $this->UsedInPricingCalculation = $UsedInPricingCalculation;
      $this->UsedInShippingCostCalculation = $UsedInShippingCostCalculation;
      $this->SuperUserMayChangeConfig = $SuperUserMayChangeConfig;
      $this->AffectsAggregation = $AffectsAggregation;
      $this->UsedForLogicalName = $UsedForLogicalName;
      $this->BasePropertyID = $BasePropertyID;
      $this->DatasourceQueryID = $DatasourceQueryID;
      $this->UsedForSplitShipping = $UsedForSplitShipping;
      $this->DependentOnFieldOptionID = $DependentOnFieldOptionID;
      $this->PropertyUnitID = $PropertyUnitID;
    }

    /**
     * @return int
     */
    public function getPropertyID()
    {
      return $this->PropertyID;
    }

    /**
     * @param int $PropertyID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setPropertyID($PropertyID)
    {
      $this->PropertyID = $PropertyID;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalID()
    {
      return $this->ExternalID;
    }

    /**
     * @param string $ExternalID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setExternalID($ExternalID)
    {
      $this->ExternalID = $ExternalID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefaultValue()
    {
      return $this->DefaultValue;
    }

    /**
     * @param string $DefaultValue
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setDefaultValue($DefaultValue)
    {
      $this->DefaultValue = $DefaultValue;
      return $this;
    }

    /**
     * @return ArrayOfFieldOption
     */
    public function getOptions()
    {
      return $this->Options;
    }

    /**
     * @param ArrayOfFieldOption $Options
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setOptions($Options)
    {
      $this->Options = $Options;
      return $this;
    }

    /**
     * @return int
     */
    public function getUIControlTypeID()
    {
      return $this->UIControlTypeID;
    }

    /**
     * @param int $UIControlTypeID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setUIControlTypeID($UIControlTypeID)
    {
      $this->UIControlTypeID = $UIControlTypeID;
      return $this;
    }

    /**
     * @return string
     */
    public function getUIControlParamsXml()
    {
      return $this->UIControlParamsXml;
    }

    /**
     * @param string $UIControlParamsXml
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setUIControlParamsXml($UIControlParamsXml)
    {
      $this->UIControlParamsXml = $UIControlParamsXml;
      return $this;
    }

    /**
     * @return int
     */
    public function getDisplayOrder()
    {
      return $this->DisplayOrder;
    }

    /**
     * @param int $DisplayOrder
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setDisplayOrder($DisplayOrder)
    {
      $this->DisplayOrder = $DisplayOrder;
      return $this;
    }

    /**
     * @return int
     */
    public function getPropertyValueAutoFillTypeID()
    {
      return $this->PropertyValueAutoFillTypeID;
    }

    /**
     * @param int $PropertyValueAutoFillTypeID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setPropertyValueAutoFillTypeID($PropertyValueAutoFillTypeID)
    {
      $this->PropertyValueAutoFillTypeID = $PropertyValueAutoFillTypeID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setStatusID($StatusID)
    {
      $this->StatusID = $StatusID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsGlobal()
    {
      return $this->IsGlobal;
    }

    /**
     * @param boolean $IsGlobal
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setIsGlobal($IsGlobal)
    {
      $this->IsGlobal = $IsGlobal;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMandatoryInEveryProduct()
    {
      return $this->MandatoryInEveryProduct;
    }

    /**
     * @param boolean $MandatoryInEveryProduct
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setMandatoryInEveryProduct($MandatoryInEveryProduct)
    {
      $this->MandatoryInEveryProduct = $MandatoryInEveryProduct;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStoreAdminMayChangeValue()
    {
      return $this->StoreAdminMayChangeValue;
    }

    /**
     * @param boolean $StoreAdminMayChangeValue
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setStoreAdminMayChangeValue($StoreAdminMayChangeValue)
    {
      $this->StoreAdminMayChangeValue = $StoreAdminMayChangeValue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStoreAdminMayChangeConfig()
    {
      return $this->StoreAdminMayChangeConfig;
    }

    /**
     * @param boolean $StoreAdminMayChangeConfig
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setStoreAdminMayChangeConfig($StoreAdminMayChangeConfig)
    {
      $this->StoreAdminMayChangeConfig = $StoreAdminMayChangeConfig;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVisibleToCustomer()
    {
      return $this->VisibleToCustomer;
    }

    /**
     * @param boolean $VisibleToCustomer
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setVisibleToCustomer($VisibleToCustomer)
    {
      $this->VisibleToCustomer = $VisibleToCustomer;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCustomerMayChangeValue()
    {
      return $this->CustomerMayChangeValue;
    }

    /**
     * @param boolean $CustomerMayChangeValue
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setCustomerMayChangeValue($CustomerMayChangeValue)
    {
      $this->CustomerMayChangeValue = $CustomerMayChangeValue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUsedInPricingCalculation()
    {
      return $this->UsedInPricingCalculation;
    }

    /**
     * @param boolean $UsedInPricingCalculation
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setUsedInPricingCalculation($UsedInPricingCalculation)
    {
      $this->UsedInPricingCalculation = $UsedInPricingCalculation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUsedInShippingCostCalculation()
    {
      return $this->UsedInShippingCostCalculation;
    }

    /**
     * @param boolean $UsedInShippingCostCalculation
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setUsedInShippingCostCalculation($UsedInShippingCostCalculation)
    {
      $this->UsedInShippingCostCalculation = $UsedInShippingCostCalculation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuperUserMayChangeConfig()
    {
      return $this->SuperUserMayChangeConfig;
    }

    /**
     * @param boolean $SuperUserMayChangeConfig
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setSuperUserMayChangeConfig($SuperUserMayChangeConfig)
    {
      $this->SuperUserMayChangeConfig = $SuperUserMayChangeConfig;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAffectsAggregation()
    {
      return $this->AffectsAggregation;
    }

    /**
     * @param boolean $AffectsAggregation
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setAffectsAggregation($AffectsAggregation)
    {
      $this->AffectsAggregation = $AffectsAggregation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUsedForLogicalName()
    {
      return $this->UsedForLogicalName;
    }

    /**
     * @param boolean $UsedForLogicalName
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setUsedForLogicalName($UsedForLogicalName)
    {
      $this->UsedForLogicalName = $UsedForLogicalName;
      return $this;
    }

    /**
     * @return int
     */
    public function getBasePropertyID()
    {
      return $this->BasePropertyID;
    }

    /**
     * @param int $BasePropertyID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setBasePropertyID($BasePropertyID)
    {
      $this->BasePropertyID = $BasePropertyID;
      return $this;
    }

    /**
     * @return int
     */
    public function getDatasourceQueryID()
    {
      return $this->DatasourceQueryID;
    }

    /**
     * @param int $DatasourceQueryID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setDatasourceQueryID($DatasourceQueryID)
    {
      $this->DatasourceQueryID = $DatasourceQueryID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUsedForSplitShipping()
    {
      return $this->UsedForSplitShipping;
    }

    /**
     * @param boolean $UsedForSplitShipping
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setUsedForSplitShipping($UsedForSplitShipping)
    {
      $this->UsedForSplitShipping = $UsedForSplitShipping;
      return $this;
    }

    /**
     * @return int
     */
    public function getDependentOnFieldOptionID()
    {
      return $this->DependentOnFieldOptionID;
    }

    /**
     * @param int $DependentOnFieldOptionID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setDependentOnFieldOptionID($DependentOnFieldOptionID)
    {
      $this->DependentOnFieldOptionID = $DependentOnFieldOptionID;
      return $this;
    }

    /**
     * @return int
     */
    public function getPropertyUnitID()
    {
      return $this->PropertyUnitID;
    }

    /**
     * @param int $PropertyUnitID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty
     */
    public function setPropertyUnitID($PropertyUnitID)
    {
      $this->PropertyUnitID = $PropertyUnitID;
      return $this;
    }

}
