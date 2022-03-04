<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductWS;

class GetProductThumbnails
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
     * @param string $username
     * @param string $password
     * @param int $productId
     */
    public function __construct($username = null, $password = null, $productId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->productId = $productId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductWS\GetProductThumbnails
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductWS\GetProductThumbnails
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\ProductWS\GetProductThumbnails
     */
    public function setProductId($productId)
    {
      $this->productId = $productId;
      return $this;
    }

}
