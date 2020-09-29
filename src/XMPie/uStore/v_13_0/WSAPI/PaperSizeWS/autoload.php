<?php


function autoload_558386e9c9c03e504858d12f2f29cc23($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\PaperSizeWS\PaperSizeWS' => __DIR__ . '/PaperSizeWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\PaperSizeWS\GetPaperSize' => __DIR__ . '/GetPaperSize.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\PaperSizeWS\GetPaperSizeResponse' => __DIR__ . '/GetPaperSizeResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\PaperSizeWS\PaperSize' => __DIR__ . '/PaperSize.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\PaperSizeWS\ReturnObject' => __DIR__ . '/ReturnObject.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_558386e9c9c03e504858d12f2f29cc23');

// Do nothing. The rest is just leftovers from the code generation.
{
}
