{foreach $deliveries as $delivery}
<div class="accordion-group accordion-style-2 {if $delivery_id}{if $delivery_id==$delivery->id} open{else} closed{/if}{else}{if $delivery@first} open{else} closed{/if}{/if}">
	<div class="accordion-heading">
		<label for="deliveries_{$delivery->id}" class="accordion-toggle push-down-0">
			<div class="pull-right">{if $cart->total_price < $delivery->free_from && $delivery->price>0}{$delivery->price|convert}&nbsp;{$currency->sign}{elseif $cart->total_price >= $delivery->free_from}бесплатно{/if}</div>
			<input type="radio" name="delivery_id" value="{$delivery->id}" data-price="{$delivery->price|convert}" {if $delivery_id==$delivery->id}checked{elseif $delivery@first}checked{/if} id="deliveries_{$delivery->id}">
			<i class="box"></i> {$delivery->name} 
		</label>
	</div>
	
	<div class="accordion-body" {if $delivery_id}{if $delivery_id!=$delivery->id}style='display: none'{/if}{else}{if !$delivery@first}style='display: none'{/if}{/if}>
		<div class="accordion-inner">
			{$delivery->description}
		</div>
	</div>
</div>
{/foreach}
