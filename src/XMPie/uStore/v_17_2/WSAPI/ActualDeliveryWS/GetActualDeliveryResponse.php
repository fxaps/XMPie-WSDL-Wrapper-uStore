<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ActualDeliveryWS;

class GetActualDeliveryResponse
{

    /**
     * @var ActualDelivery $GetActualDeliveryResult
     */
    protected $GetActualDeliveryResult = null;

    /**
     * @param ActualDelivery $GetActualDeliveryResult
     */
    public function __construct($GetActualDeliveryResult = null)
    {
      $this->GetActualDeliveryResult = $GetActualDeliveryResult;
    }

    /**
     * @return ActualDelivery
     */
    public function getGetActualDeliveryResult()
    {
      return $this->GetActualDeliveryResult;
    }

    /**
     * @param ActualDelivery $GetActualDeliveryResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ActualDeliveryWS\GetActualDeliveryResponse
     */
    public function setGetActualDeliveryResult($GetActualDeliveryResult)
    {
      $this->GetActualDeliveryResult = $GetActualDeliveryResult;
      return $this;
    }

}
