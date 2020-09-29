<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductGroupWS;

use DateTime;
use Exception;

class ProductGroup extends ReturnObject
{

    /**
     * @var int $ProductGroupID
     */
    protected $ProductGroupID = null;

    /**
     * @var int $StoreID
     */
    protected $StoreID = null;

    /**
     * @var int $CultureID
     */
    protected $CultureID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var int $CreatedLoginSessionID
     */
    protected $CreatedLoginSessionID = null;

    /**
     * @var DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var int $ModifiedLoginSessionID
     */
    protected $ModifiedLoginSessionID = null;

    /**
     * @var DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var int $DisplayOrder
     */
    protected $DisplayOrder = null;

    /**
     * @var int $StatusID
     */
    protected $StatusID = null;

    /**
     * @var string $CustomHeaderUrl
     */
    protected $CustomHeaderUrl = null;

    /**
     * @var int $ParentGroupID
     */
    protected $ParentGroupID = null;

    /**
     * @var int $ProductGroupTypeID
     */
    protected $ProductGroupTypeID = null;

    /**
     * @param int $ProductGroupID
     * @param int $StoreID
     * @param int $CultureID
     * @param int $CreatedLoginSessionID
     * @param DateTime $CreatedDate
     * @param int $ModifiedLoginSessionID
     * @param DateTime $ModifiedDate
     * @param int $DisplayOrder
     * @param int $StatusID
     * @param int $ParentGroupID
     * @param int $ProductGroupTypeID
     */
    public function __construct($ProductGroupID = null, $StoreID = null, $CultureID = null, $CreatedLoginSessionID = null, DateTime $CreatedDate = null, $ModifiedLoginSessionID = null, DateTime $ModifiedDate = null, $DisplayOrder = null, $StatusID = null, $ParentGroupID = null, $ProductGroupTypeID = null)
    {
        $this->ProductGroupID = $ProductGroupID;
        $this->StoreID = $StoreID;
        $this->CultureID = $CultureID;
        $this->CreatedLoginSessionID = $CreatedLoginSessionID;
        $this->CreatedDate = $CreatedDate ? $CreatedDate->format(DateTime::ATOM) : null;
        $this->ModifiedLoginSessionID = $ModifiedLoginSessionID;
        $this->ModifiedDate = $ModifiedDate ? $ModifiedDate->format(DateTime::ATOM) : null;
        $this->DisplayOrder = $DisplayOrder;
        $this->StatusID = $StatusID;
        $this->ParentGroupID = $ParentGroupID;
        $this->ProductGroupTypeID = $ProductGroupTypeID;
    }

    /**
     * @return int
     */
    public function getProductGroupID()
    {
        return $this->ProductGroupID;
    }

    /**
     * @param int $ProductGroupID
     * @return ProductGroup
     */
    public function setProductGroupID($ProductGroupID)
    {
        $this->ProductGroupID = $ProductGroupID;
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
     * @return ProductGroup
     */
    public function setStoreID($StoreID)
    {
        $this->StoreID = $StoreID;
        return $this;
    }

    /**
     * @return int
     */
    public function getCultureID()
    {
        return $this->CultureID;
    }

    /**
     * @param int $CultureID
     * @return ProductGroup
     */
    public function setCultureID($CultureID)
    {
        $this->CultureID = $CultureID;
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
     * @return ProductGroup
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
     * @return ProductGroup
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreatedLoginSessionID()
    {
        return $this->CreatedLoginSessionID;
    }

    /**
     * @param int $CreatedLoginSessionID
     * @return ProductGroup
     */
    public function setCreatedLoginSessionID($CreatedLoginSessionID)
    {
        $this->CreatedLoginSessionID = $CreatedLoginSessionID;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedDate()
    {
        if ($this->CreatedDate == null) {
            return null;
        } else {
            try {
                return new DateTime($this->CreatedDate);
            } catch (Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param DateTime $CreatedDate
     * @return ProductGroup
     */
    public function setCreatedDate(DateTime $CreatedDate)
    {
        $this->CreatedDate = $CreatedDate->format(DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getModifiedLoginSessionID()
    {
        return $this->ModifiedLoginSessionID;
    }

    /**
     * @param int $ModifiedLoginSessionID
     * @return ProductGroup
     */
    public function setModifiedLoginSessionID($ModifiedLoginSessionID)
    {
        $this->ModifiedLoginSessionID = $ModifiedLoginSessionID;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getModifiedDate()
    {
        if ($this->ModifiedDate == null) {
            return null;
        } else {
            try {
                return new DateTime($this->ModifiedDate);
            } catch (Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param DateTime $ModifiedDate
     * @return ProductGroup
     */
    public function setModifiedDate(DateTime $ModifiedDate)
    {
        $this->ModifiedDate = $ModifiedDate->format(DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->DisplayOrder;
    }

    /**
     * @param int $DisplayOrder
     * @return ProductGroup
     */
    public function setDisplayOrder($DisplayOrder)
    {
        $this->DisplayOrder = $DisplayOrder;
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
     * @return ProductGroup
     */
    public function setStatusID($StatusID)
    {
        $this->StatusID = $StatusID;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomHeaderUrl()
    {
        return $this->CustomHeaderUrl;
    }

    /**
     * @param string $CustomHeaderUrl
     * @return ProductGroup
     */
    public function setCustomHeaderUrl($CustomHeaderUrl)
    {
        $this->CustomHeaderUrl = $CustomHeaderUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getParentGroupID()
    {
        return $this->ParentGroupID;
    }

    /**
     * @param int $ParentGroupID
     * @return ProductGroup
     */
    public function setParentGroupID($ParentGroupID)
    {
        $this->ParentGroupID = $ParentGroupID;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductGroupTypeID()
    {
        return $this->ProductGroupTypeID;
    }

    /**
     * @param int $ProductGroupTypeID
     * @return ProductGroup
     */
    public function setProductGroupTypeID($ProductGroupTypeID)
    {
        $this->ProductGroupTypeID = $ProductGroupTypeID;
        return $this;
    }

}
