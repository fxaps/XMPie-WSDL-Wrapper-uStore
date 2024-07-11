<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductPropertyWS;

class GetProductPropertyValueListResponse
{

    /**
     * @var ArrayOfProductPropertyValue $GetProductPropertyValueListResult
     */
    protected $GetProductPropertyValueListResult = null;

    /**
     * @param ArrayOfProductPropertyValue $GetProductPropertyValueListResult
     */
    public function __construct($GetProductPropertyValueListResult = null)
    {
      $this->GetProductPropertyValueListResult = $GetProductPropertyValueListResult;
    }

    /**
     * @return ArrayOfProductPropertyValue
     */
    public function getGetProductPropertyValueListResult()
    {
      return $this->GetProductPropertyValueListResult;
    }

    /**
     * @param ArrayOfProductPropertyValue $GetProductPropertyValueListResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductPropertyWS\GetProductPropertyValueListResponse
     */
    public function setGetProductPropertyValueListResult($GetProductPropertyValueListResult)
    {
      $this->GetProductPropertyValueListResult = $GetProductPropertyValueListResult;
      return $this;
    }

}
