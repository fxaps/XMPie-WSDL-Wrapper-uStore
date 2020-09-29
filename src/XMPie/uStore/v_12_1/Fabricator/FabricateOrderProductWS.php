<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\GetOrderProductList;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\GetOrderProductListResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\ArrayOfOrderProduct;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\OrderProduct;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\CircleProjectOrderProductDetails;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\GetOrderProductListByQueue;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\GetOrderProductListByQueueResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\GetOrderProductHistory;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\GetOrderProductHistoryResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\GetOrderProduct;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\GetOrderProductResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\GetProofList;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\GetProofListResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\ArrayOfProof;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\Proof;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\GetDraftOrderProductList;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\GetDraftOrderProductListResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\DeleteOrderProduct;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\DeleteOrderProductResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\RecalculatePrice;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\RecalculatePriceResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\UpdateQuantityPerRecipeint;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\UpdateQuantityPerRecipeintResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\GetCompositeSubOrderProductsList;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\GetCompositeSubOrderProductsListResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\GetFileSubmissionDocument;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\GetFileSubmissionDocumentResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\FileSubmissionDocument;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\ArrayOfDocumentPage;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\DocumentPage;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\Reorder;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\ReorderResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\MoveToQueue;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\MoveToQueueResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\ListOrderProductJobStatus;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\ArrayOfInt;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\ListOrderProductJobStatusResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\CreateOrderProduct;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\CreateOrderProductResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\AddOrderProductToCart;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\AddOrderProductToCartResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\AddQuantityOfOrderProductToCart;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\AddQuantityOfOrderProductToCartResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\DecryptOrderProductId;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\DecryptOrderProductIdResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\SetDelivery;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\SetDeliveryResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS\StringArray;


