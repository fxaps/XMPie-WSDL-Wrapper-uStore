<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductInventoryWS;

class UpdateByExternalIDResponse
{

    /**
     * @var boolean $UpdateByExternalIDResult
     */
    protected $UpdateByExternalIDResult = null;

    /**
     * @param boolean $UpdateByExternalIDResult
     */
    public function __construct($UpdateByExternalIDResult = null)
    {
      $this->UpdateByExternalIDResult = $UpdateByExternalIDResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateByExternalIDResult()
    {
      return $this->UpdateByExternalIDResult;
    }

    /**
     * @param boolean $UpdateByExternalIDResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductInventoryWS\UpdateByExternalIDResponse
     */
    public function setUpdateByExternalIDResult($UpdateByExternalIDResult)
    {
      $this->UpdateByExternalIDResult = $UpdateByExternalIDResult;
      return $this;
    }

}
