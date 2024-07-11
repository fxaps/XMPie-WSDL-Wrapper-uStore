<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderWS;

class GetCartIdResponse
{

    /**
     * @var int $GetCartIdResult
     */
    protected $GetCartIdResult = null;

    /**
     * @param int $GetCartIdResult
     */
    public function __construct($GetCartIdResult = null)
    {
      $this->GetCartIdResult = $GetCartIdResult;
    }

    /**
     * @return int
     */
    public function getGetCartIdResult()
    {
      return $this->GetCartIdResult;
    }

    /**
     * @param int $GetCartIdResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderWS\GetCartIdResponse
     */
    public function setGetCartIdResult($GetCartIdResult)
    {
      $this->GetCartIdResult = $GetCartIdResult;
      return $this;
    }

}
