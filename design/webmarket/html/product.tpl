{* Страница товара *}

{* Канонический адрес страницы *}
{$canonical="/products/{$product->url}" scope=parent}

<div class="darker-stripe">
	<div class="container">
		<div class="row">
			<div class="span12">
				<ul class="breadcrumb">
					<li><a href="./">Главная</a></li>
					{foreach from=$category->path item=cat}
						<li><span class="icon-chevron-right"></span></li>
						<li><a href="catalog/{$cat->url}">{$cat->name|escape}</a></li>
					{/foreach}
					{if $brand}
						<li><span class="icon-chevron-right"></span></li>
						<li><a href="catalog/{$cat->url}/{$brand->url}">{$brand->name|escape}</a></li>
					{/if}
					<li><span class="icon-chevron-right"></span></li>
					<li>{$product->name|escape}</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="push-up top-equal blocks-spacer">
		<div class="row blocks-spacer">
			<div class="span5">
				<div class="product-preview">
					{if $product->image}
					<div class="picture">
						<img src="{$product->image->filename|resize:470:470}" alt="{$product->product->name|escape}" id="mainPreviewImg" />
					</div>
					{/if}
	
					{if $product->images|count>1}
					<div class="thumbs clearfix">
						{foreach $product->images as $i=>$image}
						<div class="thumb{if $image@first} active{/if}">
							<a href="#mainPreviewImg"><img src="{$image->filename|resize:470:470}" alt="{$product->name|escape}" /></a>
						</div>
						{/foreach}
					</div>
					{/if}
				</div>
			</div>

			<div class="span7">
				<div class="product-title">
					<h1 class="name" data-product="{$product->id}">{$product->name|escape}</h1>
					<div class="meta">
						<span class="tag">
							<span class="striked red-clr">{if $product->variant->compare_price > 0}{$product->variant->compare_price|convert}{/if}</span> 
							
							{if $product->variants|count > 0}
							<span class="v_price">{$product->variant->price|convert}</span> {$currency->sign|escape}
							{else}
							<span class="v_price out_of_stock">Нет в наличии</span>
							{/if}
						</span>
					</div>
				</div>
				<div class="product-description">
					{$product->annotation}

					<hr />

					{if $product->variants|count > 0}
					<form action="/cart" class="form form-inline clearfix variants">
						<div class="numbered">
							<input type="text" name="amount" value="1" maxlength="2" class="tiny-size" />
							<span class="clickable add-one icon-plus-sign-alt"></span>
							<span class="clickable remove-one icon-minus-sign-alt"></span>
						</div>
						&nbsp;
						<select name="variant" class="span2{if $product->variants|count==1 || !$product->variant->name} hidden{/if}">
							{foreach $product->variants as $v}
							<option value="{$v->id}" {if $v->compare_price > 0}data-compare_price="{$v->compare_price|convert}"{/if} data-price="{$v->price|convert}">{$v->name}</option>
							{/foreach}
						</select>
						
						<button class="btn btn-danger pull-right"><i class="icon-shopping-cart"></i> &nbsp; Добавить в корзину</button>
					</form>
					
					<hr />
					{/if}

					<div class="share-item push-down-20">
						<div class="row-fluid">
							<div class="span6 title">
								Поделитесь с друзьями:
							</div>
							
							<div class="span6">
								<div class="social-networks">
									<script type="text/javascript">
									(function() {
									  if (window.pluso)if (typeof window.pluso.start == "function") return;
									  if (window.ifpluso==undefined) { window.ifpluso = 1;
										var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
										s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
										s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
										var h=d[g]('body')[0];
										h.appendChild(s);
									  }})();
									</script>
									<div class="pluso" data-background="transparent" data-options="small,round,line,horizontal,counter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="span12">
				<ul id="myTab" class="nav nav-tabs">
					{if $product->body}
					<li{if !$error} class="active"{/if}><a href="#tab-1" data-toggle="tab">Описание</a></li>
					{/if}
					
					{if $product->features}
					<li{if !$product->body && !$error} class="active"{/if}><a href="#tab-2" data-toggle="tab">Характеристики</a></li>
					{/if}
					
					<li{if (!$product->body && !$product->features) || $error} class="active"{/if}><a href="#tab-3" data-toggle="tab">Комментарии</a></li>
				</ul>
				
				<div class="tab-content">
					{if $product->body}
					<div class="fade tab-pane{if !$error} in active{/if}" id="tab-1">
						{$product->body}
					</div>
					{/if}
					
					{if $product->features}
					<div class="fade tab-pane{if !$product->body && !$error} in active{/if}" id="tab-2">
						<table class="table table-theme table-striped">
							{foreach $product->features as $f}
							<tr>
								<td>{$f->name}</td>
								<td>{$f->value}</td>
							</tr>
							{/foreach}
            	       </table>
					</div>
					{/if}
					
					<div class="fade tab-pane{if (!$product->body && !$product->features) || $error} in active{/if}" id="tab-3">
						<section id="comments" class="comments-container">
							{if $comments}
								{foreach $comments as $comment}
								<div class="single-comment clearfix">
									<div class="avatar-container">
										<img src="design/{$settings->theme}/images/avatar_dummy.gif" alt="avatar" class="avatar"  />
									</div>
									<div class="comment-content">
										<div class="comment-inner">
											<cite class="author-name">
												<span class="light">{$comment->name|escape}</span>{if !$comment->approved}, ожидает модерации{/if}
											</cite>
											<div class="metadata">
												{$comment->date|date}, {$comment->date|time}
											</div>
											<div class="comment-text">
												{$comment->text|escape|nl2br}
											</div>
										</div>
									</div>
								</div>
								{/foreach}
							{/if}
							
							<h3 class="push-down-25"><span class="light">Написать</span> комментарий</h3>

							<form id="commentform" method="post" class="form form-inline form-comments">
								{if $error}
									<div class="alert alert-danger in fade">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										{if $error=='captcha'}
										Неверно введена капча
										{elseif $error=='empty_name'}
										Введите имя
										{elseif $error=='empty_comment'}
										Введите комментарий
										{/if}
									</div>
									
									<script>
										$(document).ready(function (){
											scroll2error();
										})
									</script>
								{/if}

								<p class="push-down-20">
									<input type="text" aria-required="true" tabindex="1" size="30" id="comment_name" name="name" value="{$comment_name}" required/>
									<label for="comment_name">Имя<span class="red-clr bold">*</span></label>
								</p>

								<p class="push-down-20" style="position: relative">
									<img src="captcha/image.php?{math equation='rand(10,10000)'}" alt='captcha' style="position: absolute; max-height: 33px; top: 2px; left: 161px; border-radius: 3px"/>
									<input type="text" aria-required="true" tabindex="2" size="30" id="comment_captcha" name="captcha_code" value="" required/>
									<label for="captcha_code">Число<span class="red-clr bold">*</span></label>
								</p>

								<p class="push-down-20">
									<textarea class="input-block-level" tabindex="3" rows="7" cols="70" id="comment" name="text" placeholder="Ваш коментарий ..." required>{$comment_text}</textarea>
								</p>

								<p>
									<input class="btn btn-primary bold" type="submit" tabindex="4" name="comment" id="submit" value="Отправить" />
								</p>
							</form>
						 </section>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

{if $related_products}
<div class="boxed-area no-bottom">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="main-titles lined">
					<h2 class="title"><span class="light">Так же</span> советуем посмотреть</h2>
				</div>
			</div>
		</div>

		<div class="row popup-products">
			{foreach $related_products as $product}
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
								
								{if $product->variant->stock > 0}
								<span class="v_price">{$product->variant->price|convert}</span> {$currency->sign|escape}
								{else}
								<span class="v_price">Нет в наличии</span>
								{/if}
							</h4>
							<h5 class="no-margin"><a data-product="{$product->id}" href="products/{$product->url}">{$product->name|escape}</a></h5>
						</div>
						
						<p class="desc">{$product->annotation|truncate:100}</p>
					</div>
					<div class="product-cover"></div>
				</div>
			</div>
			{/foreach}
		</div>
	</div>
</div>
{/if}