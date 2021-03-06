<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProxyWS;

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
     * @return GetProxyData
     */
    public function setSecurityToken($securityToken)
    {
        $this->securityToken = $securityToken;
        return $this;
    }

}
