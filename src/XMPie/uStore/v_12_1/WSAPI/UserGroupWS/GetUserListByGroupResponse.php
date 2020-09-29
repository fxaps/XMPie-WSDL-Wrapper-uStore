<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserGroupWS;

class GetUserListByGroupResponse
{

    /**
     * @var ArrayOfUser $GetUserListByGroupResult
     */
    protected $GetUserListByGroupResult = null;

    /**
     * @param ArrayOfUser $GetUserListByGroupResult
     */
    public function __construct($GetUserListByGroupResult = null)
    {
        $this->GetUserListByGroupResult = $GetUserListByGroupResult;
    }

    /**
     * @return ArrayOfUser
     */
    public function getGetUserListByGroupResult()
    {
        return $this->GetUserListByGroupResult;
    }

    /**
     * @param ArrayOfUser $GetUserListByGroupResult
     * @return GetUserListByGroupResponse
     */
    public function setGetUserListByGroupResult($GetUserListByGroupResult)
    {
        $this->GetUserListByGroupResult = $GetUserListByGroupResult;
        return $this;
    }

}
