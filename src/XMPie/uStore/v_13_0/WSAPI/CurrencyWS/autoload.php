<?php


function autoload_f3a9d61365c223ca176f2b34cbb0b6c7($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CurrencyWS\CurrencyWS' => __DIR__ . '/CurrencyWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CurrencyWS\GetCurrency' => __DIR__ . '/GetCurrency.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CurrencyWS\GetCurrencyResponse' => __DIR__ . '/GetCurrencyResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CurrencyWS\CurrencyInfo' => __DIR__ . '/CurrencyInfo.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CurrencyWS\ReturnObject' => __DIR__ . '/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CurrencyWS\GetCurrencyByAbbreviation' => __DIR__ . '/GetCurrencyByAbbreviation.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CurrencyWS\GetCurrencyByAbbreviationResponse' => __DIR__ . '/GetCurrencyByAbbreviationResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_f3a9d61365c223ca176f2b34cbb0b6c7');

// Do nothing. The rest is just leftovers from the code generation.
{
}
