<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\OrderWS;

class SubmitOrderWithClearingAndDelivery
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
     * @var int $orderId
     */
    protected $orderId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $orderId
     */
    public function __construct($username = null, $password = null, $orderId = null)
    {
        $this->username = $username;
        $this->password = $password;
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
     * @return SubmitOrderWithClearingAndDelivery
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
     * @return SubmitOrderWithClearingAndDelivery
     */
    public function setPassword($password)
    {
        $this->password = $password;
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
     * @return SubmitOrderWithClearingAndDelivery
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

}
