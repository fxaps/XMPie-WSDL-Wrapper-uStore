<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserWS;

class GetSingleSignonUrlToProductDetailsUsingExternalIdResponse
{

    /**
     * @var string $GetSingleSignonUrlToProductDetailsUsingExternalIdResult
     */
    protected $GetSingleSignonUrlToProductDetailsUsingExternalIdResult = null;

    /**
     * @param string $GetSingleSignonUrlToProductDetailsUsingExternalIdResult
     */
    public function __construct($GetSingleSignonUrlToProductDetailsUsingExternalIdResult = null)
    {
      $this->GetSingleSignonUrlToProductDetailsUsingExternalIdResult = $GetSingleSignonUrlToProductDetailsUsingExternalIdResult;
    }

    /**
     * @return string
     */
    public function getGetSingleSignonUrlToProductDetailsUsingExternalIdResult()
    {
      return $this->GetSingleSignonUrlToProductDetailsUsingExternalIdResult;
    }

    /**
     * @param string $GetSingleSignonUrlToProductDetailsUsingExternalIdResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserWS\GetSingleSignonUrlToProductDetailsUsingExternalIdResponse
     */
    public function setGetSingleSignonUrlToProductDetailsUsingExternalIdResult($GetSingleSignonUrlToProductDetailsUsingExternalIdResult)
    {
      $this->GetSingleSignonUrlToProductDetailsUsingExternalIdResult = $GetSingleSignonUrlToProductDetailsUsingExternalIdResult;
      return $this;
    }

}
