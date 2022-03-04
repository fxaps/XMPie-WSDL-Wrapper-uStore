<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS;

class AddRecipientListResponse
{

    /**
     * @var int $AddRecipientListResult
     */
    protected $AddRecipientListResult = null;

    /**
     * @param int $AddRecipientListResult
     */
    public function __construct($AddRecipientListResult = null)
    {
      $this->AddRecipientListResult = $AddRecipientListResult;
    }

    /**
     * @return int
     */
    public function getAddRecipientListResult()
    {
      return $this->AddRecipientListResult;
    }

    /**
     * @param int $AddRecipientListResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\AddRecipientListResponse
     */
    public function setAddRecipientListResult($AddRecipientListResult)
    {
      $this->AddRecipientListResult = $AddRecipientListResult;
      return $this;
    }

}
