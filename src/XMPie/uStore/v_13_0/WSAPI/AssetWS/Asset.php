<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\AssetWS;

class Asset extends ReturnObject
{

    /**
     * @var int $AssetSourceAssetID
     */
    protected $AssetSourceAssetID = null;

    /**
     * @var int $AssetSourceID
     */
    protected $AssetSourceID = null;

    /**
     * @var int $DisplayOrder
     */
    protected $DisplayOrder = null;

    /**
     * @var int $StatusID
     */
    protected $StatusID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var boolean $IsServerSource
     */
    protected $IsServerSource = null;

    /**
     * @var string $CacheLocation
     */
    protected $CacheLocation = null;

    /**
     * @var int $CustomerID
     */
    protected $CustomerID = null;

    /**
     * @var int $UserID
     */
    protected $UserID = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $AssetType
     */
    protected $AssetType = null;

    /**
     * @param int $AssetSourceAssetID
     * @param int $AssetSourceID
     * @param int $DisplayOrder
     * @param int $StatusID
     * @param boolean $IsServerSource
     * @param int $CustomerID
     * @param int $UserID
     */
    public function __construct($AssetSourceAssetID = null, $AssetSourceID = null, $DisplayOrder = null, $StatusID = null, $IsServerSource = null, $CustomerID = null, $UserID = null)
    {
        $this->AssetSourceAssetID = $AssetSourceAssetID;
        $this->AssetSourceID = $AssetSourceID;
        $this->DisplayOrder = $DisplayOrder;
        $this->StatusID = $StatusID;
        $this->IsServerSource = $IsServerSource;
        $this->CustomerID = $CustomerID;
        $this->UserID = $UserID;
    }

    /**
     * @return int
     */
    public function getAssetSourceAssetID()
    {
        return $this->AssetSourceAssetID;
    }

    /**
     * @param int $AssetSourceAssetID
     * @return Asset
     */
    public function setAssetSourceAssetID($AssetSourceAssetID)
    {
        $this->AssetSourceAssetID = $AssetSourceAssetID;
        return $this;
    }

    /**
     * @return int
     */
    public function getAssetSourceID()
    {
        return $this->AssetSourceID;
    }

    /**
     * @param int $AssetSourceID
     * @return Asset
     */
    public function setAssetSourceID($AssetSourceID)
    {
        $this->AssetSourceID = $AssetSourceID;
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
     * @return Asset
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
     * @return Asset
     */
    public function setStatusID($StatusID)
    {
        $this->StatusID = $StatusID;
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
     * @return Asset
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
     * @return Asset
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsServerSource()
    {
        return $this->IsServerSource;
    }

    /**
     * @param boolean $IsServerSource
     * @return Asset
     */
    public function setIsServerSource($IsServerSource)
    {
        $this->IsServerSource = $IsServerSource;
        return $this;
    }

    /**
     * @return string
     */
    public function getCacheLocation()
    {
        return $this->CacheLocation;
    }

    /**
     * @param string $CacheLocation
     * @return Asset
     */
    public function setCacheLocation($CacheLocation)
    {
        $this->CacheLocation = $CacheLocation;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomerID()
    {
        return $this->CustomerID;
    }

    /**
     * @param int $CustomerID
     * @return Asset
     */
    public function setCustomerID($CustomerID)
    {
        $this->CustomerID = $CustomerID;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserID()
    {
        return $this->UserID;
    }

    /**
     * @param int $UserID
     * @return Asset
     */
    public function setUserID($UserID)
    {
        $this->UserID = $UserID;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param string $Title
     * @return Asset
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;
        return $this;
    }

    /**
     * @return string
     */
    public function getAssetType()
    {
        return $this->AssetType;
    }

    /**
     * @param string $AssetType
     * @return Asset
     */
    public function setAssetType($AssetType)
    {
        $this->AssetType = $AssetType;
        return $this;
    }

}
