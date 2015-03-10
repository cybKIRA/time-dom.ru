<footer>
	<div class="foot-light">
		<div class="container">
			<div class="row">
				<div class="span4">
					<h2 class="pacifico">Webmarket &nbsp; <img src="design/{$settings->theme}/images/webmarket.png" alt="Webmarket Cart" class="align-baseline" /></h2>
					<p>Этот магазин является демонстрацией скрипта интернет-магазина <a href="http://simplacms.ru">Simpla</a>. Все материалы на этом сайте присутствуют исключительно в демострационных целях.</p>
				</div>
				
				<div class="span4">
					<div class="main-titles lined">
						<h3 class="title">Facebook</h3>
					</div>
					
					<div class="bordered">
						<div class="fill-iframe">
							<div class="fb-like-box" data-href="https://www.facebook.com/ProteusNet" data-width="292" data-height="200" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
						</div>
					</div>
				</div>
				
				<div class="span4">
					<div class="main-titles lined">
						<h3 class="title"><span class="light">Новостная</span> рассылка</h3>
					</div>
					
					<p>Получайте первыми информацию о наших новых продуктах, специальных предложениях и акциях.</p>
					
					<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">
						<form action="http://proteusthemes.us4.list-manage1.com/subscribe/post?u=ea0786485977f5ec8c9283d5c&amp;id=5dad3f35e9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form form-inline" target="_blank" novalidate>
							<div class="mc-field-group">
								<input type="email" value="" placeholder="Введите ваш email" name="EMAIL" class="required email" id="mce-EMAIL">
								<input type="submit" value="Отправить" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">
							</div>
							
							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>
						</form>
					</div>
					<!--End mc_embed_signup-->
				</div>
			</div>
		</div>
	</div>

	<div class="foot-dark">
		<div class="container">
			<div class="row">
				<!-- Menu 1 -->
				<div class="span3">
					<div class="main-titles lined">
						<h3 class="title"><span class="light">Webmarket</span></h3>
					</div>
					<ul class="nav bold">
						{foreach $pages as $p}
							{if $p->menu_id == 1}
								<li><a data-page="{$p->id}" href="{$p->url}">{$p->name|escape}</a></li>
							{/if}
						{/foreach}
					</ul>
				</div>

				<!-- Menu 2 -->
				<div class="span3">
					<div class="main-titles lined">
						<h3 class="title"><span class="light">Акции и</span> скидки</h3>
					</div>
					<ul class="nav">
						<li><a href="#">Акции</a></li>
						<li><a href="#">Товары дня</a></li>
						<li><a href="#">Новинки</a></li>
						<li><a href="#">Уцененные товары</a></li>
						<li><a href="#">Скидки</a></li>
					</ul>
				</div>

				<!-- Menu 3 -->
				<div class="span3">
					<div class="main-titles lined">
						<h3 class="title"><span class="light">Сервисы</span></h3>
					</div>
					<ul class="nav">
						<li><a href="#">Помощь</a></li>
						<li><a href="#">Новости</a></li>
						<li><a href="#">Обзоры</a></li>
						<li><a href="#">Пресс-центр</a></li>
						<li><a href="#">Сотрудничество</a></li>
						<li><a href="#">Реклама на сайте</a></li>
					</ul>
				</div>

				<!-- Menu 4 -->
				<div class="span3">
					<div class="main-titles lined">
						<h3 class="title"><span class="light">Мы в</span> социальных сетях</h3>
					</div>
					<ul class="nav">
						<li><a href="#">foursquare</a></li>
						<li><a href="#">Google+</a></li>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">ВКонтакте</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="foot-last">
		<a href="#" id="toTheTop">
			<span class="icon-chevron-up"></span>
		</a>
		
		<div class="container">
			<div class="row">
				<div class="span6">
					&copy; Copyright 2014. Адаптация для Simpla CMS — <a target="_blank" href="http://chocolatemol.es/">chocolate_moles</a>.
				</div>
				<div class="span6">
					<div class="pull-right">Webmarket HTML Шаблон от <a target="_blank" href="http://www.proteusthemes.com">ProteusThemes</a></div>
				</div>
			</div>
		</div>
	</div>
</footer>