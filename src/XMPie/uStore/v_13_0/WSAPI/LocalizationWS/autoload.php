<?php


function autoload_ac6ff63e904ba0cbe2ed55b63727bbf2($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\LocalizationWS\LocalizationWS' => __DIR__ . '/LocalizationWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\LocalizationWS\GetLocalizedString' => __DIR__ . '/GetLocalizedString.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\LocalizationWS\GetLocalizedStringResponse' => __DIR__ . '/GetLocalizedStringResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\LocalizationWS\GetPageResources' => __DIR__ . '/GetPageResources.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\LocalizationWS\GetPageResourcesResponse' => __DIR__ . '/GetPageResourcesResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\LocalizationWS\ArrayOfLocalizationResource' => __DIR__ . '/ArrayOfLocalizationResource.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\LocalizationWS\LocalizationResource' => __DIR__ . '/LocalizationResource.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\LocalizationWS\ReturnObject' => __DIR__ . '/ReturnObject.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_ac6ff63e904ba0cbe2ed55b63727bbf2');

// Do nothing. The rest is just leftovers from the code generation.
{
}
