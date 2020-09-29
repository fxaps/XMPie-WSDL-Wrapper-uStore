<?php


function autoload_7ab37e76be4e18e2f30f1318cac7f83d($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\XMPieInternalWS\XMPieInternalWS' => __DIR__ . '/XMPieInternalWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\XMPieInternalWS\GetOrderProductListByQueueJoined' => __DIR__ . '/GetOrderProductListByQueueJoined.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\XMPieInternalWS\GetOrderProductListByQueueJoinedResponse' => __DIR__ . '/GetOrderProductListByQueueJoinedResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\XMPieInternalWS\ArrayOfOrderProductJoined' => __DIR__ . '/ArrayOfOrderProductJoined.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\XMPieInternalWS\OrderProductJoined' => __DIR__ . '/OrderProductJoined.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_7ab37e76be4e18e2f30f1318cac7f83d');

// Do nothing. The rest is just leftovers from the code generation.
{
}
