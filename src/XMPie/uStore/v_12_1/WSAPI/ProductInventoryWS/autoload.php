<?php


function autoload_a4c99f0b533a96804df8eb36792f0340($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductInventoryWS\ProductInventoryWS' => __DIR__ . '/ProductInventoryWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductInventoryWS\ReadInventoryLevel' => __DIR__ . '/ReadInventoryLevel.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductInventoryWS\ReadInventoryLevelResponse' => __DIR__ . '/ReadInventoryLevelResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductInventoryWS\ReadInventoryLevelByExternalID' => __DIR__ . '/ReadInventoryLevelByExternalID.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductInventoryWS\ReadInventoryLevelByExternalIDResponse' => __DIR__ . '/ReadInventoryLevelByExternalIDResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductInventoryWS\Update' => __DIR__ . '/Update.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductInventoryWS\UpdateResponse' => __DIR__ . '/UpdateResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductInventoryWS\UpdateByExternalID' => __DIR__ . '/UpdateByExternalID.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductInventoryWS\UpdateByExternalIDResponse' => __DIR__ . '/UpdateByExternalIDResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductInventoryWS\Increase' => __DIR__ . '/Increase.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductInventoryWS\IncreaseResponse' => __DIR__ . '/IncreaseResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductInventoryWS\IncreaseByExternalID' => __DIR__ . '/IncreaseByExternalID.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductInventoryWS\IncreaseByExternalIDResponse' => __DIR__ . '/IncreaseByExternalIDResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductInventoryWS\Decrease' => __DIR__ . '/Decrease.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductInventoryWS\DecreaseResponse' => __DIR__ . '/DecreaseResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductInventoryWS\DecreaseByExternalID' => __DIR__ . '/DecreaseByExternalID.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductInventoryWS\DecreaseByExternalIDResponse' => __DIR__ . '/DecreaseByExternalIDResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_a4c99f0b533a96804df8eb36792f0340');

// Do nothing. The rest is just leftovers from the code generation.
{
}
