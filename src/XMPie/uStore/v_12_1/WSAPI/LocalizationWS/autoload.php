<?php


function autoload_6448a8ffe4b28067339d69cc6c42d0ae($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\LocalizationWS\LocalizationWS' => __DIR__ . '/LocalizationWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\LocalizationWS\GetLocalizedString' => __DIR__ . '/GetLocalizedString.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\LocalizationWS\GetLocalizedStringResponse' => __DIR__ . '/GetLocalizedStringResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\LocalizationWS\GetPageResources' => __DIR__ . '/GetPageResources.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\LocalizationWS\GetPageResourcesResponse' => __DIR__ . '/GetPageResourcesResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\LocalizationWS\ArrayOfLocalizationResource' => __DIR__ . '/ArrayOfLocalizationResource.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\LocalizationWS\LocalizationResource' => __DIR__ . '/LocalizationResource.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\LocalizationWS\ReturnObject' => __DIR__ . '/ReturnObject.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_6448a8ffe4b28067339d69cc6c42d0ae');

// Do nothing. The rest is just leftovers from the code generation.
{
}
