<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetOrder;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetOrderResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetOrderHistory;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetOrderHistoryResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\ArrayOfOrder;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetCartId;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetCartIdResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetUserCartId;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetUserCartIdResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\SubmitOrder;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\SubmitOrderResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\SubmitOrderProducts;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\ArrayOfInt;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\SubmitOrderProductsResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\SubmitOrderWithClearingAndDelivery;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\SubmitOrderWithClearingAndDeliveryResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetLatestOrdersXml;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetLatestOrdersXmlResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetOrderXml;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetOrderXmlResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\UpdateBillingAddress;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\UpdateBillingAddressResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\UpdateDelivery;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\UpdateDeliveryResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\UpdateClearing;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\UpdateClearingResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\StringArray;


class FabricateOrderWS
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
    * @return GetOrder
    */
    public function GetOrder($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOrder = new GetOrder();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOrder, $methodName)) {
                $GetOrder->$methodName($paramValue);
            }
        }
        return $GetOrder;
    }


   /**
    * @param array $paramAutoSet
    * @return GetOrderResponse
    */
    public function GetOrderResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOrderResponse = new GetOrderResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOrderResponse, $methodName)) {
                $GetOrderResponse->$methodName($paramValue);
            }
        }
        return $GetOrderResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Order
    */
    public function Order($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Order = new Order();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Order, $methodName)) {
                $Order->$methodName($paramValue);
            }
        }
        return $Order;
    }


   /**
    * @param array $paramAutoSet
    * @return GetOrderHistory
    */
    public function GetOrderHistory($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOrderHistory = new GetOrderHistory();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOrderHistory, $methodName)) {
                $GetOrderHistory->$methodName($paramValue);
            }
        }
        return $GetOrderHistory;
    }


   /**
    * @param array $paramAutoSet
    * @return GetOrderHistoryResponse
    */
    public function GetOrderHistoryResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOrderHistoryResponse = new GetOrderHistoryResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOrderHistoryResponse, $methodName)) {
                $GetOrderHistoryResponse->$methodName($paramValue);
            }
        }
        return $GetOrderHistoryResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfOrder
    */
    public function ArrayOfOrder($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfOrder = new ArrayOfOrder();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfOrder, $methodName)) {
                $ArrayOfOrder->$methodName($paramValue);
            }
        }
        return $ArrayOfOrder;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCartId
    */
    public function GetCartId($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCartId = new GetCartId();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCartId, $methodName)) {
                $GetCartId->$methodName($paramValue);
            }
        }
        return $GetCartId;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCartIdResponse
    */
    public function GetCartIdResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCartIdResponse = new GetCartIdResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCartIdResponse, $methodName)) {
                $GetCartIdResponse->$methodName($paramValue);
            }
        }
        return $GetCartIdResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUserCartId
    */
    public function GetUserCartId($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserCartId = new GetUserCartId();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserCartId, $methodName)) {
                $GetUserCartId->$methodName($paramValue);
            }
        }
        return $GetUserCartId;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUserCartIdResponse
    */
    public function GetUserCartIdResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserCartIdResponse = new GetUserCartIdResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserCartIdResponse, $methodName)) {
                $GetUserCartIdResponse->$methodName($paramValue);
            }
        }
        return $GetUserCartIdResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SubmitOrder
    */
    public function SubmitOrder($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SubmitOrder = new SubmitOrder();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SubmitOrder, $methodName)) {
                $SubmitOrder->$methodName($paramValue);
            }
        }
        return $SubmitOrder;
    }


   /**
    * @param array $paramAutoSet
    * @return SubmitOrderResponse
    */
    public function SubmitOrderResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SubmitOrderResponse = new SubmitOrderResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SubmitOrderResponse, $methodName)) {
                $SubmitOrderResponse->$methodName($paramValue);
            }
        }
        return $SubmitOrderResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SubmitOrderProducts
    */
    public function SubmitOrderProducts($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SubmitOrderProducts = new SubmitOrderProducts();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SubmitOrderProducts, $methodName)) {
                $SubmitOrderProducts->$methodName($paramValue);
            }
        }
        return $SubmitOrderProducts;
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
    * @return SubmitOrderProductsResponse
    */
    public function SubmitOrderProductsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SubmitOrderProductsResponse = new SubmitOrderProductsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SubmitOrderProductsResponse, $methodName)) {
                $SubmitOrderProductsResponse->$methodName($paramValue);
            }
        }
        return $SubmitOrderProductsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SubmitOrderWithClearingAndDelivery
    */
    public function SubmitOrderWithClearingAndDelivery($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SubmitOrderWithClearingAndDelivery = new SubmitOrderWithClearingAndDelivery();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SubmitOrderWithClearingAndDelivery, $methodName)) {
                $SubmitOrderWithClearingAndDelivery->$methodName($paramValue);
            }
        }
        return $SubmitOrderWithClearingAndDelivery;
    }


   /**
    * @param array $paramAutoSet
    * @return SubmitOrderWithClearingAndDeliveryResponse
    */
    public function SubmitOrderWithClearingAndDeliveryResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SubmitOrderWithClearingAndDeliveryResponse = new SubmitOrderWithClearingAndDeliveryResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SubmitOrderWithClearingAndDeliveryResponse, $methodName)) {
                $SubmitOrderWithClearingAndDeliveryResponse->$methodName($paramValue);
            }
        }
        return $SubmitOrderWithClearingAndDeliveryResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetLatestOrdersXml
    */
    public function GetLatestOrdersXml($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetLatestOrdersXml = new GetLatestOrdersXml();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetLatestOrdersXml, $methodName)) {
                $GetLatestOrdersXml->$methodName($paramValue);
            }
        }
        return $GetLatestOrdersXml;
    }


   /**
    * @param array $paramAutoSet
    * @return GetLatestOrdersXmlResponse
    */
    public function GetLatestOrdersXmlResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetLatestOrdersXmlResponse = new GetLatestOrdersXmlResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetLatestOrdersXmlResponse, $methodName)) {
                $GetLatestOrdersXmlResponse->$methodName($paramValue);
            }
        }
        return $GetLatestOrdersXmlResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetOrderXml
    */
    public function GetOrderXml($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOrderXml = new GetOrderXml();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOrderXml, $methodName)) {
                $GetOrderXml->$methodName($paramValue);
            }
        }
        return $GetOrderXml;
    }


   /**
    * @param array $paramAutoSet
    * @return GetOrderXmlResponse
    */
    public function GetOrderXmlResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOrderXmlResponse = new GetOrderXmlResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOrderXmlResponse, $methodName)) {
                $GetOrderXmlResponse->$methodName($paramValue);
            }
        }
        return $GetOrderXmlResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return UpdateBillingAddress
    */
    public function UpdateBillingAddress($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateBillingAddress = new UpdateBillingAddress();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateBillingAddress, $methodName)) {
                $UpdateBillingAddress->$methodName($paramValue);
            }
        }
        return $UpdateBillingAddress;
    }


   /**
    * @param array $paramAutoSet
    * @return UpdateBillingAddressResponse
    */
    public function UpdateBillingAddressResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateBillingAddressResponse = new UpdateBillingAddressResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateBillingAddressResponse, $methodName)) {
                $UpdateBillingAddressResponse->$methodName($paramValue);
            }
        }
        return $UpdateBillingAddressResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return UpdateDelivery
    */
    public function UpdateDelivery($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateDelivery = new UpdateDelivery();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateDelivery, $methodName)) {
                $UpdateDelivery->$methodName($paramValue);
            }
        }
        return $UpdateDelivery;
    }


   /**
    * @param array $paramAutoSet
    * @return UpdateDeliveryResponse
    */
    public function UpdateDeliveryResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateDeliveryResponse = new UpdateDeliveryResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateDeliveryResponse, $methodName)) {
                $UpdateDeliveryResponse->$methodName($paramValue);
            }
        }
        return $UpdateDeliveryResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return UpdateClearing
    */
    public function UpdateClearing($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateClearing = new UpdateClearing();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateClearing, $methodName)) {
                $UpdateClearing->$methodName($paramValue);
            }
        }
        return $UpdateClearing;
    }


   /**
    * @param array $paramAutoSet
    * @return UpdateClearingResponse
    */
    public function UpdateClearingResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateClearingResponse = new UpdateClearingResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateClearingResponse, $methodName)) {
                $UpdateClearingResponse->$methodName($paramValue);
            }
        }
        return $UpdateClearingResponse;
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
