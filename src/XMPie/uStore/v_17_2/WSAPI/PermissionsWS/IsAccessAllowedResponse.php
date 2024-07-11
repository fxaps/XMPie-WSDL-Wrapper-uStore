<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\PermissionsWS;

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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\PermissionsWS\IsAccessAllowedResponse
     */
    public function setIsAccessAllowedResult($IsAccessAllowedResult)
    {
      $this->IsAccessAllowedResult = $IsAccessAllowedResult;
      return $this;
    }

}
