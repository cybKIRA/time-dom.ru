<?php /* Smarty version Smarty-3.0.7, created on 2015-02-05 17:27:08
         compiled from "/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82671931454d36fac7b89a2-15401110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e510a00ead1ba4e6fe89bd9e95a1ba72e5a1b857' => 
    array (
      0 => '/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/footer.tpl',
      1 => 1423142201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82671931454d36fac7b89a2-15401110',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/asrumyantsev/data/www/time-dom.ru/Smarty/libs/plugins/modifier.escape.php';
?><footer>
	<div class="foot-light">
		<div class="container">
			<div class="row">
				<div class="span4">
					<h2 class="pacifico">Webmarket &nbsp; <img src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/webmarket.png" alt="Webmarket Cart" class="align-baseline" /></h2>
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
						<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pages')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
?>
							<?php if ($_smarty_tpl->getVariable('p')->value->menu_id==1){?>
								<li><a data-page="<?php echo $_smarty_tpl->getVariable('p')->value->id;?>
" href="<?php echo $_smarty_tpl->getVariable('p')->value->url;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('p')->value->name);?>
</a></li>
							<?php }?>
						<?php }} ?>
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