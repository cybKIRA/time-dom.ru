<?php /* Smarty version Smarty-3.0.7, created on 2015-02-07 19:43:02
         compiled from "/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87220094254d63286c88e31-26248851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c2622b53d153e58a593696e8b8968aebaa61e33' => 
    array (
      0 => '/var/www/asrumyantsev/data/www/time-dom.ru//design/webmarket/html/products.tpl',
      1 => 1423142205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87220094254d63286c88e31-26248851',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/asrumyantsev/data/www/time-dom.ru/Smarty/libs/plugins/modifier.escape.php';
if (!is_callable('smarty_modifier_regex_replace')) include '/var/www/asrumyantsev/data/www/time-dom.ru/Smarty/libs/plugins/modifier.regex_replace.php';
?>
<?php if ($_smarty_tpl->getVariable('category')->value&&$_smarty_tpl->getVariable('brand')->value){?>
<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/catalog/".($_smarty_tpl->getVariable('category')->value->url)."/".($_smarty_tpl->getVariable('brand')->value->url), null, 1);?>
<?php }elseif($_smarty_tpl->getVariable('category')->value){?>
<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/catalog/".($_smarty_tpl->getVariable('category')->value->url), null, 1);?>
<?php }elseif($_smarty_tpl->getVariable('brand')->value){?>
<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/brands/".($_smarty_tpl->getVariable('brand')->value->url), null, 1);?>
<?php }elseif($_smarty_tpl->getVariable('keyword')->value){?>
<?php ob_start();?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('keyword')->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/products?keyword=".$_tmp1, null, 1);?>
<?php }else{ ?>
<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/products", null, 1);?>
<?php }?>

<div class="darker-stripe">
	<div class="container">
		<div class="row">
			<div class="span12">
				<ul class="breadcrumb">
					<li><a href="/">Главная</a></li>
					<?php if ($_smarty_tpl->getVariable('category')->value){?>
					<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('category')->value->path; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
?>
						<li><span class="icon-chevron-right"></span></li>
						<li><a href="catalog/<?php echo $_smarty_tpl->getVariable('cat')->value->url;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('cat')->value->name);?>
</a></li>
					<?php }} ?>  
					<?php if ($_smarty_tpl->getVariable('brand')->value){?>
						<li><span class="icon-chevron-right"></span></li>
						<li><a href="catalog/<?php echo $_smarty_tpl->getVariable('cat')->value->url;?>
/<?php echo $_smarty_tpl->getVariable('brand')->value->url;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('brand')->value->name);?>
</a></li>
					<?php }?>
					<?php }elseif($_smarty_tpl->getVariable('brand')->value){?>
						<li><span class="icon-chevron-right"></span></li> 
						<li><a href="brands/<?php echo $_smarty_tpl->getVariable('brand')->value->url;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('brand')->value->name);?>
</a></li>
					<?php }elseif($_smarty_tpl->getVariable('keyword')->value){?>
						<li><span class="icon-chevron-right"></span></li>
						<li>Поиск</li>
					<?php }?>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="push-up blocks-spacer">
		<div class="row">
			<?php if ($_smarty_tpl->getVariable('products')->value){?>
			<aside class="span3 left-sidebar" id="tourStep1">
				<div class="sidebar-item sidebar-filters" id="sidebarFilters">
					<div class="underlined">
						<h3><span class="light">Фильтр</span> товаров</h3>
					</div>

					<?php if ($_smarty_tpl->getVariable('category')->value->subcategories){?>
					<div class="accordion-group" id="tourStep2">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" href="#filterOne">Категория <b class="caret"></b></a>
						</div>
						<div id="filterOne" class="accordion-body collapse in">
							<div class="accordion-inner">
								<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('category')->value->subcategories; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
?>
									<?php if ($_smarty_tpl->getVariable('c')->value->visible){?>
										<a href="#" data-target=".cat_<?php echo $_smarty_tpl->getVariable('c')->value->id;?>
" class="selectable"><i class="box"></i> <?php echo $_smarty_tpl->getVariable('c')->value->name;?>
</a>
									<?php }?>
								<?php }} ?>
							</div>
						</div>
					</div>
					<?php }?>
					
					
                 
                 <div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" href="#filterPrices">Цена <b class="caret"></b></a>
						</div>
						<div id="filterPrices" class="accordion-body in collapse">
							<div class="accordion-inner with-slider">
								<div class="jqueryui-slider-container">
									<div id="pricesRange"></div>
								</div>
								<input type="text"  class="max-val pull-right" disabled />
								<input type="text" class="min-val" disabled />								
								<input type="hidden" value="<?php echo smarty_modifier_regex_replace($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('minprice')->value),'/[ ]/','');?>
" id="f_minPrice">
								<input type="hidden" value="<?php echo smarty_modifier_regex_replace($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('maxprice')->value),'/[ ]/','');?>
" id="f_maxPrice">

								<?php if ($_smarty_tpl->getVariable('currency')->value->code=='RUB'){?>
									<input type="hidden" value="false" id="f_currencyBefore">
									<input type="hidden" value="100" id="f_priceStep">
									<input type="hidden" value=" Руб." id="f_currencySymbol">
								<?php }else{ ?>
									<input type="hidden" value="true" id="f_currencyBefore">
									<input type="hidden" value="10" id="f_priceStep">
									<input type="hidden" value="$" id="f_currencySymbol">
								<?php }?>
							</div>
						</div>
					</div>
                 
                 

					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" href="#stock">Есть в наличии<b class="caret"></b></a>
						</div>
						<div id="stock" class="accordion-body in">
							<div class="accordion-inner">
								<a href="#" data-target="in" data-type="stock"  class="selectable detailed"><i class="box"></i> Да</a>
							</div>
						</div>
					</div>
					
					<?php if ($_smarty_tpl->getVariable('features')->value){?>
					<?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('features')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
?>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" href="#filter_<?php echo $_smarty_tpl->getVariable('f')->value->id;?>
"><?php echo $_smarty_tpl->getVariable('f')->value->name;?>
 <b class="caret"></b></a>
						</div>
						<div id="filter_<?php echo $_smarty_tpl->getVariable('f')->value->id;?>
" class="accordion-body in">
							<div class="accordion-inner">
								<?php  $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('f')->value->options; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['o']->key => $_smarty_tpl->tpl_vars['o']->value){
?>
									<a href="#" data-target="<?php echo smarty_modifier_regex_replace(smarty_modifier_escape($_smarty_tpl->getVariable('o')->value->value,'url'),'/[^a-zA-ZА-Яа-я0-9\s]/','');?>
" data-type="f<?php echo $_smarty_tpl->getVariable('f')->value->id;?>
"  class="selectable detailed"><i class="box"></i> <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('o')->value->value);?>
</a>
								<?php }} ?>
							</div>
						</div>
					</div>
					<?php }} ?>
					<?php }?>
					
					<?php if ($_smarty_tpl->getVariable('category')->value->brands){?>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle collapsed" data-toggle="collapse" href="#filterBrand">Производитель <b class="caret"></b></a>
						</div>
						<div id="filterBrand" class="accordion-body collapse">
							<div class="accordion-inner">
								<?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('category')->value->brands; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
?>
								<a href="#" data-target="brand_<?php echo $_smarty_tpl->getVariable('b')->value->id;?>
" data-type="brand" class="selectable detailed"><i class="box"></i> <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('b')->value->name);?>
</a>
								<?php }} ?>
							</div>
						</div>
					</div>
					<?php }?>

					<a href="#" class="remove-filter" id="removeFilters"><span class="icon-ban-circle"></span> Очистить фильтр</a>
				</div>
			</aside>
			
			<section class="span9">
				<div class="underlined push-down-20">
					<div class="row">
						<div class="span4">
							<?php if ($_smarty_tpl->getVariable('keyword')->value){?>
							<h3><span class="light">Поиск</span> <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('keyword')->value);?>
</h3>
							<?php }elseif($_smarty_tpl->getVariable('page')->value){?>
							<h3><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('page')->value->name);?>
</h3>
							<?php }else{ ?>
							<h3><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('category')->value->name);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('brand')->value->name);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('keyword')->value);?>
</h3>
							<?php }?>
						</div>
						
						<div class="span5 align-right sm-align-left">
							<div class="form-inline sorting-by" id="tourStep4">
								<label for="isotopeSorting" class="black-clr">Сортировать:</label>
								
								<select id="isotopeSorting" class="span3">
									<option value='{"sortBy":"original", "sortAscending":"true"}' selected>По умолчанию</option>
									<option value='{"sortBy":"price", "sortAscending":"true"}'>По цене &uarr;</option>
									<option value='{"sortBy":"price", "sortAscending":"false"}'>По цене &darr;</option>
									<option value='{"sortBy":"name", "sortAscending":"true"}'>По названию &uarr;</option>
									<option value='{"sortBy":"name", "sortAscending":"false"}'>По названию &darr;</option>
								</select>
								
							</div>
						</div>
					</div>
				</div>

				<div class="noResultsContainer">
				   <div class="alert in fade">
						Заданным характеристикам не соответствует ни одна модель
					</div>
				</div>
				
				<div class="row popup-products">
					<div id="isotopeContainer" class="isotope-container grid">
						<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
?>
						<div class="span3 isotope--target cat_<?php echo $_smarty_tpl->getVariable('product')->value->category->id;?>
" 
								
                                <?php if ($_smarty_tpl->getVariable('currency')->value->code=='RUB'){?>
									data-price="<?php if (count($_smarty_tpl->getVariable('product')->value->variants)>0){?><?php echo smarty_modifier_regex_replace($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('product')->value->variant->price),'/[ ]/','');?>
<?php }else{ ?><?php echo smarty_modifier_regex_replace($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('minprice')->value),'/[ ]/','');?>
<?php }?>" 
								
                                <?php }else{ ?>                                
                                   data-price="<?php if (count($_smarty_tpl->getVariable('product')->value->variants)>0){?><?php echo substr(smarty_modifier_regex_replace($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('product')->value->variant->price),'/[ ]/',''),0,-3);?>
<?php }else{ ?><?php echo substr(smarty_modifier_regex_replace($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('minprice')->value),'/[ ]/',''),0,-3);?>
<?php }?>" 
								
                                <?php }?>
                             
                             
                             
								data-name="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
"
								data-brand="brand_<?php echo $_smarty_tpl->getVariable('product')->value->brand_id;?>
"
								data-stock="<?php if (count($_smarty_tpl->getVariable('product')->value->variants)>0){?>in<?php }else{ ?>out<?php }?>"
								<?php if ($_smarty_tpl->getVariable('product')->value->options){?>
									<?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('product')->value->options; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
?>
									data-f<?php echo $_smarty_tpl->getVariable('f')->value->feature_id;?>
="<?php echo smarty_modifier_regex_replace(smarty_modifier_escape($_smarty_tpl->getVariable('f')->value->value,'url'),'/[^a-zA-ZА-Яа-я0-9\s]/','');?>
"
									<?php }} ?>
								<?php }?>
						>
							<div class="product">
								<div class="product-inner">
									<?php if ($_smarty_tpl->getVariable('product')->value->featured){?>
										<div class="stamp green">Хит</div>
									<?php }?>
									
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

													<input type="submit" class="btn buy btn-danger" value="В корзину" data-result-text="Добавлено"/>
												</form>
											</div>
											<?php }?>
										</div>
									</div>
									
									<div class="main-titles no-margin">
										<h4 class="title">
											<span class="striked red-clr"><?php if ($_smarty_tpl->getVariable('product')->value->variant->compare_price>0){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('product')->value->variant->compare_price);?>
<?php }?></span> 
											
											<?php if ($_smarty_tpl->getVariable('product')->value->variant->stock>0){?>
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
								</div>
								<div class="product-cover"></div>
							</div>
						</div>
						<?php }} ?>
					</div>
				</div>
				
				<hr />

				<div class="pagination">
					<input type="hidden" id="current_page" value="1">
					<input type="hidden" id="total_pages_num" value="<?php echo $_smarty_tpl->getVariable('total_pages_num')->value;?>
">
					
					<?php if ($_smarty_tpl->getVariable('current_page_num')->value<$_smarty_tpl->getVariable('total_pages_num')->value){?>
						<a class="btn btn-primary next_page_link push-down-20" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->getVariable('current_page_num')->value+1),$_smarty_tpl);?>
">Показать больше товаров</a>
					<?php }?>
				</div>
			</section>
			
			<?php }else{ ?>
			
			<section class="span12">
				<div class="underlined push-down-20">
					<div class="row">
						<div class="span12">
							<h3><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('category')->value->name);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('brand')->value->name);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('keyword')->value);?>
</h3>
						</div>
					</div>
				</div>

				<div class="alert in fade">
					Товары не найдены
				</div>
			</section>
			<?php }?>	
		</div>			
	</div>			
</div>