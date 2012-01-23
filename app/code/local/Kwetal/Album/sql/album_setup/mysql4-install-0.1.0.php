<?php

$installer = $this;

$installer->startSetup();

$fieldList = array('price',
                   'special_price',
                   'special_from_date',
                   'special_to_date',
                   'minimal_price',
                   'tax_class_id'
);

// make these attributes applicable to album products
foreach ($fieldList as $field) {
    $applyTo = explode(',', $installer->getAttribute('catalog_product', $field, 'apply_to'));
    if (! in_array('album', $applyTo)) {
        $applyTo[] = 'album';
        $installer->updateAttribute('catalog_product', $field, 'apply_to', join(',', $applyTo));
    }
}

$installer->endSetup();