<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\UserWS;

class GetUserByEmailResponse
{

    /**
     * @var User $GetUserByEmailResult
     */
    protected $GetUserByEmailResult = null;

    /**
     * @param User $GetUserByEmailResult
     */
    public function __construct($GetUserByEmailResult = null)
    {
        $this->GetUserByEmailResult = $GetUserByEmailResult;
    }

    /**
     * @return User
     */
    public function getGetUserByEmailResult()
    {
        return $this->GetUserByEmailResult;
    }

    /**
     * @param User $GetUserByEmailResult
     * @return GetUserByEmailResponse
     */
    public function setGetUserByEmailResult($GetUserByEmailResult)
    {
        $this->GetUserByEmailResult = $GetUserByEmailResult;
        return $this;
    }

}
