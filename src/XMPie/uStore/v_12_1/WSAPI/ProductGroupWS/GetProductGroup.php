<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductGroupWS;

class GetProductGroup
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
     * @var int $productGroupId
     */
    protected $productGroupId = null;

    /**
     * @var int $cultureId
     */
    protected $cultureId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $productGroupId
     * @param int $cultureId
     */
    public function __construct($username = null, $password = null, $productGroupId = null, $cultureId = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->productGroupId = $productGroupId;
        $this->cultureId = $cultureId;
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
     * @return GetProductGroup
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
     * @return GetProductGroup
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductGroupId()
    {
        return $this->productGroupId;
    }

    /**
     * @param int $productGroupId
     * @return GetProductGroup
     */
    public function setProductGroupId($productGroupId)
    {
        $this->productGroupId = $productGroupId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCultureId()
    {
        return $this->cultureId;
    }

    /**
     * @param int $cultureId
     * @return GetProductGroup
     */
    public function setCultureId($cultureId)
    {
        $this->cultureId = $cultureId;
        return $this;
    }

}
