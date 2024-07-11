<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CultureWS\GetCulture;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CultureWS\GetCultureResponse;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CultureWS\Culture;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CultureWS\GetCultureByStore;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CultureWS\GetCultureByStoreResponse;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CultureWS\ArrayOfCulture;


class FabricateCultureWS
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
    * @return GetCulture
    */
    public function GetCulture($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCulture = new GetCulture();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCulture, $methodName)) {
                $GetCulture->$methodName($paramValue);
            }
        }
        return $GetCulture;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCultureResponse
    */
    public function GetCultureResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCultureResponse = new GetCultureResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCultureResponse, $methodName)) {
                $GetCultureResponse->$methodName($paramValue);
            }
        }
        return $GetCultureResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Culture
    */
    public function Culture($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Culture = new Culture();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Culture, $methodName)) {
                $Culture->$methodName($paramValue);
            }
        }
        return $Culture;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCultureByStore
    */
    public function GetCultureByStore($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCultureByStore = new GetCultureByStore();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCultureByStore, $methodName)) {
                $GetCultureByStore->$methodName($paramValue);
            }
        }
        return $GetCultureByStore;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCultureByStoreResponse
    */
    public function GetCultureByStoreResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCultureByStoreResponse = new GetCultureByStoreResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCultureByStoreResponse, $methodName)) {
                $GetCultureByStoreResponse->$methodName($paramValue);
            }
        }
        return $GetCultureByStoreResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfCulture
    */
    public function ArrayOfCulture($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfCulture = new ArrayOfCulture();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfCulture, $methodName)) {
                $ArrayOfCulture->$methodName($paramValue);
            }
        }
        return $ArrayOfCulture;
    }



}

?>
