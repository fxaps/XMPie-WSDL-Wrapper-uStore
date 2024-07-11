<?php


 function autoload_03704cb9c31a3a5ba9527e089e806f0f($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductPropertyWS\ProductPropertyWS' => __DIR__ .'/ProductPropertyWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductPropertyWS\GetProductPropertyList' => __DIR__ .'/GetProductPropertyList.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductPropertyWS\GetProductPropertyListResponse' => __DIR__ .'/GetProductPropertyListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductPropertyWS\ArrayOfProductProperty' => __DIR__ .'/ArrayOfProductProperty.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductPropertyWS\ProductProperty' => __DIR__ .'/ProductProperty.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductPropertyWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductPropertyWS\FieldOption' => __DIR__ .'/FieldOption.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductPropertyWS\ArrayOfFieldOption' => __DIR__ .'/ArrayOfFieldOption.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductPropertyWS\GetProductProperty' => __DIR__ .'/GetProductProperty.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductPropertyWS\GetProductPropertyResponse' => __DIR__ .'/GetProductPropertyResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductPropertyWS\GetProductPropertyValueList' => __DIR__ .'/GetProductPropertyValueList.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductPropertyWS\GetProductPropertyValueListResponse' => __DIR__ .'/GetProductPropertyValueListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductPropertyWS\ArrayOfProductPropertyValue' => __DIR__ .'/ArrayOfProductPropertyValue.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductPropertyWS\ProductPropertyValue' => __DIR__ .'/ProductPropertyValue.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductPropertyWS\GetProductPropertyValue' => __DIR__ .'/GetProductPropertyValue.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductPropertyWS\GetProductPropertyValueResponse' => __DIR__ .'/GetProductPropertyValueResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_03704cb9c31a3a5ba9527e089e806f0f');

// Do nothing. The rest is just leftovers from the code generation.
{
}
