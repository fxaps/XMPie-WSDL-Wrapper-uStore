<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductGroupWS;

class GetProductGroupResponse
{

    /**
     * @var ProductGroup $GetProductGroupResult
     */
    protected $GetProductGroupResult = null;

    /**
     * @param ProductGroup $GetProductGroupResult
     */
    public function __construct($GetProductGroupResult = null)
    {
        $this->GetProductGroupResult = $GetProductGroupResult;
    }

    /**
     * @return ProductGroup
     */
    public function getGetProductGroupResult()
    {
        return $this->GetProductGroupResult;
    }

    /**
     * @param ProductGroup $GetProductGroupResult
     * @return GetProductGroupResponse
     */
    public function setGetProductGroupResult($GetProductGroupResult)
    {
        $this->GetProductGroupResult = $GetProductGroupResult;
        return $this;
    }

}
