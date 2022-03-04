<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderWS;

class UpdateBillingAddress
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
     * @var int $orderID
     */
    protected $orderID = null;

    /**
     * @var int $billingAddressID
     */
    protected $billingAddressID = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $orderID
     * @param int $billingAddressID
     */
    public function __construct($username = null, $password = null, $orderID = null, $billingAddressID = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->orderID = $orderID;
      $this->billingAddressID = $billingAddressID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderWS\UpdateBillingAddress
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderWS\UpdateBillingAddress
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderID()
    {
      return $this->orderID;
    }

    /**
     * @param int $orderID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderWS\UpdateBillingAddress
     */
    public function setOrderID($orderID)
    {
      $this->orderID = $orderID;
      return $this;
    }

    /**
     * @return int
     */
    public function getBillingAddressID()
    {
      return $this->billingAddressID;
    }

    /**
     * @param int $billingAddressID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderWS\UpdateBillingAddress
     */
    public function setBillingAddressID($billingAddressID)
    {
      $this->billingAddressID = $billingAddressID;
      return $this;
    }

}
