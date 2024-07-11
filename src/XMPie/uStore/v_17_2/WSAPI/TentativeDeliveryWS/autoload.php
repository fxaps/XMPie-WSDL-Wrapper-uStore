<?php


 function autoload_faf7cc82f21619dee461e67bf7043756($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TentativeDeliveryWS\TentativeDeliveryWS' => __DIR__ .'/TentativeDeliveryWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TentativeDeliveryWS\GetTentativeDelivery' => __DIR__ .'/GetTentativeDelivery.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TentativeDeliveryWS\GetTentativeDeliveryResponse' => __DIR__ .'/GetTentativeDeliveryResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TentativeDeliveryWS\TentativeDelivery' => __DIR__ .'/TentativeDelivery.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TentativeDeliveryWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TentativeDeliveryWS\DeliveryItem' => __DIR__ .'/DeliveryItem.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TentativeDeliveryWS\ArrayOfDeliveryItem' => __DIR__ .'/ArrayOfDeliveryItem.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TentativeDeliveryWS\GetTentativeDeliveryList' => __DIR__ .'/GetTentativeDeliveryList.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TentativeDeliveryWS\GetTentativeDeliveryListResponse' => __DIR__ .'/GetTentativeDeliveryListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TentativeDeliveryWS\ArrayOfTentativeDelivery' => __DIR__ .'/ArrayOfTentativeDelivery.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_faf7cc82f21619dee461e67bf7043756');

// Do nothing. The rest is just leftovers from the code generation.
{
}
