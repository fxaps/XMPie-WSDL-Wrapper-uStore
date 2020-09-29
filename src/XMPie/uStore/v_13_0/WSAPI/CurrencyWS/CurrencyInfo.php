<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CurrencyWS;

class CurrencyInfo extends ReturnObject
{

    /**
     * @var int $CurrencyId
     */
    protected $CurrencyId = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Symbol
     */
    protected $Symbol = null;

    /**
     * @var string $Abbreviation
     */
    protected $Abbreviation = null;

    /**
     * @param int $CurrencyId
     */
    public function __construct($CurrencyId = null)
    {
        $this->CurrencyId = $CurrencyId;
    }

    /**
     * @return int
     */
    public function getCurrencyId()
    {
        return $this->CurrencyId;
    }

    /**
     * @param int $CurrencyId
     * @return CurrencyInfo
     */
    public function setCurrencyId($CurrencyId)
    {
        $this->CurrencyId = $CurrencyId;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return CurrencyInfo
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getSymbol()
    {
        return $this->Symbol;
    }

    /**
     * @param string $Symbol
     * @return CurrencyInfo
     */
    public function setSymbol($Symbol)
    {
        $this->Symbol = $Symbol;
        return $this;
    }

    /**
     * @return string
     */
    public function getAbbreviation()
    {
        return $this->Abbreviation;
    }

    /**
     * @param string $Abbreviation
     * @return CurrencyInfo
     */
    public function setAbbreviation($Abbreviation)
    {
        $this->Abbreviation = $Abbreviation;
        return $this;
    }

}
