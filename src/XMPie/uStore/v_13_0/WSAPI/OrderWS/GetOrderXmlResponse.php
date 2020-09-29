<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\OrderWS;

class GetOrderXmlResponse
{

    /**
     * @var string $GetOrderXmlResult
     */
    protected $GetOrderXmlResult = null;

    /**
     * @param string $GetOrderXmlResult
     */
    public function __construct($GetOrderXmlResult = null)
    {
        $this->GetOrderXmlResult = $GetOrderXmlResult;
    }

    /**
     * @return string
     */
    public function getGetOrderXmlResult()
    {
        return $this->GetOrderXmlResult;
    }

    /**
     * @param string $GetOrderXmlResult
     * @return GetOrderXmlResponse
     */
    public function setGetOrderXmlResult($GetOrderXmlResult)
    {
        $this->GetOrderXmlResult = $GetOrderXmlResult;
        return $this;
    }

}
