<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductWS;

class GetProductList
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
     * @var boolean $isReturnInactive
     */
    protected $isReturnInactive = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $productGroupId
     * @param int $cultureId
     * @param boolean $isReturnInactive
     */
    public function __construct($username = null, $password = null, $productGroupId = null, $cultureId = null, $isReturnInactive = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->productGroupId = $productGroupId;
      $this->cultureId = $cultureId;
      $this->isReturnInactive = $isReturnInactive;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductWS\GetProductList
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductWS\GetProductList
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductWS\GetProductList
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductWS\GetProductList
     */
    public function setCultureId($cultureId)
    {
      $this->cultureId = $cultureId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsReturnInactive()
    {
      return $this->isReturnInactive;
    }

    /**
     * @param boolean $isReturnInactive
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductWS\GetProductList
     */
    public function setIsReturnInactive($isReturnInactive)
    {
      $this->isReturnInactive = $isReturnInactive;
      return $this;
    }

}
