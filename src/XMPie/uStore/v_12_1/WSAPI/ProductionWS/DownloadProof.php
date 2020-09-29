<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductionWS;

class DownloadProof
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
     * @var int $proofId
     */
    protected $proofId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $proofId
     */
    public function __construct($username = null, $password = null, $proofId = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->proofId = $proofId;
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
     * @return DownloadProof
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
     * @return DownloadProof
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return int
     */
    public function getProofId()
    {
        return $this->proofId;
    }

    /**
     * @param int $proofId
     * @return DownloadProof
     */
    public function setProofId($proofId)
    {
        $this->proofId = $proofId;
        return $this;
    }

}
