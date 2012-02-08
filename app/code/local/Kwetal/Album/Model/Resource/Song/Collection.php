<?php
class Kwetal_Album_Model_Resource_Song_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('album/song');
    }
}