# parcelas

Adicionar a seguiente tag dentro do price.phtml

--Versão 1.2.1

<?php
	echo $this->getLayout()->createBlock('parcelas/scriptparcelas')
	->setData('product', $_product)
	->setTemplate('soulmktparcelas/parcelas.phtml')->toHtml();
?>

Não se esqueça de ativar e configurar o mesmo dentro da administração dentro de
GERAL >  Soulmkt Installments (SoulMKT Parcelas)


thanks
