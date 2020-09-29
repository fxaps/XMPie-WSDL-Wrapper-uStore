<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\OrderProductWS;

use DateTime;
use Exception;

class Proof extends ReturnObject
{

    /**
     * @var int $ProofID
     */
    protected $ProofID = null;

    /**
     * @var int $OrderProductID
     */
    protected $OrderProductID = null;

    /**
     * @var DateTime $ProofDate
     */
    protected $ProofDate = null;

    /**
     * @var int $UProduceProofJobID
     */
    protected $UProduceProofJobID = null;

    /**
     * @var boolean $IsProofSuccessful
     */
    protected $IsProofSuccessful = null;

    /**
     * @var int $RecipientCount
     */
    protected $RecipientCount = null;

    /**
     * @var boolean $IsProofSeen
     */
    protected $IsProofSeen = null;

    /**
     * @var string $FileExtension
     */
    protected $FileExtension = null;

    /**
     * @param int $ProofID
     * @param int $OrderProductID
     * @param DateTime $ProofDate
     * @param int $UProduceProofJobID
     * @param boolean $IsProofSuccessful
     * @param int $RecipientCount
     * @param boolean $IsProofSeen
     */
    public function __construct($ProofID = null, $OrderProductID = null, DateTime $ProofDate = null, $UProduceProofJobID = null, $IsProofSuccessful = null, $RecipientCount = null, $IsProofSeen = null)
    {
        $this->ProofID = $ProofID;
        $this->OrderProductID = $OrderProductID;
        $this->ProofDate = $ProofDate ? $ProofDate->format(DateTime::ATOM) : null;
        $this->UProduceProofJobID = $UProduceProofJobID;
        $this->IsProofSuccessful = $IsProofSuccessful;
        $this->RecipientCount = $RecipientCount;
        $this->IsProofSeen = $IsProofSeen;
    }

    /**
     * @return int
     */
    public function getProofID()
    {
        return $this->ProofID;
    }

    /**
     * @param int $ProofID
     * @return Proof
     */
    public function setProofID($ProofID)
    {
        $this->ProofID = $ProofID;
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
     * @return Proof
     */
    public function setOrderProductID($OrderProductID)
    {
        $this->OrderProductID = $OrderProductID;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getProofDate()
    {
        if ($this->ProofDate == null) {
            return null;
        } else {
            try {
                return new DateTime($this->ProofDate);
            } catch (Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param DateTime $ProofDate
     * @return Proof
     */
    public function setProofDate(DateTime $ProofDate)
    {
        $this->ProofDate = $ProofDate->format(DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getUProduceProofJobID()
    {
        return $this->UProduceProofJobID;
    }

    /**
     * @param int $UProduceProofJobID
     * @return Proof
     */
    public function setUProduceProofJobID($UProduceProofJobID)
    {
        $this->UProduceProofJobID = $UProduceProofJobID;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsProofSuccessful()
    {
        return $this->IsProofSuccessful;
    }

    /**
     * @param boolean $IsProofSuccessful
     * @return Proof
     */
    public function setIsProofSuccessful($IsProofSuccessful)
    {
        $this->IsProofSuccessful = $IsProofSuccessful;
        return $this;
    }

    /**
     * @return int
     */
    public function getRecipientCount()
    {
        return $this->RecipientCount;
    }

    /**
     * @param int $RecipientCount
     * @return Proof
     */
    public function setRecipientCount($RecipientCount)
    {
        $this->RecipientCount = $RecipientCount;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsProofSeen()
    {
        return $this->IsProofSeen;
    }

    /**
     * @param boolean $IsProofSeen
     * @return Proof
     */
    public function setIsProofSeen($IsProofSeen)
    {
        $this->IsProofSeen = $IsProofSeen;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileExtension()
    {
        return $this->FileExtension;
    }

    /**
     * @param string $FileExtension
     * @return Proof
     */
    public function setFileExtension($FileExtension)
    {
        $this->FileExtension = $FileExtension;
        return $this;
    }

}
