<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS;

class Store extends ReturnObject
{

    /**
     * @var int $StoreID
     */
    protected $StoreID = null;

    /**
     * @var int $CultureID
     */
    protected $CultureID = null;

    /**
     * @var int $MallID
     */
    protected $MallID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $WelcomeText
     */
    protected $WelcomeText = null;

    /**
     * @var string $HeaderTitle
     */
    protected $HeaderTitle = null;

    /**
     * @var string $UproduceUser
     */
    protected $UproduceUser = null;

    /**
     * @var string $LandingDomain
     */
    protected $LandingDomain = null;

    /**
     * @var string $LandingFolder
     */
    protected $LandingFolder = null;

    /**
     * @var boolean $HasPricing
     */
    protected $HasPricing = null;

    /**
     * @var boolean $HasDelivery
     */
    protected $HasDelivery = null;

    /**
     * @var int $StatusID
     */
    protected $StatusID = null;

    /**
     * @var string $WelcomePageUrl
     */
    protected $WelcomePageUrl = null;

    /**
     * @var string $WelcomePageSql
     */
    protected $WelcomePageSql = null;

    /**
     * @var boolean $EnableRegistration
     */
    protected $EnableRegistration = null;

    /**
     * @var string $RegistrationText
     */
    protected $RegistrationText = null;

    /**
     * @var string $RegistrationUrl
     */
    protected $RegistrationUrl = null;

    /**
     * @var string $OrderConfirmationText
     */
    protected $OrderConfirmationText = null;

    /**
     * @var string $ExternalID
     */
    protected $ExternalID = null;

    /**
     * @var int $UsadataAccountID
     */
    protected $UsadataAccountID = null;

    /**
     * @var int $PricingModelID
     */
    protected $PricingModelID = null;

    /**
     * @var int $DefaultProofType
     */
    protected $DefaultProofType = null;

    /**
     * @var boolean $ShowProductSearch
     */
    protected $ShowProductSearch = null;

    /**
     * @var int $PickupAddressID
     */
    protected $PickupAddressID = null;

    /**
     * @var string $CustomHeaderUrl
     */
    protected $CustomHeaderUrl = null;

    /**
     * @var string $CustomFooterUrl
     */
    protected $CustomFooterUrl = null;

    /**
     * @var int $ProductListPreviewStyleID
     */
    protected $ProductListPreviewStyleID = null;

    /**
     * @var string $OrderDetailsDescription
     */
    protected $OrderDetailsDescription = null;

    /**
     * @var string $ShoppingCartDescription
     */
    protected $ShoppingCartDescription = null;

    /**
     * @var int $UproduceEmailProviderID
     */
    protected $UproduceEmailProviderID = null;

    /**
     * @var boolean $ProductListAllowPaging
     */
    protected $ProductListAllowPaging = null;

    /**
     * @var int $ProductsPerPage
     */
    protected $ProductsPerPage = null;

    /**
     * @var int $SslOption
     */
    protected $SslOption = null;

    /**
     * @var int $SkinID
     */
    protected $SkinID = null;

    /**
     * @var int $SetupCultureID
     */
    protected $SetupCultureID = null;

    /**
     * @var int $DefaultCultureID
     */
    protected $DefaultCultureID = null;

    /**
     * @var int $AnonymousUsersGroupId
     */
    protected $AnonymousUsersGroupId = null;

    /**
     * @var int $RegisteredUsersGroupId
     */
    protected $RegisteredUsersGroupId = null;

    /**
     * @var int $TaxFormatTypeID
     */
    protected $TaxFormatTypeID = null;

    /**
     * @var int $PrimaryCurrencyID
     */
    protected $PrimaryCurrencyID = null;

