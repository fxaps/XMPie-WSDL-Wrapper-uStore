<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\UserWS;

class GetUserByEmailAndStore
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
     * @var string $email
     */
    protected $email = null;

    /**
     * @var int $assignedToStoreId
     */
    protected $assignedToStoreId = null;

    /**
     * @param string $username
     * @param string $password
     * @param string $email
     * @param int $assignedToStoreId
     */
    public function __construct($username = null, $password = null, $email = null, $assignedToStoreId = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->assignedToStoreId = $assignedToStoreId;
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
     * @return GetUserByEmailAndStore
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
     * @return GetUserByEmailAndStore
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return GetUserByEmailAndStore
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return int
     */
    public function getAssignedToStoreId()
    {
        return $this->assignedToStoreId;
    }

    /**
     * @param int $assignedToStoreId
     * @return GetUserByEmailAndStore
     */
    public function setAssignedToStoreId($assignedToStoreId)
    {
        $this->assignedToStoreId = $assignedToStoreId;
        return $this;
    }

}
