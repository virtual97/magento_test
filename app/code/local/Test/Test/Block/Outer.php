<?php
/**
 * Created by PhpStorm.
 * User: s.shkiria
 * Date: 11/9/13
 * Time: 11:35 AM
 */
class Test_Test_Block_Outer extends Mage_Core_Block_Template {

    protected function _construct()
    {
        parent::_construct();
    }

    public function index() {
        $block = $this->getLayout()->createBlock('test_test/inner')->setTemplate('test/view/inner2.phtml');
        $this->setChild('inner2.view', $block);
    }
}
