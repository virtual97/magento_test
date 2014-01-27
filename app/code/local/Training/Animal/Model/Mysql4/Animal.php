<?php
/**
 * Created by PhpStorm.
 * User: s.shkiria
 * Date: 11/11/13
 * Time: 4:41 PM
 */
class Training_Animal_Model_Mysql4_Animal extends Mage_Core_Model_Mysql4_Abstract {

    // table & PK column
    protected function _construct()
    {
        $this->_init('training/animal', 'entity_id');
    }
}