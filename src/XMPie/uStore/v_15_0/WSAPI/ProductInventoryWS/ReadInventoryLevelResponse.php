<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductInventoryWS;

class ReadInventoryLevelResponse
{

    /**
     * @var int $ReadInventoryLevelResult
     */
    protected $ReadInventoryLevelResult = null;

    /**
     * @param int $ReadInventoryLevelResult
     */
    public function __construct($ReadInventoryLevelResult = null)
    {
      $this->ReadInventoryLevelResult = $ReadInventoryLevelResult;
    }

    /**
     * @return int
     */
    public function getReadInventoryLevelResult()
    {
      return $this->ReadInventoryLevelResult;
    }

    /**
     * @param int $ReadInventoryLevelResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductInventoryWS\ReadInventoryLevelResponse
     */
    public function setReadInventoryLevelResult($ReadInventoryLevelResult)
    {
      $this->ReadInventoryLevelResult = $ReadInventoryLevelResult;
      return $this;
    }

}
