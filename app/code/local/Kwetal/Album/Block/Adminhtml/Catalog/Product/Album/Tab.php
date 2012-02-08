<?php
class Kwetal_Album_Block_Adminhtml_Catalog_Product_Album_Tab
    extends Mage_Adminhtml_Block_Widget_Form
    implements Mage_Adminhtml_Block_Widget_Tab_Interface
{
    public function _construct()
    {
        parent::_construct();
        $this->setTemplate('album/catalog/product/album/tab.phtml');
    }
 
    public function getTabLabel()
    {
        return $this->__('Album Information');
    }
 
    public function getTabTitle()
    {
        return $this->__('Album Information');
    }
 
    public function canShowTab()
    {
        return true;
    }
 
    public function isHidden()
    {
        return false;
    }
    
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form();
        $this->setForm($form);
    
        $fieldset = $form->addFieldset('album_album', array(
                'legend'=>Mage::helper('album')->__('Album Information')
        ));
        
        $dateFormatIso = Mage::app()->getLocale()->getDateFormat(Mage_Core_Model_Locale::FORMAT_TYPE_SHORT);
        $fieldset->addField('release_date', 'date', array(
                    'name'   => 'from_date',
                    'label'  => Mage::helper('album')->__('From Date'),
                    'title'  => Mage::helper('album')->__('From Date'),
                    'image'  => $this->getSkinUrl('images/grid-cal.gif'),
                    'input_format' => Varien_Date::DATE_INTERNAL_FORMAT,
                    'format'       => $dateFormatIso
        ));
    }
    
    protected function _toHtml()
    {    
        $accordion = $this->getLayout()->createBlock('adminhtml/widget_accordion')
                                       ->setId('album_info');
        
        $accordion->addItem('options', array(
                    'title'   => Mage::helper('album')->__('Songs'),
                    'content' => $this->getLayout()->createBlock('album/adminhtml_catalog_product_album_tab_song')->toHtml(),
                    'open'    => true,
        ));
        
        $this->setChild('accordion', $accordion);
        return parent::_toHtml();
    }
 
    /**
     * AJAX TAB's
     * If you want to use an AJAX tab, uncomment the following functions
     * Please note that you will need to setup a controller to recieve
     * the tab content request
     *
     */
    /**
     * Retrieve the class name of the tab
     * Return 'ajax' here if you want the tab to be loaded via Ajax
     *
     * return string
     */
   //public function getTabClass()
   //{
   //    return 'my-custom-tab';
   //}
 
    /**
     * Determine whether to generate content on load or via AJAX
     * If true, the tab's content won't be loaded until the tab is clicked
     * You will need to setup a controller to handle the tab request
     *
     * @return bool
     */
   //public function getSkipGenerateContent()
   //{
   //    return false;
   //}
 
    /**
     * Retrieve the URL used to load the tab content
     * Return the URL here used to load the content by Ajax
     * see self::getSkipGenerateContent & self::getTabClass
     *
     * @return string
     */
   //public function getTabUrl()
   //{
   //    return null;
   //}
}