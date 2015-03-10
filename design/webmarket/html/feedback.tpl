{* Страница с формой обратной связи *}

{* Канонический адрес страницы *}
{$canonical="/{$page->url}" scope=parent}

 <div class="darker-stripe">
	<div class="container">
		<div class="row">
			<div class="span12">
				<ul class="breadcrumb">
					<li>
						<a href="index.html">Webmarket</a>
					</li>
					<li><span class="icon-chevron-right"></span></li>
					<li>
						<a href="contact.html">Contact Us</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="push-up top-equal blocks-spacer-last">
		<div class="row">
			<div class="span12">
				<div class="title-area">
					<h1 class="inline">{$page->header|regex_replace:"/^(.+?\s)/":"<span class='light'>$1</span>"}</h1>
				</div>
			</div>

			<section class="span8 single single-page">
				<article class="post">
					<div class="post-inner">
						{$page->body}
					</div>
				</article>
				
				<hr />
				
				<section class="contact-form-container">
					<h3 class="push-down-25"><span class="light">Обратная</span> связь</h3>
					
					{if $message_sent}
						<div class="alert alert-success in fade">
							{$name|escape}, ваше сообщение отправлено.
						</div>
					{else}
						<form class="form form-inline form-comments" method="post">
							{if $error}
								<div class="alert alert-danger in fade">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								{if $error=='captcha'}
								Неверно введена капча
								{elseif $error=='empty_name'}
								Введите имя
								{elseif $error=='empty_email'}
								Введите email
								{elseif $error=='empty_text'}
								Введите сообщение
								{/if}
								</div>
							{/if}

							<p class="push-down-20">
								<input type="text" aria-required="true" tabindex="1" size="30" id="comment_name" name="name" value="{$comment_name}" required/>
								<label for="comment_name">Имя<span class="red-clr bold">*</span></label>
							</p>
							
							<p class="push-down-20">
								<input type="email" aria-required="true" tabindex="2" size="30" value="{$email|escape}" id="email" name="email" required>
								<label for="email">Mail<span class="red-clr bold">*</span></label>
							</p>

							<p class="push-down-20" style="position: relative">
								<img src="captcha/image.php?{math equation='rand(10,10000)'}" alt='captcha' style="position: absolute; max-height: 33px; top: 2px; left: 161px; border-radius: 3px"/>
								<input type="text" aria-required="true" tabindex="3" size="30" id="comment_captcha" name="captcha_code" value="" required/>
								<label for="captcha_code">Число<span class="red-clr bold">*</span></label>
							</p>
							
							<p class="push-down-20">
								<textarea class="input-block-level" tabindex="4" rows="7" cols="70" id="comment" name="message" placeholder="Ваше сообщение ..." required>{$message|escape}</textarea>
							</p>
							
							<input class="btn btn-primary bold" type="submit" tabindex="5" name="feedback" value="Отправить" />
						</form>
					{/if}
				</section>
				
				<hr />
				
				<!--  = Company Info with Google Maps =  -->
				<article class="company-info">
					<div class="row">
						<div class="span3">
							<h3 class="push-down-30"><span class="light">Информация</span> о компании</h3>
								
							<p>
								<strong class="opensans dark-clr">IMAGINARY COMPANY LTD.</strong>
								<br />
								Новосибирск,
								<br />
								Кутузова 5/1,
								<br />
								офис 487
							</p>

							<p>
								<strong class="opensans dark-clr">Телефон:</strong> 00386 31 567 537
								<br />
								<strong class="opensans dark-clr">Факс:</strong> 00386 31 567 538
								<br />
								<strong class="opensans dark-clr">Email:</strong> <a href="#">info@webmarket.com</a>
							</p>
						</div>
						
						<div class="span5">
							<div class="add-googlemap" data-height="205" data-addr="Новосибирск Кутузова 5/1" data-title="Webmarket Business" data-zoom="12" data-type="roadmap"></div>
						</div>
					</div>

				</article>

			</section>
			
			<aside class="span4">
				<div class="sidebar-item opening-time" id="opening_time-4">
					<div class="underlined">
						<h3><span class="light">Часы</span> работы</h3>
					</div>
					
					<div class="time-table">
						<dl class="week-day{if $smarty.now|date_format:'%w' == 1} today{/if}">
							<dt>Понедельник</dt>
							<dd>8:00 - 16:00</dd>
						</dl>
						<dl class="week-day light-bg{if $smarty.now|date_format:'%w' == 2} today{/if}">
							<dt>Вторник</dt>
							<dd>8:00 - 16:00</dd>
						</dl>
						<dl class="week-day{if $smarty.now|date_format:'%w' == 3} today{/if}">
							<dt>Среда</dt>
							<dd>8:00 - 16:00</dd>
						</dl>
						<dl class="week-day light-bg{if $smarty.now|date_format:'%w' == 4} today{/if}">
							<dt>Четверг</dt>
							<dd>10:00 - 15:00</dd>
						</dl>
						<dl class="week-day{if $smarty.now|date_format:'%w' == 5} today{/if}">
							<dt>Пятница</dt>
							<dd>8:00 - 16:00</dd>
						</dl>
						<dl class="week-day light-bg{if $smarty.now|date_format:'%w' == 6} today{/if}">
							<dt>Суббота</dt>
							<dd>8:00 - 16:00</dd>
						</dl>
						<dl class="week-day closed{if $smarty.now|date_format:'%w' == 0} today{/if}">
							<dt>Воскресенье</dt>
							<dd>Выходной</dd>
						</dl>
					</div>
				</div>
				
				<!--  = Twitter Widget =  -->
				<div class="sidebar-item widget_twitter">
					<div class="underlined">
						<h3><span class="light">Twitter</span> Feed</h3>
					</div>
					
					<a class="twitter-timeline"  href="https://twitter.com/primozcigler"  data-widget-id="361435057526800385">Tweets by @primozcigler</a>
					{literal}
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					{/literal}
				</div>
			</aside>
		</div>
	</div>
</div>