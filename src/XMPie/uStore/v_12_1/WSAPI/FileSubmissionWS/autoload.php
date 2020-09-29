<?php


function autoload_631822fed8caf8f3017055df0668291c($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\FileSubmissionWS\FileSubmissionWS' => __DIR__ . '/FileSubmissionWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\FileSubmissionWS\ConvertToPDF' => __DIR__ . '/ConvertToPDF.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\FileSubmissionWS\ConvertToPDFResponse' => __DIR__ . '/ConvertToPDFResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\FileSubmissionWS\GeneratePreflightInformation' => __DIR__ . '/GeneratePreflightInformation.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\FileSubmissionWS\GeneratePreflightInformationResponse' => __DIR__ . '/GeneratePreflightInformationResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\FileSubmissionWS\GenerateThumbnails' => __DIR__ . '/GenerateThumbnails.php',
        'XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\FileSubmissionWS\GenerateThumbnailsResponse' => __DIR__ . '/GenerateThumbnailsResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_631822fed8caf8f3017055df0668291c');

// Do nothing. The rest is just leftovers from the code generation.
{
}
