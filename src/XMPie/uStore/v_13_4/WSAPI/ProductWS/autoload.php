<?php


 function autoload_50357dde9d089f733b8238b47903495b($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\ProductWS' => __DIR__ .'/ProductWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductList' => __DIR__ .'/GetProductList.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductListResponse' => __DIR__ .'/GetProductListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\ArrayOfProduct' => __DIR__ .'/ArrayOfProduct.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\Product' => __DIR__ .'/Product.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductListByStore' => __DIR__ .'/GetProductListByStore.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductListByStoreResponse' => __DIR__ .'/GetProductListByStoreResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProduct' => __DIR__ .'/GetProduct.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductResponse' => __DIR__ .'/GetProductResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductThumbnails' => __DIR__ .'/GetProductThumbnails.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductThumbnailsResponse' => __DIR__ .'/GetProductThumbnailsResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\ArrayOfBase64Binary' => __DIR__ .'/ArrayOfBase64Binary.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductIDByExternalID' => __DIR__ .'/GetProductIDByExternalID.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductIDByExternalIDResponse' => __DIR__ .'/GetProductIDByExternalIDResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductIDsByExternalID' => __DIR__ .'/GetProductIDsByExternalID.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\GetProductIDsByExternalIDResponse' => __DIR__ .'/GetProductIDsByExternalIDResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductWS\ArrayOfInt' => __DIR__ .'/ArrayOfInt.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_50357dde9d089f733b8238b47903495b');

// Do nothing. The rest is just leftovers from the code generation.
{
}
