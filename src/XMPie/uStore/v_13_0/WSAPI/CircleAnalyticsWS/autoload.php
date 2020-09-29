<?php


function autoload_46e6bfc5f14727cf7485319b97d1f9f3($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CircleAnalyticsWS\CircleAnalyticsWS' => __DIR__ . '/CircleAnalyticsWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CircleAnalyticsWS\GetAllReportsPerCircleProject' => __DIR__ . '/GetAllReportsPerCircleProject.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CircleAnalyticsWS\GetAllReportsPerCircleProjectResponse' => __DIR__ . '/GetAllReportsPerCircleProjectResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CircleAnalyticsWS\ArrayOfCircleAnalyticsAPIModel' => __DIR__ . '/ArrayOfCircleAnalyticsAPIModel.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CircleAnalyticsWS\CircleAnalyticsAPIModel' => __DIR__ . '/CircleAnalyticsAPIModel.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CircleAnalyticsWS\RefreshAnalyticsReportsPerProject' => __DIR__ . '/RefreshAnalyticsReportsPerProject.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CircleAnalyticsWS\RefreshAnalyticsReportsPerProjectResponse' => __DIR__ . '/RefreshAnalyticsReportsPerProjectResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_46e6bfc5f14727cf7485319b97d1f9f3');

// Do nothing. The rest is just leftovers from the code generation.
{
}
