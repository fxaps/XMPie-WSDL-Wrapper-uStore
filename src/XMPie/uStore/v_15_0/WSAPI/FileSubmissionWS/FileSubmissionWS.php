<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\FileSubmissionWS;

class FileSubmissionWS extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'ConvertToPDF' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\FileSubmissionWS\\ConvertToPDF',
  'ConvertToPDFResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\FileSubmissionWS\\ConvertToPDFResponse',
  'GeneratePreflightInformation' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\FileSubmissionWS\\GeneratePreflightInformation',
  'GeneratePreflightInformationResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\FileSubmissionWS\\GeneratePreflightInformationResponse',
  'GenerateThumbnails' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\FileSubmissionWS\\GenerateThumbnails',
  'GenerateThumbnailsResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\FileSubmissionWS\\GenerateThumbnailsResponse',
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
        $wsdl = 'http://localhost/ustorewsapi/FileSubmissionWS.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Converts a given Office file to PDF file. Supported file types are .pdf, .doc, .docx, .ppt, .pptx.
     *
     * @param ConvertToPDF $parameters
     * @return ConvertToPDFResponse
     */
    public function ConvertToPDF(ConvertToPDF $parameters)
    {
      return $this->__soapCall('ConvertToPDF', array($parameters));
    }

    /**
     * Generates a preflight file in the given location for the given PDF file.
     *
     * @param GeneratePreflightInformation $parameters
     * @return GeneratePreflightInformationResponse
     */
    public function GeneratePreflightInformation(GeneratePreflightInformation $parameters)
    {
      return $this->__soapCall('GeneratePreflightInformation', array($parameters));
    }

    /**
     * Generates .jpg thumbnails in the given folder path for each page in the given PDF file. The folder will be created by the method.
     *
     * @param GenerateThumbnails $parameters
     * @return GenerateThumbnailsResponse
     */
    public function GenerateThumbnails(GenerateThumbnails $parameters)
    {
      return $this->__soapCall('GenerateThumbnails', array($parameters));
    }

}
