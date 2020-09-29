<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ActualDeliveryWS;

class CreateDeliveryWithDetailsByOrderProductsResponse
{

    /**
     * @var int $CreateDeliveryWithDetailsByOrderProductsResult
     */
    protected $CreateDeliveryWithDetailsByOrderProductsResult = null;

    /**
     * @param int $CreateDeliveryWithDetailsByOrderProductsResult
     */
    public function __construct($CreateDeliveryWithDetailsByOrderProductsResult = null)
    {
        $this->CreateDeliveryWithDetailsByOrderProductsResult = $CreateDeliveryWithDetailsByOrderProductsResult;
    }

    /**
     * @return int
     */
    public function getCreateDeliveryWithDetailsByOrderProductsResult()
    {
        return $this->CreateDeliveryWithDetailsByOrderProductsResult;
    }

    /**
     * @param int $CreateDeliveryWithDetailsByOrderProductsResult
     * @return CreateDeliveryWithDetailsByOrderProductsResponse
     */
    public function setCreateDeliveryWithDetailsByOrderProductsResult($CreateDeliveryWithDetailsByOrderProductsResult)
    {
        $this->CreateDeliveryWithDetailsByOrderProductsResult = $CreateDeliveryWithDetailsByOrderProductsResult;
        return $this;
    }

}
