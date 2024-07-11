<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateActualDeliveryWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateAddressWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateAssetSourceWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateAssetWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateCircleAnalyticsWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateCultureWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateCurrencyWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateCustomizationDialWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateCustomizationStepWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateDocumentWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateFileSubmissionWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateLocalizationWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateOrderProductWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateOrderWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricatePaperSizeWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricatePermissionsWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateProductGroupWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateProductInventoryWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateProductionWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateProductPropertyWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateProductWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateProxyWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateRecipientListWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateStoreWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateTaxWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateTentativeDeliveryWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateTriggerWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateUserGroupWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateUserWS;
use XMPieWsdlClient\XMPie\uStore\v_17_2\Fabricator\FabricateXMPieInternalWS;


class RequestFabricator
{
    private $paramAutoSet;

    /**
     * Constructor.
     *
     * @param array $paramAutoSet
     */
    public function __construct($paramAutoSet = [])
    {
        $this->setParamAutoSet($paramAutoSet);
    }


    /**
     * @return array
     */
    public function getParamAutoSet()
    {
        return $this->paramAutoSet;
    }


    /**
     * @param array $paramAutoSet
     */
    public function setParamAutoSet($paramAutoSet)
    {
        $this->paramAutoSet = $paramAutoSet;
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateActualDeliveryWS
    */
    public function ActualDeliveryWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateActualDeliveryWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateAddressWS
    */
    public function AddressWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateAddressWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateAssetSourceWS
    */
    public function AssetSourceWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateAssetSourceWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateAssetWS
    */
    public function AssetWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateAssetWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateCircleAnalyticsWS
    */
    public function CircleAnalyticsWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateCircleAnalyticsWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateCultureWS
    */
    public function CultureWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateCultureWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateCurrencyWS
    */
    public function CurrencyWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateCurrencyWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateCustomizationDialWS
    */
    public function CustomizationDialWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateCustomizationDialWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateCustomizationStepWS
    */
    public function CustomizationStepWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateCustomizationStepWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateDocumentWS
    */
    public function DocumentWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateDocumentWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateFileSubmissionWS
    */
    public function FileSubmissionWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateFileSubmissionWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateLocalizationWS
    */
    public function LocalizationWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateLocalizationWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateOrderProductWS
    */
    public function OrderProductWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateOrderProductWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateOrderWS
    */
    public function OrderWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateOrderWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricatePaperSizeWS
    */
    public function PaperSizeWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricatePaperSizeWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricatePermissionsWS
    */
    public function PermissionsWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricatePermissionsWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateProductGroupWS
    */
    public function ProductGroupWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateProductGroupWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateProductInventoryWS
    */
    public function ProductInventoryWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateProductInventoryWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateProductionWS
    */
    public function ProductionWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateProductionWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateProductPropertyWS
    */
    public function ProductPropertyWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateProductPropertyWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateProductWS
    */
    public function ProductWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateProductWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateProxyWS
    */
    public function ProxyWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateProxyWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateRecipientListWS
    */
    public function RecipientListWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateRecipientListWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateStoreWS
    */
    public function StoreWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateStoreWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateTaxWS
    */
    public function TaxWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateTaxWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateTentativeDeliveryWS
    */
    public function TentativeDeliveryWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateTentativeDeliveryWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateTriggerWS
    */
    public function TriggerWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateTriggerWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateUserGroupWS
    */
    public function UserGroupWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateUserGroupWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateUserWS
    */
    public function UserWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateUserWS($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateXMPieInternalWS
    */
    public function XMPieInternalWS($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateXMPieInternalWS($paramAutoSet);
    }



}

?>
