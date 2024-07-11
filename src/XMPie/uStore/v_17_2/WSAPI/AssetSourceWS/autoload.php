<?php


 function autoload_7de6e18ad5898f18260291d61125a3b9($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AssetSourceWS\AssetSourceWS' => __DIR__ .'/AssetSourceWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AssetSourceWS\GetAssetSource' => __DIR__ .'/GetAssetSource.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AssetSourceWS\GetAssetSourceResponse' => __DIR__ .'/GetAssetSourceResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AssetSourceWS\AssetSource' => __DIR__ .'/AssetSource.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AssetSourceWS\ReturnObject' => __DIR__ .'/ReturnObject.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_7de6e18ad5898f18260291d61125a3b9');

// Do nothing. The rest is just leftovers from the code generation.
{
}
