<?php
class Ruslan_Moduleone_Block_Myblock extends Mage_Core_Block_Template
{
    public function getMyData()
    {
//        Mage::helper('ruslan_moduleone')->getSomethings();
        return Mage::helper('ruslan_moduleone')->getSomethings();
    }
}