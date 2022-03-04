<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\UserWS;

class GetUserResponse
{

    /**
     * @var User $GetUserResult
     */
    protected $GetUserResult = null;

    /**
     * @param User $GetUserResult
     */
    public function __construct($GetUserResult = null)
    {
      $this->GetUserResult = $GetUserResult;
    }

    /**
     * @return User
     */
    public function getGetUserResult()
    {
      return $this->GetUserResult;
    }

    /**
     * @param User $GetUserResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\UserWS\GetUserResponse
     */
    public function setGetUserResult($GetUserResult)
    {
      $this->GetUserResult = $GetUserResult;
      return $this;
    }

}
