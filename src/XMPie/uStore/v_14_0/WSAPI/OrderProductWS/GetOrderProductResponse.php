<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderProductWS;

class GetOrderProductResponse
{

    /**
     * @var OrderProduct $GetOrderProductResult
     */
    protected $GetOrderProductResult = null;

    /**
     * @param OrderProduct $GetOrderProductResult
     */
    public function __construct($GetOrderProductResult = null)
    {
      $this->GetOrderProductResult = $GetOrderProductResult;
    }

    /**
     * @return OrderProduct
     */
    public function getGetOrderProductResult()
    {
      return $this->GetOrderProductResult;
    }

    /**
     * @param OrderProduct $GetOrderProductResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderProductWS\GetOrderProductResponse
     */
    public function setGetOrderProductResult($GetOrderProductResult)
    {
      $this->GetOrderProductResult = $GetOrderProductResult;
      return $this;
    }

}
