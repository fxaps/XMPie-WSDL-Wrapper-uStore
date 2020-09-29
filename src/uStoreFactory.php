<?php


namespace XMPieWsdlClient;


use XMPieWsdlClient\XMPie\uStore\v_12_1\Fabricator\RequestFabricator;
use XMPieWsdlClient\XMPie\uStore\v_12_1\Fabricator\ServiceFabricator;

/**
 * Class uStoreFactory
 * @package XMPieWsdlClient
 *
 *
 * @property RequestFabricator $uStoreRequestFabricator
 * @property ServiceFabricator $uStoreServiceFabricator
 * @property array $xmpOptions;
 * @property array $soapOptions;
 * @property bool $config;
 */
class uStoreFactory
{
    private $xmpOptions;
    private $soapOptions;
    private $config;

    public $uStoreRequestFabricator;
    public $uStoreServiceFabricator;

    /**
     * uStoreFactory constructor.
     *
     * @param array $xmpOptions
     * @param array $soapOptions
     * @param array $config
     */
    public function __construct($xmpOptions = [], $soapOptions = [], $config = [])
    {
        $defaultConfig = [
            'security' => true,
        ];

        $config = array_merge($defaultConfig, $config);

        $this->xmpOptions = $xmpOptions;
        $this->soapOptions = $soapOptions;
        $this->config = $config;

        $this->loadFabricators();
    }

    /**
     * @return RequestFabricator
     */
    public function getUStoreRequestFabricator(): RequestFabricator
    {
        return $this->uStoreRequestFabricator;
    }

    /**
     * @return ServiceFabricator
     */
    public function getUStoreServiceFabricator(): ServiceFabricator
    {
        return $this->uStoreServiceFabricator;
    }

    private function loadFabricators()
    {
        //merge the default options
        $defaultXmpOptions =
            [
                'url' => '',
                'username' => '',
                'password' => '',
            ];
        $xmpOptions = array_merge($defaultXmpOptions, $this->xmpOptions);

        //merge the default SOAP options
        if ($this->config['security'] === false) {
            $context = stream_context_create([
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                ]
            ]);
            $defaultSoapOptions = [
                'stream_context' => $context,
            ];
        } else {
            $defaultSoapOptions = [];
        }
        $soapOptions = array_merge($defaultSoapOptions, $this->soapOptions);

        //auto-set credentials
        $autoSetCredentials_uStore = [
            'inUsername' => $xmpOptions['username'],
            'inPassword' => $xmpOptions['password'],
        ];
        $this->uStoreRequestFabricator = new RequestFabricator($autoSetCredentials_uStore);
        $this->uStoreServiceFabricator = new ServiceFabricator($soapOptions, $xmpOptions['url']);
    }


}


