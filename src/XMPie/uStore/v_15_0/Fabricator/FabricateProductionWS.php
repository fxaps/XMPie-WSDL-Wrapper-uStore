<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS\GetProofTicketId;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS\GetProofTicketIdResponse;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS\GetProcessTicketId;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS\GetProcessTicketIdResponse;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS\DownloadProof;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS\DownloadProofResponse;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS\ArrayOfBase64Binary;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS\SendToProduction;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS\SendToProductionResponse;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS\GetProductionOutputUrl;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS\GetProductionOutputUrlResponse;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS\GetProductionStatus;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS\GetProductionStatusResponse;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS\ProductionStatus;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS\ArrayOfString;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS\SendToProductionOneCopy;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS\SendToProductionOneCopyResponse;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS\LaunchCircleProjectOrderProduct;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS\LaunchCircleProjectOrderProductResponse;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS\TerminateCircleProjectOrderProduct;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductionWS\TerminateCircleProjectOrderProductResponse;


class FabricateProductionWS
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
    * @return GetProofTicketId
    */
    public function GetProofTicketId($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProofTicketId = new GetProofTicketId();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProofTicketId, $methodName)) {
                $GetProofTicketId->$methodName($paramValue);
            }
        }
        return $GetProofTicketId;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProofTicketIdResponse
    */
    public function GetProofTicketIdResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProofTicketIdResponse = new GetProofTicketIdResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProofTicketIdResponse, $methodName)) {
                $GetProofTicketIdResponse->$methodName($paramValue);
            }
        }
        return $GetProofTicketIdResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProcessTicketId
    */
    public function GetProcessTicketId($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProcessTicketId = new GetProcessTicketId();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProcessTicketId, $methodName)) {
                $GetProcessTicketId->$methodName($paramValue);
            }
        }
        return $GetProcessTicketId;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProcessTicketIdResponse
    */
    public function GetProcessTicketIdResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProcessTicketIdResponse = new GetProcessTicketIdResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProcessTicketIdResponse, $methodName)) {
                $GetProcessTicketIdResponse->$methodName($paramValue);
            }
        }
        return $GetProcessTicketIdResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DownloadProof
    */
    public function DownloadProof($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DownloadProof = new DownloadProof();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DownloadProof, $methodName)) {
                $DownloadProof->$methodName($paramValue);
            }
        }
        return $DownloadProof;
    }


   /**
    * @param array $paramAutoSet
    * @return DownloadProofResponse
    */
    public function DownloadProofResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DownloadProofResponse = new DownloadProofResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DownloadProofResponse, $methodName)) {
                $DownloadProofResponse->$methodName($paramValue);
            }
        }
        return $DownloadProofResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfBase64Binary
    */
    public function ArrayOfBase64Binary($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfBase64Binary = new ArrayOfBase64Binary();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfBase64Binary, $methodName)) {
                $ArrayOfBase64Binary->$methodName($paramValue);
            }
        }
        return $ArrayOfBase64Binary;
    }


   /**
    * @param array $paramAutoSet
    * @return SendToProduction
    */
    public function SendToProduction($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SendToProduction = new SendToProduction();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SendToProduction, $methodName)) {
                $SendToProduction->$methodName($paramValue);
            }
        }
        return $SendToProduction;
    }


   /**
    * @param array $paramAutoSet
    * @return SendToProductionResponse
    */
    public function SendToProductionResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SendToProductionResponse = new SendToProductionResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SendToProductionResponse, $methodName)) {
                $SendToProductionResponse->$methodName($paramValue);
            }
        }
        return $SendToProductionResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductionOutputUrl
    */
    public function GetProductionOutputUrl($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductionOutputUrl = new GetProductionOutputUrl();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductionOutputUrl, $methodName)) {
                $GetProductionOutputUrl->$methodName($paramValue);
            }
        }
        return $GetProductionOutputUrl;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductionOutputUrlResponse
    */
    public function GetProductionOutputUrlResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductionOutputUrlResponse = new GetProductionOutputUrlResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductionOutputUrlResponse, $methodName)) {
                $GetProductionOutputUrlResponse->$methodName($paramValue);
            }
        }
        return $GetProductionOutputUrlResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductionStatus
    */
    public function GetProductionStatus($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductionStatus = new GetProductionStatus();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductionStatus, $methodName)) {
                $GetProductionStatus->$methodName($paramValue);
            }
        }
        return $GetProductionStatus;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductionStatusResponse
    */
    public function GetProductionStatusResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductionStatusResponse = new GetProductionStatusResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductionStatusResponse, $methodName)) {
                $GetProductionStatusResponse->$methodName($paramValue);
            }
        }
        return $GetProductionStatusResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ProductionStatus
    */
    public function ProductionStatus($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ProductionStatus = new ProductionStatus();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ProductionStatus, $methodName)) {
                $ProductionStatus->$methodName($paramValue);
            }
        }
        return $ProductionStatus;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfString
    */
    public function ArrayOfString($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfString = new ArrayOfString();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfString, $methodName)) {
                $ArrayOfString->$methodName($paramValue);
            }
        }
        return $ArrayOfString;
    }


   /**
    * @param array $paramAutoSet
    * @return SendToProductionOneCopy
    */
    public function SendToProductionOneCopy($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SendToProductionOneCopy = new SendToProductionOneCopy();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SendToProductionOneCopy, $methodName)) {
                $SendToProductionOneCopy->$methodName($paramValue);
            }
        }
        return $SendToProductionOneCopy;
    }


   /**
    * @param array $paramAutoSet
    * @return SendToProductionOneCopyResponse
    */
    public function SendToProductionOneCopyResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SendToProductionOneCopyResponse = new SendToProductionOneCopyResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SendToProductionOneCopyResponse, $methodName)) {
                $SendToProductionOneCopyResponse->$methodName($paramValue);
            }
        }
        return $SendToProductionOneCopyResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return LaunchCircleProjectOrderProduct
    */
    public function LaunchCircleProjectOrderProduct($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $LaunchCircleProjectOrderProduct = new LaunchCircleProjectOrderProduct();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($LaunchCircleProjectOrderProduct, $methodName)) {
                $LaunchCircleProjectOrderProduct->$methodName($paramValue);
            }
        }
        return $LaunchCircleProjectOrderProduct;
    }


   /**
    * @param array $paramAutoSet
    * @return LaunchCircleProjectOrderProductResponse
    */
    public function LaunchCircleProjectOrderProductResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $LaunchCircleProjectOrderProductResponse = new LaunchCircleProjectOrderProductResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($LaunchCircleProjectOrderProductResponse, $methodName)) {
                $LaunchCircleProjectOrderProductResponse->$methodName($paramValue);
            }
        }
        return $LaunchCircleProjectOrderProductResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return TerminateCircleProjectOrderProduct
    */
    public function TerminateCircleProjectOrderProduct($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $TerminateCircleProjectOrderProduct = new TerminateCircleProjectOrderProduct();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($TerminateCircleProjectOrderProduct, $methodName)) {
                $TerminateCircleProjectOrderProduct->$methodName($paramValue);
            }
        }
        return $TerminateCircleProjectOrderProduct;
    }


   /**
    * @param array $paramAutoSet
    * @return TerminateCircleProjectOrderProductResponse
    */
    public function TerminateCircleProjectOrderProductResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $TerminateCircleProjectOrderProductResponse = new TerminateCircleProjectOrderProductResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($TerminateCircleProjectOrderProductResponse, $methodName)) {
                $TerminateCircleProjectOrderProductResponse->$methodName($paramValue);
            }
        }
        return $TerminateCircleProjectOrderProductResponse;
    }



}

?>