class FabricateOrderProductWS
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
     * @return GetOrderProductList
     */
    public function GetOrderProductList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOrderProductList = new GetOrderProductList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOrderProductList, $methodName)) {
                $GetOrderProductList->$methodName($paramValue);
            }
        }
        return $GetOrderProductList;
    }


    /**
     * @param array $paramAutoSet
     * @return GetOrderProductListResponse
     */
    public function GetOrderProductListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOrderProductListResponse = new GetOrderProductListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOrderProductListResponse, $methodName)) {
                $GetOrderProductListResponse->$methodName($paramValue);
            }
        }
        return $GetOrderProductListResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return ArrayOfOrderProduct
     */
    public function ArrayOfOrderProduct($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfOrderProduct = new ArrayOfOrderProduct();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfOrderProduct, $methodName)) {
                $ArrayOfOrderProduct->$methodName($paramValue);
            }
        }
        return $ArrayOfOrderProduct;
    }


    /**
     * @param array $paramAutoSet
     * @return OrderProduct
     */
    public function OrderProduct($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $OrderProduct = new OrderProduct();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($OrderProduct, $methodName)) {
                $OrderProduct->$methodName($paramValue);
            }
        }
        return $OrderProduct;
    }


    /**
     * @param array $paramAutoSet
     * @return CircleProjectOrderProductDetails
     */
    public function CircleProjectOrderProductDetails($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CircleProjectOrderProductDetails = new CircleProjectOrderProductDetails();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CircleProjectOrderProductDetails, $methodName)) {
                $CircleProjectOrderProductDetails->$methodName($paramValue);
            }
        }
        return $CircleProjectOrderProductDetails;
    }


    /**
     * @param array $paramAutoSet
     * @return GetOrderProductListByQueue
     */
    public function GetOrderProductListByQueue($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOrderProductListByQueue = new GetOrderProductListByQueue();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOrderProductListByQueue, $methodName)) {
                $GetOrderProductListByQueue->$methodName($paramValue);
            }
        }
        return $GetOrderProductListByQueue;
    }


    /**
     * @param array $paramAutoSet
     * @return GetOrderProductListByQueueResponse
     */
    public function GetOrderProductListByQueueResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOrderProductListByQueueResponse = new GetOrderProductListByQueueResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOrderProductListByQueueResponse, $methodName)) {
                $GetOrderProductListByQueueResponse->$methodName($paramValue);
            }
        }
        return $GetOrderProductListByQueueResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return GetOrderProductHistory
     */
    public function GetOrderProductHistory($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOrderProductHistory = new GetOrderProductHistory();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOrderProductHistory, $methodName)) {
                $GetOrderProductHistory->$methodName($paramValue);
            }
        }
        return $GetOrderProductHistory;
    }


    /**
     * @param array $paramAutoSet
     * @return GetOrderProductHistoryResponse
     */
    public function GetOrderProductHistoryResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOrderProductHistoryResponse = new GetOrderProductHistoryResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOrderProductHistoryResponse, $methodName)) {
                $GetOrderProductHistoryResponse->$methodName($paramValue);
            }
        }
        return $GetOrderProductHistoryResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return GetOrderProduct
     */
    public function GetOrderProduct($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOrderProduct = new GetOrderProduct();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOrderProduct, $methodName)) {
                $GetOrderProduct->$methodName($paramValue);
            }
        }
        return $GetOrderProduct;
    }


    /**
     * @param array $paramAutoSet
     * @return GetOrderProductResponse
     */
    public function GetOrderProductResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOrderProductResponse = new GetOrderProductResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOrderProductResponse, $methodName)) {
                $GetOrderProductResponse->$methodName($paramValue);
            }
        }
        return $GetOrderProductResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return GetProofList
     */
    public function GetProofList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProofList = new GetProofList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProofList, $methodName)) {
                $GetProofList->$methodName($paramValue);
            }
        }
        return $GetProofList;
    }


    /**
     * @param array $paramAutoSet
     * @return GetProofListResponse
     */
    public function GetProofListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProofListResponse = new GetProofListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProofListResponse, $methodName)) {
                $GetProofListResponse->$methodName($paramValue);
            }
        }
        return $GetProofListResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return ArrayOfProof
     */
    public function ArrayOfProof($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfProof = new ArrayOfProof();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfProof, $methodName)) {
                $ArrayOfProof->$methodName($paramValue);
            }
        }
        return $ArrayOfProof;
    }


    /**
     * @param array $paramAutoSet
     * @return Proof
     */
    public function Proof($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Proof = new Proof();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Proof, $methodName)) {
                $Proof->$methodName($paramValue);
            }
        }
        return $Proof;
    }


    /**
     * @param array $paramAutoSet
     * @return GetDraftOrderProductList
     */
    public function GetDraftOrderProductList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDraftOrderProductList = new GetDraftOrderProductList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDraftOrderProductList, $methodName)) {
                $GetDraftOrderProductList->$methodName($paramValue);
            }
        }
        return $GetDraftOrderProductList;
    }


    /**
     * @param array $paramAutoSet
     * @return GetDraftOrderProductListResponse
     */
    public function GetDraftOrderProductListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDraftOrderProductListResponse = new GetDraftOrderProductListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDraftOrderProductListResponse, $methodName)) {
                $GetDraftOrderProductListResponse->$methodName($paramValue);
            }
        }
        return $GetDraftOrderProductListResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return DeleteOrderProduct
     */
    public function DeleteOrderProduct($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteOrderProduct = new DeleteOrderProduct();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteOrderProduct, $methodName)) {
                $DeleteOrderProduct->$methodName($paramValue);
            }
        }
        return $DeleteOrderProduct;
    }


    /**
     * @param array $paramAutoSet
     * @return DeleteOrderProductResponse
     */
    public function DeleteOrderProductResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteOrderProductResponse = new DeleteOrderProductResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteOrderProductResponse, $methodName)) {
                $DeleteOrderProductResponse->$methodName($paramValue);
            }
        }
        return $DeleteOrderProductResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return RecalculatePrice
     */
    public function RecalculatePrice($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RecalculatePrice = new RecalculatePrice();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RecalculatePrice, $methodName)) {
                $RecalculatePrice->$methodName($paramValue);
            }
        }
        return $RecalculatePrice;
    }


    /**
     * @param array $paramAutoSet
     * @return RecalculatePriceResponse
     */
    public function RecalculatePriceResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RecalculatePriceResponse = new RecalculatePriceResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RecalculatePriceResponse, $methodName)) {
                $RecalculatePriceResponse->$methodName($paramValue);
            }
        }
        return $RecalculatePriceResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return UpdateQuantityPerRecipeint
     */
    public function UpdateQuantityPerRecipeint($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateQuantityPerRecipeint = new UpdateQuantityPerRecipeint();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateQuantityPerRecipeint, $methodName)) {
                $UpdateQuantityPerRecipeint->$methodName($paramValue);
            }
        }
        return $UpdateQuantityPerRecipeint;
    }


    /**
     * @param array $paramAutoSet
     * @return UpdateQuantityPerRecipeintResponse
     */
    public function UpdateQuantityPerRecipeintResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateQuantityPerRecipeintResponse = new UpdateQuantityPerRecipeintResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateQuantityPerRecipeintResponse, $methodName)) {
                $UpdateQuantityPerRecipeintResponse->$methodName($paramValue);
            }
        }
        return $UpdateQuantityPerRecipeintResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return GetCompositeSubOrderProductsList
     */
    public function GetCompositeSubOrderProductsList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCompositeSubOrderProductsList = new GetCompositeSubOrderProductsList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCompositeSubOrderProductsList, $methodName)) {
                $GetCompositeSubOrderProductsList->$methodName($paramValue);
            }
        }
        return $GetCompositeSubOrderProductsList;
    }


    /**
     * @param array $paramAutoSet
     * @return GetCompositeSubOrderProductsListResponse
     */
    public function GetCompositeSubOrderProductsListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCompositeSubOrderProductsListResponse = new GetCompositeSubOrderProductsListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCompositeSubOrderProductsListResponse, $methodName)) {
                $GetCompositeSubOrderProductsListResponse->$methodName($paramValue);
            }
        }
        return $GetCompositeSubOrderProductsListResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return GetFileSubmissionDocument
     */
    public function GetFileSubmissionDocument($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFileSubmissionDocument = new GetFileSubmissionDocument();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFileSubmissionDocument, $methodName)) {
                $GetFileSubmissionDocument->$methodName($paramValue);
            }
        }
        return $GetFileSubmissionDocument;
    }


    /**
     * @param array $paramAutoSet
     * @return GetFileSubmissionDocumentResponse
     */
    public function GetFileSubmissionDocumentResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFileSubmissionDocumentResponse = new GetFileSubmissionDocumentResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFileSubmissionDocumentResponse, $methodName)) {
                $GetFileSubmissionDocumentResponse->$methodName($paramValue);
            }
        }
        return $GetFileSubmissionDocumentResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return FileSubmissionDocument
     */
    public function FileSubmissionDocument($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $FileSubmissionDocument = new FileSubmissionDocument();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($FileSubmissionDocument, $methodName)) {
                $FileSubmissionDocument->$methodName($paramValue);
            }
        }
        return $FileSubmissionDocument;
    }


    /**
     * @param array $paramAutoSet
     * @return ArrayOfDocumentPage
     */
    public function ArrayOfDocumentPage($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfDocumentPage = new ArrayOfDocumentPage();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfDocumentPage, $methodName)) {
                $ArrayOfDocumentPage->$methodName($paramValue);
            }
        }
        return $ArrayOfDocumentPage;
    }


    /**
     * @param array $paramAutoSet
     * @return DocumentPage
     */
    public function DocumentPage($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DocumentPage = new DocumentPage();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DocumentPage, $methodName)) {
                $DocumentPage->$methodName($paramValue);
            }
        }
        return $DocumentPage;
    }


    /**
     * @param array $paramAutoSet
     * @return Reorder
     */
    public function Reorder($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Reorder = new Reorder();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Reorder, $methodName)) {
                $Reorder->$methodName($paramValue);
            }
        }
        return $Reorder;
    }


    /**
     * @param array $paramAutoSet
     * @return ReorderResponse
     */
    public function ReorderResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReorderResponse = new ReorderResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReorderResponse, $methodName)) {
                $ReorderResponse->$methodName($paramValue);
            }
        }
        return $ReorderResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return MoveToQueue
     */
    public function MoveToQueue($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $MoveToQueue = new MoveToQueue();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($MoveToQueue, $methodName)) {
                $MoveToQueue->$methodName($paramValue);
            }
        }
        return $MoveToQueue;
    }


    /**
     * @param array $paramAutoSet
     * @return MoveToQueueResponse
     */
    public function MoveToQueueResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $MoveToQueueResponse = new MoveToQueueResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($MoveToQueueResponse, $methodName)) {
                $MoveToQueueResponse->$methodName($paramValue);
            }
        }
        return $MoveToQueueResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return ListOrderProductJobStatus
     */
    public function ListOrderProductJobStatus($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ListOrderProductJobStatus = new ListOrderProductJobStatus();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ListOrderProductJobStatus, $methodName)) {
                $ListOrderProductJobStatus->$methodName($paramValue);
            }
        }
        return $ListOrderProductJobStatus;
    }


    /**
     * @param array $paramAutoSet
     * @return ArrayOfInt
     */
    public function ArrayOfInt($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfInt = new ArrayOfInt();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfInt, $methodName)) {
                $ArrayOfInt->$methodName($paramValue);
            }
        }
        return $ArrayOfInt;
    }


    /**
     * @param array $paramAutoSet
     * @return ListOrderProductJobStatusResponse
     */
    public function ListOrderProductJobStatusResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ListOrderProductJobStatusResponse = new ListOrderProductJobStatusResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ListOrderProductJobStatusResponse, $methodName)) {
                $ListOrderProductJobStatusResponse->$methodName($paramValue);
            }
        }
        return $ListOrderProductJobStatusResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return CreateOrderProduct
     */
    public function CreateOrderProduct($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateOrderProduct = new CreateOrderProduct();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateOrderProduct, $methodName)) {
                $CreateOrderProduct->$methodName($paramValue);
            }
        }
        return $CreateOrderProduct;
    }


    /**
     * @param array $paramAutoSet
     * @return CreateOrderProductResponse
     */
    public function CreateOrderProductResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateOrderProductResponse = new CreateOrderProductResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateOrderProductResponse, $methodName)) {
                $CreateOrderProductResponse->$methodName($paramValue);
            }
        }
        return $CreateOrderProductResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return AddOrderProductToCart
     */
    public function AddOrderProductToCart($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddOrderProductToCart = new AddOrderProductToCart();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddOrderProductToCart, $methodName)) {
                $AddOrderProductToCart->$methodName($paramValue);
            }
        }
        return $AddOrderProductToCart;
    }


    /**
     * @param array $paramAutoSet
     * @return AddOrderProductToCartResponse
     */
    public function AddOrderProductToCartResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddOrderProductToCartResponse = new AddOrderProductToCartResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddOrderProductToCartResponse, $methodName)) {
                $AddOrderProductToCartResponse->$methodName($paramValue);
            }
        }
        return $AddOrderProductToCartResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return AddQuantityOfOrderProductToCart
     */
    public function AddQuantityOfOrderProductToCart($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddQuantityOfOrderProductToCart = new AddQuantityOfOrderProductToCart();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddQuantityOfOrderProductToCart, $methodName)) {
                $AddQuantityOfOrderProductToCart->$methodName($paramValue);
            }
        }
        return $AddQuantityOfOrderProductToCart;
    }


    /**
     * @param array $paramAutoSet
     * @return AddQuantityOfOrderProductToCartResponse
     */
    public function AddQuantityOfOrderProductToCartResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddQuantityOfOrderProductToCartResponse = new AddQuantityOfOrderProductToCartResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddQuantityOfOrderProductToCartResponse, $methodName)) {
                $AddQuantityOfOrderProductToCartResponse->$methodName($paramValue);
            }
        }
        return $AddQuantityOfOrderProductToCartResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return DecryptOrderProductId
     */
    public function DecryptOrderProductId($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DecryptOrderProductId = new DecryptOrderProductId();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DecryptOrderProductId, $methodName)) {
                $DecryptOrderProductId->$methodName($paramValue);
            }
        }
        return $DecryptOrderProductId;
    }


    /**
     * @param array $paramAutoSet
     * @return DecryptOrderProductIdResponse
     */
    public function DecryptOrderProductIdResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DecryptOrderProductIdResponse = new DecryptOrderProductIdResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DecryptOrderProductIdResponse, $methodName)) {
                $DecryptOrderProductIdResponse->$methodName($paramValue);
            }
        }
        return $DecryptOrderProductIdResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return SetDelivery
     */
    public function SetDelivery($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetDelivery = new SetDelivery();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetDelivery, $methodName)) {
                $SetDelivery->$methodName($paramValue);
            }
        }
        return $SetDelivery;
    }


    /**
     * @param array $paramAutoSet
     * @return SetDeliveryResponse
     */
    public function SetDeliveryResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetDeliveryResponse = new SetDeliveryResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetDeliveryResponse, $methodName)) {
                $SetDeliveryResponse->$methodName($paramValue);
            }
        }
        return $SetDeliveryResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return StringArray
     */
    public function StringArray($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $StringArray = new StringArray();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($StringArray, $methodName)) {
                $StringArray->$methodName($paramValue);
            }
        }
        return $StringArray;
    }


}

?>
