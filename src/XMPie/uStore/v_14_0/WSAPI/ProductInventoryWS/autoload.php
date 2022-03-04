<?php


 function autoload_7fd804c4b137504f472e819495a4f99f($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductInventoryWS\ProductInventoryWS' => __DIR__ .'/ProductInventoryWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductInventoryWS\ReadInventoryLevel' => __DIR__ .'/ReadInventoryLevel.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductInventoryWS\ReadInventoryLevelResponse' => __DIR__ .'/ReadInventoryLevelResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductInventoryWS\ReadInventoryLevelByExternalID' => __DIR__ .'/ReadInventoryLevelByExternalID.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductInventoryWS\ReadInventoryLevelByExternalIDResponse' => __DIR__ .'/ReadInventoryLevelByExternalIDResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductInventoryWS\Update' => __DIR__ .'/Update.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductInventoryWS\UpdateResponse' => __DIR__ .'/UpdateResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductInventoryWS\UpdateByExternalID' => __DIR__ .'/UpdateByExternalID.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductInventoryWS\UpdateByExternalIDResponse' => __DIR__ .'/UpdateByExternalIDResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductInventoryWS\Increase' => __DIR__ .'/Increase.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductInventoryWS\IncreaseResponse' => __DIR__ .'/IncreaseResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductInventoryWS\IncreaseByExternalID' => __DIR__ .'/IncreaseByExternalID.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductInventoryWS\IncreaseByExternalIDResponse' => __DIR__ .'/IncreaseByExternalIDResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductInventoryWS\Decrease' => __DIR__ .'/Decrease.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductInventoryWS\DecreaseResponse' => __DIR__ .'/DecreaseResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductInventoryWS\DecreaseByExternalID' => __DIR__ .'/DecreaseByExternalID.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductInventoryWS\DecreaseByExternalIDResponse' => __DIR__ .'/DecreaseByExternalIDResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_7fd804c4b137504f472e819495a4f99f');

// Do nothing. The rest is just leftovers from the code generation.
{
}
