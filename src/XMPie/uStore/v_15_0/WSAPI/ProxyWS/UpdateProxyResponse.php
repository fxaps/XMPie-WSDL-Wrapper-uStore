<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProxyWS;

class UpdateProxyResponse
{

    /**
     * @var string $UpdateProxyResult
     */
    protected $UpdateProxyResult = null;

    /**
     * @param string $UpdateProxyResult
     */
    public function __construct($UpdateProxyResult = null)
    {
      $this->UpdateProxyResult = $UpdateProxyResult;
    }

    /**
     * @return string
     */
    public function getUpdateProxyResult()
    {
      return $this->UpdateProxyResult;
    }

    /**
     * @param string $UpdateProxyResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProxyWS\UpdateProxyResponse
     */
    public function setUpdateProxyResult($UpdateProxyResult)
    {
      $this->UpdateProxyResult = $UpdateProxyResult;
      return $this;
    }

}
