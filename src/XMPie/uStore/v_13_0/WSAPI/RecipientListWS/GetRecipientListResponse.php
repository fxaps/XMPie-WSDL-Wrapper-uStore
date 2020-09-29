<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\RecipientListWS;

class GetRecipientListResponse
{

    /**
     * @var RecipientList $GetRecipientListResult
     */
    protected $GetRecipientListResult = null;

    /**
     * @param RecipientList $GetRecipientListResult
     */
    public function __construct($GetRecipientListResult = null)
    {
        $this->GetRecipientListResult = $GetRecipientListResult;
    }

    /**
     * @return RecipientList
     */
    public function getGetRecipientListResult()
    {
        return $this->GetRecipientListResult;
    }

    /**
     * @param RecipientList $GetRecipientListResult
     * @return GetRecipientListResponse
     */
    public function setGetRecipientListResult($GetRecipientListResult)
    {
        $this->GetRecipientListResult = $GetRecipientListResult;
        return $this;
    }

}
