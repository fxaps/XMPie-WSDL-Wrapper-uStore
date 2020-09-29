<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserGroupWS;

class GetUserGroupListForUserResponse
{

    /**
     * @var ArrayOfUserGroup $GetUserGroupListForUserResult
     */
    protected $GetUserGroupListForUserResult = null;

    /**
     * @param ArrayOfUserGroup $GetUserGroupListForUserResult
     */
    public function __construct($GetUserGroupListForUserResult = null)
    {
        $this->GetUserGroupListForUserResult = $GetUserGroupListForUserResult;
    }

    /**
     * @return ArrayOfUserGroup
     */
    public function getGetUserGroupListForUserResult()
    {
        return $this->GetUserGroupListForUserResult;
    }

    /**
     * @param ArrayOfUserGroup $GetUserGroupListForUserResult
     * @return GetUserGroupListForUserResponse
     */
    public function setGetUserGroupListForUserResult($GetUserGroupListForUserResult)
    {
        $this->GetUserGroupListForUserResult = $GetUserGroupListForUserResult;
        return $this;
    }

}
