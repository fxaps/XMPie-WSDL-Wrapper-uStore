<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductionWS;

class GetProcessTicketIdResponse
{

    /**
     * @var int $GetProcessTicketIdResult
     */
    protected $GetProcessTicketIdResult = null;

    /**
     * @param int $GetProcessTicketIdResult
     */
    public function __construct($GetProcessTicketIdResult = null)
    {
      $this->GetProcessTicketIdResult = $GetProcessTicketIdResult;
    }

    /**
     * @return int
     */
    public function getGetProcessTicketIdResult()
    {
      return $this->GetProcessTicketIdResult;
    }

    /**
     * @param int $GetProcessTicketIdResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductionWS\GetProcessTicketIdResponse
     */
    public function setGetProcessTicketIdResult($GetProcessTicketIdResult)
    {
      $this->GetProcessTicketIdResult = $GetProcessTicketIdResult;
      return $this;
    }

}
