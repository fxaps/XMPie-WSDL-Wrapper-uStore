<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductInventoryWS;

class ReadInventoryLevelByExternalIDResponse
{

    /**
     * @var int $ReadInventoryLevelByExternalIDResult
     */
    protected $ReadInventoryLevelByExternalIDResult = null;

    /**
     * @param int $ReadInventoryLevelByExternalIDResult
     */
    public function __construct($ReadInventoryLevelByExternalIDResult = null)
    {
      $this->ReadInventoryLevelByExternalIDResult = $ReadInventoryLevelByExternalIDResult;
    }

    /**
     * @return int
     */
    public function getReadInventoryLevelByExternalIDResult()
    {
      return $this->ReadInventoryLevelByExternalIDResult;
    }

    /**
     * @param int $ReadInventoryLevelByExternalIDResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductInventoryWS\ReadInventoryLevelByExternalIDResponse
     */
    public function setReadInventoryLevelByExternalIDResult($ReadInventoryLevelByExternalIDResult)
    {
      $this->ReadInventoryLevelByExternalIDResult = $ReadInventoryLevelByExternalIDResult;
      return $this;
    }

}
