<?php


 function autoload_b3dffc8f7c82284753dde4cd6a8b77a4($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CustomizationStepWS\CustomizationStepWS' => __DIR__ .'/CustomizationStepWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CustomizationStepWS\GetCustomizationStepList' => __DIR__ .'/GetCustomizationStepList.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CustomizationStepWS\GetCustomizationStepListResponse' => __DIR__ .'/GetCustomizationStepListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CustomizationStepWS\ArrayOfCustomizationStep' => __DIR__ .'/ArrayOfCustomizationStep.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CustomizationStepWS\CustomizationStep' => __DIR__ .'/CustomizationStep.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CustomizationStepWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CustomizationStepWS\GetCustomizationStep' => __DIR__ .'/GetCustomizationStep.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CustomizationStepWS\GetCustomizationStepResponse' => __DIR__ .'/GetCustomizationStepResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_b3dffc8f7c82284753dde4cd6a8b77a4');

// Do nothing. The rest is just leftovers from the code generation.
{
}
