<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\UserGroupWS;

class UserGroupWS extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetUserGroupList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\UserGroupWS\\GetUserGroupList',
  'GetUserGroupListResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\UserGroupWS\\GetUserGroupListResponse',
  'ArrayOfUserGroup' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\UserGroupWS\\ArrayOfUserGroup',
  'UserGroup' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\UserGroupWS\\UserGroup',
  'ReturnObject' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\UserGroupWS\\ReturnObject',
  'GetUserGroupListForUser' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\UserGroupWS\\GetUserGroupListForUser',
  'GetUserGroupListForUserResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\UserGroupWS\\GetUserGroupListForUserResponse',
  'GetUserGroup' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\UserGroupWS\\GetUserGroup',
  'GetUserGroupResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\UserGroupWS\\GetUserGroupResponse',
  'GetUserListByGroup' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\UserGroupWS\\GetUserListByGroup',
  'GetUserListByGroupResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\UserGroupWS\\GetUserListByGroupResponse',
  'ArrayOfUser' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\UserGroupWS\\ArrayOfUser',
  'User' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\UserGroupWS\\User',
  'AddUserToGroup' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\UserGroupWS\\AddUserToGroup',
  'AddUserToGroupResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\UserGroupWS\\AddUserToGroupResponse',
  'RemoveUserFromGroup' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\UserGroupWS\\RemoveUserFromGroup',
  'RemoveUserFromGroupResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\UserGroupWS\\RemoveUserFromGroupResponse',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @throws SoapFault
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'http://localhost/ustorewsapi/UserGroupWS.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns an array containing the data of all the User Groups.
     *
     * @param GetUserGroupList $parameters
     * @return GetUserGroupListResponse
     */
    public function GetUserGroupList(GetUserGroupList $parameters)
    {
      return $this->__soapCall('GetUserGroupList', array($parameters));
    }

    /**
     * Returns an array containing the data of all the user groups which the given user is a member of.
     *
     * @param GetUserGroupListForUser $parameters
     * @return GetUserGroupListForUserResponse
     */
    public function GetUserGroupListForUser(GetUserGroupListForUser $parameters)
    {
      return $this->__soapCall('GetUserGroupListForUser', array($parameters));
    }

    /**
     * Returns the data of the given User Group.
     *
     * @param GetUserGroup $parameters
     * @return GetUserGroupResponse
     */
    public function GetUserGroup(GetUserGroup $parameters)
    {
      return $this->__soapCall('GetUserGroup', array($parameters));
    }

    /**
     * Returns an array containing the users that are members of the given User Group.
     *
     * @param GetUserListByGroup $parameters
     * @return GetUserListByGroupResponse
     */
    public function GetUserListByGroup(GetUserListByGroup $parameters)
    {
      return $this->__soapCall('GetUserListByGroup', array($parameters));
    }

    /**
     * Adds the given User to the given Group. This User will inherit the Group's permissions.
     *
     * @param AddUserToGroup $parameters
     * @return AddUserToGroupResponse
     */
    public function AddUserToGroup(AddUserToGroup $parameters)
    {
      return $this->__soapCall('AddUserToGroup', array($parameters));
    }

    /**
     * Removes the given User from the given Group. This may cause the user to lose some permissions.
     *
     * @param RemoveUserFromGroup $parameters
     * @return RemoveUserFromGroupResponse
     */
    public function RemoveUserFromGroup(RemoveUserFromGroup $parameters)
    {
      return $this->__soapCall('RemoveUserFromGroup', array($parameters));
    }

}
