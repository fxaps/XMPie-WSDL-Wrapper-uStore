<?php


 function autoload_0acf7b43ecb3ed9170d2a3280d138b71($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\XMPieInternalWS\XMPieInternalWS' => __DIR__ .'/XMPieInternalWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\XMPieInternalWS\GetOrderProductListByQueueJoined' => __DIR__ .'/GetOrderProductListByQueueJoined.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\XMPieInternalWS\GetOrderProductListByQueueJoinedResponse' => __DIR__ .'/GetOrderProductListByQueueJoinedResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\XMPieInternalWS\ArrayOfOrderProductJoined' => __DIR__ .'/ArrayOfOrderProductJoined.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\XMPieInternalWS\OrderProductJoined' => __DIR__ .'/OrderProductJoined.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_0acf7b43ecb3ed9170d2a3280d138b71');

// Do nothing. The rest is just leftovers from the code generation.
{
}
