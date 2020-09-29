<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\LocalizationWS\GetLocalizedString;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\LocalizationWS\GetLocalizedStringResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\LocalizationWS\GetPageResources;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\LocalizationWS\GetPageResourcesResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\LocalizationWS\ArrayOfLocalizationResource;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\LocalizationWS\LocalizationResource;


class FabricateLocalizationWS
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
     * @return GetLocalizedString
     */
    public function GetLocalizedString($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetLocalizedString = new GetLocalizedString();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetLocalizedString, $methodName)) {
                $GetLocalizedString->$methodName($paramValue);
            }
        }
        return $GetLocalizedString;
    }


    /**
     * @param array $paramAutoSet
     * @return GetLocalizedStringResponse
     */
    public function GetLocalizedStringResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetLocalizedStringResponse = new GetLocalizedStringResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetLocalizedStringResponse, $methodName)) {
                $GetLocalizedStringResponse->$methodName($paramValue);
            }
        }
        return $GetLocalizedStringResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return GetPageResources
     */
    public function GetPageResources($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPageResources = new GetPageResources();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPageResources, $methodName)) {
                $GetPageResources->$methodName($paramValue);
            }
        }
        return $GetPageResources;
    }


    /**
     * @param array $paramAutoSet
     * @return GetPageResourcesResponse
     */
    public function GetPageResourcesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPageResourcesResponse = new GetPageResourcesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPageResourcesResponse, $methodName)) {
                $GetPageResourcesResponse->$methodName($paramValue);
            }
        }
        return $GetPageResourcesResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return ArrayOfLocalizationResource
     */
    public function ArrayOfLocalizationResource($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfLocalizationResource = new ArrayOfLocalizationResource();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfLocalizationResource, $methodName)) {
                $ArrayOfLocalizationResource->$methodName($paramValue);
            }
        }
        return $ArrayOfLocalizationResource;
    }


    /**
     * @param array $paramAutoSet
     * @return LocalizationResource
     */
    public function LocalizationResource($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $LocalizationResource = new LocalizationResource();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($LocalizationResource, $methodName)) {
                $LocalizationResource->$methodName($paramValue);
            }
        }
        return $LocalizationResource;
    }


}

?>
