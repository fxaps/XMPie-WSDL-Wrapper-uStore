<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS;

class User extends ReturnObject
{

    /**
     * @var int $UserID
     */
    protected $UserID = null;

    /**
     * @var string $Login
     */
    protected $Login = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var int $CreatedLoginSessionID
     */
    protected $CreatedLoginSessionID = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var int $ModifiedLoginSessionID
     */
    protected $ModifiedLoginSessionID = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var int $StatusID
     */
    protected $StatusID = null;

    /**
     * @var string $ExternalID
     */
    protected $ExternalID = null;

    /**
     * @var string $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var string $MobileNumber
     */
    protected $MobileNumber = null;

    /**
     * @var string $FaxNumber
     */
    protected $FaxNumber = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var string $Department
     */
    protected $Department = null;

    /**
     * @var string $JobTitle
     */
    protected $JobTitle = null;

    /**
     * @var boolean $IsActivated
     */
    protected $IsActivated = null;

    /**
     * @var boolean $IsLocked
     */
    protected $IsLocked = null;

    /**
     * @var int $AssignedToStoreID
     */
    protected $AssignedToStoreID = null;

    /**
     * @var int $GenderID
     */
    protected $GenderID = null;

    /**
     * @var \DateTime $BirthDay
     */
    protected $BirthDay = null;

    /**
     * @var string $Custom1
     */
    protected $Custom1 = null;

    /**
     * @var string $Custom2
     */
    protected $Custom2 = null;

    /**
     * @var string $Custom3
     */
    protected $Custom3 = null;

    /**
     * @var string $Custom4
     */
    protected $Custom4 = null;

    /**
     * @var string $Custom5
     */
    protected $Custom5 = null;

    /**
     * @param int $UserID
     * @param int $CreatedLoginSessionID
     * @param \DateTime $CreatedDate
     * @param int $ModifiedLoginSessionID
     * @param \DateTime $ModifiedDate
     * @param int $StatusID
     * @param boolean $IsActivated
     * @param boolean $IsLocked
     * @param int $AssignedToStoreID
     * @param int $GenderID
     * @param \DateTime $BirthDay
     */
    public function __construct($UserID = null, $CreatedLoginSessionID = null, \DateTime $CreatedDate = null, $ModifiedLoginSessionID = null, \DateTime $ModifiedDate = null, $StatusID = null, $IsActivated = null, $IsLocked = null, $AssignedToStoreID = null, $GenderID = null, \DateTime $BirthDay = null)
    {
      $this->UserID = $UserID;
      $this->CreatedLoginSessionID = $CreatedLoginSessionID;
      $this->CreatedDate = $CreatedDate ? $CreatedDate->format(\DateTime::ATOM) : null;
      $this->ModifiedLoginSessionID = $ModifiedLoginSessionID;
      $this->ModifiedDate = $ModifiedDate ? $ModifiedDate->format(\DateTime::ATOM) : null;
      $this->StatusID = $StatusID;
      $this->IsActivated = $IsActivated;
      $this->IsLocked = $IsLocked;
      $this->AssignedToStoreID = $AssignedToStoreID;
      $this->GenderID = $GenderID;
      $this->BirthDay = $BirthDay ? $BirthDay->format(\DateTime::ATOM) : null;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setUserID($UserID)
    {
      $this->UserID = $UserID;
      return $this;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
      return $this->Login;
    }

    /**
     * @param string $Login
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return int
     */
    public function getCreatedLoginSessionID()
    {
      return $this->CreatedLoginSessionID;
    }

    /**
     * @param int $CreatedLoginSessionID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setCreatedLoginSessionID($CreatedLoginSessionID)
    {
      $this->CreatedLoginSessionID = $CreatedLoginSessionID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->CreatedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreatedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreatedDate
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setCreatedDate(\DateTime $CreatedDate)
    {
      $this->CreatedDate = $CreatedDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getModifiedLoginSessionID()
    {
      return $this->ModifiedLoginSessionID;
    }

    /**
     * @param int $ModifiedLoginSessionID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setModifiedLoginSessionID($ModifiedLoginSessionID)
    {
      $this->ModifiedLoginSessionID = $ModifiedLoginSessionID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedDate()
    {
      if ($this->ModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModifiedDate
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setModifiedDate(\DateTime $ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getStatusID()
    {
      return $this->StatusID;
    }

    /**
     * @param int $StatusID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setStatusID($StatusID)
    {
      $this->StatusID = $StatusID;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalID()
    {
      return $this->ExternalID;
    }

    /**
     * @param string $ExternalID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setExternalID($ExternalID)
    {
      $this->ExternalID = $ExternalID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getMobileNumber()
    {
      return $this->MobileNumber;
    }

    /**
     * @param string $MobileNumber
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setMobileNumber($MobileNumber)
    {
      $this->MobileNumber = $MobileNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaxNumber()
    {
      return $this->FaxNumber;
    }

    /**
     * @param string $FaxNumber
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setFaxNumber($FaxNumber)
    {
      $this->FaxNumber = $FaxNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepartment()
    {
      return $this->Department;
    }

    /**
     * @param string $Department
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setDepartment($Department)
    {
      $this->Department = $Department;
      return $this;
    }

    /**
     * @return string
     */
    public function getJobTitle()
    {
      return $this->JobTitle;
    }

    /**
     * @param string $JobTitle
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setJobTitle($JobTitle)
    {
      $this->JobTitle = $JobTitle;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsActivated()
    {
      return $this->IsActivated;
    }

    /**
     * @param boolean $IsActivated
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setIsActivated($IsActivated)
    {
      $this->IsActivated = $IsActivated;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsLocked()
    {
      return $this->IsLocked;
    }

    /**
     * @param boolean $IsLocked
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setIsLocked($IsLocked)
    {
      $this->IsLocked = $IsLocked;
      return $this;
    }

    /**
     * @return int
     */
    public function getAssignedToStoreID()
    {
      return $this->AssignedToStoreID;
    }

    /**
     * @param int $AssignedToStoreID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setAssignedToStoreID($AssignedToStoreID)
    {
      $this->AssignedToStoreID = $AssignedToStoreID;
      return $this;
    }

    /**
     * @return int
     */
    public function getGenderID()
    {
      return $this->GenderID;
    }

    /**
     * @param int $GenderID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setGenderID($GenderID)
    {
      $this->GenderID = $GenderID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBirthDay()
    {
      if ($this->BirthDay == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BirthDay);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $BirthDay
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setBirthDay(\DateTime $BirthDay)
    {
      $this->BirthDay = $BirthDay->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom1()
    {
      return $this->Custom1;
    }

    /**
     * @param string $Custom1
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setCustom1($Custom1)
    {
      $this->Custom1 = $Custom1;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom2()
    {
      return $this->Custom2;
    }

    /**
     * @param string $Custom2
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setCustom2($Custom2)
    {
      $this->Custom2 = $Custom2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom3()
    {
      return $this->Custom3;
    }

    /**
     * @param string $Custom3
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setCustom3($Custom3)
    {
      $this->Custom3 = $Custom3;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom4()
    {
      return $this->Custom4;
    }

    /**
     * @param string $Custom4
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setCustom4($Custom4)
    {
      $this->Custom4 = $Custom4;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom5()
    {
      return $this->Custom5;
    }

    /**
     * @param string $Custom5
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserGroupWS\User
     */
    public function setCustom5($Custom5)
    {
      $this->Custom5 = $Custom5;
      return $this;
    }

}
