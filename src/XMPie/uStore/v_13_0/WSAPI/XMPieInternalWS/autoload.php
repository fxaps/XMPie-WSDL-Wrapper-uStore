<?php


function autoload_ed27fb037abd1426dc0a11b4bccae7aa($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\XMPieInternalWS\XMPieInternalWS' => __DIR__ . '/XMPieInternalWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\XMPieInternalWS\GetOrderProductListByQueueJoined' => __DIR__ . '/GetOrderProductListByQueueJoined.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\XMPieInternalWS\GetOrderProductListByQueueJoinedResponse' => __DIR__ . '/GetOrderProductListByQueueJoinedResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\XMPieInternalWS\ArrayOfOrderProductJoined' => __DIR__ . '/ArrayOfOrderProductJoined.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\XMPieInternalWS\OrderProductJoined' => __DIR__ . '/OrderProductJoined.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_ed27fb037abd1426dc0a11b4bccae7aa');

// Do nothing. The rest is just leftovers from the code generation.
{
}
