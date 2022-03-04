<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AssetSourceWS;

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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AssetSourceWS\GetAssetSourceResponse
     */
    public function setGetAssetSourceResult($GetAssetSourceResult)
    {
      $this->GetAssetSourceResult = $GetAssetSourceResult;
      return $this;
    }

}
