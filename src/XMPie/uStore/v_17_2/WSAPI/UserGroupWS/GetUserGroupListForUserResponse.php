<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserGroupWS;

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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserGroupWS\GetUserGroupListForUserResponse
     */
    public function setGetUserGroupListForUserResult($GetUserGroupListForUserResult)
    {
      $this->GetUserGroupListForUserResult = $GetUserGroupListForUserResult;
      return $this;
    }

}
