<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CustomizationDialWS\GetCustomizationDialList;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CustomizationDialWS\GetCustomizationDialListResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CustomizationDialWS\ArrayOfCustomizationDial;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CustomizationDialWS\CustomizationDial;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CustomizationDialWS\FieldOption;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CustomizationDialWS\ArrayOfFieldOption;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CustomizationDialWS\GetCustomizationDial;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CustomizationDialWS\GetCustomizationDialResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CustomizationDialWS\GetCustomizationDialValueList;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CustomizationDialWS\GetCustomizationDialValueListResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CustomizationDialWS\ArrayOfCustomizationDialValue;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CustomizationDialWS\CustomizationDialValue;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CustomizationDialWS\GetCustomizationDialValue;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CustomizationDialWS\GetCustomizationDialValueResponse;


class FabricateCustomizationDialWS
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
    * @return GetCustomizationDialList
    */
    public function GetCustomizationDialList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomizationDialList = new GetCustomizationDialList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomizationDialList, $methodName)) {
                $GetCustomizationDialList->$methodName($paramValue);
            }
        }
        return $GetCustomizationDialList;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCustomizationDialListResponse
    */
    public function GetCustomizationDialListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomizationDialListResponse = new GetCustomizationDialListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomizationDialListResponse, $methodName)) {
                $GetCustomizationDialListResponse->$methodName($paramValue);
            }
        }
        return $GetCustomizationDialListResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfCustomizationDial
    */
    public function ArrayOfCustomizationDial($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfCustomizationDial = new ArrayOfCustomizationDial();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfCustomizationDial, $methodName)) {
                $ArrayOfCustomizationDial->$methodName($paramValue);
            }
        }
        return $ArrayOfCustomizationDial;
    }


   /**
    * @param array $paramAutoSet
    * @return CustomizationDial
    */
    public function CustomizationDial($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CustomizationDial = new CustomizationDial();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CustomizationDial, $methodName)) {
                $CustomizationDial->$methodName($paramValue);
            }
        }
        return $CustomizationDial;
    }


   /**
    * @param array $paramAutoSet
    * @return FieldOption
    */
    public function FieldOption($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $FieldOption = new FieldOption();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($FieldOption, $methodName)) {
                $FieldOption->$methodName($paramValue);
            }
        }
        return $FieldOption;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfFieldOption
    */
    public function ArrayOfFieldOption($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfFieldOption = new ArrayOfFieldOption();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfFieldOption, $methodName)) {
                $ArrayOfFieldOption->$methodName($paramValue);
            }
        }
        return $ArrayOfFieldOption;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCustomizationDial
    */
    public function GetCustomizationDial($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomizationDial = new GetCustomizationDial();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomizationDial, $methodName)) {
                $GetCustomizationDial->$methodName($paramValue);
            }
        }
        return $GetCustomizationDial;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCustomizationDialResponse
    */
    public function GetCustomizationDialResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomizationDialResponse = new GetCustomizationDialResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomizationDialResponse, $methodName)) {
                $GetCustomizationDialResponse->$methodName($paramValue);
            }
        }
        return $GetCustomizationDialResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCustomizationDialValueList
    */
    public function GetCustomizationDialValueList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomizationDialValueList = new GetCustomizationDialValueList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomizationDialValueList, $methodName)) {
                $GetCustomizationDialValueList->$methodName($paramValue);
            }
        }
        return $GetCustomizationDialValueList;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCustomizationDialValueListResponse
    */
    public function GetCustomizationDialValueListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomizationDialValueListResponse = new GetCustomizationDialValueListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomizationDialValueListResponse, $methodName)) {
                $GetCustomizationDialValueListResponse->$methodName($paramValue);
            }
        }
        return $GetCustomizationDialValueListResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfCustomizationDialValue
    */
    public function ArrayOfCustomizationDialValue($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfCustomizationDialValue = new ArrayOfCustomizationDialValue();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfCustomizationDialValue, $methodName)) {
                $ArrayOfCustomizationDialValue->$methodName($paramValue);
            }
        }
        return $ArrayOfCustomizationDialValue;
    }


   /**
    * @param array $paramAutoSet
    * @return CustomizationDialValue
    */
    public function CustomizationDialValue($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CustomizationDialValue = new CustomizationDialValue();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CustomizationDialValue, $methodName)) {
                $CustomizationDialValue->$methodName($paramValue);
            }
        }
        return $CustomizationDialValue;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCustomizationDialValue
    */
    public function GetCustomizationDialValue($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomizationDialValue = new GetCustomizationDialValue();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomizationDialValue, $methodName)) {
                $GetCustomizationDialValue->$methodName($paramValue);
            }
        }
        return $GetCustomizationDialValue;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCustomizationDialValueResponse
    */
    public function GetCustomizationDialValueResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomizationDialValueResponse = new GetCustomizationDialValueResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomizationDialValueResponse, $methodName)) {
                $GetCustomizationDialValueResponse->$methodName($paramValue);
            }
        }
        return $GetCustomizationDialValueResponse;
    }



}

?>
