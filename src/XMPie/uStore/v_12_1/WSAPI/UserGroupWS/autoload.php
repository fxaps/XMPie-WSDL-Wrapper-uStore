<?php


function autoload_8dcb2f2652fb0e1731a5bb9b60b70de8($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserGroupWS\UserGroupWS' => __DIR__ . '/UserGroupWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserGroupWS\GetUserGroupList' => __DIR__ . '/GetUserGroupList.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserGroupWS\GetUserGroupListResponse' => __DIR__ . '/GetUserGroupListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserGroupWS\ArrayOfUserGroup' => __DIR__ . '/ArrayOfUserGroup.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserGroupWS\UserGroup' => __DIR__ . '/UserGroup.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserGroupWS\ReturnObject' => __DIR__ . '/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserGroupWS\GetUserGroupListForUser' => __DIR__ . '/GetUserGroupListForUser.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserGroupWS\GetUserGroupListForUserResponse' => __DIR__ . '/GetUserGroupListForUserResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserGroupWS\GetUserGroup' => __DIR__ . '/GetUserGroup.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserGroupWS\GetUserGroupResponse' => __DIR__ . '/GetUserGroupResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserGroupWS\GetUserListByGroup' => __DIR__ . '/GetUserListByGroup.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserGroupWS\GetUserListByGroupResponse' => __DIR__ . '/GetUserListByGroupResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserGroupWS\ArrayOfUser' => __DIR__ . '/ArrayOfUser.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserGroupWS\User' => __DIR__ . '/User.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserGroupWS\AddUserToGroup' => __DIR__ . '/AddUserToGroup.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserGroupWS\AddUserToGroupResponse' => __DIR__ . '/AddUserToGroupResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserGroupWS\RemoveUserFromGroup' => __DIR__ . '/RemoveUserFromGroup.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserGroupWS\RemoveUserFromGroupResponse' => __DIR__ . '/RemoveUserFromGroupResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_8dcb2f2652fb0e1731a5bb9b60b70de8');

// Do nothing. The rest is just leftovers from the code generation.
{
}
