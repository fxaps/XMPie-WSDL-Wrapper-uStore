<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\AssetSourceWS;

class GetAssetSourceResponse
{

    /**
     * @var AssetSource $GetAssetSourceResult
     */
    protected $GetAssetSourceResult = null;

    /**
     * @param AssetSource $GetAssetSourceResult
     */
    public function __construct($GetAssetSourceResult = null)
    {
        $this->GetAssetSourceResult = $GetAssetSourceResult;
    }

    /**
     * @return AssetSource
     */
    public function getGetAssetSourceResult()
    {
        return $this->GetAssetSourceResult;
    }

    /**
     * @param AssetSource $GetAssetSourceResult
     * @return GetAssetSourceResponse
     */
    public function setGetAssetSourceResult($GetAssetSourceResult)
    {
        $this->GetAssetSourceResult = $GetAssetSourceResult;
        return $this;
    }

}
