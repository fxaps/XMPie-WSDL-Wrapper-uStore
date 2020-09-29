<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\CircleAnalyticsWS;

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
     * @return RefreshAnalyticsReportsPerProjectResponse
     */
    public function setRefreshAnalyticsReportsPerProjectResult($RefreshAnalyticsReportsPerProjectResult)
    {
        $this->RefreshAnalyticsReportsPerProjectResult = $RefreshAnalyticsReportsPerProjectResult;
        return $this;
    }

}
