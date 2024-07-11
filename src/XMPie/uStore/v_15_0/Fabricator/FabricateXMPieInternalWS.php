<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\XMPieInternalWS\GetOrderProductListByQueueJoined;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\XMPieInternalWS\GetOrderProductListByQueueJoinedResponse;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\XMPieInternalWS\ArrayOfOrderProductJoined;
use XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\XMPieInternalWS\OrderProductJoined;


class FabricateXMPieInternalWS
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
    * @return GetOrderProductListByQueueJoined
    */
    public function GetOrderProductListByQueueJoined($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOrderProductListByQueueJoined = new GetOrderProductListByQueueJoined();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOrderProductListByQueueJoined, $methodName)) {
                $GetOrderProductListByQueueJoined->$methodName($paramValue);
            }
        }
        return $GetOrderProductListByQueueJoined;
    }


   /**
    * @param array $paramAutoSet
    * @return GetOrderProductListByQueueJoinedResponse
    */
    public function GetOrderProductListByQueueJoinedResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOrderProductListByQueueJoinedResponse = new GetOrderProductListByQueueJoinedResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOrderProductListByQueueJoinedResponse, $methodName)) {
                $GetOrderProductListByQueueJoinedResponse->$methodName($paramValue);
            }
        }
        return $GetOrderProductListByQueueJoinedResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfOrderProductJoined
    */
    public function ArrayOfOrderProductJoined($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfOrderProductJoined = new ArrayOfOrderProductJoined();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfOrderProductJoined, $methodName)) {
                $ArrayOfOrderProductJoined->$methodName($paramValue);
            }
        }
        return $ArrayOfOrderProductJoined;
    }


   /**
    * @param array $paramAutoSet
    * @return OrderProductJoined
    */
    public function OrderProductJoined($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $OrderProductJoined = new OrderProductJoined();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($OrderProductJoined, $methodName)) {
                $OrderProductJoined->$methodName($paramValue);
            }
        }
        return $OrderProductJoined;
    }



}

?>
