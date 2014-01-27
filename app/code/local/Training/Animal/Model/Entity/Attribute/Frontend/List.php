<?php
/**
 * Created by PhpStorm.
 * User: s.shkiria
 * Date: 11/13/13
 * Time: 12:01 PM
 */
class Training_Animal_Model_Entity_Attribute_Frontend_List
    extends Mage_Eav_Model_Entity_Attribute_Frontend_Abstract
{
    public function getValue(Varien_Object $object)
    {
        if ($this->getConfigField('input') == 'multiselect') {
            $value = $object->getData($this->getAttribute()->getAttributeCode());
            $value = $this->getOption($value);

            if (is_array($value)) {
                $output = '<ul><li>';
                $output .= implode('</li><li>', $value);
                $output .= '</li><li>';
                return $output;
            }

            return $value;
        } else{
            return parent::getValue($object);
        }

    }
}
