<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProxyWS;

class UpdateProxy
{

    /**
     * @var string $data
     */
    protected $data = null;

    /**
     * @param string $data
     */
    public function __construct($data = null)
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param string $data
     * @return UpdateProxy
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

}
