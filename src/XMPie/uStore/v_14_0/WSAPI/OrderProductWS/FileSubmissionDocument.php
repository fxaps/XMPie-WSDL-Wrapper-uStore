<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderProductWS;

class FileSubmissionDocument
{

    /**
     * @var int $SubOrderProductID
     */
    protected $SubOrderProductID = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $FilePath
     */
    protected $FilePath = null;

    /**
     * @var ArrayOfDocumentPage $DocumentPages
     */
    protected $DocumentPages = null;

    /**
     * @param int $SubOrderProductID
     */
    public function __construct($SubOrderProductID = null)
    {
      $this->SubOrderProductID = $SubOrderProductID;
    }

    /**
     * @return int
     */
    public function getSubOrderProductID()
    {
      return $this->SubOrderProductID;
    }

    /**
     * @param int $SubOrderProductID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderProductWS\FileSubmissionDocument
     */
    public function setSubOrderProductID($SubOrderProductID)
    {
      $this->SubOrderProductID = $SubOrderProductID;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderProductWS\FileSubmissionDocument
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderProductWS\FileSubmissionDocument
     */
    public function setFilePath($FilePath)
    {
      $this->FilePath = $FilePath;
      return $this;
    }

    /**
     * @return ArrayOfDocumentPage
     */
    public function getDocumentPages()
    {
      return $this->DocumentPages;
    }

    /**
     * @param ArrayOfDocumentPage $DocumentPages
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderProductWS\FileSubmissionDocument
     */
    public function setDocumentPages($DocumentPages)
    {
      $this->DocumentPages = $DocumentPages;
      return $this;
    }

}
