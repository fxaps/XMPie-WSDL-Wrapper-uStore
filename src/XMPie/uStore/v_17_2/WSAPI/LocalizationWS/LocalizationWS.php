<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\LocalizationWS;

class LocalizationWS extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetLocalizedString' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\LocalizationWS\\GetLocalizedString',
  'GetLocalizedStringResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\LocalizationWS\\GetLocalizedStringResponse',
  'GetPageResources' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\LocalizationWS\\GetPageResources',
  'GetPageResourcesResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\LocalizationWS\\GetPageResourcesResponse',
  'ArrayOfLocalizationResource' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\LocalizationWS\\ArrayOfLocalizationResource',
  'LocalizationResource' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\LocalizationWS\\LocalizationResource',
  'ReturnObject' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\LocalizationWS\\ReturnObject',
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
        $wsdl = 'http://localhost/ustorewsapi/LocalizationWS.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns the localized text for the given string ID in the given culture.
     *
     * @param GetLocalizedString $parameters
     * @return GetLocalizedStringResponse
     */
    public function GetLocalizedString(GetLocalizedString $parameters)
    {
      return $this->__soapCall('GetLocalizedString', array($parameters));
    }

    /**
     * Returns the localization resources for the given page
     *
     * @param GetPageResources $parameters
     * @return GetPageResourcesResponse
     */
    public function GetPageResources(GetPageResources $parameters)
    {
      return $this->__soapCall('GetPageResources', array($parameters));
    }

}
