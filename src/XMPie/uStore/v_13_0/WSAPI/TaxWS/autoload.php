<?php


function autoload_21db92246e3d9af38b87b9f84dfa77bd($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\TaxWS\TaxWS' => __DIR__ . '/TaxWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\TaxWS\CalculateTax' => __DIR__ . '/CalculateTax.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\TaxWS\CalculateTaxResponse' => __DIR__ . '/CalculateTaxResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_21db92246e3d9af38b87b9f84dfa77bd');

// Do nothing. The rest is just leftovers from the code generation.
{
}
