<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductInventoryWS;

class ReadInventoryLevel
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
     * @param string $username
     * @param string $password
     * @param int $productID
     */
    public function __construct($username = null, $password = null, $productID = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->productID = $productID;
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
     * @return ReadInventoryLevel
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
     * @return ReadInventoryLevel
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
     * @return ReadInventoryLevel
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;
        return $this;
    }

}
