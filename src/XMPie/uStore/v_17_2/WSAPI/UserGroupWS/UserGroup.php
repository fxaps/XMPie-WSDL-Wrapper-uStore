<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserGroupWS;

class UserGroup extends ReturnObject
{

    /**
     * @var int $UserGroupID
     */
    protected $UserGroupID = null;

    /**
     * @var int $ParentGroupId
     */
    protected $ParentGroupId = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var boolean $IsAnonymous
     */
    protected $IsAnonymous = null;

    /**
     * @param int $UserGroupID
     * @param int $ParentGroupId
     * @param boolean $IsAnonymous
     */
    public function __construct($UserGroupID = null, $ParentGroupId = null, $IsAnonymous = null)
    {
      $this->UserGroupID = $UserGroupID;
      $this->ParentGroupId = $ParentGroupId;
      $this->IsAnonymous = $IsAnonymous;
    }

    /**
     * @return int
     */
    public function getUserGroupID()
    {
      return $this->UserGroupID;
    }

    /**
     * @param int $UserGroupID
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserGroupWS\UserGroup
     */
    public function setUserGroupID($UserGroupID)
    {
      $this->UserGroupID = $UserGroupID;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentGroupId()
    {
      return $this->ParentGroupId;
    }

    /**
     * @param int $ParentGroupId
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserGroupWS\UserGroup
     */
    public function setParentGroupId($ParentGroupId)
    {
      $this->ParentGroupId = $ParentGroupId;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserGroupWS\UserGroup
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserGroupWS\UserGroup
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAnonymous()
    {
      return $this->IsAnonymous;
    }

    /**
     * @param boolean $IsAnonymous
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserGroupWS\UserGroup
     */
    public function setIsAnonymous($IsAnonymous)
    {
      $this->IsAnonymous = $IsAnonymous;
      return $this;
    }

}
