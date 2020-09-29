<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS;

class GetOrderProductHistoryResponse
{

    /**
     * @var ArrayOfOrderProduct $GetOrderProductHistoryResult
     */
    protected $GetOrderProductHistoryResult = null;

    /**
     * @param ArrayOfOrderProduct $GetOrderProductHistoryResult
     */
    public function __construct($GetOrderProductHistoryResult = null)
    {
        $this->GetOrderProductHistoryResult = $GetOrderProductHistoryResult;
    }

    /**
     * @return ArrayOfOrderProduct
     */
    public function getGetOrderProductHistoryResult()
    {
        return $this->GetOrderProductHistoryResult;
    }

    /**
     * @param ArrayOfOrderProduct $GetOrderProductHistoryResult
     * @return GetOrderProductHistoryResponse
     */
    public function setGetOrderProductHistoryResult($GetOrderProductHistoryResult)
    {
        $this->GetOrderProductHistoryResult = $GetOrderProductHistoryResult;
        return $this;
    }

}
