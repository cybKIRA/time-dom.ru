<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
	<base href="{$config->root_url}/" />
	<title>{$meta_title|escape}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{$meta_description|escape}">
	<meta name="keywords"    content="{$meta_keywords|escape}">
	
	{* Канонический адрес страницы *}
	{if isset($canonical)}<link rel="canonical" href="{$config->root_url}{$canonical}"/>{/if}
	
	<!--  = Google Fonts =  -->
    <script type="text/javascript">
        WebFontConfig = {
            google : {
                families : ['Open+Sans:400,700,400italic,700italic:latin,latin-ext,cyrillic', 'Pacifico::latin']
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>
	
	<!-- Twitter Bootstrap -->
    <link href="design/{$settings->theme}/css/bootstrap.css" rel="stylesheet">
    <link href="design/{$settings->theme}/css/responsive.css" rel="stylesheet">
    <!-- Slider Revolution -->
    <link rel="stylesheet" href="design/{$settings->theme}/js/rs-plugin/css/settings.css" type="text/css"/>
    <!-- jQuery UI -->
    <link rel="stylesheet" href="design/{$settings->theme}/js/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css" type="text/css"/>
    <!-- PrettyPhoto -->
    <link rel="stylesheet" href="design/{$settings->theme}/js/prettyphoto/css/prettyPhoto.css" type="text/css"/>
    <!-- main styles -->
    <link href="design/{$settings->theme}/css/style.css" rel="stylesheet">
	
	<!-- Custom scrollbars CSS -->
	<link href="design/{$settings->theme}/js/scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" />
	
	{* Раскоментируйте одну из тем если нужно *}
    <!-- <link href="design/{$settings->theme}/css/theme/grass-green.css" rel="stylesheet"> -->
    <!-- <link href="design/{$settings->theme}/css/theme/gray.css" rel="stylesheet"> -->
    <!-- <link href="design/{$settings->theme}/css/theme/oil-green.css" rel="stylesheet"> -->

    <!-- Modernizr -->
    <script src="design/{$settings->theme}/js/modernizr.custom.56918.js"></script>

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="design/{$settings->theme}/images/apple-touch/144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="design/{$settings->theme}/images/apple-touch/114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="design/{$settings->theme}/images/apple-touch/72.png">
    <link rel="apple-touch-icon-precomposed" href="design/{$settings->theme}/images/apple-touch/57.png">
    <link rel="shortcut icon" href="design/{$settings->theme}/images/apple-touch/57.png">
</head>

<body class="">
	<div class="master-wrapper">
		<header id="header">
			<div class="darker-row">
				<div class="container">
					<div class="row">
						<div class="span6">
							<div class="higher-line">
								{if $user}
									Добро пожаловать <a href="user">{$user->name}</a>{if $group->discount>0}, ваша скидка &mdash; {$group->discount}%{/if} &nbsp; | &nbsp; <a href="user/logout">выйти</a>
								{else}
									Добро пожаловать! Пожалуйста
									<a href="#registerModal" role="button" data-toggle="modal">зарегистрируйтесь</a> или
									<a href="#loginModal" role="button" data-toggle="modal">войдите</a>
								{/if}
							</div>
						</div>
						
						<div class="span6">
							<div class="topmost-line">
								<div class="higher-line">
									{foreach $pages as $p}
										{if $p->menu_id == 1}
											{if !$p@first}&nbsp; | &nbsp;{/if}
											<a data-page="{$p->id}" href="{$p->url}" class="gray-link">{$p->name|escape}</a>
										{/if}
									{/foreach}
								</div>
								&nbsp;
								{if $currencies|count>1}
								<div class="lang-currency">
									<div class="dropdown js-selectable-dropdown">
										<a data-toggle="dropdown" class="selected" href="#"><span class="js-change-text">{$currency->name}</span> <b class="caret"></b></a>
										<ul class="dropdown-menu js-possibilities" role="menu" aria-labelledby="dLabel">
											{foreach from=$currencies item=c}
												{if $c->enabled} 
													<li><a href="{url currency_id=$c->id}">{$c->name|escape}</a></li>
												{/if}
											{/foreach}
										</ul>
									</div>
								</div>
								{/if}
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="span7">
						<a class="brand" href="/">
							<img src="design/{$settings->theme}/images/logo.png" alt="{$settings->site_name|escape}" width="48" height="48" />
							<span class="pacifico">Webmarket</span>
							<span class="tagline">Действительно великолепный шаблон</span>
						</a>
					</div>
					
					<div class="span5">
						<div class="top-right">
							<div class="icons">
								<a href="http://www.facebook.com/ProteusNet"><span class="zocial-facebook"></span></a>
								<a href="skype:primozcigler?call"><span class="zocial-skype"></span></a>
								<a href="https://twitter.com/proteusnetcom"><span class="zocial-twitter"></span></a>
								<a href="http://eepurl.com/xFPYD"><span class="zocial-rss"></span></a>
								<a href="#"><span class="zocial-wordpress"></span></a>
								<a href="#"><span class="zocial-android"></span></a>
								<a href="#"><span class="zocial-html5"></span></a>
								<a href="#"><span class="zocial-windows"></span></a>
								<a href="#"><span class="zocial-apple"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="navbar navbar-static-top" id="stickyNavbar">
			<div class="navbar-inner">
				<div class="container">
					<div class="row">
						<div class="span9">
							<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							
							<div class="nav-collapse collapse">
								<ul class="nav" id="mainNavigation">
									<li class="dropdown">
										<a href="/products" class="dropdown-toggle"> Каталог <b class="caret"></b> </a>
										{function name=categories_tree}
											{if $categories}
											<ul class="dropdown-menu">
											{foreach $categories as $c}
												{if $c->visible}
													<li class="dropdown{if $category->id == $c->id} active{/if}">
														<a  href="catalog/{$c->url}" data-category="{$c->id}">
														{if $c->subcategories}<i class="icon-caret-right pull-right visible-desktop"></i>{/if}
														{$c->name}
														</a>
														{categories_tree categories=$c->subcategories}
													</li>
												{/if}
											{/foreach}
											</ul>
											{/if}
											{/function}
										{categories_tree categories=$categories}
									</li>
									<li class="dropdown dropdown-megamenu">
										<a href="#" class="dropdown-toggle"> Мегаменю <b class="caret"></b> </a>
										<ul class="dropdown-menu megamenu container col-2"><!-- .col-2 for min-width:320px, .col-3 for min-width:480px -->
											<li class="row"><!-- .megamenu--half for 2 cols, .megamenu--third for 3 cols -->
												<div class="span3">
													<ul class="nav nav-pills nav-stacked">
														<li><a href="#">Мобильные телефоны</a></li>
														<li><a href="#">Бытовая техника</a></li>
														<li><a href="#">Компьютеры</a></li>
														<li><a href="#">Домашние кинотеатры</a></li>
														<li><a href="#">Телевизоры</a></li>
														<li><a href="#">Плазменные панели</a></li>
														<li><a href="#">Фотоаппараты</a></li>
													</ul>
												</div>
												<div class="span2">
													
													<ul class="nav nav-pills nav-stacked">
														<li><a href="#">Игровые приставки</a></li>
													</ul>
													<ul class="nav unstyled">
														<li><a href="#">Microsoft xBox 360</a></li>
														<li><a href="#">Sony Playstation 4</a></li>
														<li><a href="#">Nintendo Wii</a></li>
													</ul>
													<ul class="nav nav-pills nav-stacked">
														<li><a href="#">Мультимедиа</a></li>
													</ul>
													<ul class="nav unstyled">
														<li><a href="#">Компьютерная акустика</a></li>
														<li><a href="#">Веб-камеры</a></li>
														<li><a href="#">Tunics</a></li>
													</ul>
												</div>
												<div class="span2">
													<ul class="nav nav-pills nav-stacked">
														<li><a href="#">Игры</a></li>
													</ul>
													<ul class="nav unstyled">
														<li><a href="#">Для Microsoft xBox 360</a></li>
														<li><a href="#">Для Sony Playstation 4</a></li>
														<li><a href="#">Аксессуары</a></li>
													</ul>
													<ul class="nav nav-pills nav-stacked">
														<li><a href="#">Ноутбуки</a></li>
													</ul>
													<ul class="nav unstyled">
														<li><a href="#">Бюджетный</a></li>
														<li><a href="#">Замена настольному ПК</a></li>
														<li><a href="#">Игровой</a></li>
														<li><a href="#">Ультратонкий</a></li>
														<li><a href="#">Ultrabook</a></li>
													</ul>
												</div>
												<div class="span2">
													<ul class="nav nav-pills nav-stacked">
														<li><a href="#">Комплектующие</a></li>
													</ul>
													<ul class="nav unstyled">
														<li><a href="#">Материнские платы</a></li>
														<li><a href="#">Видеокарты</a></li>
														<li><a href="#">Модули памяти</a></li>
														<li><a href="#">Процессоры (CPU)</a></li>
														<li><a href="#">Блоки питания</a></li>
														<li><a href="#">Звуковые карты</a></li>
														<li><a href="#">Контроллеры</a></li>
														<li><a href="#">Корпуса</a></li>
														<li><a href="#">Платы ввода-вывода</a></li>
														<li><a href="#">Рэковые корпуса</a></li>
													</ul>
												</div>
												<div class="span3 text-center">
													<a href="#"><img src="files/uploads/iphone-5s.png" alt="" width="50%"></a>
													<h5><span class="light">iPhone</span> 5s</h5>
													<p>
														Разрабатывая iPhone 5s, инженеры и дизайнеры Apple нашли способ вместить ещë большее количество функций в тонкий и лëгкий корпус. 
													</p>
												</div>
											</li>
											<li class="row visible-desktop">
												<div class="span12">
													<hr>
												</div>
											</li>
											<li class="row visible-desktop">
												<div class="span6">
													Новые поступления в: &nbsp;
													<a href="#" class="btn btn-mini">Игровые приставки</a>
													<a href="#" class="btn btn-mini">Комплектующие</a>
													<a href="#" class="btn btn-mini">Аксессуары</a>
												</div>
												<div class="span6">
													<div class="pull-right sm-no-pull">
														Скидки: &nbsp;
														<a href="#" class="btn btn-mini btn-success">ДО -70%</a>
													</div>
												</div>
											</li>
										</ul>
									</li>
									<li class="dropdown dropdown-supermenu">
										<a href="#" class="dropdown-toggle"> Бытовая техника <b class="caret"></b> </a>
										<ul class="dropdown-menu supermenu accepts-4">
											<li class="row">
												<div class="span2">
													<ul class="nav nav-pills nav-stacked">
														<li><a href="#">Для дома</a></li>
													</ul>
													<ul class="nav unstyled">
														<li><a href="#">Пылесосы</a></li>
														<li><a href="#">Стиральные машины</a></li>
														<li><a href="#">Утюги</a></li>
														<li><a href="#">Хлебопечки</a></li>
													</ul>
												</div>
												<div class="span2">
													<ul class="nav nav-pills nav-stacked">
														<li><a href="#">Для кухни</a></li>
													</ul>
													<ul class="nav unstyled">
														<li><a href="#">Миксеры</a></li>
														<li><a href="#">Микроволновые печи</a></li>
														<li><a href="#">Мультиварки</a></li>
														<li><a href="#">Кухонные комбайны и измельчители</a></li>
													</ul>
												</div>
											</li>
										</ul>
									</li>
								</ul>

								<form class="navbar-form pull-right" action="products" method="get">
									<button type="submit"><span class="icon-search"></span></button>
									<input type="text" class="span1" name="keyword" id="navSearchInput" value="{$keyword|escape}">
								</form>
							</div>
						</div>

						<div class="span3">
							<div class="cart-container" id="cart_informer">
								{include file='cart_informer.tpl'}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		{$content}

		{if $smarty.get.module == 'MainView'}
			{get_posts var=last_posts limit=4}
			{if $last_posts}
			<div class="darker-stripe blocks-spacer more-space latest-news with-shadows">
				<div class="container">
					<div class="row">
						<div class="span12">
							<div class="main-titles center-align">
								<h2 class="title">
									<span class="clickable icon-chevron-left" id="tweetsLeft"></span> &nbsp;&nbsp;&nbsp;
									<span class="light">Последние</span> Новости &nbsp;&nbsp;&nbsp;
									<span class="clickable icon-chevron-right" id="tweetsRight"></span>
								</h2>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="span12">
							<div class="carouFredSel" data-nav="tweets" data-autoplay="false">
								{foreach $last_posts as $post}
									{if $post@first || $post@iteration eq 3}
									<div class="slide">
										<div class="row">
									{/if}	
											<div class="span6">
												<div class="news-item" data-post="{$post->id}">
													<div class="published">{$post->date|date}</div>
													<h6><a href="blog/{$post->url}">{$post->name|escape}</a></h6>
													<p>{$post->annotation}</p>
												</div>
											</div>
									{if $post@last || $post@iteration eq 2}
										</div>
									</div>
									{/if}
								{/foreach}
							</div>
						</div>
					</div>
				</div>
			</div>
			{/if}
			
			{get_brands var=all_brands}
			{if $all_brands}
			<div class="container blocks-spacer-last">
				<div class="row">
					<div class="span12">
						<div class="main-titles lined">
							<h2 class="title"><span class="light">Наши</span> Бренды</h2>
							<div class="arrows">
								<a href="#" class="icon-chevron-left" id="brandsLeft"></a>
								<a href="#" class="icon-chevron-right" id="brandsRight"></a>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="span12">
						<div class="brands carouFredSel" data-nav="brands" data-autoplay="true">
							{foreach $all_brands as $b}	
								{if $b->image}
									<a href="brands/{$b->url}"><img src="{$config->brands_images_dir}{$b->image}" alt="{$b->name|escape}"></a>
								{else}
									<a href="brands/{$b->url}"><span>{$b->name}</span></a>
								{/if}
							{/foreach}
						</div>
					</div>
				</div> 
			</div>
			{/if}
		{/if}
		
		{include file='footer.tpl'}
		{include file='modal_login.tpl'}
		{include file='modal_register.tpl'}
		{include file='modal_forgot_password.tpl'}

	</div>

	<!--  = jQuery - CDN with local fallback =  -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
    if (typeof jQuery == 'undefined') {
        document.write('<script src="design/{$settings->theme}/js/jquery.min.js"><\/script>');
    }
    </script>
	
    <!-- JavaScript -->
    <!--  = FB =  -->
	
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=126780447403102";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    <!--  = _ =  -->
    <script src="design/{$settings->theme}/js/underscore/underscore-min.js" type="text/javascript"></script>

    <!--  = Bootstrap =  -->
    <script src="design/{$settings->theme}/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  = Slider Revolution =  -->
    <script src="design/{$settings->theme}/js/rs-plugin/js/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
    <script src="design/{$settings->theme}/js/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>

    <!--  = CarouFredSel =  -->
    <script src="design/{$settings->theme}/js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>

    <!--  = jQuery UI =  -->
    <script src="design/{$settings->theme}/js/jquery-ui-1.10.3/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
    <script src="design/{$settings->theme}/js/jquery-ui-1.10.3/touch-fix.min.js" type="text/javascript"></script>

    <!--  = Isotope =  -->
    <script src="design/{$settings->theme}/js/isotope/jquery.isotope.min.js" type="text/javascript"></script>

    <!--  = PrettyPhoto =  -->
    <script src="design/{$settings->theme}/js/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript"></script>

    <!--  = Google Maps API =  -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="design/{$settings->theme}/js/goMap/js/jquery.gomap-1.3.2.min.js"></script>

	<!-- infinity scroll -->
	<script src="design/{$settings->theme}/js/infinite_scroll/jquery.infinitescroll.js"></script>
	<script src="design/{$settings->theme}/js/infinite_scroll/jquery.infinitescroll.manual.js"></script>
	
    <!--  = Custom JS =  -->
    <script src="design/{$settings->theme}/js/custom.js" type="text/javascript"></script>
	
	<!-- Аяксовая корзина -->
	<script src="design/{$settings->theme}/js/ajax_cart.js"></script>

	<!-- Custom scroll -->
	<script src="design/{$settings->theme}/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

	{* Всплывающие подсказки для администратора *}
	{if $smarty.session.admin == 'admin'}
	<script src ="design/{$settings->theme}/js/admintooltip/admintooltip.js" type="text/javascript"></script>
	<link   href="design/{$settings->theme}/js/admintooltip/css/admintooltip.css" rel="stylesheet" type="text/css" />
	{/if}
</body>
</html>