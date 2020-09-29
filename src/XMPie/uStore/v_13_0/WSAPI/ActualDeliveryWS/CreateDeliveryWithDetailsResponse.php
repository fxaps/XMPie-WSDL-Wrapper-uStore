<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ActualDeliveryWS;

class CreateDeliveryWithDetailsResponse
{

    /**
     * @var int $CreateDeliveryWithDetailsResult
     */
    protected $CreateDeliveryWithDetailsResult = null;

    /**
     * @param int $CreateDeliveryWithDetailsResult
     */
    public function __construct($CreateDeliveryWithDetailsResult = null)
    {
        $this->CreateDeliveryWithDetailsResult = $CreateDeliveryWithDetailsResult;
    }

    /**
     * @return int
     */
    public function getCreateDeliveryWithDetailsResult()
    {
        return $this->CreateDeliveryWithDetailsResult;
    }

    /**
     * @param int $CreateDeliveryWithDetailsResult
     * @return CreateDeliveryWithDetailsResponse
     */
    public function setCreateDeliveryWithDetailsResult($CreateDeliveryWithDetailsResult)
    {
        $this->CreateDeliveryWithDetailsResult = $CreateDeliveryWithDetailsResult;
        return $this;
    }

}
