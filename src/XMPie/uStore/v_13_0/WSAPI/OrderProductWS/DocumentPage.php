<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\OrderProductWS;

class DocumentPage
{

    /**
     * @var int $PageNumber
     */
    protected $PageNumber = null;

    /**
     * @var float $Height
     */
    protected $Height = null;

    /**
     * @var float $Width
     */
    protected $Width = null;

    /**
     * @var int $ColorTypeID
     */
    protected $ColorTypeID = null;

    /**
     * @var boolean $IsRotated
     */
    protected $IsRotated = null;

    /**
     * @param int $PageNumber
     * @param float $Height
     * @param float $Width
     * @param int $ColorTypeID
     * @param boolean $IsRotated
     */
    public function __construct($PageNumber = null, $Height = null, $Width = null, $ColorTypeID = null, $IsRotated = null)
    {
        $this->PageNumber = $PageNumber;
        $this->Height = $Height;
        $this->Width = $Width;
        $this->ColorTypeID = $ColorTypeID;
        $this->IsRotated = $IsRotated;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
        return $this->PageNumber;
    }

    /**
     * @param int $PageNumber
     * @return DocumentPage
     */
    public function setPageNumber($PageNumber)
    {
        $this->PageNumber = $PageNumber;
        return $this;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
        return $this->Height;
    }

    /**
     * @param float $Height
     * @return DocumentPage
     */
    public function setHeight($Height)
    {
        $this->Height = $Height;
        return $this;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
        return $this->Width;
    }

    /**
     * @param float $Width
     * @return DocumentPage
     */
    public function setWidth($Width)
    {
        $this->Width = $Width;
        return $this;
    }

    /**
     * @return int
     */
    public function getColorTypeID()
    {
        return $this->ColorTypeID;
    }

    /**
     * @param int $ColorTypeID
     * @return DocumentPage
     */
    public function setColorTypeID($ColorTypeID)
    {
        $this->ColorTypeID = $ColorTypeID;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRotated()
    {
        return $this->IsRotated;
    }

    /**
     * @param boolean $IsRotated
     * @return DocumentPage
     */
    public function setIsRotated($IsRotated)
    {
        $this->IsRotated = $IsRotated;
        return $this;
    }

}
