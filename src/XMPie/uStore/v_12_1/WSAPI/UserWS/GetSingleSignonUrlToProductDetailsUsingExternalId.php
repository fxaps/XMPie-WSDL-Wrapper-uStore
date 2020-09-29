<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS;

class GetSingleSignonUrlToProductDetailsUsingExternalId
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
     * @var int $storeId
     */
    protected $storeId = null;

    /**
     * @var string $externalProductId
     */
    protected $externalProductId = null;

    /**
     * @var int $cultureId
     */
    protected $cultureId = null;

    /**
     * @var string $addToCartUrl
     */
    protected $addToCartUrl = null;

    /**
     * @var string $logoutUrl
     */
    protected $logoutUrl = null;

    /**
     * @var string $cancelUrl
     */
    protected $cancelUrl = null;

    /**
     * @var int $currencyId
     */
    protected $currencyId = null;

    /**
     * @param string $username
     * @param string $password
     * @param string $email
     * @param int $storeId
     * @param string $externalProductId
     * @param int $cultureId
     * @param string $addToCartUrl
     * @param string $logoutUrl
     * @param string $cancelUrl
     * @param int $currencyId
     */
    public function __construct($username = null, $password = null, $email = null, $storeId = null, $externalProductId = null, $cultureId = null, $addToCartUrl = null, $logoutUrl = null, $cancelUrl = null, $currencyId = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->storeId = $storeId;
        $this->externalProductId = $externalProductId;
        $this->cultureId = $cultureId;
        $this->addToCartUrl = $addToCartUrl;
        $this->logoutUrl = $logoutUrl;
        $this->cancelUrl = $cancelUrl;
        $this->currencyId = $currencyId;
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
     * @return GetSingleSignonUrlToProductDetailsUsingExternalId
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
     * @return GetSingleSignonUrlToProductDetailsUsingExternalId
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
     * @return GetSingleSignonUrlToProductDetailsUsingExternalId
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
     * @return GetSingleSignonUrlToProductDetailsUsingExternalId
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalProductId()
    {
        return $this->externalProductId;
    }

    /**
     * @param string $externalProductId
     * @return GetSingleSignonUrlToProductDetailsUsingExternalId
     */
    public function setExternalProductId($externalProductId)
    {
        $this->externalProductId = $externalProductId;
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
     * @return GetSingleSignonUrlToProductDetailsUsingExternalId
     */
    public function setCultureId($cultureId)
    {
        $this->cultureId = $cultureId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddToCartUrl()
    {
        return $this->addToCartUrl;
    }

    /**
     * @param string $addToCartUrl
     * @return GetSingleSignonUrlToProductDetailsUsingExternalId
     */
    public function setAddToCartUrl($addToCartUrl)
    {
        $this->addToCartUrl = $addToCartUrl;
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
     * @return GetSingleSignonUrlToProductDetailsUsingExternalId
     */
    public function setLogoutUrl($logoutUrl)
    {
        $this->logoutUrl = $logoutUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }

    /**
     * @param string $cancelUrl
     * @return GetSingleSignonUrlToProductDetailsUsingExternalId
     */
    public function setCancelUrl($cancelUrl)
    {
        $this->cancelUrl = $cancelUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * @param int $currencyId
     * @return GetSingleSignonUrlToProductDetailsUsingExternalId
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;
        return $this;
    }

}
