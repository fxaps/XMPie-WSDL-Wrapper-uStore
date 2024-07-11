<?php


 function autoload_9de78c73636cbe76971afc2fa0148504($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TriggerWS\TriggerWS' => __DIR__ .'/TriggerWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TriggerWS\InvokeCustomerRegistrationEvent' => __DIR__ .'/InvokeCustomerRegistrationEvent.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TriggerWS\InvokeCustomerRegistrationEventResponse' => __DIR__ .'/InvokeCustomerRegistrationEventResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TriggerWS\InvokeCustomerUpdateEvent' => __DIR__ .'/InvokeCustomerUpdateEvent.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TriggerWS\InvokeCustomerUpdateEventResponse' => __DIR__ .'/InvokeCustomerUpdateEventResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TriggerWS\InvokeOrderSubmissionEvent' => __DIR__ .'/InvokeOrderSubmissionEvent.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TriggerWS\InvokeOrderSubmissionEventResponse' => __DIR__ .'/InvokeOrderSubmissionEventResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TriggerWS\InvokeReorderEvent' => __DIR__ .'/InvokeReorderEvent.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TriggerWS\InvokeReorderEventResponse' => __DIR__ .'/InvokeReorderEventResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TriggerWS\InvokeEvent' => __DIR__ .'/InvokeEvent.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TriggerWS\ArrayOfParameter' => __DIR__ .'/ArrayOfParameter.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TriggerWS\Parameter' => __DIR__ .'/Parameter.php',
        'XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TriggerWS\InvokeEventResponse' => __DIR__ .'/InvokeEventResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_9de78c73636cbe76971afc2fa0148504');

// Do nothing. The rest is just leftovers from the code generation.
{
}
