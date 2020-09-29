<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS;

class GetStoreOperatorList
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
     * @param string $username
     * @param string $password
     * @param int $storeId
     */
    public function __construct($username = null, $password = null, $storeId = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->storeId = $storeId;
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
     * @return GetStoreOperatorList
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
     * @return GetStoreOperatorList
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
     * @return GetStoreOperatorList
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;
        return $this;
    }

}
