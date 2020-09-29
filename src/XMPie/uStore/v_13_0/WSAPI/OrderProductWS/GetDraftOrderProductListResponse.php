<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\OrderProductWS;

class GetDraftOrderProductListResponse
{

    /**
     * @var ArrayOfOrderProduct $GetDraftOrderProductListResult
     */
    protected $GetDraftOrderProductListResult = null;

    /**
     * @param ArrayOfOrderProduct $GetDraftOrderProductListResult
     */
    public function __construct($GetDraftOrderProductListResult = null)
    {
        $this->GetDraftOrderProductListResult = $GetDraftOrderProductListResult;
    }

    /**
     * @return ArrayOfOrderProduct
     */
    public function getGetDraftOrderProductListResult()
    {
        return $this->GetDraftOrderProductListResult;
    }

    /**
     * @param ArrayOfOrderProduct $GetDraftOrderProductListResult
     * @return GetDraftOrderProductListResponse
     */
    public function setGetDraftOrderProductListResult($GetDraftOrderProductListResult)
    {
        $this->GetDraftOrderProductListResult = $GetDraftOrderProductListResult;
        return $this;
    }

}
