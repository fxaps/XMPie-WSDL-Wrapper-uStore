<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\StoreWS;

class GetStoreResponse
{

    /**
     * @var Store $GetStoreResult
     */
    protected $GetStoreResult = null;

    /**
     * @param Store $GetStoreResult
     */
    public function __construct($GetStoreResult = null)
    {
        $this->GetStoreResult = $GetStoreResult;
    }

    /**
     * @return Store
     */
    public function getGetStoreResult()
    {
        return $this->GetStoreResult;
    }

    /**
     * @param Store $GetStoreResult
     * @return GetStoreResponse
     */
    public function setGetStoreResult($GetStoreResult)
    {
        $this->GetStoreResult = $GetStoreResult;
        return $this;
    }

}
