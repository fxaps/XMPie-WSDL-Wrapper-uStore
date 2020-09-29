<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\AddressWS;

class GetAddressListByCustomerResponse
{

    /**
     * @var ArrayOfAddress $GetAddressListByCustomerResult
     */
    protected $GetAddressListByCustomerResult = null;

    /**
     * @param ArrayOfAddress $GetAddressListByCustomerResult
     */
    public function __construct($GetAddressListByCustomerResult = null)
    {
        $this->GetAddressListByCustomerResult = $GetAddressListByCustomerResult;
    }

    /**
     * @return ArrayOfAddress
     */
    public function getGetAddressListByCustomerResult()
    {
        return $this->GetAddressListByCustomerResult;
    }

    /**
     * @param ArrayOfAddress $GetAddressListByCustomerResult
     * @return GetAddressListByCustomerResponse
     */
    public function setGetAddressListByCustomerResult($GetAddressListByCustomerResult)
    {
        $this->GetAddressListByCustomerResult = $GetAddressListByCustomerResult;
        return $this;
    }

}
