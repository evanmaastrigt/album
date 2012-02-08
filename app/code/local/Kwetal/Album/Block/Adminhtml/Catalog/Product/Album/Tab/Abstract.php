<?php
class Kwetal_Album_Block_Adminhtml_Catalog_Product_Album_Tab_Abstract
    extends Mage_Adminhtml_Block_Widget
{
    protected $_product;

    public function __construct()
    {
        parent::__construct();
    }

    public function getProduct()
    {
        return $this->_getProduct();
    }

    protected function _getProduct()
    {
        if(! $this->_product) {
            $product = Mage::registry('current_product');
            $album = Mage::getModel('album/album')->loadByProductId($product->getId());
            $product->addData($album->getData());
            $this->_product = $product;
        }

        return $this->_product;
    }
}