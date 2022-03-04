<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS;

class TentativeDelivery extends ReturnObject
{

    /**
     * @var int $TentativeDeliveryID
     */
    protected $TentativeDeliveryID = null;

    /**
     * @var int $OrderID
     */
    protected $OrderID = null;

    /**
     * @var int $PickupAddressID
     */
    protected $PickupAddressID = null;

    /**
     * @var int $DeliveryMethod
     */
    protected $DeliveryMethod = null;

    /**
     * @var int $DeliveryServiceID
     */
    protected $DeliveryServiceID = null;

    /**
     * @var float $DeliveryPrice
     */
    protected $DeliveryPrice = null;

    /**
     * @var ArrayOfDeliveryItem $DeliveryItems
     */
    protected $DeliveryItems = null;

    /**
     * @var string $Ship_Name
     */
    protected $Ship_Name = null;

    /**
     * @var string $Ship_Company
     */
    protected $Ship_Company = null;

    /**
     * @var string $Ship_Add1
     */
    protected $Ship_Add1 = null;

    /**
     * @var string $Ship_Add2
     */
    protected $Ship_Add2 = null;

    /**
     * @var string $Ship_City
     */
    protected $Ship_City = null;

    /**
     * @var string $Ship_StateName
     */
    protected $Ship_StateName = null;

    /**
     * @var int $Ship_StateId
     */
    protected $Ship_StateId = null;

    /**
     * @var string $Ship_Zip
     */
    protected $Ship_Zip = null;

    /**
     * @var string $Ship_Phone
     */
    protected $Ship_Phone = null;

    /**
     * @var string $Ship_Fax
     */
    protected $Ship_Fax = null;

    /**
     * @var string $Ship_CountryName
     */
    protected $Ship_CountryName = null;

    /**
     * @var int $Ship_CountryId
     */
    protected $Ship_CountryId = null;

    /**
     * @param int $TentativeDeliveryID
     * @param int $OrderID
     * @param int $PickupAddressID
     * @param int $DeliveryMethod
     * @param int $DeliveryServiceID
     * @param float $DeliveryPrice
     * @param int $Ship_StateId
     * @param int $Ship_CountryId
     */
    public function __construct($TentativeDeliveryID = null, $OrderID = null, $PickupAddressID = null, $DeliveryMethod = null, $DeliveryServiceID = null, $DeliveryPrice = null, $Ship_StateId = null, $Ship_CountryId = null)
    {
      $this->TentativeDeliveryID = $TentativeDeliveryID;
      $this->OrderID = $OrderID;
      $this->PickupAddressID = $PickupAddressID;
      $this->DeliveryMethod = $DeliveryMethod;
      $this->DeliveryServiceID = $DeliveryServiceID;
      $this->DeliveryPrice = $DeliveryPrice;
      $this->Ship_StateId = $Ship_StateId;
      $this->Ship_CountryId = $Ship_CountryId;
    }

    /**
     * @return int
     */
    public function getTentativeDeliveryID()
    {
      return $this->TentativeDeliveryID;
    }

