<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\FileSubmissionWS\ConvertToPDF;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\FileSubmissionWS\ConvertToPDFResponse;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\FileSubmissionWS\GeneratePreflightInformation;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\FileSubmissionWS\GeneratePreflightInformationResponse;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\FileSubmissionWS\GenerateThumbnails;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\FileSubmissionWS\GenerateThumbnailsResponse;


class FabricateFileSubmissionWS
{
    private $paramAutoSet;

    /**
     * Constructor.
     *
     * @param array $paramAutoSet
     */
    public function __construct($paramAutoSet = [])
    {
        $this->setParamAutoSet($paramAutoSet);
    }


    /**
     * @return array
     */
    public function getParamAutoSet()
    {
        return $this->paramAutoSet;
    }


    /**
     * @param array $paramAutoSet
     */
    public function setParamAutoSet($paramAutoSet)
    {
        $this->paramAutoSet = $paramAutoSet;
    }


   /**
    * @param array $paramAutoSet
    * @return ConvertToPDF
    */
    public function ConvertToPDF($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ConvertToPDF = new ConvertToPDF();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ConvertToPDF, $methodName)) {
                $ConvertToPDF->$methodName($paramValue);
            }
        }
        return $ConvertToPDF;
    }


   /**
    * @param array $paramAutoSet
    * @return ConvertToPDFResponse
    */
    public function ConvertToPDFResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ConvertToPDFResponse = new ConvertToPDFResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ConvertToPDFResponse, $methodName)) {
                $ConvertToPDFResponse->$methodName($paramValue);
            }
        }
        return $ConvertToPDFResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GeneratePreflightInformation
    */
    public function GeneratePreflightInformation($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GeneratePreflightInformation = new GeneratePreflightInformation();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GeneratePreflightInformation, $methodName)) {
                $GeneratePreflightInformation->$methodName($paramValue);
            }
        }
        return $GeneratePreflightInformation;
    }


   /**
    * @param array $paramAutoSet
    * @return GeneratePreflightInformationResponse
    */
    public function GeneratePreflightInformationResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GeneratePreflightInformationResponse = new GeneratePreflightInformationResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GeneratePreflightInformationResponse, $methodName)) {
                $GeneratePreflightInformationResponse->$methodName($paramValue);
            }
        }
        return $GeneratePreflightInformationResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GenerateThumbnails
    */
    public function GenerateThumbnails($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GenerateThumbnails = new GenerateThumbnails();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GenerateThumbnails, $methodName)) {
                $GenerateThumbnails->$methodName($paramValue);
            }
        }
        return $GenerateThumbnails;
    }


   /**
    * @param array $paramAutoSet
    * @return GenerateThumbnailsResponse
    */
    public function GenerateThumbnailsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GenerateThumbnailsResponse = new GenerateThumbnailsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GenerateThumbnailsResponse, $methodName)) {
                $GenerateThumbnailsResponse->$methodName($paramValue);
            }
        }
        return $GenerateThumbnailsResponse;
    }



}

?>
