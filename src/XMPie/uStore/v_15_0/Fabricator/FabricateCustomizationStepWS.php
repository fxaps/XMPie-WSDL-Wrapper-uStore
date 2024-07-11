<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CustomizationStepWS\GetCustomizationStepList;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CustomizationStepWS\GetCustomizationStepListResponse;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CustomizationStepWS\ArrayOfCustomizationStep;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CustomizationStepWS\CustomizationStep;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CustomizationStepWS\GetCustomizationStep;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CustomizationStepWS\GetCustomizationStepResponse;


class FabricateCustomizationStepWS
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
    * @return GetCustomizationStepList
    */
    public function GetCustomizationStepList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomizationStepList = new GetCustomizationStepList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomizationStepList, $methodName)) {
                $GetCustomizationStepList->$methodName($paramValue);
            }
        }
        return $GetCustomizationStepList;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCustomizationStepListResponse
    */
    public function GetCustomizationStepListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomizationStepListResponse = new GetCustomizationStepListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomizationStepListResponse, $methodName)) {
                $GetCustomizationStepListResponse->$methodName($paramValue);
            }
        }
        return $GetCustomizationStepListResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfCustomizationStep
    */
    public function ArrayOfCustomizationStep($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfCustomizationStep = new ArrayOfCustomizationStep();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfCustomizationStep, $methodName)) {
                $ArrayOfCustomizationStep->$methodName($paramValue);
            }
        }
        return $ArrayOfCustomizationStep;
    }


   /**
    * @param array $paramAutoSet
    * @return CustomizationStep
    */
    public function CustomizationStep($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CustomizationStep = new CustomizationStep();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CustomizationStep, $methodName)) {
                $CustomizationStep->$methodName($paramValue);
            }
        }
        return $CustomizationStep;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCustomizationStep
    */
    public function GetCustomizationStep($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomizationStep = new GetCustomizationStep();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomizationStep, $methodName)) {
                $GetCustomizationStep->$methodName($paramValue);
            }
        }
        return $GetCustomizationStep;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCustomizationStepResponse
    */
    public function GetCustomizationStepResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomizationStepResponse = new GetCustomizationStepResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomizationStepResponse, $methodName)) {
                $GetCustomizationStepResponse->$methodName($paramValue);
            }
        }
        return $GetCustomizationStepResponse;
    }



}

?>
