<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\UserGroupWS;

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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\UserGroupWS\GetUserGroupResponse
     */
    public function setGetUserGroupResult($GetUserGroupResult)
    {
      $this->GetUserGroupResult = $GetUserGroupResult;
      return $this;
    }

}
