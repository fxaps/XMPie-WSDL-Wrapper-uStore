<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\AssetWS;

class DownloadAssetResponse
{

    /**
     * @var base64Binary $DownloadAssetResult
     */
    protected $DownloadAssetResult = null;

    /**
     * @param base64Binary $DownloadAssetResult
     */
    public function __construct($DownloadAssetResult = null)
    {
        $this->DownloadAssetResult = $DownloadAssetResult;
    }

    /**
     * @return base64Binary
     */
    public function getDownloadAssetResult()
    {
        return $this->DownloadAssetResult;
    }

    /**
     * @param base64Binary $DownloadAssetResult
     * @return DownloadAssetResponse
     */
    public function setDownloadAssetResult($DownloadAssetResult)
    {
        $this->DownloadAssetResult = $DownloadAssetResult;
        return $this;
    }

}
