<?php


 function autoload_9cd28c1f823affa12028c077c1e53fa5($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\AddressWS' => __DIR__ .'/AddressWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\AddAddress' => __DIR__ .'/AddAddress.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\Address' => __DIR__ .'/Address.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\AddAddressResponse' => __DIR__ .'/AddAddressResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\UpdateAddress' => __DIR__ .'/UpdateAddress.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\UpdateAddressResponse' => __DIR__ .'/UpdateAddressResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\GetAddress' => __DIR__ .'/GetAddress.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\GetAddressResponse' => __DIR__ .'/GetAddressResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\GetAddressListByCustomer' => __DIR__ .'/GetAddressListByCustomer.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\GetAddressListByCustomerResponse' => __DIR__ .'/GetAddressListByCustomerResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\ArrayOfAddress' => __DIR__ .'/ArrayOfAddress.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\GetAddressListByUser' => __DIR__ .'/GetAddressListByUser.php',
        'XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\GetAddressListByUserResponse' => __DIR__ .'/GetAddressListByUserResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_9cd28c1f823affa12028c077c1e53fa5');

// Do nothing. The rest is just leftovers from the code generation.
{
}
