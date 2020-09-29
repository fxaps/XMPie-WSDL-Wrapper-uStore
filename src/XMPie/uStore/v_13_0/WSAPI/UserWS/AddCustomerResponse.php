<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\UserWS;

class AddCustomerResponse
{

    /**
     * @var int $AddCustomerResult
     */
    protected $AddCustomerResult = null;

    /**
     * @param int $AddCustomerResult
     */
    public function __construct($AddCustomerResult = null)
    {
        $this->AddCustomerResult = $AddCustomerResult;
    }

    /**
     * @return int
     */
    public function getAddCustomerResult()
    {
        return $this->AddCustomerResult;
    }

    /**
     * @param int $AddCustomerResult
     * @return AddCustomerResponse
     */
    public function setAddCustomerResult($AddCustomerResult)
    {
        $this->AddCustomerResult = $AddCustomerResult;
        return $this;
    }

}
