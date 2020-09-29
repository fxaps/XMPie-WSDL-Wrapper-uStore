<?php


function autoload_52bfd317ab501af2b7a04f75d214aa29($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProxyWS\ProxyWS' => __DIR__ . '/ProxyWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProxyWS\UpdateProxy' => __DIR__ . '/UpdateProxy.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProxyWS\UpdateProxyResponse' => __DIR__ . '/UpdateProxyResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProxyWS\GetProxyData' => __DIR__ . '/GetProxyData.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProxyWS\GetProxyDataResponse' => __DIR__ . '/GetProxyDataResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_52bfd317ab501af2b7a04f75d214aa29');

// Do nothing. The rest is just leftovers from the code generation.
{
}
