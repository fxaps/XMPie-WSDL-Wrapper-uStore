<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\XMPieInternalWS;

class GetOrderProductListByQueueJoinedResponse
{

    /**
     * @var ArrayOfOrderProductJoined $GetOrderProductListByQueueJoinedResult
     */
    protected $GetOrderProductListByQueueJoinedResult = null;

    /**
     * @param ArrayOfOrderProductJoined $GetOrderProductListByQueueJoinedResult
     */
    public function __construct($GetOrderProductListByQueueJoinedResult = null)
    {
        $this->GetOrderProductListByQueueJoinedResult = $GetOrderProductListByQueueJoinedResult;
    }

    /**
     * @return ArrayOfOrderProductJoined
     */
    public function getGetOrderProductListByQueueJoinedResult()
    {
        return $this->GetOrderProductListByQueueJoinedResult;
    }

    /**
     * @param ArrayOfOrderProductJoined $GetOrderProductListByQueueJoinedResult
     * @return GetOrderProductListByQueueJoinedResponse
     */
    public function setGetOrderProductListByQueueJoinedResult($GetOrderProductListByQueueJoinedResult)
    {
        $this->GetOrderProductListByQueueJoinedResult = $GetOrderProductListByQueueJoinedResult;
        return $this;
    }

}
