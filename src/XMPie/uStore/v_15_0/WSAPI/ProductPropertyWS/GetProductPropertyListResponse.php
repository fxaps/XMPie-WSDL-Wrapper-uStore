<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductPropertyWS;

class GetProductPropertyListResponse
{

    /**
     * @var ArrayOfProductProperty $GetProductPropertyListResult
     */
    protected $GetProductPropertyListResult = null;

    /**
     * @param ArrayOfProductProperty $GetProductPropertyListResult
     */
    public function __construct($GetProductPropertyListResult = null)
    {
      $this->GetProductPropertyListResult = $GetProductPropertyListResult;
    }

    /**
     * @return ArrayOfProductProperty
     */
    public function getGetProductPropertyListResult()
    {
      return $this->GetProductPropertyListResult;
    }

    /**
     * @param ArrayOfProductProperty $GetProductPropertyListResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductPropertyWS\GetProductPropertyListResponse
     */
    public function setGetProductPropertyListResult($GetProductPropertyListResult)
    {
      $this->GetProductPropertyListResult = $GetProductPropertyListResult;
      return $this;
    }

}
