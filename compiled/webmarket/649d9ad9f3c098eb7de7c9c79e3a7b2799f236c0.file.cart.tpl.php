<?php /* Smarty version Smarty-3.0.7, created on 2015-02-08 01:08:30
         compiled from "/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29169615654d67ece1aa353-62668124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '649d9ad9f3c098eb7de7c9c79e3a7b2799f236c0' => 
    array (
      0 => '/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/cart.tpl',
      1 => 1423142198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29169615654d67ece1aa353-62668124',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/asrumyantsev/data/www/time-dom.ru/Smarty/libs/plugins/modifier.escape.php';
if (!is_callable('smarty_function_math')) include '/var/www/asrumyantsev/data/www/time-dom.ru/Smarty/libs/plugins/function.math.php';
?><?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable("Корзина", null, 1);?>
 
<div class="darker-stripe">
	<div class="container">
		<div class="row">
			<div class="span12">
				<ul class="breadcrumb">
					<li><a href="./">Главная</a></li>
					<li><span class="icon-chevron-right"></span></li>
					<li>Корзина</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="push-up top-equal blocks-spacer">
        <div class="row">
			<div class="span12">
				<div class="title-area">
					<h1 class="inline" id="cart_title">
						<?php $_template = new Smarty_Internal_Template("cart_title.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
					</h1>
				</div>
			</div>

			<div class="span12">
				<?php if ($_smarty_tpl->getVariable('coupon_error')->value){?>
				<div class="alert alert-danger in fade push-down-40">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<?php if ($_smarty_tpl->getVariable('coupon_error')->value=='invalid'){?>Купон недействителен<?php }?>
				</div>
				<?php }?>
				
				<?php if ($_smarty_tpl->getVariable('cart')->value->coupon->min_order_price>$_smarty_tpl->getVariable('cart')->value->total_price){?>
				<div class="alert in fade push-down-40">
					<button type="button" class="close" data-dismiss="alert">×</button>
					купон <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('cart')->value->coupon->code);?>
 действует для заказов от <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('cart')->value->coupon->min_order_price);?>
 <?php echo $_smarty_tpl->getVariable('currency')->value->sign;?>

				</div>
				<?php }?>	
				
				<?php if ($_smarty_tpl->getVariable('error')->value){?>
				<div class="alert alert-danger in fade push-down-40">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<?php if ($_smarty_tpl->getVariable('error')->value=='empty_name'){?>Введите имя<?php }?>
					<?php if ($_smarty_tpl->getVariable('error')->value=='empty_email'){?>Введите email<?php }?>
					<?php if ($_smarty_tpl->getVariable('error')->value=='captcha'){?>Капча введена неверно<?php }?>
				</div>
				<?php }?>
			</div>
			
			<div class="span12" id="cart">
				<?php if ($_smarty_tpl->getVariable('cart')->value->purchases){?>
				<form method="post" name="cart" class="form-horizontal form-checkout">
					<table class="table table-items">
						<thead>
							<tr>
								<th colspan="2" class="name">Название</th>
								<th><div class="align-right">Цена за шт.</div></th>
								<th><div class="align-center">Количество</div></th>
								<th><div class="align-right">Цена</div></th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							<?php  $_smarty_tpl->tpl_vars['purchase'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cart')->value->purchases; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->key => $_smarty_tpl->tpl_vars['purchase']->value){
?>
							<tr id="item_cart_<?php echo $_smarty_tpl->getVariable('purchase')->value->variant->id;?>
">
								<td class="image">
									<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['first'][0][0]->first_modifier($_smarty_tpl->getVariable('purchase')->value->product->images), null, null);?>
									<?php if ($_smarty_tpl->getVariable('image')->value){?>
									<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('image')->value->filename,124,124);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
">
									<?php }?>
								</td>
								
								<td class="desc">
									<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('purchase')->value->product->name);?>
<?php if ($_smarty_tpl->getVariable('purchase')->value->variant->name){?><span class="light">, <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('purchase')->value->variant->name);?>
</span><?php }?>
								</td>

								<td class="price">
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->getVariable('purchase')->value->variant->price));?>
 <?php echo $_smarty_tpl->getVariable('currency')->value->sign;?>

								</td>

								<td class="qty">
									<input type="text" class="tiny-size" maxlength="2" name="amounts[<?php echo $_smarty_tpl->getVariable('purchase')->value->variant->id;?>
]" value="<?php echo $_smarty_tpl->getVariable('purchase')->value->amount;?>
" autocomplete="off" onkeyup="update_cart('<?php echo $_smarty_tpl->getVariable('purchase')->value->variant->id;?>
',$(this).val());"  >
								</td>

								<td class="price" id="total_cost_<?php echo $_smarty_tpl->getVariable('purchase')->value->variant->id;?>
">
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->getVariable('purchase')->value->variant->price*$_smarty_tpl->getVariable('purchase')->value->amount));?>
&nbsp;<?php echo $_smarty_tpl->getVariable('currency')->value->sign;?>

								</td>

								<td class="delete">
									<a title="Удалить из корзины" onclick="remove_item_cart('<?php echo $_smarty_tpl->getVariable('purchase')->value->variant->id;?>
'); return false" href="cart/remove/<?php echo $_smarty_tpl->getVariable('purchase')->value->variant->id;?>
"><span class="icon-remove-sign"></span></a>
								</td>
							</tr>
							<?php }} ?>

							<?php if ($_smarty_tpl->getVariable('user')->value->discount){?>
							<tr>
								<th class="image"></th>
								<th class="name">скидка</th>
								<th class="price"></th>
								<th class="amount"></th>
								<th class="price">
									<?php echo $_smarty_tpl->getVariable('user')->value->discount;?>
&nbsp;%
								</th>
								<th class="remove"></th>
							</tr>
							<?php }?>
							<tr>
								<td colspan="3" rowspan="99">
									<?php if ($_smarty_tpl->getVariable('coupon_request')->value){?>
									<div style="display: inline-block">
										<label for="author">Код купона или подарочного ваучера</label>

										<div class="control-group">
											<input type="text" name="coupon_code" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('cart')->value->coupon->code);?>
" class="coupon_input">
											<input type="button" name="apply_coupon"  value="Применить купон" onclick="document.cart.submit();" class="btn btn-normal">
										</div>
									</div>

									
									<script>
									
									</script>
									
									<?php }?>
								</td>
								<td class="stronger">Доставка:</td>
								<td class="stronger">
									<div class="align-right" id="delivery_cost">
										<?php $_template = new Smarty_Internal_Template("delivery_cost.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
									</div>
								</td>
								<td>&nbsp;</td>
							</tr>
							<?php if ($_smarty_tpl->getVariable('cart')->value->coupon_discount>0){?>
							<tr>
								<td class="stronger">Купон:</td>
								<td class="price stronger"><div class="align-right">&minus;<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('cart')->value->coupon_discount);?>
&nbsp;<?php echo $_smarty_tpl->getVariable('currency')->value->sign;?>
</div></td>
								<td>&nbsp;</td>
							</tr>
							<?php }?>
							<tr>
								<td class="stronger">Итого:</td>
								<td class="price stronger"><div class="size-16 align-right" id="cart_total"><?php $_template = new Smarty_Internal_Template("cart_total_price.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?></div></td>
								<td>&nbsp;</td>
							</tr>
						</tbody>
					</table>
					
					<div class="row">
						<?php if ($_smarty_tpl->getVariable('deliveries')->value){?>
						<section class="span6 push-down-25">
							<h3 class="push-down-25"><span class="light">Выберите</span> способ доставки</h3>
						
							<div class="deliveries">
								<?php $_template = new Smarty_Internal_Template("delivery.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
							</div>
						</section>
						<?php }?>
						
						<section class="span6 push-down-25">
							<h3 class="push-down-25"><span class="light">Адрес</span> получателя</h3>
							<div class="form cart_form">         
								
								<div class="control-group">
									<label class="control-label" for="firstName">Имя, фамилия<span class="red-clr bold">*</span></label>
									<div class="controls">
										<input type="text" name="name" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('name')->value);?>
" id="firstName" class="span100" required>
									</div>
								</div>
								
								<div class="control-group">
									<label class="control-label" for="email">Email<span class="red-clr bold">*</span></label>
									<div class="controls">
										<input type="email" name="email" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('email')->value);?>
" id="email" class="span100" required>
									</div>
								</div>
								
								<div class="control-group">
									<label class="control-label" for="telephone">Телефон<span class="red-clr bold">*</span></label>
									<div class="controls">
										<input type="tel" name="phone" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('phone')->value);?>
" id="telephone" class="span100" required>
									</div>
								</div>
								
								<div class="control-group">
									<label class="control-label" for="address">Адрес доставки<span class="red-clr bold">*</span></label>
									<div class="controls">
										<input type="text" name="address" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address')->value);?>
" id="address" class="span100" required>
									</div>
								</div>
								
								<div class="control-group">
									<label class="control-label" for="order_comment">Комментарий к&nbsp;заказу</label>
									<div class="controls">
										<textarea name="comment" id="order_comment" class="span100" rows=6><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('comment')->value);?>
</textarea>
									</div>
								</div>
								
								<div class="control-group">
									<label class="control-label" for="comment_captcha">Число<span class="red-clr bold">*</span></label>
									<div class="controls captcha">
										<input type="text" name="captcha_code" value=""  id="comment_captcha" class="span100" required/>
										<img src="captcha/image.php?<?php echo smarty_function_math(array('equation'=>'rand(10,10000)'),$_smarty_tpl);?>
" alt='captcha'/>
									</div>
								</div>
							</div>
						</section>
					</div>

					<hr />
					
					<p class="right-align">
						<input type="submit" name="checkout" class="btn btn-primary higher bold" value="Оформить заказ">
					</p>
				</form>
				<?php }else{ ?>
				<div class="alert in fade push-down-40">
					В корзине нет товаров
				</div>
				<?php }?>
			</div>
        </div>
	</div>
</div>