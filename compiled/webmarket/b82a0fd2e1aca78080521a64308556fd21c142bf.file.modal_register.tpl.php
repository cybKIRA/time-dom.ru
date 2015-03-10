<?php /* Smarty version Smarty-3.0.7, created on 2015-02-05 17:27:08
         compiled from "/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/modal_register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122412162954d36fac874c83-61904577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b82a0fd2e1aca78080521a64308556fd21c142bf' => 
    array (
      0 => '/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/modal_register.tpl',
      1 => 1423142203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122412162954d36fac874c83-61904577',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="registerModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="registerModalLabel"><span class="light">Регистрация</span> на Webmarket'е</h3>
	</div>
	
	<div class="modal-body">
		<form method="post" id="registerForm">
			<div class="control-group">
				<label class="control-label hidden shown-ie8" for="inputUsernameRegister">Имя</label>
				<div class="controls">
					<input type="text" name="name" class="input-block-level" id="inputUsernameRegister" placeholder="Имя" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label hidden shown-ie8" for="inputEmailRegister">Email</label>
				<div class="controls">
					<input type="email" name="email" class="input-block-level" id="inputEmailRegister" placeholder="Email" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label hidden shown-ie8" for="inputPasswordRegister">Пароль</label>
				<div class="controls">
					<input type="password" name="password" class="input-block-level" id="inputPasswordRegister" placeholder="Пароль" required>
				</div>
			</div>

			<button type="submit" class="btn btn-danger input-block-level bold higher push-down-20">
				Зарегистрироваться
			</button>
			
			<div id="registerResult"></div>
		</form>
		<p class="center-align push-down-0">
			<a data-toggle="modal" role="button" href="#loginModal" data-dismiss="modal">Уже зарегистрированы?</a>
		</p>
	</div>
</div>