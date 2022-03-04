<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderProductWS;

class GetFileSubmissionDocumentResponse
{

    /**
     * @var FileSubmissionDocument $GetFileSubmissionDocumentResult
     */
    protected $GetFileSubmissionDocumentResult = null;

    /**
     * @param FileSubmissionDocument $GetFileSubmissionDocumentResult
     */
    public function __construct($GetFileSubmissionDocumentResult = null)
    {
      $this->GetFileSubmissionDocumentResult = $GetFileSubmissionDocumentResult;
    }

    /**
     * @return FileSubmissionDocument
     */
    public function getGetFileSubmissionDocumentResult()
    {
      return $this->GetFileSubmissionDocumentResult;
    }

    /**
     * @param FileSubmissionDocument $GetFileSubmissionDocumentResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderProductWS\GetFileSubmissionDocumentResponse
     */
    public function setGetFileSubmissionDocumentResult($GetFileSubmissionDocumentResult)
    {
      $this->GetFileSubmissionDocumentResult = $GetFileSubmissionDocumentResult;
      return $this;
    }

}
