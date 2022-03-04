<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CircleAnalyticsWS;

class GetAllReportsPerCircleProjectResponse
{

    /**
     * @var ArrayOfCircleAnalyticsAPIModel $GetAllReportsPerCircleProjectResult
     */
    protected $GetAllReportsPerCircleProjectResult = null;

    /**
     * @param ArrayOfCircleAnalyticsAPIModel $GetAllReportsPerCircleProjectResult
     */
    public function __construct($GetAllReportsPerCircleProjectResult = null)
    {
      $this->GetAllReportsPerCircleProjectResult = $GetAllReportsPerCircleProjectResult;
    }

    /**
     * @return ArrayOfCircleAnalyticsAPIModel
     */
    public function getGetAllReportsPerCircleProjectResult()
    {
      return $this->GetAllReportsPerCircleProjectResult;
    }

    /**
     * @param ArrayOfCircleAnalyticsAPIModel $GetAllReportsPerCircleProjectResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CircleAnalyticsWS\GetAllReportsPerCircleProjectResponse
     */
    public function setGetAllReportsPerCircleProjectResult($GetAllReportsPerCircleProjectResult)
    {
      $this->GetAllReportsPerCircleProjectResult = $GetAllReportsPerCircleProjectResult;
      return $this;
    }

}
