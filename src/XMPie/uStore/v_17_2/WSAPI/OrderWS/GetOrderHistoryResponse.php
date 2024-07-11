<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS;

class GetOrderHistoryResponse
{

    /**
     * @var ArrayOfOrder $GetOrderHistoryResult
     */
    protected $GetOrderHistoryResult = null;

    /**
     * @param ArrayOfOrder $GetOrderHistoryResult
     */
    public function __construct($GetOrderHistoryResult = null)
    {
      $this->GetOrderHistoryResult = $GetOrderHistoryResult;
    }

    /**
     * @return ArrayOfOrder
     */
    public function getGetOrderHistoryResult()
    {
      return $this->GetOrderHistoryResult;
    }

    /**
     * @param ArrayOfOrder $GetOrderHistoryResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetOrderHistoryResponse
     */
    public function setGetOrderHistoryResult($GetOrderHistoryResult)
    {
      $this->GetOrderHistoryResult = $GetOrderHistoryResult;
      return $this;
    }

}
