<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CurrencyWS;

class GetCurrencyByAbbreviation
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
     * @var string $abbreviation
     */
    protected $abbreviation = null;

    /**
     * @param string $username
     * @param string $password
     * @param string $abbreviation
     */
    public function __construct($username = null, $password = null, $abbreviation = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->abbreviation = $abbreviation;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CurrencyWS\GetCurrencyByAbbreviation
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CurrencyWS\GetCurrencyByAbbreviation
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getAbbreviation()
    {
      return $this->abbreviation;
    }

    /**
     * @param string $abbreviation
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CurrencyWS\GetCurrencyByAbbreviation
     */
    public function setAbbreviation($abbreviation)
    {
      $this->abbreviation = $abbreviation;
      return $this;
    }

}
