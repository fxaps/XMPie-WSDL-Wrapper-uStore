<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationStepWS;

class CustomizationStep extends ReturnObject
{

    /**
     * @var int $CustomizationStepID
     */
    protected $CustomizationStepID = null;

    /**
     * @var int $CustomizationWizardID
     */
    protected $CustomizationWizardID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var int $DisplayOrder
     */
    protected $DisplayOrder = null;

    /**
     * @param int $CustomizationStepID
     * @param int $CustomizationWizardID
     * @param int $DisplayOrder
     */
    public function __construct($CustomizationStepID = null, $CustomizationWizardID = null, $DisplayOrder = null)
    {
      $this->CustomizationStepID = $CustomizationStepID;
      $this->CustomizationWizardID = $CustomizationWizardID;
      $this->DisplayOrder = $DisplayOrder;
    }

    /**
     * @return int
     */
    public function getCustomizationStepID()
    {
      return $this->CustomizationStepID;
    }

    /**
     * @param int $CustomizationStepID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationStepWS\CustomizationStep
     */
    public function setCustomizationStepID($CustomizationStepID)
    {
      $this->CustomizationStepID = $CustomizationStepID;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomizationWizardID()
    {
      return $this->CustomizationWizardID;
    }

    /**
     * @param int $CustomizationWizardID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationStepWS\CustomizationStep
     */
    public function setCustomizationWizardID($CustomizationWizardID)
    {
      $this->CustomizationWizardID = $CustomizationWizardID;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationStepWS\CustomizationStep
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationStepWS\CustomizationStep
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return int
     */
    public function getDisplayOrder()
    {
      return $this->DisplayOrder;
    }

    /**
     * @param int $DisplayOrder
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CustomizationStepWS\CustomizationStep
     */
    public function setDisplayOrder($DisplayOrder)
    {
      $this->DisplayOrder = $DisplayOrder;
      return $this;
    }

}
