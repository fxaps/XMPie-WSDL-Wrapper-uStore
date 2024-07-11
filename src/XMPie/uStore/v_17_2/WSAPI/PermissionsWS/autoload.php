<?php


 function autoload_480ed2377a228239ec6b71a11eed963d($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\PermissionsWS\PermissionsWS' => __DIR__ .'/PermissionsWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\PermissionsWS\IsAllowed' => __DIR__ .'/IsAllowed.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\PermissionsWS\IsAllowedResponse' => __DIR__ .'/IsAllowedResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\PermissionsWS\AddPermission' => __DIR__ .'/AddPermission.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\PermissionsWS\AddPermissionResponse' => __DIR__ .'/AddPermissionResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\PermissionsWS\IsStoreFrontAccessAllowed' => __DIR__ .'/IsStoreFrontAccessAllowed.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\PermissionsWS\IsStoreFrontAccessAllowedResponse' => __DIR__ .'/IsStoreFrontAccessAllowedResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\PermissionsWS\IsAccessAllowed' => __DIR__ .'/IsAccessAllowed.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\PermissionsWS\IsAccessAllowedResponse' => __DIR__ .'/IsAccessAllowedResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_480ed2377a228239ec6b71a11eed963d');

// Do nothing. The rest is just leftovers from the code generation.
{
}
