<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CircleAnalyticsWS;

class RefreshAnalyticsReportsPerProjectResponse
{

    /**
     * @var ArrayOfCircleAnalyticsAPIModel $RefreshAnalyticsReportsPerProjectResult
     */
    protected $RefreshAnalyticsReportsPerProjectResult = null;

    /**
     * @param ArrayOfCircleAnalyticsAPIModel $RefreshAnalyticsReportsPerProjectResult
     */
    public function __construct($RefreshAnalyticsReportsPerProjectResult = null)
    {
      $this->RefreshAnalyticsReportsPerProjectResult = $RefreshAnalyticsReportsPerProjectResult;
    }

    /**
     * @return ArrayOfCircleAnalyticsAPIModel
     */
    public function getRefreshAnalyticsReportsPerProjectResult()
    {
      return $this->RefreshAnalyticsReportsPerProjectResult;
    }

    /**
     * @param ArrayOfCircleAnalyticsAPIModel $RefreshAnalyticsReportsPerProjectResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CircleAnalyticsWS\RefreshAnalyticsReportsPerProjectResponse
     */
    public function setRefreshAnalyticsReportsPerProjectResult($RefreshAnalyticsReportsPerProjectResult)
    {
      $this->RefreshAnalyticsReportsPerProjectResult = $RefreshAnalyticsReportsPerProjectResult;
      return $this;
    }

}
