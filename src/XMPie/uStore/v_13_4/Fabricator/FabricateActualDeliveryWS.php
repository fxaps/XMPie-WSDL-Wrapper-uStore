<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\GetActualDelivery;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\GetActualDeliveryResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\ActualDelivery;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\CreateDelivery;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\ArrayOfInt;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\CreateDeliveryResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\CreateDeliveryWithDetails;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\CreateDeliveryWithDetailsResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\CreateDeliveryByOrderProducts;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\CreateDeliveryByOrderProductsResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\CreateDeliveryWithDetailsByOrderProducts;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\CreateDeliveryWithDetailsByOrderProductsResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\ManualDeliveryArrived;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\ManualDeliveryArrivedResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\StringArray;


class FabricateActualDeliveryWS
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
    * @return GetActualDelivery
    */
    public function GetActualDelivery($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetActualDelivery = new GetActualDelivery();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetActualDelivery, $methodName)) {
                $GetActualDelivery->$methodName($paramValue);
            }
        }
        return $GetActualDelivery;
    }


   /**
    * @param array $paramAutoSet
    * @return GetActualDeliveryResponse
    */
    public function GetActualDeliveryResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetActualDeliveryResponse = new GetActualDeliveryResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetActualDeliveryResponse, $methodName)) {
                $GetActualDeliveryResponse->$methodName($paramValue);
            }
        }
        return $GetActualDeliveryResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ActualDelivery
    */
    public function ActualDelivery($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ActualDelivery = new ActualDelivery();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ActualDelivery, $methodName)) {
                $ActualDelivery->$methodName($paramValue);
            }
        }
        return $ActualDelivery;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateDelivery
    */
    public function CreateDelivery($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateDelivery = new CreateDelivery();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateDelivery, $methodName)) {
                $CreateDelivery->$methodName($paramValue);
            }
        }
        return $CreateDelivery;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfInt
    */
    public function ArrayOfInt($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfInt = new ArrayOfInt();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfInt, $methodName)) {
                $ArrayOfInt->$methodName($paramValue);
            }
        }
        return $ArrayOfInt;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateDeliveryResponse
    */
    public function CreateDeliveryResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateDeliveryResponse = new CreateDeliveryResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateDeliveryResponse, $methodName)) {
                $CreateDeliveryResponse->$methodName($paramValue);
            }
        }
        return $CreateDeliveryResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateDeliveryWithDetails
    */
    public function CreateDeliveryWithDetails($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateDeliveryWithDetails = new CreateDeliveryWithDetails();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateDeliveryWithDetails, $methodName)) {
                $CreateDeliveryWithDetails->$methodName($paramValue);
            }
        }
        return $CreateDeliveryWithDetails;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateDeliveryWithDetailsResponse
    */
    public function CreateDeliveryWithDetailsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateDeliveryWithDetailsResponse = new CreateDeliveryWithDetailsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateDeliveryWithDetailsResponse, $methodName)) {
                $CreateDeliveryWithDetailsResponse->$methodName($paramValue);
            }
        }
        return $CreateDeliveryWithDetailsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateDeliveryByOrderProducts
    */
    public function CreateDeliveryByOrderProducts($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateDeliveryByOrderProducts = new CreateDeliveryByOrderProducts();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateDeliveryByOrderProducts, $methodName)) {
                $CreateDeliveryByOrderProducts->$methodName($paramValue);
            }
        }
        return $CreateDeliveryByOrderProducts;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateDeliveryByOrderProductsResponse
    */
    public function CreateDeliveryByOrderProductsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateDeliveryByOrderProductsResponse = new CreateDeliveryByOrderProductsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateDeliveryByOrderProductsResponse, $methodName)) {
                $CreateDeliveryByOrderProductsResponse->$methodName($paramValue);
            }
        }
        return $CreateDeliveryByOrderProductsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateDeliveryWithDetailsByOrderProducts
    */
    public function CreateDeliveryWithDetailsByOrderProducts($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateDeliveryWithDetailsByOrderProducts = new CreateDeliveryWithDetailsByOrderProducts();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateDeliveryWithDetailsByOrderProducts, $methodName)) {
                $CreateDeliveryWithDetailsByOrderProducts->$methodName($paramValue);
            }
        }
        return $CreateDeliveryWithDetailsByOrderProducts;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateDeliveryWithDetailsByOrderProductsResponse
    */
    public function CreateDeliveryWithDetailsByOrderProductsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateDeliveryWithDetailsByOrderProductsResponse = new CreateDeliveryWithDetailsByOrderProductsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateDeliveryWithDetailsByOrderProductsResponse, $methodName)) {
                $CreateDeliveryWithDetailsByOrderProductsResponse->$methodName($paramValue);
            }
        }
        return $CreateDeliveryWithDetailsByOrderProductsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ManualDeliveryArrived
    */
    public function ManualDeliveryArrived($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ManualDeliveryArrived = new ManualDeliveryArrived();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ManualDeliveryArrived, $methodName)) {
                $ManualDeliveryArrived->$methodName($paramValue);
            }
        }
        return $ManualDeliveryArrived;
    }


   /**
    * @param array $paramAutoSet
    * @return ManualDeliveryArrivedResponse
    */
    public function ManualDeliveryArrivedResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ManualDeliveryArrivedResponse = new ManualDeliveryArrivedResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ManualDeliveryArrivedResponse, $methodName)) {
                $ManualDeliveryArrivedResponse->$methodName($paramValue);
            }
        }
        return $ManualDeliveryArrivedResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return StringArray
    */
    public function StringArray($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $StringArray = new StringArray();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($StringArray, $methodName)) {
                $StringArray->$methodName($paramValue);
            }
        }
        return $StringArray;
    }



}

?>
