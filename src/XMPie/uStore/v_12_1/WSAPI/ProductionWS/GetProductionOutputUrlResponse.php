<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductionWS;

class GetProductionOutputUrlResponse
{

    /**
     * @var string $GetProductionOutputUrlResult
     */
    protected $GetProductionOutputUrlResult = null;

    /**
     * @param string $GetProductionOutputUrlResult
     */
    public function __construct($GetProductionOutputUrlResult = null)
    {
        $this->GetProductionOutputUrlResult = $GetProductionOutputUrlResult;
    }

    /**
     * @return string
     */
    public function getGetProductionOutputUrlResult()
    {
        return $this->GetProductionOutputUrlResult;
    }

    /**
     * @param string $GetProductionOutputUrlResult
     * @return GetProductionOutputUrlResponse
     */
    public function setGetProductionOutputUrlResult($GetProductionOutputUrlResult)
    {
        $this->GetProductionOutputUrlResult = $GetProductionOutputUrlResult;
        return $this;
    }

}
