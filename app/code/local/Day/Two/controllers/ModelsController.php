<?php
/**
 * Created by PhpStorm.
 * User: s.shkiria
 * Date: 11/10/13
 * Time: 7:08 PM
 */
class Day_Two_ModelsController extends  Mage_Core_Controller_Front_Action {

    public function storesAction(){
        //$stores = Mage::getResourceModel('core/store_collection');
        $stores = Mage::getModel('core/store')->getCollection();
        echo get_class($stores)."<br/>";
        foreach ($stores as $store) {
            /*echo get_class($store);
            echo $store->getName()." ".$store->getCode()."<br/>";*/
            $category1 = Mage::getModel('catalog/category');
            $store1 = $store->getRootCategoryId();
            $category = $category1->load($store1);
            echo $category->getName()."<br/>";
        }
    }


    public function categoriesAction(){
        /*$categories = Mage::getResourceModel('catalog/category_collection')
                      ->addFieldToFilter('level',1)
                      ->addAttributeToSelect('name');
        foreach ($categories as $category)
        {
            echo $category->getId()." ".$category->getName();
        }*/
        $categories = Mage::getResourceModel('catalog/category_collection')
                      ->addFieldToFilter('level',1);

        foreach ($categories as $category)
        {
            $children = $category->getChildren();
            var_dump($children);
            $childrenIds = explode(',',$children);
            var_dump($childrenIds);
            foreach ($childrenIds as $child)
            {
                $child = Mage::getModel('catalog/category')->load($child);
                Zend_Debug::dump($child->debug());
                //var_dump($cat);
            }

        }
    }

}