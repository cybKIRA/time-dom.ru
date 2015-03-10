<?php /* Smarty version Smarty-3.0.7, created on 2015-02-08 01:08:30
         compiled from "/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/cart_title.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157130126854d67ece3f15a2-88662627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba742ecb772322fa1c32663482b794286c6518c8' => 
    array (
      0 => '/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/cart_title.tpl',
      1 => 1423142199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157130126854d67ece3f15a2-88662627',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('cart')->value->purchases){?>
	<span class="light">В корзине</span> <?php echo $_smarty_tpl->getVariable('cart')->value->total_products;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->getVariable('cart')->value->total_products,'товар','товаров','товара');?>

<?php }else{ ?>
	<span class="light">Корзина</span> пуста
<?php }?>