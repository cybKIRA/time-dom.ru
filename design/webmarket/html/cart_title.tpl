{if $cart->purchases}
	<span class="light">В корзине</span> {$cart->total_products} {$cart->total_products|plural:'товар':'товаров':'товара'}
{else}
	<span class="light">Корзина</span> пуста
{/if}