<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS;

class AddOrderProductToCart
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
     * @param string $username
     * @param string $password
     * @param int $orderProductId
     * @param int $orderId
     */
    public function __construct($username = null, $password = null, $orderProductId = null, $orderId = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->orderProductId = $orderProductId;
        $this->orderId = $orderId;
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
     * @return AddOrderProductToCart
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
     * @return AddOrderProductToCart
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
     * @return AddOrderProductToCart
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
     * @return AddOrderProductToCart
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

}
