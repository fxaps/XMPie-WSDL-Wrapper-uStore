<?php


 function autoload_f7c0bc916b8b367f92676734c11dbb61($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProxyWS\ProxyWS' => __DIR__ .'/ProxyWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProxyWS\UpdateProxy' => __DIR__ .'/UpdateProxy.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProxyWS\UpdateProxyResponse' => __DIR__ .'/UpdateProxyResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProxyWS\GetProxyData' => __DIR__ .'/GetProxyData.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProxyWS\GetProxyDataResponse' => __DIR__ .'/GetProxyDataResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_f7c0bc916b8b367f92676734c11dbb61');

// Do nothing. The rest is just leftovers from the code generation.
{
}
