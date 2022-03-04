<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\GetRecipientList;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\GetRecipientListResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\RecipientList;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\AddRecipientList;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\AddRecipientListResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\UpdateRecipientList;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\UpdateRecipientListResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\BeginDownloadRecipientListFromCircle;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\BeginDownloadRecipientListFromCircleResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\DownloadRecipientListFromCircle;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\DownloadRecipientListFromCircleResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\DownloadRecipientListByToken;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\DownloadRecipientListByTokenResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\BeginDownloadUnsubscribeListFromCircle;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\BeginDownloadUnsubscribeListFromCircleResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\DownloadUnsubscribeListFromCircle;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\DownloadUnsubscribeListFromCircleResponse;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\DownloadUnsubscribeListByToken;
use XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\RecipientListWS\DownloadUnsubscribeListByTokenResponse;


class FabricateRecipientListWS
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
    * @return GetRecipientList
    */
    public function GetRecipientList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetRecipientList = new GetRecipientList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetRecipientList, $methodName)) {
                $GetRecipientList->$methodName($paramValue);
            }
        }
        return $GetRecipientList;
    }


   /**
    * @param array $paramAutoSet
    * @return GetRecipientListResponse
    */
    public function GetRecipientListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetRecipientListResponse = new GetRecipientListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetRecipientListResponse, $methodName)) {
                $GetRecipientListResponse->$methodName($paramValue);
            }
        }
        return $GetRecipientListResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return RecipientList
    */
    public function RecipientList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RecipientList = new RecipientList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RecipientList, $methodName)) {
                $RecipientList->$methodName($paramValue);
            }
        }
        return $RecipientList;
    }


   /**
    * @param array $paramAutoSet
    * @return AddRecipientList
    */
    public function AddRecipientList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddRecipientList = new AddRecipientList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddRecipientList, $methodName)) {
                $AddRecipientList->$methodName($paramValue);
            }
        }
        return $AddRecipientList;
    }


   /**
    * @param array $paramAutoSet
    * @return AddRecipientListResponse
    */
    public function AddRecipientListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddRecipientListResponse = new AddRecipientListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddRecipientListResponse, $methodName)) {
                $AddRecipientListResponse->$methodName($paramValue);
            }
        }
        return $AddRecipientListResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return UpdateRecipientList
    */
    public function UpdateRecipientList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateRecipientList = new UpdateRecipientList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateRecipientList, $methodName)) {
                $UpdateRecipientList->$methodName($paramValue);
            }
        }
        return $UpdateRecipientList;
    }


   /**
    * @param array $paramAutoSet
    * @return UpdateRecipientListResponse
    */
    public function UpdateRecipientListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateRecipientListResponse = new UpdateRecipientListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateRecipientListResponse, $methodName)) {
                $UpdateRecipientListResponse->$methodName($paramValue);
            }
        }
        return $UpdateRecipientListResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return BeginDownloadRecipientListFromCircle
    */
    public function BeginDownloadRecipientListFromCircle($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $BeginDownloadRecipientListFromCircle = new BeginDownloadRecipientListFromCircle();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($BeginDownloadRecipientListFromCircle, $methodName)) {
                $BeginDownloadRecipientListFromCircle->$methodName($paramValue);
            }
        }
        return $BeginDownloadRecipientListFromCircle;
    }


   /**
    * @param array $paramAutoSet
    * @return BeginDownloadRecipientListFromCircleResponse
    */
    public function BeginDownloadRecipientListFromCircleResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $BeginDownloadRecipientListFromCircleResponse = new BeginDownloadRecipientListFromCircleResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($BeginDownloadRecipientListFromCircleResponse, $methodName)) {
                $BeginDownloadRecipientListFromCircleResponse->$methodName($paramValue);
            }
        }
        return $BeginDownloadRecipientListFromCircleResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DownloadRecipientListFromCircle
    */
    public function DownloadRecipientListFromCircle($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DownloadRecipientListFromCircle = new DownloadRecipientListFromCircle();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DownloadRecipientListFromCircle, $methodName)) {
                $DownloadRecipientListFromCircle->$methodName($paramValue);
            }
        }
        return $DownloadRecipientListFromCircle;
    }


   /**
    * @param array $paramAutoSet
    * @return DownloadRecipientListFromCircleResponse
    */
    public function DownloadRecipientListFromCircleResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DownloadRecipientListFromCircleResponse = new DownloadRecipientListFromCircleResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DownloadRecipientListFromCircleResponse, $methodName)) {
                $DownloadRecipientListFromCircleResponse->$methodName($paramValue);
            }
        }
        return $DownloadRecipientListFromCircleResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DownloadRecipientListByToken
    */
    public function DownloadRecipientListByToken($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DownloadRecipientListByToken = new DownloadRecipientListByToken();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DownloadRecipientListByToken, $methodName)) {
                $DownloadRecipientListByToken->$methodName($paramValue);
            }
        }
        return $DownloadRecipientListByToken;
    }


   /**
    * @param array $paramAutoSet
    * @return DownloadRecipientListByTokenResponse
    */
    public function DownloadRecipientListByTokenResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DownloadRecipientListByTokenResponse = new DownloadRecipientListByTokenResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DownloadRecipientListByTokenResponse, $methodName)) {
                $DownloadRecipientListByTokenResponse->$methodName($paramValue);
            }
        }
        return $DownloadRecipientListByTokenResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return BeginDownloadUnsubscribeListFromCircle
    */
    public function BeginDownloadUnsubscribeListFromCircle($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $BeginDownloadUnsubscribeListFromCircle = new BeginDownloadUnsubscribeListFromCircle();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($BeginDownloadUnsubscribeListFromCircle, $methodName)) {
                $BeginDownloadUnsubscribeListFromCircle->$methodName($paramValue);
            }
        }
        return $BeginDownloadUnsubscribeListFromCircle;
    }


   /**
    * @param array $paramAutoSet
    * @return BeginDownloadUnsubscribeListFromCircleResponse
    */
    public function BeginDownloadUnsubscribeListFromCircleResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $BeginDownloadUnsubscribeListFromCircleResponse = new BeginDownloadUnsubscribeListFromCircleResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($BeginDownloadUnsubscribeListFromCircleResponse, $methodName)) {
                $BeginDownloadUnsubscribeListFromCircleResponse->$methodName($paramValue);
            }
        }
        return $BeginDownloadUnsubscribeListFromCircleResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DownloadUnsubscribeListFromCircle
    */
    public function DownloadUnsubscribeListFromCircle($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DownloadUnsubscribeListFromCircle = new DownloadUnsubscribeListFromCircle();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DownloadUnsubscribeListFromCircle, $methodName)) {
                $DownloadUnsubscribeListFromCircle->$methodName($paramValue);
            }
        }
        return $DownloadUnsubscribeListFromCircle;
    }


   /**
    * @param array $paramAutoSet
    * @return DownloadUnsubscribeListFromCircleResponse
    */
    public function DownloadUnsubscribeListFromCircleResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DownloadUnsubscribeListFromCircleResponse = new DownloadUnsubscribeListFromCircleResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DownloadUnsubscribeListFromCircleResponse, $methodName)) {
                $DownloadUnsubscribeListFromCircleResponse->$methodName($paramValue);
            }
        }
        return $DownloadUnsubscribeListFromCircleResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DownloadUnsubscribeListByToken
    */
    public function DownloadUnsubscribeListByToken($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DownloadUnsubscribeListByToken = new DownloadUnsubscribeListByToken();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DownloadUnsubscribeListByToken, $methodName)) {
                $DownloadUnsubscribeListByToken->$methodName($paramValue);
            }
        }
        return $DownloadUnsubscribeListByToken;
    }


   /**
    * @param array $paramAutoSet
    * @return DownloadUnsubscribeListByTokenResponse
    */
    public function DownloadUnsubscribeListByTokenResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DownloadUnsubscribeListByTokenResponse = new DownloadUnsubscribeListByTokenResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DownloadUnsubscribeListByTokenResponse, $methodName)) {
                $DownloadUnsubscribeListByTokenResponse->$methodName($paramValue);
            }
        }
        return $DownloadUnsubscribeListByTokenResponse;
    }



}

?>
