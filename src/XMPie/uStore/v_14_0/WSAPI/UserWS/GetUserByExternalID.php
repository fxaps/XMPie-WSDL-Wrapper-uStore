<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserWS;

class GetUserByExternalID
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
     * @var string $externalID
     */
    protected $externalID = null;

    /**
     * @param string $username
     * @param string $password
     * @param string $externalID
     */
    public function __construct($username = null, $password = null, $externalID = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->externalID = $externalID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserWS\GetUserByExternalID
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserWS\GetUserByExternalID
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalID()
    {
      return $this->externalID;
    }

    /**
     * @param string $externalID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserWS\GetUserByExternalID
     */
    public function setExternalID($externalID)
    {
      $this->externalID = $externalID;
      return $this;
    }

}
