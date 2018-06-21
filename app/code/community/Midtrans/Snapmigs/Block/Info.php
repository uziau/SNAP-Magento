<?php
/**
 * Veritrans VT Web form block
 *
 * @category   Mage
 * @package    Mage_Veritrans_VtWeb_Block_Form
 * @author     Kisman Hong, plihplih.com
 * when Veritrans payment method is chosen, vtweb/info.phtml template will be rendered at the right side, in progress bar.
 */
class Midtrans_Snapmigs_Block_Info extends Mage_Payment_Block_Info
{
    
    protected function _construct()
    {
        parent::_construct();
	$this->setInfoMessage( Mage::helper('snapmigs/data')->_getInfoTypeIsImage() == true ? 
		'<img src="'. $this->getSkinUrl('images/midtrans.png'). '"/>' : '<b>'. Mage::helper('snapmigs/data')->_getTitle() . '</b>');
	$this->setPaymentMethodTitle( Mage::helper('snapmigs/data')->_getTitle() );
        $this->setTemplate('snapmigs/info.phtml');
    }
}
?>
