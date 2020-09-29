<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\OrderProductWS;

class GetCompositeSubOrderProductsListResponse
{

    /**
     * @var ArrayOfOrderProduct $GetCompositeSubOrderProductsListResult
     */
    protected $GetCompositeSubOrderProductsListResult = null;

    /**
     * @param ArrayOfOrderProduct $GetCompositeSubOrderProductsListResult
     */
    public function __construct($GetCompositeSubOrderProductsListResult = null)
    {
        $this->GetCompositeSubOrderProductsListResult = $GetCompositeSubOrderProductsListResult;
    }

    /**
     * @return ArrayOfOrderProduct
     */
    public function getGetCompositeSubOrderProductsListResult()
    {
        return $this->GetCompositeSubOrderProductsListResult;
    }

    /**
     * @param ArrayOfOrderProduct $GetCompositeSubOrderProductsListResult
     * @return GetCompositeSubOrderProductsListResponse
     */
    public function setGetCompositeSubOrderProductsListResult($GetCompositeSubOrderProductsListResult)
    {
        $this->GetCompositeSubOrderProductsListResult = $GetCompositeSubOrderProductsListResult;
        return $this;
    }

}
