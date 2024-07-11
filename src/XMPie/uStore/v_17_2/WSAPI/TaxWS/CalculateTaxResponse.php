<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TaxWS;

class CalculateTaxResponse
{

    /**
     * @var float $CalculateTaxResult
     */
    protected $CalculateTaxResult = null;

    /**
     * @param float $CalculateTaxResult
     */
    public function __construct($CalculateTaxResult = null)
    {
      $this->CalculateTaxResult = $CalculateTaxResult;
    }

    /**
     * @return float
     */
    public function getCalculateTaxResult()
    {
      return $this->CalculateTaxResult;
    }

    /**
     * @param float $CalculateTaxResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TaxWS\CalculateTaxResponse
     */
    public function setCalculateTaxResult($CalculateTaxResult)
    {
      $this->CalculateTaxResult = $CalculateTaxResult;
      return $this;
    }

}
