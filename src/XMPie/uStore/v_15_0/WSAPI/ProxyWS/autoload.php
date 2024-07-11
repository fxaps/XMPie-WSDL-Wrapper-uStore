<?php


 function autoload_e7b9ef5b71224b823262272741e3f2b7($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProxyWS\ProxyWS' => __DIR__ .'/ProxyWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProxyWS\UpdateProxy' => __DIR__ .'/UpdateProxy.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProxyWS\UpdateProxyResponse' => __DIR__ .'/UpdateProxyResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProxyWS\GetProxyData' => __DIR__ .'/GetProxyData.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProxyWS\GetProxyDataResponse' => __DIR__ .'/GetProxyDataResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_e7b9ef5b71224b823262272741e3f2b7');

// Do nothing. The rest is just leftovers from the code generation.
{
}
