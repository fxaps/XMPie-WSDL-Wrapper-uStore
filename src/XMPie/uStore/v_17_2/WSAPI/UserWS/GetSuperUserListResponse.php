<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserWS;

class GetSuperUserListResponse
{

    /**
     * @var ArrayOfUser $GetSuperUserListResult
     */
    protected $GetSuperUserListResult = null;

    /**
     * @param ArrayOfUser $GetSuperUserListResult
     */
    public function __construct($GetSuperUserListResult = null)
    {
      $this->GetSuperUserListResult = $GetSuperUserListResult;
    }

    /**
     * @return ArrayOfUser
     */
    public function getGetSuperUserListResult()
    {
      return $this->GetSuperUserListResult;
    }

    /**
     * @param ArrayOfUser $GetSuperUserListResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserWS\GetSuperUserListResponse
     */
    public function setGetSuperUserListResult($GetSuperUserListResult)
    {
      $this->GetSuperUserListResult = $GetSuperUserListResult;
      return $this;
    }

}
