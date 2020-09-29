<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS;

class GetOrderProductListByQueueResponse
{

    /**
     * @var ArrayOfOrderProduct $GetOrderProductListByQueueResult
     */
    protected $GetOrderProductListByQueueResult = null;

    /**
     * @param ArrayOfOrderProduct $GetOrderProductListByQueueResult
     */
    public function __construct($GetOrderProductListByQueueResult = null)
    {
        $this->GetOrderProductListByQueueResult = $GetOrderProductListByQueueResult;
    }

    /**
     * @return ArrayOfOrderProduct
     */
    public function getGetOrderProductListByQueueResult()
    {
        return $this->GetOrderProductListByQueueResult;
    }

    /**
     * @param ArrayOfOrderProduct $GetOrderProductListByQueueResult
     * @return GetOrderProductListByQueueResponse
     */
    public function setGetOrderProductListByQueueResult($GetOrderProductListByQueueResult)
    {
        $this->GetOrderProductListByQueueResult = $GetOrderProductListByQueueResult;
        return $this;
    }

}
