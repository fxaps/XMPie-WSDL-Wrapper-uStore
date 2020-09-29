<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\PermissionsWS;

use SoapClient;

class PermissionsWS extends SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'IsAllowed' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\PermissionsWS\\IsAllowed',
        'IsAllowedResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\PermissionsWS\\IsAllowedResponse',
        'AddPermission' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\PermissionsWS\\AddPermission',
        'AddPermissionResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\PermissionsWS\\AddPermissionResponse',
        'IsStoreFrontAccessAllowed' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\PermissionsWS\\IsStoreFrontAccessAllowed',
        'IsStoreFrontAccessAllowedResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\PermissionsWS\\IsStoreFrontAccessAllowedResponse',
        'IsAccessAllowed' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\PermissionsWS\\IsAccessAllowed',
        'IsAccessAllowedResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_12_1\\WSAPI\\PermissionsWS\\IsAccessAllowedResponse',
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
            $wsdl = 'http://localhost/ustorewsapi/PermissionsWS.asmx?wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * Checks if the given user is allowed to perform the given operation on the given Resource.
     *
     * @param IsAllowed $parameters
     * @return IsAllowedResponse
     */
    public function IsAllowed(IsAllowed $parameters)
    {
        return $this->__soapCall('IsAllowed', array($parameters));
    }

    /**
     * Adds the permission to perform the given operation on the given Resource to the given user.
     *
     * @param AddPermission $parameters
     * @return AddPermissionResponse
     */
    public function AddPermission(AddPermission $parameters)
    {
        return $this->__soapCall('AddPermission', array($parameters));
    }

    /**
     * Indicates whether the given user is assigned the given permission.
     *
     * @param IsStoreFrontAccessAllowed $parameters
     * @return IsStoreFrontAccessAllowedResponse
     */
    public function IsStoreFrontAccessAllowed(IsStoreFrontAccessAllowed $parameters)
    {
        return $this->__soapCall('IsStoreFrontAccessAllowed', array($parameters));
    }

    /**
     * Indicates whether the given user is assigned the given permission.
     *
     * @param IsAccessAllowed $parameters
     * @return IsAccessAllowedResponse
     */
    public function IsAccessAllowed(IsAccessAllowed $parameters)
    {
        return $this->__soapCall('IsAccessAllowed', array($parameters));
    }

}
