<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\OrderWS;

class UpdateClearing
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
     * @var int $orderID
     */
    protected $orderID = null;

    /**
     * @var int $paymentMethodID
     */
    protected $paymentMethodID = null;

    /**
     * @var string $clearingResult
     */
    protected $clearingResult = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $orderID
     * @param int $paymentMethodID
     * @param string $clearingResult
     */
    public function __construct($username = null, $password = null, $orderID = null, $paymentMethodID = null, $clearingResult = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->orderID = $orderID;
        $this->paymentMethodID = $paymentMethodID;
        $this->clearingResult = $clearingResult;
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
     * @return UpdateClearing
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
     * @return UpdateClearing
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * @param int $orderID
     * @return UpdateClearing
     */
    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
        return $this;
    }

    /**
     * @return int
     */
    public function getPaymentMethodID()
    {
        return $this->paymentMethodID;
    }

    /**
     * @param int $paymentMethodID
     * @return UpdateClearing
     */
    public function setPaymentMethodID($paymentMethodID)
    {
        $this->paymentMethodID = $paymentMethodID;
        return $this;
    }

    /**
     * @return string
     */
    public function getClearingResult()
    {
        return $this->clearingResult;
    }

    /**
     * @param string $clearingResult
     * @return UpdateClearing
     */
    public function setClearingResult($clearingResult)
    {
        $this->clearingResult = $clearingResult;
        return $this;
    }

}
