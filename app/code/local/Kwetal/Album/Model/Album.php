<?php
class Kwetal_Album_Model_Album extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('album/album');
    }
    
    public function loadByProductId($productId)
    {
        if(is_null($productId)) {
            $this->setData(array());
            return $this;
        }
        $this->_getResource()->loadByProductId($this, $productId);
    
        return $this;
    }
}