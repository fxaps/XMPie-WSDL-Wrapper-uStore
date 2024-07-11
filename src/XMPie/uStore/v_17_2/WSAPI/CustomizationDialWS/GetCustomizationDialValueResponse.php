<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CustomizationDialWS;

class GetCustomizationDialValueResponse
{

    /**
     * @var CustomizationDialValue $GetCustomizationDialValueResult
     */
    protected $GetCustomizationDialValueResult = null;

    /**
     * @param CustomizationDialValue $GetCustomizationDialValueResult
     */
    public function __construct($GetCustomizationDialValueResult = null)
    {
      $this->GetCustomizationDialValueResult = $GetCustomizationDialValueResult;
    }

    /**
     * @return CustomizationDialValue
     */
    public function getGetCustomizationDialValueResult()
    {
      return $this->GetCustomizationDialValueResult;
    }

    /**
     * @param CustomizationDialValue $GetCustomizationDialValueResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CustomizationDialWS\GetCustomizationDialValueResponse
     */
    public function setGetCustomizationDialValueResult($GetCustomizationDialValueResult)
    {
      $this->GetCustomizationDialValueResult = $GetCustomizationDialValueResult;
      return $this;
    }

}
