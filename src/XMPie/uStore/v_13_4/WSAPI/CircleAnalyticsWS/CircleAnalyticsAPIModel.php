<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CircleAnalyticsWS;

class CircleAnalyticsAPIModel
{

    /**
     * @var \DateTime $LastRefreshed
     */
    protected $LastRefreshed = null;

    /**
     * @var string $ReportUrl
     */
    protected $ReportUrl = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getLastRefreshed()
    {
      if ($this->LastRefreshed == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastRefreshed);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastRefreshed
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CircleAnalyticsWS\CircleAnalyticsAPIModel
     */
    public function setLastRefreshed(\DateTime $LastRefreshed = null)
    {
      if ($LastRefreshed == null) {
       $this->LastRefreshed = null;
      } else {
        $this->LastRefreshed = $LastRefreshed->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getReportUrl()
    {
      return $this->ReportUrl;
    }

    /**
     * @param string $ReportUrl
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CircleAnalyticsWS\CircleAnalyticsAPIModel
     */
    public function setReportUrl($ReportUrl)
    {
      $this->ReportUrl = $ReportUrl;
      return $this;
    }

}
