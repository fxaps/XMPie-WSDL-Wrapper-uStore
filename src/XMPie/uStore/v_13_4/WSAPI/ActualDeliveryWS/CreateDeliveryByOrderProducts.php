<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS;

class CreateDeliveryByOrderProducts
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
     * @var \DateTime $deliveryDatetime
     */
    protected $deliveryDatetime = null;

    /**
     * @var string $trackingNumber
     */
    protected $trackingNumber = null;

    /**
     * @param string $username
     * @param string $password
     * @param ArrayOfInt $orderProductIds
     * @param \DateTime $deliveryDatetime
     * @param string $trackingNumber
     */
    public function __construct($username = null, $password = null, $orderProductIds = null, \DateTime $deliveryDatetime = null, $trackingNumber = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->orderProductIds = $orderProductIds;
      $this->deliveryDatetime = $deliveryDatetime ? $deliveryDatetime->format(\DateTime::ATOM) : null;
      $this->trackingNumber = $trackingNumber;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\CreateDeliveryByOrderProducts
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\CreateDeliveryByOrderProducts
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\CreateDeliveryByOrderProducts
     */
    public function setOrderProductIds($orderProductIds)
    {
      $this->orderProductIds = $orderProductIds;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDatetime()
    {
      if ($this->deliveryDatetime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->deliveryDatetime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $deliveryDatetime
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\CreateDeliveryByOrderProducts
     */
    public function setDeliveryDatetime(\DateTime $deliveryDatetime)
    {
      $this->deliveryDatetime = $deliveryDatetime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
      return $this->trackingNumber;
    }

    /**
     * @param string $trackingNumber
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\ActualDeliveryWS\CreateDeliveryByOrderProducts
     */
    public function setTrackingNumber($trackingNumber)
    {
      $this->trackingNumber = $trackingNumber;
      return $this;
    }

}
