<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CustomizationStepWS;

class CustomizationStepWS extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetCustomizationStepList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\CustomizationStepWS\\GetCustomizationStepList',
  'GetCustomizationStepListResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\CustomizationStepWS\\GetCustomizationStepListResponse',
  'ArrayOfCustomizationStep' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\CustomizationStepWS\\ArrayOfCustomizationStep',
  'CustomizationStep' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\CustomizationStepWS\\CustomizationStep',
  'ReturnObject' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\CustomizationStepWS\\ReturnObject',
  'GetCustomizationStep' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\CustomizationStepWS\\GetCustomizationStep',
  'GetCustomizationStepResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\CustomizationStepWS\\GetCustomizationStepResponse',
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
        $wsdl = 'http://localhost/ustorewsapi/CustomizationStepWS.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns the list of Customization steps for the given Product.
     *
     * @param GetCustomizationStepList $parameters
     * @return GetCustomizationStepListResponse
     */
    public function GetCustomizationStepList(GetCustomizationStepList $parameters)
    {
      return $this->__soapCall('GetCustomizationStepList', array($parameters));
    }

    /**
     * Returns the data of the given Customization step.
     *
     * @param GetCustomizationStep $parameters
     * @return GetCustomizationStepResponse
     */
    public function GetCustomizationStep(GetCustomizationStep $parameters)
    {
      return $this->__soapCall('GetCustomizationStep', array($parameters));
    }

}
