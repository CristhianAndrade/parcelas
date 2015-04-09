<?php

class Soulmkt_Parcelas_Model_Observer
{
	private static $contador = 0;
	 
    public function insertBlock($observer)
    {
    	if($observer->getBlock()->getLayout()->getBlockSingleton('parcelas/scriptparcelas')->priceAuto())
		{
	        /** @var $_block Mage_Core_Block_Abstract */
	        /*Get block instance*/
	        $_block = $observer->getBlock();
	        /*get Block type*/
	        $_type = $_block->getType();
	       /*Check block type*/
	        if ($_type == 'catalog/product_price' && self::$contador == 0) {
	        	
	            /*Clone block instance*/
	            $_child = clone $_block; 
	            /*set another type for block*/
	            $_child->setType('parcelas/block'); 
	            /*set child for block*/
				$_block->setChild('child'.$_child->getProduct()->getId(), $_child); 
	            /*set our template*/  
	            $_block->setTemplate('soulmktparcelas/parcelas.phtml');
				
				if(Mage::registry('current_product')) 
				{
				   self::$contador = 1;
				}
	
	        }  
		}
    }
}