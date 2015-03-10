{* Список товаров *}

{* Канонический адрес страницы *}
{if $category && $brand}
{$canonical="/catalog/{$category->url}/{$brand->url}" scope=parent}
{elseif $category}
{$canonical="/catalog/{$category->url}" scope=parent}
{elseif $brand}
{$canonical="/brands/{$brand->url}" scope=parent}
{elseif $keyword}
{$canonical="/products?keyword={$keyword|escape}" scope=parent}
{else}
{$canonical="/products" scope=parent}
{/if}

<div class="darker-stripe">
	<div class="container">
		<div class="row">
			<div class="span12">
				<ul class="breadcrumb">
					<li><a href="/">Главная</a></li>
					{if $category}
					{foreach from=$category->path item=cat}
						<li><span class="icon-chevron-right"></span></li>
						<li><a href="catalog/{$cat->url}">{$cat->name|escape}</a></li>
					{/foreach}  
					{if $brand}
						<li><span class="icon-chevron-right"></span></li>
						<li><a href="catalog/{$cat->url}/{$brand->url}">{$brand->name|escape}</a></li>
					{/if}
					{elseif $brand}
						<li><span class="icon-chevron-right"></span></li> 
						<li><a href="brands/{$brand->url}">{$brand->name|escape}</a></li>
					{elseif $keyword}
						<li><span class="icon-chevron-right"></span></li>
						<li>Поиск</li>
					{/if}
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="push-up blocks-spacer">
		<div class="row">
			{if $products}
			<aside class="span3 left-sidebar" id="tourStep1">
				<div class="sidebar-item sidebar-filters" id="sidebarFilters">
					<div class="underlined">
						<h3><span class="light">Фильтр</span> товаров</h3>
					</div>

					{if $category->subcategories}
					<div class="accordion-group" id="tourStep2">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" href="#filterOne">Категория <b class="caret"></b></a>
						</div>
						<div id="filterOne" class="accordion-body collapse in">
							<div class="accordion-inner">
								{foreach $category->subcategories as $c}
									{if $c->visible}
										<a href="#" data-target=".cat_{$c->id}" class="selectable"><i class="box"></i> {$c->name}</a>
									{/if}
								{/foreach}
							</div>
						</div>
					</div>
					{/if}
					
					
                 
                 <div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" href="#filterPrices">Цена <b class="caret"></b></a>
						</div>
						<div id="filterPrices" class="accordion-body in collapse">
							<div class="accordion-inner with-slider">
								<div class="jqueryui-slider-container">
									<div id="pricesRange"></div>
								</div>
								<input type="text"  class="max-val pull-right" disabled />
								<input type="text" class="min-val" disabled />

								{* Настройки фильтра в зависимости от выбранной валюты *}								
								<input type="hidden" value="{$minprice|convert|regex_replace:'/[ ]/':''}" id="f_minPrice">
								<input type="hidden" value="{$maxprice|convert|regex_replace:'/[ ]/':''}" id="f_maxPrice">

								{if $currency->code == 'RUB'}
									<input type="hidden" value="false" id="f_currencyBefore">
									<input type="hidden" value="100" id="f_priceStep">
									<input type="hidden" value=" Руб." id="f_currencySymbol">
								{else}
									<input type="hidden" value="true" id="f_currencyBefore">
									<input type="hidden" value="10" id="f_priceStep">
									<input type="hidden" value="$" id="f_currencySymbol">
								{/if}
							</div>
						</div>
					</div>
                 
                 

					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" href="#stock">Есть в наличии<b class="caret"></b></a>
						</div>
						<div id="stock" class="accordion-body in">
							<div class="accordion-inner">
								<a href="#" data-target="in" data-type="stock"  class="selectable detailed"><i class="box"></i> Да</a>
							</div>
						</div>
					</div>
					
					{if $features}
					{foreach $features as $f}
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" href="#filter_{$f->id}">{$f->name} <b class="caret"></b></a>
						</div>
						<div id="filter_{$f->id}" class="accordion-body in">
							<div class="accordion-inner">
								{foreach $f->options as $o}
									<a href="#" data-target="{$o->value|escape:'url'|regex_replace:'/[^a-zA-ZА-Яа-я0-9\s]/':''}" data-type="f{$f->id}"  class="selectable detailed"><i class="box"></i> {$o->value|escape}</a>
								{/foreach}
							</div>
						</div>
					</div>
					{/foreach}
					{/if}
					
					{if $category->brands}
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle collapsed" data-toggle="collapse" href="#filterBrand">Производитель <b class="caret"></b></a>
						</div>
						<div id="filterBrand" class="accordion-body collapse">
							<div class="accordion-inner">
								{foreach name=brands item=b from=$category->brands}
								<a href="#" data-target="brand_{$b->id}" data-type="brand" class="selectable detailed"><i class="box"></i> {$b->name|escape}</a>
								{/foreach}
							</div>
						</div>
					</div>
					{/if}

					<a href="#" class="remove-filter" id="removeFilters"><span class="icon-ban-circle"></span> Очистить фильтр</a>
				</div>
			</aside>
			
			<section class="span9">
				<div class="underlined push-down-20">
					<div class="row">
						<div class="span4">
							{if $keyword}
							<h3><span class="light">Поиск</span> {$keyword|escape}</h3>
							{elseif $page}
							<h3>{$page->name|escape}</h3>
							{else}
							<h3>{$category->name|escape} {$brand->name|escape} {$keyword|escape}</h3>
							{/if}
						</div>
						
						<div class="span5 align-right sm-align-left">
							<div class="form-inline sorting-by" id="tourStep4">
								<label for="isotopeSorting" class="black-clr">Сортировать:</label>
								{literal}
								<select id="isotopeSorting" class="span3">
									<option value='{"sortBy":"original", "sortAscending":"true"}' selected>По умолчанию</option>
									<option value='{"sortBy":"price", "sortAscending":"true"}'>По цене &uarr;</option>
									<option value='{"sortBy":"price", "sortAscending":"false"}'>По цене &darr;</option>
									<option value='{"sortBy":"name", "sortAscending":"true"}'>По названию &uarr;</option>
									<option value='{"sortBy":"name", "sortAscending":"false"}'>По названию &darr;</option>
								</select>
								{/literal}
							</div>
						</div>
					</div>
				</div>

				<div class="noResultsContainer">
				   <div class="alert in fade">
						Заданным характеристикам не соответствует ни одна модель
					</div>
				</div>
				
				<div class="row popup-products">
					<div id="isotopeContainer" class="isotope-container grid">
						{foreach $products as $product}
						<div class="span3 isotope--target cat_{$product->category->id}" 
								
                                {if $currency->code == 'RUB'}
									data-price="{if $product->variants|count > 0}{$product->variant->price|convert|regex_replace:'/[ ]/':''}{else}{$minprice|convert|regex_replace:'/[ ]/':''}{/if}" 
								
                                {else}                                
                                   data-price="{if $product->variants|count > 0}{$product->variant->price|convert|regex_replace:'/[ ]/':''|substr:0:-3}{else}{$minprice|convert|regex_replace:'/[ ]/':''|substr:0:-3}{/if}" 
								
                                {/if}
                             
                             
                             
								data-name="{$product->name|escape}"
								data-brand="brand_{$product->brand_id}"
								data-stock="{if $product->variants|count > 0}in{else}out{/if}"
								{if $product->options}
									{foreach $product->options as $f}
									data-f{$f->feature_id}="{$f->value|escape:'url'|regex_replace:'/[^a-zA-ZА-Яа-я0-9\s]/':''}"
									{/foreach}
								{/if}
						>
							<div class="product">
								<div class="product-inner">
									{if $product->featured}
										<div class="stamp green">Хит</div>
									{/if}
									
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
													<select name="variant" class="span2" {if $product->variants|count==1 || !$product->variant->name}style='display:none;'{/if}>
														{foreach $product->variants as $v}
														<option value="{$v->id}" {if $v->compare_price > 0}data-compare_price="{$v->compare_price|convert}"{/if} data-price="{$v->price|convert}">{$v->name}</option>
														{/foreach}
													</select>
													
													<a href="products/{$product->url}" class="btn more btn-primary">Подробнее</a>

													<input type="submit" class="btn buy btn-danger" value="В корзину" data-result-text="Добавлено"/>
												</form>
											</div>
											{/if}
										</div>
									</div>
									
									<div class="main-titles no-margin">
										<h4 class="title">
											<span class="striked red-clr">{if $product->variant->compare_price > 0}{$product->variant->compare_price|convert}{/if}</span> 
											
											{if $product->variant->stock > 0}
											<span class="v_price">{$product->variant->price|convert}</span> {$currency->sign|escape}
											{else}
											<span class="v_price out_of_stock">Нет в наличии</span>
											{/if}
										</h4>
										
										<h5 class="no-margin"><a data-product="{$product->id}" href="products/{$product->url}">{$product->name|escape}</a></h5>
									</div>
								</div>
								<div class="product-cover"></div>
							</div>
						</div>
						{/foreach}
					</div>
				</div>
				
				<hr />

				<div class="pagination">
					<input type="hidden" id="current_page" value="1">
					<input type="hidden" id="total_pages_num" value="{$total_pages_num}">
					
					{if $current_page_num<$total_pages_num}
						<a class="btn btn-primary next_page_link push-down-20" href="{url page=$current_page_num+1}">Показать больше товаров</a>
					{/if}
				</div>
			</section>
			
			{else}
			
			<section class="span12">
				<div class="underlined push-down-20">
					<div class="row">
						<div class="span12">
							<h3>{$category->name|escape} {$brand->name|escape} {$keyword|escape}</h3>
						</div>
					</div>
				</div>

				<div class="alert in fade">
					Товары не найдены
				</div>
			</section>
			{/if}	
		</div>			
	</div>			
</div>