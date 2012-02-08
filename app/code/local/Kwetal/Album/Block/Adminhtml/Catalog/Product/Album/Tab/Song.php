<?php
class Kwetal_Album_Block_Adminhtml_Catalog_Product_Album_Tab_Song
extends Kwetal_Album_Block_Adminhtml_Catalog_Product_Album_Tab_Abstract
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('album/catalog/product/album/tab/song.phtml');
    }
}