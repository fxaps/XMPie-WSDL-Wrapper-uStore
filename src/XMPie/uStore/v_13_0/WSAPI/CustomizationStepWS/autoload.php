<?php


function autoload_c78ff72368588d5639bab625f4ba5642($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CustomizationStepWS\CustomizationStepWS' => __DIR__ . '/CustomizationStepWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CustomizationStepWS\GetCustomizationStepList' => __DIR__ . '/GetCustomizationStepList.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CustomizationStepWS\GetCustomizationStepListResponse' => __DIR__ . '/GetCustomizationStepListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CustomizationStepWS\ArrayOfCustomizationStep' => __DIR__ . '/ArrayOfCustomizationStep.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CustomizationStepWS\CustomizationStep' => __DIR__ . '/CustomizationStep.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CustomizationStepWS\ReturnObject' => __DIR__ . '/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CustomizationStepWS\GetCustomizationStep' => __DIR__ . '/GetCustomizationStep.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CustomizationStepWS\GetCustomizationStepResponse' => __DIR__ . '/GetCustomizationStepResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_c78ff72368588d5639bab625f4ba5642');

// Do nothing. The rest is just leftovers from the code generation.
{
}
