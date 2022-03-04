<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\LocalizationWS;

class GetLocalizedString
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
     * @var string $stringId
     */
    protected $stringId = null;

    /**
     * @var int $cultureId
     */
    protected $cultureId = null;

    /**
     * @param string $username
     * @param string $password
     * @param string $stringId
     * @param int $cultureId
     */
    public function __construct($username = null, $password = null, $stringId = null, $cultureId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->stringId = $stringId;
      $this->cultureId = $cultureId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\LocalizationWS\GetLocalizedString
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\LocalizationWS\GetLocalizedString
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getStringId()
    {
      return $this->stringId;
    }

    /**
     * @param string $stringId
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\LocalizationWS\GetLocalizedString
     */
    public function setStringId($stringId)
    {
      $this->stringId = $stringId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\LocalizationWS\GetLocalizedString
     */
    public function setCultureId($cultureId)
    {
      $this->cultureId = $cultureId;
      return $this;
    }

}
