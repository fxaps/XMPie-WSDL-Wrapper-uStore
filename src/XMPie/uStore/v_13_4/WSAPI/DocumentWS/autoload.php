<?php


 function autoload_ab2230bf0e370c810832b7a5f24246e2($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\DocumentWS\DocumentWS' => __DIR__ .'/DocumentWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\DocumentWS\GetDocumentByProduct' => __DIR__ .'/GetDocumentByProduct.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\DocumentWS\GetDocumentByProductResponse' => __DIR__ .'/GetDocumentByProductResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\DocumentWS\Document' => __DIR__ .'/Document.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\DocumentWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\DocumentWS\GetDocument' => __DIR__ .'/GetDocument.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\DocumentWS\GetDocumentResponse' => __DIR__ .'/GetDocumentResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_ab2230bf0e370c810832b7a5f24246e2');

// Do nothing. The rest is just leftovers from the code generation.
{
}
