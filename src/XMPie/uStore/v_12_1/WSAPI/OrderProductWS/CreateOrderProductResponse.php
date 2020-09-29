<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS;

class CreateOrderProductResponse
{

    /**
     * @var int $CreateOrderProductResult
     */
    protected $CreateOrderProductResult = null;

    /**
     * @param int $CreateOrderProductResult
     */
    public function __construct($CreateOrderProductResult = null)
    {
        $this->CreateOrderProductResult = $CreateOrderProductResult;
    }

    /**
     * @return int
     */
    public function getCreateOrderProductResult()
    {
        return $this->CreateOrderProductResult;
    }

    /**
     * @param int $CreateOrderProductResult
     * @return CreateOrderProductResponse
     */
    public function setCreateOrderProductResult($CreateOrderProductResult)
    {
        $this->CreateOrderProductResult = $CreateOrderProductResult;
        return $this;
    }

}
