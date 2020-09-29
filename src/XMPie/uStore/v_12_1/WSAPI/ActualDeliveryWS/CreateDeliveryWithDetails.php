<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ActualDeliveryWS;

use DateTime;
use Exception;

class CreateDeliveryWithDetails
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
     * @var float $deliveryPrice
     */
    protected $deliveryPrice = null;

    /**
     * @var int $deliveryServiceID
     */
    protected $deliveryServiceID = null;

    /**
     * @param string $username
     * @param string $password
     * @param ArrayOfInt $deliveryItemIds
     * @param DateTime $deliveryDatetime
     * @param string $trackingNumber
     * @param float $deliveryPrice
     * @param int $deliveryServiceID
     */
    public function __construct($username = null, $password = null, $deliveryItemIds = null, DateTime $deliveryDatetime = null, $trackingNumber = null, $deliveryPrice = null, $deliveryServiceID = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->deliveryItemIds = $deliveryItemIds;
        $this->deliveryDatetime = $deliveryDatetime ? $deliveryDatetime->format(DateTime::ATOM) : null;
        $this->trackingNumber = $trackingNumber;
        $this->deliveryPrice = $deliveryPrice;
        $this->deliveryServiceID = $deliveryServiceID;
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
     * @return CreateDeliveryWithDetails
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
     * @return CreateDeliveryWithDetails
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
     * @return CreateDeliveryWithDetails
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
     * @return CreateDeliveryWithDetails
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
     * @return CreateDeliveryWithDetails
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

    /**
     * @return float
     */
    public function getDeliveryPrice()
    {
        return $this->deliveryPrice;
    }

    /**
     * @param float $deliveryPrice
     * @return CreateDeliveryWithDetails
     */
    public function setDeliveryPrice($deliveryPrice)
    {
        $this->deliveryPrice = $deliveryPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryServiceID()
    {
        return $this->deliveryServiceID;
    }

    /**
     * @param int $deliveryServiceID
     * @return CreateDeliveryWithDetails
     */
    public function setDeliveryServiceID($deliveryServiceID)
    {
        $this->deliveryServiceID = $deliveryServiceID;
        return $this;
    }

}
