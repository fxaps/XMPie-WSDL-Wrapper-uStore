<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\UserWS;

class GetSingleSignonUrlToProductGroupResponse
{

    /**
     * @var string $GetSingleSignonUrlToProductGroupResult
     */
    protected $GetSingleSignonUrlToProductGroupResult = null;

    /**
     * @param string $GetSingleSignonUrlToProductGroupResult
     */
    public function __construct($GetSingleSignonUrlToProductGroupResult = null)
    {
        $this->GetSingleSignonUrlToProductGroupResult = $GetSingleSignonUrlToProductGroupResult;
    }

    /**
     * @return string
     */
    public function getGetSingleSignonUrlToProductGroupResult()
    {
        return $this->GetSingleSignonUrlToProductGroupResult;
    }

    /**
     * @param string $GetSingleSignonUrlToProductGroupResult
     * @return GetSingleSignonUrlToProductGroupResponse
     */
    public function setGetSingleSignonUrlToProductGroupResult($GetSingleSignonUrlToProductGroupResult)
    {
        $this->GetSingleSignonUrlToProductGroupResult = $GetSingleSignonUrlToProductGroupResult;
        return $this;
    }

}
