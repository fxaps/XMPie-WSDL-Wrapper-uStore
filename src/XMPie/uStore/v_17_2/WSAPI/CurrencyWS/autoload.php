<?php


 function autoload_a7615c5905b108d9d9339f5209fb7bc6($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CurrencyWS\CurrencyWS' => __DIR__ .'/CurrencyWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CurrencyWS\GetCurrency' => __DIR__ .'/GetCurrency.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CurrencyWS\GetCurrencyResponse' => __DIR__ .'/GetCurrencyResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CurrencyWS\CurrencyInfo' => __DIR__ .'/CurrencyInfo.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CurrencyWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CurrencyWS\GetCurrencyByAbbreviation' => __DIR__ .'/GetCurrencyByAbbreviation.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CurrencyWS\GetCurrencyByAbbreviationResponse' => __DIR__ .'/GetCurrencyByAbbreviationResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_a7615c5905b108d9d9339f5209fb7bc6');

// Do nothing. The rest is just leftovers from the code generation.
{
}
