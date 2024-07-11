<?php


 function autoload_f3197093d4438ff8b6d9499d0aebb5ab($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\FileSubmissionWS\FileSubmissionWS' => __DIR__ .'/FileSubmissionWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\FileSubmissionWS\ConvertToPDF' => __DIR__ .'/ConvertToPDF.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\FileSubmissionWS\ConvertToPDFResponse' => __DIR__ .'/ConvertToPDFResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\FileSubmissionWS\GeneratePreflightInformation' => __DIR__ .'/GeneratePreflightInformation.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\FileSubmissionWS\GeneratePreflightInformationResponse' => __DIR__ .'/GeneratePreflightInformationResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\FileSubmissionWS\GenerateThumbnails' => __DIR__ .'/GenerateThumbnails.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\FileSubmissionWS\GenerateThumbnailsResponse' => __DIR__ .'/GenerateThumbnailsResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_f3197093d4438ff8b6d9499d0aebb5ab');

// Do nothing. The rest is just leftovers from the code generation.
{
}
