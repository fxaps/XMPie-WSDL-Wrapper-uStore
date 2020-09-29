<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductPropertyWS;

class GetProductPropertyValueList
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
     * @param string $username
     * @param string $password
     * @param int $orderProductId
     */
    public function __construct($username = null, $password = null, $orderProductId = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->orderProductId = $orderProductId;
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
     * @return GetProductPropertyValueList
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
     * @return GetProductPropertyValueList
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
     * @return GetProductPropertyValueList
     */
    public function setOrderProductId($orderProductId)
    {
        $this->orderProductId = $orderProductId;
        return $this;
    }

}
