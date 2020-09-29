<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\PermissionsWS;

class IsAccessAllowedResponse
{

    /**
     * @var boolean $IsAccessAllowedResult
     */
    protected $IsAccessAllowedResult = null;

    /**
     * @param boolean $IsAccessAllowedResult
     */
    public function __construct($IsAccessAllowedResult = null)
    {
        $this->IsAccessAllowedResult = $IsAccessAllowedResult;
    }

    /**
     * @return boolean
     */
    public function getIsAccessAllowedResult()
    {
        return $this->IsAccessAllowedResult;
    }

    /**
     * @param boolean $IsAccessAllowedResult
     * @return IsAccessAllowedResponse
     */
    public function setIsAccessAllowedResult($IsAccessAllowedResult)
    {
        $this->IsAccessAllowedResult = $IsAccessAllowedResult;
        return $this;
    }

}
