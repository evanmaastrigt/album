<?php
class Kwetal_Album_Model_Product_Album_Price extends Mage_Catalog_Model_Product_Type_Price
{
    public function getPrice($product)
    {
        return parent::getPrice($product);
    }
}