<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\DocumentWS;

class GetDocument
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
     * @var int $documentId
     */
    protected $documentId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $documentId
     */
    public function __construct($username = null, $password = null, $documentId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->documentId = $documentId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\DocumentWS\GetDocument
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\DocumentWS\GetDocument
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getDocumentId()
    {
      return $this->documentId;
    }

    /**
     * @param int $documentId
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\DocumentWS\GetDocument
     */
    public function setDocumentId($documentId)
    {
      $this->documentId = $documentId;
      return $this;
    }

}
