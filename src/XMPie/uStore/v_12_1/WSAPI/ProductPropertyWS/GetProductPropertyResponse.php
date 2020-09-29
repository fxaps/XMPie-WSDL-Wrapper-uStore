<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductPropertyWS;

class GetProductPropertyResponse
{

    /**
     * @var ProductProperty $GetProductPropertyResult
     */
    protected $GetProductPropertyResult = null;

    /**
     * @param ProductProperty $GetProductPropertyResult
     */
    public function __construct($GetProductPropertyResult = null)
    {
        $this->GetProductPropertyResult = $GetProductPropertyResult;
    }

    /**
     * @return ProductProperty
     */
    public function getGetProductPropertyResult()
    {
        return $this->GetProductPropertyResult;
    }

    /**
     * @param ProductProperty $GetProductPropertyResult
     * @return GetProductPropertyResponse
     */
    public function setGetProductPropertyResult($GetProductPropertyResult)
    {
        $this->GetProductPropertyResult = $GetProductPropertyResult;
        return $this;
    }

}
