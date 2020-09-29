<?php


function autoload_06438f86907a910693d2050dd5e55a32($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CurrencyWS\CurrencyWS' => __DIR__ . '/CurrencyWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CurrencyWS\GetCurrency' => __DIR__ . '/GetCurrency.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CurrencyWS\GetCurrencyResponse' => __DIR__ . '/GetCurrencyResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CurrencyWS\CurrencyInfo' => __DIR__ . '/CurrencyInfo.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CurrencyWS\ReturnObject' => __DIR__ . '/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CurrencyWS\GetCurrencyByAbbreviation' => __DIR__ . '/GetCurrencyByAbbreviation.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CurrencyWS\GetCurrencyByAbbreviationResponse' => __DIR__ . '/GetCurrencyByAbbreviationResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_06438f86907a910693d2050dd5e55a32');

// Do nothing. The rest is just leftovers from the code generation.
{
}
