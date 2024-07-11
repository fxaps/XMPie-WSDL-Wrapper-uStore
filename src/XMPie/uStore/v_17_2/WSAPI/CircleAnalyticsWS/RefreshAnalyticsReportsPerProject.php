<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CircleAnalyticsWS;

class RefreshAnalyticsReportsPerProject
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
     * @var int $cultureId
     */
    protected $cultureId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $orderProductId
     * @param int $cultureId
     */
    public function __construct($username = null, $password = null, $orderProductId = null, $cultureId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->orderProductId = $orderProductId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CircleAnalyticsWS\RefreshAnalyticsReportsPerProject
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CircleAnalyticsWS\RefreshAnalyticsReportsPerProject
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CircleAnalyticsWS\RefreshAnalyticsReportsPerProject
     */
    public function setOrderProductId($orderProductId)
    {
      $this->orderProductId = $orderProductId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CircleAnalyticsWS\RefreshAnalyticsReportsPerProject
     */
    public function setCultureId($cultureId)
    {
      $this->cultureId = $cultureId;
      return $this;
    }

}
