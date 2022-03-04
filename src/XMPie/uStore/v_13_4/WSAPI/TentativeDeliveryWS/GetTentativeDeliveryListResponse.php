<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\TentativeDeliveryWS;

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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\TentativeDeliveryWS\GetTentativeDeliveryListResponse
     */
    public function setGetTentativeDeliveryListResult($GetTentativeDeliveryListResult)
    {
      $this->GetTentativeDeliveryListResult = $GetTentativeDeliveryListResult;
      return $this;
    }

}
