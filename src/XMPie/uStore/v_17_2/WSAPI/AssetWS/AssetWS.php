<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AssetWS;

class AssetWS extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetAssetList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\AssetWS\\GetAssetList',
  'GetAssetListResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\AssetWS\\GetAssetListResponse',
  'ArrayOfAsset' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\AssetWS\\ArrayOfAsset',
  'Asset' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\AssetWS\\Asset',
  'ReturnObject' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\AssetWS\\ReturnObject',
  'GetAssetListOptionalUser' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\AssetWS\\GetAssetListOptionalUser',
  'GetAssetListOptionalUserResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\AssetWS\\GetAssetListOptionalUserResponse',
  'GetAsset' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\AssetWS\\GetAsset',
  'GetAssetResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\AssetWS\\GetAssetResponse',
  'DownloadAsset' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\AssetWS\\DownloadAsset',
  'DownloadAssetResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\AssetWS\\DownloadAssetResponse',
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
        $wsdl = 'http://localhost/ustorewsapi/AssetWS.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns the list of Assets which belong to the given Asset Source.
     *
     * @param GetAssetList $parameters
     * @return GetAssetListResponse
     */
    public function GetAssetList(GetAssetList $parameters)
    {
      return $this->__soapCall('GetAssetList', array($parameters));
    }

    /**
     * Returns the list of Assets which belong to the given Asset Source.
     *
     * @param GetAssetListOptionalUser $parameters
     * @return GetAssetListOptionalUserResponse
     */
    public function GetAssetListOptionalUser(GetAssetListOptionalUser $parameters)
    {
      return $this->__soapCall('GetAssetListOptionalUser', array($parameters));
    }

    /**
     * Returns the data of the given Asset.
     *
     * @param GetAsset $parameters
     * @return GetAssetResponse
     */
    public function GetAsset(GetAsset $parameters)
    {
      return $this->__soapCall('GetAsset', array($parameters));
    }

    /**
     * Returns the Asset image file.
     *
     * @param DownloadAsset $parameters
     * @return DownloadAssetResponse
     */
    public function DownloadAsset(DownloadAsset $parameters)
    {
      return $this->__soapCall('DownloadAsset', array($parameters));
    }

}
