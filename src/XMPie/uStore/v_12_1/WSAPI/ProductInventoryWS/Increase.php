<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductInventoryWS;

class Increase
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
     * @var int $productID
     */
    protected $productID = null;

    /**
     * @var int $amount
     */
    protected $amount = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $productID
     * @param int $amount
     */
    public function __construct($username = null, $password = null, $productID = null, $amount = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->productID = $productID;
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
     * @return Increase
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
     * @return Increase
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * @param int $productID
     * @return Increase
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;
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
     * @return Increase
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

}
