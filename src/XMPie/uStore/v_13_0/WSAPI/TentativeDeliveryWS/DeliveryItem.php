<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\TentativeDeliveryWS;

class DeliveryItem extends ReturnObject
{

    /**
     * @var int $DeliveryItemID
     */
    protected $DeliveryItemID = null;

    /**
     * @var int $TentativeDeliveryID
     */
    protected $TentativeDeliveryID = null;

    /**
     * @var int $ActualDeliveryID
     */
    protected $ActualDeliveryID = null;

    /**
     * @var int $OrderProductID
     */
    protected $OrderProductID = null;

    /**
     * @var int $QuantityPerRecipient
     */
    protected $QuantityPerRecipient = null;

    /**
     * @var int $OrderQueueID
     */
    protected $OrderQueueID = null;

    /**
     * @param int $DeliveryItemID
     * @param int $TentativeDeliveryID
     * @param int $ActualDeliveryID
     * @param int $OrderProductID
     * @param int $QuantityPerRecipient
     * @param int $OrderQueueID
     */
    public function __construct($DeliveryItemID = null, $TentativeDeliveryID = null, $ActualDeliveryID = null, $OrderProductID = null, $QuantityPerRecipient = null, $OrderQueueID = null)
    {
        $this->DeliveryItemID = $DeliveryItemID;
        $this->TentativeDeliveryID = $TentativeDeliveryID;
        $this->ActualDeliveryID = $ActualDeliveryID;
        $this->OrderProductID = $OrderProductID;
        $this->QuantityPerRecipient = $QuantityPerRecipient;
        $this->OrderQueueID = $OrderQueueID;
    }

    /**
     * @return int
     */
    public function getDeliveryItemID()
    {
        return $this->DeliveryItemID;
    }

    /**
     * @param int $DeliveryItemID
     * @return DeliveryItem
     */
    public function setDeliveryItemID($DeliveryItemID)
    {
        $this->DeliveryItemID = $DeliveryItemID;
        return $this;
    }

    /**
     * @return int
     */
    public function getTentativeDeliveryID()
    {
        return $this->TentativeDeliveryID;
    }

    /**
     * @param int $TentativeDeliveryID
     * @return DeliveryItem
     */
    public function setTentativeDeliveryID($TentativeDeliveryID)
    {
        $this->TentativeDeliveryID = $TentativeDeliveryID;
        return $this;
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
     * @return DeliveryItem
     */
    public function setActualDeliveryID($ActualDeliveryID)
    {
        $this->ActualDeliveryID = $ActualDeliveryID;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderProductID()
    {
        return $this->OrderProductID;
    }

    /**
     * @param int $OrderProductID
     * @return DeliveryItem
     */
    public function setOrderProductID($OrderProductID)
    {
        $this->OrderProductID = $OrderProductID;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantityPerRecipient()
    {
        return $this->QuantityPerRecipient;
    }

    /**
     * @param int $QuantityPerRecipient
     * @return DeliveryItem
     */
    public function setQuantityPerRecipient($QuantityPerRecipient)
    {
        $this->QuantityPerRecipient = $QuantityPerRecipient;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderQueueID()
    {
        return $this->OrderQueueID;
    }

    /**
     * @param int $OrderQueueID
     * @return DeliveryItem
     */
    public function setOrderQueueID($OrderQueueID)
    {
        $this->OrderQueueID = $OrderQueueID;
        return $this;
    }

}
