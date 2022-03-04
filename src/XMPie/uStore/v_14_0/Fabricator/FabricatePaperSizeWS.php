<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\PaperSizeWS\GetPaperSize;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\PaperSizeWS\GetPaperSizeResponse;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\PaperSizeWS\PaperSize;


class FabricatePaperSizeWS
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
    * @return GetPaperSize
    */
    public function GetPaperSize($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPaperSize = new GetPaperSize();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPaperSize, $methodName)) {
                $GetPaperSize->$methodName($paramValue);
            }
        }
        return $GetPaperSize;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPaperSizeResponse
    */
    public function GetPaperSizeResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPaperSizeResponse = new GetPaperSizeResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPaperSizeResponse, $methodName)) {
                $GetPaperSizeResponse->$methodName($paramValue);
            }
        }
        return $GetPaperSizeResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return PaperSize
    */
    public function PaperSize($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PaperSize = new PaperSize();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PaperSize, $methodName)) {
                $PaperSize->$methodName($paramValue);
            }
        }
        return $PaperSize;
    }



}

?>
