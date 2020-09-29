<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ActualDeliveryWS;

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
     * @return CreateDeliveryResponse
     */
    public function setCreateDeliveryResult($CreateDeliveryResult)
    {
        $this->CreateDeliveryResult = $CreateDeliveryResult;
        return $this;
    }

}
