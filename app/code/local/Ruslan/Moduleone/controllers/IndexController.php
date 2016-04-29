<?php
class Ruslan_Moduleone_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        echo '"Hello" it\'s Word';
    }

    Public function secondAction()
    {
        //Loading current layout
        $this->loadLayout();
//        var_dump(Mage::app()->getLayout()->getUpdate()->getHandles());exit;
        //Creating a new block
//        $block = $this->getLayout()->createBlock(
//            'Ruslan_Moduleone_Block_Myblock',
//            'rus',
//            array('template' => 'ruslan/myblock.phtml')
//        );
//        $this->getLayout()->getBlock('content')->append($block);
        //Now showing it with rendering of layout
        $this->renderLayout();
        echo Mage::getModel('onemodel/onemodel')->oneModel();
    }
}