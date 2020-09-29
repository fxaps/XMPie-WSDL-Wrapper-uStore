<?php


function autoload_469e2bb70846b8c367368feb28162f63($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\FileSubmissionWS\FileSubmissionWS' => __DIR__ . '/FileSubmissionWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\FileSubmissionWS\ConvertToPDF' => __DIR__ . '/ConvertToPDF.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\FileSubmissionWS\ConvertToPDFResponse' => __DIR__ . '/ConvertToPDFResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\FileSubmissionWS\GeneratePreflightInformation' => __DIR__ . '/GeneratePreflightInformation.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\FileSubmissionWS\GeneratePreflightInformationResponse' => __DIR__ . '/GeneratePreflightInformationResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\FileSubmissionWS\GenerateThumbnails' => __DIR__ . '/GenerateThumbnails.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\FileSubmissionWS\GenerateThumbnailsResponse' => __DIR__ . '/GenerateThumbnailsResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_469e2bb70846b8c367368feb28162f63');

// Do nothing. The rest is just leftovers from the code generation.
{
}
