<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS;

class GetOrderProductList
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
     * @var boolean $isReturnDrafts
     */
    protected $isReturnDrafts = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $orderId
     * @param boolean $isReturnDrafts
     */
    public function __construct($username = null, $password = null, $orderId = null, $isReturnDrafts = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->orderId = $orderId;
        $this->isReturnDrafts = $isReturnDrafts;
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
     * @return GetOrderProductList
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
     * @return GetOrderProductList
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
     * @return GetOrderProductList
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsReturnDrafts()
    {
        return $this->isReturnDrafts;
    }

    /**
     * @param boolean $isReturnDrafts
     * @return GetOrderProductList
     */
    public function setIsReturnDrafts($isReturnDrafts)
    {
        $this->isReturnDrafts = $isReturnDrafts;
        return $this;
    }

}
