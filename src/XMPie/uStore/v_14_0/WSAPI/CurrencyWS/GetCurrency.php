<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CurrencyWS;

class GetCurrency
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
     * @var int $currencyId
     */
    protected $currencyId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $currencyId
     */
    public function __construct($username = null, $password = null, $currencyId = null)
    {
      $this->username = $username;
      $this->password = $password;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CurrencyWS\GetCurrency
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CurrencyWS\GetCurrency
     */
    public function setPassword($password)
    {
      $this->password = $password;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CurrencyWS\GetCurrency
     */
    public function setCurrencyId($currencyId)
    {
      $this->currencyId = $currencyId;
      return $this;
    }

}
