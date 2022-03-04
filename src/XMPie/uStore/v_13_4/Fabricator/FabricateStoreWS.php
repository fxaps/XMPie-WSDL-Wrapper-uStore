<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\GetStoreList;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\GetStoreListResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\ArrayOfStore;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\Store;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\GetStore;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS\GetStoreResponse;


class FabricateStoreWS
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
    * @return GetStoreList
    */
    public function GetStoreList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetStoreList = new GetStoreList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetStoreList, $methodName)) {
                $GetStoreList->$methodName($paramValue);
            }
        }
        return $GetStoreList;
    }


   /**
    * @param array $paramAutoSet
    * @return GetStoreListResponse
    */
    public function GetStoreListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetStoreListResponse = new GetStoreListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetStoreListResponse, $methodName)) {
                $GetStoreListResponse->$methodName($paramValue);
            }
        }
        return $GetStoreListResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfStore
    */
    public function ArrayOfStore($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfStore = new ArrayOfStore();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfStore, $methodName)) {
                $ArrayOfStore->$methodName($paramValue);
            }
        }
        return $ArrayOfStore;
    }


   /**
    * @param array $paramAutoSet
    * @return Store
    */
    public function Store($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Store = new Store();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Store, $methodName)) {
                $Store->$methodName($paramValue);
            }
        }
        return $Store;
    }


   /**
    * @param array $paramAutoSet
    * @return GetStore
    */
    public function GetStore($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetStore = new GetStore();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetStore, $methodName)) {
                $GetStore->$methodName($paramValue);
            }
        }
        return $GetStore;
    }


   /**
    * @param array $paramAutoSet
    * @return GetStoreResponse
    */
    public function GetStoreResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetStoreResponse = new GetStoreResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetStoreResponse, $methodName)) {
                $GetStoreResponse->$methodName($paramValue);
            }
        }
        return $GetStoreResponse;
    }



}

?>
