<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\TaxWS;

use SoapClient;

class TaxWS extends SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'CalculateTax' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_0\\WSAPI\\TaxWS\\CalculateTax',
        'CalculateTaxResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_0\\WSAPI\\TaxWS\\CalculateTaxResponse',
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
            $wsdl = 'http://localhost/ustorewsapi/TaxWS.asmx?wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * Calculates and returns the preview tax shown in store for the given product with the given prices.
     *
     * @param CalculateTax $parameters
     * @return CalculateTaxResponse
     */
    public function CalculateTax(CalculateTax $parameters)
    {
        return $this->__soapCall('CalculateTax', array($parameters));
    }

}
