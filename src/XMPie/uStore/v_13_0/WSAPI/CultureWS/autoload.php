<?php


function autoload_4ee5c8381932503e7ef1d32cf54b2274($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CultureWS\CultureWS' => __DIR__ . '/CultureWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CultureWS\GetCulture' => __DIR__ . '/GetCulture.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CultureWS\GetCultureResponse' => __DIR__ . '/GetCultureResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CultureWS\Culture' => __DIR__ . '/Culture.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CultureWS\ReturnObject' => __DIR__ . '/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CultureWS\GetCultureByStore' => __DIR__ . '/GetCultureByStore.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CultureWS\GetCultureByStoreResponse' => __DIR__ . '/GetCultureByStoreResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CultureWS\ArrayOfCulture' => __DIR__ . '/ArrayOfCulture.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_4ee5c8381932503e7ef1d32cf54b2274');

// Do nothing. The rest is just leftovers from the code generation.
{
}
