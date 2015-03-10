<?php /* Smarty version Smarty-3.0.7, created on 2015-02-06 16:43:47
         compiled from "simpla/design/html/manager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83890862054d4b70384ab33-20718472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90b60525531fcba1fde0de7c65a8649c65b6d419' => 
    array (
      0 => 'simpla/design/html/manager.tpl',
      1 => 1364273982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83890862054d4b70384ab33-20718472',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/asrumyantsev/data/www/time-dom.ru/Smarty/libs/plugins/modifier.escape.php';
?>
<?php ob_start(); ?>
	<?php if (in_array('settings',$_smarty_tpl->getVariable('manager')->value->permissions)){?><li><a href="index.php?module=SettingsAdmin">Настройки</a></li><?php }?>
	<?php if (in_array('currency',$_smarty_tpl->getVariable('manager')->value->permissions)){?><li><a href="index.php?module=CurrencyAdmin">Валюты</a></li><?php }?>
	<?php if (in_array('delivery',$_smarty_tpl->getVariable('manager')->value->permissions)){?><li><a href="index.php?module=DeliveriesAdmin">Доставка</a></li><?php }?>
	<?php if (in_array('payment',$_smarty_tpl->getVariable('manager')->value->permissions)){?><li><a href="index.php?module=PaymentMethodsAdmin">Оплата</a></li><?php }?>
	<li class="active"><a href="index.php?module=ManagersAdmin">Менеджеры</a></li>
<?php  Smarty::$_smarty_vars['capture']['tabs']=ob_get_clean();?>

<?php if ($_smarty_tpl->getVariable('m')->value->login){?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->getVariable('m')->value->login, null, 1);?>
<?php }else{ ?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('Новый менеджер', null, 1);?>
<?php }?>
<script src="design/js/jquery/jquery.js"></script>
<script src="design/js/jquery/jquery-ui.min.js"></script>
<script>

$(function() {
	// Выделить все
	$("#check_all").click(function() {
		$('input[type="checkbox"][name*="permissions"]:not(:disabled)').attr('checked', $('input[type="checkbox"][name*="permissions"]:not(:disabled):not(:checked)').length>0);
	});

	<?php if ($_smarty_tpl->getVariable('m')->value->login){?>$('#password_input').hide();<?php }?>
	$('#change_password').click(function() {
		$('#password_input').show();
	});
		
});

</script>


<?php if ($_smarty_tpl->getVariable('message_success')->value){?>
<!-- Системное сообщение -->
<div class="message message_success">
	<span><?php if ($_smarty_tpl->getVariable('message_success')->value=='added'){?>Менеджер добавлен<?php }elseif($_smarty_tpl->getVariable('message_success')->value=='updated'){?>Менеджер обновлен<?php }else{ ?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('message_success')->value);?>
<?php }?></span>
	<?php if ($_GET['return']){?>
	<a class="button" href="<?php echo $_GET['return'];?>
">Вернуться</a>
	<?php }?>
</div>
<!-- Системное сообщение (The End)-->
<?php }?>

<?php if ($_smarty_tpl->getVariable('message_error')->value){?>
<!-- Системное сообщение -->
<div class="message message_error">
	<span>
	<?php if ($_smarty_tpl->getVariable('message_error')->value=='login_exists'){?>Менеджер с таким логином уже существует
	<?php }elseif($_smarty_tpl->getVariable('message_error')->value=='empty_login'){?>Введите логин
	<?php }elseif($_smarty_tpl->getVariable('message_error')->value=='not_writable'){?>Установите права на запись для файла /simpla/.passwd
	<?php }else{ ?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('message_error')->value);?>
<?php }?>
	</span>
	<a class="button" href="">Вернуться</a>
</div>
<!-- Системное сообщение (The End)-->
<?php }?>


<!-- Основная форма -->
<form method=post id=product enctype="multipart/form-data">
<input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<div id="name">
		Логин:
		<input class="name" name="login" type="text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('m')->value->login);?>
" maxlength="32"/> 
		<input name="old_login" type="hidden" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('m')->value->login);?>
"/>
		Пароль:
		<?php if ($_smarty_tpl->getVariable('m')->value->login){?><a class="dash_link"id="change_password">изменить</a><?php }?>
		<input id="password_input" class="name" name="password" type="password" value=""/> 
	</div> 

	<!-- Левая колонка -->
	<div id="column_left">
		
		<h2>Права доступа: </h2>
		<div class="block"><label id="check_all" class="dash_link">Выбрать все</label></div>

		<!-- Параметры  -->
		<div class="block">
			<ul>
			
				<?php $_smarty_tpl->tpl_vars['perms'] = new Smarty_variable(array('products'=>'Товары','categories'=>'Категории','brands'=>'Бренды','features'=>'Свойства товаров','orders'=>'Заказы','labels'=>'Метки заказов','users'=>'Покупатели','groups'=>'Группы покупателей','coupons'=>'Купоны','pages'=>'Страницы','blog'=>'Блог','comments'=>'Комментарии','feedbacks'=>'Обратная связь','import'=>'Импорт','export'=>'Экспорт','backup'=>'Бекап','stats'=>'Статистика','design'=>'Дизайн','settings'=>'Настройки','currency'=>'Валюты','delivery'=>'Способы доставки','payment'=>'Способы оплаты','managers'=>'Менеджеры','license'=>'Управление лицензией'), null, null);?>
				
				<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('perms')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
 $_smarty_tpl->tpl_vars['p']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
				<li><label class=property for="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</label>
				<input id="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
" name="permissions[]" class="simpla_inp" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
"
				<?php if ($_smarty_tpl->getVariable('m')->value->permissions&&in_array($_smarty_tpl->tpl_vars['p']->value,$_smarty_tpl->getVariable('m')->value->permissions)){?>checked<?php }?> <?php if ($_smarty_tpl->getVariable('m')->value->login==$_smarty_tpl->getVariable('manager')->value->login){?>disabled<?php }?>/></li>
				<?php }} ?>
				
			</ul>
			
		</div>
		<!-- Параметры (The End)-->
		

			
	</div>
	<!-- Левая колонка (The End)--> 
	
	
	<input class="button_green button_save" type="submit" name="" value="Сохранить" />
	
</form>
<!-- Основная форма (The End) -->
