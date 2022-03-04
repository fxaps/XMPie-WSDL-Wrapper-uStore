<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\UserWS;

class GetUserByExternalIDResponse
{

    /**
     * @var User $GetUserByExternalIDResult
     */
    protected $GetUserByExternalIDResult = null;

    /**
     * @param User $GetUserByExternalIDResult
     */
    public function __construct($GetUserByExternalIDResult = null)
    {
      $this->GetUserByExternalIDResult = $GetUserByExternalIDResult;
    }

    /**
     * @return User
     */
    public function getGetUserByExternalIDResult()
    {
      return $this->GetUserByExternalIDResult;
    }

    /**
     * @param User $GetUserByExternalIDResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\UserWS\GetUserByExternalIDResponse
     */
    public function setGetUserByExternalIDResult($GetUserByExternalIDResult)
    {
      $this->GetUserByExternalIDResult = $GetUserByExternalIDResult;
      return $this;
    }

}
