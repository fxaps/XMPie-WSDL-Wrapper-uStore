<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\OrderProductWS;

class ListOrderProductJobStatusResponse
{

    /**
     * @var ArrayOfInt $ListOrderProductJobStatusResult
     */
    protected $ListOrderProductJobStatusResult = null;

    /**
     * @param ArrayOfInt $ListOrderProductJobStatusResult
     */
    public function __construct($ListOrderProductJobStatusResult = null)
    {
        $this->ListOrderProductJobStatusResult = $ListOrderProductJobStatusResult;
    }

    /**
     * @return ArrayOfInt
     */
    public function getListOrderProductJobStatusResult()
    {
        return $this->ListOrderProductJobStatusResult;
    }

    /**
     * @param ArrayOfInt $ListOrderProductJobStatusResult
     * @return ListOrderProductJobStatusResponse
     */
    public function setListOrderProductJobStatusResult($ListOrderProductJobStatusResult)
    {
        $this->ListOrderProductJobStatusResult = $ListOrderProductJobStatusResult;
        return $this;
    }

}
