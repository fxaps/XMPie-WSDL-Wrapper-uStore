<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\RecipientListWS;

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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\RecipientListWS\BeginDownloadUnsubscribeListFromCircleResponse
     */
    public function setBeginDownloadUnsubscribeListFromCircleResult($BeginDownloadUnsubscribeListFromCircleResult)
    {
      $this->BeginDownloadUnsubscribeListFromCircleResult = $BeginDownloadUnsubscribeListFromCircleResult;
      return $this;
    }

}
