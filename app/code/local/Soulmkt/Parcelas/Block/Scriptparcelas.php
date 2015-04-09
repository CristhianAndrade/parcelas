<?php
class Soulmkt_Parcelas_Block_ScriptParcelas extends Mage_Core_Block_Template
{ 
	 const ENABLED       	= 'soulmkt_parcelas/parcelas/enabled';
     const MAXIMO_PARCELAS  = 'soulmkt_parcelas/parcelas/maxima_parcelas';
     const MINIMO_PARCELAS  = 'soulmkt_parcelas/parcelas/minimo_parcelas';
	 const ENABLED_CJM    	= 'soulmkt_parcelas/parcelas/clique_cjm'; 
	 const DESCONTO_BOLETO    	= 'soulmkt_parcelas/parcelas/desconto_boleto';
	 //const PRICE_AUTO    	=  'soulmkt_parcelas/parcelas/add_price';
	 
     public function methodblock()
     {
         //return 'informations about my block !!' ;
     }
	 
	 public function enabled()
	 {
	 	return Mage::getStoreConfigFlag(self::ENABLED);
	 }
	 
	 public function getMaxParcelas()
	 {
	 	return Mage::getStoreConfig(self::MAXIMO_PARCELAS);
	 }
	 
	 public function getMinParcelas()
	 {
	 	return Mage::getStoreConfig(self::MINIMO_PARCELAS);
	 }
	 
	 public function enabledCjm()
	 {
	 	return Mage::getStoreConfigFlag(self::ENABLED_CJM);
	 }
	 
	 public function getSymbol()
	 {
	 	return trim(Mage::app()->getLocale()->currency(Mage::app()->getStore()->getCurrentCurrencyCode())->getSymbol()); 
	 }
	 
	 public function getDescontoBoleto() 
	 {
	 	return Mage::getStoreConfig(self::DESCONTO_BOLETO); 
	 }
	 /*public function priceAuto()
	 {
	 	return Mage::getStoreConfig(self::PRICE_AUTO);
	 }*/ 
} 