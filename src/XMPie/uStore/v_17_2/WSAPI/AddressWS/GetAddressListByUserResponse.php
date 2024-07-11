<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AddressWS;

class GetAddressListByUserResponse
{

    /**
     * @var ArrayOfAddress $GetAddressListByUserResult
     */
    protected $GetAddressListByUserResult = null;

    /**
     * @param ArrayOfAddress $GetAddressListByUserResult
     */
    public function __construct($GetAddressListByUserResult = null)
    {
      $this->GetAddressListByUserResult = $GetAddressListByUserResult;
    }

    /**
     * @return ArrayOfAddress
     */
    public function getGetAddressListByUserResult()
    {
      return $this->GetAddressListByUserResult;
    }

    /**
     * @param ArrayOfAddress $GetAddressListByUserResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AddressWS\GetAddressListByUserResponse
     */
    public function setGetAddressListByUserResult($GetAddressListByUserResult)
    {
      $this->GetAddressListByUserResult = $GetAddressListByUserResult;
      return $this;
    }

}
