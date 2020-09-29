<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\RecipientListWS;

class DownloadRecipientListFromCircleResponse
{

    /**
     * @var string $DownloadRecipientListFromCircleResult
     */
    protected $DownloadRecipientListFromCircleResult = null;

    /**
     * @param string $DownloadRecipientListFromCircleResult
     */
    public function __construct($DownloadRecipientListFromCircleResult = null)
    {
        $this->DownloadRecipientListFromCircleResult = $DownloadRecipientListFromCircleResult;
    }

    /**
     * @return string
     */
    public function getDownloadRecipientListFromCircleResult()
    {
        return $this->DownloadRecipientListFromCircleResult;
    }

    /**
     * @param string $DownloadRecipientListFromCircleResult
     * @return DownloadRecipientListFromCircleResponse
     */
    public function setDownloadRecipientListFromCircleResult($DownloadRecipientListFromCircleResult)
    {
        $this->DownloadRecipientListFromCircleResult = $DownloadRecipientListFromCircleResult;
        return $this;
    }

}
