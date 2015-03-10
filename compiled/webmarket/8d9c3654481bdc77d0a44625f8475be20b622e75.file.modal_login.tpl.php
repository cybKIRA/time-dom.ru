<?php /* Smarty version Smarty-3.0.7, created on 2015-02-05 17:27:08
         compiled from "/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/modal_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164135272654d36fac855d68-08405853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d9c3654481bdc77d0a44625f8475be20b622e75' => 
    array (
      0 => '/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/modal_login.tpl',
      1 => 1423142203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164135272654d36fac855d68-08405853',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="loginModalLabel"><span class="light">Вход</span> в личный кабинет</h3>
	</div>
	
	<div class="modal-body">
		<form method="post" id="loginForm">
			<div class="control-group">
				<label class="control-label hidden shown-ie8" for="inputEmail">Email</label>
				<div class="controls">
					<input type="text" name="email" class="input-block-level" id="inputEmail" placeholder="Email" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label hidden shown-ie8" for="inputPassword">Пароль</label>
				<div class="controls">
					<input type="password" name="password" class="input-block-level" id="inputPassword" placeholder="Пароль" required>
				</div>
			</div>
			<button type="submit" class="btn btn-primary input-block-level bold higher push-down-20">
				Войти
			</button>
			<div id="loginResult"></div>
		</form>
		
		<p class="center-align push-down-0">
			<a data-toggle="modal" role="button" href="#forgotPassModal" data-dismiss="modal">Забыли пароль?</a>
		</p>
	</div>
</div>