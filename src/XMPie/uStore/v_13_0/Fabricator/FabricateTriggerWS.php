<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\TriggerWS\InvokeCustomerRegistrationEvent;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\TriggerWS\InvokeCustomerRegistrationEventResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\TriggerWS\InvokeCustomerUpdateEvent;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\TriggerWS\InvokeCustomerUpdateEventResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\TriggerWS\InvokeOrderSubmissionEvent;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\TriggerWS\InvokeOrderSubmissionEventResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\TriggerWS\InvokeReorderEvent;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\TriggerWS\InvokeReorderEventResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\TriggerWS\InvokeEvent;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\TriggerWS\ArrayOfParameter;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\TriggerWS\Parameter;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\TriggerWS\InvokeEventResponse;


class FabricateTriggerWS
{
    private $paramAutoSet;

    /**
     * Constructor.
     *
     * @param array $paramAutoSet
     */
    public function __construct($paramAutoSet = [])
    {
        $this->setParamAutoSet($paramAutoSet);
    }


    /**
     * @return array
     */
    public function getParamAutoSet()
    {
        return $this->paramAutoSet;
    }


    /**
     * @param array $paramAutoSet
     */
    public function setParamAutoSet($paramAutoSet)
    {
        $this->paramAutoSet = $paramAutoSet;
    }


    /**
     * @param array $paramAutoSet
     * @return InvokeCustomerRegistrationEvent
     */
    public function InvokeCustomerRegistrationEvent($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $InvokeCustomerRegistrationEvent = new InvokeCustomerRegistrationEvent();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($InvokeCustomerRegistrationEvent, $methodName)) {
                $InvokeCustomerRegistrationEvent->$methodName($paramValue);
            }
        }
        return $InvokeCustomerRegistrationEvent;
    }


    /**
     * @param array $paramAutoSet
     * @return InvokeCustomerRegistrationEventResponse
     */
    public function InvokeCustomerRegistrationEventResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $InvokeCustomerRegistrationEventResponse = new InvokeCustomerRegistrationEventResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($InvokeCustomerRegistrationEventResponse, $methodName)) {
                $InvokeCustomerRegistrationEventResponse->$methodName($paramValue);
            }
        }
        return $InvokeCustomerRegistrationEventResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return InvokeCustomerUpdateEvent
     */
    public function InvokeCustomerUpdateEvent($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $InvokeCustomerUpdateEvent = new InvokeCustomerUpdateEvent();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($InvokeCustomerUpdateEvent, $methodName)) {
                $InvokeCustomerUpdateEvent->$methodName($paramValue);
            }
        }
        return $InvokeCustomerUpdateEvent;
    }


    /**
     * @param array $paramAutoSet
     * @return InvokeCustomerUpdateEventResponse
     */
    public function InvokeCustomerUpdateEventResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $InvokeCustomerUpdateEventResponse = new InvokeCustomerUpdateEventResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($InvokeCustomerUpdateEventResponse, $methodName)) {
                $InvokeCustomerUpdateEventResponse->$methodName($paramValue);
            }
        }
        return $InvokeCustomerUpdateEventResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return InvokeOrderSubmissionEvent
     */
    public function InvokeOrderSubmissionEvent($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $InvokeOrderSubmissionEvent = new InvokeOrderSubmissionEvent();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($InvokeOrderSubmissionEvent, $methodName)) {
                $InvokeOrderSubmissionEvent->$methodName($paramValue);
            }
        }
        return $InvokeOrderSubmissionEvent;
    }


    /**
     * @param array $paramAutoSet
     * @return InvokeOrderSubmissionEventResponse
     */
    public function InvokeOrderSubmissionEventResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $InvokeOrderSubmissionEventResponse = new InvokeOrderSubmissionEventResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($InvokeOrderSubmissionEventResponse, $methodName)) {
                $InvokeOrderSubmissionEventResponse->$methodName($paramValue);
            }
        }
        return $InvokeOrderSubmissionEventResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return InvokeReorderEvent
     */
    public function InvokeReorderEvent($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $InvokeReorderEvent = new InvokeReorderEvent();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($InvokeReorderEvent, $methodName)) {
                $InvokeReorderEvent->$methodName($paramValue);
            }
        }
        return $InvokeReorderEvent;
    }


    /**
     * @param array $paramAutoSet
     * @return InvokeReorderEventResponse
     */
    public function InvokeReorderEventResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $InvokeReorderEventResponse = new InvokeReorderEventResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($InvokeReorderEventResponse, $methodName)) {
                $InvokeReorderEventResponse->$methodName($paramValue);
            }
        }
        return $InvokeReorderEventResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return InvokeEvent
     */
    public function InvokeEvent($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $InvokeEvent = new InvokeEvent();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($InvokeEvent, $methodName)) {
                $InvokeEvent->$methodName($paramValue);
            }
        }
        return $InvokeEvent;
    }


    /**
     * @param array $paramAutoSet
     * @return ArrayOfParameter
     */
    public function ArrayOfParameter($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfParameter = new ArrayOfParameter();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfParameter, $methodName)) {
                $ArrayOfParameter->$methodName($paramValue);
            }
        }
        return $ArrayOfParameter;
    }


    /**
     * @param array $paramAutoSet
     * @return Parameter
     */
    public function Parameter($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Parameter = new Parameter();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Parameter, $methodName)) {
                $Parameter->$methodName($paramValue);
            }
        }
        return $Parameter;
    }


    /**
     * @param array $paramAutoSet
     * @return InvokeEventResponse
     */
    public function InvokeEventResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $InvokeEventResponse = new InvokeEventResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($InvokeEventResponse, $methodName)) {
                $InvokeEventResponse->$methodName($paramValue);
            }
        }
        return $InvokeEventResponse;
    }


}

?>
