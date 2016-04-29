<?php

class Ruslan_Moduleone_Model_Resource_Any extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('onemodel/any', 'id');
    }
}