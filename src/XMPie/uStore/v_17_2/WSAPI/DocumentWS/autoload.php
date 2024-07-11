<?php


 function autoload_01c9cb05b967f5388dfd1700e2cf2f18($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\DocumentWS\DocumentWS' => __DIR__ .'/DocumentWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\DocumentWS\GetDocumentByProduct' => __DIR__ .'/GetDocumentByProduct.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\DocumentWS\GetDocumentByProductResponse' => __DIR__ .'/GetDocumentByProductResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\DocumentWS\Document' => __DIR__ .'/Document.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\DocumentWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\DocumentWS\GetDocument' => __DIR__ .'/GetDocument.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\DocumentWS\GetDocumentResponse' => __DIR__ .'/GetDocumentResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_01c9cb05b967f5388dfd1700e2cf2f18');

// Do nothing. The rest is just leftovers from the code generation.
{
}
