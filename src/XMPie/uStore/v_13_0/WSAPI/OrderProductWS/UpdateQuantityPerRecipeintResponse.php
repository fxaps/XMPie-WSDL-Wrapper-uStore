<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\OrderProductWS;

class UpdateQuantityPerRecipeintResponse
{

    /**
     * @var OrderProduct $UpdateQuantityPerRecipeintResult
     */
    protected $UpdateQuantityPerRecipeintResult = null;

    /**
     * @param OrderProduct $UpdateQuantityPerRecipeintResult
     */
    public function __construct($UpdateQuantityPerRecipeintResult = null)
    {
        $this->UpdateQuantityPerRecipeintResult = $UpdateQuantityPerRecipeintResult;
    }

    /**
     * @return OrderProduct
     */
    public function getUpdateQuantityPerRecipeintResult()
    {
        return $this->UpdateQuantityPerRecipeintResult;
    }

    /**
     * @param OrderProduct $UpdateQuantityPerRecipeintResult
     * @return UpdateQuantityPerRecipeintResponse
     */
    public function setUpdateQuantityPerRecipeintResult($UpdateQuantityPerRecipeintResult)
    {
        $this->UpdateQuantityPerRecipeintResult = $UpdateQuantityPerRecipeintResult;
        return $this;
    }

}
