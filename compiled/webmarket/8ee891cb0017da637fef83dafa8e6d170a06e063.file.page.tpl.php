<?php /* Smarty version Smarty-3.0.7, created on 2015-02-06 16:41:53
         compiled from "/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5002079554d4b69171fae3-85715169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ee891cb0017da637fef83dafa8e6d170a06e063' => 
    array (
      0 => '/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/page.tpl',
      1 => 1423142203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5002079554d4b69171fae3-85715169',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/asrumyantsev/data/www/time-dom.ru/Smarty/libs/plugins/modifier.escape.php';
if (!is_callable('smarty_modifier_regex_replace')) include '/var/www/asrumyantsev/data/www/time-dom.ru/Smarty/libs/plugins/modifier.regex_replace.php';
?>
<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/".($_smarty_tpl->getVariable('page')->value->url), null, 1);?>

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
						<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('page')->value->header);?>

					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="push-up top-equal blocks-spacer">
		<div class="row">
			<?php if ($_smarty_tpl->getVariable('page')->value->url!='404'){?>
			<div class="span12">
				<div class="title-area">
					<h1 class="inline" data-page="<?php echo $_smarty_tpl->getVariable('page')->value->id;?>
"><?php echo smarty_modifier_regex_replace($_smarty_tpl->getVariable('page')->value->header,"/^(.+?\s)/","<span class='light'>"."$"."1</span>");?>
</h1>
				</div>
			</div>
			<?php }?>
			<section class="span12">
				<?php echo $_smarty_tpl->getVariable('page')->value->body;?>

			</section>
		</div>
	</div>
</div>