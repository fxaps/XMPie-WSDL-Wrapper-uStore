<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductWS;

class GetProductIDsByExternalID
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
     * @var string $externalProductID
     */
    protected $externalProductID = null;

    /**
     * @param string $username
     * @param string $password
     * @param string $externalProductID
     */
    public function __construct($username = null, $password = null, $externalProductID = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->externalProductID = $externalProductID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductWS\GetProductIDsByExternalID
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductWS\GetProductIDsByExternalID
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalProductID()
    {
      return $this->externalProductID;
    }

    /**
     * @param string $externalProductID
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductWS\GetProductIDsByExternalID
     */
    public function setExternalProductID($externalProductID)
    {
      $this->externalProductID = $externalProductID;
      return $this;
    }

}
