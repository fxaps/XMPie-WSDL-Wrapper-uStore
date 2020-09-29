<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\UserWS;

class GetSingleSignOnUrl
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
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $userPassword
     */
    protected $userPassword = null;

    /**
     * @var int $storeId
     */
    protected $storeId = null;

    /**
     * @var int $productId
     */
    protected $productId = null;

    /**
     * @var int $cultureId
     */
    protected $cultureId = null;

    /**
     * @var string $logoutUrl
     */
    protected $logoutUrl = null;

    /**
     * @param string $username
     * @param string $password
     * @param string $email
     * @param string $userPassword
     * @param int $storeId
     * @param int $productId
     * @param int $cultureId
     * @param string $logoutUrl
     */
    public function __construct($username = null, $password = null, $email = null, $userPassword = null, $storeId = null, $productId = null, $cultureId = null, $logoutUrl = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->userPassword = $userPassword;
        $this->storeId = $storeId;
        $this->productId = $productId;
        $this->cultureId = $cultureId;
        $this->logoutUrl = $logoutUrl;
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
     * @return GetSingleSignOnUrl
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
     * @return GetSingleSignOnUrl
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return GetSingleSignOnUrl
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * @param string $userPassword
     * @return GetSingleSignOnUrl
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;
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
     * @return GetSingleSignOnUrl
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     * @return GetSingleSignOnUrl
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCultureId()
    {
        return $this->cultureId;
    }

    /**
     * @param int $cultureId
     * @return GetSingleSignOnUrl
     */
    public function setCultureId($cultureId)
    {
        $this->cultureId = $cultureId;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogoutUrl()
    {
        return $this->logoutUrl;
    }

    /**
     * @param string $logoutUrl
     * @return GetSingleSignOnUrl
     */
    public function setLogoutUrl($logoutUrl)
    {
        $this->logoutUrl = $logoutUrl;
        return $this;
    }

}
