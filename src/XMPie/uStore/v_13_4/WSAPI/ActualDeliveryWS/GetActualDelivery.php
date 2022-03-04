<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS;

class GetActualDelivery
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
     * @var int $actualDeliveryId
     */
    protected $actualDeliveryId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $actualDeliveryId
     */
    public function __construct($username = null, $password = null, $actualDeliveryId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->actualDeliveryId = $actualDeliveryId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\GetActualDelivery
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\GetActualDelivery
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getActualDeliveryId()
    {
      return $this->actualDeliveryId;
    }

    /**
     * @param int $actualDeliveryId
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\GetActualDelivery
     */
    public function setActualDeliveryId($actualDeliveryId)
    {
      $this->actualDeliveryId = $actualDeliveryId;
      return $this;
    }

}
