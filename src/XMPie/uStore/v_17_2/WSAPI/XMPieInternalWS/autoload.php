<?php


 function autoload_3935320ad0077faa874fe39b1184b07d($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\XMPieInternalWS\XMPieInternalWS' => __DIR__ .'/XMPieInternalWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\XMPieInternalWS\GetOrderProductListByQueueJoined' => __DIR__ .'/GetOrderProductListByQueueJoined.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\XMPieInternalWS\GetOrderProductListByQueueJoinedResponse' => __DIR__ .'/GetOrderProductListByQueueJoinedResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\XMPieInternalWS\ArrayOfOrderProductJoined' => __DIR__ .'/ArrayOfOrderProductJoined.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\XMPieInternalWS\OrderProductJoined' => __DIR__ .'/OrderProductJoined.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_3935320ad0077faa874fe39b1184b07d');

// Do nothing. The rest is just leftovers from the code generation.
{
}
