<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\DocumentWS\GetDocumentByProduct;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\DocumentWS\GetDocumentByProductResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\DocumentWS\Document;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\DocumentWS\GetDocument;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\DocumentWS\GetDocumentResponse;


class FabricateDocumentWS
{
    private $paramAutoSet;

    /**
     * Constructor.
     *
     * @param array $paramAutoSet
     */
    public function __construct($paramAutoSet = [])
    {
        $this->setParamAutoSet($paramAutoSet);
    }


    /**
     * @return array
     */
    public function getParamAutoSet()
    {
        return $this->paramAutoSet;
    }


    /**
     * @param array $paramAutoSet
     */
    public function setParamAutoSet($paramAutoSet)
    {
        $this->paramAutoSet = $paramAutoSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentByProduct
    */
    public function GetDocumentByProduct($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentByProduct = new GetDocumentByProduct();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentByProduct, $methodName)) {
                $GetDocumentByProduct->$methodName($paramValue);
            }
        }
        return $GetDocumentByProduct;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentByProductResponse
    */
    public function GetDocumentByProductResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentByProductResponse = new GetDocumentByProductResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentByProductResponse, $methodName)) {
                $GetDocumentByProductResponse->$methodName($paramValue);
            }
        }
        return $GetDocumentByProductResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Document
    */
    public function Document($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Document = new Document();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Document, $methodName)) {
                $Document->$methodName($paramValue);
            }
        }
        return $Document;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocument
    */
    public function GetDocument($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocument = new GetDocument();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocument, $methodName)) {
                $GetDocument->$methodName($paramValue);
            }
        }
        return $GetDocument;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentResponse
    */
    public function GetDocumentResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentResponse = new GetDocumentResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentResponse, $methodName)) {
                $GetDocumentResponse->$methodName($paramValue);
            }
        }
        return $GetDocumentResponse;
    }



}

?>
