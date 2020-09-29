<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CustomizationDialWS;

class GetCustomizationDialValue
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
     * @var int $customizationDialId
     */
    protected $customizationDialId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $orderProductId
     * @param int $customizationDialId
     */
    public function __construct($username = null, $password = null, $orderProductId = null, $customizationDialId = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->orderProductId = $orderProductId;
        $this->customizationDialId = $customizationDialId;
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
     * @return GetCustomizationDialValue
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
     * @return GetCustomizationDialValue
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
     * @return GetCustomizationDialValue
     */
    public function setOrderProductId($orderProductId)
    {
        $this->orderProductId = $orderProductId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomizationDialId()
    {
        return $this->customizationDialId;
    }

    /**
     * @param int $customizationDialId
     * @return GetCustomizationDialValue
     */
    public function setCustomizationDialId($customizationDialId)
    {
        $this->customizationDialId = $customizationDialId;
        return $this;
    }

}
