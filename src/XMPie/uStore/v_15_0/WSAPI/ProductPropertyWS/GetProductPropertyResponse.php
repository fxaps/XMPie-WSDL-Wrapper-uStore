<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductPropertyWS;

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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductPropertyWS\GetProductPropertyResponse
     */
    public function setGetProductPropertyResult($GetProductPropertyResult)
    {
      $this->GetProductPropertyResult = $GetProductPropertyResult;
      return $this;
    }

}
