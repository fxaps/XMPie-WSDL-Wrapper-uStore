<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\DocumentWS;

class GetDocumentResponse
{

    /**
     * @var Document $GetDocumentResult
     */
    protected $GetDocumentResult = null;

    /**
     * @param Document $GetDocumentResult
     */
    public function __construct($GetDocumentResult = null)
    {
      $this->GetDocumentResult = $GetDocumentResult;
    }

    /**
     * @return Document
     */
    public function getGetDocumentResult()
    {
      return $this->GetDocumentResult;
    }

    /**
     * @param Document $GetDocumentResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\DocumentWS\GetDocumentResponse
     */
    public function setGetDocumentResult($GetDocumentResult)
    {
      $this->GetDocumentResult = $GetDocumentResult;
      return $this;
    }

}
