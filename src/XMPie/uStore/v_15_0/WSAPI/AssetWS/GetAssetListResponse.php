<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\AssetWS;

class GetAssetListResponse
{

    /**
     * @var ArrayOfAsset $GetAssetListResult
     */
    protected $GetAssetListResult = null;

    /**
     * @param ArrayOfAsset $GetAssetListResult
     */
    public function __construct($GetAssetListResult = null)
    {
      $this->GetAssetListResult = $GetAssetListResult;
    }

    /**
     * @return ArrayOfAsset
     */
    public function getGetAssetListResult()
    {
      return $this->GetAssetListResult;
    }

    /**
     * @param ArrayOfAsset $GetAssetListResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\AssetWS\GetAssetListResponse
     */
    public function setGetAssetListResult($GetAssetListResult)
    {
      $this->GetAssetListResult = $GetAssetListResult;
      return $this;
    }

}
