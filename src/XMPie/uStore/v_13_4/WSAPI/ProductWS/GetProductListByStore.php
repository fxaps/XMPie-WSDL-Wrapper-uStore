<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS;

class GetProductListByStore
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
     * @var int $storeId
     */
    protected $storeId = null;

    /**
     * @var int $cultureId
     */
    protected $cultureId = null;

    /**
     * @var boolean $isReturnInactive
     */
    protected $isReturnInactive = null;

    /**
     * @var boolean $isReturnHidden
     */
    protected $isReturnHidden = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $storeId
     * @param int $cultureId
     * @param boolean $isReturnInactive
     * @param boolean $isReturnHidden
     */
    public function __construct($username = null, $password = null, $storeId = null, $cultureId = null, $isReturnInactive = null, $isReturnHidden = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->storeId = $storeId;
      $this->cultureId = $cultureId;
      $this->isReturnInactive = $isReturnInactive;
      $this->isReturnHidden = $isReturnHidden;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductListByStore
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductListByStore
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getStoreId()
    {
      return $this->storeId;
    }

    /**
     * @param int $storeId
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductListByStore
     */
    public function setStoreId($storeId)
    {
      $this->storeId = $storeId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductListByStore
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductListByStore
     */
    public function setIsReturnInactive($isReturnInactive)
    {
      $this->isReturnInactive = $isReturnInactive;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsReturnHidden()
    {
      return $this->isReturnHidden;
    }

    /**
     * @param boolean $isReturnHidden
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductListByStore
     */
    public function setIsReturnHidden($isReturnHidden)
    {
      $this->isReturnHidden = $isReturnHidden;
      return $this;
    }

}
