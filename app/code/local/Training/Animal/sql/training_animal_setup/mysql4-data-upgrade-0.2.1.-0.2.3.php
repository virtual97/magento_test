<?php
/**
 * Created by PhpStorm.
 * User: s.shkiria
 * Date: 11/12/13
 * Time: 4:44 PM
 */
    $installer = $this;

    $installer->startSetup();

    $installer->run("
        ALTER TABLE {$installer->getTable('training/animal')} ADD
        trainable TINYINT(1) UNSIGNED NOT NULL DEFAULT 0 AFTER edible;
    ");

    $installer->endSetup();