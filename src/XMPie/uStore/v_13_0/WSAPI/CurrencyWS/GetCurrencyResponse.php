<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CurrencyWS;

class GetCurrencyResponse
{

    /**
     * @var CurrencyInfo $GetCurrencyResult
     */
    protected $GetCurrencyResult = null;

    /**
     * @param CurrencyInfo $GetCurrencyResult
     */
    public function __construct($GetCurrencyResult = null)
    {
        $this->GetCurrencyResult = $GetCurrencyResult;
    }

    /**
     * @return CurrencyInfo
     */
    public function getGetCurrencyResult()
    {
        return $this->GetCurrencyResult;
    }

    /**
     * @param CurrencyInfo $GetCurrencyResult
     * @return GetCurrencyResponse
     */
    public function setGetCurrencyResult($GetCurrencyResult)
    {
        $this->GetCurrencyResult = $GetCurrencyResult;
        return $this;
    }

}
