<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS;

class GetProductListResponse
{

    /**
     * @var ArrayOfProduct $GetProductListResult
     */
    protected $GetProductListResult = null;

    /**
     * @param ArrayOfProduct $GetProductListResult
     */
    public function __construct($GetProductListResult = null)
    {
      $this->GetProductListResult = $GetProductListResult;
    }

    /**
     * @return ArrayOfProduct
     */
    public function getGetProductListResult()
    {
      return $this->GetProductListResult;
    }

    /**
     * @param ArrayOfProduct $GetProductListResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductWS\GetProductListResponse
     */
    public function setGetProductListResult($GetProductListResult)
    {
      $this->GetProductListResult = $GetProductListResult;
      return $this;
    }

}
