<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CustomizationDialWS;

class CustomizationDialValue extends ReturnObject
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
     * @var int $DialID
     */
    protected $DialID = null;

    /**
     * @var string $DialName
     */
    protected $DialName = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param int $OrderProductDialValueID
     * @param int $OrderProductID
     * @param int $DialID
     */
    public function __construct($OrderProductDialValueID = null, $OrderProductID = null, $DialID = null)
    {
      $this->OrderProductDialValueID = $OrderProductDialValueID;
      $this->OrderProductID = $OrderProductID;
      $this->DialID = $DialID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CustomizationDialWS\CustomizationDialValue
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CustomizationDialWS\CustomizationDialValue
     */
    public function setOrderProductID($OrderProductID)
    {
      $this->OrderProductID = $OrderProductID;
      return $this;
    }

    /**
     * @return int
     */
    public function getDialID()
    {
      return $this->DialID;
    }

    /**
     * @param int $DialID
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CustomizationDialWS\CustomizationDialValue
     */
    public function setDialID($DialID)
    {
      $this->DialID = $DialID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDialName()
    {
      return $this->DialName;
    }

    /**
     * @param string $DialName
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CustomizationDialWS\CustomizationDialValue
     */
    public function setDialName($DialName)
    {
      $this->DialName = $DialName;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CustomizationDialWS\CustomizationDialValue
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
