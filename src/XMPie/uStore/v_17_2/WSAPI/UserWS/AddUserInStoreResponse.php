<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserWS;

class AddUserInStoreResponse
{

    /**
     * @var int $AddUserInStoreResult
     */
    protected $AddUserInStoreResult = null;

    /**
     * @param int $AddUserInStoreResult
     */
    public function __construct($AddUserInStoreResult = null)
    {
      $this->AddUserInStoreResult = $AddUserInStoreResult;
    }

    /**
     * @return int
     */
    public function getAddUserInStoreResult()
    {
      return $this->AddUserInStoreResult;
    }

    /**
     * @param int $AddUserInStoreResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserWS\AddUserInStoreResponse
     */
    public function setAddUserInStoreResult($AddUserInStoreResult)
    {
      $this->AddUserInStoreResult = $AddUserInStoreResult;
      return $this;
    }

}
