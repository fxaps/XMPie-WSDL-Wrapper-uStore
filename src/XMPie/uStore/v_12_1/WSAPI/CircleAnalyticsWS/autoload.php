<?php


function autoload_ea4aeaee653d85bcf2978ecb2ca9c13d($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CircleAnalyticsWS\CircleAnalyticsWS' => __DIR__ . '/CircleAnalyticsWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CircleAnalyticsWS\GetAllReportsPerCircleProject' => __DIR__ . '/GetAllReportsPerCircleProject.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CircleAnalyticsWS\GetAllReportsPerCircleProjectResponse' => __DIR__ . '/GetAllReportsPerCircleProjectResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CircleAnalyticsWS\ArrayOfCircleAnalyticsAPIModel' => __DIR__ . '/ArrayOfCircleAnalyticsAPIModel.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CircleAnalyticsWS\CircleAnalyticsAPIModel' => __DIR__ . '/CircleAnalyticsAPIModel.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CircleAnalyticsWS\RefreshAnalyticsReportsPerProject' => __DIR__ . '/RefreshAnalyticsReportsPerProject.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CircleAnalyticsWS\RefreshAnalyticsReportsPerProjectResponse' => __DIR__ . '/RefreshAnalyticsReportsPerProjectResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_ea4aeaee653d85bcf2978ecb2ca9c13d');

// Do nothing. The rest is just leftovers from the code generation.
{
}
