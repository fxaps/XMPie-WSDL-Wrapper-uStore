<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS;

class GetFileSubmissionDocument
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
     * @var int $subOrderProductId
     */
    protected $subOrderProductId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $subOrderProductId
     */
    public function __construct($username = null, $password = null, $subOrderProductId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->subOrderProductId = $subOrderProductId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\GetFileSubmissionDocument
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\GetFileSubmissionDocument
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getSubOrderProductId()
    {
      return $this->subOrderProductId;
    }

    /**
     * @param int $subOrderProductId
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\OrderProductWS\GetFileSubmissionDocument
     */
    public function setSubOrderProductId($subOrderProductId)
    {
      $this->subOrderProductId = $subOrderProductId;
      return $this;
    }

}
