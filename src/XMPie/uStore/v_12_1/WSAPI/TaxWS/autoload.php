<?php


function autoload_e3fba51b6b7068c099ef70a92c274a33($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\TaxWS\TaxWS' => __DIR__ . '/TaxWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\TaxWS\CalculateTax' => __DIR__ . '/CalculateTax.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\TaxWS\CalculateTaxResponse' => __DIR__ . '/CalculateTaxResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_e3fba51b6b7068c099ef70a92c274a33');

// Do nothing. The rest is just leftovers from the code generation.
{
}
