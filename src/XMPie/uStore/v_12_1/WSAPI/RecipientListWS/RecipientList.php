<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\RecipientListWS;

use DateTime;
use Exception;

class RecipientList extends ReturnObject
{

    /**
     * @var int $RecipientListID
     */
    protected $RecipientListID = null;

    /**
     * @var string $FilePath
     */
    protected $FilePath = null;

    /**
     * @var string $FileName
     */
    protected $FileName = null;

    /**
     * @var string $SourceTable
     */
    protected $SourceTable = null;

    /**
     * @var int $Format
     */
    protected $Format = null;

    /**
     * @var int $ItemCount
     */
    protected $ItemCount = null;

    /**
     * @var string $SourceXml
     */
    protected $SourceXml = null;

    /**
     * @var int $MallID
     */
    protected $MallID = null;

    /**
     * @var int $UserID
     */
    protected $UserID = null;

    /**
     * @var int $RecipientType
     */
    protected $RecipientType = null;

    /**
     * @var DateTime $DateCreated
     */
    protected $DateCreated = null;

    /**
     * @var boolean $IsRepository
     */
    protected $IsRepository = null;

    /**
     * @var int $CampaignID
     */
    protected $CampaignID = null;

    /**
     * @var int $StatusID
     */
    protected $StatusID = null;

    /**
     * @var int $RecipientListModelID
     */
    protected $RecipientListModelID = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @param int $RecipientListID
     * @param int $Format
     * @param int $ItemCount
     * @param int $MallID
     * @param int $UserID
     * @param int $RecipientType
     * @param DateTime $DateCreated
     * @param boolean $IsRepository
     * @param int $CampaignID
     * @param int $StatusID
     * @param int $RecipientListModelID
     */
    public function __construct($RecipientListID = null, $Format = null, $ItemCount = null, $MallID = null, $UserID = null, $RecipientType = null, DateTime $DateCreated = null, $IsRepository = null, $CampaignID = null, $StatusID = null, $RecipientListModelID = null)
    {
        $this->RecipientListID = $RecipientListID;
        $this->Format = $Format;
        $this->ItemCount = $ItemCount;
        $this->MallID = $MallID;
        $this->UserID = $UserID;
        $this->RecipientType = $RecipientType;
        $this->DateCreated = $DateCreated ? $DateCreated->format(DateTime::ATOM) : null;
        $this->IsRepository = $IsRepository;
        $this->CampaignID = $CampaignID;
        $this->StatusID = $StatusID;
        $this->RecipientListModelID = $RecipientListModelID;
    }

    /**
     * @return int
     */
    public function getRecipientListID()
    {
        return $this->RecipientListID;
    }

    /**
     * @param int $RecipientListID
     * @return RecipientList
     */
    public function setRecipientListID($RecipientListID)
    {
        $this->RecipientListID = $RecipientListID;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilePath()
    {
        return $this->FilePath;
    }

    /**
     * @param string $FilePath
     * @return RecipientList
     */
    public function setFilePath($FilePath)
    {
        $this->FilePath = $FilePath;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * @param string $FileName
     * @return RecipientList
     */
    public function setFileName($FileName)
    {
        $this->FileName = $FileName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSourceTable()
    {
        return $this->SourceTable;
    }

    /**
     * @param string $SourceTable
     * @return RecipientList
     */
    public function setSourceTable($SourceTable)
    {
        $this->SourceTable = $SourceTable;
        return $this;
    }

    /**
     * @return int
     */
    public function getFormat()
    {
        return $this->Format;
    }

    /**
     * @param int $Format
     * @return RecipientList
     */
    public function setFormat($Format)
    {
        $this->Format = $Format;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemCount()
    {
        return $this->ItemCount;
    }

    /**
     * @param int $ItemCount
     * @return RecipientList
     */
    public function setItemCount($ItemCount)
    {
        $this->ItemCount = $ItemCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getSourceXml()
    {
        return $this->SourceXml;
    }

    /**
     * @param string $SourceXml
     * @return RecipientList
     */
    public function setSourceXml($SourceXml)
    {
        $this->SourceXml = $SourceXml;
        return $this;
    }

    /**
     * @return int
     */
    public function getMallID()
    {
        return $this->MallID;
    }

    /**
     * @param int $MallID
     * @return RecipientList
     */
    public function setMallID($MallID)
    {
        $this->MallID = $MallID;
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
     * @return RecipientList
     */
    public function setUserID($UserID)
    {
        $this->UserID = $UserID;
        return $this;
    }

    /**
     * @return int
     */
    public function getRecipientType()
    {
        return $this->RecipientType;
    }

    /**
     * @param int $RecipientType
     * @return RecipientList
     */
    public function setRecipientType($RecipientType)
    {
        $this->RecipientType = $RecipientType;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateCreated()
    {
        if ($this->DateCreated == null) {
            return null;
        } else {
            try {
                return new DateTime($this->DateCreated);
            } catch (Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param DateTime $DateCreated
     * @return RecipientList
     */
    public function setDateCreated(DateTime $DateCreated)
    {
        $this->DateCreated = $DateCreated->format(DateTime::ATOM);
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRepository()
    {
        return $this->IsRepository;
    }

    /**
     * @param boolean $IsRepository
     * @return RecipientList
     */
    public function setIsRepository($IsRepository)
    {
        $this->IsRepository = $IsRepository;
        return $this;
    }

    /**
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * @param int $CampaignID
     * @return RecipientList
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;
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
     * @return RecipientList
     */
    public function setStatusID($StatusID)
    {
        $this->StatusID = $StatusID;
        return $this;
    }

    /**
     * @return int
     */
    public function getRecipientListModelID()
    {
        return $this->RecipientListModelID;
    }

    /**
     * @param int $RecipientListModelID
     * @return RecipientList
     */
    public function setRecipientListModelID($RecipientListModelID)
    {
        $this->RecipientListModelID = $RecipientListModelID;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return RecipientList
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

}
