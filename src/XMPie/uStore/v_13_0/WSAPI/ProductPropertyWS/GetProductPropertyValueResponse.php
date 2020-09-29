<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductPropertyWS;

class GetProductPropertyValueResponse
{

    /**
     * @var ProductPropertyValue $GetProductPropertyValueResult
     */
    protected $GetProductPropertyValueResult = null;

    /**
     * @param ProductPropertyValue $GetProductPropertyValueResult
     */
    public function __construct($GetProductPropertyValueResult = null)
    {
        $this->GetProductPropertyValueResult = $GetProductPropertyValueResult;
    }

    /**
     * @return ProductPropertyValue
     */
    public function getGetProductPropertyValueResult()
    {
        return $this->GetProductPropertyValueResult;
    }

    /**
     * @param ProductPropertyValue $GetProductPropertyValueResult
     * @return GetProductPropertyValueResponse
     */
    public function setGetProductPropertyValueResult($GetProductPropertyValueResult)
    {
        $this->GetProductPropertyValueResult = $GetProductPropertyValueResult;
        return $this;
    }

}
