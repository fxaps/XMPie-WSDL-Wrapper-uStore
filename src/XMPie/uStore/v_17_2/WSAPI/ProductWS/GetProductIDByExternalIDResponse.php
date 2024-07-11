<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductWS;

class GetProductIDByExternalIDResponse
{

    /**
     * @var int $GetProductIDByExternalIDResult
     */
    protected $GetProductIDByExternalIDResult = null;

    /**
     * @param int $GetProductIDByExternalIDResult
     */
    public function __construct($GetProductIDByExternalIDResult = null)
    {
      $this->GetProductIDByExternalIDResult = $GetProductIDByExternalIDResult;
    }

    /**
     * @return int
     */
    public function getGetProductIDByExternalIDResult()
    {
      return $this->GetProductIDByExternalIDResult;
    }

    /**
     * @param int $GetProductIDByExternalIDResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductWS\GetProductIDByExternalIDResponse
     */
    public function setGetProductIDByExternalIDResult($GetProductIDByExternalIDResult)
    {
      $this->GetProductIDByExternalIDResult = $GetProductIDByExternalIDResult;
      return $this;
    }

}
