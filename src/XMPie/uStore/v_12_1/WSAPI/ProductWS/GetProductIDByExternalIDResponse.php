<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductWS;

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
     * @return GetProductIDByExternalIDResponse
     */
    public function setGetProductIDByExternalIDResult($GetProductIDByExternalIDResult)
    {
        $this->GetProductIDByExternalIDResult = $GetProductIDByExternalIDResult;
        return $this;
    }

}
