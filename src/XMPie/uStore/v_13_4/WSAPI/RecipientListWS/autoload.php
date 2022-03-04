<?php


 function autoload_832cb3978eb97ad8a34f91b61fc9012d($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\RecipientListWS' => __DIR__ .'/RecipientListWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\GetRecipientList' => __DIR__ .'/GetRecipientList.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\GetRecipientListResponse' => __DIR__ .'/GetRecipientListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\RecipientList' => __DIR__ .'/RecipientList.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\AddRecipientList' => __DIR__ .'/AddRecipientList.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\AddRecipientListResponse' => __DIR__ .'/AddRecipientListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\UpdateRecipientList' => __DIR__ .'/UpdateRecipientList.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\UpdateRecipientListResponse' => __DIR__ .'/UpdateRecipientListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\BeginDownloadRecipientListFromCircle' => __DIR__ .'/BeginDownloadRecipientListFromCircle.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\BeginDownloadRecipientListFromCircleResponse' => __DIR__ .'/BeginDownloadRecipientListFromCircleResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\DownloadRecipientListFromCircle' => __DIR__ .'/DownloadRecipientListFromCircle.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\DownloadRecipientListFromCircleResponse' => __DIR__ .'/DownloadRecipientListFromCircleResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\DownloadRecipientListByToken' => __DIR__ .'/DownloadRecipientListByToken.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\DownloadRecipientListByTokenResponse' => __DIR__ .'/DownloadRecipientListByTokenResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\BeginDownloadUnsubscribeListFromCircle' => __DIR__ .'/BeginDownloadUnsubscribeListFromCircle.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\BeginDownloadUnsubscribeListFromCircleResponse' => __DIR__ .'/BeginDownloadUnsubscribeListFromCircleResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\DownloadUnsubscribeListFromCircle' => __DIR__ .'/DownloadUnsubscribeListFromCircle.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\DownloadUnsubscribeListFromCircleResponse' => __DIR__ .'/DownloadUnsubscribeListFromCircleResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\DownloadUnsubscribeListByToken' => __DIR__ .'/DownloadUnsubscribeListByToken.php',
        'XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\DownloadUnsubscribeListByTokenResponse' => __DIR__ .'/DownloadUnsubscribeListByTokenResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_832cb3978eb97ad8a34f91b61fc9012d');

// Do nothing. The rest is just leftovers from the code generation.
{
}
