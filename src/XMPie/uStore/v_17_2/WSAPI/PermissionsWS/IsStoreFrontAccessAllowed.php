<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\PermissionsWS;

class IsStoreFrontAccessAllowed
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
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var int $permissionTypeId
     */
    protected $permissionTypeId = null;

    /**
     * @var int $entityId
     */
    protected $entityId = null;

    /**
     * @var int $storeId
     */
    protected $storeId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $userId
     * @param int $permissionTypeId
     * @param int $entityId
     * @param int $storeId
     */
    public function __construct($username = null, $password = null, $userId = null, $permissionTypeId = null, $entityId = null, $storeId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->userId = $userId;
      $this->permissionTypeId = $permissionTypeId;
      $this->entityId = $entityId;
      $this->storeId = $storeId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\PermissionsWS\IsStoreFrontAccessAllowed
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\PermissionsWS\IsStoreFrontAccessAllowed
     */
    public function setPassword($password)
    {
      $this->password = $password;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\PermissionsWS\IsStoreFrontAccessAllowed
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return int
     */
    public function getPermissionTypeId()
    {
      return $this->permissionTypeId;
    }

    /**
     * @param int $permissionTypeId
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\PermissionsWS\IsStoreFrontAccessAllowed
     */
    public function setPermissionTypeId($permissionTypeId)
    {
      $this->permissionTypeId = $permissionTypeId;
      return $this;
    }

    /**
     * @return int
     */
    public function getEntityId()
    {
      return $this->entityId;
    }

    /**
     * @param int $entityId
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\PermissionsWS\IsStoreFrontAccessAllowed
     */
    public function setEntityId($entityId)
    {
      $this->entityId = $entityId;
      return $this;
    }

    /**
     * @return int
     */
    public function getStoreId()
    {
      return $this->storeId;
    }

    /**
     * @param int $storeId
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\PermissionsWS\IsStoreFrontAccessAllowed
     */
    public function setStoreId($storeId)
    {
      $this->storeId = $storeId;
      return $this;
    }

}
