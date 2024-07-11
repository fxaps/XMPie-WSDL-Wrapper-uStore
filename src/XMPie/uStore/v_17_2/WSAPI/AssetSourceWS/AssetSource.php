<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AssetSourceWS;

class AssetSource extends ReturnObject
{

    /**
     * @var int $AssetSourceID
     */
    protected $AssetSourceID = null;

    /**
     * @var int $StoreID
     */
    protected $StoreID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var int $UproduceAssetSourceID
     */
    protected $UproduceAssetSourceID = null;

    /**
     * @var int $StatusID
     */
    protected $StatusID = null;

    /**
     * @param int $AssetSourceID
     * @param int $StoreID
     * @param int $UproduceAssetSourceID
     * @param int $StatusID
     */
    public function __construct($AssetSourceID = null, $StoreID = null, $UproduceAssetSourceID = null, $StatusID = null)
    {
      $this->AssetSourceID = $AssetSourceID;
      $this->StoreID = $StoreID;
      $this->UproduceAssetSourceID = $UproduceAssetSourceID;
      $this->StatusID = $StatusID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AssetSourceWS\AssetSource
     */
    public function setAssetSourceID($AssetSourceID)
    {
      $this->AssetSourceID = $AssetSourceID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AssetSourceWS\AssetSource
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AssetSourceWS\AssetSource
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AssetSourceWS\AssetSource
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return int
     */
    public function getUproduceAssetSourceID()
    {
      return $this->UproduceAssetSourceID;
    }

    /**
     * @param int $UproduceAssetSourceID
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AssetSourceWS\AssetSource
     */
    public function setUproduceAssetSourceID($UproduceAssetSourceID)
    {
      $this->UproduceAssetSourceID = $UproduceAssetSourceID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AssetSourceWS\AssetSource
     */
    public function setStatusID($StatusID)
    {
      $this->StatusID = $StatusID;
      return $this;
    }

}
