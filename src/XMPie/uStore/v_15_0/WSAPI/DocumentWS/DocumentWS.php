<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\DocumentWS;

class DocumentWS extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetDocumentByProduct' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\DocumentWS\\GetDocumentByProduct',
  'GetDocumentByProductResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\DocumentWS\\GetDocumentByProductResponse',
  'Document' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\DocumentWS\\Document',
  'ReturnObject' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\DocumentWS\\ReturnObject',
  'GetDocument' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\DocumentWS\\GetDocument',
  'GetDocumentResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\DocumentWS\\GetDocumentResponse',
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
        $wsdl = 'http://localhost/ustorewsapi/DocumentWS.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns the Document data of the Document on which the given Product is based.
     *
     * @param GetDocumentByProduct $parameters
     * @return GetDocumentByProductResponse
     */
    public function GetDocumentByProduct(GetDocumentByProduct $parameters)
    {
      return $this->__soapCall('GetDocumentByProduct', array($parameters));
    }

    /**
     * Returns the data of the given Document.
     *
     * @param GetDocument $parameters
     * @return GetDocumentResponse
     */
    public function GetDocument(GetDocument $parameters)
    {
      return $this->__soapCall('GetDocument', array($parameters));
    }

}
