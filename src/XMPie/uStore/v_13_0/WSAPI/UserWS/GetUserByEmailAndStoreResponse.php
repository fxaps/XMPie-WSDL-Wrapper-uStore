<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\UserWS;

class GetUserByEmailAndStoreResponse
{

    /**
     * @var User $GetUserByEmailAndStoreResult
     */
    protected $GetUserByEmailAndStoreResult = null;

    /**
     * @param User $GetUserByEmailAndStoreResult
     */
    public function __construct($GetUserByEmailAndStoreResult = null)
    {
        $this->GetUserByEmailAndStoreResult = $GetUserByEmailAndStoreResult;
    }

    /**
     * @return User
     */
    public function getGetUserByEmailAndStoreResult()
    {
        return $this->GetUserByEmailAndStoreResult;
    }

    /**
     * @param User $GetUserByEmailAndStoreResult
     * @return GetUserByEmailAndStoreResponse
     */
    public function setGetUserByEmailAndStoreResult($GetUserByEmailAndStoreResult)
    {
        $this->GetUserByEmailAndStoreResult = $GetUserByEmailAndStoreResult;
        return $this;
    }

}
