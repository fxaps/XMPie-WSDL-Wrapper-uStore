<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProxyWS\UpdateProxy;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProxyWS\UpdateProxyResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProxyWS\GetProxyData;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProxyWS\GetProxyDataResponse;


class FabricateProxyWS
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
     * @return UpdateProxy
     */
    public function UpdateProxy($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateProxy = new UpdateProxy();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateProxy, $methodName)) {
                $UpdateProxy->$methodName($paramValue);
            }
        }
        return $UpdateProxy;
    }


    /**
     * @param array $paramAutoSet
     * @return UpdateProxyResponse
     */
    public function UpdateProxyResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateProxyResponse = new UpdateProxyResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateProxyResponse, $methodName)) {
                $UpdateProxyResponse->$methodName($paramValue);
            }
        }
        return $UpdateProxyResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return GetProxyData
     */
    public function GetProxyData($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProxyData = new GetProxyData();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProxyData, $methodName)) {
                $GetProxyData->$methodName($paramValue);
            }
        }
        return $GetProxyData;
    }


    /**
     * @param array $paramAutoSet
     * @return GetProxyDataResponse
     */
    public function GetProxyDataResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProxyDataResponse = new GetProxyDataResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProxyDataResponse, $methodName)) {
                $GetProxyDataResponse->$methodName($paramValue);
            }
        }
        return $GetProxyDataResponse;
    }


}

?>
