<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CustomizationStepWS;

class GetCustomizationStepList
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
     * @var int $productId
     */
    protected $productId = null;

    /**
     * @var int $cultureId
     */
    protected $cultureId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $productId
     * @param int $cultureId
     */
    public function __construct($username = null, $password = null, $productId = null, $cultureId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->productId = $productId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CustomizationStepWS\GetCustomizationStepList
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CustomizationStepWS\GetCustomizationStepList
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
      return $this->productId;
    }

    /**
     * @param int $productId
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CustomizationStepWS\GetCustomizationStepList
     */
    public function setProductId($productId)
    {
      $this->productId = $productId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CustomizationStepWS\GetCustomizationStepList
     */
    public function setCultureId($cultureId)
    {
      $this->cultureId = $cultureId;
      return $this;
    }

}
