<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS;

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
     * @return GetFileSubmissionDocumentResponse
     */
    public function setGetFileSubmissionDocumentResult($GetFileSubmissionDocumentResult)
    {
        $this->GetFileSubmissionDocumentResult = $GetFileSubmissionDocumentResult;
        return $this;
    }

}
