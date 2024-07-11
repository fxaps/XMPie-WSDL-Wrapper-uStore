<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS;

class Order extends ReturnObject
{

    /**
     * @var int $OrderID
     */
    protected $OrderID = null;

    /**
     * @var int $EncryptedOrderID
     */
    protected $EncryptedOrderID = null;

    /**
     * @var int $StoreID
     */
    protected $StoreID = null;

    /**
     * @var int $CustomerID
     */
    protected $CustomerID = null;

    /**
     * @var int $UserID
     */
    protected $UserID = null;

    /**
     * @var \DateTime $DateCartCreated
     */
    protected $DateCartCreated = null;

    /**
     * @var \DateTime $DateOrderCreated
     */
    protected $DateOrderCreated = null;

    /**
     * @var float $SubtotalPrice
     */
    protected $SubtotalPrice = null;

    /**
     * @var string $Bill_Name
     */
    protected $Bill_Name = null;

    /**
     * @var string $Bill_Company
     */
    protected $Bill_Company = null;

    /**
     * @var string $Bill_Email
     */
    protected $Bill_Email = null;

    /**
     * @var string $Bill_Add
     */
    protected $Bill_Add = null;

    /**
     * @var string $Bill_Add2
     */
    protected $Bill_Add2 = null;

    /**
     * @var string $Bill_City
     */
    protected $Bill_City = null;

    /**
     * @var string $Bill_StateName
     */
    protected $Bill_StateName = null;

    /**
     * @var int $Bill_StateID
     */
    protected $Bill_StateID = null;

    /**
     * @var string $Bill_Zip
     */
    protected $Bill_Zip = null;

    /**
     * @var string $Bill_Phone
     */
    protected $Bill_Phone = null;

    /**
     * @var string $Bill_Fax
     */
    protected $Bill_Fax = null;

    /**
     * @var string $Bill_CountryName
     */
    protected $Bill_CountryName = null;

    /**
     * @var int $Bill_CountryID
     */
    protected $Bill_CountryID = null;

    /**
     * @var float $ShippingCharges
     */
    protected $ShippingCharges = null;

    /**
     * @var float $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var float $TotalPrice
     */
    protected $TotalPrice = null;

    /**
     * @var boolean $IsCart
     */
    protected $IsCart = null;

    /**
     * @var boolean $IsSaveForLater
     */
    protected $IsSaveForLater = null;

    /**
     * @var int $PaymentMethodID
     */
    protected $PaymentMethodID = null;

    /**
     * @var int $DeliveryServiceID
     */
    protected $DeliveryServiceID = null;

    /**
     * @var float $DeliveryPrice
     */
    protected $DeliveryPrice = null;

    /**
     * @var float $Cost
     */
    protected $Cost = null;

