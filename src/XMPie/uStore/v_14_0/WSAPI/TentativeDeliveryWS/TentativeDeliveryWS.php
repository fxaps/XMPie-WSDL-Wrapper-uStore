<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS;

class TentativeDeliveryWS extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetTentativeDelivery' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\TentativeDeliveryWS\\GetTentativeDelivery',
  'GetTentativeDeliveryResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\TentativeDeliveryWS\\GetTentativeDeliveryResponse',
  'TentativeDelivery' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\TentativeDeliveryWS\\TentativeDelivery',
  'ReturnObject' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\TentativeDeliveryWS\\ReturnObject',
  'DeliveryItem' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\TentativeDeliveryWS\\DeliveryItem',
  'ArrayOfDeliveryItem' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\TentativeDeliveryWS\\ArrayOfDeliveryItem',
  'GetTentativeDeliveryList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\TentativeDeliveryWS\\GetTentativeDeliveryList',
  'GetTentativeDeliveryListResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\TentativeDeliveryWS\\GetTentativeDeliveryListResponse',
  'ArrayOfTentativeDelivery' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\TentativeDeliveryWS\\ArrayOfTentativeDelivery',
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
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'http://localhost/ustorewsapi/TentativeDeliveryWS.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns the data of the tentative delivery which its ID is given.
     *
     * @param GetTentativeDelivery $parameters
     * @return GetTentativeDeliveryResponse
     */
    public function GetTentativeDelivery(GetTentativeDelivery $parameters)
    {
      return $this->__soapCall('GetTentativeDelivery', array($parameters));
    }

    /**
     * Returns an array of the tentative deliveries of the order with the given ID.
     *
     * @param GetTentativeDeliveryList $parameters
     * @return GetTentativeDeliveryListResponse
     */
    public function GetTentativeDeliveryList(GetTentativeDeliveryList $parameters)
    {
      return $this->__soapCall('GetTentativeDeliveryList', array($parameters));
    }

}
