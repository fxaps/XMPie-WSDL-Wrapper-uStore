<?php


function autoload_1fdc53d6efceff2f0cdfa97112b866f3($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\AssetSourceWS\AssetSourceWS' => __DIR__ . '/AssetSourceWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\AssetSourceWS\GetAssetSource' => __DIR__ . '/GetAssetSource.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\AssetSourceWS\GetAssetSourceResponse' => __DIR__ . '/GetAssetSourceResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\AssetSourceWS\AssetSource' => __DIR__ . '/AssetSource.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\AssetSourceWS\ReturnObject' => __DIR__ . '/ReturnObject.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_1fdc53d6efceff2f0cdfa97112b866f3');

// Do nothing. The rest is just leftovers from the code generation.
{
}
