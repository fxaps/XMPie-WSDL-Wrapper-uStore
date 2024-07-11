<?php


 function autoload_5e49b42f4d97b8eb4433ed0164aaf465($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProxyWS\ProxyWS' => __DIR__ .'/ProxyWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProxyWS\UpdateProxy' => __DIR__ .'/UpdateProxy.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProxyWS\UpdateProxyResponse' => __DIR__ .'/UpdateProxyResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProxyWS\GetProxyData' => __DIR__ .'/GetProxyData.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProxyWS\GetProxyDataResponse' => __DIR__ .'/GetProxyDataResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_5e49b42f4d97b8eb4433ed0164aaf465');

// Do nothing. The rest is just leftovers from the code generation.
{
}
