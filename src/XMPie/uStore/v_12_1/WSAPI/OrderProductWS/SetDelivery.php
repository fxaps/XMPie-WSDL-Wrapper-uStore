<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS;

class SetDelivery
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
     * @var int $deliveryMethod
     */
    protected $deliveryMethod = null;

    /**
     * @var int $deliveryServiceId
     */
    protected $deliveryServiceId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $orderProductId
     * @param int $deliveryMethod
     * @param int $deliveryServiceId
     */
    public function __construct($username = null, $password = null, $orderProductId = null, $deliveryMethod = null, $deliveryServiceId = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->orderProductId = $orderProductId;
        $this->deliveryMethod = $deliveryMethod;
        $this->deliveryServiceId = $deliveryServiceId;
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
     * @return SetDelivery
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
     * @return SetDelivery
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
     * @return SetDelivery
     */
    public function setOrderProductId($orderProductId)
    {
        $this->orderProductId = $orderProductId;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }

    /**
     * @param int $deliveryMethod
     * @return SetDelivery
     */
    public function setDeliveryMethod($deliveryMethod)
    {
        $this->deliveryMethod = $deliveryMethod;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryServiceId()
    {
        return $this->deliveryServiceId;
    }

    /**
     * @param int $deliveryServiceId
     * @return SetDelivery
     */
    public function setDeliveryServiceId($deliveryServiceId)
    {
        $this->deliveryServiceId = $deliveryServiceId;
        return $this;
    }

}
