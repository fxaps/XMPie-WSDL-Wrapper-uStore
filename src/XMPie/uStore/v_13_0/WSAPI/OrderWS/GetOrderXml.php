<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\OrderWS;

class GetOrderXml
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
     * @param string $username
     * @param string $password
     * @param int $orderID
     */
    public function __construct($username = null, $password = null, $orderID = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->orderID = $orderID;
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
     * @return GetOrderXml
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
     * @return GetOrderXml
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
     * @return GetOrderXml
     */
    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
        return $this;
    }

}
