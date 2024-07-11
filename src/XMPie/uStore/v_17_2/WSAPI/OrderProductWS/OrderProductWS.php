<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderProductWS;

class OrderProductWS extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetOrderProductList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\GetOrderProductList',
  'GetOrderProductListResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\GetOrderProductListResponse',
  'ArrayOfOrderProduct' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\ArrayOfOrderProduct',
  'OrderProduct' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\OrderProduct',
  'ReturnObject' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\ReturnObject',
  'CircleProjectOrderProductDetails' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\CircleProjectOrderProductDetails',
  'GetOrderProductListByQueue' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\GetOrderProductListByQueue',
  'GetOrderProductListByQueueResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\GetOrderProductListByQueueResponse',
  'GetOrderProductHistory' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\GetOrderProductHistory',
  'GetOrderProductHistoryResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\GetOrderProductHistoryResponse',
  'GetOrderProduct' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\GetOrderProduct',
  'GetOrderProductResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\GetOrderProductResponse',
  'GetProofList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\GetProofList',
  'GetProofListResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\GetProofListResponse',
  'ArrayOfProof' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\ArrayOfProof',
  'Proof' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\Proof',
  'GetDraftOrderProductList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\GetDraftOrderProductList',
  'GetDraftOrderProductListResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\GetDraftOrderProductListResponse',
  'DeleteOrderProduct' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\DeleteOrderProduct',
  'DeleteOrderProductResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\DeleteOrderProductResponse',
  'RecalculatePrice' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\RecalculatePrice',
  'RecalculatePriceResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\RecalculatePriceResponse',
  'UpdateQuantityPerRecipeint' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\UpdateQuantityPerRecipeint',
  'UpdateQuantityPerRecipeintResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\UpdateQuantityPerRecipeintResponse',
  'GetCompositeSubOrderProductsList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\GetCompositeSubOrderProductsList',
  'GetCompositeSubOrderProductsListResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\GetCompositeSubOrderProductsListResponse',
  'GetFileSubmissionDocument' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\GetFileSubmissionDocument',
  'GetFileSubmissionDocumentResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\GetFileSubmissionDocumentResponse',
  'FileSubmissionDocument' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\FileSubmissionDocument',
  'ArrayOfDocumentPage' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\ArrayOfDocumentPage',
  'DocumentPage' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\DocumentPage',
  'Reorder' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\Reorder',
  'ReorderResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\ReorderResponse',
  'MoveToQueue' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\MoveToQueue',
  'MoveToQueueResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\MoveToQueueResponse',
  'ListOrderProductJobStatus' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\ListOrderProductJobStatus',
  'ArrayOfInt' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\ArrayOfInt',
  'ListOrderProductJobStatusResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\ListOrderProductJobStatusResponse',
  'CreateOrderProduct' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\CreateOrderProduct',
  'CreateOrderProductResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\CreateOrderProductResponse',
  'AddOrderProductToCart' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\AddOrderProductToCart',
  'AddOrderProductToCartResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\AddOrderProductToCartResponse',
  'AddQuantityOfOrderProductToCart' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\AddQuantityOfOrderProductToCart',
  'AddQuantityOfOrderProductToCartResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\AddQuantityOfOrderProductToCartResponse',
  'DecryptOrderProductId' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\DecryptOrderProductId',
  'DecryptOrderProductIdResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\DecryptOrderProductIdResponse',
  'SetDelivery' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\SetDelivery',
  'SetDeliveryResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\SetDeliveryResponse',
  'StringArray' => 'XMPieWsdlClient\\XMPie\\uStore\\v_17_2\\WSAPI\\OrderProductWS\\StringArray',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @throws SoapFault
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'http://localhost/ustorewsapi/OrderProductWS.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns a list of Order Products for the given order.
     *
     * @param GetOrderProductList $parameters
     * @return GetOrderProductListResponse
     */
    public function GetOrderProductList(GetOrderProductList $parameters)
    {
      return $this->__soapCall('GetOrderProductList', array($parameters));
    }

    /**
     * Returns all the Order Products that are in the given queue.
     *
     * @param GetOrderProductListByQueue $parameters
     * @return GetOrderProductListByQueueResponse
     */
    public function GetOrderProductListByQueue(GetOrderProductListByQueue $parameters)
    {
      return $this->__soapCall('GetOrderProductListByQueue', array($parameters));
    }

    /**
     * Returns the data of the order products which were checked out by the given user in the given store
     *
     * @param GetOrderProductHistory $parameters
     * @return GetOrderProductHistoryResponse
     */
    public function GetOrderProductHistory(GetOrderProductHistory $parameters)
    {
      return $this->__soapCall('GetOrderProductHistory', array($parameters));
    }

    /**
     * Returns the data of the given Order Product.
     *
     * @param GetOrderProduct $parameters
     * @return GetOrderProductResponse
     */
    public function GetOrderProduct(GetOrderProduct $parameters)
    {
      return $this->__soapCall('GetOrderProduct', array($parameters));
    }

    /**
     * Returns a list of all the Proof jobs that were made for the given Order Product.
     *
     * @param GetProofList $parameters
     * @return GetProofListResponse
     */
    public function GetProofList(GetProofList $parameters)
    {
      return $this->__soapCall('GetProofList', array($parameters));
    }

    /**
     * Returns a list of the latest drafts made by the given user in the given store.
     *
     * @param GetDraftOrderProductList $parameters
     * @return GetDraftOrderProductListResponse
     */
    public function GetDraftOrderProductList(GetDraftOrderProductList $parameters)
    {
      return $this->__soapCall('GetDraftOrderProductList', array($parameters));
    }

    /**
     * eletes the given order product
     *
     * @param DeleteOrderProduct $parameters
     * @return DeleteOrderProductResponse
     */
    public function DeleteOrderProduct(DeleteOrderProduct $parameters)
    {
      return $this->__soapCall('DeleteOrderProduct', array($parameters));
    }

    /**
     * This method recalculates the prices of the given order product
     *
     * @param RecalculatePrice $parameters
     * @return RecalculatePriceResponse
     */
    public function RecalculatePrice(RecalculatePrice $parameters)
    {
      return $this->__soapCall('RecalculatePrice', array($parameters));
    }

    /**
     * This method updates the quantity per recipient and recalculates prices
     *
     * @param UpdateQuantityPerRecipeint $parameters
     * @return UpdateQuantityPerRecipeintResponse
     */
    public function UpdateQuantityPerRecipeint(UpdateQuantityPerRecipeint $parameters)
    {
      return $this->__soapCall('UpdateQuantityPerRecipeint', array($parameters));
    }

    /**
     * Returns the Sub Order Products of an order product of type 'composite'
     *
     * @param GetCompositeSubOrderProductsList $parameters
     * @return GetCompositeSubOrderProductsListResponse
     */
    public function GetCompositeSubOrderProductsList(GetCompositeSubOrderProductsList $parameters)
    {
      return $this->__soapCall('GetCompositeSubOrderProductsList', array($parameters));
    }

    /**
     * Returns the File Submission document of the component Order Product.
     *
     * @param GetFileSubmissionDocument $parameters
     * @return GetFileSubmissionDocumentResponse
     */
    public function GetFileSubmissionDocument(GetFileSubmissionDocument $parameters)
    {
      return $this->__soapCall('GetFileSubmissionDocument', array($parameters));
    }

    /**
     * Reorders the given order product and place it in the cart
     *
     * @param Reorder $parameters
     * @return ReorderResponse
     */
    public function Reorder(Reorder $parameters)
    {
      return $this->__soapCall('Reorder', array($parameters));
    }

    /**
     * Move the given order product to the given queue and invokes the relevant trigger.
     *
     * @param MoveToQueue $parameters
     * @return MoveToQueueResponse
     */
    public function MoveToQueue(MoveToQueue $parameters)
    {
      return $this->__soapCall('MoveToQueue', array($parameters));
    }

    /**
     * Checks the production job status of each given order product
     *
     * @param ListOrderProductJobStatus $parameters
     * @return ListOrderProductJobStatusResponse
     */
    public function ListOrderProductJobStatus(ListOrderProductJobStatus $parameters)
    {
      return $this->__soapCall('ListOrderProductJobStatus', array($parameters));
    }

    /**
     * Creates an order product for the given product and given cart.
     *
     * @param CreateOrderProduct $parameters
     * @return CreateOrderProductResponse
     */
    public function CreateOrderProduct(CreateOrderProduct $parameters)
    {
      return $this->__soapCall('CreateOrderProduct', array($parameters));
    }

    /**
     * Adds an order product (item) to the cart
     *
     * @param AddOrderProductToCart $parameters
     * @return AddOrderProductToCartResponse
     */
    public function AddOrderProductToCart(AddOrderProductToCart $parameters)
    {
      return $this->__soapCall('AddOrderProductToCart', array($parameters));
    }

    /**
     * Adds an order product (item) to the cart, at given quantity
     *
     * @param AddQuantityOfOrderProductToCart $parameters
     * @return AddQuantityOfOrderProductToCartResponse
     */
    public function AddQuantityOfOrderProductToCart(AddQuantityOfOrderProductToCart $parameters)
    {
      return $this->__soapCall('AddQuantityOfOrderProductToCart', array($parameters));
    }

    /**
     * Decrypts a cipher data string that holds an encrypted order product ID.
     *
     * @param DecryptOrderProductId $parameters
     * @return DecryptOrderProductIdResponse
     */
    public function DecryptOrderProductId(DecryptOrderProductId $parameters)
    {
      return $this->__soapCall('DecryptOrderProductId', array($parameters));
    }

    /**
     * Set delivery for order product
     *
     * @param SetDelivery $parameters
     * @return SetDeliveryResponse
     */
    public function SetDelivery(SetDelivery $parameters)
    {
      return $this->__soapCall('SetDelivery', array($parameters));
    }

}
