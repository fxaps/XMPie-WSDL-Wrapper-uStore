<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\AddressWS;

use SoapClient;

class AddressWS extends SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'AddAddress' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\AddressWS\\AddAddress',
        'Address' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\AddressWS\\Address',
        'ReturnObject' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\AddressWS\\ReturnObject',
        'AddAddressResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\AddressWS\\AddAddressResponse',
        'UpdateAddress' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\AddressWS\\UpdateAddress',
        'UpdateAddressResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\AddressWS\\UpdateAddressResponse',
        'GetAddress' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\AddressWS\\GetAddress',
        'GetAddressResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\AddressWS\\GetAddressResponse',
        'GetAddressListByCustomer' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\AddressWS\\GetAddressListByCustomer',
        'GetAddressListByCustomerResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\AddressWS\\GetAddressListByCustomerResponse',
        'ArrayOfAddress' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\AddressWS\\ArrayOfAddress',
        'GetAddressListByUser' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\AddressWS\\GetAddressListByUser',
        'GetAddressListByUserResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\AddressWS\\GetAddressListByUserResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @throws SoapFault
     */
    public function __construct(array $options = array(), $wsdl = null)
    {

        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge(array(
            'features' => 1,
        ), $options);
        if (!$wsdl) {
            $wsdl = 'http://localhost/ustorewsapi/AddressWS.asmx?wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * Adds the given address to the system
     *
     * @param AddAddress $parameters
     * @return AddAddressResponse
     */
    public function AddAddress(AddAddress $parameters)
    {
        return $this->__soapCall('AddAddress', array($parameters));
    }

    /**
     * Updates the given address.
     *
     * @param UpdateAddress $parameters
     * @return UpdateAddressResponse
     */
    public function UpdateAddress(UpdateAddress $parameters)
    {
        return $this->__soapCall('UpdateAddress', array($parameters));
    }

    /**
     * Returns the address with the given ID.
     *
     * @param GetAddress $parameters
     * @return GetAddressResponse
     */
    public function GetAddress(GetAddress $parameters)
    {
        return $this->__soapCall('GetAddress', array($parameters));
    }

    /**
     * Returns the list of address of the given customer.
     *
     * @param GetAddressListByCustomer $parameters
     * @return GetAddressListByCustomerResponse
     */
    public function GetAddressListByCustomer(GetAddressListByCustomer $parameters)
    {
        return $this->__soapCall('GetAddressListByCustomer', array($parameters));
    }

    /**
     * Returns the list of address of the given user.
     *
     * @param GetAddressListByUser $parameters
     * @return GetAddressListByUserResponse
     */
    public function GetAddressListByUser(GetAddressListByUser $parameters)
    {
        return $this->__soapCall('GetAddressListByUser', array($parameters));
    }

}
