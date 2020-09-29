<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\UserWS;

class AddUserResponse
{

    /**
     * @var int $AddUserResult
     */
    protected $AddUserResult = null;

    /**
     * @param int $AddUserResult
     */
    public function __construct($AddUserResult = null)
    {
        $this->AddUserResult = $AddUserResult;
    }

    /**
     * @return int
     */
    public function getAddUserResult()
    {
        return $this->AddUserResult;
    }

    /**
     * @param int $AddUserResult
     * @return AddUserResponse
     */
    public function setAddUserResult($AddUserResult)
    {
        $this->AddUserResult = $AddUserResult;
        return $this;
    }

}
