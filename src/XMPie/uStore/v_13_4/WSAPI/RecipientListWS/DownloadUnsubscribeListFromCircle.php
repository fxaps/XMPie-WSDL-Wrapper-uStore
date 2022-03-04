<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS;

class DownloadUnsubscribeListFromCircle
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
     * @var guid $requestId
     */
    protected $requestId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $orderProductId
     * @param guid $requestId
     */
    public function __construct($username = null, $password = null, $orderProductId = null, $requestId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->orderProductId = $orderProductId;
      $this->requestId = $requestId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\DownloadUnsubscribeListFromCircle
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\DownloadUnsubscribeListFromCircle
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\DownloadUnsubscribeListFromCircle
     */
    public function setOrderProductId($orderProductId)
    {
      $this->orderProductId = $orderProductId;
      return $this;
    }

    /**
     * @return guid
     */
    public function getRequestId()
    {
      return $this->requestId;
    }

    /**
     * @param guid $requestId
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\DownloadUnsubscribeListFromCircle
     */
    public function setRequestId($requestId)
    {
      $this->requestId = $requestId;
      return $this;
    }

}
