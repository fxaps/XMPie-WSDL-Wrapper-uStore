<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderWS;

class GetCartId
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
     * @var int $customerId
     */
    protected $customerId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $storeId
     * @param int $customerId
     */
    public function __construct($username = null, $password = null, $storeId = null, $customerId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->storeId = $storeId;
      $this->customerId = $customerId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderWS\GetCartId
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderWS\GetCartId
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderWS\GetCartId
     */
    public function setStoreId($storeId)
    {
      $this->storeId = $storeId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
      return $this->customerId;
    }

    /**
     * @param int $customerId
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderWS\GetCartId
     */
    public function setCustomerId($customerId)
    {
      $this->customerId = $customerId;
      return $this;
    }

}
