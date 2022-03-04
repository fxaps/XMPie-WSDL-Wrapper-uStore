<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\UserWS;

class GetSingleSignonUrlToWelcomePageResponse
{

    /**
     * @var string $GetSingleSignonUrlToWelcomePageResult
     */
    protected $GetSingleSignonUrlToWelcomePageResult = null;

    /**
     * @param string $GetSingleSignonUrlToWelcomePageResult
     */
    public function __construct($GetSingleSignonUrlToWelcomePageResult = null)
    {
      $this->GetSingleSignonUrlToWelcomePageResult = $GetSingleSignonUrlToWelcomePageResult;
    }

    /**
     * @return string
     */
    public function getGetSingleSignonUrlToWelcomePageResult()
    {
      return $this->GetSingleSignonUrlToWelcomePageResult;
    }

    /**
     * @param string $GetSingleSignonUrlToWelcomePageResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\UserWS\GetSingleSignonUrlToWelcomePageResponse
     */
    public function setGetSingleSignonUrlToWelcomePageResult($GetSingleSignonUrlToWelcomePageResult)
    {
      $this->GetSingleSignonUrlToWelcomePageResult = $GetSingleSignonUrlToWelcomePageResult;
      return $this;
    }

}
