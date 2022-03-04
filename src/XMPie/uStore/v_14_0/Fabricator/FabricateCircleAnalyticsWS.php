<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CircleAnalyticsWS\GetAllReportsPerCircleProject;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CircleAnalyticsWS\GetAllReportsPerCircleProjectResponse;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CircleAnalyticsWS\ArrayOfCircleAnalyticsAPIModel;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CircleAnalyticsWS\CircleAnalyticsAPIModel;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CircleAnalyticsWS\RefreshAnalyticsReportsPerProject;
use XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CircleAnalyticsWS\RefreshAnalyticsReportsPerProjectResponse;


class FabricateCircleAnalyticsWS
{
    private $paramAutoSet;

    /**
     * Constructor.
     *
     * @param array $paramAutoSet
     */
    public function __construct($paramAutoSet = [])
    {
        $this->setParamAutoSet($paramAutoSet);
    }


    /**
     * @return array
     */
    public function getParamAutoSet()
    {
        return $this->paramAutoSet;
    }


    /**
     * @param array $paramAutoSet
     */
    public function setParamAutoSet($paramAutoSet)
    {
        $this->paramAutoSet = $paramAutoSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAllReportsPerCircleProject
    */
    public function GetAllReportsPerCircleProject($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAllReportsPerCircleProject = new GetAllReportsPerCircleProject();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAllReportsPerCircleProject, $methodName)) {
                $GetAllReportsPerCircleProject->$methodName($paramValue);
            }
        }
        return $GetAllReportsPerCircleProject;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAllReportsPerCircleProjectResponse
    */
    public function GetAllReportsPerCircleProjectResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAllReportsPerCircleProjectResponse = new GetAllReportsPerCircleProjectResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAllReportsPerCircleProjectResponse, $methodName)) {
                $GetAllReportsPerCircleProjectResponse->$methodName($paramValue);
            }
        }
        return $GetAllReportsPerCircleProjectResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfCircleAnalyticsAPIModel
    */
    public function ArrayOfCircleAnalyticsAPIModel($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfCircleAnalyticsAPIModel = new ArrayOfCircleAnalyticsAPIModel();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfCircleAnalyticsAPIModel, $methodName)) {
                $ArrayOfCircleAnalyticsAPIModel->$methodName($paramValue);
            }
        }
        return $ArrayOfCircleAnalyticsAPIModel;
    }


   /**
    * @param array $paramAutoSet
    * @return CircleAnalyticsAPIModel
    */
    public function CircleAnalyticsAPIModel($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CircleAnalyticsAPIModel = new CircleAnalyticsAPIModel();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CircleAnalyticsAPIModel, $methodName)) {
                $CircleAnalyticsAPIModel->$methodName($paramValue);
            }
        }
        return $CircleAnalyticsAPIModel;
    }


   /**
    * @param array $paramAutoSet
    * @return RefreshAnalyticsReportsPerProject
    */
    public function RefreshAnalyticsReportsPerProject($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RefreshAnalyticsReportsPerProject = new RefreshAnalyticsReportsPerProject();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RefreshAnalyticsReportsPerProject, $methodName)) {
                $RefreshAnalyticsReportsPerProject->$methodName($paramValue);
            }
        }
        return $RefreshAnalyticsReportsPerProject;
    }


   /**
    * @param array $paramAutoSet
    * @return RefreshAnalyticsReportsPerProjectResponse
    */
    public function RefreshAnalyticsReportsPerProjectResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RefreshAnalyticsReportsPerProjectResponse = new RefreshAnalyticsReportsPerProjectResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RefreshAnalyticsReportsPerProjectResponse, $methodName)) {
                $RefreshAnalyticsReportsPerProjectResponse->$methodName($paramValue);
            }
        }
        return $RefreshAnalyticsReportsPerProjectResponse;
    }



}

?>
