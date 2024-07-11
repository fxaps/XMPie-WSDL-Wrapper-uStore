<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\StoreWS;

class GetStoreList
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
     * @var int $mallId
     */
    protected $mallId = null;

    /**
     * @var boolean $isReturnOfflineStore
     */
    protected $isReturnOfflineStore = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $mallId
     * @param boolean $isReturnOfflineStore
     */
    public function __construct($username = null, $password = null, $mallId = null, $isReturnOfflineStore = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->mallId = $mallId;
      $this->isReturnOfflineStore = $isReturnOfflineStore;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\StoreWS\GetStoreList
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\StoreWS\GetStoreList
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getMallId()
    {
      return $this->mallId;
    }

    /**
     * @param int $mallId
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\StoreWS\GetStoreList
     */
    public function setMallId($mallId)
    {
      $this->mallId = $mallId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsReturnOfflineStore()
    {
      return $this->isReturnOfflineStore;
    }

    /**
     * @param boolean $isReturnOfflineStore
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\StoreWS\GetStoreList
     */
    public function setIsReturnOfflineStore($isReturnOfflineStore)
    {
      $this->isReturnOfflineStore = $isReturnOfflineStore;
      return $this;
    }

}
