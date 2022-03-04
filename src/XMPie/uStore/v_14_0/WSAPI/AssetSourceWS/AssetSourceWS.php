<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AssetSourceWS;

class AssetSourceWS extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetAssetSource' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\AssetSourceWS\\GetAssetSource',
  'GetAssetSourceResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\AssetSourceWS\\GetAssetSourceResponse',
  'AssetSource' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\AssetSourceWS\\AssetSource',
  'ReturnObject' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\AssetSourceWS\\ReturnObject',
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
        $wsdl = 'http://localhost/ustorewsapi/AssetSourceWS.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns the data of the requested Asset Source.
     *
     * @param GetAssetSource $parameters
     * @return GetAssetSourceResponse
     */
    public function GetAssetSource(GetAssetSource $parameters)
    {
      return $this->__soapCall('GetAssetSource', array($parameters));
    }

}
