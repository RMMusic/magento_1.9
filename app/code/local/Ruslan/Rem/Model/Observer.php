<?php
class Ruslan_Rem_Model_Observer
{
    public function changePrice(Varien_Event_Observer $observer) {
        $observer->getEvent()->getProduct()->setFinalPrice(99);
        return $this;
    }
}