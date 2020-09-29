<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS;

class CircleProjectOrderProductDetails
{

    /**
     * @var guid $CircleProjectID
     */
    protected $CircleProjectID = null;

    /**
     * @var guid $CircleFamilyID
     */
    protected $CircleFamilyID = null;

    /**
     * @var guid $CircleTouchPointID
     */
    protected $CircleTouchPointID = null;

    /**
     * @param guid $CircleProjectID
     * @param guid $CircleFamilyID
     * @param guid $CircleTouchPointID
     */
    public function __construct($CircleProjectID = null, $CircleFamilyID = null, $CircleTouchPointID = null)
    {
        $this->CircleProjectID = $CircleProjectID;
        $this->CircleFamilyID = $CircleFamilyID;
        $this->CircleTouchPointID = $CircleTouchPointID;
    }

    /**
     * @return guid
     */
    public function getCircleProjectID()
    {
        return $this->CircleProjectID;
    }

    /**
     * @param guid $CircleProjectID
     * @return CircleProjectOrderProductDetails
     */
    public function setCircleProjectID($CircleProjectID)
    {
        $this->CircleProjectID = $CircleProjectID;
        return $this;
    }

    /**
     * @return guid
     */
    public function getCircleFamilyID()
    {
        return $this->CircleFamilyID;
    }

    /**
     * @param guid $CircleFamilyID
     * @return CircleProjectOrderProductDetails
     */
    public function setCircleFamilyID($CircleFamilyID)
    {
        $this->CircleFamilyID = $CircleFamilyID;
        return $this;
    }

    /**
     * @return guid
     */
    public function getCircleTouchPointID()
    {
        return $this->CircleTouchPointID;
    }

    /**
     * @param guid $CircleTouchPointID
     * @return CircleProjectOrderProductDetails
     */
    public function setCircleTouchPointID($CircleTouchPointID)
    {
        $this->CircleTouchPointID = $CircleTouchPointID;
        return $this;
    }

}
