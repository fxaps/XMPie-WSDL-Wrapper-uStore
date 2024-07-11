<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderProductWS;

class RecalculatePriceResponse
{

    /**
     * @var OrderProduct $RecalculatePriceResult
     */
    protected $RecalculatePriceResult = null;

    /**
     * @param OrderProduct $RecalculatePriceResult
     */
    public function __construct($RecalculatePriceResult = null)
    {
      $this->RecalculatePriceResult = $RecalculatePriceResult;
    }

    /**
     * @return OrderProduct
     */
    public function getRecalculatePriceResult()
    {
      return $this->RecalculatePriceResult;
    }

    /**
     * @param OrderProduct $RecalculatePriceResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderProductWS\RecalculatePriceResponse
     */
    public function setRecalculatePriceResult($RecalculatePriceResult)
    {
      $this->RecalculatePriceResult = $RecalculatePriceResult;
      return $this;
    }

}
