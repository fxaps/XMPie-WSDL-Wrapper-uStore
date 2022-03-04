<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AssetWS\GetAssetList;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AssetWS\GetAssetListResponse;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AssetWS\ArrayOfAsset;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AssetWS\Asset;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AssetWS\GetAssetListOptionalUser;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AssetWS\GetAssetListOptionalUserResponse;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AssetWS\GetAsset;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AssetWS\GetAssetResponse;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AssetWS\DownloadAsset;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AssetWS\DownloadAssetResponse;


class FabricateAssetWS
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
    * @return GetAssetList
    */
    public function GetAssetList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetList = new GetAssetList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetList, $methodName)) {
                $GetAssetList->$methodName($paramValue);
            }
        }
        return $GetAssetList;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetListResponse
    */
    public function GetAssetListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetListResponse = new GetAssetListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetListResponse, $methodName)) {
                $GetAssetListResponse->$methodName($paramValue);
            }
        }
        return $GetAssetListResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfAsset
    */
    public function ArrayOfAsset($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfAsset = new ArrayOfAsset();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfAsset, $methodName)) {
                $ArrayOfAsset->$methodName($paramValue);
            }
        }
        return $ArrayOfAsset;
    }


   /**
    * @param array $paramAutoSet
    * @return Asset
    */
    public function Asset($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Asset = new Asset();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Asset, $methodName)) {
                $Asset->$methodName($paramValue);
            }
        }
        return $Asset;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetListOptionalUser
    */
    public function GetAssetListOptionalUser($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetListOptionalUser = new GetAssetListOptionalUser();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetListOptionalUser, $methodName)) {
                $GetAssetListOptionalUser->$methodName($paramValue);
            }
        }
        return $GetAssetListOptionalUser;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetListOptionalUserResponse
    */
    public function GetAssetListOptionalUserResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetListOptionalUserResponse = new GetAssetListOptionalUserResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetListOptionalUserResponse, $methodName)) {
                $GetAssetListOptionalUserResponse->$methodName($paramValue);
            }
        }
        return $GetAssetListOptionalUserResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAsset
    */
    public function GetAsset($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAsset = new GetAsset();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAsset, $methodName)) {
                $GetAsset->$methodName($paramValue);
            }
        }
        return $GetAsset;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetResponse
    */
    public function GetAssetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetResponse = new GetAssetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetResponse, $methodName)) {
                $GetAssetResponse->$methodName($paramValue);
            }
        }
        return $GetAssetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DownloadAsset
    */
    public function DownloadAsset($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DownloadAsset = new DownloadAsset();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DownloadAsset, $methodName)) {
                $DownloadAsset->$methodName($paramValue);
            }
        }
        return $DownloadAsset;
    }


   /**
    * @param array $paramAutoSet
    * @return DownloadAssetResponse
    */
    public function DownloadAssetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DownloadAssetResponse = new DownloadAssetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DownloadAssetResponse, $methodName)) {
                $DownloadAssetResponse->$methodName($paramValue);
            }
        }
        return $DownloadAssetResponse;
    }



}

?>
