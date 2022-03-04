<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\AssetSourceWS;

class GetAssetSource
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
     * @var int $assetSourceId
     */
    protected $assetSourceId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $assetSourceId
     */
    public function __construct($username = null, $password = null, $assetSourceId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->assetSourceId = $assetSourceId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\AssetSourceWS\GetAssetSource
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\AssetSourceWS\GetAssetSource
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getAssetSourceId()
    {
      return $this->assetSourceId;
    }

    /**
     * @param int $assetSourceId
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\AssetSourceWS\GetAssetSource
     */
    public function setAssetSourceId($assetSourceId)
    {
      $this->assetSourceId = $assetSourceId;
      return $this;
    }

}
