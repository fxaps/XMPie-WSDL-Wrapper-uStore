<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderWS;

class GetLatestOrdersXmlResponse
{

    /**
     * @var string $GetLatestOrdersXmlResult
     */
    protected $GetLatestOrdersXmlResult = null;

    /**
     * @param string $GetLatestOrdersXmlResult
     */
    public function __construct($GetLatestOrdersXmlResult = null)
    {
        $this->GetLatestOrdersXmlResult = $GetLatestOrdersXmlResult;
    }

    /**
     * @return string
     */
    public function getGetLatestOrdersXmlResult()
    {
        return $this->GetLatestOrdersXmlResult;
    }

    /**
     * @param string $GetLatestOrdersXmlResult
     * @return GetLatestOrdersXmlResponse
     */
    public function setGetLatestOrdersXmlResult($GetLatestOrdersXmlResult)
    {
        $this->GetLatestOrdersXmlResult = $GetLatestOrdersXmlResult;
        return $this;
    }

}
