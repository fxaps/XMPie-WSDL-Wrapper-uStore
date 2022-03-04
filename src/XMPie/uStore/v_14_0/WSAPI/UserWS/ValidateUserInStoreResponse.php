<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserWS;

class ValidateUserInStoreResponse
{

    /**
     * @var boolean $ValidateUserInStoreResult
     */
    protected $ValidateUserInStoreResult = null;

    /**
     * @param boolean $ValidateUserInStoreResult
     */
    public function __construct($ValidateUserInStoreResult = null)
    {
      $this->ValidateUserInStoreResult = $ValidateUserInStoreResult;
    }

    /**
     * @return boolean
     */
    public function getValidateUserInStoreResult()
    {
      return $this->ValidateUserInStoreResult;
    }

    /**
     * @param boolean $ValidateUserInStoreResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserWS\ValidateUserInStoreResponse
     */
    public function setValidateUserInStoreResult($ValidateUserInStoreResult)
    {
      $this->ValidateUserInStoreResult = $ValidateUserInStoreResult;
      return $this;
    }

}
