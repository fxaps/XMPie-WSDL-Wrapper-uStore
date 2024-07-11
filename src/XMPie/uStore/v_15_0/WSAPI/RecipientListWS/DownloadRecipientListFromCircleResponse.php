<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\RecipientListWS;

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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\RecipientListWS\DownloadRecipientListFromCircleResponse
     */
    public function setDownloadRecipientListFromCircleResult($DownloadRecipientListFromCircleResult)
    {
      $this->DownloadRecipientListFromCircleResult = $DownloadRecipientListFromCircleResult;
      return $this;
    }

}
