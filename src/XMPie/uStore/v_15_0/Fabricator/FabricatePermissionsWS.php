<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\PermissionsWS\IsAllowed;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\PermissionsWS\IsAllowedResponse;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\PermissionsWS\AddPermission;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\PermissionsWS\AddPermissionResponse;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\PermissionsWS\IsStoreFrontAccessAllowed;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\PermissionsWS\IsStoreFrontAccessAllowedResponse;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\PermissionsWS\IsAccessAllowed;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\PermissionsWS\IsAccessAllowedResponse;


class FabricatePermissionsWS
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
    * @return IsAllowed
    */
    public function IsAllowed($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsAllowed = new IsAllowed();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsAllowed, $methodName)) {
                $IsAllowed->$methodName($paramValue);
            }
        }
        return $IsAllowed;
    }


   /**
    * @param array $paramAutoSet
    * @return IsAllowedResponse
    */
    public function IsAllowedResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsAllowedResponse = new IsAllowedResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsAllowedResponse, $methodName)) {
                $IsAllowedResponse->$methodName($paramValue);
            }
        }
        return $IsAllowedResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return AddPermission
    */
    public function AddPermission($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddPermission = new AddPermission();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddPermission, $methodName)) {
                $AddPermission->$methodName($paramValue);
            }
        }
        return $AddPermission;
    }


   /**
    * @param array $paramAutoSet
    * @return AddPermissionResponse
    */
    public function AddPermissionResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddPermissionResponse = new AddPermissionResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddPermissionResponse, $methodName)) {
                $AddPermissionResponse->$methodName($paramValue);
            }
        }
        return $AddPermissionResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsStoreFrontAccessAllowed
    */
    public function IsStoreFrontAccessAllowed($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsStoreFrontAccessAllowed = new IsStoreFrontAccessAllowed();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsStoreFrontAccessAllowed, $methodName)) {
                $IsStoreFrontAccessAllowed->$methodName($paramValue);
            }
        }
        return $IsStoreFrontAccessAllowed;
    }


   /**
    * @param array $paramAutoSet
    * @return IsStoreFrontAccessAllowedResponse
    */
    public function IsStoreFrontAccessAllowedResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsStoreFrontAccessAllowedResponse = new IsStoreFrontAccessAllowedResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsStoreFrontAccessAllowedResponse, $methodName)) {
                $IsStoreFrontAccessAllowedResponse->$methodName($paramValue);
            }
        }
        return $IsStoreFrontAccessAllowedResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsAccessAllowed
    */
    public function IsAccessAllowed($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsAccessAllowed = new IsAccessAllowed();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsAccessAllowed, $methodName)) {
                $IsAccessAllowed->$methodName($paramValue);
            }
        }
        return $IsAccessAllowed;
    }


   /**
    * @param array $paramAutoSet
    * @return IsAccessAllowedResponse
    */
    public function IsAccessAllowedResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsAccessAllowedResponse = new IsAccessAllowedResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsAccessAllowedResponse, $methodName)) {
                $IsAccessAllowedResponse->$methodName($paramValue);
            }
        }
        return $IsAccessAllowedResponse;
    }



}

?>
