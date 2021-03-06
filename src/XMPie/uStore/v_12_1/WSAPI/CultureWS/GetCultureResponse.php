<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CultureWS;

class GetCultureResponse
{

    /**
     * @var Culture $GetCultureResult
     */
    protected $GetCultureResult = null;

    /**
     * @param Culture $GetCultureResult
     */
    public function __construct($GetCultureResult = null)
    {
        $this->GetCultureResult = $GetCultureResult;
    }

    /**
     * @return Culture
     */
    public function getGetCultureResult()
    {
        return $this->GetCultureResult;
    }

    /**
     * @param Culture $GetCultureResult
     * @return GetCultureResponse
     */
    public function setGetCultureResult($GetCultureResult)
    {
        $this->GetCultureResult = $GetCultureResult;
        return $this;
    }

}
