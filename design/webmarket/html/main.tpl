{* Главная страница магазина *}

{* Канонический адрес страницы *}
{$canonical="" scope=parent}

{include file = 'slider.tpl'}

<div class="container">
	<div class="row">
		<div class="span12">
			<div class="push-up over-slider blocks-spacer">
				<div class="row">
					<div class="span4">
						<a href="#" class="btn btn-block banner">
							<span class="title"><span class="light">ЛЕТННЯЯ</span> РАСПРОДАЖА</span>
							<em>скидки до 60% на все</em>
						</a>
					</div>
					<div class="span4">
						<a href="#" class="btn btn-block colored banner">
							<span class="title"><span class="light">БЕСПЛАТНАЯ</span> ДОСТАВКА</span>
							<em>при заказе от 2000р</em>
						</a>
					</div>
					<div class="span4">
						<a href="#" class="btn btn-block banner">
							<span class="title"><span class="light">НОВЫЕ</span> ПОСТУПЛЕНИЯ</span>
							<em>Принимаем к оплате кредитные карты</em>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	{get_featured_products var=featured_products}
	{if $featured_products}
	<div class="row featured-items blocks-spacer">
		<div class="span12">
			<div class="main-titles lined">
				<h2 class="title"><span class="light">Рекомендуемые</span> товары</h2>
				<div class="arrows">
					<a href="#" class="icon-chevron-left" id="featuredItemsLeft"></a>
					<a href="#" class="icon-chevron-right" id="featuredItemsRight"></a>
				</div>
			</div>
		</div>

		<div class="span12">
			<div class="carouFredSel" data-autoplay="false" data-nav="featuredItems">
				{foreach $featured_products as $product}
				{if $product@first || ($product@iteration - 1) is div by 4}
				<div class="slide">
					<div class="row">
					{/if}
						<div class="span3">
							<div class="product">
    	            	        <div class="product-img ">
    	            	            <div class="picture">
    	            	        	    <a href="products/{$product->url}">
											{if $product->image}
											<img src="{$product->image->filename|resize:200:200}" alt="{$product->name|escape}"/>
											{else}
											<img src="design/{$settings->theme}/images/no_image.png" alt="{$product->name|escape}"/>
											{/if}
										</a>

										{if $product->variants|count > 0}
    	            	        		<div class="img-overlay{if $product->variants|count > 1} with_select{/if}">
											<form class="variants" action="/cart">
												<select name="variant" class="span2" {if $product->variants|count==1 || !$product->variant->name}style='display:none;'{/if}>
													{foreach $product->variants as $v}
													<option value="{$v->id}" {if $v->compare_price > 0}data-compare_price="{$v->compare_price|convert}"{/if} data-price="{$v->price|convert}">{$v->name}</option>
													{/foreach}
												</select>
												
												<a href="products/{$product->url}" class="btn more btn-primary">Подробнее</a>

												<input type="submit" class="btn buy btn-danger" value="в корзину" data-result-text="добавлено"/>
											</form>
    	            	        		</div>
										{/if}
    	            	            </div>
    	            	        </div>
								<div class="main-titles">
									<h4 class="title">
										<span class="striked red-clr">{if $product->variant->compare_price > 0}{$product->variant->compare_price|convert}{/if}</span> 
										
										{if $product->variants|count > 0}
										<span class="v_price">{$product->variant->price|convert}</span> {$currency->sign|escape}
										{else}
										<span class="v_price out_of_stock">Нет в наличии</span>
										{/if}
									</h4>
									
									<h5 class="no-margin"><a data-product="{$product->id}" href="products/{$product->url}">{$product->name|escape}</a></h5>
    	            	        </div>
    	            	        <p class="desc">{$product->annotation|truncate:100}</p>
    	            	    </div>
						</div>
					{if $product@last || $product@iteration is div by 4}
					</div>
				</div>
				{/if}
				{/foreach}
			</div>
		</div>
	</div>
	{/if}
</div>

