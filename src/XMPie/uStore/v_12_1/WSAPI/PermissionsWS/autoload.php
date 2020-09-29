<?php


function autoload_ab15d2794271993ef9b1254f018a7d41($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\PermissionsWS\PermissionsWS' => __DIR__ . '/PermissionsWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\PermissionsWS\IsAllowed' => __DIR__ . '/IsAllowed.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\PermissionsWS\IsAllowedResponse' => __DIR__ . '/IsAllowedResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\PermissionsWS\AddPermission' => __DIR__ . '/AddPermission.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\PermissionsWS\AddPermissionResponse' => __DIR__ . '/AddPermissionResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\PermissionsWS\IsStoreFrontAccessAllowed' => __DIR__ . '/IsStoreFrontAccessAllowed.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\PermissionsWS\IsStoreFrontAccessAllowedResponse' => __DIR__ . '/IsStoreFrontAccessAllowedResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\PermissionsWS\IsAccessAllowed' => __DIR__ . '/IsAccessAllowed.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\PermissionsWS\IsAccessAllowedResponse' => __DIR__ . '/IsAccessAllowedResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_ab15d2794271993ef9b1254f018a7d41');

// Do nothing. The rest is just leftovers from the code generation.
{
}
