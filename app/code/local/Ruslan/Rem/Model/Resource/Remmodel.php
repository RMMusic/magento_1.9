<?php

class Ruslan_Rem_Model_Resource_Remmodel extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('ruslan_rem/remmodel', 'id');
    }
}