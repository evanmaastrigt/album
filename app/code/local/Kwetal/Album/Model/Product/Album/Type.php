<?php
class Kwetal_Album_Model_Product_Album_Type extends Mage_Catalog_Model_Product_Type_Abstract
{
    public function prepareForCart(Varien_Object $buyRequest, $product = null)
    {
        
    }
    
    public function isVirtual($product = null)
    {
        return false;
    }
}