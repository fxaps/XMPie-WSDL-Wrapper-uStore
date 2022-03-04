<?php


 function autoload_93f71219d16db03636f9e863c93b46d4($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\AssetSourceWS\AssetSourceWS' => __DIR__ .'/AssetSourceWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\AssetSourceWS\GetAssetSource' => __DIR__ .'/GetAssetSource.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\AssetSourceWS\GetAssetSourceResponse' => __DIR__ .'/GetAssetSourceResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\AssetSourceWS\AssetSource' => __DIR__ .'/AssetSource.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\AssetSourceWS\ReturnObject' => __DIR__ .'/ReturnObject.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_93f71219d16db03636f9e863c93b46d4');

// Do nothing. The rest is just leftovers from the code generation.
{
}
