<?php
/**
 * Created by PhpStorm.
 * User: s.shkiria
 * Date: 11/13/13
 * Time: 1:26 PM
 */
class Training_Animal_Model_Observer
{

    public function controllerActionPredispatch(Varien_Event_Observer $observer)
    {
        $user = Mage::getSingleton('admin/session')->getUser();
        if ($user) {
            $name = $user->getUsername();
        } else {
            $name = 'Not logged in!';
        }
        Mage::log(
            $name . '' . Mage::app()->getRequest()->getPathInfo(),
            Zend_Log::INFO, 'admin.log', true
        );
    }
}