<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\LocalizationWS;

class GetLocalizedStringResponse
{

    /**
     * @var string $GetLocalizedStringResult
     */
    protected $GetLocalizedStringResult = null;

    /**
     * @param string $GetLocalizedStringResult
     */
    public function __construct($GetLocalizedStringResult = null)
    {
        $this->GetLocalizedStringResult = $GetLocalizedStringResult;
    }

    /**
     * @return string
     */
    public function getGetLocalizedStringResult()
    {
        return $this->GetLocalizedStringResult;
    }

    /**
     * @param string $GetLocalizedStringResult
     * @return GetLocalizedStringResponse
     */
    public function setGetLocalizedStringResult($GetLocalizedStringResult)
    {
        $this->GetLocalizedStringResult = $GetLocalizedStringResult;
        return $this;
    }

}
