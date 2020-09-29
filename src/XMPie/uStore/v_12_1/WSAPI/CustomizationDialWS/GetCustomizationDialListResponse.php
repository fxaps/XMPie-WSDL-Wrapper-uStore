<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CustomizationDialWS;

class GetCustomizationDialListResponse
{

    /**
     * @var ArrayOfCustomizationDial $GetCustomizationDialListResult
     */
    protected $GetCustomizationDialListResult = null;

    /**
     * @param ArrayOfCustomizationDial $GetCustomizationDialListResult
     */
    public function __construct($GetCustomizationDialListResult = null)
    {
        $this->GetCustomizationDialListResult = $GetCustomizationDialListResult;
    }

    /**
     * @return ArrayOfCustomizationDial
     */
    public function getGetCustomizationDialListResult()
    {
        return $this->GetCustomizationDialListResult;
    }

    /**
     * @param ArrayOfCustomizationDial $GetCustomizationDialListResult
     * @return GetCustomizationDialListResponse
     */
    public function setGetCustomizationDialListResult($GetCustomizationDialListResult)
    {
        $this->GetCustomizationDialListResult = $GetCustomizationDialListResult;
        return $this;
    }

}
