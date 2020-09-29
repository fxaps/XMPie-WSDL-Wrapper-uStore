<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductPropertyWS;

class GetProductPropertyValue
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
     * @var int $productPropertyId
     */
    protected $productPropertyId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $orderProductId
     * @param int $productPropertyId
     */
    public function __construct($username = null, $password = null, $orderProductId = null, $productPropertyId = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->orderProductId = $orderProductId;
        $this->productPropertyId = $productPropertyId;
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
     * @return GetProductPropertyValue
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
     * @return GetProductPropertyValue
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
     * @return GetProductPropertyValue
     */
    public function setOrderProductId($orderProductId)
    {
        $this->orderProductId = $orderProductId;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductPropertyId()
    {
        return $this->productPropertyId;
    }

    /**
     * @param int $productPropertyId
     * @return GetProductPropertyValue
     */
    public function setProductPropertyId($productPropertyId)
    {
        $this->productPropertyId = $productPropertyId;
        return $this;
    }

}
