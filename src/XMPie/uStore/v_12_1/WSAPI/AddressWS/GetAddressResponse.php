<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\AddressWS;

class GetAddressResponse
{

    /**
     * @var Address $GetAddressResult
     */
    protected $GetAddressResult = null;

    /**
     * @param Address $GetAddressResult
     */
    public function __construct($GetAddressResult = null)
    {
        $this->GetAddressResult = $GetAddressResult;
    }

    /**
     * @return Address
     */
    public function getGetAddressResult()
    {
        return $this->GetAddressResult;
    }

    /**
     * @param Address $GetAddressResult
     * @return GetAddressResponse
     */
    public function setGetAddressResult($GetAddressResult)
    {
        $this->GetAddressResult = $GetAddressResult;
        return $this;
    }

}
