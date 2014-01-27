<?php
/**
 * Created by PhpStorm.
 * User: s.shkiria
 * Date: 11/10/13
 * Time: 7:05 PM
 */
class Day_Two_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        echo "We're cookin now";
    }

    public function modelAction()
    {
        echo get_class(Mage::getModel('day_two/whatever'));
    }

    public function layoutAction()
    {
        $xml = $this->loadLayout()->getLayout()->getUpdate()->asString();
        $this->getResponse()->setHeader('Content-Type', 'text/plain')->setBody($xml);

        //Mage::log($xml, Zend_Log::INFO, 'layout.log', true);
        $model = Mage::getModel('day_two/whatever');
        Mage::log($model->debug(), Zend_Log::INFO, 'model.log', true);

    }

    public function defaultAction()
    {
        var_dump($this->loadLayout()->renderLayout());
    }
}