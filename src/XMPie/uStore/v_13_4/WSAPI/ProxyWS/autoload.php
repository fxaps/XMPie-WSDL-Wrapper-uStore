<?php


 function autoload_67d56b0bc71e36a774de84b44437bea5($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProxyWS\ProxyWS' => __DIR__ .'/ProxyWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProxyWS\UpdateProxy' => __DIR__ .'/UpdateProxy.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProxyWS\UpdateProxyResponse' => __DIR__ .'/UpdateProxyResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProxyWS\GetProxyData' => __DIR__ .'/GetProxyData.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProxyWS\GetProxyDataResponse' => __DIR__ .'/GetProxyDataResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_67d56b0bc71e36a774de84b44437bea5');

// Do nothing. The rest is just leftovers from the code generation.
{
}
