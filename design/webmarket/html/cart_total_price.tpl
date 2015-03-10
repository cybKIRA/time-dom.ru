{if !$delivery_id} {$delivery_id = 1} {/if}

{if $cart->total_price < $deliveries[$delivery_id - 1]->free_from && $deliveries[$delivery_id - 1]->price>0}
	{($cart->total_price + $deliveries[$delivery_id - 1]->price)|convert}&nbsp;{$currency->sign}
{elseif $cart->total_price >= $deliveries[$delivery_id - 1]->free_from}
	{$cart->total_price|convert}&nbsp;{$currency->sign}
{/if}