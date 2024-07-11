<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\AddressWS;

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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\AddressWS\AddAddressResponse
     */
    public function setAddAddressResult($AddAddressResult)
    {
      $this->AddAddressResult = $AddAddressResult;
      return $this;
    }

}
