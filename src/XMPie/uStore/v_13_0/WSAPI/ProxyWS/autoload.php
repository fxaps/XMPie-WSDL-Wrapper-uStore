<?php


function autoload_cb911025e2044bfdc2b1011e403c2c15($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProxyWS\ProxyWS' => __DIR__ . '/ProxyWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProxyWS\UpdateProxy' => __DIR__ . '/UpdateProxy.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProxyWS\UpdateProxyResponse' => __DIR__ . '/UpdateProxyResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProxyWS\GetProxyData' => __DIR__ . '/GetProxyData.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProxyWS\GetProxyDataResponse' => __DIR__ . '/GetProxyDataResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_cb911025e2044bfdc2b1011e403c2c15');

// Do nothing. The rest is just leftovers from the code generation.
{
}
