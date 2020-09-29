<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderProductWS;

class StringArray
{

    /**
     * @var string[] $StringArray
     */
    protected $StringArray = null;

    /**
     * @param string[] $StringArray
     */
    public function __construct(array $StringArray = null)
    {
        $this->StringArray = $StringArray;
    }

    /**
     * @return string[]
     */
    public function getStringArray()
    {
        return $this->StringArray;
    }

    /**
     * @param string[] $StringArray
     * @return StringArray
     */
    public function setStringArray(array $StringArray)
    {
        $this->StringArray = $StringArray;
        return $this;
    }

}
