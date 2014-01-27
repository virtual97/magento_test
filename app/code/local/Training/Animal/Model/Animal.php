<?php
/**
 * Created by PhpStorm.
 * User: s.shkiria
 * Date: 11/11/13
 * Time: 4:41 PM
 */
class Training_Animal_Model_Animal extends Mage_Core_Model_Abstract {

    protected function _construct()
    {
        //initialize resource model
        $this->_init('training/animal');
    }

}