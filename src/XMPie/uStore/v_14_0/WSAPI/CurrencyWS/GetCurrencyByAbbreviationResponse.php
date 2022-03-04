<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CurrencyWS;

class GetCurrencyByAbbreviationResponse
{

    /**
     * @var CurrencyInfo $GetCurrencyByAbbreviationResult
     */
    protected $GetCurrencyByAbbreviationResult = null;

    /**
     * @param CurrencyInfo $GetCurrencyByAbbreviationResult
     */
    public function __construct($GetCurrencyByAbbreviationResult = null)
    {
      $this->GetCurrencyByAbbreviationResult = $GetCurrencyByAbbreviationResult;
    }

    /**
     * @return CurrencyInfo
     */
    public function getGetCurrencyByAbbreviationResult()
    {
      return $this->GetCurrencyByAbbreviationResult;
    }

    /**
     * @param CurrencyInfo $GetCurrencyByAbbreviationResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CurrencyWS\GetCurrencyByAbbreviationResponse
     */
    public function setGetCurrencyByAbbreviationResult($GetCurrencyByAbbreviationResult)
    {
      $this->GetCurrencyByAbbreviationResult = $GetCurrencyByAbbreviationResult;
      return $this;
    }

}
