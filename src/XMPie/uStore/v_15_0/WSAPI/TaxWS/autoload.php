<?php


 function autoload_ad9f0c239dc2e2f856a3e3ab62ea7ec1($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\TaxWS\TaxWS' => __DIR__ .'/TaxWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\TaxWS\CalculateTax' => __DIR__ .'/CalculateTax.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\TaxWS\CalculateTaxResponse' => __DIR__ .'/CalculateTaxResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_ad9f0c239dc2e2f856a3e3ab62ea7ec1');

// Do nothing. The rest is just leftovers from the code generation.
{
}
