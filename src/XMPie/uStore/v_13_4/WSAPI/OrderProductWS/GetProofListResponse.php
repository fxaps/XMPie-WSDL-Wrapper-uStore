<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\OrderProductWS;

class GetProofListResponse
{

    /**
     * @var ArrayOfProof $GetProofListResult
     */
    protected $GetProofListResult = null;

    /**
     * @param ArrayOfProof $GetProofListResult
     */
    public function __construct($GetProofListResult = null)
    {
      $this->GetProofListResult = $GetProofListResult;
    }

    /**
     * @return ArrayOfProof
     */
    public function getGetProofListResult()
    {
      return $this->GetProofListResult;
    }

    /**
     * @param ArrayOfProof $GetProofListResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\OrderProductWS\GetProofListResponse
     */
    public function setGetProofListResult($GetProofListResult)
    {
      $this->GetProofListResult = $GetProofListResult;
      return $this;
    }

}
