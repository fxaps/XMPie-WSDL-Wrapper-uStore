<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\AssetWS;

class GetAssetResponse
{

    /**
     * @var Asset $GetAssetResult
     */
    protected $GetAssetResult = null;

    /**
     * @param Asset $GetAssetResult
     */
    public function __construct($GetAssetResult = null)
    {
        $this->GetAssetResult = $GetAssetResult;
    }

    /**
     * @return Asset
     */
    public function getGetAssetResult()
    {
        return $this->GetAssetResult;
    }

    /**
     * @param Asset $GetAssetResult
     * @return GetAssetResponse
     */
    public function setGetAssetResult($GetAssetResult)
    {
        $this->GetAssetResult = $GetAssetResult;
        return $this;
    }

}
