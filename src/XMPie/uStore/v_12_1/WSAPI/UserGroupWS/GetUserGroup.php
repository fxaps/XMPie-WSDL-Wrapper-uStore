<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserGroupWS;

class GetUserGroup
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
     * @var int $userGroupId
     */
    protected $userGroupId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $userGroupId
     */
    public function __construct($username = null, $password = null, $userGroupId = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->userGroupId = $userGroupId;
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
     * @return GetUserGroup
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
     * @return GetUserGroup
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserGroupId()
    {
        return $this->userGroupId;
    }

    /**
     * @param int $userGroupId
     * @return GetUserGroup
     */
    public function setUserGroupId($userGroupId)
    {
        $this->userGroupId = $userGroupId;
        return $this;
    }

}
