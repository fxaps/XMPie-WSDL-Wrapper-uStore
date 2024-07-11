<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductGroupWS\GetProductGroupList;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductGroupWS\GetProductGroupListResponse;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductGroupWS\ArrayOfProductGroup;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductGroupWS\ProductGroup;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductGroupWS\GetProductGroup;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductGroupWS\GetProductGroupResponse;


class FabricateProductGroupWS
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
    * @return GetProductGroupList
    */
    public function GetProductGroupList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductGroupList = new GetProductGroupList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductGroupList, $methodName)) {
                $GetProductGroupList->$methodName($paramValue);
            }
        }
        return $GetProductGroupList;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductGroupListResponse
    */
    public function GetProductGroupListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductGroupListResponse = new GetProductGroupListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductGroupListResponse, $methodName)) {
                $GetProductGroupListResponse->$methodName($paramValue);
            }
        }
        return $GetProductGroupListResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfProductGroup
    */
    public function ArrayOfProductGroup($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfProductGroup = new ArrayOfProductGroup();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfProductGroup, $methodName)) {
                $ArrayOfProductGroup->$methodName($paramValue);
            }
        }
        return $ArrayOfProductGroup;
    }


   /**
    * @param array $paramAutoSet
    * @return ProductGroup
    */
    public function ProductGroup($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ProductGroup = new ProductGroup();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ProductGroup, $methodName)) {
                $ProductGroup->$methodName($paramValue);
            }
        }
        return $ProductGroup;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductGroup
    */
    public function GetProductGroup($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductGroup = new GetProductGroup();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductGroup, $methodName)) {
                $GetProductGroup->$methodName($paramValue);
            }
        }
        return $GetProductGroup;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductGroupResponse
    */
    public function GetProductGroupResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductGroupResponse = new GetProductGroupResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductGroupResponse, $methodName)) {
                $GetProductGroupResponse->$methodName($paramValue);
            }
        }
        return $GetProductGroupResponse;
    }



}

?>
