<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\RecipientListWS;

class UpdateRecipientListResponse
{

    /**
     * @var boolean $UpdateRecipientListResult
     */
    protected $UpdateRecipientListResult = null;

    /**
     * @param boolean $UpdateRecipientListResult
     */
    public function __construct($UpdateRecipientListResult = null)
    {
      $this->UpdateRecipientListResult = $UpdateRecipientListResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateRecipientListResult()
    {
      return $this->UpdateRecipientListResult;
    }

    /**
     * @param boolean $UpdateRecipientListResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\RecipientListWS\UpdateRecipientListResponse
     */
    public function setUpdateRecipientListResult($UpdateRecipientListResult)
    {
      $this->UpdateRecipientListResult = $UpdateRecipientListResult;
      return $this;
    }

}
