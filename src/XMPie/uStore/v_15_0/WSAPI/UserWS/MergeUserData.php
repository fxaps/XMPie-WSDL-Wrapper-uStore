<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\UserWS;

class MergeUserData
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
     * @var int $fromUserId
     */
    protected $fromUserId = null;

    /**
     * @var int $toUserId
     */
    protected $toUserId = null;

    /**
     * @var int $storeId
     */
    protected $storeId = null;

    /**
     * @var int $cultureId
     */
    protected $cultureId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $fromUserId
     * @param int $toUserId
     * @param int $storeId
     * @param int $cultureId
     */
    public function __construct($username = null, $password = null, $fromUserId = null, $toUserId = null, $storeId = null, $cultureId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->fromUserId = $fromUserId;
      $this->toUserId = $toUserId;
      $this->storeId = $storeId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\UserWS\MergeUserData
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\UserWS\MergeUserData
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getFromUserId()
    {
      return $this->fromUserId;
    }

    /**
     * @param int $fromUserId
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\UserWS\MergeUserData
     */
    public function setFromUserId($fromUserId)
    {
      $this->fromUserId = $fromUserId;
      return $this;
    }

    /**
     * @return int
     */
    public function getToUserId()
    {
      return $this->toUserId;
    }

    /**
     * @param int $toUserId
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\UserWS\MergeUserData
     */
    public function setToUserId($toUserId)
    {
      $this->toUserId = $toUserId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\UserWS\MergeUserData
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\UserWS\MergeUserData
     */
    public function setCultureId($cultureId)
    {
      $this->cultureId = $cultureId;
      return $this;
    }

}
