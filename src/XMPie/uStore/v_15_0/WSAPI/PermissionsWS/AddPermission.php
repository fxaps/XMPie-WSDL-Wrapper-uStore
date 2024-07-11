<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\PermissionsWS;

class AddPermission
{

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var int $userTypeId
     */
    protected $userTypeId = null;

    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var int $resourceTypeId
     */
    protected $resourceTypeId = null;

    /**
     * @var int $resourceId
     */
    protected $resourceId = null;

    /**
     * @var int $actionId
     */
    protected $actionId = null;

    /**
     * @var boolean $isAllowed
     */
    protected $isAllowed = null;

    /**
     * @param string $username
     * @param string $password
     * @param string $name
     * @param string $description
     * @param int $userTypeId
     * @param int $userId
     * @param int $resourceTypeId
     * @param int $resourceId
     * @param int $actionId
     * @param boolean $isAllowed
     */
    public function __construct($username = null, $password = null, $name = null, $description = null, $userTypeId = null, $userId = null, $resourceTypeId = null, $resourceId = null, $actionId = null, $isAllowed = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->name = $name;
      $this->description = $description;
      $this->userTypeId = $userTypeId;
      $this->userId = $userId;
      $this->resourceTypeId = $resourceTypeId;
      $this->resourceId = $resourceId;
      $this->actionId = $actionId;
      $this->isAllowed = $isAllowed;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->username;
    }

    /**
     * @param string $username
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\PermissionsWS\AddPermission
     */
    public function setUsername($username)
    {
      $this->username = $username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\PermissionsWS\AddPermission
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\PermissionsWS\AddPermission
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\PermissionsWS\AddPermission
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserTypeId()
    {
      return $this->userTypeId;
    }

    /**
     * @param int $userTypeId
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\PermissionsWS\AddPermission
     */
    public function setUserTypeId($userTypeId)
    {
      $this->userTypeId = $userTypeId;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param int $userId
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\PermissionsWS\AddPermission
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return int
     */
    public function getResourceTypeId()
    {
      return $this->resourceTypeId;
    }

    /**
     * @param int $resourceTypeId
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\PermissionsWS\AddPermission
     */
    public function setResourceTypeId($resourceTypeId)
    {
      $this->resourceTypeId = $resourceTypeId;
      return $this;
    }

    /**
     * @return int
     */
    public function getResourceId()
    {
      return $this->resourceId;
    }

    /**
     * @param int $resourceId
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\PermissionsWS\AddPermission
     */
    public function setResourceId($resourceId)
    {
      $this->resourceId = $resourceId;
      return $this;
    }

    /**
     * @return int
     */
    public function getActionId()
    {
      return $this->actionId;
    }

    /**
     * @param int $actionId
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\PermissionsWS\AddPermission
     */
    public function setActionId($actionId)
    {
      $this->actionId = $actionId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAllowed()
    {
      return $this->isAllowed;
    }

    /**
     * @param boolean $isAllowed
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\PermissionsWS\AddPermission
     */
    public function setIsAllowed($isAllowed)
    {
      $this->isAllowed = $isAllowed;
      return $this;
    }

}
