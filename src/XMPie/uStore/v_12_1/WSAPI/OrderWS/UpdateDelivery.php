<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderWS;

class UpdateDelivery
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
     * @var int $shippingAddressID
     */
    protected $shippingAddressID = null;

    /**
     * @var int $shippingDeliveryServiceID
     */
    protected $shippingDeliveryServiceID = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $orderID
     * @param int $shippingAddressID
     * @param int $shippingDeliveryServiceID
     */
    public function __construct($username = null, $password = null, $orderID = null, $shippingAddressID = null, $shippingDeliveryServiceID = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->orderID = $orderID;
        $this->shippingAddressID = $shippingAddressID;
        $this->shippingDeliveryServiceID = $shippingDeliveryServiceID;
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
     * @return UpdateDelivery
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
     * @return UpdateDelivery
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
     * @return UpdateDelivery
     */
    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
        return $this;
    }

    /**
     * @return int
     */
    public function getShippingAddressID()
    {
        return $this->shippingAddressID;
    }

    /**
     * @param int $shippingAddressID
     * @return UpdateDelivery
     */
    public function setShippingAddressID($shippingAddressID)
    {
        $this->shippingAddressID = $shippingAddressID;
        return $this;
    }

    /**
     * @return int
     */
    public function getShippingDeliveryServiceID()
    {
        return $this->shippingDeliveryServiceID;
    }

    /**
     * @param int $shippingDeliveryServiceID
     * @return UpdateDelivery
     */
    public function setShippingDeliveryServiceID($shippingDeliveryServiceID)
    {
        $this->shippingDeliveryServiceID = $shippingDeliveryServiceID;
        return $this;
    }

}
