<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS;

class GetProductListByStoreResponse
{

    /**
     * @var ArrayOfProduct $GetProductListByStoreResult
     */
    protected $GetProductListByStoreResult = null;

    /**
     * @param ArrayOfProduct $GetProductListByStoreResult
     */
    public function __construct($GetProductListByStoreResult = null)
    {
      $this->GetProductListByStoreResult = $GetProductListByStoreResult;
    }

    /**
     * @return ArrayOfProduct
     */
    public function getGetProductListByStoreResult()
    {
      return $this->GetProductListByStoreResult;
    }

    /**
     * @param ArrayOfProduct $GetProductListByStoreResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductListByStoreResponse
     */
    public function setGetProductListByStoreResult($GetProductListByStoreResult)
    {
      $this->GetProductListByStoreResult = $GetProductListByStoreResult;
      return $this;
    }

}
