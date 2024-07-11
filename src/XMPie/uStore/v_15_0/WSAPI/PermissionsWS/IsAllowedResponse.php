<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\PermissionsWS;

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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\PermissionsWS\IsAllowedResponse
     */
    public function setIsAllowedResult($IsAllowedResult)
    {
      $this->IsAllowedResult = $IsAllowedResult;
      return $this;
    }

}
