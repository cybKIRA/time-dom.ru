<?php /* Smarty version Smarty-3.0.7, created on 2015-02-05 17:27:08
         compiled from "/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/modal_forgot_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26838174854d36fac8a80e5-08906930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9303f8319e054846186a24cc2b0382cbda376876' => 
    array (
      0 => '/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/modal_forgot_password.tpl',
      1 => 1423142203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26838174854d36fac8a80e5-08906930',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="forgotPassModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="forgotPassModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="forgotPassModalLabel"><span class="light">Забыли</span> пароль?</h3>
	</div>
	
	<div class="modal-body">
		<form method="post" id="remindForm">
			<div class="control-group">
				<label class="control-label hidden shown-ie8" for="inputEmailRegister">Email</label>
				<div class="controls">
					<input type="email" name="email" class="input-block-level" id="inputEmailRegister" placeholder="Email" required>
				</div>
			</div>
			
			<button type="submit" class="btn btn-primary input-block-level bold higher push-down-20">
				Выслать пароль
			</button>
			
			<div id="remindResult"></div>
		</form>
	</div>
</div>