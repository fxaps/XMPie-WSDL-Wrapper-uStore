<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\LocalizationWS;

class LocalizationResource extends ReturnObject
{

    /**
     * @var string $Project
     */
    protected $Project = null;

    /**
     * @var string $Page
     */
    protected $Page = null;

    /**
     * @var string $Control
     */
    protected $Control = null;

    /**
     * @var string $Property
     */
    protected $Property = null;

    /**
     * @var int $CultureID
     */
    protected $CultureID = null;

    /**
     * @var string $LocalizedText
     */
    protected $LocalizedText = null;

    /**
     * @param int $CultureID
     */
    public function __construct($CultureID = null)
    {
      $this->CultureID = $CultureID;
    }

    /**
     * @return string
     */
    public function getProject()
    {
      return $this->Project;
    }

    /**
     * @param string $Project
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\LocalizationWS\LocalizationResource
     */
    public function setProject($Project)
    {
      $this->Project = $Project;
      return $this;
    }

    /**
     * @return string
     */
    public function getPage()
    {
      return $this->Page;
    }

    /**
     * @param string $Page
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\LocalizationWS\LocalizationResource
     */
    public function setPage($Page)
    {
      $this->Page = $Page;
      return $this;
    }

    /**
     * @return string
     */
    public function getControl()
    {
      return $this->Control;
    }

    /**
     * @param string $Control
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\LocalizationWS\LocalizationResource
     */
    public function setControl($Control)
    {
      $this->Control = $Control;
      return $this;
    }

    /**
     * @return string
     */
    public function getProperty()
    {
      return $this->Property;
    }

    /**
     * @param string $Property
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\LocalizationWS\LocalizationResource
     */
    public function setProperty($Property)
    {
      $this->Property = $Property;
      return $this;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\LocalizationWS\LocalizationResource
     */
    public function setCultureID($CultureID)
    {
      $this->CultureID = $CultureID;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocalizedText()
    {
      return $this->LocalizedText;
    }

    /**
     * @param string $LocalizedText
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\LocalizationWS\LocalizationResource
     */
    public function setLocalizedText($LocalizedText)
    {
      $this->LocalizedText = $LocalizedText;
      return $this;
    }

}
