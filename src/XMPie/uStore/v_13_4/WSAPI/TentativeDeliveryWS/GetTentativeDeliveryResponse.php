<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\TentativeDeliveryWS;

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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\TentativeDeliveryWS\GetTentativeDeliveryResponse
     */
    public function setGetTentativeDeliveryResult($GetTentativeDeliveryResult)
    {
      $this->GetTentativeDeliveryResult = $GetTentativeDeliveryResult;
      return $this;
    }

}
