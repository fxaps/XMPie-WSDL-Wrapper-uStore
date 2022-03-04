<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS;

class CreateDeliveryResponse
{

    /**
     * @var int $CreateDeliveryResult
     */
    protected $CreateDeliveryResult = null;

    /**
     * @param int $CreateDeliveryResult
     */
    public function __construct($CreateDeliveryResult = null)
    {
      $this->CreateDeliveryResult = $CreateDeliveryResult;
    }

    /**
     * @return int
     */
    public function getCreateDeliveryResult()
    {
      return $this->CreateDeliveryResult;
    }

    /**
     * @param int $CreateDeliveryResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\CreateDeliveryResponse
     */
    public function setCreateDeliveryResult($CreateDeliveryResult)
    {
      $this->CreateDeliveryResult = $CreateDeliveryResult;
      return $this;
    }

}
