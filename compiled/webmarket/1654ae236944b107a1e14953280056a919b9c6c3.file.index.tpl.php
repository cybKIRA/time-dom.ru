<?php /* Smarty version Smarty-3.0.7, created on 2015-02-05 17:27:08
         compiled from "/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174048678554d36fac2e57c2-25668016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1654ae236944b107a1e14953280056a919b9c6c3' => 
    array (
      0 => '/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/index.tpl',
      1 => 1423142201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174048678554d36fac2e57c2-25668016',
  'function' => 
  array (
    'categories_tree' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'has_nocache_code' => 0,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/asrumyantsev/data/www/time-dom.ru/Smarty/libs/plugins/modifier.escape.php';
?><!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
	<base href="<?php echo $_smarty_tpl->getVariable('config')->value->root_url;?>
/" />
	<title><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('meta_title')->value);?>
</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('meta_description')->value);?>
">
	<meta name="keywords"    content="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('meta_keywords')->value);?>
">
	
	<?php if (isset($_smarty_tpl->getVariable('canonical',null,true,false)->value)){?><link rel="canonical" href="<?php echo $_smarty_tpl->getVariable('config')->value->root_url;?>
<?php echo $_smarty_tpl->getVariable('canonical')->value;?>
"/><?php }?>
	
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
    <link href="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/css/bootstrap.css" rel="stylesheet">
    <link href="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/css/responsive.css" rel="stylesheet">
    <!-- Slider Revolution -->
    <link rel="stylesheet" href="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/rs-plugin/css/settings.css" type="text/css"/>
    <!-- jQuery UI -->
    <link rel="stylesheet" href="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css" type="text/css"/>
    <!-- PrettyPhoto -->
    <link rel="stylesheet" href="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/prettyphoto/css/prettyPhoto.css" type="text/css"/>
    <!-- main styles -->
    <link href="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/css/style.css" rel="stylesheet">
	
	<!-- Custom scrollbars CSS -->
	<link href="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" />
	
    <!-- <link href="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/css/theme/grass-green.css" rel="stylesheet"> -->
    <!-- <link href="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/css/theme/gray.css" rel="stylesheet"> -->
    <!-- <link href="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/css/theme/oil-green.css" rel="stylesheet"> -->

    <!-- Modernizr -->
    <script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/modernizr.custom.56918.js"></script>

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/apple-touch/144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/apple-touch/114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/apple-touch/72.png">
    <link rel="apple-touch-icon-precomposed" href="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/apple-touch/57.png">
    <link rel="shortcut icon" href="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/apple-touch/57.png">
</head>

<body class="">
	<div class="master-wrapper">
		<header id="header">
			<div class="darker-row">
				<div class="container">
					<div class="row">
						<div class="span6">
							<div class="higher-line">
								<?php if ($_smarty_tpl->getVariable('user')->value){?>
									Добро пожаловать <a href="user"><?php echo $_smarty_tpl->getVariable('user')->value->name;?>
</a><?php if ($_smarty_tpl->getVariable('group')->value->discount>0){?>, ваша скидка &mdash; <?php echo $_smarty_tpl->getVariable('group')->value->discount;?>
%<?php }?> &nbsp; | &nbsp; <a href="user/logout">выйти</a>
								<?php }else{ ?>
									Добро пожаловать! Пожалуйста
									<a href="#registerModal" role="button" data-toggle="modal">зарегистрируйтесь</a> или
									<a href="#loginModal" role="button" data-toggle="modal">войдите</a>
								<?php }?>
							</div>
						</div>
						
						<div class="span6">
							<div class="topmost-line">
								<div class="higher-line">
									<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pages')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['p']->index=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
 $_smarty_tpl->tpl_vars['p']->index++;
 $_smarty_tpl->tpl_vars['p']->first = $_smarty_tpl->tpl_vars['p']->index === 0;
?>
										<?php if ($_smarty_tpl->getVariable('p')->value->menu_id==1){?>
											<?php if (!$_smarty_tpl->tpl_vars['p']->first){?>&nbsp; | &nbsp;<?php }?>
											<a data-page="<?php echo $_smarty_tpl->getVariable('p')->value->id;?>
" href="<?php echo $_smarty_tpl->getVariable('p')->value->url;?>
" class="gray-link"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('p')->value->name);?>
</a>
										<?php }?>
									<?php }} ?>
								</div>
								&nbsp;
								<?php if (count($_smarty_tpl->getVariable('currencies')->value)>1){?>
								<div class="lang-currency">
									<div class="dropdown js-selectable-dropdown">
										<a data-toggle="dropdown" class="selected" href="#"><span class="js-change-text"><?php echo $_smarty_tpl->getVariable('currency')->value->name;?>
</span> <b class="caret"></b></a>
										<ul class="dropdown-menu js-possibilities" role="menu" aria-labelledby="dLabel">
											<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('currencies')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
?>
												<?php if ($_smarty_tpl->getVariable('c')->value->enabled){?> 
													<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('currency_id'=>$_smarty_tpl->getVariable('c')->value->id),$_smarty_tpl);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('c')->value->name);?>
</a></li>
												<?php }?>
											<?php }} ?>
										</ul>
									</div>
								</div>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="span7">
						<a class="brand" href="/">
							<img src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/logo.png" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value->site_name);?>
" width="48" height="48" />
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
										<?php if (!function_exists('smarty_template_function_categories_tree')) {
    function smarty_template_function_categories_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->template_functions['categories_tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
											<?php if ($_smarty_tpl->getVariable('categories')->value){?>
											<ul class="dropdown-menu">
											<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('categories')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
?>
												<?php if ($_smarty_tpl->getVariable('c')->value->visible){?>
													<li class="dropdown<?php if ($_smarty_tpl->getVariable('category')->value->id==$_smarty_tpl->getVariable('c')->value->id){?> active<?php }?>">
														<a  href="catalog/<?php echo $_smarty_tpl->getVariable('c')->value->url;?>
" data-category="<?php echo $_smarty_tpl->getVariable('c')->value->id;?>
">
														<?php if ($_smarty_tpl->getVariable('c')->value->subcategories){?><i class="icon-caret-right pull-right visible-desktop"></i><?php }?>
														<?php echo $_smarty_tpl->getVariable('c')->value->name;?>

														</a>
														<?php smarty_template_function_categories_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->getVariable('c')->value->subcategories));?>

													</li>
												<?php }?>
											<?php }} ?>
											</ul>
											<?php }?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>

										<?php smarty_template_function_categories_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->getVariable('categories')->value));?>

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
									<input type="text" class="span1" name="keyword" id="navSearchInput" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('keyword')->value);?>
">
								</form>
							</div>
						</div>

						<div class="span3">
							<div class="cart-container" id="cart_informer">
								<?php $_template = new Smarty_Internal_Template('cart_informer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php echo $_smarty_tpl->getVariable('content')->value;?>


		<?php if ($_GET['module']=='MainView'){?>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_posts'][0][0]->get_posts_plugin(array('var'=>'last_posts','limit'=>4),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->getVariable('last_posts')->value){?>
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
								<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('last_posts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['post']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['post']->iteration=0;
 $_smarty_tpl->tpl_vars['post']->index=-1;
if ($_smarty_tpl->tpl_vars['post']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
 $_smarty_tpl->tpl_vars['post']->iteration++;
 $_smarty_tpl->tpl_vars['post']->index++;
 $_smarty_tpl->tpl_vars['post']->first = $_smarty_tpl->tpl_vars['post']->index === 0;
 $_smarty_tpl->tpl_vars['post']->last = $_smarty_tpl->tpl_vars['post']->iteration === $_smarty_tpl->tpl_vars['post']->total;
?>
									<?php if ($_smarty_tpl->tpl_vars['post']->first||$_smarty_tpl->tpl_vars['post']->iteration==3){?>
									<div class="slide">
										<div class="row">
									<?php }?>	
											<div class="span6">
												<div class="news-item" data-post="<?php echo $_smarty_tpl->getVariable('post')->value->id;?>
">
													<div class="published"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->getVariable('post')->value->date);?>
</div>
													<h6><a href="blog/<?php echo $_smarty_tpl->getVariable('post')->value->url;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('post')->value->name);?>
</a></h6>
													<p><?php echo $_smarty_tpl->getVariable('post')->value->annotation;?>
</p>
												</div>
											</div>
									<?php if ($_smarty_tpl->tpl_vars['post']->last||$_smarty_tpl->tpl_vars['post']->iteration==2){?>
										</div>
									</div>
									<?php }?>
								<?php }} ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php }?>
			
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_brands'][0][0]->get_brands_plugin(array('var'=>'all_brands'),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->getVariable('all_brands')->value){?>
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
							<?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('all_brands')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
?>	
								<?php if ($_smarty_tpl->getVariable('b')->value->image){?>
									<a href="brands/<?php echo $_smarty_tpl->getVariable('b')->value->url;?>
"><img src="<?php echo $_smarty_tpl->getVariable('config')->value->brands_images_dir;?>
<?php echo $_smarty_tpl->getVariable('b')->value->image;?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('b')->value->name);?>
"></a>
								<?php }else{ ?>
									<a href="brands/<?php echo $_smarty_tpl->getVariable('b')->value->url;?>
"><span><?php echo $_smarty_tpl->getVariable('b')->value->name;?>
</span></a>
								<?php }?>
							<?php }} ?>
						</div>
					</div>
				</div> 
			</div>
			<?php }?>
		<?php }?>
		
		<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
		<?php $_template = new Smarty_Internal_Template('modal_login.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
		<?php $_template = new Smarty_Internal_Template('modal_register.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
		<?php $_template = new Smarty_Internal_Template('modal_forgot_password.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

	</div>

	<!--  = jQuery - CDN with local fallback =  -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
    if (typeof jQuery == 'undefined') {
        document.write('<script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/jquery.min.js"><\/script>');
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
    <script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/underscore/underscore-min.js" type="text/javascript"></script>

    <!--  = Bootstrap =  -->
    <script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  = Slider Revolution =  -->
    <script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/rs-plugin/js/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
    <script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>

    <!--  = CarouFredSel =  -->
    <script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>

    <!--  = jQuery UI =  -->
    <script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/jquery-ui-1.10.3/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
    <script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/jquery-ui-1.10.3/touch-fix.min.js" type="text/javascript"></script>

    <!--  = Isotope =  -->
    <script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/isotope/jquery.isotope.min.js" type="text/javascript"></script>

    <!--  = PrettyPhoto =  -->
    <script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript"></script>

    <!--  = Google Maps API =  -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/goMap/js/jquery.gomap-1.3.2.min.js"></script>

	<!-- infinity scroll -->
	<script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/infinite_scroll/jquery.infinitescroll.js"></script>
	<script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/infinite_scroll/jquery.infinitescroll.manual.js"></script>
	
    <!--  = Custom JS =  -->
    <script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/custom.js" type="text/javascript"></script>
	
	<!-- Аяксовая корзина -->
	<script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/ajax_cart.js"></script>

	<!-- Custom scroll -->
	<script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<?php if ($_SESSION['admin']=='admin'){?>
	<script src ="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/admintooltip/admintooltip.js" type="text/javascript"></script>
	<link   href="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/admintooltip/css/admintooltip.css" rel="stylesheet" type="text/css" />
	<?php }?>
</body>
</html>