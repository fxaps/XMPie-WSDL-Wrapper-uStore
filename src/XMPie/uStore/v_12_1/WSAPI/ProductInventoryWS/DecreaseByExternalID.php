<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductInventoryWS;

class DecreaseByExternalID
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
     * @var int $storeID
     */
    protected $storeID = null;

    /**
     * @var string $externalProductId
     */
    protected $externalProductId = null;

    /**
     * @var int $amount
     */
    protected $amount = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $storeID
     * @param string $externalProductId
     * @param int $amount
     */
    public function __construct($username = null, $password = null, $storeID = null, $externalProductId = null, $amount = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->storeID = $storeID;
        $this->externalProductId = $externalProductId;
        $this->amount = $amount;
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
     * @return DecreaseByExternalID
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
     * @return DecreaseByExternalID
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return int
     */
    public function getStoreID()
    {
        return $this->storeID;
    }

    /**
     * @param int $storeID
     * @return DecreaseByExternalID
     */
    public function setStoreID($storeID)
    {
        $this->storeID = $storeID;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalProductId()
    {
        return $this->externalProductId;
    }

    /**
     * @param string $externalProductId
     * @return DecreaseByExternalID
     */
    public function setExternalProductId($externalProductId)
    {
        $this->externalProductId = $externalProductId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return DecreaseByExternalID
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

}
