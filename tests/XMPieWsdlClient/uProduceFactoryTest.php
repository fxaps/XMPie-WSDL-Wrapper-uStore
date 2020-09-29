<?php

namespace XMPieWsdlClient;


use PHPUnit\Framework\TestCase;

class uProduceFactoryTest extends TestCase
{
    private uStoreFactory $Factory;

    /**
     * uProduceFactoryTest constructor.
     * @param string|null $name
     * @param array $data
     * @param string $dataName
     */
    public function __construct(string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $xmpOptions =
            [
                'url' => 'localhost',
                'username' => 'admin',
                'password' => 'admin',
            ];

        $soapOptions = [
        ];

        $config = [
            'security' => false,
        ];

        $this->Factory = new uStoreFactory($xmpOptions, $soapOptions, $config);
    }

    public function testBasics()
    {
        $requestFabricator = $this->Factory->getUProduceRequestFabricator();
        $serviceFabricator = $this->Factory->getUProduceServiceFabricator();

        $request = $requestFabricator->Licensing_SSP()->GetAvailableClicks();
        $result = $serviceFabricator->Licensing_SSP()->GetAvailableClicks($request)->getGetAvailableClicksResult();
        $this->assertIsNumeric($result, "Clicks remaining = {$result}");

        $request = $requestFabricator->SystemManager_SSP()->GetProductInfo();
        $result = $serviceFabricator->SystemManager_SSP()->GetProductInfo($request)->getGetProductInfoResult();
        $this->assertObjectHasAttribute('m_Name', $result);
        $this->assertObjectHasAttribute('m_Type', $result);
        $this->assertObjectHasAttribute('m_BuildNumber', $result);
        $this->assertObjectHasAttribute('m_Version', $result);
        $this->assertObjectHasAttribute('m_LicenseKey', $result);
        $this->assertObjectHasAttribute('m_SystemID', $result);
        $this->assertObjectHasAttribute('m_APIServer', $result);
    }

}
