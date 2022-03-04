<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductInventoryWS;

class IncreaseByExternalIDResponse
{

    /**
     * @var boolean $IncreaseByExternalIDResult
     */
    protected $IncreaseByExternalIDResult = null;

    /**
     * @param boolean $IncreaseByExternalIDResult
     */
    public function __construct($IncreaseByExternalIDResult = null)
    {
      $this->IncreaseByExternalIDResult = $IncreaseByExternalIDResult;
    }

    /**
     * @return boolean
     */
    public function getIncreaseByExternalIDResult()
    {
      return $this->IncreaseByExternalIDResult;
    }

    /**
     * @param boolean $IncreaseByExternalIDResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductInventoryWS\IncreaseByExternalIDResponse
     */
    public function setIncreaseByExternalIDResult($IncreaseByExternalIDResult)
    {
      $this->IncreaseByExternalIDResult = $IncreaseByExternalIDResult;
      return $this;
    }

}
