<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProxyWS;

class GetProxyData
{

    /**
     * @var string $securityToken
     */
    protected $securityToken = null;

    /**
     * @param string $securityToken
     */
    public function __construct($securityToken = null)
    {
      $this->securityToken = $securityToken;
    }

    /**
     * @return string
     */
    public function getSecurityToken()
    {
      return $this->securityToken;
    }

    /**
     * @param string $securityToken
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProxyWS\GetProxyData
     */
    public function setSecurityToken($securityToken)
    {
      $this->securityToken = $securityToken;
      return $this;
    }

}
