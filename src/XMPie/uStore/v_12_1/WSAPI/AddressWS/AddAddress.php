<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\AddressWS;

class AddAddress
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
     * @return AddAddress
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
     * @return AddAddress
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
     * @return AddAddress
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

}
