<?php /* Smarty version Smarty-3.0.7, created on 2015-02-05 17:27:07
         compiled from "/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51741350954d36fabd61262-90182874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79bcc81caa5c6fac280a526744b57dc8031b8c50' => 
    array (
      0 => '/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/main.tpl',
      1 => 1423142203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51741350954d36fabd61262-90182874',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/asrumyantsev/data/www/time-dom.ru/Smarty/libs/plugins/modifier.escape.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/asrumyantsev/data/www/time-dom.ru/Smarty/libs/plugins/modifier.truncate.php';
?>
<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable('', null, 1);?>

<?php $_template = new Smarty_Internal_Template('slider.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div class="container">
	<div class="row">
		<div class="span12">
			<div class="push-up over-slider blocks-spacer">
				<div class="row">
					<div class="span4">
						<a href="#" class="btn btn-block banner">
							<span class="title"><span class="light">ЛЕТННЯЯ</span> РАСПРОДАЖА</span>
							<em>скидки до 60% на все</em>
						</a>
					</div>
					<div class="span4">
						<a href="#" class="btn btn-block colored banner">
							<span class="title"><span class="light">БЕСПЛАТНАЯ</span> ДОСТАВКА</span>
							<em>при заказе от 2000р</em>
						</a>
					</div>
					<div class="span4">
						<a href="#" class="btn btn-block banner">
							<span class="title"><span class="light">НОВЫЕ</span> ПОСТУПЛЕНИЯ</span>
							<em>Принимаем к оплате кредитные карты</em>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_featured_products'][0][0]->get_featured_products_plugin(array('var'=>'featured_products'),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->getVariable('featured_products')->value){?>
	<div class="row featured-items blocks-spacer">
		<div class="span12">
			<div class="main-titles lined">
				<h2 class="title"><span class="light">Рекомендуемые</span> товары</h2>
				<div class="arrows">
					<a href="#" class="icon-chevron-left" id="featuredItemsLeft"></a>
					<a href="#" class="icon-chevron-right" id="featuredItemsRight"></a>
				</div>
			</div>
		</div>

		<div class="span12">
			<div class="carouFredSel" data-autoplay="false" data-nav="featuredItems">
				<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('featured_products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
if ($_smarty_tpl->tpl_vars['product']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
?>
				<?php if ($_smarty_tpl->tpl_vars['product']->first||!(($_smarty_tpl->tpl_vars['product']->iteration-1) % 4)){?>
				<div class="slide">
					<div class="row">
					<?php }?>
						<div class="span3">
							<div class="product">
    	            	        <div class="product-img ">
    	            	            <div class="picture">
    	            	        	    <a href="products/<?php echo $_smarty_tpl->getVariable('product')->value->url;?>
">
											<?php if ($_smarty_tpl->getVariable('product')->value->image){?>
											<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('product')->value->image->filename,200,200);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
"/>
											<?php }else{ ?>
											<img src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/no_image.png" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
"/>
											<?php }?>
										</a>

										<?php if (count($_smarty_tpl->getVariable('product')->value->variants)>0){?>
    	            	        		<div class="img-overlay<?php if (count($_smarty_tpl->getVariable('product')->value->variants)>1){?> with_select<?php }?>">
											<form class="variants" action="/cart">
												<select name="variant" class="span2" <?php if (count($_smarty_tpl->getVariable('product')->value->variants)==1||!$_smarty_tpl->getVariable('product')->value->variant->name){?>style='display:none;'<?php }?>>
													<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('product')->value->variants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
													<option value="<?php echo $_smarty_tpl->getVariable('v')->value->id;?>
" <?php if ($_smarty_tpl->getVariable('v')->value->compare_price>0){?>data-compare_price="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('v')->value->compare_price);?>
"<?php }?> data-price="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('v')->value->price);?>
"><?php echo $_smarty_tpl->getVariable('v')->value->name;?>
</option>
													<?php }} ?>
												</select>
												
												<a href="products/<?php echo $_smarty_tpl->getVariable('product')->value->url;?>
" class="btn more btn-primary">Подробнее</a>

												<input type="submit" class="btn buy btn-danger" value="в корзину" data-result-text="добавлено"/>
											</form>
    	            	        		</div>
										<?php }?>
    	            	            </div>
    	            	        </div>
								<div class="main-titles">
									<h4 class="title">
										<span class="striked red-clr"><?php if ($_smarty_tpl->getVariable('product')->value->variant->compare_price>0){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('product')->value->variant->compare_price);?>
<?php }?></span> 
										
										<?php if (count($_smarty_tpl->getVariable('product')->value->variants)>0){?>
										<span class="v_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('product')->value->variant->price);?>
</span> <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('currency')->value->sign);?>

										<?php }else{ ?>
										<span class="v_price out_of_stock">Нет в наличии</span>
										<?php }?>
									</h4>
									
									<h5 class="no-margin"><a data-product="<?php echo $_smarty_tpl->getVariable('product')->value->id;?>
" href="products/<?php echo $_smarty_tpl->getVariable('product')->value->url;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
</a></h5>
    	            	        </div>
    	            	        <p class="desc"><?php echo smarty_modifier_truncate($_smarty_tpl->getVariable('product')->value->annotation,100);?>
</p>
    	            	    </div>
						</div>
					<?php if ($_smarty_tpl->tpl_vars['product']->last||!($_smarty_tpl->tpl_vars['product']->iteration % 4)){?>
					</div>
				</div>
				<?php }?>
				<?php }} ?>
			</div>
		</div>
	</div>
	<?php }?>
</div>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_new_products'][0][0]->get_new_products_plugin(array('var'=>'new_products','limit'=>8),$_smarty_tpl);?>

<?php if ($_smarty_tpl->getVariable('new_products')->value){?>
<div class="boxed-area blocks-spacer">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="main-titles lined">
					<h2 class="title"><span class="light">Новые</span> товары</h2>
				</div>
			</div>
		</div>

		<div class="row popup-products blocks-spacer">
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('new_products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
if ($_smarty_tpl->tpl_vars['product']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
?>
			<div class="span3">
				<div class="product">
				   <div class="product-inner">
						<div class="product-img">
							<div class="picture">
								<a href="products/<?php echo $_smarty_tpl->getVariable('product')->value->url;?>
">
									<?php if ($_smarty_tpl->getVariable('product')->value->image){?>
									<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('product')->value->image->filename,200,200);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
"/>
									<?php }else{ ?>
									<img src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/no_image.png" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
"/>
									<?php }?>
								</a>
								
								<?php if (count($_smarty_tpl->getVariable('product')->value->variants)>0){?>
								<div class="img-overlay<?php if (count($_smarty_tpl->getVariable('product')->value->variants)>1){?> with_select<?php }?>">
									<form class="variants" action="/cart">
										<select name="variant" class="span2" <?php if (count($_smarty_tpl->getVariable('product')->value->variants)==1&&!$_smarty_tpl->getVariable('product')->value->variant->name){?>style='display:none;'<?php }?>>
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('product')->value->variants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
											<option value="<?php echo $_smarty_tpl->getVariable('v')->value->id;?>
" <?php if ($_smarty_tpl->getVariable('v')->value->compare_price>0){?>data-compare_price="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('v')->value->compare_price);?>
"<?php }?> data-price="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('v')->value->price);?>
"><?php echo $_smarty_tpl->getVariable('v')->value->name;?>
</option>
											<?php }} ?>
										</select>
										
										<a href="products/<?php echo $_smarty_tpl->getVariable('product')->value->url;?>
" class="btn more btn-primary">Подробнее</a>

										<input type="submit" class="btn buy btn-danger" value="в корзину" data-result-text="добавлено"/>
									</form>
								</div>
								<?php }?>
							</div>
						</div>
						
						<div class="main-titles no-margin">
							<h4 class="title">
								<span class="striked red-clr"><?php if ($_smarty_tpl->getVariable('product')->value->variant->compare_price>0){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('product')->value->variant->compare_price);?>
<?php }?></span> 
								
								<?php if (count($_smarty_tpl->getVariable('product')->value->variants)>0){?>
								<span class="v_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('product')->value->variant->price);?>
</span> <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('currency')->value->sign);?>

								<?php }else{ ?>
								<span class="v_price out_of_stock">Нет в наличии</span>
								<?php }?>
							</h4>
							<h5 class="no-margin"><a data-product="<?php echo $_smarty_tpl->getVariable('product')->value->id;?>
" href="products/<?php echo $_smarty_tpl->getVariable('product')->value->url;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
</a></h5>
						</div>
						
						<p class="desc"><?php echo smarty_modifier_truncate($_smarty_tpl->getVariable('product')->value->annotation,100);?>
</p>
					</div>
					<div class="product-cover"></div>
				</div>
			</div>
			<?php if (!($_smarty_tpl->tpl_vars['product']->iteration % 4)){?><div class="clearfix"></div><?php }?>
			<?php }} ?>
		</div>
	</div>
</div>
<?php }?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_discounted_products'][0][0]->get_discounted_products_plugin(array('var'=>'discounted_products','limit'=>4),$_smarty_tpl);?>

<?php if ($_smarty_tpl->getVariable('discounted_products')->value){?>
<div class="most-popular blocks-spacer">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="main-titles lined">
					<h2 class="title"><span class="light">Акционные</span> товары</h2>
				</div>
			</div>
		</div>

		<div class="row popup-products blocks-spacer">
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('discounted_products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
if ($_smarty_tpl->tpl_vars['product']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
?>
			<div class="span3">
				<div class="product">
					<div class="product-inner">
						<div class="product-img">
							<div class="picture">
								<a href="products/<?php echo $_smarty_tpl->getVariable('product')->value->url;?>
">
									<?php if ($_smarty_tpl->getVariable('product')->value->image){?>
									<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('product')->value->image->filename,200,200);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
"/>
									<?php }else{ ?>
									<img src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/no_image.png" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
"/>
									<?php }?>
								</a>
								
								<?php if (count($_smarty_tpl->getVariable('product')->value->variants)>0){?>
								<div class="img-overlay<?php if (count($_smarty_tpl->getVariable('product')->value->variants)>1){?> with_select<?php }?>">
									<form class="variants" action="/cart">
										<select name="variant" class="span2" <?php if (count($_smarty_tpl->getVariable('product')->value->variants)==1&&!$_smarty_tpl->getVariable('product')->value->variant->name){?>style='display:none;'<?php }?>>
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('product')->value->variants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
											<option value="<?php echo $_smarty_tpl->getVariable('v')->value->id;?>
" <?php if ($_smarty_tpl->getVariable('v')->value->compare_price>0){?>data-compare_price="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('v')->value->compare_price);?>
"<?php }?> data-price="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('v')->value->price);?>
"><?php echo $_smarty_tpl->getVariable('v')->value->name;?>
</option>
											<?php }} ?>
										</select>
										
										<a href="products/<?php echo $_smarty_tpl->getVariable('product')->value->url;?>
" class="btn more btn-primary">Подробнее</a>

										<input type="submit" class="btn buy btn-danger" value="в корзину" data-result-text="добавлено"/>
									</form>
								</div>
								<?php }?>
							</div>
						</div>
						
						<div class="main-titles no-margin">
							<h4 class="title">
								<span class="striked red-clr"><?php if ($_smarty_tpl->getVariable('product')->value->variant->compare_price>0){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('product')->value->variant->compare_price);?>
<?php }?></span> 
								
								<?php if (count($_smarty_tpl->getVariable('product')->value->variants)>0){?>
								<span class="v_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('product')->value->variant->price);?>
</span> <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('currency')->value->sign);?>

								<?php }else{ ?>
								<span class="v_price out_of_stock">Нет в наличии</span>
								<?php }?>
							</h4>
							
							<h5 class="no-margin"><a data-product="<?php echo $_smarty_tpl->getVariable('product')->value->id;?>
" href="products/<?php echo $_smarty_tpl->getVariable('product')->value->url;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
</a></h5>
						</div>
						
						<p class="desc"><?php echo smarty_modifier_truncate($_smarty_tpl->getVariable('product')->value->annotation,100);?>
</p>
					</div>
				</div>
			</div>
			<?php if (!($_smarty_tpl->tpl_vars['product']->iteration % 4)){?><div class="clearfix"></div><?php }?>
			<?php }} ?>
		</div>
	</div>
</div>
<?php }?>	