<?php


 function autoload_9b9e228e62841b18b68e3c9ec456dc8d($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\XMPieInternalWS\XMPieInternalWS' => __DIR__ .'/XMPieInternalWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\XMPieInternalWS\GetOrderProductListByQueueJoined' => __DIR__ .'/GetOrderProductListByQueueJoined.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\XMPieInternalWS\GetOrderProductListByQueueJoinedResponse' => __DIR__ .'/GetOrderProductListByQueueJoinedResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\XMPieInternalWS\ArrayOfOrderProductJoined' => __DIR__ .'/ArrayOfOrderProductJoined.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\XMPieInternalWS\OrderProductJoined' => __DIR__ .'/OrderProductJoined.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_9b9e228e62841b18b68e3c9ec456dc8d');

// Do nothing. The rest is just leftovers from the code generation.
{
}
