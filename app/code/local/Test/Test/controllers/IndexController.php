<?php
/**
 * Created by PhpStorm.
 * User: s.shkiria
 * Date: 1/26/14
 * Time: 8:01 PM
 */

class Test_Test_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction() {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function handlersAction() {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function testModelAction() {
        $params = $this->getRequest()->getParams();
        $blogpost = Mage::getModel('test_test');
        echo("Loading the blogpost with an ID of ".$params['id']);
        $blogpost->load($params['id']);
        $data = $blogpost->getData();
        var_dump($data);
    }

}
