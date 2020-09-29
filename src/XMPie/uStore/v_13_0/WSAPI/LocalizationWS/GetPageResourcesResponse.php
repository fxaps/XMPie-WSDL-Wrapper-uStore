<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\LocalizationWS;

class GetPageResourcesResponse
{

    /**
     * @var ArrayOfLocalizationResource $GetPageResourcesResult
     */
    protected $GetPageResourcesResult = null;

    /**
     * @param ArrayOfLocalizationResource $GetPageResourcesResult
     */
    public function __construct($GetPageResourcesResult = null)
    {
        $this->GetPageResourcesResult = $GetPageResourcesResult;
    }

    /**
     * @return ArrayOfLocalizationResource
     */
    public function getGetPageResourcesResult()
    {
        return $this->GetPageResourcesResult;
    }

    /**
     * @param ArrayOfLocalizationResource $GetPageResourcesResult
     * @return GetPageResourcesResponse
     */
    public function setGetPageResourcesResult($GetPageResourcesResult)
    {
        $this->GetPageResourcesResult = $GetPageResourcesResult;
        return $this;
    }

}
