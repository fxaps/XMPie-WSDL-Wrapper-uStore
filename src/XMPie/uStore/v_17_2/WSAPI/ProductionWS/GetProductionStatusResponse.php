<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductionWS;

class GetProductionStatusResponse
{

    /**
     * @var ProductionStatus $GetProductionStatusResult
     */
    protected $GetProductionStatusResult = null;

    /**
     * @param ProductionStatus $GetProductionStatusResult
     */
    public function __construct($GetProductionStatusResult = null)
    {
      $this->GetProductionStatusResult = $GetProductionStatusResult;
    }

    /**
     * @return ProductionStatus
     */
    public function getGetProductionStatusResult()
    {
      return $this->GetProductionStatusResult;
    }

    /**
     * @param ProductionStatus $GetProductionStatusResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductionWS\GetProductionStatusResponse
     */
    public function setGetProductionStatusResult($GetProductionStatusResult)
    {
      $this->GetProductionStatusResult = $GetProductionStatusResult;
      return $this;
    }

}
