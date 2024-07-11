<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS;

class GetProofTicketId
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
     * @var int $orderProductId
     */
    protected $orderProductId = null;

    /**
     * @var int $NumberOfRecords
     */
    protected $NumberOfRecords = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $orderProductId
     * @param int $NumberOfRecords
     */
    public function __construct($username = null, $password = null, $orderProductId = null, $NumberOfRecords = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->orderProductId = $orderProductId;
      $this->NumberOfRecords = $NumberOfRecords;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS\GetProofTicketId
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS\GetProofTicketId
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderProductId()
    {
      return $this->orderProductId;
    }

    /**
     * @param int $orderProductId
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS\GetProofTicketId
     */
    public function setOrderProductId($orderProductId)
    {
      $this->orderProductId = $orderProductId;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfRecords()
    {
      return $this->NumberOfRecords;
    }

    /**
     * @param int $NumberOfRecords
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS\GetProofTicketId
     */
    public function setNumberOfRecords($NumberOfRecords)
    {
      $this->NumberOfRecords = $NumberOfRecords;
      return $this;
    }

}
