<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS;

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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetOrderResponse
     */
    public function setGetOrderResult($GetOrderResult)
    {
      $this->GetOrderResult = $GetOrderResult;
      return $this;
    }

}
