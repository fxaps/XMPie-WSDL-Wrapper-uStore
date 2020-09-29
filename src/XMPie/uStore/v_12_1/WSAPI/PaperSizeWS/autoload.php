<?php


function autoload_71a7bf816621c4e363f0a1894bda407e($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\PaperSizeWS\PaperSizeWS' => __DIR__ . '/PaperSizeWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\PaperSizeWS\GetPaperSize' => __DIR__ . '/GetPaperSize.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\PaperSizeWS\GetPaperSizeResponse' => __DIR__ . '/GetPaperSizeResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\PaperSizeWS\PaperSize' => __DIR__ . '/PaperSize.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\PaperSizeWS\ReturnObject' => __DIR__ . '/ReturnObject.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_71a7bf816621c4e363f0a1894bda407e');

// Do nothing. The rest is just leftovers from the code generation.
{
}
