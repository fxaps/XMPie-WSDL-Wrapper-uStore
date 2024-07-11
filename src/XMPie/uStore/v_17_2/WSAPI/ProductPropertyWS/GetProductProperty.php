<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductPropertyWS;

class GetProductProperty
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
     * @var int $productPropertyId
     */
    protected $productPropertyId = null;

    /**
     * @var int $cultureId
     */
    protected $cultureId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $productPropertyId
     * @param int $cultureId
     */
    public function __construct($username = null, $password = null, $productPropertyId = null, $cultureId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->productPropertyId = $productPropertyId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductPropertyWS\GetProductProperty
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductPropertyWS\GetProductProperty
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductPropertyId()
    {
      return $this->productPropertyId;
    }

    /**
     * @param int $productPropertyId
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductPropertyWS\GetProductProperty
     */
    public function setProductPropertyId($productPropertyId)
    {
      $this->productPropertyId = $productPropertyId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductPropertyWS\GetProductProperty
     */
    public function setCultureId($cultureId)
    {
      $this->cultureId = $cultureId;
      return $this;
    }

}
