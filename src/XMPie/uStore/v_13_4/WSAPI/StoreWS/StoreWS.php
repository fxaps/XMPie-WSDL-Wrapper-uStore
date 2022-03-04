<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\StoreWS;

class StoreWS extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetStoreList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\StoreWS\\GetStoreList',
  'GetStoreListResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\StoreWS\\GetStoreListResponse',
  'ArrayOfStore' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\StoreWS\\ArrayOfStore',
  'Store' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\StoreWS\\Store',
  'ReturnObject' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\StoreWS\\ReturnObject',
  'GetStore' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\StoreWS\\GetStore',
  'GetStoreResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\StoreWS\\GetStoreResponse',
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
        $wsdl = 'http://localhost/ustorewsapi/StoreWS.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns an array of the Stores in the given mall.
     *
     * @param GetStoreList $parameters
     * @return GetStoreListResponse
     */
    public function GetStoreList(GetStoreList $parameters)
    {
      return $this->__soapCall('GetStoreList', array($parameters));
    }

    /**
     * Returns the Store data for the given Store.
     *
     * @param GetStore $parameters
     * @return GetStoreResponse
     */
    public function GetStore(GetStore $parameters)
    {
      return $this->__soapCall('GetStore', array($parameters));
    }

}
