<?php
class Ruslan_Admingrid_Adminhtml_NewitemController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout()
            ->_setActiveMenu('mycustomtab')
            ->_title($this->__('Index Action'));

        // my stuff

        $this->renderLayout();
    }

//    public function listAction()
//    {
//        $this->loadLayout()
//            ->_setActiveMenu('mycustomtab')
//            ->_title($this->__('List Action'));
//
//        // my stuff
//
//        $this->renderLayout();
//    }
}