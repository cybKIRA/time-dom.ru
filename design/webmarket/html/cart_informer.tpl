{if $cart->total_products>0}
	<div class="cart">
		<p class="items">Корзина <span class="dark-clr">({$cart->total_products})</span></p>
		<p class="dark-clr hidden-tablet">{$cart->total_price|convert} {$currency->sign|escape}</p>
		<a href="./cart" class="btn btn-danger">
			<i class="icon-shopping-cart"></i>
		</a>
	</div>
	
	<div class="open-panel">
		<div class="products-box{if $cart->purchases|count > 4} scroll{/if}">
			{foreach from=$cart->purchases item=purchase}
			<div class="item-in-cart clearfix" id="item-in-cart-{$purchase->variant->id}">
				{$image = $purchase->product->images|first}
				{if $image}
				<div class="image">
					<img src="{$image->filename|resize:70:70}"  alt="{$product->name|escape}" />
				</div>
				{/if}
				<div class="desc">
					<strong><a href="products/{$purchase->product->url}">{$purchase->product->name|escape}{if $purchase->variant->name}, <span class="light">{$purchase->variant->name|escape}</span>{/if}</a></strong>
					<span class="light-clr qty">
						Кол-во: {$purchase->amount}
						&nbsp;
						<a href="#" class="icon-remove-sign" onclick="remove_item_cart('{$purchase->variant->id}'); return false" title="Удалить"></a>
					</span>
				</div>
				<div class="price">
					<strong id="total_cost_informer_{$purchase->variant->id}">{($purchase->variant->price*$purchase->amount)|convert} {$currency->sign}</strong>
				</div>
			</div>
			{/foreach}
		</div>
		<div class="item-in-cart summary clearfix" id="item-in-cart-{$purchase->variant->id}">
			<div class="image">&nbsp;</div>
			<div class="desc">Итого:</div>
			<div class="price">
				<strong class="size-16">{$cart->total_price|convert}&nbsp;{$currency->sign|escape}</strong>
			</div>
		</div>

		<div class="proceed">
			<a href="./cart" class="btn btn-danger pull-right bold higher">Оформить заказ <i class="icon-shopping-cart"></i></a>
		</div>
	</div>
{else}
	<div class="cart">
		<p class="items">Корзина <span class="dark-clr">({$cart->total_products})</span></p>
		<p class="dark-clr hidden-tablet">{$cart->total_price|convert} {$currency->sign|escape}</p>
		<a href="./cart" class="btn btn-danger">
			<i class="icon-shopping-cart"></i>
		</a>
	</div>

	<div class="open-panel">
		<div class="item-in-cart clearfix">
			<p class="empty">В корзине нет товаров.</p>
		</div>
	</div>
{/if}