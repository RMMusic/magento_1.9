<?php
class Ruslan_Rem_Model_Resource_Remmodel_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('ruslan_rem/remmodel');
    }
}