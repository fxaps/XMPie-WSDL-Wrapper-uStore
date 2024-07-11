<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\RecipientListWS;

class DownloadRecipientListByTokenResponse
{

    /**
     * @var string $DownloadRecipientListByTokenResult
     */
    protected $DownloadRecipientListByTokenResult = null;

    /**
     * @param string $DownloadRecipientListByTokenResult
     */
    public function __construct($DownloadRecipientListByTokenResult = null)
    {
      $this->DownloadRecipientListByTokenResult = $DownloadRecipientListByTokenResult;
    }

    /**
     * @return string
     */
    public function getDownloadRecipientListByTokenResult()
    {
      return $this->DownloadRecipientListByTokenResult;
    }

    /**
     * @param string $DownloadRecipientListByTokenResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\RecipientListWS\DownloadRecipientListByTokenResponse
     */
    public function setDownloadRecipientListByTokenResult($DownloadRecipientListByTokenResult)
    {
      $this->DownloadRecipientListByTokenResult = $DownloadRecipientListByTokenResult;
      return $this;
    }

}
