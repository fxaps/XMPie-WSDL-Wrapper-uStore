<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\PaperSizeWS;

class GetPaperSize
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
     * @var int $paperSizeId
     */
    protected $paperSizeId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $paperSizeId
     */
    public function __construct($username = null, $password = null, $paperSizeId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->paperSizeId = $paperSizeId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\PaperSizeWS\GetPaperSize
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\PaperSizeWS\GetPaperSize
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getPaperSizeId()
    {
      return $this->paperSizeId;
    }

    /**
     * @param int $paperSizeId
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\PaperSizeWS\GetPaperSize
     */
    public function setPaperSizeId($paperSizeId)
    {
      $this->paperSizeId = $paperSizeId;
      return $this;
    }

}
