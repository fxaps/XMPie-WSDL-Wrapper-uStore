<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS;

class DecryptOrderProductId
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
     * @var string $encryptedOrderProductId
     */
    protected $encryptedOrderProductId = null;

    /**
     * @param string $username
     * @param string $password
     * @param string $encryptedOrderProductId
     */
    public function __construct($username = null, $password = null, $encryptedOrderProductId = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->encryptedOrderProductId = $encryptedOrderProductId;
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
     * @return DecryptOrderProductId
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
     * @return DecryptOrderProductId
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getEncryptedOrderProductId()
    {
        return $this->encryptedOrderProductId;
    }

    /**
     * @param string $encryptedOrderProductId
     * @return DecryptOrderProductId
     */
    public function setEncryptedOrderProductId($encryptedOrderProductId)
    {
        $this->encryptedOrderProductId = $encryptedOrderProductId;
        return $this;
    }

}
