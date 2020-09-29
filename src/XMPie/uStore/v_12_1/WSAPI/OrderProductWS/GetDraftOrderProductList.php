<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS;

class GetDraftOrderProductList
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
     * @var int $storeId
     */
    protected $storeId = null;

    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var int $count
     */
    protected $count = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $storeId
     * @param int $userId
     * @param int $count
     */
    public function __construct($username = null, $password = null, $storeId = null, $userId = null, $count = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->storeId = $storeId;
        $this->userId = $userId;
        $this->count = $count;
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
     * @return GetDraftOrderProductList
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
     * @return GetDraftOrderProductList
     */
    public function setPassword($password)
    {
        $this->password = $password;
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
     * @return GetDraftOrderProductList
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;
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
     * @return GetDraftOrderProductList
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return GetDraftOrderProductList
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

}
