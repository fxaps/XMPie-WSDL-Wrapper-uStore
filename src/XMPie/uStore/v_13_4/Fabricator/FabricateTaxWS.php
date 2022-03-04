<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\TaxWS\CalculateTax;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\TaxWS\CalculateTaxResponse;


class FabricateTaxWS
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
    * @return CalculateTax
    */
    public function CalculateTax($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CalculateTax = new CalculateTax();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CalculateTax, $methodName)) {
                $CalculateTax->$methodName($paramValue);
            }
        }
        return $CalculateTax;
    }


   /**
    * @param array $paramAutoSet
    * @return CalculateTaxResponse
    */
    public function CalculateTaxResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CalculateTaxResponse = new CalculateTaxResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CalculateTaxResponse, $methodName)) {
                $CalculateTaxResponse->$methodName($paramValue);
            }
        }
        return $CalculateTaxResponse;
    }



}

?>
