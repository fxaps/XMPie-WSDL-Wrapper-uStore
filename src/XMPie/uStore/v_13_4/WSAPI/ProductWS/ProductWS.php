<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS;

class ProductWS extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetProductList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductWS\\GetProductList',
  'GetProductListResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductWS\\GetProductListResponse',
  'ArrayOfProduct' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductWS\\ArrayOfProduct',
  'Product' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductWS\\Product',
  'ReturnObject' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductWS\\ReturnObject',
  'GetProductListByStore' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductWS\\GetProductListByStore',
  'GetProductListByStoreResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductWS\\GetProductListByStoreResponse',
  'GetProduct' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductWS\\GetProduct',
  'GetProductResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductWS\\GetProductResponse',
  'GetProductThumbnails' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductWS\\GetProductThumbnails',
  'GetProductThumbnailsResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductWS\\GetProductThumbnailsResponse',
  'ArrayOfBase64Binary' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductWS\\ArrayOfBase64Binary',
  'GetProductIDByExternalID' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductWS\\GetProductIDByExternalID',
  'GetProductIDByExternalIDResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductWS\\GetProductIDByExternalIDResponse',
  'GetProductIDsByExternalID' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductWS\\GetProductIDsByExternalID',
  'GetProductIDsByExternalIDResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductWS\\GetProductIDsByExternalIDResponse',
  'ArrayOfInt' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductWS\\ArrayOfInt',
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
        $wsdl = 'http://localhost/ustorewsapi/ProductWS.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Retrieves an array containing all the Products in the Store. Use isReturnInactive=false in order to retrieve only the Products which are currently online.
     *
     * @param GetProductList $parameters
     * @return GetProductListResponse
     */
    public function GetProductList(GetProductList $parameters)
    {
      return $this->__soapCall('GetProductList', array($parameters));
    }

    /**
     * Retrieves an array containing all the Products in the store. Use isReturnInactive=false in order to retrieve only the Products which are currently online.
     *
     * @param GetProductListByStore $parameters
     * @return GetProductListByStoreResponse
     */
    public function GetProductListByStore(GetProductListByStore $parameters)
    {
      return $this->__soapCall('GetProductListByStore', array($parameters));
    }

    /**
     * Returns the data of the given Product in the given culture.
     *
     * @param GetProduct $parameters
     * @return GetProductResponse
     */
    public function GetProduct(GetProduct $parameters)
    {
      return $this->__soapCall('GetProduct', array($parameters));
    }

    /**
     * Returns an array containing the thumbnail files of the given Product.
     *
     * @param GetProductThumbnails $parameters
     * @return GetProductThumbnailsResponse
     */
    public function GetProductThumbnails(GetProductThumbnails $parameters)
    {
      return $this->__soapCall('GetProductThumbnails', array($parameters));
    }

    /**
     * Returns the lowest ID of a product having the given externalProductID.
     *
     * @param GetProductIDByExternalID $parameters
     * @return GetProductIDByExternalIDResponse
     */
    public function GetProductIDByExternalID(GetProductIDByExternalID $parameters)
    {
      return $this->__soapCall('GetProductIDByExternalID', array($parameters));
    }

    /**
     * Returns the IDs of all products having the given externalProductID.
     *
     * @param GetProductIDsByExternalID $parameters
     * @return GetProductIDsByExternalIDResponse
     */
    public function GetProductIDsByExternalID(GetProductIDsByExternalID $parameters)
    {
      return $this->__soapCall('GetProductIDsByExternalID', array($parameters));
    }

}
