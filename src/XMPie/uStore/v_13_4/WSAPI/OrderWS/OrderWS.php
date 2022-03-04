<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\OrderWS;

class OrderWS extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetOrder' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\GetOrder',
  'GetOrderResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\GetOrderResponse',
  'Order' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\Order',
  'ReturnObject' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\ReturnObject',
  'GetOrderHistory' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\GetOrderHistory',
  'GetOrderHistoryResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\GetOrderHistoryResponse',
  'ArrayOfOrder' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\ArrayOfOrder',
  'GetCartId' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\GetCartId',
  'GetCartIdResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\GetCartIdResponse',
  'GetUserCartId' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\GetUserCartId',
  'GetUserCartIdResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\GetUserCartIdResponse',
  'SubmitOrder' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\SubmitOrder',
  'SubmitOrderResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\SubmitOrderResponse',
  'SubmitOrderProducts' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\SubmitOrderProducts',
  'ArrayOfInt' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\ArrayOfInt',
  'SubmitOrderProductsResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\SubmitOrderProductsResponse',
  'SubmitOrderWithClearingAndDelivery' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\SubmitOrderWithClearingAndDelivery',
  'SubmitOrderWithClearingAndDeliveryResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\SubmitOrderWithClearingAndDeliveryResponse',
  'GetLatestOrdersXml' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\GetLatestOrdersXml',
  'GetLatestOrdersXmlResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\GetLatestOrdersXmlResponse',
  'GetOrderXml' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\GetOrderXml',
  'GetOrderXmlResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\GetOrderXmlResponse',
  'UpdateBillingAddress' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\UpdateBillingAddress',
  'UpdateBillingAddressResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\UpdateBillingAddressResponse',
  'UpdateDelivery' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\UpdateDelivery',
  'UpdateDeliveryResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\UpdateDeliveryResponse',
  'UpdateClearing' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\UpdateClearing',
  'UpdateClearingResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\UpdateClearingResponse',
  'StringArray' => 'XMPieWsdlClient\\XMPie\\uStore\\v_13_4\\WSAPI\\OrderWS\\StringArray',
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
        $wsdl = 'http://localhost/ustorewsapi/OrderWS.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns the data of the given order, excluding the Order Products.
     *
     * @param GetOrder $parameters
     * @return GetOrderResponse
     */
    public function GetOrder(GetOrder $parameters)
    {
      return $this->__soapCall('GetOrder', array($parameters));
    }

    /**
     * Returns the list of data of all orders made by the given user in the given store, apart for the user's cart or save for later orders.
     *
     * @param GetOrderHistory $parameters
     * @return GetOrderHistoryResponse
     */
    public function GetOrderHistory(GetOrderHistory $parameters)
    {
      return $this->__soapCall('GetOrderHistory', array($parameters));
    }

    /**
     * Returns the ID of the cart order of the given customer in the given store
     *
     * @param GetCartId $parameters
     * @return GetCartIdResponse
     */
    public function GetCartId(GetCartId $parameters)
    {
      return $this->__soapCall('GetCartId', array($parameters));
    }

    /**
     * Returns the ID of the cart order of the given user in the given store
     *
     * @param GetUserCartId $parameters
     * @return GetUserCartIdResponse
     */
    public function GetUserCartId(GetUserCartId $parameters)
    {
      return $this->__soapCall('GetUserCartId', array($parameters));
    }

    /**
     * Submits the given order, using Invoice clearing and Void delivery.
     *
     * @param SubmitOrder $parameters
     * @return SubmitOrderResponse
     */
    public function SubmitOrder(SubmitOrder $parameters)
    {
      return $this->__soapCall('SubmitOrder', array($parameters));
    }

    /**
     * Submits the given Order Products with the Order they belong. The passed orderId is deprecated and is not taken into account. All other order products that belong to the same order are moved to the next cart. Uses Invoice clearing and Void delivery.
     *
     * @param SubmitOrderProducts $parameters
     * @return SubmitOrderProductsResponse
     */
    public function SubmitOrderProducts(SubmitOrderProducts $parameters)
    {
      return $this->__soapCall('SubmitOrderProducts', array($parameters));
    }

    /**
     * Submits the given order, assuming that clearing results and delivery info are already set in the order.
     *
     * @param SubmitOrderWithClearingAndDelivery $parameters
     * @return SubmitOrderWithClearingAndDeliveryResponse
     */
    public function SubmitOrderWithClearingAndDelivery(SubmitOrderWithClearingAndDelivery $parameters)
    {
      return $this->__soapCall('SubmitOrderWithClearingAndDelivery', array($parameters));
    }

    /**
     * The WS will return all submitted orders that are greater than (not equal to) the submissionID.
     *
     * @param GetLatestOrdersXml $parameters
     * @return GetLatestOrdersXmlResponse
     */
    public function GetLatestOrdersXml(GetLatestOrdersXml $parameters)
    {
      return $this->__soapCall('GetLatestOrdersXml', array($parameters));
    }

    /**
     * Retrieves order details in XML format.
     *
     * @param GetOrderXml $parameters
     * @return GetOrderXmlResponse
     */
    public function GetOrderXml(GetOrderXml $parameters)
    {
      return $this->__soapCall('GetOrderXml', array($parameters));
    }

    /**
     * Updates the billing address of the given order.
     *
     * @param UpdateBillingAddress $parameters
     * @return UpdateBillingAddressResponse
     */
    public function UpdateBillingAddress(UpdateBillingAddress $parameters)
    {
      return $this->__soapCall('UpdateBillingAddress', array($parameters));
    }

    /**
     * Updates the delivery info of the given order, prior to order submission.
     *
     * @param UpdateDelivery $parameters
     * @return UpdateDeliveryResponse
     */
    public function UpdateDelivery(UpdateDelivery $parameters)
    {
      return $this->__soapCall('UpdateDelivery', array($parameters));
    }

    /**
     * Updates the clearing info of the given order, after payment, prior to order submission.
     *
     * @param UpdateClearing $parameters
     * @return UpdateClearingResponse
     */
    public function UpdateClearing(UpdateClearing $parameters)
    {
      return $this->__soapCall('UpdateClearing', array($parameters));
    }

}
