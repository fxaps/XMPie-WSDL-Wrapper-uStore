<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ActualDeliveryWS;

use SoapClient;

class ActualDeliveryWS extends SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetActualDelivery' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ActualDeliveryWS\\GetActualDelivery',
        'GetActualDeliveryResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ActualDeliveryWS\\GetActualDeliveryResponse',
        'ActualDelivery' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ActualDeliveryWS\\ActualDelivery',
        'ReturnObject' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ActualDeliveryWS\\ReturnObject',
        'CreateDelivery' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ActualDeliveryWS\\CreateDelivery',
        'ArrayOfInt' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ActualDeliveryWS\\ArrayOfInt',
        'CreateDeliveryResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ActualDeliveryWS\\CreateDeliveryResponse',
        'CreateDeliveryWithDetails' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ActualDeliveryWS\\CreateDeliveryWithDetails',
        'CreateDeliveryWithDetailsResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ActualDeliveryWS\\CreateDeliveryWithDetailsResponse',
        'CreateDeliveryByOrderProducts' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ActualDeliveryWS\\CreateDeliveryByOrderProducts',
        'CreateDeliveryByOrderProductsResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ActualDeliveryWS\\CreateDeliveryByOrderProductsResponse',
        'CreateDeliveryWithDetailsByOrderProducts' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ActualDeliveryWS\\CreateDeliveryWithDetailsByOrderProducts',
        'CreateDeliveryWithDetailsByOrderProductsResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ActualDeliveryWS\\CreateDeliveryWithDetailsByOrderProductsResponse',
        'ManualDeliveryArrived' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ActualDeliveryWS\\ManualDeliveryArrived',
        'ManualDeliveryArrivedResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ActualDeliveryWS\\ManualDeliveryArrivedResponse',
        'StringArray' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\ActualDeliveryWS\\StringArray',
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
        $options = array_merge(array(
            'features' => 1,
        ), $options);
        if (!$wsdl) {
            $wsdl = 'http://localhost/ustorewsapi/ActualDeliveryWS.asmx?wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * Returns the data of the actual delivery which its ID is given.
     *
     * @param GetActualDelivery $parameters
     * @return GetActualDeliveryResponse
     */
    public function GetActualDelivery(GetActualDelivery $parameters)
    {
        return $this->__soapCall('GetActualDelivery', array($parameters));
    }

    /**
     * Creates a delivery for the supplied delivery items, and saves the delivery date and tracking number.
     *
     * @param CreateDelivery $parameters
     * @return CreateDeliveryResponse
     */
    public function CreateDelivery(CreateDelivery $parameters)
    {
        return $this->__soapCall('CreateDelivery', array($parameters));
    }

    /**
     * Creates a delivery for the supplied delivery items, and saves the delivery date, tracking number, delivery price and delivery service ID.
     *
     * @param CreateDeliveryWithDetails $parameters
     * @return CreateDeliveryWithDetailsResponse
     */
    public function CreateDeliveryWithDetails(CreateDeliveryWithDetails $parameters)
    {
        return $this->__soapCall('CreateDeliveryWithDetails', array($parameters));
    }

    /**
     * Creates a delivery for the supplied order products (items), and saves the delivery date and tracking number.
     *
     * @param CreateDeliveryByOrderProducts $parameters
     * @return CreateDeliveryByOrderProductsResponse
     */
    public function CreateDeliveryByOrderProducts(CreateDeliveryByOrderProducts $parameters)
    {
        return $this->__soapCall('CreateDeliveryByOrderProducts', array($parameters));
    }

    /**
     * Creates a delivery for the supplied order products (items), and saves the delivery date, tracking number, delivery price and delivery service ID.
     *
     * @param CreateDeliveryWithDetailsByOrderProducts $parameters
     * @return CreateDeliveryWithDetailsByOrderProductsResponse
     */
    public function CreateDeliveryWithDetailsByOrderProducts(CreateDeliveryWithDetailsByOrderProducts $parameters)
    {
        return $this->__soapCall('CreateDeliveryWithDetailsByOrderProducts', array($parameters));
    }

    /**
     * Moves the order products of the delivery to the Delivered queue.
     *
     * @param ManualDeliveryArrived $parameters
     * @return ManualDeliveryArrivedResponse
     */
    public function ManualDeliveryArrived(ManualDeliveryArrived $parameters)
    {
        return $this->__soapCall('ManualDeliveryArrived', array($parameters));
    }

}
