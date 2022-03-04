<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductInventoryWS;

class DecreaseByExternalIDResponse
{

    /**
     * @var boolean $DecreaseByExternalIDResult
     */
    protected $DecreaseByExternalIDResult = null;

    /**
     * @param boolean $DecreaseByExternalIDResult
     */
    public function __construct($DecreaseByExternalIDResult = null)
    {
      $this->DecreaseByExternalIDResult = $DecreaseByExternalIDResult;
    }

    /**
     * @return boolean
     */
    public function getDecreaseByExternalIDResult()
    {
      return $this->DecreaseByExternalIDResult;
    }

    /**
     * @param boolean $DecreaseByExternalIDResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductInventoryWS\DecreaseByExternalIDResponse
     */
    public function setDecreaseByExternalIDResult($DecreaseByExternalIDResult)
    {
      $this->DecreaseByExternalIDResult = $DecreaseByExternalIDResult;
      return $this;
    }

}
