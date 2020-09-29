<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS;

class GetOrderProductListResponse
{

    /**
     * @var ArrayOfOrderProduct $GetOrderProductListResult
     */
    protected $GetOrderProductListResult = null;

    /**
     * @param ArrayOfOrderProduct $GetOrderProductListResult
     */
    public function __construct($GetOrderProductListResult = null)
    {
        $this->GetOrderProductListResult = $GetOrderProductListResult;
    }

    /**
     * @return ArrayOfOrderProduct
     */
    public function getGetOrderProductListResult()
    {
        return $this->GetOrderProductListResult;
    }

    /**
     * @param ArrayOfOrderProduct $GetOrderProductListResult
     * @return GetOrderProductListResponse
     */
    public function setGetOrderProductListResult($GetOrderProductListResult)
    {
        $this->GetOrderProductListResult = $GetOrderProductListResult;
        return $this;
    }

}
