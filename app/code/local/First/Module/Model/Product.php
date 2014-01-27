<?php
/**
 * Created by PhpStorm.
 * User: s.shkiria
 * Date: 11/9/13
 * Time: 11:19 AM
 */

 class First_Module_Model_Product extends Mage_Catalog_Model_Product {

     public  function getName(){
         $name = parent::getName();
         return strtoupper($name);
     }
 }