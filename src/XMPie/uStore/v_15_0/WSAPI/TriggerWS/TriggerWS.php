<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\TriggerWS;

class TriggerWS extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'InvokeCustomerRegistrationEvent' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\TriggerWS\\InvokeCustomerRegistrationEvent',
  'InvokeCustomerRegistrationEventResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\TriggerWS\\InvokeCustomerRegistrationEventResponse',
  'InvokeCustomerUpdateEvent' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\TriggerWS\\InvokeCustomerUpdateEvent',
  'InvokeCustomerUpdateEventResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\TriggerWS\\InvokeCustomerUpdateEventResponse',
  'InvokeOrderSubmissionEvent' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\TriggerWS\\InvokeOrderSubmissionEvent',
  'InvokeOrderSubmissionEventResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\TriggerWS\\InvokeOrderSubmissionEventResponse',
  'InvokeReorderEvent' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\TriggerWS\\InvokeReorderEvent',
  'InvokeReorderEventResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\TriggerWS\\InvokeReorderEventResponse',
  'InvokeEvent' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\TriggerWS\\InvokeEvent',
  'ArrayOfParameter' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\TriggerWS\\ArrayOfParameter',
  'Parameter' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\TriggerWS\\Parameter',
  'InvokeEventResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_15_0\\WSAPI\\TriggerWS\\InvokeEventResponse',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @throws SoapFault
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'http://localhost/ustorewsapi/TriggerWS.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Invokes the event of customer registration. Any Trigger that is defined for this event will be fired.
     *
     * @param InvokeCustomerRegistrationEvent $parameters
     * @return InvokeCustomerRegistrationEventResponse
     */
    public function InvokeCustomerRegistrationEvent(InvokeCustomerRegistrationEvent $parameters)
    {
      return $this->__soapCall('InvokeCustomerRegistrationEvent', array($parameters));
    }

    /**
     * Invokes the event of customer details update in storefront. Any Trigger that is defined for this event will be fired.
     *
     * @param InvokeCustomerUpdateEvent $parameters
     * @return InvokeCustomerUpdateEventResponse
     */
    public function InvokeCustomerUpdateEvent(InvokeCustomerUpdateEvent $parameters)
    {
      return $this->__soapCall('InvokeCustomerUpdateEvent', array($parameters));
    }

    /**
     * Invokes the event of order submission. Any Trigger that is defined for this event will be fired.
     *
     * @param InvokeOrderSubmissionEvent $parameters
     * @return InvokeOrderSubmissionEventResponse
     */
    public function InvokeOrderSubmissionEvent(InvokeOrderSubmissionEvent $parameters)
    {
      return $this->__soapCall('InvokeOrderSubmissionEvent', array($parameters));
    }

    /**
     * Invokes the event of reorder. Any Trigger that is defined for this event will be fired.
     *
     * @param InvokeReorderEvent $parameters
     * @return InvokeReorderEventResponse
     */
    public function InvokeReorderEvent(InvokeReorderEvent $parameters)
    {
      return $this->__soapCall('InvokeReorderEvent', array($parameters));
    }

    /**
     * Invokes any event by ID (can be used with custom events)
     *
     * @param InvokeEvent $parameters
     * @return InvokeEventResponse
     */
    public function InvokeEvent(InvokeEvent $parameters)
    {
      return $this->__soapCall('InvokeEvent', array($parameters));
    }

}
