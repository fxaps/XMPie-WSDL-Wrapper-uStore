<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AssetWS;

class DownloadAsset
{

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var int $assetId
     */
    protected $assetId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $assetId
     */
    public function __construct($username = null, $password = null, $assetId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->assetId = $assetId;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->username;
    }

    /**
     * @param string $username
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AssetWS\DownloadAsset
     */
    public function setUsername($username)
    {
      $this->username = $username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AssetWS\DownloadAsset
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getAssetId()
    {
      return $this->assetId;
    }

    /**
     * @param int $assetId
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AssetWS\DownloadAsset
     */
    public function setAssetId($assetId)
    {
      $this->assetId = $assetId;
      return $this;
    }

}
