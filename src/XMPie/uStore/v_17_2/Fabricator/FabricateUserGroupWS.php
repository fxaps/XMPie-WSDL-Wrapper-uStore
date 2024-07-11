<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserGroupWS\GetUserGroupList;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserGroupWS\GetUserGroupListResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserGroupWS\ArrayOfUserGroup;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserGroupWS\UserGroup;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserGroupWS\GetUserGroupListForUser;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserGroupWS\GetUserGroupListForUserResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserGroupWS\GetUserGroup;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserGroupWS\GetUserGroupResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserGroupWS\GetUserListByGroup;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserGroupWS\GetUserListByGroupResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserGroupWS\ArrayOfUser;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserGroupWS\User;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserGroupWS\AddUserToGroup;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserGroupWS\AddUserToGroupResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserGroupWS\RemoveUserFromGroup;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserGroupWS\RemoveUserFromGroupResponse;


class FabricateUserGroupWS
{
    private $paramAutoSet;

    /**
     * Constructor.
     *
     * @param array $paramAutoSet
     */
    public function __construct($paramAutoSet = [])
    {
        $this->setParamAutoSet($paramAutoSet);
    }


    /**
     * @return array
     */
    public function getParamAutoSet()
    {
        return $this->paramAutoSet;
    }


    /**
     * @param array $paramAutoSet
     */
    public function setParamAutoSet($paramAutoSet)
    {
        $this->paramAutoSet = $paramAutoSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUserGroupList
    */
    public function GetUserGroupList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserGroupList = new GetUserGroupList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserGroupList, $methodName)) {
                $GetUserGroupList->$methodName($paramValue);
            }
        }
        return $GetUserGroupList;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUserGroupListResponse
    */
    public function GetUserGroupListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserGroupListResponse = new GetUserGroupListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserGroupListResponse, $methodName)) {
                $GetUserGroupListResponse->$methodName($paramValue);
            }
        }
        return $GetUserGroupListResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfUserGroup
    */
    public function ArrayOfUserGroup($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfUserGroup = new ArrayOfUserGroup();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfUserGroup, $methodName)) {
                $ArrayOfUserGroup->$methodName($paramValue);
            }
        }
        return $ArrayOfUserGroup;
    }


   /**
    * @param array $paramAutoSet
    * @return UserGroup
    */
    public function UserGroup($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UserGroup = new UserGroup();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UserGroup, $methodName)) {
                $UserGroup->$methodName($paramValue);
            }
        }
        return $UserGroup;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUserGroupListForUser
    */
    public function GetUserGroupListForUser($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserGroupListForUser = new GetUserGroupListForUser();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserGroupListForUser, $methodName)) {
                $GetUserGroupListForUser->$methodName($paramValue);
            }
        }
        return $GetUserGroupListForUser;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUserGroupListForUserResponse
    */
    public function GetUserGroupListForUserResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserGroupListForUserResponse = new GetUserGroupListForUserResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserGroupListForUserResponse, $methodName)) {
                $GetUserGroupListForUserResponse->$methodName($paramValue);
            }
        }
        return $GetUserGroupListForUserResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUserGroup
    */
    public function GetUserGroup($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserGroup = new GetUserGroup();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserGroup, $methodName)) {
                $GetUserGroup->$methodName($paramValue);
            }
        }
        return $GetUserGroup;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUserGroupResponse
    */
    public function GetUserGroupResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserGroupResponse = new GetUserGroupResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserGroupResponse, $methodName)) {
                $GetUserGroupResponse->$methodName($paramValue);
            }
        }
        return $GetUserGroupResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUserListByGroup
    */
    public function GetUserListByGroup($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserListByGroup = new GetUserListByGroup();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserListByGroup, $methodName)) {
                $GetUserListByGroup->$methodName($paramValue);
            }
        }
        return $GetUserListByGroup;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUserListByGroupResponse
    */
    public function GetUserListByGroupResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserListByGroupResponse = new GetUserListByGroupResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserListByGroupResponse, $methodName)) {
                $GetUserListByGroupResponse->$methodName($paramValue);
            }
        }
        return $GetUserListByGroupResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfUser
    */
    public function ArrayOfUser($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfUser = new ArrayOfUser();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfUser, $methodName)) {
                $ArrayOfUser->$methodName($paramValue);
            }
        }
        return $ArrayOfUser;
    }


   /**
    * @param array $paramAutoSet
    * @return User
    */
    public function User($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $User = new User();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($User, $methodName)) {
                $User->$methodName($paramValue);
            }
        }
        return $User;
    }


   /**
    * @param array $paramAutoSet
    * @return AddUserToGroup
    */
    public function AddUserToGroup($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddUserToGroup = new AddUserToGroup();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddUserToGroup, $methodName)) {
                $AddUserToGroup->$methodName($paramValue);
            }
        }
        return $AddUserToGroup;
    }


   /**
    * @param array $paramAutoSet
    * @return AddUserToGroupResponse
    */
    public function AddUserToGroupResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddUserToGroupResponse = new AddUserToGroupResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddUserToGroupResponse, $methodName)) {
                $AddUserToGroupResponse->$methodName($paramValue);
            }
        }
        return $AddUserToGroupResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return RemoveUserFromGroup
    */
    public function RemoveUserFromGroup($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RemoveUserFromGroup = new RemoveUserFromGroup();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RemoveUserFromGroup, $methodName)) {
                $RemoveUserFromGroup->$methodName($paramValue);
            }
        }
        return $RemoveUserFromGroup;
    }


   /**
    * @param array $paramAutoSet
    * @return RemoveUserFromGroupResponse
    */
    public function RemoveUserFromGroupResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RemoveUserFromGroupResponse = new RemoveUserFromGroupResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RemoveUserFromGroupResponse, $methodName)) {
                $RemoveUserFromGroupResponse->$methodName($paramValue);
            }
        }
        return $RemoveUserFromGroupResponse;
    }



}

?>
