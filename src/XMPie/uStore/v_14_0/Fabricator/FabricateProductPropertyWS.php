<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\GetProductPropertyList;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\GetProductPropertyListResponse;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ArrayOfProductProperty;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductProperty;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\FieldOption;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ArrayOfFieldOption;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\GetProductProperty;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\GetProductPropertyResponse;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\GetProductPropertyValueList;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\GetProductPropertyValueListResponse;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ArrayOfProductPropertyValue;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\ProductPropertyValue;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\GetProductPropertyValue;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductPropertyWS\GetProductPropertyValueResponse;


class FabricateProductPropertyWS
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
    * @return GetProductPropertyList
    */
    public function GetProductPropertyList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductPropertyList = new GetProductPropertyList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductPropertyList, $methodName)) {
                $GetProductPropertyList->$methodName($paramValue);
            }
        }
        return $GetProductPropertyList;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductPropertyListResponse
    */
    public function GetProductPropertyListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductPropertyListResponse = new GetProductPropertyListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductPropertyListResponse, $methodName)) {
                $GetProductPropertyListResponse->$methodName($paramValue);
            }
        }
        return $GetProductPropertyListResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfProductProperty
    */
    public function ArrayOfProductProperty($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfProductProperty = new ArrayOfProductProperty();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfProductProperty, $methodName)) {
                $ArrayOfProductProperty->$methodName($paramValue);
            }
        }
        return $ArrayOfProductProperty;
    }


   /**
    * @param array $paramAutoSet
    * @return ProductProperty
    */
    public function ProductProperty($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ProductProperty = new ProductProperty();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ProductProperty, $methodName)) {
                $ProductProperty->$methodName($paramValue);
            }
        }
        return $ProductProperty;
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
    * @return GetProductProperty
    */
    public function GetProductProperty($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductProperty = new GetProductProperty();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductProperty, $methodName)) {
                $GetProductProperty->$methodName($paramValue);
            }
        }
        return $GetProductProperty;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductPropertyResponse
    */
    public function GetProductPropertyResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductPropertyResponse = new GetProductPropertyResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductPropertyResponse, $methodName)) {
                $GetProductPropertyResponse->$methodName($paramValue);
            }
        }
        return $GetProductPropertyResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductPropertyValueList
    */
    public function GetProductPropertyValueList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductPropertyValueList = new GetProductPropertyValueList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductPropertyValueList, $methodName)) {
                $GetProductPropertyValueList->$methodName($paramValue);
            }
        }
        return $GetProductPropertyValueList;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductPropertyValueListResponse
    */
    public function GetProductPropertyValueListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductPropertyValueListResponse = new GetProductPropertyValueListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductPropertyValueListResponse, $methodName)) {
                $GetProductPropertyValueListResponse->$methodName($paramValue);
            }
        }
        return $GetProductPropertyValueListResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfProductPropertyValue
    */
    public function ArrayOfProductPropertyValue($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfProductPropertyValue = new ArrayOfProductPropertyValue();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfProductPropertyValue, $methodName)) {
                $ArrayOfProductPropertyValue->$methodName($paramValue);
            }
        }
        return $ArrayOfProductPropertyValue;
    }


   /**
    * @param array $paramAutoSet
    * @return ProductPropertyValue
    */
    public function ProductPropertyValue($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ProductPropertyValue = new ProductPropertyValue();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ProductPropertyValue, $methodName)) {
                $ProductPropertyValue->$methodName($paramValue);
            }
        }
        return $ProductPropertyValue;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductPropertyValue
    */
    public function GetProductPropertyValue($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductPropertyValue = new GetProductPropertyValue();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductPropertyValue, $methodName)) {
                $GetProductPropertyValue->$methodName($paramValue);
            }
        }
        return $GetProductPropertyValue;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductPropertyValueResponse
    */
    public function GetProductPropertyValueResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductPropertyValueResponse = new GetProductPropertyValueResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductPropertyValueResponse, $methodName)) {
                $GetProductPropertyValueResponse->$methodName($paramValue);
            }
        }
        return $GetProductPropertyValueResponse;
    }



}

?>
