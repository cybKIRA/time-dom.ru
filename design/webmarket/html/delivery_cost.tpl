{if !$delivery_id} {$delivery_id = 1} {/if}

{if $cart->total_price < $deliveries[$delivery_id - 1]->free_from && $deliveries[$delivery_id - 1]->price>0}
	{$deliveries[$delivery_id - 1]->price|convert}&nbsp;{$currency->sign}
{elseif $cart->total_price >= $deliveries[$delivery_id - 1]->free_from}
	бесплатно
{/if}