<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TentativeDeliveryWS;

class GetTentativeDelivery
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
     * @var int $tentativeDeliveryId
     */
    protected $tentativeDeliveryId = null;

    /**
     * @var int $cultureId
     */
    protected $cultureId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $tentativeDeliveryId
     * @param int $cultureId
     */
    public function __construct($username = null, $password = null, $tentativeDeliveryId = null, $cultureId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->tentativeDeliveryId = $tentativeDeliveryId;
      $this->cultureId = $cultureId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TentativeDeliveryWS\GetTentativeDelivery
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TentativeDeliveryWS\GetTentativeDelivery
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getTentativeDeliveryId()
    {
      return $this->tentativeDeliveryId;
    }

    /**
     * @param int $tentativeDeliveryId
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TentativeDeliveryWS\GetTentativeDelivery
     */
    public function setTentativeDeliveryId($tentativeDeliveryId)
    {
      $this->tentativeDeliveryId = $tentativeDeliveryId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCultureId()
    {
      return $this->cultureId;
    }

    /**
     * @param int $cultureId
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TentativeDeliveryWS\GetTentativeDelivery
     */
    public function setCultureId($cultureId)
    {
      $this->cultureId = $cultureId;
      return $this;
    }

}