    /**
     * @param int $OrderID
     * @param int $EncryptedOrderID
     * @param int $StoreID
     * @param int $CustomerID
     * @param int $UserID
     * @param \DateTime $DateCartCreated
     * @param \DateTime $DateOrderCreated
     * @param float $SubtotalPrice
     * @param int $Bill_StateID
     * @param int $Bill_CountryID
     * @param float $ShippingCharges
     * @param float $TaxAmount
     * @param float $TotalPrice
     * @param boolean $IsCart
     * @param boolean $IsSaveForLater
     * @param int $PaymentMethodID
     * @param int $DeliveryServiceID
     * @param float $DeliveryPrice
     * @param float $Cost
     */
    public function __construct($OrderID = null, $EncryptedOrderID = null, $StoreID = null, $CustomerID = null, $UserID = null, \DateTime $DateCartCreated = null, \DateTime $DateOrderCreated = null, $SubtotalPrice = null, $Bill_StateID = null, $Bill_CountryID = null, $ShippingCharges = null, $TaxAmount = null, $TotalPrice = null, $IsCart = null, $IsSaveForLater = null, $PaymentMethodID = null, $DeliveryServiceID = null, $DeliveryPrice = null, $Cost = null)
    {
      $this->OrderID = $OrderID;
      $this->EncryptedOrderID = $EncryptedOrderID;
      $this->StoreID = $StoreID;
      $this->CustomerID = $CustomerID;
      $this->UserID = $UserID;
      $this->DateCartCreated = $DateCartCreated ? $DateCartCreated->format(\DateTime::ATOM) : null;
      $this->DateOrderCreated = $DateOrderCreated ? $DateOrderCreated->format(\DateTime::ATOM) : null;
      $this->SubtotalPrice = $SubtotalPrice;
      $this->Bill_StateID = $Bill_StateID;
      $this->Bill_CountryID = $Bill_CountryID;
      $this->ShippingCharges = $ShippingCharges;
      $this->TaxAmount = $TaxAmount;
      $this->TotalPrice = $TotalPrice;
      $this->IsCart = $IsCart;
      $this->IsSaveForLater = $IsSaveForLater;
      $this->PaymentMethodID = $PaymentMethodID;
      $this->DeliveryServiceID = $DeliveryServiceID;
      $this->DeliveryPrice = $DeliveryPrice;
      $this->Cost = $Cost;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setOrderID($OrderID)
    {
      $this->OrderID = $OrderID;
      return $this;
    }

    /**
     * @return int
     */
    public function getEncryptedOrderID()
    {
      return $this->EncryptedOrderID;
    }

    /**
     * @param int $EncryptedOrderID
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setEncryptedOrderID($EncryptedOrderID)
    {
      $this->EncryptedOrderID = $EncryptedOrderID;
      return $this;
    }

    /**
     * @return int
     */
    public function getStoreID()
    {
      return $this->StoreID;
    }

    /**
     * @param int $StoreID
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setStoreID($StoreID)
    {
      $this->StoreID = $StoreID;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomerID()
    {
      return $this->CustomerID;
    }

    /**
     * @param int $CustomerID
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setCustomerID($CustomerID)
    {
      $this->CustomerID = $CustomerID;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserID()
    {
      return $this->UserID;
    }

    /**
     * @param int $UserID
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setUserID($UserID)
    {
      $this->UserID = $UserID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateCartCreated()
    {
      if ($this->DateCartCreated == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateCartCreated);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateCartCreated
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setDateCartCreated(\DateTime $DateCartCreated)
    {
      $this->DateCartCreated = $DateCartCreated->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateOrderCreated()
    {
      if ($this->DateOrderCreated == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateOrderCreated);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateOrderCreated
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setDateOrderCreated(\DateTime $DateOrderCreated)
    {
      $this->DateOrderCreated = $DateOrderCreated->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getSubtotalPrice()
    {
      return $this->SubtotalPrice;
    }

    /**
     * @param float $SubtotalPrice
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setSubtotalPrice($SubtotalPrice)
    {
      $this->SubtotalPrice = $SubtotalPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getBill_Name()
    {
      return $this->Bill_Name;
    }

    /**
     * @param string $Bill_Name
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setBill_Name($Bill_Name)
    {
      $this->Bill_Name = $Bill_Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getBill_Company()
    {
      return $this->Bill_Company;
    }

    /**
     * @param string $Bill_Company
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setBill_Company($Bill_Company)
    {
      $this->Bill_Company = $Bill_Company;
      return $this;
    }

    /**
     * @return string
     */
    public function getBill_Email()
    {
      return $this->Bill_Email;
    }

    /**
     * @param string $Bill_Email
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setBill_Email($Bill_Email)
    {
      $this->Bill_Email = $Bill_Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getBill_Add()
    {
      return $this->Bill_Add;
    }

    /**
     * @param string $Bill_Add
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setBill_Add($Bill_Add)
    {
      $this->Bill_Add = $Bill_Add;
      return $this;
    }

    /**
     * @return string
     */
    public function getBill_Add2()
    {
      return $this->Bill_Add2;
    }

    /**
     * @param string $Bill_Add2
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setBill_Add2($Bill_Add2)
    {
      $this->Bill_Add2 = $Bill_Add2;
      return $this;
    }

    /**
     * @return string
     */
    public function getBill_City()
    {
      return $this->Bill_City;
    }

    /**
     * @param string $Bill_City
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setBill_City($Bill_City)
    {
      $this->Bill_City = $Bill_City;
      return $this;
    }

    /**
     * @return string
     */
    public function getBill_StateName()
    {
      return $this->Bill_StateName;
    }

    /**
     * @param string $Bill_StateName
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setBill_StateName($Bill_StateName)
    {
      $this->Bill_StateName = $Bill_StateName;
      return $this;
    }

    /**
     * @return int
     */
    public function getBill_StateID()
    {
      return $this->Bill_StateID;
    }

    /**
     * @param int $Bill_StateID
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setBill_StateID($Bill_StateID)
    {
      $this->Bill_StateID = $Bill_StateID;
      return $this;
    }

    /**
     * @return string
     */
    public function getBill_Zip()
    {
      return $this->Bill_Zip;
    }

    /**
     * @param string $Bill_Zip
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setBill_Zip($Bill_Zip)
    {
      $this->Bill_Zip = $Bill_Zip;
      return $this;
    }

    /**
     * @return string
     */
    public function getBill_Phone()
    {
      return $this->Bill_Phone;
    }

    /**
     * @param string $Bill_Phone
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setBill_Phone($Bill_Phone)
    {
      $this->Bill_Phone = $Bill_Phone;
      return $this;
    }

    /**
     * @return string
     */
    public function getBill_Fax()
    {
      return $this->Bill_Fax;
    }

    /**
     * @param string $Bill_Fax
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setBill_Fax($Bill_Fax)
    {
      $this->Bill_Fax = $Bill_Fax;
      return $this;
    }

    /**
     * @return string
     */
    public function getBill_CountryName()
    {
      return $this->Bill_CountryName;
    }

    /**
     * @param string $Bill_CountryName
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setBill_CountryName($Bill_CountryName)
    {
      $this->Bill_CountryName = $Bill_CountryName;
      return $this;
    }

    /**
     * @return int
     */
    public function getBill_CountryID()
    {
      return $this->Bill_CountryID;
    }

    /**
     * @param int $Bill_CountryID
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setBill_CountryID($Bill_CountryID)
    {
      $this->Bill_CountryID = $Bill_CountryID;
      return $this;
    }

    /**
     * @return float
     */
    public function getShippingCharges()
    {
      return $this->ShippingCharges;
    }

    /**
     * @param float $ShippingCharges
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setShippingCharges($ShippingCharges)
    {
      $this->ShippingCharges = $ShippingCharges;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxAmount()
    {
      return $this->TaxAmount;
    }

    /**
     * @param float $TaxAmount
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalPrice()
    {
      return $this->TotalPrice;
    }

    /**
     * @param float $TotalPrice
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setTotalPrice($TotalPrice)
    {
      $this->TotalPrice = $TotalPrice;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCart()
    {
      return $this->IsCart;
    }

    /**
     * @param boolean $IsCart
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setIsCart($IsCart)
    {
      $this->IsCart = $IsCart;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSaveForLater()
    {
      return $this->IsSaveForLater;
    }

    /**
     * @param boolean $IsSaveForLater
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setIsSaveForLater($IsSaveForLater)
    {
      $this->IsSaveForLater = $IsSaveForLater;
      return $this;
    }

    /**
     * @return int
     */
    public function getPaymentMethodID()
    {
      return $this->PaymentMethodID;
    }

    /**
     * @param int $PaymentMethodID
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setPaymentMethodID($PaymentMethodID)
    {
      $this->PaymentMethodID = $PaymentMethodID;
      return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryServiceID()
    {
      return $this->DeliveryServiceID;
    }

    /**
     * @param int $DeliveryServiceID
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setDeliveryServiceID($DeliveryServiceID)
    {
      $this->DeliveryServiceID = $DeliveryServiceID;
      return $this;
    }

    /**
     * @return float
     */
    public function getDeliveryPrice()
    {
      return $this->DeliveryPrice;
    }

    /**
     * @param float $DeliveryPrice
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setDeliveryPrice($DeliveryPrice)
    {
      $this->DeliveryPrice = $DeliveryPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getCost()
    {
      return $this->Cost;
    }

    /**
     * @param float $Cost
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderWS\Order
     */
    public function setCost($Cost)
    {
      $this->Cost = $Cost;
      return $this;
    }

}
