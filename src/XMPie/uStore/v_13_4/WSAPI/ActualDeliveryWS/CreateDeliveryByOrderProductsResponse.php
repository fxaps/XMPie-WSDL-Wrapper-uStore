<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS;

class CreateDeliveryByOrderProductsResponse
{

    /**
     * @var int $CreateDeliveryByOrderProductsResult
     */
    protected $CreateDeliveryByOrderProductsResult = null;

    /**
     * @param int $CreateDeliveryByOrderProductsResult
     */
    public function __construct($CreateDeliveryByOrderProductsResult = null)
    {
      $this->CreateDeliveryByOrderProductsResult = $CreateDeliveryByOrderProductsResult;
    }

    /**
     * @return int
     */
    public function getCreateDeliveryByOrderProductsResult()
    {
      return $this->CreateDeliveryByOrderProductsResult;
    }

    /**
     * @param int $CreateDeliveryByOrderProductsResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\CreateDeliveryByOrderProductsResponse
     */
    public function setCreateDeliveryByOrderProductsResult($CreateDeliveryByOrderProductsResult)
    {
      $this->CreateDeliveryByOrderProductsResult = $CreateDeliveryByOrderProductsResult;
      return $this;
    }

}
