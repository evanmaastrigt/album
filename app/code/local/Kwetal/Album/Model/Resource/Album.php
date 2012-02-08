<?php
class Kwetal_Album_Model_Resource_Album extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init('album/album', 'id');
    }
    
    public function loadByProductId(Kwetal_Album_Model_Album $album, $productId)
    {
        $select = $this->_getReadAdapter()
                       ->select()
                       ->from($this->getTable('album/album'), array('id'))
                       ->where('product_id = ' . $productId);
    
        if ($id = $this->_getReadAdapter()->fetchOne($select)) {
            $this->load($album, $id);
        }
        else {
            $album->setData(array());
        }
    
        return $this;
    }
}