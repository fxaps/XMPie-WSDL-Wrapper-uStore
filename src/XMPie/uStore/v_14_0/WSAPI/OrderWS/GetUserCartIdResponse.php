<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderWS;

class GetUserCartIdResponse
{

    /**
     * @var int $GetUserCartIdResult
     */
    protected $GetUserCartIdResult = null;

    /**
     * @param int $GetUserCartIdResult
     */
    public function __construct($GetUserCartIdResult = null)
    {
      $this->GetUserCartIdResult = $GetUserCartIdResult;
    }

    /**
     * @return int
     */
    public function getGetUserCartIdResult()
    {
      return $this->GetUserCartIdResult;
    }

    /**
     * @param int $GetUserCartIdResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderWS\GetUserCartIdResponse
     */
    public function setGetUserCartIdResult($GetUserCartIdResult)
    {
      $this->GetUserCartIdResult = $GetUserCartIdResult;
      return $this;
    }

}
