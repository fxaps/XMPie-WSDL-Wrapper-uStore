<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\UserWS;

class GetUserByCustomer
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
     * @var int $customerId
     */
    protected $customerId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $customerId
     */
    public function __construct($username = null, $password = null, $customerId = null)
    {
      $this->username = $username;
      $this->password = $password;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\UserWS\GetUserByCustomer
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\UserWS\GetUserByCustomer
     */
    public function setPassword($password)
    {
      $this->password = $password;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\UserWS\GetUserByCustomer
     */
    public function setCustomerId($customerId)
    {
      $this->customerId = $customerId;
      return $this;
    }

}
