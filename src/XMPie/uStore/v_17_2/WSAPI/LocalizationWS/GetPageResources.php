<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\LocalizationWS;

class GetPageResources
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
     * @var string $project
     */
    protected $project = null;

    /**
     * @var string $page
     */
    protected $page = null;

    /**
     * @var int $cultureId
     */
    protected $cultureId = null;

    /**
     * @param string $username
     * @param string $password
     * @param string $project
     * @param string $page
     * @param int $cultureId
     */
    public function __construct($username = null, $password = null, $project = null, $page = null, $cultureId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->project = $project;
      $this->page = $page;
      $this->cultureId = $cultureId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\LocalizationWS\GetPageResources
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\LocalizationWS\GetPageResources
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getProject()
    {
      return $this->project;
    }

    /**
     * @param string $project
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\LocalizationWS\GetPageResources
     */
    public function setProject($project)
    {
      $this->project = $project;
      return $this;
    }

    /**
     * @return string
     */
    public function getPage()
    {
      return $this->page;
    }

    /**
     * @param string $page
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\LocalizationWS\GetPageResources
     */
    public function setPage($page)
    {
      $this->page = $page;
      return $this;
    }

    /**
     * @return int
     */
    public function getCultureId()
    {
      return $this->cultureId;
    }

    /**
     * @param int $cultureId
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\LocalizationWS\GetPageResources
     */
    public function setCultureId($cultureId)
    {
      $this->cultureId = $cultureId;
      return $this;
    }

}
