<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CurrencyWS;

class CurrencyWS extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetCurrency' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\CurrencyWS\\GetCurrency',
  'GetCurrencyResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\CurrencyWS\\GetCurrencyResponse',
  'CurrencyInfo' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\CurrencyWS\\CurrencyInfo',
  'ReturnObject' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\CurrencyWS\\ReturnObject',
  'GetCurrencyByAbbreviation' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\CurrencyWS\\GetCurrencyByAbbreviation',
  'GetCurrencyByAbbreviationResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\CurrencyWS\\GetCurrencyByAbbreviationResponse',
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
        $wsdl = 'http://localhost/ustorewsapi/CurrencyWS.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns the data of the requested currency.
     *
     * @param GetCurrency $parameters
     * @return GetCurrencyResponse
     */
    public function GetCurrency(GetCurrency $parameters)
    {
      return $this->__soapCall('GetCurrency', array($parameters));
    }

    /**
     * Returns the details of the currency by abbreviation (3 letter ISO abbrevation).
     *
     * @param GetCurrencyByAbbreviation $parameters
     * @return GetCurrencyByAbbreviationResponse
     */
    public function GetCurrencyByAbbreviation(GetCurrencyByAbbreviation $parameters)
    {
      return $this->__soapCall('GetCurrencyByAbbreviation', array($parameters));
    }

}
