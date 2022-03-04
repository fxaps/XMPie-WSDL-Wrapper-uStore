<?php


 function autoload_2e99ce1af599ea4a6be855861debf6e2($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\UserGroupWS' => __DIR__ .'/UserGroupWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\GetUserGroupList' => __DIR__ .'/GetUserGroupList.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\GetUserGroupListResponse' => __DIR__ .'/GetUserGroupListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\ArrayOfUserGroup' => __DIR__ .'/ArrayOfUserGroup.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\UserGroup' => __DIR__ .'/UserGroup.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\GetUserGroupListForUser' => __DIR__ .'/GetUserGroupListForUser.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\GetUserGroupListForUserResponse' => __DIR__ .'/GetUserGroupListForUserResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\GetUserGroup' => __DIR__ .'/GetUserGroup.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\GetUserGroupResponse' => __DIR__ .'/GetUserGroupResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\GetUserListByGroup' => __DIR__ .'/GetUserListByGroup.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\GetUserListByGroupResponse' => __DIR__ .'/GetUserListByGroupResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\ArrayOfUser' => __DIR__ .'/ArrayOfUser.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User' => __DIR__ .'/User.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\AddUserToGroup' => __DIR__ .'/AddUserToGroup.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\AddUserToGroupResponse' => __DIR__ .'/AddUserToGroupResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\RemoveUserFromGroup' => __DIR__ .'/RemoveUserFromGroup.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\RemoveUserFromGroupResponse' => __DIR__ .'/RemoveUserFromGroupResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_2e99ce1af599ea4a6be855861debf6e2');

// Do nothing. The rest is just leftovers from the code generation.
{
}
