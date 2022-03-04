<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS;

class CustomizationDialWS extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetCustomizationDialList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\CustomizationDialWS\\GetCustomizationDialList',
  'GetCustomizationDialListResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\CustomizationDialWS\\GetCustomizationDialListResponse',
  'ArrayOfCustomizationDial' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\CustomizationDialWS\\ArrayOfCustomizationDial',
  'CustomizationDial' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\CustomizationDialWS\\CustomizationDial',
  'ReturnObject' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\CustomizationDialWS\\ReturnObject',
  'FieldOption' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\CustomizationDialWS\\FieldOption',
  'ArrayOfFieldOption' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\CustomizationDialWS\\ArrayOfFieldOption',
  'GetCustomizationDial' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\CustomizationDialWS\\GetCustomizationDial',
  'GetCustomizationDialResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\CustomizationDialWS\\GetCustomizationDialResponse',
  'GetCustomizationDialValueList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\CustomizationDialWS\\GetCustomizationDialValueList',
  'GetCustomizationDialValueListResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\CustomizationDialWS\\GetCustomizationDialValueListResponse',
  'ArrayOfCustomizationDialValue' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\CustomizationDialWS\\ArrayOfCustomizationDialValue',
  'CustomizationDialValue' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\CustomizationDialWS\\CustomizationDialValue',
  'GetCustomizationDialValue' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\CustomizationDialWS\\GetCustomizationDialValue',
  'GetCustomizationDialValueResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\CustomizationDialWS\\GetCustomizationDialValueResponse',
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
        $wsdl = 'http://localhost/ustorewsapi/CustomizationDialWS.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns the list of Dials that belong to the given Customization step.
     *
     * @param GetCustomizationDialList $parameters
     * @return GetCustomizationDialListResponse
     */
    public function GetCustomizationDialList(GetCustomizationDialList $parameters)
    {
      return $this->__soapCall('GetCustomizationDialList', array($parameters));
    }

    /**
     * Returns the data of the given Dial.
     *
     * @param GetCustomizationDial $parameters
     * @return GetCustomizationDialResponse
     */
    public function GetCustomizationDial(GetCustomizationDial $parameters)
    {
      return $this->__soapCall('GetCustomizationDial', array($parameters));
    }

    /**
     * Returns an array of all the Customization Dial values for the given Order Product.
     *
     * @param GetCustomizationDialValueList $parameters
     * @return GetCustomizationDialValueListResponse
     */
    public function GetCustomizationDialValueList(GetCustomizationDialValueList $parameters)
    {
      return $this->__soapCall('GetCustomizationDialValueList', array($parameters));
    }

    /**
     * Returns the value of the given Dial in the given Order Product (Order Item).
     *
     * @param GetCustomizationDialValue $parameters
     * @return GetCustomizationDialValueResponse
     */
    public function GetCustomizationDialValue(GetCustomizationDialValue $parameters)
    {
      return $this->__soapCall('GetCustomizationDialValue', array($parameters));
    }

}
