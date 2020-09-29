<?php


function autoload_20784f638b591713ab8102cab10f46bb($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductWS\ProductWS' => __DIR__ . '/ProductWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductWS\GetProductList' => __DIR__ . '/GetProductList.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductWS\GetProductListResponse' => __DIR__ . '/GetProductListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductWS\ArrayOfProduct' => __DIR__ . '/ArrayOfProduct.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductWS\Product' => __DIR__ . '/Product.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductWS\ReturnObject' => __DIR__ . '/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductWS\GetProductListByStore' => __DIR__ . '/GetProductListByStore.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductWS\GetProductListByStoreResponse' => __DIR__ . '/GetProductListByStoreResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductWS\GetProduct' => __DIR__ . '/GetProduct.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductWS\GetProductResponse' => __DIR__ . '/GetProductResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductWS\GetProductThumbnails' => __DIR__ . '/GetProductThumbnails.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductWS\GetProductThumbnailsResponse' => __DIR__ . '/GetProductThumbnailsResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductWS\ArrayOfBase64Binary' => __DIR__ . '/ArrayOfBase64Binary.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductWS\GetProductIDByExternalID' => __DIR__ . '/GetProductIDByExternalID.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductWS\GetProductIDByExternalIDResponse' => __DIR__ . '/GetProductIDByExternalIDResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductWS\GetProductIDsByExternalID' => __DIR__ . '/GetProductIDsByExternalID.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductWS\GetProductIDsByExternalIDResponse' => __DIR__ . '/GetProductIDsByExternalIDResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductWS\ArrayOfInt' => __DIR__ . '/ArrayOfInt.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_20784f638b591713ab8102cab10f46bb');

// Do nothing. The rest is just leftovers from the code generation.
{
}
