<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserWS;

class GetSingleSigonUrlToOrderWizardResponse
{

    /**
     * @var string $GetSingleSigonUrlToOrderWizardResult
     */
    protected $GetSingleSigonUrlToOrderWizardResult = null;

    /**
     * @param string $GetSingleSigonUrlToOrderWizardResult
     */
    public function __construct($GetSingleSigonUrlToOrderWizardResult = null)
    {
      $this->GetSingleSigonUrlToOrderWizardResult = $GetSingleSigonUrlToOrderWizardResult;
    }

    /**
     * @return string
     */
    public function getGetSingleSigonUrlToOrderWizardResult()
    {
      return $this->GetSingleSigonUrlToOrderWizardResult;
    }

    /**
     * @param string $GetSingleSigonUrlToOrderWizardResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserWS\GetSingleSigonUrlToOrderWizardResponse
     */
    public function setGetSingleSigonUrlToOrderWizardResult($GetSingleSigonUrlToOrderWizardResult)
    {
      $this->GetSingleSigonUrlToOrderWizardResult = $GetSingleSigonUrlToOrderWizardResult;
      return $this;
    }

}
