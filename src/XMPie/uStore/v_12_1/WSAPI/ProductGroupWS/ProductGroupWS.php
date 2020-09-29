<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductGroupWS;

use SoapClient;

class ProductGroupWS extends SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetProductGroupList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ProductGroupWS\\GetProductGroupList',
        'GetProductGroupListResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ProductGroupWS\\GetProductGroupListResponse',
        'ArrayOfProductGroup' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ProductGroupWS\\ArrayOfProductGroup',
        'ProductGroup' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ProductGroupWS\\ProductGroup',
        'ReturnObject' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ProductGroupWS\\ReturnObject',
        'GetProductGroup' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ProductGroupWS\\GetProductGroup',
        'GetProductGroupResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ProductGroupWS\\GetProductGroupResponse',
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
            $wsdl = 'http://localhost/ustorewsapi/ProductGroupWS.asmx?wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * Returns an array containing the Product Groups of the given Store.
     *
     * @param GetProductGroupList $parameters
     * @return GetProductGroupListResponse
     */
    public function GetProductGroupList(GetProductGroupList $parameters)
    {
        return $this->__soapCall('GetProductGroupList', array($parameters));
    }

    /**
     * Returns the data of the given Product Group.
     *
     * @param GetProductGroup $parameters
     * @return GetProductGroupResponse
     */
    public function GetProductGroup(GetProductGroup $parameters)
    {
        return $this->__soapCall('GetProductGroup', array($parameters));
    }

}
