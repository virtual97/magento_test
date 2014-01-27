<?php
/**
 * Created by PhpStorm.
 * User: s.shkiria
 * Date: 11/13/13
 * Time: 11:15 AM
 */

$installer = Mage::getResourceModel('catalog/setup','default_setup');

$installer->startSetup();

$data = array(
        'label' =>  'Script',
        'type' =>   'varchar',
        'input' =>   'varchar',
        'input' =>   'multiselect',
        'required' =>   0,
        'user_defined' =>   1,
        'group' =>   'Price',
        'option' =>   array(
            'order' => array('one' => 1, 'two' => 2, 'three' => 5),
            'value' =>array (
                'one' => array(0 => 'Some lable1', 2 => 'Alt One'),
                'two' => array(0 => 'Some lable2', 2 => 'Alt Two'),
                'three' => array(0 => 'Some lable3', 2 => 'Alt Three'),
            ),
        )

);

$installer->addAttribute('catalog_product', 'attribute_installer', $data);

$installer->endSetup();