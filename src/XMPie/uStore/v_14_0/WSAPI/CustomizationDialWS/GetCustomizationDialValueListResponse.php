<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS;

class GetCustomizationDialValueListResponse
{

    /**
     * @var ArrayOfCustomizationDialValue $GetCustomizationDialValueListResult
     */
    protected $GetCustomizationDialValueListResult = null;

    /**
     * @param ArrayOfCustomizationDialValue $GetCustomizationDialValueListResult
     */
    public function __construct($GetCustomizationDialValueListResult = null)
    {
      $this->GetCustomizationDialValueListResult = $GetCustomizationDialValueListResult;
    }

    /**
     * @return ArrayOfCustomizationDialValue
     */
    public function getGetCustomizationDialValueListResult()
    {
      return $this->GetCustomizationDialValueListResult;
    }

    /**
     * @param ArrayOfCustomizationDialValue $GetCustomizationDialValueListResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\GetCustomizationDialValueListResponse
     */
    public function setGetCustomizationDialValueListResult($GetCustomizationDialValueListResult)
    {
      $this->GetCustomizationDialValueListResult = $GetCustomizationDialValueListResult;
      return $this;
    }

}
