<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductList;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductListResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\ArrayOfProduct;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\Product;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductListByStore;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductListByStoreResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProduct;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductThumbnails;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductThumbnailsResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\ArrayOfBase64Binary;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductIDByExternalID;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductIDByExternalIDResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductIDsByExternalID;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductIDsByExternalIDResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\ArrayOfInt;


class FabricateProductWS
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
    * @return GetProductList
    */
    public function GetProductList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductList = new GetProductList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductList, $methodName)) {
                $GetProductList->$methodName($paramValue);
            }
        }
        return $GetProductList;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductListResponse
    */
    public function GetProductListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductListResponse = new GetProductListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductListResponse, $methodName)) {
                $GetProductListResponse->$methodName($paramValue);
            }
        }
        return $GetProductListResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfProduct
    */
    public function ArrayOfProduct($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfProduct = new ArrayOfProduct();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfProduct, $methodName)) {
                $ArrayOfProduct->$methodName($paramValue);
            }
        }
        return $ArrayOfProduct;
    }


   /**
    * @param array $paramAutoSet
    * @return Product
    */
    public function Product($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Product = new Product();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Product, $methodName)) {
                $Product->$methodName($paramValue);
            }
        }
        return $Product;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductListByStore
    */
    public function GetProductListByStore($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductListByStore = new GetProductListByStore();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductListByStore, $methodName)) {
                $GetProductListByStore->$methodName($paramValue);
            }
        }
        return $GetProductListByStore;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductListByStoreResponse
    */
    public function GetProductListByStoreResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductListByStoreResponse = new GetProductListByStoreResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductListByStoreResponse, $methodName)) {
                $GetProductListByStoreResponse->$methodName($paramValue);
            }
        }
        return $GetProductListByStoreResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProduct
    */
    public function GetProduct($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProduct = new GetProduct();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProduct, $methodName)) {
                $GetProduct->$methodName($paramValue);
            }
        }
        return $GetProduct;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductResponse
    */
    public function GetProductResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductResponse = new GetProductResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductResponse, $methodName)) {
                $GetProductResponse->$methodName($paramValue);
            }
        }
        return $GetProductResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductThumbnails
    */
    public function GetProductThumbnails($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductThumbnails = new GetProductThumbnails();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductThumbnails, $methodName)) {
                $GetProductThumbnails->$methodName($paramValue);
            }
        }
        return $GetProductThumbnails;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductThumbnailsResponse
    */
    public function GetProductThumbnailsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductThumbnailsResponse = new GetProductThumbnailsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductThumbnailsResponse, $methodName)) {
                $GetProductThumbnailsResponse->$methodName($paramValue);
            }
        }
        return $GetProductThumbnailsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfBase64Binary
    */
    public function ArrayOfBase64Binary($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfBase64Binary = new ArrayOfBase64Binary();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfBase64Binary, $methodName)) {
                $ArrayOfBase64Binary->$methodName($paramValue);
            }
        }
        return $ArrayOfBase64Binary;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductIDByExternalID
    */
    public function GetProductIDByExternalID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductIDByExternalID = new GetProductIDByExternalID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductIDByExternalID, $methodName)) {
                $GetProductIDByExternalID->$methodName($paramValue);
            }
        }
        return $GetProductIDByExternalID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductIDByExternalIDResponse
    */
    public function GetProductIDByExternalIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductIDByExternalIDResponse = new GetProductIDByExternalIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductIDByExternalIDResponse, $methodName)) {
                $GetProductIDByExternalIDResponse->$methodName($paramValue);
            }
        }
        return $GetProductIDByExternalIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductIDsByExternalID
    */
    public function GetProductIDsByExternalID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductIDsByExternalID = new GetProductIDsByExternalID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductIDsByExternalID, $methodName)) {
                $GetProductIDsByExternalID->$methodName($paramValue);
            }
        }
        return $GetProductIDsByExternalID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductIDsByExternalIDResponse
    */
    public function GetProductIDsByExternalIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductIDsByExternalIDResponse = new GetProductIDsByExternalIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductIDsByExternalIDResponse, $methodName)) {
                $GetProductIDsByExternalIDResponse->$methodName($paramValue);
            }
        }
        return $GetProductIDsByExternalIDResponse;
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



}

?>
