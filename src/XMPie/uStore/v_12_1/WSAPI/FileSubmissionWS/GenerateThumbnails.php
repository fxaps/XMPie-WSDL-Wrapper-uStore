<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\FileSubmissionWS;

class GenerateThumbnails
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
     * @var string $pdfFilePath
     */
    protected $pdfFilePath = null;

    /**
     * @var string $thumbnailsFolderPath
     */
    protected $thumbnailsFolderPath = null;

    /**
     * @param string $username
     * @param string $password
     * @param string $pdfFilePath
     * @param string $thumbnailsFolderPath
     */
    public function __construct($username = null, $password = null, $pdfFilePath = null, $thumbnailsFolderPath = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->pdfFilePath = $pdfFilePath;
        $this->thumbnailsFolderPath = $thumbnailsFolderPath;
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
     * @return GenerateThumbnails
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
     * @return GenerateThumbnails
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getPdfFilePath()
    {
        return $this->pdfFilePath;
    }

    /**
     * @param string $pdfFilePath
     * @return GenerateThumbnails
     */
    public function setPdfFilePath($pdfFilePath)
    {
        $this->pdfFilePath = $pdfFilePath;
        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnailsFolderPath()
    {
        return $this->thumbnailsFolderPath;
    }

    /**
     * @param string $thumbnailsFolderPath
     * @return GenerateThumbnails
     */
    public function setThumbnailsFolderPath($thumbnailsFolderPath)
    {
        $this->thumbnailsFolderPath = $thumbnailsFolderPath;
        return $this;
    }

}
