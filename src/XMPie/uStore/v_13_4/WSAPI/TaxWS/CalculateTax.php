<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\TaxWS;

class CalculateTax
{

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var float $subtotalPrice
     */
    protected $subtotalPrice = null;

    /**
     * @var float $recipientListPrice
     */
    protected $recipientListPrice = null;

    /**
     * @var float $mailingPrice
     */
    protected $mailingPrice = null;

    /**
     * @var int $productId
     */
    protected $productId = null;

    /**
     * @param string $username
     * @param string $password
     * @param float $subtotalPrice
     * @param float $recipientListPrice
     * @param float $mailingPrice
     * @param int $productId
     */
    public function __construct($username = null, $password = null, $subtotalPrice = null, $recipientListPrice = null, $mailingPrice = null, $productId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->subtotalPrice = $subtotalPrice;
      $this->recipientListPrice = $recipientListPrice;
      $this->mailingPrice = $mailingPrice;
      $this->productId = $productId;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->username;
    }

    /**
     * @param string $username
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\TaxWS\CalculateTax
     */
    public function setUsername($username)
    {
      $this->username = $username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\TaxWS\CalculateTax
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return float
     */
    public function getSubtotalPrice()
    {
      return $this->subtotalPrice;
    }

    /**
     * @param float $subtotalPrice
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\TaxWS\CalculateTax
     */
    public function setSubtotalPrice($subtotalPrice)
    {
      $this->subtotalPrice = $subtotalPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getRecipientListPrice()
    {
      return $this->recipientListPrice;
    }

    /**
     * @param float $recipientListPrice
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\TaxWS\CalculateTax
     */
    public function setRecipientListPrice($recipientListPrice)
    {
      $this->recipientListPrice = $recipientListPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getMailingPrice()
    {
      return $this->mailingPrice;
    }

    /**
     * @param float $mailingPrice
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\TaxWS\CalculateTax
     */
    public function setMailingPrice($mailingPrice)
    {
      $this->mailingPrice = $mailingPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
      return $this->productId;
    }

    /**
     * @param int $productId
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\TaxWS\CalculateTax
     */
    public function setProductId($productId)
    {
      $this->productId = $productId;
      return $this;
    }

}
