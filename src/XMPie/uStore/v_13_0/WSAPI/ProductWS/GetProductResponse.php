<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductWS;

class GetProductResponse
{

    /**
     * @var Product $GetProductResult
     */
    protected $GetProductResult = null;

    /**
     * @param Product $GetProductResult
     */
    public function __construct($GetProductResult = null)
    {
        $this->GetProductResult = $GetProductResult;
    }

    /**
     * @return Product
     */
    public function getGetProductResult()
    {
        return $this->GetProductResult;
    }

    /**
     * @param Product $GetProductResult
     * @return GetProductResponse
     */
    public function setGetProductResult($GetProductResult)
    {
        $this->GetProductResult = $GetProductResult;
        return $this;
    }

}
