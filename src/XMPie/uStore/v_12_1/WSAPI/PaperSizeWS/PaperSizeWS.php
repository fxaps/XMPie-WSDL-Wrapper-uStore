<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\PaperSizeWS;

use SoapClient;

class PaperSizeWS extends SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetPaperSize' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\PaperSizeWS\\GetPaperSize',
        'GetPaperSizeResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\PaperSizeWS\\GetPaperSizeResponse',
        'PaperSize' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\PaperSizeWS\\PaperSize',
        'ReturnObject' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\PaperSizeWS\\ReturnObject',
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
            $wsdl = 'http://localhost/ustorewsapi/PaperSizeWS.asmx?wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * Returns the data of the requested paper size.
     *
     * @param GetPaperSize $parameters
     * @return GetPaperSizeResponse
     */
    public function GetPaperSize(GetPaperSize $parameters)
    {
        return $this->__soapCall('GetPaperSize', array($parameters));
    }

}
