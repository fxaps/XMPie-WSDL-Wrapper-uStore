<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProxyWS;

use SoapClient;

class ProxyWS extends SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'UpdateProxy' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ProxyWS\\UpdateProxy',
        'UpdateProxyResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ProxyWS\\UpdateProxyResponse',
        'GetProxyData' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ProxyWS\\GetProxyData',
        'GetProxyDataResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ProxyWS\\GetProxyDataResponse',
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
            $wsdl = 'http://localhost/ustorewsapi/ProxyWS.asmx?wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * @param UpdateProxy $parameters
     * @return UpdateProxyResponse
     */
    public function UpdateProxy(UpdateProxy $parameters)
    {
        return $this->__soapCall('UpdateProxy', array($parameters));
    }

    /**
     * @param GetProxyData $parameters
     * @return GetProxyDataResponse
     */
    public function GetProxyData(GetProxyData $parameters)
    {
        return $this->__soapCall('GetProxyData', array($parameters));
    }

}
