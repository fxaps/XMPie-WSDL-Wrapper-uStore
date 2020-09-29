<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CultureWS;

class GetCultureByStoreResponse
{

    /**
     * @var ArrayOfCulture $GetCultureByStoreResult
     */
    protected $GetCultureByStoreResult = null;

    /**
     * @param ArrayOfCulture $GetCultureByStoreResult
     */
    public function __construct($GetCultureByStoreResult = null)
    {
        $this->GetCultureByStoreResult = $GetCultureByStoreResult;
    }

    /**
     * @return ArrayOfCulture
     */
    public function getGetCultureByStoreResult()
    {
        return $this->GetCultureByStoreResult;
    }

    /**
     * @param ArrayOfCulture $GetCultureByStoreResult
     * @return GetCultureByStoreResponse
     */
    public function setGetCultureByStoreResult($GetCultureByStoreResult)
    {
        $this->GetCultureByStoreResult = $GetCultureByStoreResult;
        return $this;
    }

}
