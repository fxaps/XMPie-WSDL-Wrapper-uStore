<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\AssetWS;

class GetAssetList
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
     * @var int $customerId
     */
    protected $customerId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $assetSourceId
     * @param int $customerId
     */
    public function __construct($username = null, $password = null, $assetSourceId = null, $customerId = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->assetSourceId = $assetSourceId;
        $this->customerId = $customerId;
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
     * @return GetAssetList
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
     * @return GetAssetList
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
     * @return GetAssetList
     */
    public function setAssetSourceId($assetSourceId)
    {
        $this->assetSourceId = $assetSourceId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param int $customerId
     * @return GetAssetList
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
        return $this;
    }

}
