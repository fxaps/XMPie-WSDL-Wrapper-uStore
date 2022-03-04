<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductInventoryWS;

class Update
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
     * @var int $inventoryAmount
     */
    protected $inventoryAmount = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $productID
     * @param int $inventoryAmount
     */
    public function __construct($username = null, $password = null, $productID = null, $inventoryAmount = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->productID = $productID;
      $this->inventoryAmount = $inventoryAmount;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductInventoryWS\Update
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductInventoryWS\Update
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductInventoryWS\Update
     */
    public function setProductID($productID)
    {
      $this->productID = $productID;
      return $this;
    }

    /**
     * @return int
     */
    public function getInventoryAmount()
    {
      return $this->inventoryAmount;
    }

    /**
     * @param int $inventoryAmount
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductInventoryWS\Update
     */
    public function setInventoryAmount($inventoryAmount)
    {
      $this->inventoryAmount = $inventoryAmount;
      return $this;
    }

}
