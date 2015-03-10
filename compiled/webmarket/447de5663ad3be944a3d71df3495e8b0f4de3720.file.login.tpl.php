<?php /* Smarty version Smarty-3.0.7, created on 2015-02-09 23:24:38
         compiled from "/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204095988054d90976584100-17460221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '447de5663ad3be944a3d71df3495e8b0f4de3720' => 
    array (
      0 => '/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/login.tpl',
      1 => 1423142202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204095988054d90976584100-17460221',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/asrumyantsev/data/www/time-dom.ru/Smarty/libs/plugins/modifier.escape.php';
?>
<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/user/login", null, 1);?>

<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable("Вход", null, 1);?>
   
<div class="darker-stripe">
	<div class="container">
		<div class="row">
			<div class="span12">
				<ul class="breadcrumb">
					<li>
						<a href="./">Главная</a>
					</li>
					<li><span class="icon-chevron-right"></span></li>
					<li>
						Вход в личный кабинет
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>   

<div class="container">
	<div class="push-up blocks-spacer">
		<div class="row">
			<section class="span12">
				<div class="underlined push-down-20">
					<h3><span class="light">Вход</span> в личный кабинет</h3>
				</div>
		
				<?php if ($_smarty_tpl->getVariable('error')->value){?>
				<div class="alert alert-danger in fade push-down-25">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<?php if ($_smarty_tpl->getVariable('error')->value=='login_incorrect'){?>Неверный логин или пароль
					<?php }elseif($_smarty_tpl->getVariable('error')->value=='user_disabled'){?>Ваш аккаунт еще не активирован.
					<?php }else{ ?><?php echo $_smarty_tpl->getVariable('error')->value;?>
<?php }?>
				</div>
				<?php }?>

				<form class="tab-content" method="post">
					<div class="control-group">
						<label class="control-label" for="email">Email<span class="red-clr bold">*</span></label>
						<div class="controls">
							<input type="email" name="email" id="email" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('email')->value);?>
" class="span4" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label" for="password">Пароль<span class="red-clr bold">*</span> (<a href="user/password_remind">напомнить</a>)</label>
						<div class="controls">
							<input type="password" name="password" id="password" class="span4" required>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<input type="submit" class="btn btn-primary higher bold" name="login" value="Войти">
						</div>
					</div>
				</form>
			</section>
		</div>
	</div>
</div>