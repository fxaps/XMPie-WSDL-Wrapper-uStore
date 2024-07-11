<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS;

class ListOrderProductJobStatus
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
     * @var ArrayOfInt $orderProductIds
     */
    protected $orderProductIds = null;

    /**
     * @param string $username
     * @param string $password
     * @param ArrayOfInt $orderProductIds
     */
    public function __construct($username = null, $password = null, $orderProductIds = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->orderProductIds = $orderProductIds;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\ListOrderProductJobStatus
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\ListOrderProductJobStatus
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getOrderProductIds()
    {
      return $this->orderProductIds;
    }

    /**
     * @param ArrayOfInt $orderProductIds
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\ListOrderProductJobStatus
     */
    public function setOrderProductIds($orderProductIds)
    {
      $this->orderProductIds = $orderProductIds;
      return $this;
    }

}
