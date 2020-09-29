<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductPropertyWS;

use SoapClient;

class ProductPropertyWS extends SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetProductPropertyList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_0\\WSAPI\\ProductPropertyWS\\GetProductPropertyList',
        'GetProductPropertyListResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_0\\WSAPI\\ProductPropertyWS\\GetProductPropertyListResponse',
        'ArrayOfProductProperty' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_0\\WSAPI\\ProductPropertyWS\\ArrayOfProductProperty',
        'ProductProperty' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_0\\WSAPI\\ProductPropertyWS\\ProductProperty',
        'ReturnObject' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_0\\WSAPI\\ProductPropertyWS\\ReturnObject',
        'FieldOption' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_0\\WSAPI\\ProductPropertyWS\\FieldOption',
        'ArrayOfFieldOption' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_0\\WSAPI\\ProductPropertyWS\\ArrayOfFieldOption',
        'GetProductProperty' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_0\\WSAPI\\ProductPropertyWS\\GetProductProperty',
        'GetProductPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_0\\WSAPI\\ProductPropertyWS\\GetProductPropertyResponse',
        'GetProductPropertyValueList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_0\\WSAPI\\ProductPropertyWS\\GetProductPropertyValueList',
        'GetProductPropertyValueListResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_0\\WSAPI\\ProductPropertyWS\\GetProductPropertyValueListResponse',
        'ArrayOfProductPropertyValue' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_0\\WSAPI\\ProductPropertyWS\\ArrayOfProductPropertyValue',
        'ProductPropertyValue' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_0\\WSAPI\\ProductPropertyWS\\ProductPropertyValue',
        'GetProductPropertyValue' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_0\\WSAPI\\ProductPropertyWS\\GetProductPropertyValue',
        'GetProductPropertyValueResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_0\\WSAPI\\ProductPropertyWS\\GetProductPropertyValueResponse',
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
            $wsdl = 'http://localhost/ustorewsapi/ProductPropertyWS.asmx?wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * Returns the list of properties of the given Product.
     *
     * @param GetProductPropertyList $parameters
     * @return GetProductPropertyListResponse
     */
    public function GetProductPropertyList(GetProductPropertyList $parameters)
    {
        return $this->__soapCall('GetProductPropertyList', array($parameters));
    }

    /**
     * Returns the data of the given property.
     *
     * @param GetProductProperty $parameters
     * @return GetProductPropertyResponse
     */
    public function GetProductProperty(GetProductProperty $parameters)
    {
        return $this->__soapCall('GetProductProperty', array($parameters));
    }

    /**
     * Returns an array of all the Product property values for the given Order Product.
     *
     * @param GetProductPropertyValueList $parameters
     * @return GetProductPropertyValueListResponse
     */
    public function GetProductPropertyValueList(GetProductPropertyValueList $parameters)
    {
        return $this->__soapCall('GetProductPropertyValueList', array($parameters));
    }

    /**
     * Returns the value assigned to the given property during the order of the given Order Product.
     *
     * @param GetProductPropertyValue $parameters
     * @return GetProductPropertyValueResponse
     */
    public function GetProductPropertyValue(GetProductPropertyValue $parameters)
    {
        return $this->__soapCall('GetProductPropertyValue', array($parameters));
    }

}
