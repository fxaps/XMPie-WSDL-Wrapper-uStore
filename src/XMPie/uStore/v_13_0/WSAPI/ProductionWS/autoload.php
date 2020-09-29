<?php


function autoload_88e6ff3f62950b4f2399e170881d747a($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductionWS\ProductionWS' => __DIR__ . '/ProductionWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductionWS\GetProofTicketId' => __DIR__ . '/GetProofTicketId.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductionWS\GetProofTicketIdResponse' => __DIR__ . '/GetProofTicketIdResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductionWS\GetProcessTicketId' => __DIR__ . '/GetProcessTicketId.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductionWS\GetProcessTicketIdResponse' => __DIR__ . '/GetProcessTicketIdResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductionWS\DownloadProof' => __DIR__ . '/DownloadProof.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductionWS\DownloadProofResponse' => __DIR__ . '/DownloadProofResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductionWS\ArrayOfBase64Binary' => __DIR__ . '/ArrayOfBase64Binary.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductionWS\SendToProduction' => __DIR__ . '/SendToProduction.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductionWS\SendToProductionResponse' => __DIR__ . '/SendToProductionResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductionWS\GetProductionOutputUrl' => __DIR__ . '/GetProductionOutputUrl.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductionWS\GetProductionOutputUrlResponse' => __DIR__ . '/GetProductionOutputUrlResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductionWS\GetProductionStatus' => __DIR__ . '/GetProductionStatus.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductionWS\GetProductionStatusResponse' => __DIR__ . '/GetProductionStatusResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductionWS\ProductionStatus' => __DIR__ . '/ProductionStatus.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductionWS\ArrayOfString' => __DIR__ . '/ArrayOfString.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductionWS\SendToProductionOneCopy' => __DIR__ . '/SendToProductionOneCopy.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductionWS\SendToProductionOneCopyResponse' => __DIR__ . '/SendToProductionOneCopyResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductionWS\LaunchCircleProjectOrderProduct' => __DIR__ . '/LaunchCircleProjectOrderProduct.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductionWS\LaunchCircleProjectOrderProductResponse' => __DIR__ . '/LaunchCircleProjectOrderProductResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductionWS\TerminateCircleProjectOrderProduct' => __DIR__ . '/TerminateCircleProjectOrderProduct.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductionWS\TerminateCircleProjectOrderProductResponse' => __DIR__ . '/TerminateCircleProjectOrderProductResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_88e6ff3f62950b4f2399e170881d747a');

// Do nothing. The rest is just leftovers from the code generation.
{
}
