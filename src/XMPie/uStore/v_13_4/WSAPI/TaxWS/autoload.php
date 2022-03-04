<?php


 function autoload_a82dc92e2285223b0fba0f22ddd6f060($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\TaxWS\TaxWS' => __DIR__ .'/TaxWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\TaxWS\CalculateTax' => __DIR__ .'/CalculateTax.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\TaxWS\CalculateTaxResponse' => __DIR__ .'/CalculateTaxResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_a82dc92e2285223b0fba0f22ddd6f060');

// Do nothing. The rest is just leftovers from the code generation.
{
}
