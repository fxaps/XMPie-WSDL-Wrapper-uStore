<?php


 function autoload_47cdd2ab66d47b0dc58e36962c257a29($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CultureWS\CultureWS' => __DIR__ .'/CultureWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CultureWS\GetCulture' => __DIR__ .'/GetCulture.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CultureWS\GetCultureResponse' => __DIR__ .'/GetCultureResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CultureWS\Culture' => __DIR__ .'/Culture.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CultureWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CultureWS\GetCultureByStore' => __DIR__ .'/GetCultureByStore.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CultureWS\GetCultureByStoreResponse' => __DIR__ .'/GetCultureByStoreResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CultureWS\ArrayOfCulture' => __DIR__ .'/ArrayOfCulture.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_47cdd2ab66d47b0dc58e36962c257a29');

// Do nothing. The rest is just leftovers from the code generation.
{
}