    /**
     * @param int $TentativeDeliveryID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\TentativeDelivery
     */
    public function setTentativeDeliveryID($TentativeDeliveryID)
    {
      $this->TentativeDeliveryID = $TentativeDeliveryID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\TentativeDelivery
     */
    public function setOrderID($OrderID)
    {
      $this->OrderID = $OrderID;
      return $this;
    }

    /**
     * @return int
     */
    public function getPickupAddressID()
    {
      return $this->PickupAddressID;
    }

    /**
     * @param int $PickupAddressID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\TentativeDelivery
     */
    public function setPickupAddressID($PickupAddressID)
    {
      $this->PickupAddressID = $PickupAddressID;
      return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryMethod()
    {
      return $this->DeliveryMethod;
    }

    /**
     * @param int $DeliveryMethod
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\TentativeDelivery
     */
    public function setDeliveryMethod($DeliveryMethod)
    {
      $this->DeliveryMethod = $DeliveryMethod;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\TentativeDelivery
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\TentativeDelivery
     */
    public function setDeliveryPrice($DeliveryPrice)
    {
      $this->DeliveryPrice = $DeliveryPrice;
      return $this;
    }

    /**
     * @return ArrayOfDeliveryItem
     */
    public function getDeliveryItems()
    {
      return $this->DeliveryItems;
    }

    /**
     * @param ArrayOfDeliveryItem $DeliveryItems
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\TentativeDelivery
     */
    public function setDeliveryItems($DeliveryItems)
    {
      $this->DeliveryItems = $DeliveryItems;
      return $this;
    }

    /**
     * @return string
     */
    public function getShip_Name()
    {
      return $this->Ship_Name;
    }

    /**
     * @param string $Ship_Name
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\TentativeDelivery
     */
    public function setShip_Name($Ship_Name)
    {
      $this->Ship_Name = $Ship_Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getShip_Company()
    {
      return $this->Ship_Company;
    }

    /**
     * @param string $Ship_Company
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\TentativeDelivery
     */
    public function setShip_Company($Ship_Company)
    {
      $this->Ship_Company = $Ship_Company;
      return $this;
    }

    /**
     * @return string
     */
    public function getShip_Add1()
    {
      return $this->Ship_Add1;
    }

    /**
     * @param string $Ship_Add1
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\TentativeDelivery
     */
    public function setShip_Add1($Ship_Add1)
    {
      $this->Ship_Add1 = $Ship_Add1;
      return $this;
    }

    /**
     * @return string
     */
    public function getShip_Add2()
    {
      return $this->Ship_Add2;
    }

    /**
     * @param string $Ship_Add2
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\TentativeDelivery
     */
    public function setShip_Add2($Ship_Add2)
    {
      $this->Ship_Add2 = $Ship_Add2;
      return $this;
    }

    /**
     * @return string
     */
    public function getShip_City()
    {
      return $this->Ship_City;
    }

    /**
     * @param string $Ship_City
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\TentativeDelivery
     */
    public function setShip_City($Ship_City)
    {
      $this->Ship_City = $Ship_City;
      return $this;
    }

    /**
     * @return string
     */
    public function getShip_StateName()
    {
      return $this->Ship_StateName;
    }

    /**
     * @param string $Ship_StateName
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\TentativeDelivery
     */
    public function setShip_StateName($Ship_StateName)
    {
      $this->Ship_StateName = $Ship_StateName;
      return $this;
    }

    /**
     * @return int
     */
    public function getShip_StateId()
    {
      return $this->Ship_StateId;
    }

    /**
     * @param int $Ship_StateId
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\TentativeDelivery
     */
    public function setShip_StateId($Ship_StateId)
    {
      $this->Ship_StateId = $Ship_StateId;
      return $this;
    }

    /**
     * @return string
     */
    public function getShip_Zip()
    {
      return $this->Ship_Zip;
    }

    /**
     * @param string $Ship_Zip
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\TentativeDelivery
     */
    public function setShip_Zip($Ship_Zip)
    {
      $this->Ship_Zip = $Ship_Zip;
      return $this;
    }

    /**
     * @return string
     */
    public function getShip_Phone()
    {
      return $this->Ship_Phone;
    }

    /**
     * @param string $Ship_Phone
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\TentativeDelivery
     */
    public function setShip_Phone($Ship_Phone)
    {
      $this->Ship_Phone = $Ship_Phone;
      return $this;
    }

    /**
     * @return string
     */
    public function getShip_Fax()
    {
      return $this->Ship_Fax;
    }

    /**
     * @param string $Ship_Fax
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\TentativeDelivery
     */
    public function setShip_Fax($Ship_Fax)
    {
      $this->Ship_Fax = $Ship_Fax;
      return $this;
    }

    /**
     * @return string
     */
    public function getShip_CountryName()
    {
      return $this->Ship_CountryName;
    }

    /**
     * @param string $Ship_CountryName
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\TentativeDelivery
     */
    public function setShip_CountryName($Ship_CountryName)
    {
      $this->Ship_CountryName = $Ship_CountryName;
      return $this;
    }

    /**
     * @return int
     */
    public function getShip_CountryId()
    {
      return $this->Ship_CountryId;
    }

    /**
     * @param int $Ship_CountryId
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\TentativeDeliveryWS\TentativeDelivery
     */
    public function setShip_CountryId($Ship_CountryId)
    {
      $this->Ship_CountryId = $Ship_CountryId;
      return $this;
    }

}
