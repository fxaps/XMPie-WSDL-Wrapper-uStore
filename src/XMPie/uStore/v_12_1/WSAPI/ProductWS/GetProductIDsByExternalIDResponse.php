<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductWS;

class GetProductIDsByExternalIDResponse
{

    /**
     * @var ArrayOfInt $GetProductIDsByExternalIDResult
     */
    protected $GetProductIDsByExternalIDResult = null;

    /**
     * @param ArrayOfInt $GetProductIDsByExternalIDResult
     */
    public function __construct($GetProductIDsByExternalIDResult = null)
    {
        $this->GetProductIDsByExternalIDResult = $GetProductIDsByExternalIDResult;
    }

    /**
     * @return ArrayOfInt
     */
    public function getGetProductIDsByExternalIDResult()
    {
        return $this->GetProductIDsByExternalIDResult;
    }

    /**
     * @param ArrayOfInt $GetProductIDsByExternalIDResult
     * @return GetProductIDsByExternalIDResponse
     */
    public function setGetProductIDsByExternalIDResult($GetProductIDsByExternalIDResult)
    {
        $this->GetProductIDsByExternalIDResult = $GetProductIDsByExternalIDResult;
        return $this;
    }

}
