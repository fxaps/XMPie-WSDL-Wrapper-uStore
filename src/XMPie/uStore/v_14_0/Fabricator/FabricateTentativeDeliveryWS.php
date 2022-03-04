<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\GetTentativeDelivery;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\GetTentativeDeliveryResponse;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\TentativeDelivery;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\DeliveryItem;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\ArrayOfDeliveryItem;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\GetTentativeDeliveryList;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\GetTentativeDeliveryListResponse;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\ArrayOfTentativeDelivery;


class FabricateTentativeDeliveryWS
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
    * @return GetTentativeDelivery
    */
    public function GetTentativeDelivery($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTentativeDelivery = new GetTentativeDelivery();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTentativeDelivery, $methodName)) {
                $GetTentativeDelivery->$methodName($paramValue);
            }
        }
        return $GetTentativeDelivery;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTentativeDeliveryResponse
    */
    public function GetTentativeDeliveryResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTentativeDeliveryResponse = new GetTentativeDeliveryResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTentativeDeliveryResponse, $methodName)) {
                $GetTentativeDeliveryResponse->$methodName($paramValue);
            }
        }
        return $GetTentativeDeliveryResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return TentativeDelivery
    */
    public function TentativeDelivery($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $TentativeDelivery = new TentativeDelivery();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($TentativeDelivery, $methodName)) {
                $TentativeDelivery->$methodName($paramValue);
            }
        }
        return $TentativeDelivery;
    }


   /**
    * @param array $paramAutoSet
    * @return DeliveryItem
    */
    public function DeliveryItem($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeliveryItem = new DeliveryItem();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeliveryItem, $methodName)) {
                $DeliveryItem->$methodName($paramValue);
            }
        }
        return $DeliveryItem;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfDeliveryItem
    */
    public function ArrayOfDeliveryItem($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfDeliveryItem = new ArrayOfDeliveryItem();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfDeliveryItem, $methodName)) {
                $ArrayOfDeliveryItem->$methodName($paramValue);
            }
        }
        return $ArrayOfDeliveryItem;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTentativeDeliveryList
    */
    public function GetTentativeDeliveryList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTentativeDeliveryList = new GetTentativeDeliveryList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTentativeDeliveryList, $methodName)) {
                $GetTentativeDeliveryList->$methodName($paramValue);
            }
        }
        return $GetTentativeDeliveryList;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTentativeDeliveryListResponse
    */
    public function GetTentativeDeliveryListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTentativeDeliveryListResponse = new GetTentativeDeliveryListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTentativeDeliveryListResponse, $methodName)) {
                $GetTentativeDeliveryListResponse->$methodName($paramValue);
            }
        }
        return $GetTentativeDeliveryListResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfTentativeDelivery
    */
    public function ArrayOfTentativeDelivery($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfTentativeDelivery = new ArrayOfTentativeDelivery();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfTentativeDelivery, $methodName)) {
                $ArrayOfTentativeDelivery->$methodName($paramValue);
            }
        }
        return $ArrayOfTentativeDelivery;
    }



}

?>
