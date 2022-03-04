<?php


 function autoload_a9fe7029eef4146f262c5a3a40d9e7a8($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\PaperSizeWS\PaperSizeWS' => __DIR__ .'/PaperSizeWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\PaperSizeWS\GetPaperSize' => __DIR__ .'/GetPaperSize.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\PaperSizeWS\GetPaperSizeResponse' => __DIR__ .'/GetPaperSizeResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\PaperSizeWS\PaperSize' => __DIR__ .'/PaperSize.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\PaperSizeWS\ReturnObject' => __DIR__ .'/ReturnObject.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_a9fe7029eef4146f262c5a3a40d9e7a8');

// Do nothing. The rest is just leftovers from the code generation.
{
}
