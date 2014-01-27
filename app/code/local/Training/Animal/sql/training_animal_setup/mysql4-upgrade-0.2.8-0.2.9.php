<?php
/**
 * Created by PhpStorm.
 * User: s.shkiria
 * Date: 11/13/13
 * Time: 11:37 AM
 */

$installer = Mage::getResourceModel('catalog/setup','default_setup');

$installer->startSetup();

$installer->updateAttribute('catalog_product',
    'attribute_installer',
    'is_visible_on_front',
    1
);

$installer->endSetup();