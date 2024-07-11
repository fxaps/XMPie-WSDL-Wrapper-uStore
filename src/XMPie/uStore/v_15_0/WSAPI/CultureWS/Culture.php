<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CultureWS;

class Culture extends ReturnObject
{

    /**
     * @var int $CultureID
     */
    protected $CultureID = null;

    /**
     * @var string $CultureCode
     */
    protected $CultureCode = null;

    /**
     * @var string $DisplayName
     */
    protected $DisplayName = null;

    /**
     * @var string $LocalizedDisplayName
     */
    protected $LocalizedDisplayName = null;

    /**
     * @param int $CultureID
     */
    public function __construct($CultureID = null)
    {
      $this->CultureID = $CultureID;
    }

    /**
     * @return int
     */
    public function getCultureID()
    {
      return $this->CultureID;
    }

    /**
     * @param int $CultureID
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CultureWS\Culture
     */
    public function setCultureID($CultureID)
    {
      $this->CultureID = $CultureID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCultureCode()
    {
      return $this->CultureCode;
    }

    /**
     * @param string $CultureCode
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CultureWS\Culture
     */
    public function setCultureCode($CultureCode)
    {
      $this->CultureCode = $CultureCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
      return $this->DisplayName;
    }

    /**
     * @param string $DisplayName
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CultureWS\Culture
     */
    public function setDisplayName($DisplayName)
    {
      $this->DisplayName = $DisplayName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocalizedDisplayName()
    {
      return $this->LocalizedDisplayName;
    }

    /**
     * @param string $LocalizedDisplayName
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CultureWS\Culture
     */
    public function setLocalizedDisplayName($LocalizedDisplayName)
    {
      $this->LocalizedDisplayName = $LocalizedDisplayName;
      return $this;
    }

}
