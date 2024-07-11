<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS;

class Product extends ReturnObject
{

    /**
     * @var int $ProductID
     */
    protected $ProductID = null;

    /**
     * @var int $StoreID
     */
    protected $StoreID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $ShortDescrition
     */
    protected $ShortDescrition = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var boolean $HasPricing
     */
    protected $HasPricing = null;

    /**
     * @var boolean $EnableRecipientListModels
     */
    protected $EnableRecipientListModels = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var int $CreatedLoginSessionID
     */
    protected $CreatedLoginSessionID = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var int $ModifiedLoginSessionID
     */
    protected $ModifiedLoginSessionID = null;

    /**
     * @var int $DisplayOrder
     */
    protected $DisplayOrder = null;

    /**
     * @var int $StatusID
     */
    protected $StatusID = null;

    /**
     * @var int $PricingModelID
     */
    protected $PricingModelID = null;

    /**
     * @var string $ExternalID
     */
    protected $ExternalID = null;

    /**
     * @var boolean $EnableUedit
     */
    protected $EnableUedit = null;

    /**
     * @var string $UeditHelpText
     */
    protected $UeditHelpText = null;

    /**
     * @var int $UeditCustomerDisplayMode
     */
    protected $UeditCustomerDisplayMode = null;

    /**
     * @var int $UeditCustomerViewMode
     */
    protected $UeditCustomerViewMode = null;

    /**
     * @var boolean $EnableProofApproval
     */
    protected $EnableProofApproval = null;

    /**
     * @var string $ProofApprovalText
     */
    protected $ProofApprovalText = null;

    /**
     * @var string $ProofApprovalError
     */
    protected $ProofApprovalError = null;

    /**
     * @var boolean $IsDeliveryManualProductAmount
     */
    protected $IsDeliveryManualProductAmount = null;

    /**
     * @var int $DefaultProofType
     */
    protected $DefaultProofType = null;

    /**
     * @var int $DocumentID
     */
    protected $DocumentID = null;

    /**
     * @var string $KeyWords
     */
    protected $KeyWords = null;

    /**
     * @var boolean $EnableProofGeneration
     */
    protected $EnableProofGeneration = null;

    /**
     * @var boolean $TopNavigationButtonsVisible
     */
    protected $TopNavigationButtonsVisible = null;

    /**
     * @var boolean $ShowShortDesc
     */
    protected $ShowShortDesc = null;

    /**
     * @var boolean $ShowMinPrice
     */
    protected $ShowMinPrice = null;

    /**
     * @var int $ProductNameDisplayID
     */
    protected $ProductNameDisplayID = null;

    /**
     * @var string $CatalogNumber
     */
    protected $CatalogNumber = null;

    /**
     * @var boolean $UeditFontsUseSelected
     */
    protected $UeditFontsUseSelected = null;

    /**
     * @var int $ProductProfileID
     */
    protected $ProductProfileID = null;

    /**
     * @var int $TaxGroupID
     */
    protected $TaxGroupID = null;

