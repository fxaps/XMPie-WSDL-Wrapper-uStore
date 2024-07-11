<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\RecipientListWS;

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
     * @var \DateTime $DateCreated
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
     * @param \DateTime $DateCreated
     * @param boolean $IsRepository
     * @param int $CampaignID
     * @param int $StatusID
     * @param int $RecipientListModelID
     */
    public function __construct($RecipientListID = null, $Format = null, $ItemCount = null, $MallID = null, $UserID = null, $RecipientType = null, \DateTime $DateCreated = null, $IsRepository = null, $CampaignID = null, $StatusID = null, $RecipientListModelID = null)
    {
      $this->RecipientListID = $RecipientListID;
      $this->Format = $Format;
      $this->ItemCount = $ItemCount;
      $this->MallID = $MallID;
      $this->UserID = $UserID;
      $this->RecipientType = $RecipientType;
      $this->DateCreated = $DateCreated ? $DateCreated->format(\DateTime::ATOM) : null;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\RecipientListWS\RecipientList
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\RecipientListWS\RecipientList
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\RecipientListWS\RecipientList
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\RecipientListWS\RecipientList
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\RecipientListWS\RecipientList
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\RecipientListWS\RecipientList
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\RecipientListWS\RecipientList
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\RecipientListWS\RecipientList
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\RecipientListWS\RecipientList
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\RecipientListWS\RecipientList
     */
    public function setRecipientType($RecipientType)
    {
      $this->RecipientType = $RecipientType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateCreated()
    {
      if ($this->DateCreated == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateCreated);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateCreated
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\RecipientListWS\RecipientList
     */
    public function setDateCreated(\DateTime $DateCreated)
    {
      $this->DateCreated = $DateCreated->format(\DateTime::ATOM);
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\RecipientListWS\RecipientList
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\RecipientListWS\RecipientList
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\RecipientListWS\RecipientList
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\RecipientListWS\RecipientList
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\RecipientListWS\RecipientList
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
