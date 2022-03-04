<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductPropertyWS;

class ProductPropertyValue extends ReturnObject
{

    /**
     * @var int $OrderProductDialValueID
     */
    protected $OrderProductDialValueID = null;

    /**
     * @var int $OrderProductID
     */
    protected $OrderProductID = null;

    /**
     * @var int $PropertyID
     */
    protected $PropertyID = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param int $OrderProductDialValueID
     * @param int $OrderProductID
     * @param int $PropertyID
     */
    public function __construct($OrderProductDialValueID = null, $OrderProductID = null, $PropertyID = null)
    {
      $this->OrderProductDialValueID = $OrderProductDialValueID;
      $this->OrderProductID = $OrderProductID;
      $this->PropertyID = $PropertyID;
    }

    /**
     * @return int
     */
    public function getOrderProductDialValueID()
    {
      return $this->OrderProductDialValueID;
    }

    /**
     * @param int $OrderProductDialValueID
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductPropertyWS\ProductPropertyValue
     */
    public function setOrderProductDialValueID($OrderProductDialValueID)
    {
      $this->OrderProductDialValueID = $OrderProductDialValueID;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderProductID()
    {
      return $this->OrderProductID;
    }

    /**
     * @param int $OrderProductID
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductPropertyWS\ProductPropertyValue
     */
    public function setOrderProductID($OrderProductID)
    {
      $this->OrderProductID = $OrderProductID;
      return $this;
    }

    /**
     * @return int
     */
    public function getPropertyID()
    {
      return $this->PropertyID;
    }

    /**
     * @param int $PropertyID
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductPropertyWS\ProductPropertyValue
     */
    public function setPropertyID($PropertyID)
    {
      $this->PropertyID = $PropertyID;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ProductPropertyWS\ProductPropertyValue
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
