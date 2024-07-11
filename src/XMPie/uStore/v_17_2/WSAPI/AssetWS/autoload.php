<?php


 function autoload_99341eaee1afa97f284abf6de4b798f5($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AssetWS\AssetWS' => __DIR__ .'/AssetWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AssetWS\GetAssetList' => __DIR__ .'/GetAssetList.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AssetWS\GetAssetListResponse' => __DIR__ .'/GetAssetListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AssetWS\ArrayOfAsset' => __DIR__ .'/ArrayOfAsset.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AssetWS\Asset' => __DIR__ .'/Asset.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AssetWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AssetWS\GetAssetListOptionalUser' => __DIR__ .'/GetAssetListOptionalUser.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AssetWS\GetAssetListOptionalUserResponse' => __DIR__ .'/GetAssetListOptionalUserResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AssetWS\GetAsset' => __DIR__ .'/GetAsset.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AssetWS\GetAssetResponse' => __DIR__ .'/GetAssetResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AssetWS\DownloadAsset' => __DIR__ .'/DownloadAsset.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\AssetWS\DownloadAssetResponse' => __DIR__ .'/DownloadAssetResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_99341eaee1afa97f284abf6de4b798f5');

// Do nothing. The rest is just leftovers from the code generation.
{
}
