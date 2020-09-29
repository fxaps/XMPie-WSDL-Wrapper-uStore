<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\RecipientListWS;

class BeginDownloadUnsubscribeListFromCircleResponse
{

    /**
     * @var guid $BeginDownloadUnsubscribeListFromCircleResult
     */
    protected $BeginDownloadUnsubscribeListFromCircleResult = null;

    /**
     * @param guid $BeginDownloadUnsubscribeListFromCircleResult
     */
    public function __construct($BeginDownloadUnsubscribeListFromCircleResult = null)
    {
        $this->BeginDownloadUnsubscribeListFromCircleResult = $BeginDownloadUnsubscribeListFromCircleResult;
    }

    /**
     * @return guid
     */
    public function getBeginDownloadUnsubscribeListFromCircleResult()
    {
        return $this->BeginDownloadUnsubscribeListFromCircleResult;
    }

    /**
     * @param guid $BeginDownloadUnsubscribeListFromCircleResult
     * @return BeginDownloadUnsubscribeListFromCircleResponse
     */
    public function setBeginDownloadUnsubscribeListFromCircleResult($BeginDownloadUnsubscribeListFromCircleResult)
    {
        $this->BeginDownloadUnsubscribeListFromCircleResult = $BeginDownloadUnsubscribeListFromCircleResult;
        return $this;
    }

}
