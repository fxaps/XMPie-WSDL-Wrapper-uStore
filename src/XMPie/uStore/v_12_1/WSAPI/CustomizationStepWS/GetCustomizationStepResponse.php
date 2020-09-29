<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CustomizationStepWS;

class GetCustomizationStepResponse
{

    /**
     * @var CustomizationStep $GetCustomizationStepResult
     */
    protected $GetCustomizationStepResult = null;

    /**
     * @param CustomizationStep $GetCustomizationStepResult
     */
    public function __construct($GetCustomizationStepResult = null)
    {
        $this->GetCustomizationStepResult = $GetCustomizationStepResult;
    }

    /**
     * @return CustomizationStep
     */
    public function getGetCustomizationStepResult()
    {
        return $this->GetCustomizationStepResult;
    }

    /**
     * @param CustomizationStep $GetCustomizationStepResult
     * @return GetCustomizationStepResponse
     */
    public function setGetCustomizationStepResult($GetCustomizationStepResult)
    {
        $this->GetCustomizationStepResult = $GetCustomizationStepResult;
        return $this;
    }

}
