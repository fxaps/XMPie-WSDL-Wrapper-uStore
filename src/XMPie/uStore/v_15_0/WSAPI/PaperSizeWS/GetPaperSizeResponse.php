<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\PaperSizeWS;

class GetPaperSizeResponse
{

    /**
     * @var PaperSize $GetPaperSizeResult
     */
    protected $GetPaperSizeResult = null;

    /**
     * @param PaperSize $GetPaperSizeResult
     */
    public function __construct($GetPaperSizeResult = null)
    {
      $this->GetPaperSizeResult = $GetPaperSizeResult;
    }

    /**
     * @return PaperSize
     */
    public function getGetPaperSizeResult()
    {
      return $this->GetPaperSizeResult;
    }

    /**
     * @param PaperSize $GetPaperSizeResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\PaperSizeWS\GetPaperSizeResponse
     */
    public function setGetPaperSizeResult($GetPaperSizeResult)
    {
      $this->GetPaperSizeResult = $GetPaperSizeResult;
      return $this;
    }

}
