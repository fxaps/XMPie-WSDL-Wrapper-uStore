<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\UserGroupWS;

class GetUserGroupListResponse
{

    /**
     * @var ArrayOfUserGroup $GetUserGroupListResult
     */
    protected $GetUserGroupListResult = null;

    /**
     * @param ArrayOfUserGroup $GetUserGroupListResult
     */
    public function __construct($GetUserGroupListResult = null)
    {
        $this->GetUserGroupListResult = $GetUserGroupListResult;
    }

    /**
     * @return ArrayOfUserGroup
     */
    public function getGetUserGroupListResult()
    {
        return $this->GetUserGroupListResult;
    }

    /**
     * @param ArrayOfUserGroup $GetUserGroupListResult
     * @return GetUserGroupListResponse
     */
    public function setGetUserGroupListResult($GetUserGroupListResult)
    {
        $this->GetUserGroupListResult = $GetUserGroupListResult;
        return $this;
    }

}
