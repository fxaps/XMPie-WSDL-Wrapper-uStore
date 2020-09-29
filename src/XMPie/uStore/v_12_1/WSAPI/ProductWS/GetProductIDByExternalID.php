<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductWS;

class GetProductIDByExternalID
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
     * @var int $storeId
     */
    protected $storeId = null;

    /**
     * @var string $externalProductID
     */
    protected $externalProductID = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $storeId
     * @param string $externalProductID
     */
    public function __construct($username = null, $password = null, $storeId = null, $externalProductID = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->storeId = $storeId;
        $this->externalProductID = $externalProductID;
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
     * @return GetProductIDByExternalID
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
     * @return GetProductIDByExternalID
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return int
     */
    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * @param int $storeId
     * @return GetProductIDByExternalID
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalProductID()
    {
        return $this->externalProductID;
    }

    /**
     * @param string $externalProductID
     * @return GetProductIDByExternalID
     */
    public function setExternalProductID($externalProductID)
    {
        $this->externalProductID = $externalProductID;
        return $this;
    }

}
