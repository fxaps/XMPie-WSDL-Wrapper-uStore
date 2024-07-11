<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TriggerWS;

class InvokeEvent
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
     * @var int $eventId
     */
    protected $eventId = null;

    /**
     * @var int $storeId
     */
    protected $storeId = null;

    /**
     * @var int $cultureId
     */
    protected $cultureId = null;

    /**
     * @var int $productId
     */
    protected $productId = null;

    /**
     * @var int $orderProductId
     */
    protected $orderProductId = null;

    /**
     * @var int $orderId
     */
    protected $orderId = null;

    /**
     * @var int $userid
     */
    protected $userid = null;

    /**
     * @var ArrayOfParameter $additionalParameters
     */
    protected $additionalParameters = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $eventId
     * @param int $storeId
     * @param int $cultureId
     * @param int $productId
     * @param int $orderProductId
     * @param int $orderId
     * @param int $userid
     * @param ArrayOfParameter $additionalParameters
     */
    public function __construct($username = null, $password = null, $eventId = null, $storeId = null, $cultureId = null, $productId = null, $orderProductId = null, $orderId = null, $userid = null, $additionalParameters = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->eventId = $eventId;
      $this->storeId = $storeId;
      $this->cultureId = $cultureId;
      $this->productId = $productId;
      $this->orderProductId = $orderProductId;
      $this->orderId = $orderId;
      $this->userid = $userid;
      $this->additionalParameters = $additionalParameters;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TriggerWS\InvokeEvent
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TriggerWS\InvokeEvent
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getEventId()
    {
      return $this->eventId;
    }

    /**
     * @param int $eventId
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TriggerWS\InvokeEvent
     */
    public function setEventId($eventId)
    {
      $this->eventId = $eventId;
      return $this;
    }

    /**
     * @return int
     */
    public function getStoreId()
    {
      return $this->storeId;
    }

    /**
     * @param int $storeId
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TriggerWS\InvokeEvent
     */
    public function setStoreId($storeId)
    {
      $this->storeId = $storeId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TriggerWS\InvokeEvent
     */
    public function setCultureId($cultureId)
    {
      $this->cultureId = $cultureId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TriggerWS\InvokeEvent
     */
    public function setProductId($productId)
    {
      $this->productId = $productId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TriggerWS\InvokeEvent
     */
    public function setOrderProductId($orderProductId)
    {
      $this->orderProductId = $orderProductId;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
      return $this->orderId;
    }

    /**
     * @param int $orderId
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TriggerWS\InvokeEvent
     */
    public function setOrderId($orderId)
    {
      $this->orderId = $orderId;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserid()
    {
      return $this->userid;
    }

    /**
     * @param int $userid
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TriggerWS\InvokeEvent
     */
    public function setUserid($userid)
    {
      $this->userid = $userid;
      return $this;
    }

    /**
     * @return ArrayOfParameter
     */
    public function getAdditionalParameters()
    {
      return $this->additionalParameters;
    }

    /**
     * @param ArrayOfParameter $additionalParameters
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TriggerWS\InvokeEvent
     */
    public function setAdditionalParameters($additionalParameters)
    {
      $this->additionalParameters = $additionalParameters;
      return $this;
    }

}
