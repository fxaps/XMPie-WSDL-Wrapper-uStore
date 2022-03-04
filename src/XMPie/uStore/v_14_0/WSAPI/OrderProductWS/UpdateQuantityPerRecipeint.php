<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderProductWS;

class UpdateQuantityPerRecipeint
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
     * @var int $orderProductId
     */
    protected $orderProductId = null;

    /**
     * @var int $quantityPerRecipient
     */
    protected $quantityPerRecipient = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $orderProductId
     * @param int $quantityPerRecipient
     */
    public function __construct($username = null, $password = null, $orderProductId = null, $quantityPerRecipient = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->orderProductId = $orderProductId;
      $this->quantityPerRecipient = $quantityPerRecipient;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderProductWS\UpdateQuantityPerRecipeint
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderProductWS\UpdateQuantityPerRecipeint
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderProductId()
    {
      return $this->orderProductId;
    }

    /**
     * @param int $orderProductId
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderProductWS\UpdateQuantityPerRecipeint
     */
    public function setOrderProductId($orderProductId)
    {
      $this->orderProductId = $orderProductId;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantityPerRecipient()
    {
      return $this->quantityPerRecipient;
    }

    /**
     * @param int $quantityPerRecipient
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderProductWS\UpdateQuantityPerRecipeint
     */
    public function setQuantityPerRecipient($quantityPerRecipient)
    {
      $this->quantityPerRecipient = $quantityPerRecipient;
      return $this;
    }

}
