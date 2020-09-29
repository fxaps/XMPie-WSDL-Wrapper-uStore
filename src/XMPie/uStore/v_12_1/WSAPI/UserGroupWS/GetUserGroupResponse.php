<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserGroupWS;

class GetUserGroupResponse
{

    /**
     * @var UserGroup $GetUserGroupResult
     */
    protected $GetUserGroupResult = null;

    /**
     * @param UserGroup $GetUserGroupResult
     */
    public function __construct($GetUserGroupResult = null)
    {
        $this->GetUserGroupResult = $GetUserGroupResult;
    }

    /**
     * @return UserGroup
     */
    public function getGetUserGroupResult()
    {
        return $this->GetUserGroupResult;
    }

    /**
     * @param UserGroup $GetUserGroupResult
     * @return GetUserGroupResponse
     */
    public function setGetUserGroupResult($GetUserGroupResult)
    {
        $this->GetUserGroupResult = $GetUserGroupResult;
        return $this;
    }

}
