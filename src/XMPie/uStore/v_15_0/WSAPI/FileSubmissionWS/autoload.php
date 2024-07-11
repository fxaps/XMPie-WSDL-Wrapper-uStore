<?php


 function autoload_dcdfb19c8088028458b0bc04f13c1d91($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\FileSubmissionWS\FileSubmissionWS' => __DIR__ .'/FileSubmissionWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\FileSubmissionWS\ConvertToPDF' => __DIR__ .'/ConvertToPDF.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\FileSubmissionWS\ConvertToPDFResponse' => __DIR__ .'/ConvertToPDFResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\FileSubmissionWS\GeneratePreflightInformation' => __DIR__ .'/GeneratePreflightInformation.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\FileSubmissionWS\GeneratePreflightInformationResponse' => __DIR__ .'/GeneratePreflightInformationResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\FileSubmissionWS\GenerateThumbnails' => __DIR__ .'/GenerateThumbnails.php',
        'XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\FileSubmissionWS\GenerateThumbnailsResponse' => __DIR__ .'/GenerateThumbnailsResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_dcdfb19c8088028458b0bc04f13c1d91');

// Do nothing. The rest is just leftovers from the code generation.
{
}
