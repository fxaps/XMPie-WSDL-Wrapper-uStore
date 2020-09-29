<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\AddressWS;

class AddAddressResponse
{

    /**
     * @var int $AddAddressResult
     */
    protected $AddAddressResult = null;

    /**
     * @param int $AddAddressResult
     */
    public function __construct($AddAddressResult = null)
    {
        $this->AddAddressResult = $AddAddressResult;
    }

    /**
     * @return int
     */
    public function getAddAddressResult()
    {
        return $this->AddAddressResult;
    }

    /**
     * @param int $AddAddressResult
     * @return AddAddressResponse
     */
    public function setAddAddressResult($AddAddressResult)
    {
        $this->AddAddressResult = $AddAddressResult;
        return $this;
    }

}