    /**
     * @param int $ProductID
     * @param int $StoreID
     * @param boolean $HasPricing
     * @param boolean $EnableRecipientListModels
     * @param \DateTime $CreatedDate
     * @param int $CreatedLoginSessionID
     * @param \DateTime $ModifiedDate
     * @param int $ModifiedLoginSessionID
     * @param int $DisplayOrder
     * @param int $StatusID
     * @param int $PricingModelID
     * @param boolean $EnableUedit
     * @param int $UeditCustomerDisplayMode
     * @param int $UeditCustomerViewMode
     * @param boolean $EnableProofApproval
     * @param boolean $IsDeliveryManualProductAmount
     * @param int $DefaultProofType
     * @param int $DocumentID
     * @param boolean $EnableProofGeneration
     * @param boolean $TopNavigationButtonsVisible
     * @param boolean $ShowShortDesc
     * @param boolean $ShowMinPrice
     * @param int $ProductNameDisplayID
     * @param boolean $UeditFontsUseSelected
     * @param int $ProductProfileID
     * @param int $TaxGroupID
     */
    public function __construct($ProductID = null, $StoreID = null, $HasPricing = null, $EnableRecipientListModels = null, \DateTime $CreatedDate = null, $CreatedLoginSessionID = null, \DateTime $ModifiedDate = null, $ModifiedLoginSessionID = null, $DisplayOrder = null, $StatusID = null, $PricingModelID = null, $EnableUedit = null, $UeditCustomerDisplayMode = null, $UeditCustomerViewMode = null, $EnableProofApproval = null, $IsDeliveryManualProductAmount = null, $DefaultProofType = null, $DocumentID = null, $EnableProofGeneration = null, $TopNavigationButtonsVisible = null, $ShowShortDesc = null, $ShowMinPrice = null, $ProductNameDisplayID = null, $UeditFontsUseSelected = null, $ProductProfileID = null, $TaxGroupID = null)
    {
      $this->ProductID = $ProductID;
      $this->StoreID = $StoreID;
      $this->HasPricing = $HasPricing;
      $this->EnableRecipientListModels = $EnableRecipientListModels;
      $this->CreatedDate = $CreatedDate ? $CreatedDate->format(\DateTime::ATOM) : null;
      $this->CreatedLoginSessionID = $CreatedLoginSessionID;
      $this->ModifiedDate = $ModifiedDate ? $ModifiedDate->format(\DateTime::ATOM) : null;
      $this->ModifiedLoginSessionID = $ModifiedLoginSessionID;
      $this->DisplayOrder = $DisplayOrder;
      $this->StatusID = $StatusID;
      $this->PricingModelID = $PricingModelID;
      $this->EnableUedit = $EnableUedit;
      $this->UeditCustomerDisplayMode = $UeditCustomerDisplayMode;
      $this->UeditCustomerViewMode = $UeditCustomerViewMode;
      $this->EnableProofApproval = $EnableProofApproval;
      $this->IsDeliveryManualProductAmount = $IsDeliveryManualProductAmount;
      $this->DefaultProofType = $DefaultProofType;
      $this->DocumentID = $DocumentID;
      $this->EnableProofGeneration = $EnableProofGeneration;
      $this->TopNavigationButtonsVisible = $TopNavigationButtonsVisible;
      $this->ShowShortDesc = $ShowShortDesc;
      $this->ShowMinPrice = $ShowMinPrice;
      $this->ProductNameDisplayID = $ProductNameDisplayID;
      $this->UeditFontsUseSelected = $UeditFontsUseSelected;
      $this->ProductProfileID = $ProductProfileID;
      $this->TaxGroupID = $TaxGroupID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setStoreID($StoreID)
    {
      $this->StoreID = $StoreID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getShortDescrition()
    {
      return $this->ShortDescrition;
    }

    /**
     * @param string $ShortDescrition
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setShortDescrition($ShortDescrition)
    {
      $this->ShortDescrition = $ShortDescrition;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasPricing()
    {
      return $this->HasPricing;
    }

    /**
     * @param boolean $HasPricing
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setHasPricing($HasPricing)
    {
      $this->HasPricing = $HasPricing;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableRecipientListModels()
    {
      return $this->EnableRecipientListModels;
    }

    /**
     * @param boolean $EnableRecipientListModels
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setEnableRecipientListModels($EnableRecipientListModels)
    {
      $this->EnableRecipientListModels = $EnableRecipientListModels;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->CreatedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreatedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreatedDate
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setCreatedDate(\DateTime $CreatedDate)
    {
      $this->CreatedDate = $CreatedDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getCreatedLoginSessionID()
    {
      return $this->CreatedLoginSessionID;
    }

    /**
     * @param int $CreatedLoginSessionID
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setCreatedLoginSessionID($CreatedLoginSessionID)
    {
      $this->CreatedLoginSessionID = $CreatedLoginSessionID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedDate()
    {
      if ($this->ModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModifiedDate
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setModifiedDate(\DateTime $ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getModifiedLoginSessionID()
    {
      return $this->ModifiedLoginSessionID;
    }

    /**
     * @param int $ModifiedLoginSessionID
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setModifiedLoginSessionID($ModifiedLoginSessionID)
    {
      $this->ModifiedLoginSessionID = $ModifiedLoginSessionID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setDisplayOrder($DisplayOrder)
    {
      $this->DisplayOrder = $DisplayOrder;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setStatusID($StatusID)
    {
      $this->StatusID = $StatusID;
      return $this;
    }

    /**
     * @return int
     */
    public function getPricingModelID()
    {
      return $this->PricingModelID;
    }

    /**
     * @param int $PricingModelID
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setPricingModelID($PricingModelID)
    {
      $this->PricingModelID = $PricingModelID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setExternalID($ExternalID)
    {
      $this->ExternalID = $ExternalID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableUedit()
    {
      return $this->EnableUedit;
    }

    /**
     * @param boolean $EnableUedit
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setEnableUedit($EnableUedit)
    {
      $this->EnableUedit = $EnableUedit;
      return $this;
    }

    /**
     * @return string
     */
    public function getUeditHelpText()
    {
      return $this->UeditHelpText;
    }

    /**
     * @param string $UeditHelpText
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setUeditHelpText($UeditHelpText)
    {
      $this->UeditHelpText = $UeditHelpText;
      return $this;
    }

    /**
     * @return int
     */
    public function getUeditCustomerDisplayMode()
    {
      return $this->UeditCustomerDisplayMode;
    }

    /**
     * @param int $UeditCustomerDisplayMode
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setUeditCustomerDisplayMode($UeditCustomerDisplayMode)
    {
      $this->UeditCustomerDisplayMode = $UeditCustomerDisplayMode;
      return $this;
    }

    /**
     * @return int
     */
    public function getUeditCustomerViewMode()
    {
      return $this->UeditCustomerViewMode;
    }

    /**
     * @param int $UeditCustomerViewMode
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setUeditCustomerViewMode($UeditCustomerViewMode)
    {
      $this->UeditCustomerViewMode = $UeditCustomerViewMode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableProofApproval()
    {
      return $this->EnableProofApproval;
    }

    /**
     * @param boolean $EnableProofApproval
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setEnableProofApproval($EnableProofApproval)
    {
      $this->EnableProofApproval = $EnableProofApproval;
      return $this;
    }

    /**
     * @return string
     */
    public function getProofApprovalText()
    {
      return $this->ProofApprovalText;
    }

    /**
     * @param string $ProofApprovalText
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setProofApprovalText($ProofApprovalText)
    {
      $this->ProofApprovalText = $ProofApprovalText;
      return $this;
    }

    /**
     * @return string
     */
    public function getProofApprovalError()
    {
      return $this->ProofApprovalError;
    }

    /**
     * @param string $ProofApprovalError
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setProofApprovalError($ProofApprovalError)
    {
      $this->ProofApprovalError = $ProofApprovalError;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDeliveryManualProductAmount()
    {
      return $this->IsDeliveryManualProductAmount;
    }

    /**
     * @param boolean $IsDeliveryManualProductAmount
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setIsDeliveryManualProductAmount($IsDeliveryManualProductAmount)
    {
      $this->IsDeliveryManualProductAmount = $IsDeliveryManualProductAmount;
      return $this;
    }

    /**
     * @return int
     */
    public function getDefaultProofType()
    {
      return $this->DefaultProofType;
    }

    /**
     * @param int $DefaultProofType
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setDefaultProofType($DefaultProofType)
    {
      $this->DefaultProofType = $DefaultProofType;
      return $this;
    }

    /**
     * @return int
     */
    public function getDocumentID()
    {
      return $this->DocumentID;
    }

    /**
     * @param int $DocumentID
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setDocumentID($DocumentID)
    {
      $this->DocumentID = $DocumentID;
      return $this;
    }

    /**
     * @return string
     */
    public function getKeyWords()
    {
      return $this->KeyWords;
    }

    /**
     * @param string $KeyWords
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setKeyWords($KeyWords)
    {
      $this->KeyWords = $KeyWords;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableProofGeneration()
    {
      return $this->EnableProofGeneration;
    }

    /**
     * @param boolean $EnableProofGeneration
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setEnableProofGeneration($EnableProofGeneration)
    {
      $this->EnableProofGeneration = $EnableProofGeneration;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTopNavigationButtonsVisible()
    {
      return $this->TopNavigationButtonsVisible;
    }

    /**
     * @param boolean $TopNavigationButtonsVisible
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setTopNavigationButtonsVisible($TopNavigationButtonsVisible)
    {
      $this->TopNavigationButtonsVisible = $TopNavigationButtonsVisible;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowShortDesc()
    {
      return $this->ShowShortDesc;
    }

    /**
     * @param boolean $ShowShortDesc
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setShowShortDesc($ShowShortDesc)
    {
      $this->ShowShortDesc = $ShowShortDesc;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowMinPrice()
    {
      return $this->ShowMinPrice;
    }

    /**
     * @param boolean $ShowMinPrice
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setShowMinPrice($ShowMinPrice)
    {
      $this->ShowMinPrice = $ShowMinPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductNameDisplayID()
    {
      return $this->ProductNameDisplayID;
    }

    /**
     * @param int $ProductNameDisplayID
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setProductNameDisplayID($ProductNameDisplayID)
    {
      $this->ProductNameDisplayID = $ProductNameDisplayID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCatalogNumber()
    {
      return $this->CatalogNumber;
    }

    /**
     * @param string $CatalogNumber
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setCatalogNumber($CatalogNumber)
    {
      $this->CatalogNumber = $CatalogNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUeditFontsUseSelected()
    {
      return $this->UeditFontsUseSelected;
    }

    /**
     * @param boolean $UeditFontsUseSelected
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setUeditFontsUseSelected($UeditFontsUseSelected)
    {
      $this->UeditFontsUseSelected = $UeditFontsUseSelected;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductProfileID()
    {
      return $this->ProductProfileID;
    }

    /**
     * @param int $ProductProfileID
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setProductProfileID($ProductProfileID)
    {
      $this->ProductProfileID = $ProductProfileID;
      return $this;
    }

    /**
     * @return int
     */
    public function getTaxGroupID()
    {
      return $this->TaxGroupID;
    }

    /**
     * @param int $TaxGroupID
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\Product
     */
    public function setTaxGroupID($TaxGroupID)
    {
      $this->TaxGroupID = $TaxGroupID;
      return $this;
    }

}
