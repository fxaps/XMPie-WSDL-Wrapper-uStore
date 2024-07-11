<?php


 function autoload_35c60e40e74d12b547883e5b8ddbdae6($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CircleAnalyticsWS\CircleAnalyticsWS' => __DIR__ .'/CircleAnalyticsWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CircleAnalyticsWS\GetAllReportsPerCircleProject' => __DIR__ .'/GetAllReportsPerCircleProject.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CircleAnalyticsWS\GetAllReportsPerCircleProjectResponse' => __DIR__ .'/GetAllReportsPerCircleProjectResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CircleAnalyticsWS\ArrayOfCircleAnalyticsAPIModel' => __DIR__ .'/ArrayOfCircleAnalyticsAPIModel.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CircleAnalyticsWS\CircleAnalyticsAPIModel' => __DIR__ .'/CircleAnalyticsAPIModel.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CircleAnalyticsWS\RefreshAnalyticsReportsPerProject' => __DIR__ .'/RefreshAnalyticsReportsPerProject.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CircleAnalyticsWS\RefreshAnalyticsReportsPerProjectResponse' => __DIR__ .'/RefreshAnalyticsReportsPerProjectResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_35c60e40e74d12b547883e5b8ddbdae6');

// Do nothing. The rest is just leftovers from the code generation.
{
}
