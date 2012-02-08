<?php

$installer = $this;

$installer->startSetup();

$installer->run(
"CREATE TABLE {$installer->getTable('album/album')} (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `artist` varchar(100) CHARACTER SET latin1 NOT NULL,
  `release_date` date DEFAULT NULL,
  `label` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `line_up` text CHARACTER SET latin1,
  `liner_notes` text CHARACTER SET latin1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE {$installer->getTable('album/song')} (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `album_id` int(10) unsigned NOT NULL,
  `title` varchar(100) CHARACTER SET latin1 NOT NULL,
  `can_purchase_separate` tinyint(4) DEFAULT '0',
  `price` decimal(10,2) DEFAULT NULL,
  `file` varchar(255) CHARACTER SET latin1 NOT NULL,
  `sample` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `sort_order` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;"
);

$installer->endSetup();