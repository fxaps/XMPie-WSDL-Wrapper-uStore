<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CustomizationDialWS;

class GetCustomizationDialList
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
     * @var int $customizationStepId
     */
    protected $customizationStepId = null;

    /**
     * @var int $cultureId
     */
    protected $cultureId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $customizationStepId
     * @param int $cultureId
     */
    public function __construct($username = null, $password = null, $customizationStepId = null, $cultureId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->customizationStepId = $customizationStepId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CustomizationDialWS\GetCustomizationDialList
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CustomizationDialWS\GetCustomizationDialList
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomizationStepId()
    {
      return $this->customizationStepId;
    }

    /**
     * @param int $customizationStepId
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CustomizationDialWS\GetCustomizationDialList
     */
    public function setCustomizationStepId($customizationStepId)
    {
      $this->customizationStepId = $customizationStepId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CustomizationDialWS\GetCustomizationDialList
     */
    public function setCultureId($cultureId)
    {
      $this->cultureId = $cultureId;
      return $this;
    }

}
