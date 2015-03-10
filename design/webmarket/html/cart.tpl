{$meta_title = "Корзина" scope=parent}
 
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
						{include file="cart_title.tpl"}
					</h1>
				</div>
			</div>

			<div class="span12">
				{if $coupon_error}
				<div class="alert alert-danger in fade push-down-40">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{if $coupon_error == 'invalid'}Купон недействителен{/if}
				</div>
				{/if}
				
				{if $cart->coupon->min_order_price > $cart->total_price}
				<div class="alert in fade push-down-40">
					<button type="button" class="close" data-dismiss="alert">×</button>
					купон {$cart->coupon->code|escape} действует для заказов от {$cart->coupon->min_order_price|convert} {$currency->sign}
				</div>
				{/if}	
				
				{if $error}
				<div class="alert alert-danger in fade push-down-40">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{if $error == 'empty_name'}Введите имя{/if}
					{if $error == 'empty_email'}Введите email{/if}
					{if $error == 'captcha'}Капча введена неверно{/if}
				</div>
				{/if}
			</div>
			
			<div class="span12" id="cart">
				{if $cart->purchases}
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
							{foreach from=$cart->purchases item=purchase}
							<tr id="item_cart_{$purchase->variant->id}">
								<td class="image">
									{$image = $purchase->product->images|first}
									{if $image}
									<img src="{$image->filename|resize:124:124}" alt="{$product->name|escape}">
									{/if}
								</td>
								
								<td class="desc">
									{$purchase->product->name|escape}{if $purchase->variant->name}<span class="light">, {$purchase->variant->name|escape}</span>{/if}
								</td>

								<td class="price">
									{($purchase->variant->price)|convert} {$currency->sign}
								</td>

								<td class="qty">
									<input type="text" class="tiny-size" maxlength="2" name="amounts[{$purchase->variant->id}]" value="{$purchase->amount}" autocomplete="off" onkeyup="update_cart('{$purchase->variant->id}',$(this).val());"  >
								</td>

								<td class="price" id="total_cost_{$purchase->variant->id}">
									{($purchase->variant->price*$purchase->amount)|convert}&nbsp;{$currency->sign}
								</td>

								<td class="delete">
									<a title="Удалить из корзины" onclick="remove_item_cart('{$purchase->variant->id}'); return false" href="cart/remove/{$purchase->variant->id}"><span class="icon-remove-sign"></span></a>
								</td>
							</tr>
							{/foreach}

							{if $user->discount}
							<tr>
								<th class="image"></th>
								<th class="name">скидка</th>
								<th class="price"></th>
								<th class="amount"></th>
								<th class="price">
									{$user->discount}&nbsp;%
								</th>
								<th class="remove"></th>
							</tr>
							{/if}
							<tr>
								<td colspan="3" rowspan="99">
									{if $coupon_request}
									<div style="display: inline-block">
										<label for="author">Код купона или подарочного ваучера</label>

										<div class="control-group">
											<input type="text" name="coupon_code" value="{$cart->coupon->code|escape}" class="coupon_input">
											<input type="button" name="apply_coupon"  value="Применить купон" onclick="document.cart.submit();" class="btn btn-normal">
										</div>
									</div>

									{literal}
									<script>
									
									</script>
									{/literal}
									{/if}
								</td>
								<td class="stronger">Доставка:</td>
								<td class="stronger">
									<div class="align-right" id="delivery_cost">
										{include file="delivery_cost.tpl"}
									</div>
								</td>
								<td>&nbsp;</td>
							</tr>
							{if $cart->coupon_discount>0}
							<tr>
								<td class="stronger">Купон:</td>
								<td class="price stronger"><div class="align-right">&minus;{$cart->coupon_discount|convert}&nbsp;{$currency->sign}</div></td>
								<td>&nbsp;</td>
							</tr>
							{/if}
							<tr>
								<td class="stronger">Итого:</td>
								<td class="price stronger"><div class="size-16 align-right" id="cart_total">{include file="cart_total_price.tpl"}</div></td>
								<td>&nbsp;</td>
							</tr>
						</tbody>
					</table>
					
					<div class="row">
						{if $deliveries}
						<section class="span6 push-down-25">
							<h3 class="push-down-25"><span class="light">Выберите</span> способ доставки</h3>
						
							<div class="deliveries">
								{include file="delivery.tpl"}
							</div>
						</section>
						{/if}
						
						<section class="span6 push-down-25">
							<h3 class="push-down-25"><span class="light">Адрес</span> получателя</h3>
							<div class="form cart_form">         
								
								<div class="control-group">
									<label class="control-label" for="firstName">Имя, фамилия<span class="red-clr bold">*</span></label>
									<div class="controls">
										<input type="text" name="name" value="{$name|escape}" id="firstName" class="span100" required>
									</div>
								</div>
								
								<div class="control-group">
									<label class="control-label" for="email">Email<span class="red-clr bold">*</span></label>
									<div class="controls">
										<input type="email" name="email" value="{$email|escape}" id="email" class="span100" required>
									</div>
								</div>
								
								<div class="control-group">
									<label class="control-label" for="telephone">Телефон<span class="red-clr bold">*</span></label>
									<div class="controls">
										<input type="tel" name="phone" value="{$phone|escape}" id="telephone" class="span100" required>
									</div>
								</div>
								
								<div class="control-group">
									<label class="control-label" for="address">Адрес доставки<span class="red-clr bold">*</span></label>
									<div class="controls">
										<input type="text" name="address" value="{$address|escape}" id="address" class="span100" required>
									</div>
								</div>
								
								<div class="control-group">
									<label class="control-label" for="order_comment">Комментарий к&nbsp;заказу</label>
									<div class="controls">
										<textarea name="comment" id="order_comment" class="span100" rows=6>{$comment|escape}</textarea>
									</div>
								</div>
								
								<div class="control-group">
									<label class="control-label" for="comment_captcha">Число<span class="red-clr bold">*</span></label>
									<div class="controls captcha">
										<input type="text" name="captcha_code" value=""  id="comment_captcha" class="span100" required/>
										<img src="captcha/image.php?{math equation='rand(10,10000)'}" alt='captcha'/>
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
				{else}
				<div class="alert in fade push-down-40">
					В корзине нет товаров
				</div>
				{/if}
			</div>
        </div>
	</div>
</div>