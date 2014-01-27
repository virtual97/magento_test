<?php
/**
 * Created by PhpStorm.
 * User: s.shkiria
 * Date: 11/11/13
 * Time: 5:57 PM
 */
$installer = $this;

$installer->startSetup();

$installer->run("
DROP TABLE IF EXISTS {$installer->getTable('training/animal')};
CREATE TABLE {$installer->getTable('training/animal')} (
    entity_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL DEFAULT '',
    type VARCHAR(255) NOT NULL DEFAULT '',
    edible TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
    comment TEXT NULL,
    updated_at DATETIME,
    created_at DATETIME
) Engine=InnoDB DEFAULT CHARSET=utf8;
");

$installer->endSetup();