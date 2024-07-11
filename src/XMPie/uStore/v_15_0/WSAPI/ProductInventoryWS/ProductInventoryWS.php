<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductInventoryWS;

class ProductInventoryWS extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'ReadInventoryLevel' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\ProductInventoryWS\\ReadInventoryLevel',
  'ReadInventoryLevelResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\ProductInventoryWS\\ReadInventoryLevelResponse',
  'ReadInventoryLevelByExternalID' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\ProductInventoryWS\\ReadInventoryLevelByExternalID',
  'ReadInventoryLevelByExternalIDResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\ProductInventoryWS\\ReadInventoryLevelByExternalIDResponse',
  'Update' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\ProductInventoryWS\\Update',
  'UpdateResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\ProductInventoryWS\\UpdateResponse',
  'UpdateByExternalID' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\ProductInventoryWS\\UpdateByExternalID',
  'UpdateByExternalIDResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\ProductInventoryWS\\UpdateByExternalIDResponse',
  'Increase' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\ProductInventoryWS\\Increase',
  'IncreaseResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\ProductInventoryWS\\IncreaseResponse',
  'IncreaseByExternalID' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\ProductInventoryWS\\IncreaseByExternalID',
  'IncreaseByExternalIDResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\ProductInventoryWS\\IncreaseByExternalIDResponse',
  'Decrease' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\ProductInventoryWS\\Decrease',
  'DecreaseResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\ProductInventoryWS\\DecreaseResponse',
  'DecreaseByExternalID' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\ProductInventoryWS\\DecreaseByExternalID',
  'DecreaseByExternalIDResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\ProductInventoryWS\\DecreaseByExternalIDResponse',
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
        $wsdl = 'http://localhost/ustorewsapi/ProductInventoryWS.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Read the on-shelf inventory level for the given product.
     *
     * @param ReadInventoryLevel $parameters
     * @return ReadInventoryLevelResponse
     */
    public function ReadInventoryLevel(ReadInventoryLevel $parameters)
    {
      return $this->__soapCall('ReadInventoryLevel', array($parameters));
    }

    /**
     * Read the on-shelf inventory level for the given product with externalProductId, in the given store.
     *
     * @param ReadInventoryLevelByExternalID $parameters
     * @return ReadInventoryLevelByExternalIDResponse
     */
    public function ReadInventoryLevelByExternalID(ReadInventoryLevelByExternalID $parameters)
    {
      return $this->__soapCall('ReadInventoryLevelByExternalID', array($parameters));
    }

    /**
     * Updates the inventory amount for the given product. (overrides the current on-shelf inventory amount).
     *
     * @param Update $parameters
     * @return UpdateResponse
     */
    public function Update(Update $parameters)
    {
      return $this->__soapCall('Update', array($parameters));
    }

    /**
     * Updates the inventory amount for the given product with externalProductId, in the given store. (overrides the current on-shelf inventory amount).
     *
     * @param UpdateByExternalID $parameters
     * @return UpdateByExternalIDResponse
     */
    public function UpdateByExternalID(UpdateByExternalID $parameters)
    {
      return $this->__soapCall('UpdateByExternalID', array($parameters));
    }

    /**
     * Increases the inventory of the given product with the given amount.
     *
     * @param Increase $parameters
     * @return IncreaseResponse
     */
    public function Increase(Increase $parameters)
    {
      return $this->__soapCall('Increase', array($parameters));
    }

    /**
     * Increases the inventory of the given product with externalProductId, in the given store, with the given amount.
     *
     * @param IncreaseByExternalID $parameters
     * @return IncreaseByExternalIDResponse
     */
    public function IncreaseByExternalID(IncreaseByExternalID $parameters)
    {
      return $this->__soapCall('IncreaseByExternalID', array($parameters));
    }

    /**
     * Decreases the inventory of the given product with the given amount.
     *
     * @param Decrease $parameters
     * @return DecreaseResponse
     */
    public function Decrease(Decrease $parameters)
    {
      return $this->__soapCall('Decrease', array($parameters));
    }

    /**
     * Decreases the inventory of the given product with externalProductId, in the given store, with the given amount.
     *
     * @param DecreaseByExternalID $parameters
     * @return DecreaseByExternalIDResponse
     */
    public function DecreaseByExternalID(DecreaseByExternalID $parameters)
    {
      return $this->__soapCall('DecreaseByExternalID', array($parameters));
    }

}
