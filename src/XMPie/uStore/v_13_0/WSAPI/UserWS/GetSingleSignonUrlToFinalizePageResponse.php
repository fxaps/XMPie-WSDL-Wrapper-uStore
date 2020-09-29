<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\UserWS;

class GetSingleSignonUrlToFinalizePageResponse
{

    /**
     * @var string $GetSingleSignonUrlToFinalizePageResult
     */
    protected $GetSingleSignonUrlToFinalizePageResult = null;

    /**
     * @param string $GetSingleSignonUrlToFinalizePageResult
     */
    public function __construct($GetSingleSignonUrlToFinalizePageResult = null)
    {
        $this->GetSingleSignonUrlToFinalizePageResult = $GetSingleSignonUrlToFinalizePageResult;
    }

    /**
     * @return string
     */
    public function getGetSingleSignonUrlToFinalizePageResult()
    {
        return $this->GetSingleSignonUrlToFinalizePageResult;
    }

    /**
     * @param string $GetSingleSignonUrlToFinalizePageResult
     * @return GetSingleSignonUrlToFinalizePageResponse
     */
    public function setGetSingleSignonUrlToFinalizePageResult($GetSingleSignonUrlToFinalizePageResult)
    {
        $this->GetSingleSignonUrlToFinalizePageResult = $GetSingleSignonUrlToFinalizePageResult;
        return $this;
    }

}
