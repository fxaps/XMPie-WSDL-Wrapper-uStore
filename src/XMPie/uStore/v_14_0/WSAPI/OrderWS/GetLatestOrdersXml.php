<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderWS;

class GetLatestOrdersXml
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
     * @var int $submissionID
     */
    protected $submissionID = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $submissionID
     */
    public function __construct($username = null, $password = null, $submissionID = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->submissionID = $submissionID;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderWS\GetLatestOrdersXml
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderWS\GetLatestOrdersXml
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getSubmissionID()
    {
      return $this->submissionID;
    }

    /**
     * @param int $submissionID
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderWS\GetLatestOrdersXml
     */
    public function setSubmissionID($submissionID)
    {
      $this->submissionID = $submissionID;
      return $this;
    }

}
