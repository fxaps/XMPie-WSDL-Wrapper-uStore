<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CurrencyWS\GetCurrency;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CurrencyWS\GetCurrencyResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CurrencyWS\CurrencyInfo;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CurrencyWS\GetCurrencyByAbbreviation;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CurrencyWS\GetCurrencyByAbbreviationResponse;


class FabricateCurrencyWS
{
    private $paramAutoSet;

    /**
     * Constructor.
     *
     * @param array $paramAutoSet
     */
    public function __construct($paramAutoSet = [])
    {
        $this->setParamAutoSet($paramAutoSet);
    }


    /**
     * @return array
     */
    public function getParamAutoSet()
    {
        return $this->paramAutoSet;
    }


    /**
     * @param array $paramAutoSet
     */
    public function setParamAutoSet($paramAutoSet)
    {
        $this->paramAutoSet = $paramAutoSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCurrency
    */
    public function GetCurrency($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCurrency = new GetCurrency();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCurrency, $methodName)) {
                $GetCurrency->$methodName($paramValue);
            }
        }
        return $GetCurrency;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCurrencyResponse
    */
    public function GetCurrencyResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCurrencyResponse = new GetCurrencyResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCurrencyResponse, $methodName)) {
                $GetCurrencyResponse->$methodName($paramValue);
            }
        }
        return $GetCurrencyResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CurrencyInfo
    */
    public function CurrencyInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CurrencyInfo = new CurrencyInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CurrencyInfo, $methodName)) {
                $CurrencyInfo->$methodName($paramValue);
            }
        }
        return $CurrencyInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCurrencyByAbbreviation
    */
    public function GetCurrencyByAbbreviation($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCurrencyByAbbreviation = new GetCurrencyByAbbreviation();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCurrencyByAbbreviation, $methodName)) {
                $GetCurrencyByAbbreviation->$methodName($paramValue);
            }
        }
        return $GetCurrencyByAbbreviation;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCurrencyByAbbreviationResponse
    */
    public function GetCurrencyByAbbreviationResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCurrencyByAbbreviationResponse = new GetCurrencyByAbbreviationResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCurrencyByAbbreviationResponse, $methodName)) {
                $GetCurrencyByAbbreviationResponse->$methodName($paramValue);
            }
        }
        return $GetCurrencyByAbbreviationResponse;
    }



}

?>
