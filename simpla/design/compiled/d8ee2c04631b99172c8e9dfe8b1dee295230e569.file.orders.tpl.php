<?php /* Smarty version Smarty-3.0.7, created on 2015-02-06 16:41:59
         compiled from "simpla/design/html/orders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195206367154d4b69779f4c2-37687662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8ee2c04631b99172c8e9dfe8b1dee295230e569' => 
    array (
      0 => 'simpla/design/html/orders.tpl',
      1 => 1364370208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195206367154d4b69779f4c2-37687662',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/asrumyantsev/data/www/time-dom.ru/Smarty/libs/plugins/modifier.escape.php';
?>
<?php ob_start(); ?>
	<?php if (in_array('orders',$_smarty_tpl->getVariable('manager')->value->permissions)){?>
	<li <?php if ($_smarty_tpl->getVariable('status')->value===0){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrdersAdmin','status'=>0,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null),$_smarty_tpl);?>
">Новые</a></li>
	<li <?php if ($_smarty_tpl->getVariable('status')->value==1){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrdersAdmin','status'=>1,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null),$_smarty_tpl);?>
">Приняты</a></li>
	<li <?php if ($_smarty_tpl->getVariable('status')->value==2){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrdersAdmin','status'=>2,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null),$_smarty_tpl);?>
">Выполнены</a></li>
	<li <?php if ($_smarty_tpl->getVariable('status')->value==3){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrdersAdmin','status'=>3,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null),$_smarty_tpl);?>
">Удалены</a></li>
	<?php if ($_smarty_tpl->getVariable('keyword')->value){?>
	<li class="active"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrdersAdmin','keyword'=>$_smarty_tpl->getVariable('keyword')->value,'id'=>null,'label'=>null),$_smarty_tpl);?>
">Поиск</a></li>
	<?php }?>
	<?php }?>
	<?php if (in_array('labels',$_smarty_tpl->getVariable('manager')->value->permissions)){?>
	<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrdersLabelsAdmin','keyword'=>null,'id'=>null,'page'=>null,'label'=>null),$_smarty_tpl);?>
">Метки</a></li>
	<?php }?>
<?php  Smarty::$_smarty_vars['capture']['tabs']=ob_get_clean();?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('Заказы', null, 1);?>
<form method="get">
<div id="search">
	<input type="hidden" name="module" value="OrdersAdmin">
	<input class="search" type="text" name="keyword" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('keyword')->value);?>
"/>
	<input class="search_button" type="submit" value=""/>
</div>
</form>
	
<div id="header">
	<h1><?php if ($_smarty_tpl->getVariable('orders_count')->value){?><?php echo $_smarty_tpl->getVariable('orders_count')->value;?>
<?php }else{ ?>Нет<?php }?> заказ<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->getVariable('orders_count')->value,'','ов','а');?>
</h1>		
	<a class="add" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrderAdmin'),$_smarty_tpl);?>
">Добавить заказ</a>
</div>	

<?php if ($_smarty_tpl->getVariable('orders')->value){?>
<div id="main_list">
	
	<!-- Листалка страниц -->
	<?php $_template = new Smarty_Internal_Template('pagination.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>	
	<!-- Листалка страниц (The End) -->
	
	<form id="form_list" method="post">
	<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">

		<div id="list">		
			<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('orders')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value){
?>
			<div class="<?php if ($_smarty_tpl->getVariable('order')->value->paid){?>green<?php }?> row">
		 		<div class="checkbox cell">
					<input type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->getVariable('order')->value->id;?>
"/>				
				</div>
				<div class="order_date cell">				 	
	 				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->getVariable('order')->value->date);?>
 в <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['time'][0][0]->time_modifier($_smarty_tpl->getVariable('order')->value->date);?>

				</div>
				<div class="order_name cell">
					<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('order')->value->labels; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
?>
					<span class="order_label" style="background-color:#<?php echo $_smarty_tpl->getVariable('l')->value->color;?>
;" title="<?php echo $_smarty_tpl->getVariable('l')->value->name;?>
"></span>
					<?php }} ?>
	 				<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrderAdmin','id'=>$_smarty_tpl->getVariable('order')->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
">Заказ №<?php echo $_smarty_tpl->getVariable('order')->value->id;?>
</a> <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('order')->value->name);?>

	 				<?php if ($_smarty_tpl->getVariable('order')->value->note){?>
	 				<div class="note"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('order')->value->note);?>
</div>
	 				<?php }?> 	 			
				</div>
				<div class="icons cell">
					<a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrderAdmin','id'=>$_smarty_tpl->getVariable('order')->value->id,'view'=>'print'),$_smarty_tpl);?>
'  target="_blank" class="print" title="Печать заказа"></a>
					<a href='#' class=delete title="Удалить"></a>
				</div>
				<div class="name cell" style='white-space:nowrap;'>
	 				<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('order')->value->total_price);?>
 <?php echo $_smarty_tpl->getVariable('currency')->value->sign;?>

				</div>
				<div class="icons cell">
					<?php if ($_smarty_tpl->getVariable('order')->value->paid){?>
						<img src='design/images/cash_stack.png' alt='Оплачен' title='Оплачен'>
					<?php }else{ ?>
						<img src='design/images/cash_stack_gray.png' alt='Не оплачен' title='Не оплачен'>				
					<?php }?>			 	
				</div>
				<?php if ($_smarty_tpl->getVariable('keyword')->value){?>
				<div class="icons cell">
						<?php if ($_smarty_tpl->getVariable('order')->value->status==0){?>
						<img src='design/images/new.png' alt='Новый' title='Новый'>
						<?php }?>
						<?php if ($_smarty_tpl->getVariable('order')->value->status==1){?>
						<img src='design/images/time.png' alt='Принят' title='Принят'>
						<?php }?>
						<?php if ($_smarty_tpl->getVariable('order')->value->status==2){?>
						<img src='design/images/tick.png' alt='Выполнен' title='Выполнен'>
						<?php }?>
						<?php if ($_smarty_tpl->getVariable('order')->value->status==3){?>
						<img src='design/images/cross.png' alt='Удалён' title='Удалён'>
						<?php }?>
				</div>
				<?php }?>
				<div class="clear"></div>
			</div>
			<?php }} ?>
		</div>
	
		<div id="action">
		<label id='check_all' class="dash_link">Выбрать все</label>
	
		<span id="select">
		<select name="action">
			<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('labels')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
?>
			<option value="set_label_<?php echo $_smarty_tpl->getVariable('l')->value->id;?>
">Отметить &laquo;<?php echo $_smarty_tpl->getVariable('l')->value->name;?>
&raquo;</option>
			<?php }} ?>
			<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('labels')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
?>
			<option value="unset_label_<?php echo $_smarty_tpl->getVariable('l')->value->id;?>
">Снять &laquo;<?php echo $_smarty_tpl->getVariable('l')->value->name;?>
&raquo;</option>
			<?php }} ?>
			<option value="delete">Удалить выбранные заказы</option>
		</select>
		</span>
	
		<input id="apply_action" class="button_green" type="submit" value="Применить">
		
		</div>
	</form>
	
	<!-- Листалка страниц -->
	<?php $_template = new Smarty_Internal_Template('pagination.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>	
	<!-- Листалка страниц (The End) -->
		
</div>
<?php }?>

<!-- Меню -->
<div id="right_menu">
	
	<?php if ($_smarty_tpl->getVariable('labels')->value){?>
	<!-- Метки -->
	<ul id="labels">
		<li <?php if (!$_smarty_tpl->getVariable('label')->value){?>class="selected"<?php }?>><span class="label"></span> <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('label'=>null),$_smarty_tpl);?>
">Все заказы</a></li>
		<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('labels')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
?>
		<li data-label-id="<?php echo $_smarty_tpl->getVariable('l')->value->id;?>
" <?php if ($_smarty_tpl->getVariable('label')->value->id==$_smarty_tpl->getVariable('l')->value->id){?>class="selected"<?php }?>>
		<span style="background-color:#<?php echo $_smarty_tpl->getVariable('l')->value->color;?>
;" class="order_label"></span>
		<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('label'=>$_smarty_tpl->getVariable('l')->value->id),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('l')->value->name;?>
</a></li>
		<?php }} ?>
	</ul>
	<!-- Метки -->
	<?php }?>
	
</div>
<!-- Меню  (The End) -->

<script>

$(function() {

	// Сортировка списка
	$("#labels").sortable({
		items:             "li",
		tolerance:         "pointer",
		scrollSensitivity: 40,
		opacity:           0.7
	});
	

	$("#main_list #list .row").droppable({
		activeClass: "drop_active",
		hoverClass: "drop_hover",
		tolerance: "pointer",
		drop: function(event, ui){
			label_id = $(ui.helper).attr('data-label-id');
			$(this).find('input[type="checkbox"][name*="check"]').attr('checked', true);
			$(this).closest("form").find('select[name="action"] option[value=set_label_'+label_id+']').attr("selected", "selected");		
			$(this).closest("form").submit();
			return false;	
		}		
	});
	
	// Раскраска строк
	function colorize()
	{
		$("#list div.row:even").addClass('even');
		$("#list div.row:odd").removeClass('even');
	}
	// Раскрасить строки сразу
	colorize();

	// Выделить все
	$("#check_all").click(function() {
		$('#list input[type="checkbox"][name*="check"]').attr('checked', $('#list input[type="checkbox"][name*="check"]:not(:checked)').length>0);
	});	

	// Удалить 
	$("a.delete").click(function() {
		$('#list input[type="checkbox"][name*="check"]').attr('checked', false);
		$(this).closest(".row").find('input[type="checkbox"][name*="check"]').attr('checked', true);
		$(this).closest("form").find('select[name="action"] option[value=delete]').attr('selected', true);
		$(this).closest("form").submit();
	});

	// Подтверждение удаления
	$("form").submit(function() {
		if($('#list input[type="checkbox"][name*="check"]:checked').length>0)
			if($('select[name="action"]').val()=='delete' && !confirm('Подтвердите удаление'))
				return false;	
	});
});

</script>

