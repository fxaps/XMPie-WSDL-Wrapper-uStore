<?php


function autoload_6cc074b066377bc351e095eb6732cf12($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\StoreWS\StoreWS' => __DIR__ . '/StoreWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\StoreWS\GetStoreList' => __DIR__ . '/GetStoreList.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\StoreWS\GetStoreListResponse' => __DIR__ . '/GetStoreListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\StoreWS\ArrayOfStore' => __DIR__ . '/ArrayOfStore.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\StoreWS\Store' => __DIR__ . '/Store.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\StoreWS\ReturnObject' => __DIR__ . '/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\StoreWS\GetStore' => __DIR__ . '/GetStore.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\StoreWS\GetStoreResponse' => __DIR__ . '/GetStoreResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_6cc074b066377bc351e095eb6732cf12');

// Do nothing. The rest is just leftovers from the code generation.
{
}
