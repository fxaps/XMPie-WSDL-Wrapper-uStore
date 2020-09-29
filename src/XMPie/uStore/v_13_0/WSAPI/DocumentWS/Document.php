<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\DocumentWS;

class Document extends ReturnObject
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $ProductID
     */
    protected $ProductID = null;

    /**
     * @var int $StoreID
     */
    protected $StoreID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var int $DocTypeID
     */
    protected $DocTypeID = null;

    /**
     * @var string $DocumentXml
     */
    protected $DocumentXml = null;

    /**
     * @var int $TemplateType
     */
    protected $TemplateType = null;

    /**
     * @var int $ProofCountMax
     */
    protected $ProofCountMax = null;

    /**
     * @var int $ProofCountDefault
     */
    protected $ProofCountDefault = null;

    /**
     * @var boolean $ProofAllowSelect
     */
    protected $ProofAllowSelect = null;

    /**
     * @var int $CampaignID
     */
    protected $CampaignID = null;

    /**
     * @var int $UproduceDocID
     */
    protected $UproduceDocID = null;

    /**
     * @var int $UproduceProofJobID
     */
    protected $UproduceProofJobID = null;

    /**
     * @var int $UproduceProcessJobID
     */
    protected $UproduceProcessJobID = null;

    /**
     * @var string $RecipientListSchemaXml
     */
    protected $RecipientListSchemaXml = null;

    /**
     * @var string $ProofTicket
     */
    protected $ProofTicket = null;

    /**
     * @var string $ProcessTicket
     */
    protected $ProcessTicket = null;

    /**
     * @var string $DownloadOutput
     */
    protected $DownloadOutput = null;

    /**
     * @var string $StaticDocLocation
     */
    protected $StaticDocLocation = null;

    /**
     * @var string $StaticDocProofLocation
     */
    protected $StaticDocProofLocation = null;

    /**
     * @param int $ID
     * @param int $ProductID
     * @param int $StoreID
     * @param int $DocTypeID
     * @param int $TemplateType
     * @param int $ProofCountMax
     * @param int $ProofCountDefault
     * @param boolean $ProofAllowSelect
     * @param int $CampaignID
     * @param int $UproduceDocID
     * @param int $UproduceProofJobID
     * @param int $UproduceProcessJobID
     */
    public function __construct($ID = null, $ProductID = null, $StoreID = null, $DocTypeID = null, $TemplateType = null, $ProofCountMax = null, $ProofCountDefault = null, $ProofAllowSelect = null, $CampaignID = null, $UproduceDocID = null, $UproduceProofJobID = null, $UproduceProcessJobID = null)
    {
        $this->ID = $ID;
        $this->ProductID = $ProductID;
        $this->StoreID = $StoreID;
        $this->DocTypeID = $DocTypeID;
        $this->TemplateType = $TemplateType;
        $this->ProofCountMax = $ProofCountMax;
        $this->ProofCountDefault = $ProofCountDefault;
        $this->ProofAllowSelect = $ProofAllowSelect;
        $this->CampaignID = $CampaignID;
        $this->UproduceDocID = $UproduceDocID;
        $this->UproduceProofJobID = $UproduceProofJobID;
        $this->UproduceProcessJobID = $UproduceProcessJobID;
    }

    /**
     * @return int
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param int $ID
     * @return Document
     */
    public function setID($ID)
    {
        $this->ID = $ID;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductID()
    {
        return $this->ProductID;
    }

    /**
     * @param int $ProductID
     * @return Document
     */
    public function setProductID($ProductID)
    {
        $this->ProductID = $ProductID;
        return $this;
    }

    /**
     * @return int
     */
    public function getStoreID()
    {
        return $this->StoreID;
    }

    /**
     * @param int $StoreID
     * @return Document
     */
    public function setStoreID($StoreID)
    {
        $this->StoreID = $StoreID;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return Document
     */
    public function setName($Name)
    {
        $this->Name = $Name;
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
     * @return Document
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return int
     */
    public function getDocTypeID()
    {
        return $this->DocTypeID;
    }

    /**
     * @param int $DocTypeID
     * @return Document
     */
    public function setDocTypeID($DocTypeID)
    {
        $this->DocTypeID = $DocTypeID;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentXml()
    {
        return $this->DocumentXml;
    }

    /**
     * @param string $DocumentXml
     * @return Document
     */
    public function setDocumentXml($DocumentXml)
    {
        $this->DocumentXml = $DocumentXml;
        return $this;
    }

    /**
     * @return int
     */
    public function getTemplateType()
    {
        return $this->TemplateType;
    }

    /**
     * @param int $TemplateType
     * @return Document
     */
    public function setTemplateType($TemplateType)
    {
        $this->TemplateType = $TemplateType;
        return $this;
    }

    /**
     * @return int
     */
    public function getProofCountMax()
    {
        return $this->ProofCountMax;
    }

    /**
     * @param int $ProofCountMax
     * @return Document
     */
    public function setProofCountMax($ProofCountMax)
    {
        $this->ProofCountMax = $ProofCountMax;
        return $this;
    }

    /**
     * @return int
     */
    public function getProofCountDefault()
    {
        return $this->ProofCountDefault;
    }

    /**
     * @param int $ProofCountDefault
     * @return Document
     */
    public function setProofCountDefault($ProofCountDefault)
    {
        $this->ProofCountDefault = $ProofCountDefault;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getProofAllowSelect()
    {
        return $this->ProofAllowSelect;
    }

    /**
     * @param boolean $ProofAllowSelect
     * @return Document
     */
    public function setProofAllowSelect($ProofAllowSelect)
    {
        $this->ProofAllowSelect = $ProofAllowSelect;
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
     * @return Document
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;
        return $this;
    }

    /**
     * @return int
     */
    public function getUproduceDocID()
    {
        return $this->UproduceDocID;
    }

    /**
     * @param int $UproduceDocID
     * @return Document
     */
    public function setUproduceDocID($UproduceDocID)
    {
        $this->UproduceDocID = $UproduceDocID;
        return $this;
    }

    /**
     * @return int
     */
    public function getUproduceProofJobID()
    {
        return $this->UproduceProofJobID;
    }

    /**
     * @param int $UproduceProofJobID
     * @return Document
     */
    public function setUproduceProofJobID($UproduceProofJobID)
    {
        $this->UproduceProofJobID = $UproduceProofJobID;
        return $this;
    }

    /**
     * @return int
     */
    public function getUproduceProcessJobID()
    {
        return $this->UproduceProcessJobID;
    }

    /**
     * @param int $UproduceProcessJobID
     * @return Document
     */
    public function setUproduceProcessJobID($UproduceProcessJobID)
    {
        $this->UproduceProcessJobID = $UproduceProcessJobID;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientListSchemaXml()
    {
        return $this->RecipientListSchemaXml;
    }

    /**
     * @param string $RecipientListSchemaXml
     * @return Document
     */
    public function setRecipientListSchemaXml($RecipientListSchemaXml)
    {
        $this->RecipientListSchemaXml = $RecipientListSchemaXml;
        return $this;
    }

    /**
     * @return string
     */
    public function getProofTicket()
    {
        return $this->ProofTicket;
    }

    /**
     * @param string $ProofTicket
     * @return Document
     */
    public function setProofTicket($ProofTicket)
    {
        $this->ProofTicket = $ProofTicket;
        return $this;
    }

    /**
     * @return string
     */
    public function getProcessTicket()
    {
        return $this->ProcessTicket;
    }

    /**
     * @param string $ProcessTicket
     * @return Document
     */
    public function setProcessTicket($ProcessTicket)
    {
        $this->ProcessTicket = $ProcessTicket;
        return $this;
    }

    /**
     * @return string
     */
    public function getDownloadOutput()
    {
        return $this->DownloadOutput;
    }

    /**
     * @param string $DownloadOutput
     * @return Document
     */
    public function setDownloadOutput($DownloadOutput)
    {
        $this->DownloadOutput = $DownloadOutput;
        return $this;
    }

    /**
     * @return string
     */
    public function getStaticDocLocation()
    {
        return $this->StaticDocLocation;
    }

    /**
     * @param string $StaticDocLocation
     * @return Document
     */
    public function setStaticDocLocation($StaticDocLocation)
    {
        $this->StaticDocLocation = $StaticDocLocation;
        return $this;
    }

    /**
     * @return string
     */
    public function getStaticDocProofLocation()
    {
        return $this->StaticDocProofLocation;
    }

    /**
     * @param string $StaticDocProofLocation
     * @return Document
     */
    public function setStaticDocProofLocation($StaticDocProofLocation)
    {
        $this->StaticDocProofLocation = $StaticDocProofLocation;
        return $this;
    }

}
