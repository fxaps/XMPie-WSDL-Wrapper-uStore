<?php


function autoload_f44c53de857d643ecb8ec6d4f7bf3497($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CustomizationDialWS\CustomizationDialWS' => __DIR__ . '/CustomizationDialWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CustomizationDialWS\GetCustomizationDialList' => __DIR__ . '/GetCustomizationDialList.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CustomizationDialWS\GetCustomizationDialListResponse' => __DIR__ . '/GetCustomizationDialListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CustomizationDialWS\ArrayOfCustomizationDial' => __DIR__ . '/ArrayOfCustomizationDial.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CustomizationDialWS\CustomizationDial' => __DIR__ . '/CustomizationDial.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CustomizationDialWS\ReturnObject' => __DIR__ . '/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CustomizationDialWS\FieldOption' => __DIR__ . '/FieldOption.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CustomizationDialWS\ArrayOfFieldOption' => __DIR__ . '/ArrayOfFieldOption.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CustomizationDialWS\GetCustomizationDial' => __DIR__ . '/GetCustomizationDial.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CustomizationDialWS\GetCustomizationDialResponse' => __DIR__ . '/GetCustomizationDialResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CustomizationDialWS\GetCustomizationDialValueList' => __DIR__ . '/GetCustomizationDialValueList.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CustomizationDialWS\GetCustomizationDialValueListResponse' => __DIR__ . '/GetCustomizationDialValueListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CustomizationDialWS\ArrayOfCustomizationDialValue' => __DIR__ . '/ArrayOfCustomizationDialValue.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CustomizationDialWS\CustomizationDialValue' => __DIR__ . '/CustomizationDialValue.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CustomizationDialWS\GetCustomizationDialValue' => __DIR__ . '/GetCustomizationDialValue.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CustomizationDialWS\GetCustomizationDialValueResponse' => __DIR__ . '/GetCustomizationDialValueResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_f44c53de857d643ecb8ec6d4f7bf3497');

// Do nothing. The rest is just leftovers from the code generation.
{
}
