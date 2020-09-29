<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\XMPieInternalWS;

use SoapClient;

class XMPieInternalWS extends SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetOrderProductListByQueueJoined' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\XMPieInternalWS\\GetOrderProductListByQueueJoined',
        'GetOrderProductListByQueueJoinedResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\XMPieInternalWS\\GetOrderProductListByQueueJoinedResponse',
        'ArrayOfOrderProductJoined' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\XMPieInternalWS\\ArrayOfOrderProductJoined',
        'OrderProductJoined' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\XMPieInternalWS\\OrderProductJoined',
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
            $wsdl = 'http://localhost/ustorewsapi/XMPieInternalWS.asmx?wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * For XMPie Internal use only. Will not be supported in the future.
     *
     * @param GetOrderProductListByQueueJoined $parameters
     * @return GetOrderProductListByQueueJoinedResponse
     */
    public function GetOrderProductListByQueueJoined(GetOrderProductListByQueueJoined $parameters)
    {
        return $this->__soapCall('GetOrderProductListByQueueJoined', array($parameters));
    }

}
