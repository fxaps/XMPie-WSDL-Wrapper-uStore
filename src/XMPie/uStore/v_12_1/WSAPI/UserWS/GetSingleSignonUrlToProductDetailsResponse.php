<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS;

class GetSingleSignonUrlToProductDetailsResponse
{

    /**
     * @var string $GetSingleSignonUrlToProductDetailsResult
     */
    protected $GetSingleSignonUrlToProductDetailsResult = null;

    /**
     * @param string $GetSingleSignonUrlToProductDetailsResult
     */
    public function __construct($GetSingleSignonUrlToProductDetailsResult = null)
    {
        $this->GetSingleSignonUrlToProductDetailsResult = $GetSingleSignonUrlToProductDetailsResult;
    }

    /**
     * @return string
     */
    public function getGetSingleSignonUrlToProductDetailsResult()
    {
        return $this->GetSingleSignonUrlToProductDetailsResult;
    }

    /**
     * @param string $GetSingleSignonUrlToProductDetailsResult
     * @return GetSingleSignonUrlToProductDetailsResponse
     */
    public function setGetSingleSignonUrlToProductDetailsResult($GetSingleSignonUrlToProductDetailsResult)
    {
        $this->GetSingleSignonUrlToProductDetailsResult = $GetSingleSignonUrlToProductDetailsResult;
        return $this;
    }

}
