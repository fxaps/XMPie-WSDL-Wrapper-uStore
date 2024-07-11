<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS;

class GetUserCartId
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
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $storeId
     * @param int $userId
     */
    public function __construct($username = null, $password = null, $storeId = null, $userId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->storeId = $storeId;
      $this->userId = $userId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetUserCartId
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetUserCartId
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetUserCartId
     */
    public function setStoreId($storeId)
    {
      $this->storeId = $storeId;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param int $userId
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetUserCartId
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

}