{get_new_products var=new_products limit=8}
{if $new_products}
<div class="boxed-area blocks-spacer">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="main-titles lined">
					<h2 class="title"><span class="light">Новые</span> товары</h2>
				</div>
			</div>
		</div>

		<div class="row popup-products blocks-spacer">
			{foreach $new_products as $product}
			<div class="span3">
				<div class="product">
				   <div class="product-inner">
						<div class="product-img">
							<div class="picture">
								<a href="products/{$product->url}">
									{if $product->image}
									<img src="{$product->image->filename|resize:200:200}" alt="{$product->name|escape}"/>
									{else}
									<img src="design/{$settings->theme}/images/no_image.png" alt="{$product->name|escape}"/>
									{/if}
								</a>
								
								{if $product->variants|count > 0}
								<div class="img-overlay{if $product->variants|count > 1} with_select{/if}">
									<form class="variants" action="/cart">
										<select name="variant" class="span2" {if $product->variants|count==1 && !$product->variant->name}style='display:none;'{/if}>
											{foreach $product->variants as $v}
											<option value="{$v->id}" {if $v->compare_price > 0}data-compare_price="{$v->compare_price|convert}"{/if} data-price="{$v->price|convert}">{$v->name}</option>
											{/foreach}
										</select>
										
										<a href="products/{$product->url}" class="btn more btn-primary">Подробнее</a>

										<input type="submit" class="btn buy btn-danger" value="в корзину" data-result-text="добавлено"/>
									</form>
								</div>
								{/if}
							</div>
						</div>
						
						<div class="main-titles no-margin">
							<h4 class="title">
								<span class="striked red-clr">{if $product->variant->compare_price > 0}{$product->variant->compare_price|convert}{/if}</span> 
								
								{if $product->variants|count > 0}
								<span class="v_price">{$product->variant->price|convert}</span> {$currency->sign|escape}
								{else}
								<span class="v_price out_of_stock">Нет в наличии</span>
								{/if}
							</h4>
							<h5 class="no-margin"><a data-product="{$product->id}" href="products/{$product->url}">{$product->name|escape}</a></h5>
						</div>
						
						<p class="desc">{$product->annotation|truncate:100}</p>
					</div>
					<div class="product-cover"></div>
				</div>
			</div>
			{if $product@iteration is div by 4}<div class="clearfix"></div>{/if}
			{/foreach}
		</div>
	</div>
</div>
{/if}

{get_discounted_products var=discounted_products limit=4}
{if $discounted_products}
<div class="most-popular blocks-spacer">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="main-titles lined">
					<h2 class="title"><span class="light">Акционные</span> товары</h2>
				</div>
			</div>
		</div>

		<div class="row popup-products blocks-spacer">
			{foreach $discounted_products as $product}
			<div class="span3">
				<div class="product">
					<div class="product-inner">
						<div class="product-img">
							<div class="picture">
								<a href="products/{$product->url}">
									{if $product->image}
									<img src="{$product->image->filename|resize:200:200}" alt="{$product->name|escape}"/>
									{else}
									<img src="design/{$settings->theme}/images/no_image.png" alt="{$product->name|escape}"/>
									{/if}
								</a>
								
								{if $product->variants|count > 0}
								<div class="img-overlay{if $product->variants|count > 1} with_select{/if}">
									<form class="variants" action="/cart">
										<select name="variant" class="span2" {if $product->variants|count==1 && !$product->variant->name}style='display:none;'{/if}>
											{foreach $product->variants as $v}
											<option value="{$v->id}" {if $v->compare_price > 0}data-compare_price="{$v->compare_price|convert}"{/if} data-price="{$v->price|convert}">{$v->name}</option>
											{/foreach}
										</select>
										
										<a href="products/{$product->url}" class="btn more btn-primary">Подробнее</a>

										<input type="submit" class="btn buy btn-danger" value="в корзину" data-result-text="добавлено"/>
									</form>
								</div>
								{/if}
							</div>
						</div>
						
						<div class="main-titles no-margin">
							<h4 class="title">
								<span class="striked red-clr">{if $product->variant->compare_price > 0}{$product->variant->compare_price|convert}{/if}</span> 
								
								{if $product->variants|count > 0}
								<span class="v_price">{$product->variant->price|convert}</span> {$currency->sign|escape}
								{else}
								<span class="v_price out_of_stock">Нет в наличии</span>
								{/if}
							</h4>
							
							<h5 class="no-margin"><a data-product="{$product->id}" href="products/{$product->url}">{$product->name|escape}</a></h5>
						</div>
						
						<p class="desc">{$product->annotation|truncate:100}</p>
					</div>
				</div>
			</div>
			{if $product@iteration is div by 4}<div class="clearfix"></div>{/if}
			{/foreach}
		</div>
	</div>
</div>
{/if}	