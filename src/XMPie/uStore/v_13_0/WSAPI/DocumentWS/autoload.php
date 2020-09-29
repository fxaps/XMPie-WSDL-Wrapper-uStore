<?php


function autoload_40a7e26473999db776bf327243b1ca0b($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\DocumentWS\DocumentWS' => __DIR__ . '/DocumentWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\DocumentWS\GetDocumentByProduct' => __DIR__ . '/GetDocumentByProduct.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\DocumentWS\GetDocumentByProductResponse' => __DIR__ . '/GetDocumentByProductResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\DocumentWS\Document' => __DIR__ . '/Document.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\DocumentWS\ReturnObject' => __DIR__ . '/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\DocumentWS\GetDocument' => __DIR__ . '/GetDocument.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\DocumentWS\GetDocumentResponse' => __DIR__ . '/GetDocumentResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_40a7e26473999db776bf327243b1ca0b');

// Do nothing. The rest is just leftovers from the code generation.
{
}
