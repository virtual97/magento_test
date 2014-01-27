<?php
    include 'app/Mage.php';
    Mage::app();

    /*$object = Mage::getModel('catalog/product')->load(166);
    echo $object->getName();
    echo get_class($object);

    $blocks = Mage::app()->getLayout()->createBlock('catalog/product_view');
    echo get_class($blocks);*/

    $resource = Mage::getResourceModel('catalog/product');
    echo get_class($resource);


    $helper = Mage::helper('customer/address');
    echo get_class($helper);