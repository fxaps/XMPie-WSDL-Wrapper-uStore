<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductionWS;

class DownloadProofResponse
{

    /**
     * @var ArrayOfBase64Binary $DownloadProofResult
     */
    protected $DownloadProofResult = null;

    /**
     * @param ArrayOfBase64Binary $DownloadProofResult
     */
    public function __construct($DownloadProofResult = null)
    {
        $this->DownloadProofResult = $DownloadProofResult;
    }

    /**
     * @return ArrayOfBase64Binary
     */
    public function getDownloadProofResult()
    {
        return $this->DownloadProofResult;
    }

    /**
     * @param ArrayOfBase64Binary $DownloadProofResult
     * @return DownloadProofResponse
     */
    public function setDownloadProofResult($DownloadProofResult)
    {
        $this->DownloadProofResult = $DownloadProofResult;
        return $this;
    }

}
