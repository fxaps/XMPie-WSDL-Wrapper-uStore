<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\PermissionsWS;

class IsAllowed
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
     * @param string $username
     * @param string $password
     * @param int $userId
     * @param int $resourceTypeId
     * @param int $resourceId
     * @param int $actionId
     */
    public function __construct($username = null, $password = null, $userId = null, $resourceTypeId = null, $resourceId = null, $actionId = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->userId = $userId;
        $this->resourceTypeId = $resourceTypeId;
        $this->resourceId = $resourceId;
        $this->actionId = $actionId;
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
     * @return IsAllowed
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
     * @return IsAllowed
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
     * @return IsAllowed
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
     * @return IsAllowed
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
     * @return IsAllowed
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
     * @return IsAllowed
     */
    public function setActionId($actionId)
    {
        $this->actionId = $actionId;
        return $this;
    }

}
