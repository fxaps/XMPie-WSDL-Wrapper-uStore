<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\PermissionsWS;

class IsStoreFrontAccessAllowedResponse
{

    /**
     * @var boolean $IsStoreFrontAccessAllowedResult
     */
    protected $IsStoreFrontAccessAllowedResult = null;

    /**
     * @param boolean $IsStoreFrontAccessAllowedResult
     */
    public function __construct($IsStoreFrontAccessAllowedResult = null)
    {
        $this->IsStoreFrontAccessAllowedResult = $IsStoreFrontAccessAllowedResult;
    }

    /**
     * @return boolean
     */
    public function getIsStoreFrontAccessAllowedResult()
    {
        return $this->IsStoreFrontAccessAllowedResult;
    }

    /**
     * @param boolean $IsStoreFrontAccessAllowedResult
     * @return IsStoreFrontAccessAllowedResponse
     */
    public function setIsStoreFrontAccessAllowedResult($IsStoreFrontAccessAllowedResult)
    {
        $this->IsStoreFrontAccessAllowedResult = $IsStoreFrontAccessAllowedResult;
        return $this;
    }

}
