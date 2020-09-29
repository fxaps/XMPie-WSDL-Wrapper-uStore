<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\OrderWS;

class GetOrderResponse
{

    /**
     * @var Order $GetOrderResult
     */
    protected $GetOrderResult = null;

    /**
     * @param Order $GetOrderResult
     */
    public function __construct($GetOrderResult = null)
    {
        $this->GetOrderResult = $GetOrderResult;
    }

    /**
     * @return Order
     */
    public function getGetOrderResult()
    {
        return $this->GetOrderResult;
    }

    /**
     * @param Order $GetOrderResult
     * @return GetOrderResponse
     */
    public function setGetOrderResult($GetOrderResult)
    {
        $this->GetOrderResult = $GetOrderResult;
        return $this;
    }

}
