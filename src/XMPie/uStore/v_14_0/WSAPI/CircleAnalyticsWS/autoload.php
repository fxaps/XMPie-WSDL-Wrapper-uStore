<?php


 function autoload_02a8e6d51d478c533bd5dfc343be9397($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CircleAnalyticsWS\CircleAnalyticsWS' => __DIR__ .'/CircleAnalyticsWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CircleAnalyticsWS\GetAllReportsPerCircleProject' => __DIR__ .'/GetAllReportsPerCircleProject.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CircleAnalyticsWS\GetAllReportsPerCircleProjectResponse' => __DIR__ .'/GetAllReportsPerCircleProjectResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CircleAnalyticsWS\ArrayOfCircleAnalyticsAPIModel' => __DIR__ .'/ArrayOfCircleAnalyticsAPIModel.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CircleAnalyticsWS\CircleAnalyticsAPIModel' => __DIR__ .'/CircleAnalyticsAPIModel.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CircleAnalyticsWS\RefreshAnalyticsReportsPerProject' => __DIR__ .'/RefreshAnalyticsReportsPerProject.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CircleAnalyticsWS\RefreshAnalyticsReportsPerProjectResponse' => __DIR__ .'/RefreshAnalyticsReportsPerProjectResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_02a8e6d51d478c533bd5dfc343be9397');

// Do nothing. The rest is just leftovers from the code generation.
{
}
