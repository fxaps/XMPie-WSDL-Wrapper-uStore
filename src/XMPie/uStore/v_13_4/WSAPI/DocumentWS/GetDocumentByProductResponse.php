<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\DocumentWS;

class GetDocumentByProductResponse
{

    /**
     * @var Document $GetDocumentByProductResult
     */
    protected $GetDocumentByProductResult = null;

    /**
     * @param Document $GetDocumentByProductResult
     */
    public function __construct($GetDocumentByProductResult = null)
    {
      $this->GetDocumentByProductResult = $GetDocumentByProductResult;
    }

    /**
     * @return Document
     */
    public function getGetDocumentByProductResult()
    {
      return $this->GetDocumentByProductResult;
    }

    /**
     * @param Document $GetDocumentByProductResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\DocumentWS\GetDocumentByProductResponse
     */
    public function setGetDocumentByProductResult($GetDocumentByProductResult)
    {
      $this->GetDocumentByProductResult = $GetDocumentByProductResult;
      return $this;
    }

}
