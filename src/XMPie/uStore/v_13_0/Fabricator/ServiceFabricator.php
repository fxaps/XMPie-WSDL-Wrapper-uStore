<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\Fabricator;


use SoapFault;
use XMPieWsdlClient\XMPie\Utilities\Formatter;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ActualDeliveryWS\ActualDeliveryWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\AddressWS\AddressWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\AssetSourceWS\AssetSourceWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\AssetWS\AssetWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CircleAnalyticsWS\CircleAnalyticsWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CultureWS\CultureWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CurrencyWS\CurrencyWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CustomizationDialWS\CustomizationDialWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\CustomizationStepWS\CustomizationStepWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\DocumentWS\DocumentWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\FileSubmissionWS\FileSubmissionWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\LocalizationWS\LocalizationWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\OrderProductWS\OrderProductWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\OrderWS\OrderWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\PaperSizeWS\PaperSizeWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\PermissionsWS\PermissionsWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductGroupWS\ProductGroupWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductInventoryWS\ProductInventoryWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductionWS\ProductionWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductPropertyWS\ProductPropertyWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProductWS\ProductWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\ProxyWS\ProxyWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\RecipientListWS\RecipientListWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\StoreWS\StoreWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\TaxWS\TaxWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\TentativeDeliveryWS\TentativeDeliveryWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\TriggerWS\TriggerWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\UserGroupWS\UserGroupWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\UserWS\UserWS;
use XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\XMPieInternalWS\XMPieInternalWS;


class ServiceFabricator
{
    private $uStoreUrl;
    private $options;

    /**
     * ServiceFabricator constructor.
     *
     * @param array $options
     * @param string $serverUrl
     */
    public function __construct(array $options = [], $serverUrl = 'http://localhost/')
    {
        $this->setUStoreUrl($serverUrl);
        $this->setOptions($options);
    }

    /**
     * @return string
     */
    public function getUStoreUrl()
    {
        return $this->uStoreUrl;
    }

    /**
     * @param string $uStoreUrl
     */
    public function setUStoreUrl($uStoreUrl)
    {
        $uStoreUrl = Formatter::fixServerUrl($uStoreUrl);
        $this->uStoreUrl = $uStoreUrl;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return ActualDeliveryWS
     * @throws SoapFault
     */
    public function ActualDeliveryWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/ActualDeliveryWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new ActualDeliveryWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return AddressWS
     * @throws SoapFault
     */
    public function AddressWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/AddressWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new AddressWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return AssetSourceWS
     * @throws SoapFault
     */
    public function AssetSourceWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/AssetSourceWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new AssetSourceWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return AssetWS
     * @throws SoapFault
     */
    public function AssetWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/AssetWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new AssetWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return CircleAnalyticsWS
     * @throws SoapFault
     */
    public function CircleAnalyticsWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/CircleAnalyticsWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new CircleAnalyticsWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return CultureWS
     * @throws SoapFault
     */
    public function CultureWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/CultureWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new CultureWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return CurrencyWS
     * @throws SoapFault
     */
    public function CurrencyWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/CurrencyWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new CurrencyWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return CustomizationDialWS
     * @throws SoapFault
     */
    public function CustomizationDialWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/CustomizationDialWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new CustomizationDialWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return CustomizationStepWS
     * @throws SoapFault
     */
    public function CustomizationStepWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/CustomizationStepWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new CustomizationStepWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return DocumentWS
     * @throws SoapFault
     */
    public function DocumentWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/DocumentWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new DocumentWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return FileSubmissionWS
     * @throws SoapFault
     */
    public function FileSubmissionWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/FileSubmissionWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new FileSubmissionWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return LocalizationWS
     * @throws SoapFault
     */
    public function LocalizationWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/LocalizationWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new LocalizationWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return OrderProductWS
     * @throws SoapFault
     */
    public function OrderProductWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/OrderProductWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new OrderProductWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return OrderWS
     * @throws SoapFault
     */
    public function OrderWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/OrderWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new OrderWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return PaperSizeWS
     * @throws SoapFault
     */
    public function PaperSizeWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/PaperSizeWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new PaperSizeWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return PermissionsWS
     * @throws SoapFault
     */
    public function PermissionsWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/PermissionsWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new PermissionsWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return ProductGroupWS
     * @throws SoapFault
     */
    public function ProductGroupWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/ProductGroupWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new ProductGroupWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return ProductInventoryWS
     * @throws SoapFault
     */
    public function ProductInventoryWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/ProductInventoryWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new ProductInventoryWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return ProductionWS
     * @throws SoapFault
     */
    public function ProductionWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/ProductionWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new ProductionWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return ProductPropertyWS
     * @throws SoapFault
     */
    public function ProductPropertyWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/ProductPropertyWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new ProductPropertyWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return ProductWS
     * @throws SoapFault
     */
    public function ProductWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/ProductWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new ProductWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return ProxyWS
     * @throws SoapFault
     */
    public function ProxyWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/ProxyWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new ProxyWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return RecipientListWS
     * @throws SoapFault
     */
    public function RecipientListWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/RecipientListWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new RecipientListWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return StoreWS
     * @throws SoapFault
     */
    public function StoreWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/StoreWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new StoreWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return TaxWS
     * @throws SoapFault
     */
    public function TaxWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/TaxWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new TaxWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return TentativeDeliveryWS
     * @throws SoapFault
     */
    public function TentativeDeliveryWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/TentativeDeliveryWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new TentativeDeliveryWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return TriggerWS
     * @throws SoapFault
     */
    public function TriggerWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/TriggerWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new TriggerWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return UserGroupWS
     * @throws SoapFault
     */
    public function UserGroupWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/UserGroupWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new UserGroupWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return UserWS
     * @throws SoapFault
     */
    public function UserWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/UserWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new UserWS($options, $serverUrl);
    }


    /**
     * @param null|array $options
     * @param null|string $serverUrl
     * @return XMPieInternalWS
     * @throws SoapFault
     */
    public function XMPieInternalWS($options = null, $serverUrl = null)
    {
        $append = "ustorewsapi/XMPieInternalWS.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUStoreUrl() . $append;
        }

        return new XMPieInternalWS($options, $serverUrl);
    }


}

?>
