<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS;

class GetCustomizationDial
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
     * @var int $customizationDialId
     */
    protected $customizationDialId = null;

    /**
     * @var int $cultureId
     */
    protected $cultureId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $customizationDialId
     * @param int $cultureId
     */
    public function __construct($username = null, $password = null, $customizationDialId = null, $cultureId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->customizationDialId = $customizationDialId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\GetCustomizationDial
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\GetCustomizationDial
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomizationDialId()
    {
      return $this->customizationDialId;
    }

    /**
     * @param int $customizationDialId
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\GetCustomizationDial
     */
    public function setCustomizationDialId($customizationDialId)
    {
      $this->customizationDialId = $customizationDialId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\GetCustomizationDial
     */
    public function setCultureId($cultureId)
    {
      $this->cultureId = $cultureId;
      return $this;
    }

}
