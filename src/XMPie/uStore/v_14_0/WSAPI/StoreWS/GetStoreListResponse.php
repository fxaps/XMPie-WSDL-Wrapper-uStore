<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\StoreWS;

class GetStoreListResponse
{

    /**
     * @var ArrayOfStore $GetStoreListResult
     */
    protected $GetStoreListResult = null;

    /**
     * @param ArrayOfStore $GetStoreListResult
     */
    public function __construct($GetStoreListResult = null)
    {
      $this->GetStoreListResult = $GetStoreListResult;
    }

    /**
     * @return ArrayOfStore
     */
    public function getGetStoreListResult()
    {
      return $this->GetStoreListResult;
    }

    /**
     * @param ArrayOfStore $GetStoreListResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\StoreWS\GetStoreListResponse
     */
    public function setGetStoreListResult($GetStoreListResult)
    {
      $this->GetStoreListResult = $GetStoreListResult;
      return $this;
    }

}
