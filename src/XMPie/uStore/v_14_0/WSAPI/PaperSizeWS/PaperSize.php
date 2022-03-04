<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\PaperSizeWS;

class PaperSize extends ReturnObject
{

    /**
     * @var int $PaperSizeId
     */
    protected $PaperSizeId = null;

    /**
     * @var string $DisplayName
     */
    protected $DisplayName = null;

    /**
     * @var float $Width
     */
    protected $Width = null;

    /**
     * @var float $Height
     */
    protected $Height = null;

    /**
     * @param int $PaperSizeId
     * @param float $Width
     * @param float $Height
     */
    public function __construct($PaperSizeId = null, $Width = null, $Height = null)
    {
      $this->PaperSizeId = $PaperSizeId;
      $this->Width = $Width;
      $this->Height = $Height;
    }

    /**
     * @return int
     */
    public function getPaperSizeId()
    {
      return $this->PaperSizeId;
    }

    /**
     * @param int $PaperSizeId
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\PaperSizeWS\PaperSize
     */
    public function setPaperSizeId($PaperSizeId)
    {
      $this->PaperSizeId = $PaperSizeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
      return $this->DisplayName;
    }

    /**
     * @param string $DisplayName
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\PaperSizeWS\PaperSize
     */
    public function setDisplayName($DisplayName)
    {
      $this->DisplayName = $DisplayName;
      return $this;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param float $Width
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\PaperSizeWS\PaperSize
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param float $Height
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\PaperSizeWS\PaperSize
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

}
