<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS;

class Address extends ReturnObject
{

    /**
     * @var int $AddressID
     */
    protected $AddressID = null;

    /**
     * @var int $AddressTypeID
     */
    protected $AddressTypeID = null;

    /**
     * @var string $DisplayName
     */
    protected $DisplayName = null;

    /**
     * @var string $PersonName
     */
    protected $PersonName = null;

    /**
     * @var string $Company
     */
    protected $Company = null;

    /**
     * @var string $Address1
     */
    protected $Address1 = null;

    /**
     * @var string $Address2
     */
    protected $Address2 = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $Zip
     */
    protected $Zip = null;

    /**
     * @var string $Phone
     */
    protected $Phone = null;

    /**
     * @var string $Fax
     */
    protected $Fax = null;

    /**
     * @var int $StateID
     */
    protected $StateID = null;

    /**
     * @var int $CountryID
     */
    protected $CountryID = null;

    /**
     * @var int $CustomerID
     */
    protected $CustomerID = null;

    /**
     * @var int $UserID
     */
    protected $UserID = null;

    /**
     * @var string $AddressReference
     */
    protected $AddressReference = null;

    /**
     * @var string $TaxRegistration
     */
    protected $TaxRegistration = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @param int $AddressID
     * @param int $AddressTypeID
     * @param int $StateID
     * @param int $CountryID
     * @param int $CustomerID
     * @param int $UserID
     */
    public function __construct($AddressID = null, $AddressTypeID = null, $StateID = null, $CountryID = null, $CustomerID = null, $UserID = null)
    {
      $this->AddressID = $AddressID;
      $this->AddressTypeID = $AddressTypeID;
      $this->StateID = $StateID;
      $this->CountryID = $CountryID;
      $this->CustomerID = $CustomerID;
      $this->UserID = $UserID;
    }

    /**
     * @return int
     */
    public function getAddressID()
    {
      return $this->AddressID;
    }

    /**
     * @param int $AddressID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\Address
     */
    public function setAddressID($AddressID)
    {
      $this->AddressID = $AddressID;
      return $this;
    }

    /**
     * @return int
     */
    public function getAddressTypeID()
    {
      return $this->AddressTypeID;
    }

    /**
     * @param int $AddressTypeID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\Address
     */
    public function setAddressTypeID($AddressTypeID)
    {
      $this->AddressTypeID = $AddressTypeID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
      return $this->DisplayName;
    }

    /**
     * @param string $DisplayName
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\Address
     */
    public function setDisplayName($DisplayName)
    {
      $this->DisplayName = $DisplayName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPersonName()
    {
      return $this->PersonName;
    }

    /**
     * @param string $PersonName
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\Address
     */
    public function setPersonName($PersonName)
    {
      $this->PersonName = $PersonName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
      return $this->Company;
    }

    /**
     * @param string $Company
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\Address
     */
    public function setCompany($Company)
    {
      $this->Company = $Company;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
      return $this->Address1;
    }

    /**
     * @param string $Address1
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\Address
     */
    public function setAddress1($Address1)
    {
      $this->Address1 = $Address1;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
      return $this->Address2;
    }

    /**
     * @param string $Address2
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\Address
     */
    public function setAddress2($Address2)
    {
      $this->Address2 = $Address2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\Address
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getZip()
    {
      return $this->Zip;
    }

    /**
     * @param string $Zip
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\Address
     */
    public function setZip($Zip)
    {
      $this->Zip = $Zip;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\Address
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
      return $this->Fax;
    }

    /**
     * @param string $Fax
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\Address
     */
    public function setFax($Fax)
    {
      $this->Fax = $Fax;
      return $this;
    }

    /**
     * @return int
     */
    public function getStateID()
    {
      return $this->StateID;
    }

    /**
     * @param int $StateID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\Address
     */
    public function setStateID($StateID)
    {
      $this->StateID = $StateID;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountryID()
    {
      return $this->CountryID;
    }

    /**
     * @param int $CountryID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\Address
     */
    public function setCountryID($CountryID)
    {
      $this->CountryID = $CountryID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\Address
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\Address
     */
    public function setUserID($UserID)
    {
      $this->UserID = $UserID;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressReference()
    {
      return $this->AddressReference;
    }

    /**
     * @param string $AddressReference
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\Address
     */
    public function setAddressReference($AddressReference)
    {
      $this->AddressReference = $AddressReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxRegistration()
    {
      return $this->TaxRegistration;
    }

    /**
     * @param string $TaxRegistration
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\Address
     */
    public function setTaxRegistration($TaxRegistration)
    {
      $this->TaxRegistration = $TaxRegistration;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\Address
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

}
