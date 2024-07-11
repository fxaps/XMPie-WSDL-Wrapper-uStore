<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\UserWS;

class ValidateUser
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
     * @var string $userPassword
     */
    protected $userPassword = null;

    /**
     * @param string $username
     * @param string $password
     * @param string $email
     * @param string $userPassword
     */
    public function __construct($username = null, $password = null, $email = null, $userPassword = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->email = $email;
      $this->userPassword = $userPassword;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\UserWS\ValidateUser
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\UserWS\ValidateUser
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\UserWS\ValidateUser
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserPassword()
    {
      return $this->userPassword;
    }

    /**
     * @param string $userPassword
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\UserWS\ValidateUser
     */
    public function setUserPassword($userPassword)
    {
      $this->userPassword = $userPassword;
      return $this;
    }

}
