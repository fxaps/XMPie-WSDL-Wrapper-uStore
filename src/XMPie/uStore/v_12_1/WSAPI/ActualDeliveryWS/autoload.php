<?php


function autoload_9c063316af9b03f5cc63e6bad8e16b99($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ActualDeliveryWS\ActualDeliveryWS' => __DIR__ . '/ActualDeliveryWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ActualDeliveryWS\GetActualDelivery' => __DIR__ . '/GetActualDelivery.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ActualDeliveryWS\GetActualDeliveryResponse' => __DIR__ . '/GetActualDeliveryResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ActualDeliveryWS\ActualDelivery' => __DIR__ . '/ActualDelivery.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ActualDeliveryWS\ReturnObject' => __DIR__ . '/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ActualDeliveryWS\CreateDelivery' => __DIR__ . '/CreateDelivery.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ActualDeliveryWS\ArrayOfInt' => __DIR__ . '/ArrayOfInt.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ActualDeliveryWS\CreateDeliveryResponse' => __DIR__ . '/CreateDeliveryResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ActualDeliveryWS\CreateDeliveryWithDetails' => __DIR__ . '/CreateDeliveryWithDetails.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ActualDeliveryWS\CreateDeliveryWithDetailsResponse' => __DIR__ . '/CreateDeliveryWithDetailsResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ActualDeliveryWS\CreateDeliveryByOrderProducts' => __DIR__ . '/CreateDeliveryByOrderProducts.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ActualDeliveryWS\CreateDeliveryByOrderProductsResponse' => __DIR__ . '/CreateDeliveryByOrderProductsResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ActualDeliveryWS\CreateDeliveryWithDetailsByOrderProducts' => __DIR__ . '/CreateDeliveryWithDetailsByOrderProducts.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ActualDeliveryWS\CreateDeliveryWithDetailsByOrderProductsResponse' => __DIR__ . '/CreateDeliveryWithDetailsByOrderProductsResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ActualDeliveryWS\ManualDeliveryArrived' => __DIR__ . '/ManualDeliveryArrived.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ActualDeliveryWS\ManualDeliveryArrivedResponse' => __DIR__ . '/ManualDeliveryArrivedResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ActualDeliveryWS\StringArray' => __DIR__ . '/StringArray.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_9c063316af9b03f5cc63e6bad8e16b99');

// Do nothing. The rest is just leftovers from the code generation.
{
}
