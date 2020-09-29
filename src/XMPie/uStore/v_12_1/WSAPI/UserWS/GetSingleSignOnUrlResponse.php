<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS;

class GetSingleSignOnUrlResponse
{

    /**
     * @var string $GetSingleSignOnUrlResult
     */
    protected $GetSingleSignOnUrlResult = null;

    /**
     * @param string $GetSingleSignOnUrlResult
     */
    public function __construct($GetSingleSignOnUrlResult = null)
    {
        $this->GetSingleSignOnUrlResult = $GetSingleSignOnUrlResult;
    }

    /**
     * @return string
     */
    public function getGetSingleSignOnUrlResult()
    {
        return $this->GetSingleSignOnUrlResult;
    }

    /**
     * @param string $GetSingleSignOnUrlResult
     * @return GetSingleSignOnUrlResponse
     */
    public function setGetSingleSignOnUrlResult($GetSingleSignOnUrlResult)
    {
        $this->GetSingleSignOnUrlResult = $GetSingleSignOnUrlResult;
        return $this;
    }

}
