<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CircleAnalyticsWS;

use SoapClient;

class CircleAnalyticsWS extends SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetAllReportsPerCircleProject' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_0\\WSAPI\\CircleAnalyticsWS\\GetAllReportsPerCircleProject',
        'GetAllReportsPerCircleProjectResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_0\\WSAPI\\CircleAnalyticsWS\\GetAllReportsPerCircleProjectResponse',
        'ArrayOfCircleAnalyticsAPIModel' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_0\\WSAPI\\CircleAnalyticsWS\\ArrayOfCircleAnalyticsAPIModel',
        'CircleAnalyticsAPIModel' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_0\\WSAPI\\CircleAnalyticsWS\\CircleAnalyticsAPIModel',
        'RefreshAnalyticsReportsPerProject' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_0\\WSAPI\\CircleAnalyticsWS\\RefreshAnalyticsReportsPerProject',
        'RefreshAnalyticsReportsPerProjectResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_0\\WSAPI\\CircleAnalyticsWS\\RefreshAnalyticsReportsPerProjectResponse',
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
            $wsdl = 'http://localhost/ustorewsapi/CircleAnalyticsWS.asmx?wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * Returns the list of CircleAnalyticsAPIModel from cache which belong to the given circle order product.
     *
     * @param GetAllReportsPerCircleProject $parameters
     * @return GetAllReportsPerCircleProjectResponse
     */
    public function GetAllReportsPerCircleProject(GetAllReportsPerCircleProject $parameters)
    {
        return $this->__soapCall('GetAllReportsPerCircleProject', array($parameters));
    }

    /**
     * Returns the list of refreshed CircleAnalyticsAPIModel which belong to the given circle order product.
     *
     * @param RefreshAnalyticsReportsPerProject $parameters
     * @return RefreshAnalyticsReportsPerProjectResponse
     */
    public function RefreshAnalyticsReportsPerProject(RefreshAnalyticsReportsPerProject $parameters)
    {
        return $this->__soapCall('RefreshAnalyticsReportsPerProject', array($parameters));
    }

}
