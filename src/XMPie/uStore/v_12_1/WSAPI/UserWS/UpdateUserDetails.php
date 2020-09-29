<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS;

class UpdateUserDetails
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
     * @var User $user
     */
    protected $user = null;

    /**
     * @param string $username
     * @param string $password
     * @param User $user
     */
    public function __construct($username = null, $password = null, $user = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->user = $user;
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
     * @return UpdateUserDetails
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
     * @return UpdateUserDetails
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     * @return UpdateUserDetails
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

}
