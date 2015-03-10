{* Страница заказа *}

{$meta_title = "Ваш заказ №`$order->id`" scope=parent}

<div class="darker-stripe">
	<div class="container">
		<div class="row">
			<div class="span12">
				<ul class="breadcrumb">
					<li><a href="./">Главная</a></li>
					<li><span class="icon-chevron-right"></span></li>
					<li>Заказ №{$order->id}</li>
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
					<h1 class="inline">
						<span class="light">Ваш заказ №{$order->id}</span> 
						{if $order->status == 0}принят{/if}
						{if $order->status == 1}в обработке{elseif $order->status == 2}выполнен{/if}
						{if $order->paid == 1}, оплачен{else}{/if}
					</h1>
				</div>
			</div>
			

			<div class="span12">
				<table class="table table-items">
					<thead>
						<tr>
							<th colspan="2" class="name">Название</th>
							<th><div class="align-right">Цена за шт.</div></th>
							<th><div class="align-center">Количество</div></th>
							<th><div class="align-right">Цена</div></th>
						</tr>
					</thead>
					<tbody>
						{foreach $purchases as $purchase}
						<tr>
							<td class="image">
								{$image = $purchase->product->images|first}
								{if $image}
								<img src="{$image->filename|resize:124:124}" alt="{$product->name|escape}">
								{/if}
							</td>
							

							<td class="desc">
								{$purchase->product_name|escape}
								{if $purchase->variant->name}<span class="light">, {$purchase->variant->name|escape}</span>{/if}
								{if $order->paid && $purchase->variant->attachment}
									<a class="download_attachment" href="order/{$order->url}/{$purchase->variant->attachment}">скачать файл</a>
								{/if}
							</td>

							<td class="price">
								{($purchase->price)|convert}&nbsp;{$currency->sign}
							</td>

							<td class="qty">
								&times; {$purchase->amount}&nbsp;{$settings->units}
							</td>

							<td class="price">
								{($purchase->price*$purchase->amount)|convert}&nbsp;{$currency->sign}
							</td>
						</tr>
						{/foreach}
						
						<tr>
							<td colspan="3" rowspan="99">&nbsp;</td>
						</tr>
						
						{* Скидка, если есть *}
						{if $order->discount > 0}
						<tr>
							<td class="stronger">Скидка:</td>
							<td class="stronger"><div class="align-right">{$order->discount}&nbsp;%</div></td>
						</tr>
						{/if}

						{* Купон, если есть *}
						{if $order->coupon_discount > 0}
						<tr>
							<td class="stronger">Купон:</td>
							<td class="stronger"><div class="align-right">&minus;{$order->coupon_discount|convert}&nbsp;{$currency->sign}</div></td>
						</tr>
						{/if}
						
						{* Если стоимость доставки входит в сумму заказа *}
						{if !$order->separate_delivery && $order->delivery_price>0}
						<tr>
							<td class="stronger">{$delivery->name|escape}:</td>
							<td class="stronger"><div class="align-right">{$order->delivery_price|convert}&nbsp;{$currency->sign}</div></td>
						</tr>
						{/if}
						{* Итого *}
						<tr>
							<td class="stronger">Итого:</td>
							<td class="stronger"><div class="align-right">{$order->total_price|convert}&nbsp;{$currency->sign}</div></td>
						</tr>
						{* Если стоимость доставки не входит в сумму заказа *}
						{if $order->separate_delivery}
						<tr>
							<td class="stronger">{$delivery->name|escape}:</td>
							<td class="stronger"><div class="align-right">{$order->delivery_price|convert}&nbsp;{$currency->sign}</div></td>
						</tr>
						{/if}
					</tbody>
				</table>	


				<div class="row">
					{if !$order->paid}
					<section class="span6 push-down-25">
						{* Выбор способа оплаты *}
						{if $payment_methods && !$payment_method && $order->total_price>0}
						<form method="post">
							<h3 class="push-down-25"><span class="light">Выберите</span> способ оплаты</h3>
							
							<div class="deliveries">
								{foreach $payment_methods as $payment_method}
									<div class="accordion-group accordion-style-2 {if $payment_method@first}open{else}closed{/if}">
										<div class="accordion-heading">	
											<label for="payment_{$payment_method->id}" class="accordion-toggle push-down-0">
												<div class="pull-right">{$order->total_price|convert:$payment_method->currency_id}&nbsp;{$all_currencies[$payment_method->currency_id]->sign}</div>
												<input type="radio" name="payment_method_id" value='{$payment_method->id}' id="payment_{$payment_method->id}" {if $payment_method@first}checked{/if}>
												<i class="box"></i> {$payment_method->name}
											</label>
										</div>

										<div class="accordion-body" {if !$payment_method@first}style="display: none"{/if}>
											<div class="accordion-inner">
												{$payment_method->description}
											</div>
										</div>
									</div>
								{/foreach}
							</div>
							
							<script>
								$(".deliveries .accordion-heading").click(function() {
									var $accordionGroup = $(this).parent().parent();
									if ($(this).parent().hasClass("open")) {
										return 
									} else {
										$accordionGroup.find('.open').toggleClass("closed open");
										$(this).parent().toggleClass("closed open");
									}
									$('.open > .accordion-body').slideDown(250)
									$('.closed > .accordion-body').slideUp(250)
								});
							</script>
							
							<p class="right-align">
								<input type="submit" class="btn btn-primary higher bold" value="Закончить заказ">
							</p>
						</form>

						{* Выбраный способ оплаты *}
						{elseif $payment_method}
							
						<h3 class="push-down-25"><span class="light">Способ оплаты &mdash;</span> {$payment_method->name}</h3>

						{$payment_method->description}

						<hr>

						<h3 class="push-down-25"><span class="light">К оплате </span> {$order->total_price|convert:$payment_method->currency_id}&nbsp;{$all_currencies[$payment_method->currency_id]->sign}</h3>
						
						<form method="post" style="float: left; margin-right: 20px;">
							<input type="submit" name="reset_payment_method" class="btn push-down-10"value="Выбрать другой способ оплаты">
						</form>
						{* Форма оплаты, генерируется модулем оплаты *}
						{checkout_form order_id=$order->id module=$payment_method->module}
						{/if}
					</section>
					{/if}
					
					<section class="span6 push-down-25">
						<h3 class="push-down-25"><span class="light">Детали</span> заказа</h3>
						
						<table class="table table-striped table-bordered">
							<tr>
								<td>Дата заказа</td>
								<td>{$order->date|date} в {$order->date|time}</td>
							</tr>
							{if $order->name}
							<tr>
								<td>Имя</td>
								<td>{$order->name|escape}</td>
							</tr>
							{/if}
							{if $order->email}
							<tr>
								<td>Email</td>
								<td>{$order->email|escape}</td>
							</tr>
							{/if}
							{if $order->phone}
							<tr>
								<td>Телефон</td>
								<td>{$order->phone|escape}</td>
							</tr>
							{/if}
							{if $order->address}
							<tr>
								<td>Адрес доставки</td>
								<td>{$order->address|escape}</td>
							</tr>
							{/if}
							{if $order->comment}
							<tr>
								<td>Комментарий</td>
								<td>{$order->comment|escape|nl2br}</td>
							</tr>
							{/if}
						</table>
					</section>
				</div>
			</div>			
		</div>			
	</div>			
</div>