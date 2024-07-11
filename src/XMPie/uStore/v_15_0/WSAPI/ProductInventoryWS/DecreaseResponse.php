<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductInventoryWS;

class DecreaseResponse
{

    /**
     * @var boolean $DecreaseResult
     */
    protected $DecreaseResult = null;

    /**
     * @param boolean $DecreaseResult
     */
    public function __construct($DecreaseResult = null)
    {
      $this->DecreaseResult = $DecreaseResult;
    }

    /**
     * @return boolean
     */
    public function getDecreaseResult()
    {
      return $this->DecreaseResult;
    }

    /**
     * @param boolean $DecreaseResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductInventoryWS\DecreaseResponse
     */
    public function setDecreaseResult($DecreaseResult)
    {
      $this->DecreaseResult = $DecreaseResult;
      return $this;
    }

}
