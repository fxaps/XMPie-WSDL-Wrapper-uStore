<?php


 function autoload_e5218e774402779670cf47705483de2c($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\ProductInventoryWS' => __DIR__ .'/ProductInventoryWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\ReadInventoryLevel' => __DIR__ .'/ReadInventoryLevel.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\ReadInventoryLevelResponse' => __DIR__ .'/ReadInventoryLevelResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\ReadInventoryLevelByExternalID' => __DIR__ .'/ReadInventoryLevelByExternalID.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\ReadInventoryLevelByExternalIDResponse' => __DIR__ .'/ReadInventoryLevelByExternalIDResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\Update' => __DIR__ .'/Update.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\UpdateResponse' => __DIR__ .'/UpdateResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\UpdateByExternalID' => __DIR__ .'/UpdateByExternalID.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\UpdateByExternalIDResponse' => __DIR__ .'/UpdateByExternalIDResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\Increase' => __DIR__ .'/Increase.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\IncreaseResponse' => __DIR__ .'/IncreaseResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\IncreaseByExternalID' => __DIR__ .'/IncreaseByExternalID.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\IncreaseByExternalIDResponse' => __DIR__ .'/IncreaseByExternalIDResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\Decrease' => __DIR__ .'/Decrease.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\DecreaseResponse' => __DIR__ .'/DecreaseResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\DecreaseByExternalID' => __DIR__ .'/DecreaseByExternalID.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\DecreaseByExternalIDResponse' => __DIR__ .'/DecreaseByExternalIDResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_e5218e774402779670cf47705483de2c');

// Do nothing. The rest is just leftovers from the code generation.
{
}
