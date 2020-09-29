<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\AddressWS;

class GetAddress
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
     * @var int $addressId
     */
    protected $addressId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $addressId
     */
    public function __construct($username = null, $password = null, $addressId = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->addressId = $addressId;
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
     * @return GetAddress
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
     * @return GetAddress
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return int
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * @param int $addressId
     * @return GetAddress
     */
    public function setAddressId($addressId)
    {
        $this->addressId = $addressId;
        return $this;
    }

}
