<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserWS;

class GetUserByCustomerResponse
{

    /**
     * @var User $GetUserByCustomerResult
     */
    protected $GetUserByCustomerResult = null;

    /**
     * @param User $GetUserByCustomerResult
     */
    public function __construct($GetUserByCustomerResult = null)
    {
      $this->GetUserByCustomerResult = $GetUserByCustomerResult;
    }

    /**
     * @return User
     */
    public function getGetUserByCustomerResult()
    {
      return $this->GetUserByCustomerResult;
    }

    /**
     * @param User $GetUserByCustomerResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserWS\GetUserByCustomerResponse
     */
    public function setGetUserByCustomerResult($GetUserByCustomerResult)
    {
      $this->GetUserByCustomerResult = $GetUserByCustomerResult;
      return $this;
    }

}
