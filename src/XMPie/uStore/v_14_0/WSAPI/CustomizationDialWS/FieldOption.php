<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS;

class FieldOption extends ReturnObject
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param int $ID
     */
    public function __construct($ID = null)
    {
      $this->ID = $ID;
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\FieldOption
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\FieldOption
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationDialWS\FieldOption
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
