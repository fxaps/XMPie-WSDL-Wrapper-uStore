<?php


function autoload_0619e310fd929cf3e74be1b194b66d76($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\AssetSourceWS\AssetSourceWS' => __DIR__ . '/AssetSourceWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\AssetSourceWS\GetAssetSource' => __DIR__ . '/GetAssetSource.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\AssetSourceWS\GetAssetSourceResponse' => __DIR__ . '/GetAssetSourceResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\AssetSourceWS\AssetSource' => __DIR__ . '/AssetSource.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\AssetSourceWS\ReturnObject' => __DIR__ . '/ReturnObject.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_0619e310fd929cf3e74be1b194b66d76');

// Do nothing. The rest is just leftovers from the code generation.
{
}