    /**
     * @param int $StoreID
     * @param int $CultureID
     * @param int $MallID
     * @param boolean $HasPricing
     * @param boolean $HasDelivery
     * @param int $StatusID
     * @param boolean $EnableRegistration
     * @param int $UsadataAccountID
     * @param int $PricingModelID
     * @param int $DefaultProofType
     * @param boolean $ShowProductSearch
     * @param int $PickupAddressID
     * @param int $ProductListPreviewStyleID
     * @param int $UproduceEmailProviderID
     * @param boolean $ProductListAllowPaging
     * @param int $ProductsPerPage
     * @param int $SslOption
     * @param int $SkinID
     * @param int $SetupCultureID
     * @param int $DefaultCultureID
     * @param int $AnonymousUsersGroupId
     * @param int $RegisteredUsersGroupId
     * @param int $TaxFormatTypeID
     * @param int $PrimaryCurrencyID
     */
    public function __construct($StoreID = null, $CultureID = null, $MallID = null, $HasPricing = null, $HasDelivery = null, $StatusID = null, $EnableRegistration = null, $UsadataAccountID = null, $PricingModelID = null, $DefaultProofType = null, $ShowProductSearch = null, $PickupAddressID = null, $ProductListPreviewStyleID = null, $UproduceEmailProviderID = null, $ProductListAllowPaging = null, $ProductsPerPage = null, $SslOption = null, $SkinID = null, $SetupCultureID = null, $DefaultCultureID = null, $AnonymousUsersGroupId = null, $RegisteredUsersGroupId = null, $TaxFormatTypeID = null, $PrimaryCurrencyID = null)
    {
      $this->StoreID = $StoreID;
      $this->CultureID = $CultureID;
      $this->MallID = $MallID;
      $this->HasPricing = $HasPricing;
      $this->HasDelivery = $HasDelivery;
      $this->StatusID = $StatusID;
      $this->EnableRegistration = $EnableRegistration;
      $this->UsadataAccountID = $UsadataAccountID;
      $this->PricingModelID = $PricingModelID;
      $this->DefaultProofType = $DefaultProofType;
      $this->ShowProductSearch = $ShowProductSearch;
      $this->PickupAddressID = $PickupAddressID;
      $this->ProductListPreviewStyleID = $ProductListPreviewStyleID;
      $this->UproduceEmailProviderID = $UproduceEmailProviderID;
      $this->ProductListAllowPaging = $ProductListAllowPaging;
      $this->ProductsPerPage = $ProductsPerPage;
      $this->SslOption = $SslOption;
      $this->SkinID = $SkinID;
      $this->SetupCultureID = $SetupCultureID;
      $this->DefaultCultureID = $DefaultCultureID;
      $this->AnonymousUsersGroupId = $AnonymousUsersGroupId;
      $this->RegisteredUsersGroupId = $RegisteredUsersGroupId;
      $this->TaxFormatTypeID = $TaxFormatTypeID;
      $this->PrimaryCurrencyID = $PrimaryCurrencyID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setStoreID($StoreID)
    {
      $this->StoreID = $StoreID;
      return $this;
    }

    /**
     * @return int
     */
    public function getCultureID()
    {
      return $this->CultureID;
    }

    /**
     * @param int $CultureID
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setCultureID($CultureID)
    {
      $this->CultureID = $CultureID;
      return $this;
    }

    /**
     * @return int
     */
    public function getMallID()
    {
      return $this->MallID;
    }

    /**
     * @param int $MallID
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setMallID($MallID)
    {
      $this->MallID = $MallID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getWelcomeText()
    {
      return $this->WelcomeText;
    }

    /**
     * @param string $WelcomeText
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setWelcomeText($WelcomeText)
    {
      $this->WelcomeText = $WelcomeText;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeaderTitle()
    {
      return $this->HeaderTitle;
    }

    /**
     * @param string $HeaderTitle
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setHeaderTitle($HeaderTitle)
    {
      $this->HeaderTitle = $HeaderTitle;
      return $this;
    }

    /**
     * @return string
     */
    public function getUproduceUser()
    {
      return $this->UproduceUser;
    }

    /**
     * @param string $UproduceUser
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setUproduceUser($UproduceUser)
    {
      $this->UproduceUser = $UproduceUser;
      return $this;
    }

    /**
     * @return string
     */
    public function getLandingDomain()
    {
      return $this->LandingDomain;
    }

    /**
     * @param string $LandingDomain
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setLandingDomain($LandingDomain)
    {
      $this->LandingDomain = $LandingDomain;
      return $this;
    }

    /**
     * @return string
     */
    public function getLandingFolder()
    {
      return $this->LandingFolder;
    }

    /**
     * @param string $LandingFolder
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setLandingFolder($LandingFolder)
    {
      $this->LandingFolder = $LandingFolder;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setHasPricing($HasPricing)
    {
      $this->HasPricing = $HasPricing;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasDelivery()
    {
      return $this->HasDelivery;
    }

    /**
     * @param boolean $HasDelivery
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setHasDelivery($HasDelivery)
    {
      $this->HasDelivery = $HasDelivery;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setStatusID($StatusID)
    {
      $this->StatusID = $StatusID;
      return $this;
    }

    /**
     * @return string
     */
    public function getWelcomePageUrl()
    {
      return $this->WelcomePageUrl;
    }

    /**
     * @param string $WelcomePageUrl
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setWelcomePageUrl($WelcomePageUrl)
    {
      $this->WelcomePageUrl = $WelcomePageUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getWelcomePageSql()
    {
      return $this->WelcomePageSql;
    }

    /**
     * @param string $WelcomePageSql
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setWelcomePageSql($WelcomePageSql)
    {
      $this->WelcomePageSql = $WelcomePageSql;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableRegistration()
    {
      return $this->EnableRegistration;
    }

    /**
     * @param boolean $EnableRegistration
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setEnableRegistration($EnableRegistration)
    {
      $this->EnableRegistration = $EnableRegistration;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegistrationText()
    {
      return $this->RegistrationText;
    }

    /**
     * @param string $RegistrationText
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setRegistrationText($RegistrationText)
    {
      $this->RegistrationText = $RegistrationText;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegistrationUrl()
    {
      return $this->RegistrationUrl;
    }

    /**
     * @param string $RegistrationUrl
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setRegistrationUrl($RegistrationUrl)
    {
      $this->RegistrationUrl = $RegistrationUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderConfirmationText()
    {
      return $this->OrderConfirmationText;
    }

    /**
     * @param string $OrderConfirmationText
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setOrderConfirmationText($OrderConfirmationText)
    {
      $this->OrderConfirmationText = $OrderConfirmationText;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setExternalID($ExternalID)
    {
      $this->ExternalID = $ExternalID;
      return $this;
    }

    /**
     * @return int
     */
    public function getUsadataAccountID()
    {
      return $this->UsadataAccountID;
    }

    /**
     * @param int $UsadataAccountID
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setUsadataAccountID($UsadataAccountID)
    {
      $this->UsadataAccountID = $UsadataAccountID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setPricingModelID($PricingModelID)
    {
      $this->PricingModelID = $PricingModelID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setDefaultProofType($DefaultProofType)
    {
      $this->DefaultProofType = $DefaultProofType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowProductSearch()
    {
      return $this->ShowProductSearch;
    }

    /**
     * @param boolean $ShowProductSearch
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setShowProductSearch($ShowProductSearch)
    {
      $this->ShowProductSearch = $ShowProductSearch;
      return $this;
    }

    /**
     * @return int
     */
    public function getPickupAddressID()
    {
      return $this->PickupAddressID;
    }

    /**
     * @param int $PickupAddressID
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setPickupAddressID($PickupAddressID)
    {
      $this->PickupAddressID = $PickupAddressID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomHeaderUrl()
    {
      return $this->CustomHeaderUrl;
    }

    /**
     * @param string $CustomHeaderUrl
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setCustomHeaderUrl($CustomHeaderUrl)
    {
      $this->CustomHeaderUrl = $CustomHeaderUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomFooterUrl()
    {
      return $this->CustomFooterUrl;
    }

    /**
     * @param string $CustomFooterUrl
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setCustomFooterUrl($CustomFooterUrl)
    {
      $this->CustomFooterUrl = $CustomFooterUrl;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductListPreviewStyleID()
    {
      return $this->ProductListPreviewStyleID;
    }

    /**
     * @param int $ProductListPreviewStyleID
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setProductListPreviewStyleID($ProductListPreviewStyleID)
    {
      $this->ProductListPreviewStyleID = $ProductListPreviewStyleID;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderDetailsDescription()
    {
      return $this->OrderDetailsDescription;
    }

    /**
     * @param string $OrderDetailsDescription
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setOrderDetailsDescription($OrderDetailsDescription)
    {
      $this->OrderDetailsDescription = $OrderDetailsDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getShoppingCartDescription()
    {
      return $this->ShoppingCartDescription;
    }

    /**
     * @param string $ShoppingCartDescription
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setShoppingCartDescription($ShoppingCartDescription)
    {
      $this->ShoppingCartDescription = $ShoppingCartDescription;
      return $this;
    }

    /**
     * @return int
     */
    public function getUproduceEmailProviderID()
    {
      return $this->UproduceEmailProviderID;
    }

    /**
     * @param int $UproduceEmailProviderID
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setUproduceEmailProviderID($UproduceEmailProviderID)
    {
      $this->UproduceEmailProviderID = $UproduceEmailProviderID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProductListAllowPaging()
    {
      return $this->ProductListAllowPaging;
    }

    /**
     * @param boolean $ProductListAllowPaging
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setProductListAllowPaging($ProductListAllowPaging)
    {
      $this->ProductListAllowPaging = $ProductListAllowPaging;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductsPerPage()
    {
      return $this->ProductsPerPage;
    }

    /**
     * @param int $ProductsPerPage
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setProductsPerPage($ProductsPerPage)
    {
      $this->ProductsPerPage = $ProductsPerPage;
      return $this;
    }

    /**
     * @return int
     */
    public function getSslOption()
    {
      return $this->SslOption;
    }

    /**
     * @param int $SslOption
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setSslOption($SslOption)
    {
      $this->SslOption = $SslOption;
      return $this;
    }

    /**
     * @return int
     */
    public function getSkinID()
    {
      return $this->SkinID;
    }

    /**
     * @param int $SkinID
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setSkinID($SkinID)
    {
      $this->SkinID = $SkinID;
      return $this;
    }

    /**
     * @return int
     */
    public function getSetupCultureID()
    {
      return $this->SetupCultureID;
    }

    /**
     * @param int $SetupCultureID
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setSetupCultureID($SetupCultureID)
    {
      $this->SetupCultureID = $SetupCultureID;
      return $this;
    }

    /**
     * @return int
     */
    public function getDefaultCultureID()
    {
      return $this->DefaultCultureID;
    }

    /**
     * @param int $DefaultCultureID
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setDefaultCultureID($DefaultCultureID)
    {
      $this->DefaultCultureID = $DefaultCultureID;
      return $this;
    }

    /**
     * @return int
     */
    public function getAnonymousUsersGroupId()
    {
      return $this->AnonymousUsersGroupId;
    }

    /**
     * @param int $AnonymousUsersGroupId
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setAnonymousUsersGroupId($AnonymousUsersGroupId)
    {
      $this->AnonymousUsersGroupId = $AnonymousUsersGroupId;
      return $this;
    }

    /**
     * @return int
     */
    public function getRegisteredUsersGroupId()
    {
      return $this->RegisteredUsersGroupId;
    }

    /**
     * @param int $RegisteredUsersGroupId
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setRegisteredUsersGroupId($RegisteredUsersGroupId)
    {
      $this->RegisteredUsersGroupId = $RegisteredUsersGroupId;
      return $this;
    }

    /**
     * @return int
     */
    public function getTaxFormatTypeID()
    {
      return $this->TaxFormatTypeID;
    }

    /**
     * @param int $TaxFormatTypeID
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setTaxFormatTypeID($TaxFormatTypeID)
    {
      $this->TaxFormatTypeID = $TaxFormatTypeID;
      return $this;
    }

    /**
     * @return int
     */
    public function getPrimaryCurrencyID()
    {
      return $this->PrimaryCurrencyID;
    }

    /**
     * @param int $PrimaryCurrencyID
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store
     */
    public function setPrimaryCurrencyID($PrimaryCurrencyID)
    {
      $this->PrimaryCurrencyID = $PrimaryCurrencyID;
      return $this;
    }

}
