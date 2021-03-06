<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\AssetWS;

class GetAsset
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
     * @return GetAsset
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
     * @return GetAsset
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
     * @return GetAsset
     */
    public function setAssetId($assetId)
    {
        $this->assetId = $assetId;
        return $this;
    }

}
