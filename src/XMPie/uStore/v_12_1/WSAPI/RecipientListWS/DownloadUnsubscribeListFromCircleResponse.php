<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\RecipientListWS;

class DownloadUnsubscribeListFromCircleResponse
{

    /**
     * @var string $DownloadUnsubscribeListFromCircleResult
     */
    protected $DownloadUnsubscribeListFromCircleResult = null;

    /**
     * @param string $DownloadUnsubscribeListFromCircleResult
     */
    public function __construct($DownloadUnsubscribeListFromCircleResult = null)
    {
        $this->DownloadUnsubscribeListFromCircleResult = $DownloadUnsubscribeListFromCircleResult;
    }

    /**
     * @return string
     */
    public function getDownloadUnsubscribeListFromCircleResult()
    {
        return $this->DownloadUnsubscribeListFromCircleResult;
    }

    /**
     * @param string $DownloadUnsubscribeListFromCircleResult
     * @return DownloadUnsubscribeListFromCircleResponse
     */
    public function setDownloadUnsubscribeListFromCircleResult($DownloadUnsubscribeListFromCircleResult)
    {
        $this->DownloadUnsubscribeListFromCircleResult = $DownloadUnsubscribeListFromCircleResult;
        return $this;
    }

}
