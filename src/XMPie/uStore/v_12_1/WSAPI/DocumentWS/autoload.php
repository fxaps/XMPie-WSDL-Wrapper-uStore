<?php


function autoload_fdf8e2d1d9a84f56c2e6dfeb7ebb849c($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\DocumentWS\DocumentWS' => __DIR__ . '/DocumentWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\DocumentWS\GetDocumentByProduct' => __DIR__ . '/GetDocumentByProduct.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\DocumentWS\GetDocumentByProductResponse' => __DIR__ . '/GetDocumentByProductResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\DocumentWS\Document' => __DIR__ . '/Document.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\DocumentWS\ReturnObject' => __DIR__ . '/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\DocumentWS\GetDocument' => __DIR__ . '/GetDocument.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\DocumentWS\GetDocumentResponse' => __DIR__ . '/GetDocumentResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_fdf8e2d1d9a84f56c2e6dfeb7ebb849c');

// Do nothing. The rest is just leftovers from the code generation.
{
}
