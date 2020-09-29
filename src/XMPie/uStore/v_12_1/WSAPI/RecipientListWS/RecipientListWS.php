<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\RecipientListWS;

use SoapClient;

class RecipientListWS extends SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetRecipientList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\RecipientListWS\\GetRecipientList',
        'GetRecipientListResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\RecipientListWS\\GetRecipientListResponse',
        'RecipientList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\RecipientListWS\\RecipientList',
        'ReturnObject' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\RecipientListWS\\ReturnObject',
        'AddRecipientList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\RecipientListWS\\AddRecipientList',
        'AddRecipientListResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\RecipientListWS\\AddRecipientListResponse',
        'UpdateRecipientList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\RecipientListWS\\UpdateRecipientList',
        'UpdateRecipientListResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\RecipientListWS\\UpdateRecipientListResponse',
        'BeginDownloadRecipientListFromCircle' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\RecipientListWS\\BeginDownloadRecipientListFromCircle',
        'BeginDownloadRecipientListFromCircleResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\RecipientListWS\\BeginDownloadRecipientListFromCircleResponse',
        'DownloadRecipientListFromCircle' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\RecipientListWS\\DownloadRecipientListFromCircle',
        'DownloadRecipientListFromCircleResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\RecipientListWS\\DownloadRecipientListFromCircleResponse',
        'DownloadRecipientListByToken' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\RecipientListWS\\DownloadRecipientListByToken',
        'DownloadRecipientListByTokenResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\RecipientListWS\\DownloadRecipientListByTokenResponse',
        'BeginDownloadUnsubscribeListFromCircle' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\RecipientListWS\\BeginDownloadUnsubscribeListFromCircle',
        'BeginDownloadUnsubscribeListFromCircleResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\RecipientListWS\\BeginDownloadUnsubscribeListFromCircleResponse',
        'DownloadUnsubscribeListFromCircle' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\RecipientListWS\\DownloadUnsubscribeListFromCircle',
        'DownloadUnsubscribeListFromCircleResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\RecipientListWS\\DownloadUnsubscribeListFromCircleResponse',
        'DownloadUnsubscribeListByToken' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\RecipientListWS\\DownloadUnsubscribeListByToken',
        'DownloadUnsubscribeListByTokenResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\RecipientListWS\\DownloadUnsubscribeListByTokenResponse',
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
            $wsdl = 'http://localhost/ustorewsapi/RecipientListWS.asmx?wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * Returns the data of the given Recipient list.
     *
     * @param GetRecipientList $parameters
     * @return GetRecipientListResponse
     */
    public function GetRecipientList(GetRecipientList $parameters)
    {
        return $this->__soapCall('GetRecipientList', array($parameters));
    }

    /**
     * Adds a new recipient list with the given data
     *
     * @param AddRecipientList $parameters
     * @return AddRecipientListResponse
     */
    public function AddRecipientList(AddRecipientList $parameters)
    {
        return $this->__soapCall('AddRecipientList', array($parameters));
    }

    /**
     * Updates an existing recipient list with the given data
     *
     * @param UpdateRecipientList $parameters
     * @return UpdateRecipientListResponse
     */
    public function UpdateRecipientList(UpdateRecipientList $parameters)
    {
        return $this->__soapCall('UpdateRecipientList', array($parameters));
    }

    /**
     * Begins an asynchronous download of the recipient list of an XM Campaign.
     *
     * @param BeginDownloadRecipientListFromCircle $parameters
     * @return BeginDownloadRecipientListFromCircleResponse
     */
    public function BeginDownloadRecipientListFromCircle(BeginDownloadRecipientListFromCircle $parameters)
    {
        return $this->__soapCall('BeginDownloadRecipientListFromCircle', array($parameters));
    }

    /**
     * Downloads the recipient list of an XM Campaign order product.
     *
     * @param DownloadRecipientListFromCircle $parameters
     * @return DownloadRecipientListFromCircleResponse
     */
    public function DownloadRecipientListFromCircle(DownloadRecipientListFromCircle $parameters)
    {
        return $this->__soapCall('DownloadRecipientListFromCircle', array($parameters));
    }

    /**
     * Downloads the recipient list of an XM Campaign order product to uStore server.
     *
     * @param DownloadRecipientListByToken $parameters
     * @return DownloadRecipientListByTokenResponse
     */
    public function DownloadRecipientListByToken(DownloadRecipientListByToken $parameters)
    {
        return $this->__soapCall('DownloadRecipientListByToken', array($parameters));
    }

    /**
     * Begins an asynchronous download of the unsubscribe list of an XM Campaign.
     *
     * @param BeginDownloadUnsubscribeListFromCircle $parameters
     * @return BeginDownloadUnsubscribeListFromCircleResponse
     */
    public function BeginDownloadUnsubscribeListFromCircle(BeginDownloadUnsubscribeListFromCircle $parameters)
    {
        return $this->__soapCall('BeginDownloadUnsubscribeListFromCircle', array($parameters));
    }

    /**
     * Downloads the unsubscribe list of an XM Campaign order product to uProduce Temp Storage.
     *
     * @param DownloadUnsubscribeListFromCircle $parameters
     * @return DownloadUnsubscribeListFromCircleResponse
     */
    public function DownloadUnsubscribeListFromCircle(DownloadUnsubscribeListFromCircle $parameters)
    {
        return $this->__soapCall('DownloadUnsubscribeListFromCircle', array($parameters));
    }

    /**
     * Downloads the unsubscribe list of an XM Campaign order product to uStore server.
     *
     * @param DownloadUnsubscribeListByToken $parameters
     * @return DownloadUnsubscribeListByTokenResponse
     */
    public function DownloadUnsubscribeListByToken(DownloadUnsubscribeListByToken $parameters)
    {
        return $this->__soapCall('DownloadUnsubscribeListByToken', array($parameters));
    }

}
