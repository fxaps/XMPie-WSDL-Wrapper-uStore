<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\XMPieInternalWS;

class GetOrderProductListByQueueJoined
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
     * @var int $queueId
     */
    protected $queueId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $queueId
     */
    public function __construct($username = null, $password = null, $queueId = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->queueId = $queueId;
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
     * @return GetOrderProductListByQueueJoined
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
     * @return GetOrderProductListByQueueJoined
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return int
     */
    public function getQueueId()
    {
        return $this->queueId;
    }

    /**
     * @param int $queueId
     * @return GetOrderProductListByQueueJoined
     */
    public function setQueueId($queueId)
    {
        $this->queueId = $queueId;
        return $this;
    }

}
