<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductGroupWS;

class GetProductGroupListResponse
{

    /**
     * @var ArrayOfProductGroup $GetProductGroupListResult
     */
    protected $GetProductGroupListResult = null;

    /**
     * @param ArrayOfProductGroup $GetProductGroupListResult
     */
    public function __construct($GetProductGroupListResult = null)
    {
      $this->GetProductGroupListResult = $GetProductGroupListResult;
    }

    /**
     * @return ArrayOfProductGroup
     */
    public function getGetProductGroupListResult()
    {
      return $this->GetProductGroupListResult;
    }

    /**
     * @param ArrayOfProductGroup $GetProductGroupListResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductGroupWS\GetProductGroupListResponse
     */
    public function setGetProductGroupListResult($GetProductGroupListResult)
    {
      $this->GetProductGroupListResult = $GetProductGroupListResult;
      return $this;
    }

}
