<?php /* Smarty version Smarty-3.0.7, created on 2015-02-05 17:27:08
         compiled from "/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/cart_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211806056454d36fac6c4957-04643696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67c0fca5ee851e68706eb8eca1d8ab8b42c6c2cc' => 
    array (
      0 => '/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/cart_informer.tpl',
      1 => 1423142199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211806056454d36fac6c4957-04643696',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/asrumyantsev/data/www/time-dom.ru/Smarty/libs/plugins/modifier.escape.php';
?><?php if ($_smarty_tpl->getVariable('cart')->value->total_products>0){?>
	<div class="cart">
		<p class="items">Корзина <span class="dark-clr">(<?php echo $_smarty_tpl->getVariable('cart')->value->total_products;?>
)</span></p>
		<p class="dark-clr hidden-tablet"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('cart')->value->total_price);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('currency')->value->sign);?>
</p>
		<a href="./cart" class="btn btn-danger">
			<i class="icon-shopping-cart"></i>
		</a>
	</div>
	
	<div class="open-panel">
		<div class="products-box<?php if (count($_smarty_tpl->getVariable('cart')->value->purchases)>4){?> scroll<?php }?>">
			<?php  $_smarty_tpl->tpl_vars['purchase'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cart')->value->purchases; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->key => $_smarty_tpl->tpl_vars['purchase']->value){
?>
			<div class="item-in-cart clearfix" id="item-in-cart-<?php echo $_smarty_tpl->getVariable('purchase')->value->variant->id;?>
">
				<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['first'][0][0]->first_modifier($_smarty_tpl->getVariable('purchase')->value->product->images), null, null);?>
				<?php if ($_smarty_tpl->getVariable('image')->value){?>
				<div class="image">
					<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('image')->value->filename,70,70);?>
"  alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
" />
				</div>
				<?php }?>
				<div class="desc">
					<strong><a href="products/<?php echo $_smarty_tpl->getVariable('purchase')->value->product->url;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('purchase')->value->product->name);?>
<?php if ($_smarty_tpl->getVariable('purchase')->value->variant->name){?>, <span class="light"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('purchase')->value->variant->name);?>
</span><?php }?></a></strong>
					<span class="light-clr qty">
						Кол-во: <?php echo $_smarty_tpl->getVariable('purchase')->value->amount;?>

						&nbsp;
						<a href="#" class="icon-remove-sign" onclick="remove_item_cart('<?php echo $_smarty_tpl->getVariable('purchase')->value->variant->id;?>
'); return false" title="Удалить"></a>
					</span>
				</div>
				<div class="price">
					<strong id="total_cost_informer_<?php echo $_smarty_tpl->getVariable('purchase')->value->variant->id;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->getVariable('purchase')->value->variant->price*$_smarty_tpl->getVariable('purchase')->value->amount));?>
 <?php echo $_smarty_tpl->getVariable('currency')->value->sign;?>
</strong>
				</div>
			</div>
			<?php }} ?>
		</div>
		<div class="item-in-cart summary clearfix" id="item-in-cart-<?php echo $_smarty_tpl->getVariable('purchase')->value->variant->id;?>
">
			<div class="image">&nbsp;</div>
			<div class="desc">Итого:</div>
			<div class="price">
				<strong class="size-16"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('cart')->value->total_price);?>
&nbsp;<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('currency')->value->sign);?>
</strong>
			</div>
		</div>

		<div class="proceed">
			<a href="./cart" class="btn btn-danger pull-right bold higher">Оформить заказ <i class="icon-shopping-cart"></i></a>
		</div>
	</div>
<?php }else{ ?>
	<div class="cart">
		<p class="items">Корзина <span class="dark-clr">(<?php echo $_smarty_tpl->getVariable('cart')->value->total_products;?>
)</span></p>
		<p class="dark-clr hidden-tablet"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('cart')->value->total_price);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('currency')->value->sign);?>
</p>
		<a href="./cart" class="btn btn-danger">
			<i class="icon-shopping-cart"></i>
		</a>
	</div>

	<div class="open-panel">
		<div class="item-in-cart clearfix">
			<p class="empty">В корзине нет товаров.</p>
		</div>
	</div>
<?php }?>