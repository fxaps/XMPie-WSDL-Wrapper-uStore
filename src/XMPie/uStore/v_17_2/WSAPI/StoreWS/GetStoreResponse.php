<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\StoreWS;

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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\StoreWS\GetStoreResponse
     */
    public function setGetStoreResult($GetStoreResult)
    {
      $this->GetStoreResult = $GetStoreResult;
      return $this;
    }

}
