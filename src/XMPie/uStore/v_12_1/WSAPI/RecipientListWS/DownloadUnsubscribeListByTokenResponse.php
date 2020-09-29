<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\RecipientListWS;

class DownloadUnsubscribeListByTokenResponse
{

    /**
     * @var string $DownloadUnsubscribeListByTokenResult
     */
    protected $DownloadUnsubscribeListByTokenResult = null;

    /**
     * @param string $DownloadUnsubscribeListByTokenResult
     */
    public function __construct($DownloadUnsubscribeListByTokenResult = null)
    {
        $this->DownloadUnsubscribeListByTokenResult = $DownloadUnsubscribeListByTokenResult;
    }

    /**
     * @return string
     */
    public function getDownloadUnsubscribeListByTokenResult()
    {
        return $this->DownloadUnsubscribeListByTokenResult;
    }

    /**
     * @param string $DownloadUnsubscribeListByTokenResult
     * @return DownloadUnsubscribeListByTokenResponse
     */
    public function setDownloadUnsubscribeListByTokenResult($DownloadUnsubscribeListByTokenResult)
    {
        $this->DownloadUnsubscribeListByTokenResult = $DownloadUnsubscribeListByTokenResult;
        return $this;
    }

}
