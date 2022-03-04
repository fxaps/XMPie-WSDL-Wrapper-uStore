<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderProductWS;

class AddQuantityOfOrderProductToCart
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
     * @var int $orderProductId
     */
    protected $orderProductId = null;

    /**
     * @var int $orderId
     */
    protected $orderId = null;

    /**
     * @var int $quantity
     */
    protected $quantity = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $orderProductId
     * @param int $orderId
     * @param int $quantity
     */
    public function __construct($username = null, $password = null, $orderProductId = null, $orderId = null, $quantity = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->orderProductId = $orderProductId;
      $this->orderId = $orderId;
      $this->quantity = $quantity;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderProductWS\AddQuantityOfOrderProductToCart
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderProductWS\AddQuantityOfOrderProductToCart
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderProductId()
    {
      return $this->orderProductId;
    }

    /**
     * @param int $orderProductId
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderProductWS\AddQuantityOfOrderProductToCart
     */
    public function setOrderProductId($orderProductId)
    {
      $this->orderProductId = $orderProductId;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
      return $this->orderId;
    }

    /**
     * @param int $orderId
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderProductWS\AddQuantityOfOrderProductToCart
     */
    public function setOrderId($orderId)
    {
      $this->orderId = $orderId;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderProductWS\AddQuantityOfOrderProductToCart
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

}
