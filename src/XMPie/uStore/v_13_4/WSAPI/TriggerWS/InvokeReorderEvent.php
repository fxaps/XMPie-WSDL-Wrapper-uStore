<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\TriggerWS;

class InvokeReorderEvent
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
     * @var int $oldOrderProductId
     */
    protected $oldOrderProductId = null;

    /**
     * @var int $newOrderProductId
     */
    protected $newOrderProductId = null;

    /**
     * @var int $storeId
     */
    protected $storeId = null;

    /**
     * @var int $cultureId
     */
    protected $cultureId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $oldOrderProductId
     * @param int $newOrderProductId
     * @param int $storeId
     * @param int $cultureId
     */
    public function __construct($username = null, $password = null, $oldOrderProductId = null, $newOrderProductId = null, $storeId = null, $cultureId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->oldOrderProductId = $oldOrderProductId;
      $this->newOrderProductId = $newOrderProductId;
      $this->storeId = $storeId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\TriggerWS\InvokeReorderEvent
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\TriggerWS\InvokeReorderEvent
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getOldOrderProductId()
    {
      return $this->oldOrderProductId;
    }

    /**
     * @param int $oldOrderProductId
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\TriggerWS\InvokeReorderEvent
     */
    public function setOldOrderProductId($oldOrderProductId)
    {
      $this->oldOrderProductId = $oldOrderProductId;
      return $this;
    }

    /**
     * @return int
     */
    public function getNewOrderProductId()
    {
      return $this->newOrderProductId;
    }

    /**
     * @param int $newOrderProductId
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\TriggerWS\InvokeReorderEvent
     */
    public function setNewOrderProductId($newOrderProductId)
    {
      $this->newOrderProductId = $newOrderProductId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\TriggerWS\InvokeReorderEvent
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\TriggerWS\InvokeReorderEvent
     */
    public function setCultureId($cultureId)
    {
      $this->cultureId = $cultureId;
      return $this;
    }

}
