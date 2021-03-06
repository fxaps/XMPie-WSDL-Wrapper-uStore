<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\FileSubmissionWS;

class ConvertToPDF
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
     * @var string $srcFilePath
     */
    protected $srcFilePath = null;

    /**
     * @var string $dstFilePath
     */
    protected $dstFilePath = null;

    /**
     * @param string $username
     * @param string $password
     * @param string $srcFilePath
     * @param string $dstFilePath
     */
    public function __construct($username = null, $password = null, $srcFilePath = null, $dstFilePath = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->srcFilePath = $srcFilePath;
        $this->dstFilePath = $dstFilePath;
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
     * @return ConvertToPDF
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
     * @return ConvertToPDF
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getSrcFilePath()
    {
        return $this->srcFilePath;
    }

    /**
     * @param string $srcFilePath
     * @return ConvertToPDF
     */
    public function setSrcFilePath($srcFilePath)
    {
        $this->srcFilePath = $srcFilePath;
        return $this;
    }

    /**
     * @return string
     */
    public function getDstFilePath()
    {
        return $this->dstFilePath;
    }

    /**
     * @param string $dstFilePath
     * @return ConvertToPDF
     */
    public function setDstFilePath($dstFilePath)
    {
        $this->dstFilePath = $dstFilePath;
        return $this;
    }

}
