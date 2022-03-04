<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductionWS;

class ProductionStatus
{

    /**
     * @var int $OrderProductID
     */
    protected $OrderProductID = null;

    /**
     * @var int $UproduceProductionJobID
     */
    protected $UproduceProductionJobID = null;

    /**
     * @var int $Status
     */
    protected $Status = null;

    /**
     * @var string $ProductionMessages
     */
    protected $ProductionMessages = null;

    /**
     * @var ArrayOfString $DestinationOutputFilesLocation
     */
    protected $DestinationOutputFilesLocation = null;

    /**
     * @param int $OrderProductID
     * @param int $UproduceProductionJobID
     * @param int $Status
     */
    public function __construct($OrderProductID = null, $UproduceProductionJobID = null, $Status = null)
    {
      $this->OrderProductID = $OrderProductID;
      $this->UproduceProductionJobID = $UproduceProductionJobID;
      $this->Status = $Status;
    }

    /**
     * @return int
     */
    public function getOrderProductID()
    {
      return $this->OrderProductID;
    }

    /**
     * @param int $OrderProductID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductionWS\ProductionStatus
     */
    public function setOrderProductID($OrderProductID)
    {
      $this->OrderProductID = $OrderProductID;
      return $this;
    }

    /**
     * @return int
     */
    public function getUproduceProductionJobID()
    {
      return $this->UproduceProductionJobID;
    }

    /**
     * @param int $UproduceProductionJobID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductionWS\ProductionStatus
     */
    public function setUproduceProductionJobID($UproduceProductionJobID)
    {
      $this->UproduceProductionJobID = $UproduceProductionJobID;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param int $Status
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductionWS\ProductionStatus
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductionMessages()
    {
      return $this->ProductionMessages;
    }

    /**
     * @param string $ProductionMessages
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductionWS\ProductionStatus
     */
    public function setProductionMessages($ProductionMessages)
    {
      $this->ProductionMessages = $ProductionMessages;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getDestinationOutputFilesLocation()
    {
      return $this->DestinationOutputFilesLocation;
    }

    /**
     * @param ArrayOfString $DestinationOutputFilesLocation
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductionWS\ProductionStatus
     */
    public function setDestinationOutputFilesLocation($DestinationOutputFilesLocation)
    {
      $this->DestinationOutputFilesLocation = $DestinationOutputFilesLocation;
      return $this;
    }

}
