<?php


 function autoload_8c8cc4e3e88d63862f98db37688d9ec0($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TaxWS\TaxWS' => __DIR__ .'/TaxWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TaxWS\CalculateTax' => __DIR__ .'/CalculateTax.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TaxWS\CalculateTaxResponse' => __DIR__ .'/CalculateTaxResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_8c8cc4e3e88d63862f98db37688d9ec0');

// Do nothing. The rest is just leftovers from the code generation.
{
}
