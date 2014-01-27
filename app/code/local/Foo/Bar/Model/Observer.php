<?php
/**
 * Created by PhpStorm.
 * User: s.shkiria
 * Date: 11/10/13
 * Time: 1:41 PM
 */
class Foo_Bar_Model_Observer {

    public function catalogProductLoadAfter(Varien_Event_Observer $observers){
        $product = $observers->getProduct();
        $product->setName( $product->getName()." is cool" );
    }
}