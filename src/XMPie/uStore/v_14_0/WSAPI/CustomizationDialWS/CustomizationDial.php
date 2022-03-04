<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS;

class CustomizationDial extends ReturnObject
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $ExternalID
     */
    protected $ExternalID = null;

    /**
     * @var int $DocID
     */
    protected $DocID = null;

    /**
     * @var int $DialTypeID
     */
    protected $DialTypeID = null;

    /**
     * @var string $UproduceDialName
     */
    protected $UproduceDialName = null;

    /**
     * @var boolean $IsVariable
     */
    protected $IsVariable = null;

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
     * @var int $AssetSelectionSourceID
     */
    protected $AssetSelectionSourceID = null;

    /**
     * @var int $AssetUploadSourceID
     */
    protected $AssetUploadSourceID = null;

    /**
     * @var int $DisplayOrder
     */
    protected $DisplayOrder = null;

    /**
     * @var int $DialValueAutoFillTypeID
     */
    protected $DialValueAutoFillTypeID = null;

    /**
     * @var int $StatusID
     */
    protected $StatusID = null;

    /**
     * @var int $DependentOnFieldOptionID
     */
    protected $DependentOnFieldOptionID = null;

    /**
     * @param int $ID
     * @param int $DocID
     * @param int $DialTypeID
     * @param boolean $IsVariable
     * @param int $UIControlTypeID
     * @param int $AssetSelectionSourceID
     * @param int $AssetUploadSourceID
     * @param int $DisplayOrder
     * @param int $DialValueAutoFillTypeID
     * @param int $StatusID
     * @param int $DependentOnFieldOptionID
     */
    public function __construct($ID = null, $DocID = null, $DialTypeID = null, $IsVariable = null, $UIControlTypeID = null, $AssetSelectionSourceID = null, $AssetUploadSourceID = null, $DisplayOrder = null, $DialValueAutoFillTypeID = null, $StatusID = null, $DependentOnFieldOptionID = null)
    {
      $this->ID = $ID;
      $this->DocID = $DocID;
      $this->DialTypeID = $DialTypeID;
      $this->IsVariable = $IsVariable;
      $this->UIControlTypeID = $UIControlTypeID;
      $this->AssetSelectionSourceID = $AssetSelectionSourceID;
      $this->AssetUploadSourceID = $AssetUploadSourceID;
      $this->DisplayOrder = $DisplayOrder;
      $this->DialValueAutoFillTypeID = $DialValueAutoFillTypeID;
      $this->StatusID = $StatusID;
      $this->DependentOnFieldOptionID = $DependentOnFieldOptionID;
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\CustomizationDial
     */
    public function setID($ID)
    {
      $this->ID = $ID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\CustomizationDial
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\CustomizationDial
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\CustomizationDial
     */
    public function setExternalID($ExternalID)
    {
      $this->ExternalID = $ExternalID;
      return $this;
    }

    /**
     * @return int
     */
    public function getDocID()
    {
      return $this->DocID;
    }

    /**
     * @param int $DocID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\CustomizationDial
     */
    public function setDocID($DocID)
    {
      $this->DocID = $DocID;
      return $this;
    }

    /**
     * @return int
     */
    public function getDialTypeID()
    {
      return $this->DialTypeID;
    }

    /**
     * @param int $DialTypeID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\CustomizationDial
     */
    public function setDialTypeID($DialTypeID)
    {
      $this->DialTypeID = $DialTypeID;
      return $this;
    }

    /**
     * @return string
     */
    public function getUproduceDialName()
    {
      return $this->UproduceDialName;
    }

    /**
     * @param string $UproduceDialName
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\CustomizationDial
     */
    public function setUproduceDialName($UproduceDialName)
    {
      $this->UproduceDialName = $UproduceDialName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsVariable()
    {
      return $this->IsVariable;
    }

    /**
     * @param boolean $IsVariable
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\CustomizationDial
     */
    public function setIsVariable($IsVariable)
    {
      $this->IsVariable = $IsVariable;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\CustomizationDial
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\CustomizationDial
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\CustomizationDial
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\CustomizationDial
     */
    public function setUIControlParamsXml($UIControlParamsXml)
    {
      $this->UIControlParamsXml = $UIControlParamsXml;
      return $this;
    }

    /**
     * @return int
     */
    public function getAssetSelectionSourceID()
    {
      return $this->AssetSelectionSourceID;
    }

    /**
     * @param int $AssetSelectionSourceID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\CustomizationDial
     */
    public function setAssetSelectionSourceID($AssetSelectionSourceID)
    {
      $this->AssetSelectionSourceID = $AssetSelectionSourceID;
      return $this;
    }

    /**
     * @return int
     */
    public function getAssetUploadSourceID()
    {
      return $this->AssetUploadSourceID;
    }

    /**
     * @param int $AssetUploadSourceID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\CustomizationDial
     */
    public function setAssetUploadSourceID($AssetUploadSourceID)
    {
      $this->AssetUploadSourceID = $AssetUploadSourceID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\CustomizationDial
     */
    public function setDisplayOrder($DisplayOrder)
    {
      $this->DisplayOrder = $DisplayOrder;
      return $this;
    }

    /**
     * @return int
     */
    public function getDialValueAutoFillTypeID()
    {
      return $this->DialValueAutoFillTypeID;
    }

    /**
     * @param int $DialValueAutoFillTypeID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\CustomizationDial
     */
    public function setDialValueAutoFillTypeID($DialValueAutoFillTypeID)
    {
      $this->DialValueAutoFillTypeID = $DialValueAutoFillTypeID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\CustomizationDial
     */
    public function setStatusID($StatusID)
    {
      $this->StatusID = $StatusID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\CustomizationDial
     */
    public function setDependentOnFieldOptionID($DependentOnFieldOptionID)
    {
      $this->DependentOnFieldOptionID = $DependentOnFieldOptionID;
      return $this;
    }

}
