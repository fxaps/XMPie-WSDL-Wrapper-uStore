<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\TentativeDeliveryWS;

class GetTentativeDeliveryResponse
{

    /**
     * @var TentativeDelivery $GetTentativeDeliveryResult
     */
    protected $GetTentativeDeliveryResult = null;

    /**
     * @param TentativeDelivery $GetTentativeDeliveryResult
     */
    public function __construct($GetTentativeDeliveryResult = null)
    {
        $this->GetTentativeDeliveryResult = $GetTentativeDeliveryResult;
    }

    /**
     * @return TentativeDelivery
     */
    public function getGetTentativeDeliveryResult()
    {
        return $this->GetTentativeDeliveryResult;
    }

    /**
     * @param TentativeDelivery $GetTentativeDeliveryResult
     * @return GetTentativeDeliveryResponse
     */
    public function setGetTentativeDeliveryResult($GetTentativeDeliveryResult)
    {
        $this->GetTentativeDeliveryResult = $GetTentativeDeliveryResult;
        return $this;
    }

}