<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CultureWS;

use SoapClient;

class CultureWS extends SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetCulture' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\CultureWS\\GetCulture',
        'GetCultureResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\CultureWS\\GetCultureResponse',
        'Culture' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\CultureWS\\Culture',
        'ReturnObject' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\CultureWS\\ReturnObject',
        'GetCultureByStore' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\CultureWS\\GetCultureByStore',
        'GetCultureByStoreResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\CultureWS\\GetCultureByStoreResponse',
        'ArrayOfCulture' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\CultureWS\\ArrayOfCulture',
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
            $wsdl = 'http://localhost/ustorewsapi/CultureWS.asmx?wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * Returns the data of the requested culture.
     *
     * @param GetCulture $parameters
     * @return GetCultureResponse
     */
    public function GetCulture(GetCulture $parameters)
    {
        return $this->__soapCall('GetCulture', array($parameters));
    }

    /**
     * Returns a list of the cultures that are used in the given Store.
     *
     * @param GetCultureByStore $parameters
     * @return GetCultureByStoreResponse
     */
    public function GetCultureByStore(GetCultureByStore $parameters)
    {
        return $this->__soapCall('GetCultureByStore', array($parameters));
    }

}
