<?php
class Kwetal_Album_Model_Resource_Song extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init('album/song', 'id');
    }
}