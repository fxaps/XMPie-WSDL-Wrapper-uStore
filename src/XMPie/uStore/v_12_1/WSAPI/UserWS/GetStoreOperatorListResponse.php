<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS;

class GetStoreOperatorListResponse
{

    /**
     * @var ArrayOfUser $GetStoreOperatorListResult
     */
    protected $GetStoreOperatorListResult = null;

    /**
     * @param ArrayOfUser $GetStoreOperatorListResult
     */
    public function __construct($GetStoreOperatorListResult = null)
    {
        $this->GetStoreOperatorListResult = $GetStoreOperatorListResult;
    }

    /**
     * @return ArrayOfUser
     */
    public function getGetStoreOperatorListResult()
    {
        return $this->GetStoreOperatorListResult;
    }

    /**
     * @param ArrayOfUser $GetStoreOperatorListResult
     * @return GetStoreOperatorListResponse
     */
    public function setGetStoreOperatorListResult($GetStoreOperatorListResult)
    {
        $this->GetStoreOperatorListResult = $GetStoreOperatorListResult;
        return $this;
    }

}
