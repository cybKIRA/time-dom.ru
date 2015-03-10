<?php
	session_start();
	chdir('..');
	require_once('api/Simpla.php');
	$simpla = new Simpla();

    $variant_id = $simpla->request->get('variant_id', 'integer');
    $amount     = $simpla->request->get('amount',     'integer');
    $remove_id  = $simpla->request->get('remove_id',  'integer');
    $delivery_id  = $simpla->request->get('delivery_id',  'integer');
    $delivery_checked  = $simpla->request->get('delivery_id',  'integer') - 1;

    // Если есть amount, обновляем их
    if($amount && $variant_id){
       $simpla->cart->update_item($variant_id, $amount);
       $variant = $simpla->variants->get_variants(array('id'=>$variant_id));
       $simpla->design->assign('amount',  $_SESSION['shopping_cart'][$variant_id]);
       $simpla->design->assign('variant', $variant[0]);
    }

    // Если есть remove
    if($remove_id)
      $simpla->cart->delete_item($remove_id);

	$cart = $simpla->cart->get_cart();
	$simpla->design->assign('cart', $cart);

	$deliveries = $simpla->delivery->get_deliveries(array('enabled'=>1));
	$simpla->design->assign('deliveries', $deliveries);
	
	
	if ( $cart->total_price < $deliveries[$delivery_checked]->free_from && $deliveries[$delivery_checked]->price>0 )
		$simpla->design->assign('delivery_price', $deliveries[$delivery_checked]->price);
	elseif ( $cart->total_price >= $deliveries[$delivery_checked]->free_from )
		$simpla->design->assign('delivery_price', 0);
	
	$currencies = $simpla->money->get_currencies(array('enabled'=>1));
	if(isset($_SESSION['currency_id']))
		$currency = $simpla->money->get_currency($_SESSION['currency_id']);
	else
		$currency = reset($currencies);
		
	$simpla->design->assign('currency',	  $currency);
	$simpla->design->assign('delivery_id',	  $delivery_id);

	$result = array('total_cost'=>$simpla->design->fetch('cart_total_cost.tpl'),
					'total_price'=>$simpla->design->fetch('cart_total_price.tpl'), 
					'informer'=>$simpla->design->fetch('cart_informer.tpl'),
					'deliveries'=>$simpla->design->fetch('delivery.tpl'),
					'delivery_cost'=>$simpla->design->fetch('delivery_cost.tpl'),
					'cart_title'=>$simpla->design->fetch('cart_title.tpl'),
					'incart'=>$cart->total_products
	);
	
	header("Content-type: application/json; charset=UTF-8");
	header("Cache-Control: must-revalidate");
	header("Pragma: no-cache");
	header("Expires: -1");
	print json_encode($result);
