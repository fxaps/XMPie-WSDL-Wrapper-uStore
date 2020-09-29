<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductInventoryWS;

class UpdateResponse
{

    /**
     * @var boolean $UpdateResult
     */
    protected $UpdateResult = null;

    /**
     * @param boolean $UpdateResult
     */
    public function __construct($UpdateResult = null)
    {
        $this->UpdateResult = $UpdateResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateResult()
    {
        return $this->UpdateResult;
    }

    /**
     * @param boolean $UpdateResult
     * @return UpdateResponse
     */
    public function setUpdateResult($UpdateResult)
    {
        $this->UpdateResult = $UpdateResult;
        return $this;
    }

}
