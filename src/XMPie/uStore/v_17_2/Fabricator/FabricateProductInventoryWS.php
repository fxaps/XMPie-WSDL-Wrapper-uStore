<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\ReadInventoryLevel;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\ReadInventoryLevelResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\ReadInventoryLevelByExternalID;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\ReadInventoryLevelByExternalIDResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\Update;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\UpdateResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\UpdateByExternalID;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\UpdateByExternalIDResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\Increase;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\IncreaseResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\IncreaseByExternalID;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\IncreaseByExternalIDResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\Decrease;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\DecreaseResponse;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\DecreaseByExternalID;
use XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductInventoryWS\DecreaseByExternalIDResponse;


class FabricateProductInventoryWS
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
    * @return ReadInventoryLevel
    */
    public function ReadInventoryLevel($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReadInventoryLevel = new ReadInventoryLevel();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReadInventoryLevel, $methodName)) {
                $ReadInventoryLevel->$methodName($paramValue);
            }
        }
        return $ReadInventoryLevel;
    }


   /**
    * @param array $paramAutoSet
    * @return ReadInventoryLevelResponse
    */
    public function ReadInventoryLevelResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReadInventoryLevelResponse = new ReadInventoryLevelResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReadInventoryLevelResponse, $methodName)) {
                $ReadInventoryLevelResponse->$methodName($paramValue);
            }
        }
        return $ReadInventoryLevelResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ReadInventoryLevelByExternalID
    */
    public function ReadInventoryLevelByExternalID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReadInventoryLevelByExternalID = new ReadInventoryLevelByExternalID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReadInventoryLevelByExternalID, $methodName)) {
                $ReadInventoryLevelByExternalID->$methodName($paramValue);
            }
        }
        return $ReadInventoryLevelByExternalID;
    }


   /**
    * @param array $paramAutoSet
    * @return ReadInventoryLevelByExternalIDResponse
    */
    public function ReadInventoryLevelByExternalIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReadInventoryLevelByExternalIDResponse = new ReadInventoryLevelByExternalIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReadInventoryLevelByExternalIDResponse, $methodName)) {
                $ReadInventoryLevelByExternalIDResponse->$methodName($paramValue);
            }
        }
        return $ReadInventoryLevelByExternalIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Update
    */
    public function Update($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Update = new Update();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Update, $methodName)) {
                $Update->$methodName($paramValue);
            }
        }
        return $Update;
    }


   /**
    * @param array $paramAutoSet
    * @return UpdateResponse
    */
    public function UpdateResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateResponse = new UpdateResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateResponse, $methodName)) {
                $UpdateResponse->$methodName($paramValue);
            }
        }
        return $UpdateResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return UpdateByExternalID
    */
    public function UpdateByExternalID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateByExternalID = new UpdateByExternalID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateByExternalID, $methodName)) {
                $UpdateByExternalID->$methodName($paramValue);
            }
        }
        return $UpdateByExternalID;
    }


   /**
    * @param array $paramAutoSet
    * @return UpdateByExternalIDResponse
    */
    public function UpdateByExternalIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateByExternalIDResponse = new UpdateByExternalIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateByExternalIDResponse, $methodName)) {
                $UpdateByExternalIDResponse->$methodName($paramValue);
            }
        }
        return $UpdateByExternalIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Increase
    */
    public function Increase($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Increase = new Increase();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Increase, $methodName)) {
                $Increase->$methodName($paramValue);
            }
        }
        return $Increase;
    }


   /**
    * @param array $paramAutoSet
    * @return IncreaseResponse
    */
    public function IncreaseResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IncreaseResponse = new IncreaseResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IncreaseResponse, $methodName)) {
                $IncreaseResponse->$methodName($paramValue);
            }
        }
        return $IncreaseResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IncreaseByExternalID
    */
    public function IncreaseByExternalID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IncreaseByExternalID = new IncreaseByExternalID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IncreaseByExternalID, $methodName)) {
                $IncreaseByExternalID->$methodName($paramValue);
            }
        }
        return $IncreaseByExternalID;
    }


   /**
    * @param array $paramAutoSet
    * @return IncreaseByExternalIDResponse
    */
    public function IncreaseByExternalIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IncreaseByExternalIDResponse = new IncreaseByExternalIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IncreaseByExternalIDResponse, $methodName)) {
                $IncreaseByExternalIDResponse->$methodName($paramValue);
            }
        }
        return $IncreaseByExternalIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Decrease
    */
    public function Decrease($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Decrease = new Decrease();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Decrease, $methodName)) {
                $Decrease->$methodName($paramValue);
            }
        }
        return $Decrease;
    }


   /**
    * @param array $paramAutoSet
    * @return DecreaseResponse
    */
    public function DecreaseResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DecreaseResponse = new DecreaseResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DecreaseResponse, $methodName)) {
                $DecreaseResponse->$methodName($paramValue);
            }
        }
        return $DecreaseResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DecreaseByExternalID
    */
    public function DecreaseByExternalID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DecreaseByExternalID = new DecreaseByExternalID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DecreaseByExternalID, $methodName)) {
                $DecreaseByExternalID->$methodName($paramValue);
            }
        }
        return $DecreaseByExternalID;
    }


   /**
    * @param array $paramAutoSet
    * @return DecreaseByExternalIDResponse
    */
    public function DecreaseByExternalIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DecreaseByExternalIDResponse = new DecreaseByExternalIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DecreaseByExternalIDResponse, $methodName)) {
                $DecreaseByExternalIDResponse->$methodName($paramValue);
            }
        }
        return $DecreaseByExternalIDResponse;
    }



}

?>
