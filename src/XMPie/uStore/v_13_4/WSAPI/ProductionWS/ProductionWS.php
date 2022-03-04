<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductionWS;

class ProductionWS extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetProofTicketId' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductionWS\\GetProofTicketId',
  'GetProofTicketIdResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductionWS\\GetProofTicketIdResponse',
  'GetProcessTicketId' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductionWS\\GetProcessTicketId',
  'GetProcessTicketIdResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductionWS\\GetProcessTicketIdResponse',
  'DownloadProof' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductionWS\\DownloadProof',
  'DownloadProofResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductionWS\\DownloadProofResponse',
  'ArrayOfBase64Binary' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductionWS\\ArrayOfBase64Binary',
  'SendToProduction' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductionWS\\SendToProduction',
  'SendToProductionResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductionWS\\SendToProductionResponse',
  'GetProductionOutputUrl' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductionWS\\GetProductionOutputUrl',
  'GetProductionOutputUrlResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductionWS\\GetProductionOutputUrlResponse',
  'GetProductionStatus' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductionWS\\GetProductionStatus',
  'GetProductionStatusResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductionWS\\GetProductionStatusResponse',
  'ProductionStatus' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductionWS\\ProductionStatus',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductionWS\\ArrayOfString',
  'SendToProductionOneCopy' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductionWS\\SendToProductionOneCopy',
  'SendToProductionOneCopyResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductionWS\\SendToProductionOneCopyResponse',
  'LaunchCircleProjectOrderProduct' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductionWS\\LaunchCircleProjectOrderProduct',
  'LaunchCircleProjectOrderProductResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductionWS\\LaunchCircleProjectOrderProductResponse',
  'TerminateCircleProjectOrderProduct' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductionWS\\TerminateCircleProjectOrderProduct',
  'TerminateCircleProjectOrderProductResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\ProductionWS\\TerminateCircleProjectOrderProductResponse',
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
        $wsdl = 'http://localhost/ustorewsapi/ProductionWS.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Creates a Proof Ticket in uProduce for the Order Product and returns its ID.
     *
     * @param GetProofTicketId $parameters
     * @return GetProofTicketIdResponse
     */
    public function GetProofTicketId(GetProofTicketId $parameters)
    {
      return $this->__soapCall('GetProofTicketId', array($parameters));
    }

    /**
     * Creates a Process Ticket in uProduce for the Order Product and returns its ID.
     *
     * @param GetProcessTicketId $parameters
     * @return GetProcessTicketIdResponse
     */
    public function GetProcessTicketId(GetProcessTicketId $parameters)
    {
      return $this->__soapCall('GetProcessTicketId', array($parameters));
    }

    /**
     * Returns the Proof files of the given Proof. A file is returned for every page in the Document.
     *
     * @param DownloadProof $parameters
     * @return DownloadProofResponse
     */
    public function DownloadProof(DownloadProof $parameters)
    {
      return $this->__soapCall('DownloadProof', array($parameters));
    }

    /**
     * Sends the given order product to production and move it to Production In Progress queue
     *
     * @param SendToProduction $parameters
     * @return SendToProductionResponse
     */
    public function SendToProduction(SendToProduction $parameters)
    {
      return $this->__soapCall('SendToProduction', array($parameters));
    }

    /**
     * Returns a Url to the production output of the given order product
     *
     * @param GetProductionOutputUrl $parameters
     * @return GetProductionOutputUrlResponse
     */
    public function GetProductionOutputUrl(GetProductionOutputUrl $parameters)
    {
      return $this->__soapCall('GetProductionOutputUrl', array($parameters));
    }

    /**
     * Gets a composition (a.k.a production) status.
     *
     * @param GetProductionStatus $parameters
     * @return GetProductionStatusResponse
     */
    public function GetProductionStatus(GetProductionStatus $parameters)
    {
      return $this->__soapCall('GetProductionStatus', array($parameters));
    }

    /**
     * Sends the given order product to production, producing only one copy.
     *
     * @param SendToProductionOneCopy $parameters
     * @return SendToProductionOneCopyResponse
     */
    public function SendToProductionOneCopy(SendToProductionOneCopy $parameters)
    {
      return $this->__soapCall('SendToProductionOneCopy', array($parameters));
    }

    /**
     * Launch circle project
     *
     * @param LaunchCircleProjectOrderProduct $parameters
     * @return LaunchCircleProjectOrderProductResponse
     */
    public function LaunchCircleProjectOrderProduct(LaunchCircleProjectOrderProduct $parameters)
    {
      return $this->__soapCall('LaunchCircleProjectOrderProduct', array($parameters));
    }

    /**
     * terminate circle project
     *
     * @param TerminateCircleProjectOrderProduct $parameters
     * @return TerminateCircleProjectOrderProductResponse
     */
    public function TerminateCircleProjectOrderProduct(TerminateCircleProjectOrderProduct $parameters)
    {
      return $this->__soapCall('TerminateCircleProjectOrderProduct', array($parameters));
    }

}
