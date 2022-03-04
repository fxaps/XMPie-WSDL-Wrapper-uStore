<?php


 function autoload_5fe0bd210b338468740ae7f18acd4b26($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\FileSubmissionWS\FileSubmissionWS' => __DIR__ .'/FileSubmissionWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\FileSubmissionWS\ConvertToPDF' => __DIR__ .'/ConvertToPDF.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\FileSubmissionWS\ConvertToPDFResponse' => __DIR__ .'/ConvertToPDFResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\FileSubmissionWS\GeneratePreflightInformation' => __DIR__ .'/GeneratePreflightInformation.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\FileSubmissionWS\GeneratePreflightInformationResponse' => __DIR__ .'/GeneratePreflightInformationResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\FileSubmissionWS\GenerateThumbnails' => __DIR__ .'/GenerateThumbnails.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\FileSubmissionWS\GenerateThumbnailsResponse' => __DIR__ .'/GenerateThumbnailsResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_5fe0bd210b338468740ae7f18acd4b26');

// Do nothing. The rest is just leftovers from the code generation.
{
}
