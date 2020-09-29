<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\TentativeDeliveryWS;

class GetTentativeDeliveryListResponse
{

    /**
     * @var ArrayOfTentativeDelivery $GetTentativeDeliveryListResult
     */
    protected $GetTentativeDeliveryListResult = null;

    /**
     * @param ArrayOfTentativeDelivery $GetTentativeDeliveryListResult
     */
    public function __construct($GetTentativeDeliveryListResult = null)
    {
        $this->GetTentativeDeliveryListResult = $GetTentativeDeliveryListResult;
    }

    /**
     * @return ArrayOfTentativeDelivery
     */
    public function getGetTentativeDeliveryListResult()
    {
        return $this->GetTentativeDeliveryListResult;
    }

    /**
     * @param ArrayOfTentativeDelivery $GetTentativeDeliveryListResult
     * @return GetTentativeDeliveryListResponse
     */
    public function setGetTentativeDeliveryListResult($GetTentativeDeliveryListResult)
    {
        $this->GetTentativeDeliveryListResult = $GetTentativeDeliveryListResult;
        return $this;
    }

}
