<?php


 function autoload_eeb12d0b9a283125112333c4d1ed661b($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\OrderWS' => __DIR__ .'/OrderWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetOrder' => __DIR__ .'/GetOrder.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetOrderResponse' => __DIR__ .'/GetOrderResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order' => __DIR__ .'/Order.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetOrderHistory' => __DIR__ .'/GetOrderHistory.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetOrderHistoryResponse' => __DIR__ .'/GetOrderHistoryResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\ArrayOfOrder' => __DIR__ .'/ArrayOfOrder.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetCartId' => __DIR__ .'/GetCartId.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetCartIdResponse' => __DIR__ .'/GetCartIdResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetUserCartId' => __DIR__ .'/GetUserCartId.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetUserCartIdResponse' => __DIR__ .'/GetUserCartIdResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\SubmitOrder' => __DIR__ .'/SubmitOrder.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\SubmitOrderResponse' => __DIR__ .'/SubmitOrderResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\SubmitOrderProducts' => __DIR__ .'/SubmitOrderProducts.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\ArrayOfInt' => __DIR__ .'/ArrayOfInt.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\SubmitOrderProductsResponse' => __DIR__ .'/SubmitOrderProductsResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\SubmitOrderWithClearingAndDelivery' => __DIR__ .'/SubmitOrderWithClearingAndDelivery.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\SubmitOrderWithClearingAndDeliveryResponse' => __DIR__ .'/SubmitOrderWithClearingAndDeliveryResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetLatestOrdersXml' => __DIR__ .'/GetLatestOrdersXml.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetLatestOrdersXmlResponse' => __DIR__ .'/GetLatestOrdersXmlResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetOrderXml' => __DIR__ .'/GetOrderXml.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\GetOrderXmlResponse' => __DIR__ .'/GetOrderXmlResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\UpdateBillingAddress' => __DIR__ .'/UpdateBillingAddress.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\UpdateBillingAddressResponse' => __DIR__ .'/UpdateBillingAddressResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\UpdateDelivery' => __DIR__ .'/UpdateDelivery.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\UpdateDeliveryResponse' => __DIR__ .'/UpdateDeliveryResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\UpdateClearing' => __DIR__ .'/UpdateClearing.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\UpdateClearingResponse' => __DIR__ .'/UpdateClearingResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\StringArray' => __DIR__ .'/StringArray.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_eeb12d0b9a283125112333c4d1ed661b');

// Do nothing. The rest is just leftovers from the code generation.
{
}
