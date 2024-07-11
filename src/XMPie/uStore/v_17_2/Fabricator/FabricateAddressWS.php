<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AddressWS\AddAddress;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AddressWS\Address;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AddressWS\AddAddressResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AddressWS\UpdateAddress;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AddressWS\UpdateAddressResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AddressWS\GetAddress;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AddressWS\GetAddressResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AddressWS\GetAddressListByCustomer;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AddressWS\GetAddressListByCustomerResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AddressWS\ArrayOfAddress;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AddressWS\GetAddressListByUser;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AddressWS\GetAddressListByUserResponse;


class FabricateAddressWS
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
    * @return AddAddress
    */
    public function AddAddress($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddAddress = new AddAddress();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddAddress, $methodName)) {
                $AddAddress->$methodName($paramValue);
            }
        }
        return $AddAddress;
    }


   /**
    * @param array $paramAutoSet
    * @return Address
    */
    public function Address($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Address = new Address();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Address, $methodName)) {
                $Address->$methodName($paramValue);
            }
        }
        return $Address;
    }


   /**
    * @param array $paramAutoSet
    * @return AddAddressResponse
    */
    public function AddAddressResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddAddressResponse = new AddAddressResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddAddressResponse, $methodName)) {
                $AddAddressResponse->$methodName($paramValue);
            }
        }
        return $AddAddressResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return UpdateAddress
    */
    public function UpdateAddress($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateAddress = new UpdateAddress();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateAddress, $methodName)) {
                $UpdateAddress->$methodName($paramValue);
            }
        }
        return $UpdateAddress;
    }


   /**
    * @param array $paramAutoSet
    * @return UpdateAddressResponse
    */
    public function UpdateAddressResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateAddressResponse = new UpdateAddressResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateAddressResponse, $methodName)) {
                $UpdateAddressResponse->$methodName($paramValue);
            }
        }
        return $UpdateAddressResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAddress
    */
    public function GetAddress($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAddress = new GetAddress();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAddress, $methodName)) {
                $GetAddress->$methodName($paramValue);
            }
        }
        return $GetAddress;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAddressResponse
    */
    public function GetAddressResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAddressResponse = new GetAddressResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAddressResponse, $methodName)) {
                $GetAddressResponse->$methodName($paramValue);
            }
        }
        return $GetAddressResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAddressListByCustomer
    */
    public function GetAddressListByCustomer($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAddressListByCustomer = new GetAddressListByCustomer();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAddressListByCustomer, $methodName)) {
                $GetAddressListByCustomer->$methodName($paramValue);
            }
        }
        return $GetAddressListByCustomer;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAddressListByCustomerResponse
    */
    public function GetAddressListByCustomerResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAddressListByCustomerResponse = new GetAddressListByCustomerResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAddressListByCustomerResponse, $methodName)) {
                $GetAddressListByCustomerResponse->$methodName($paramValue);
            }
        }
        return $GetAddressListByCustomerResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfAddress
    */
    public function ArrayOfAddress($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfAddress = new ArrayOfAddress();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfAddress, $methodName)) {
                $ArrayOfAddress->$methodName($paramValue);
            }
        }
        return $ArrayOfAddress;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAddressListByUser
    */
    public function GetAddressListByUser($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAddressListByUser = new GetAddressListByUser();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAddressListByUser, $methodName)) {
                $GetAddressListByUser->$methodName($paramValue);
            }
        }
        return $GetAddressListByUser;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAddressListByUserResponse
    */
    public function GetAddressListByUserResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAddressListByUserResponse = new GetAddressListByUserResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAddressListByUserResponse, $methodName)) {
                $GetAddressListByUserResponse->$methodName($paramValue);
            }
        }
        return $GetAddressListByUserResponse;
    }



}

?>
