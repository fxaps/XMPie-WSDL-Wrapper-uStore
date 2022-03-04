<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\RecipientListWS;

class BeginDownloadRecipientListFromCircleResponse
{

    /**
     * @var guid $BeginDownloadRecipientListFromCircleResult
     */
    protected $BeginDownloadRecipientListFromCircleResult = null;

    /**
     * @param guid $BeginDownloadRecipientListFromCircleResult
     */
    public function __construct($BeginDownloadRecipientListFromCircleResult = null)
    {
      $this->BeginDownloadRecipientListFromCircleResult = $BeginDownloadRecipientListFromCircleResult;
    }

    /**
     * @return guid
     */
    public function getBeginDownloadRecipientListFromCircleResult()
    {
      return $this->BeginDownloadRecipientListFromCircleResult;
    }

    /**
     * @param guid $BeginDownloadRecipientListFromCircleResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\RecipientListWS\BeginDownloadRecipientListFromCircleResponse
     */
    public function setBeginDownloadRecipientListFromCircleResult($BeginDownloadRecipientListFromCircleResult)
    {
      $this->BeginDownloadRecipientListFromCircleResult = $BeginDownloadRecipientListFromCircleResult;
      return $this;
    }

}
