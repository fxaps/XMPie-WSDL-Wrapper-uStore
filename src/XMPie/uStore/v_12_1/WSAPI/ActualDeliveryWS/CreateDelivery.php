<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ActualDeliveryWS;

use DateTime;
use Exception;

class CreateDelivery
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
     * @var ArrayOfInt $deliveryItemIds
     */
    protected $deliveryItemIds = null;

    /**
     * @var DateTime $deliveryDatetime
     */
    protected $deliveryDatetime = null;

    /**
     * @var string $trackingNumber
     */
    protected $trackingNumber = null;

    /**
     * @param string $username
     * @param string $password
     * @param ArrayOfInt $deliveryItemIds
     * @param DateTime $deliveryDatetime
     * @param string $trackingNumber
     */
    public function __construct($username = null, $password = null, $deliveryItemIds = null, DateTime $deliveryDatetime = null, $trackingNumber = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->deliveryItemIds = $deliveryItemIds;
        $this->deliveryDatetime = $deliveryDatetime ? $deliveryDatetime->format(DateTime::ATOM) : null;
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
     * @return CreateDelivery
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
     * @return CreateDelivery
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getDeliveryItemIds()
    {
        return $this->deliveryItemIds;
    }

    /**
     * @param ArrayOfInt $deliveryItemIds
     * @return CreateDelivery
     */
    public function setDeliveryItemIds($deliveryItemIds)
    {
        $this->deliveryItemIds = $deliveryItemIds;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDeliveryDatetime()
    {
        if ($this->deliveryDatetime == null) {
            return null;
        } else {
            try {
                return new DateTime($this->deliveryDatetime);
            } catch (Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param DateTime $deliveryDatetime
     * @return CreateDelivery
     */
    public function setDeliveryDatetime(DateTime $deliveryDatetime)
    {
        $this->deliveryDatetime = $deliveryDatetime->format(DateTime::ATOM);
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
     * @return CreateDelivery
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

}
