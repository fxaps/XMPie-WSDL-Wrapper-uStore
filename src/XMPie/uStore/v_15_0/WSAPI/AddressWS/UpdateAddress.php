<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\AddressWS;

class UpdateAddress
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
     * @var Address $address
     */
    protected $address = null;

    /**
     * @param string $username
     * @param string $password
     * @param Address $address
     */
    public function __construct($username = null, $password = null, $address = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->address = $address;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\AddressWS\UpdateAddress
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\AddressWS\UpdateAddress
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param Address $address
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\AddressWS\UpdateAddress
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

}
