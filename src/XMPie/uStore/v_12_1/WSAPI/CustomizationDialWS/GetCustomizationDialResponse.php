<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CustomizationDialWS;

class GetCustomizationDialResponse
{

    /**
     * @var CustomizationDial $GetCustomizationDialResult
     */
    protected $GetCustomizationDialResult = null;

    /**
     * @param CustomizationDial $GetCustomizationDialResult
     */
    public function __construct($GetCustomizationDialResult = null)
    {
        $this->GetCustomizationDialResult = $GetCustomizationDialResult;
    }

    /**
     * @return CustomizationDial
     */
    public function getGetCustomizationDialResult()
    {
        return $this->GetCustomizationDialResult;
    }

    /**
     * @param CustomizationDial $GetCustomizationDialResult
     * @return GetCustomizationDialResponse
     */
    public function setGetCustomizationDialResult($GetCustomizationDialResult)
    {
        $this->GetCustomizationDialResult = $GetCustomizationDialResult;
        return $this;
    }

}
