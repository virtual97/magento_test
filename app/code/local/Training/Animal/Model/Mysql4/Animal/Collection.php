<?php
/**
 * Created by PhpStorm.
 * User: s.shkiria
 * Date: 11/11/13
 * Time: 4:42 PM
 */
class Training_Animal_Model_Mysql4_Animal extends Mage_Core_Model_Mysql4_Collection_Abstract {

    protected function _construct()
    {
        // we'll apply data
        $this->_init('training/animal');
    }
}