<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\TriggerWS;

class Parameter
{

    /**
     * @var string $Key
     */
    protected $Key = null;

    /**
     * @var string $Value
     */
    protected $Value = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->Key;
    }

    /**
     * @param string $Key
     * @return Parameter
     */
    public function setKey($Key)
    {
        $this->Key = $Key;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     * @return Parameter
     */
    public function setValue($Value)
    {
        $this->Value = $Value;
        return $this;
    }

}
