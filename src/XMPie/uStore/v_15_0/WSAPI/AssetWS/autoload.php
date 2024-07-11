<?php


 function autoload_52268a763f7060eebdb30c757cd51373($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\AssetWS\AssetWS' => __DIR__ .'/AssetWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\AssetWS\GetAssetList' => __DIR__ .'/GetAssetList.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\AssetWS\GetAssetListResponse' => __DIR__ .'/GetAssetListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\AssetWS\ArrayOfAsset' => __DIR__ .'/ArrayOfAsset.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\AssetWS\Asset' => __DIR__ .'/Asset.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\AssetWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\AssetWS\GetAssetListOptionalUser' => __DIR__ .'/GetAssetListOptionalUser.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\AssetWS\GetAssetListOptionalUserResponse' => __DIR__ .'/GetAssetListOptionalUserResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\AssetWS\GetAsset' => __DIR__ .'/GetAsset.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\AssetWS\GetAssetResponse' => __DIR__ .'/GetAssetResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\AssetWS\DownloadAsset' => __DIR__ .'/DownloadAsset.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\AssetWS\DownloadAssetResponse' => __DIR__ .'/DownloadAssetResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_52268a763f7060eebdb30c757cd51373');

// Do nothing. The rest is just leftovers from the code generation.
{
}
