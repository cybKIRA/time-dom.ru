<?php /* Smarty version Smarty-3.0.7, created on 2015-02-08 01:08:27
         compiled from "/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162917993954d67ecbdb74d2-90470896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da7e24ede9936cf3e484e9b636946db929304591' => 
    array (
      0 => '/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/feedback.tpl',
      1 => 1423142201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162917993954d67ecbdb74d2-90470896',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_regex_replace')) include '/var/www/asrumyantsev/data/www/time-dom.ru/Smarty/libs/plugins/modifier.regex_replace.php';
if (!is_callable('smarty_modifier_escape')) include '/var/www/asrumyantsev/data/www/time-dom.ru/Smarty/libs/plugins/modifier.escape.php';
if (!is_callable('smarty_function_math')) include '/var/www/asrumyantsev/data/www/time-dom.ru/Smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/asrumyantsev/data/www/time-dom.ru/Smarty/libs/plugins/modifier.date_format.php';
?>
<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/".($_smarty_tpl->getVariable('page')->value->url), null, 1);?>

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
					<h1 class="inline"><?php echo smarty_modifier_regex_replace($_smarty_tpl->getVariable('page')->value->header,"/^(.+?\s)/","<span class='light'>"."$"."1</span>");?>
</h1>
				</div>
			</div>

			<section class="span8 single single-page">
				<article class="post">
					<div class="post-inner">
						<?php echo $_smarty_tpl->getVariable('page')->value->body;?>

					</div>
				</article>
				
				<hr />
				
				<section class="contact-form-container">
					<h3 class="push-down-25"><span class="light">Обратная</span> связь</h3>
					
					<?php if ($_smarty_tpl->getVariable('message_sent')->value){?>
						<div class="alert alert-success in fade">
							<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('name')->value);?>
, ваше сообщение отправлено.
						</div>
					<?php }else{ ?>
						<form class="form form-inline form-comments" method="post">
							<?php if ($_smarty_tpl->getVariable('error')->value){?>
								<div class="alert alert-danger in fade">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<?php if ($_smarty_tpl->getVariable('error')->value=='captcha'){?>
								Неверно введена капча
								<?php }elseif($_smarty_tpl->getVariable('error')->value=='empty_name'){?>
								Введите имя
								<?php }elseif($_smarty_tpl->getVariable('error')->value=='empty_email'){?>
								Введите email
								<?php }elseif($_smarty_tpl->getVariable('error')->value=='empty_text'){?>
								Введите сообщение
								<?php }?>
								</div>
							<?php }?>

							<p class="push-down-20">
								<input type="text" aria-required="true" tabindex="1" size="30" id="comment_name" name="name" value="<?php echo $_smarty_tpl->getVariable('comment_name')->value;?>
" required/>
								<label for="comment_name">Имя<span class="red-clr bold">*</span></label>
							</p>
							
							<p class="push-down-20">
								<input type="email" aria-required="true" tabindex="2" size="30" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('email')->value);?>
" id="email" name="email" required>
								<label for="email">Mail<span class="red-clr bold">*</span></label>
							</p>

							<p class="push-down-20" style="position: relative">
								<img src="captcha/image.php?<?php echo smarty_function_math(array('equation'=>'rand(10,10000)'),$_smarty_tpl);?>
" alt='captcha' style="position: absolute; max-height: 33px; top: 2px; left: 161px; border-radius: 3px"/>
								<input type="text" aria-required="true" tabindex="3" size="30" id="comment_captcha" name="captcha_code" value="" required/>
								<label for="captcha_code">Число<span class="red-clr bold">*</span></label>
							</p>
							
							<p class="push-down-20">
								<textarea class="input-block-level" tabindex="4" rows="7" cols="70" id="comment" name="message" placeholder="Ваше сообщение ..." required><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('message')->value);?>
</textarea>
							</p>
							
							<input class="btn btn-primary bold" type="submit" tabindex="5" name="feedback" value="Отправить" />
						</form>
					<?php }?>
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
						<dl class="week-day<?php if (smarty_modifier_date_format(time(),'%w')==1){?> today<?php }?>">
							<dt>Понедельник</dt>
							<dd>8:00 - 16:00</dd>
						</dl>
						<dl class="week-day light-bg<?php if (smarty_modifier_date_format(time(),'%w')==2){?> today<?php }?>">
							<dt>Вторник</dt>
							<dd>8:00 - 16:00</dd>
						</dl>
						<dl class="week-day<?php if (smarty_modifier_date_format(time(),'%w')==3){?> today<?php }?>">
							<dt>Среда</dt>
							<dd>8:00 - 16:00</dd>
						</dl>
						<dl class="week-day light-bg<?php if (smarty_modifier_date_format(time(),'%w')==4){?> today<?php }?>">
							<dt>Четверг</dt>
							<dd>10:00 - 15:00</dd>
						</dl>
						<dl class="week-day<?php if (smarty_modifier_date_format(time(),'%w')==5){?> today<?php }?>">
							<dt>Пятница</dt>
							<dd>8:00 - 16:00</dd>
						</dl>
						<dl class="week-day light-bg<?php if (smarty_modifier_date_format(time(),'%w')==6){?> today<?php }?>">
							<dt>Суббота</dt>
							<dd>8:00 - 16:00</dd>
						</dl>
						<dl class="week-day closed<?php if (smarty_modifier_date_format(time(),'%w')==0){?> today<?php }?>">
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
					
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					
				</div>
			</aside>
		</div>
	</div>
</div>