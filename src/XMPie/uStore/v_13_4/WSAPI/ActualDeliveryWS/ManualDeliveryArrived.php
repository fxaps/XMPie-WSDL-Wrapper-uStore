<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS;

class ManualDeliveryArrived
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
     * @var int $deliveryId
     */
    protected $deliveryId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $deliveryId
     */
    public function __construct($username = null, $password = null, $deliveryId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->deliveryId = $deliveryId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\ManualDeliveryArrived
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\ManualDeliveryArrived
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryId()
    {
      return $this->deliveryId;
    }

    /**
     * @param int $deliveryId
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\ManualDeliveryArrived
     */
    public function setDeliveryId($deliveryId)
    {
      $this->deliveryId = $deliveryId;
      return $this;
    }

}
