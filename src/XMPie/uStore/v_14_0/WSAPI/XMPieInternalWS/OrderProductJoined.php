<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\XMPieInternalWS;

class OrderProductJoined
{

    /**
     * @var int $ItemID
     */
    protected $ItemID = null;

    /**
     * @var int $OrderID
     */
    protected $OrderID = null;

    /**
     * @var string $StoreName
     */
    protected $StoreName = null;

    /**
     * @var string $ProductName
     */
    protected $ProductName = null;

    /**
     * @var string $CustomerName
     */
    protected $CustomerName = null;

    /**
     * @var int $NumRecipients
     */
    protected $NumRecipients = null;

    /**
     * @var int $TotalQuantity
     */
    protected $TotalQuantity = null;

    /**
     * @var string $DateAdded
     */
    protected $DateAdded = null;

    /**
     * @var string $Price
     */
    protected $Price = null;

    /**
     * @param int $ItemID
     * @param int $OrderID
     * @param int $NumRecipients
     * @param int $TotalQuantity
     */
    public function __construct($ItemID = null, $OrderID = null, $NumRecipients = null, $TotalQuantity = null)
    {
      $this->ItemID = $ItemID;
      $this->OrderID = $OrderID;
      $this->NumRecipients = $NumRecipients;
      $this->TotalQuantity = $TotalQuantity;
    }

    /**
     * @return int
     */
    public function getItemID()
    {
      return $this->ItemID;
    }

    /**
     * @param int $ItemID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\XMPieInternalWS\OrderProductJoined
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderID()
    {
      return $this->OrderID;
    }

    /**
     * @param int $OrderID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\XMPieInternalWS\OrderProductJoined
     */
    public function setOrderID($OrderID)
    {
      $this->OrderID = $OrderID;
      return $this;
    }

    /**
     * @return string
     */
    public function getStoreName()
    {
      return $this->StoreName;
    }

    /**
     * @param string $StoreName
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\XMPieInternalWS\OrderProductJoined
     */
    public function setStoreName($StoreName)
    {
      $this->StoreName = $StoreName;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
      return $this->ProductName;
    }

    /**
     * @param string $ProductName
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\XMPieInternalWS\OrderProductJoined
     */
    public function setProductName($ProductName)
    {
      $this->ProductName = $ProductName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerName()
    {
      return $this->CustomerName;
    }

    /**
     * @param string $CustomerName
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\XMPieInternalWS\OrderProductJoined
     */
    public function setCustomerName($CustomerName)
    {
      $this->CustomerName = $CustomerName;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumRecipients()
    {
      return $this->NumRecipients;
    }

    /**
     * @param int $NumRecipients
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\XMPieInternalWS\OrderProductJoined
     */
    public function setNumRecipients($NumRecipients)
    {
      $this->NumRecipients = $NumRecipients;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalQuantity()
    {
      return $this->TotalQuantity;
    }

    /**
     * @param int $TotalQuantity
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\XMPieInternalWS\OrderProductJoined
     */
    public function setTotalQuantity($TotalQuantity)
    {
      $this->TotalQuantity = $TotalQuantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateAdded()
    {
      return $this->DateAdded;
    }

    /**
     * @param string $DateAdded
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\XMPieInternalWS\OrderProductJoined
     */
    public function setDateAdded($DateAdded)
    {
      $this->DateAdded = $DateAdded;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param string $Price
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\XMPieInternalWS\OrderProductJoined
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

}
