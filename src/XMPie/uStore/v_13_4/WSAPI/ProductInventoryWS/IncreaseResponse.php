<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductInventoryWS;

class IncreaseResponse
{

    /**
     * @var boolean $IncreaseResult
     */
    protected $IncreaseResult = null;

    /**
     * @param boolean $IncreaseResult
     */
    public function __construct($IncreaseResult = null)
    {
      $this->IncreaseResult = $IncreaseResult;
    }

    /**
     * @return boolean
     */
    public function getIncreaseResult()
    {
      return $this->IncreaseResult;
    }

    /**
     * @param boolean $IncreaseResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductInventoryWS\IncreaseResponse
     */
    public function setIncreaseResult($IncreaseResult)
    {
      $this->IncreaseResult = $IncreaseResult;
      return $this;
    }

}
