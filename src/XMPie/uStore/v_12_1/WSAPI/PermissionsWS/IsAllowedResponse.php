<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\PermissionsWS;

class IsAllowedResponse
{

    /**
     * @var boolean $IsAllowedResult
     */
    protected $IsAllowedResult = null;

    /**
     * @param boolean $IsAllowedResult
     */
    public function __construct($IsAllowedResult = null)
    {
        $this->IsAllowedResult = $IsAllowedResult;
    }

    /**
     * @return boolean
     */
    public function getIsAllowedResult()
    {
        return $this->IsAllowedResult;
    }

    /**
     * @param boolean $IsAllowedResult
     * @return IsAllowedResponse
     */
    public function setIsAllowedResult($IsAllowedResult)
    {
        $this->IsAllowedResult = $IsAllowedResult;
        return $this;
    }

}
