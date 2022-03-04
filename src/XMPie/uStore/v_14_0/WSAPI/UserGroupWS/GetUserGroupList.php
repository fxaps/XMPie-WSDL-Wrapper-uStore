<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS;

class GetUserGroupList
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
     * @param string $username
     * @param string $password
     */
    public function __construct($username = null, $password = null)
    {
      $this->username = $username;
      $this->password = $password;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\GetUserGroupList
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\GetUserGroupList
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
