<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ActualDeliveryWS;

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
     * @return GetActualDeliveryResponse
     */
    public function setGetActualDeliveryResult($GetActualDeliveryResult)
    {
        $this->GetActualDeliveryResult = $GetActualDeliveryResult;
        return $this;
    }

}
