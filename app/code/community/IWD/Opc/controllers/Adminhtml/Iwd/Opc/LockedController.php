<?php

class IWD_Opc_Adminhtml_Iwd_Opc_LockedController extends Mage_Adminhtml_Controller_Action
{

    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('admin/catalog');
    }

    public function preDispatch()
    {
        parent::preDispatch();
        $this->_initAction();
        return $this;
    }

    protected function _initAction()
    {
        $this->loadLayout()
            ->_setActiveMenu('catalog')
            ->_title(Mage::helper('iwd_opc')->__('Subscriptions & Recurring Payments'));

        $this->_addBreadcrumb(
            Mage::helper('iwd_opc')->__('Subscriptions & Recurring Payments'),
            Mage::helper('iwd_opc')->__('Subscriptions & Recurring Payments')
        );
        $this->renderLayout();
        return $this;
    }

    public function typesAction()
    {
        return $this;
    }

    public function productsAction()
    {
        return $this;
    }

    public function subscriptionsAction()
    {
        return $this;
    }
}
