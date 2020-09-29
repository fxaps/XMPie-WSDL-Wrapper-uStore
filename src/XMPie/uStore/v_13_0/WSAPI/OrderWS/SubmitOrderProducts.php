<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\OrderWS;

class SubmitOrderProducts
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
     * @var ArrayOfInt $orderProductIds
     */
    protected $orderProductIds = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $orderId
     * @param ArrayOfInt $orderProductIds
     */
    public function __construct($username = null, $password = null, $orderId = null, $orderProductIds = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->orderId = $orderId;
        $this->orderProductIds = $orderProductIds;
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
     * @return SubmitOrderProducts
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
     * @return SubmitOrderProducts
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
     * @return SubmitOrderProducts
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getOrderProductIds()
    {
        return $this->orderProductIds;
    }

    /**
     * @param ArrayOfInt $orderProductIds
     * @return SubmitOrderProducts
     */
    public function setOrderProductIds($orderProductIds)
    {
        $this->orderProductIds = $orderProductIds;
        return $this;
    }

}
