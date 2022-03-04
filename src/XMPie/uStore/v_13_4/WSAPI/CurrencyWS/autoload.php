<?php


 function autoload_847483138883333572b5a118d68c7900($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CurrencyWS\CurrencyWS' => __DIR__ .'/CurrencyWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CurrencyWS\GetCurrency' => __DIR__ .'/GetCurrency.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CurrencyWS\GetCurrencyResponse' => __DIR__ .'/GetCurrencyResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CurrencyWS\CurrencyInfo' => __DIR__ .'/CurrencyInfo.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CurrencyWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CurrencyWS\GetCurrencyByAbbreviation' => __DIR__ .'/GetCurrencyByAbbreviation.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CurrencyWS\GetCurrencyByAbbreviationResponse' => __DIR__ .'/GetCurrencyByAbbreviationResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_847483138883333572b5a118d68c7900');

// Do nothing. The rest is just leftovers from the code generation.
{
}
