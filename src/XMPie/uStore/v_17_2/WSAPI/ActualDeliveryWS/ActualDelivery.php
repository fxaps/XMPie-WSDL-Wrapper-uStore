<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ActualDeliveryWS;

class ActualDelivery extends ReturnObject
{

    /**
     * @var int $ActualDeliveryID
     */
    protected $ActualDeliveryID = null;

    /**
     * @var int $DeliveryServiceID
     */
    protected $DeliveryServiceID = null;

    /**
     * @var \DateTime $ShipDate
     */
    protected $ShipDate = null;

    /**
     * @var int $UserID
     */
    protected $UserID = null;

    /**
     * @var int $StatusID
     */
    protected $StatusID = null;

    /**
     * @var string $GroupName
     */
    protected $GroupName = null;

    /**
     * @var string $DeliveryStatus
     */
    protected $DeliveryStatus = null;

    /**
     * @var string $TrackingNumber
     */
    protected $TrackingNumber = null;

    /**
     * @var float $DeliveryPrice
     */
    protected $DeliveryPrice = null;

    /**
     * @param int $ActualDeliveryID
     * @param int $DeliveryServiceID
     * @param \DateTime $ShipDate
     * @param int $UserID
     * @param int $StatusID
     * @param float $DeliveryPrice
     */
    public function __construct($ActualDeliveryID = null, $DeliveryServiceID = null, \DateTime $ShipDate = null, $UserID = null, $StatusID = null, $DeliveryPrice = null)
    {
      $this->ActualDeliveryID = $ActualDeliveryID;
      $this->DeliveryServiceID = $DeliveryServiceID;
      $this->ShipDate = $ShipDate ? $ShipDate->format(\DateTime::ATOM) : null;
      $this->UserID = $UserID;
      $this->StatusID = $StatusID;
      $this->DeliveryPrice = $DeliveryPrice;
    }

    /**
     * @return int
     */
    public function getActualDeliveryID()
    {
      return $this->ActualDeliveryID;
    }

    /**
     * @param int $ActualDeliveryID
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ActualDeliveryWS\ActualDelivery
     */
    public function setActualDeliveryID($ActualDeliveryID)
    {
      $this->ActualDeliveryID = $ActualDeliveryID;
      return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryServiceID()
    {
      return $this->DeliveryServiceID;
    }

    /**
     * @param int $DeliveryServiceID
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ActualDeliveryWS\ActualDelivery
     */
    public function setDeliveryServiceID($DeliveryServiceID)
    {
      $this->DeliveryServiceID = $DeliveryServiceID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShipDate()
    {
      if ($this->ShipDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ShipDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ShipDate
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ActualDeliveryWS\ActualDelivery
     */
    public function setShipDate(\DateTime $ShipDate)
    {
      $this->ShipDate = $ShipDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getUserID()
    {
      return $this->UserID;
    }

    /**
     * @param int $UserID
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ActualDeliveryWS\ActualDelivery
     */
    public function setUserID($UserID)
    {
      $this->UserID = $UserID;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatusID()
    {
      return $this->StatusID;
    }

    /**
     * @param int $StatusID
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ActualDeliveryWS\ActualDelivery
     */
    public function setStatusID($StatusID)
    {
      $this->StatusID = $StatusID;
      return $this;
    }

    /**
     * @return string
     */
    public function getGroupName()
    {
      return $this->GroupName;
    }

    /**
     * @param string $GroupName
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ActualDeliveryWS\ActualDelivery
     */
    public function setGroupName($GroupName)
    {
      $this->GroupName = $GroupName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryStatus()
    {
      return $this->DeliveryStatus;
    }

    /**
     * @param string $DeliveryStatus
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ActualDeliveryWS\ActualDelivery
     */
    public function setDeliveryStatus($DeliveryStatus)
    {
      $this->DeliveryStatus = $DeliveryStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
      return $this->TrackingNumber;
    }

    /**
     * @param string $TrackingNumber
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ActualDeliveryWS\ActualDelivery
     */
    public function setTrackingNumber($TrackingNumber)
    {
      $this->TrackingNumber = $TrackingNumber;
      return $this;
    }

    /**
     * @return float
     */
    public function getDeliveryPrice()
    {
      return $this->DeliveryPrice;
    }

    /**
     * @param float $DeliveryPrice
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ActualDeliveryWS\ActualDelivery
     */
    public function setDeliveryPrice($DeliveryPrice)
    {
      $this->DeliveryPrice = $DeliveryPrice;
      return $this;
    }

}
