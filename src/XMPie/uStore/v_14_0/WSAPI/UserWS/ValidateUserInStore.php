<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserWS;

class ValidateUserInStore
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
     * @var int $assignedToStoreID
     */
    protected $assignedToStoreID = null;

    /**
     * @param string $username
     * @param string $password
     * @param string $email
     * @param string $userPassword
     * @param int $assignedToStoreID
     */
    public function __construct($username = null, $password = null, $email = null, $userPassword = null, $assignedToStoreID = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->email = $email;
      $this->userPassword = $userPassword;
      $this->assignedToStoreID = $assignedToStoreID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserWS\ValidateUserInStore
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserWS\ValidateUserInStore
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserWS\ValidateUserInStore
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserWS\ValidateUserInStore
     */
    public function setUserPassword($userPassword)
    {
      $this->userPassword = $userPassword;
      return $this;
    }

    /**
     * @return int
     */
    public function getAssignedToStoreID()
    {
      return $this->assignedToStoreID;
    }

    /**
     * @param int $assignedToStoreID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserWS\ValidateUserInStore
     */
    public function setAssignedToStoreID($assignedToStoreID)
    {
      $this->assignedToStoreID = $assignedToStoreID;
      return $this;
    }

}
