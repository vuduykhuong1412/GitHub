<?php /* Smarty version Smarty-3.1.19, created on 2015-12-06 22:15:34
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\pspagebuilder\views\templates\front\widgets\widget_categoriesinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:298355664f9d667e4c4-03746429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0faf0796a0040ded141047066ca30104cb89a30' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\pspagebuilder\\views\\templates\\front\\widgets\\widget_categoriesinfo.tpl',
      1 => 1447928007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298355664f9d667e4c4-03746429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories_info' => 0,
    'widget_heading' => 0,
    'itemsperpage' => 0,
    'mcategories' => 0,
    'category' => 0,
    'scolumn' => 0,
    'show_cat_title' => 0,
    'cat' => 0,
    'link' => 0,
    'show_nb_product' => 0,
    'show_image' => 0,
    'show_description' => 0,
    'limit_description' => 0,
    'show_sub_category' => 0,
    'subcategory' => 0,
    'show_products' => 0,
    'display_mode' => 0,
    'items_owl_carousel_tpl' => 0,
    'items_normal_tpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5664f9d674db29_15588449',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5664f9d674db29_15588449')) {function content_5664f9d674db29_15588449($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['categories_info']->value) {?>
<!-- Block categories module -->
<div class="block block-highlighted no-margin">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="widget-heading title_block">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>

	</div>
	<?php }?>
	<?php $_smarty_tpl->tpl_vars['itemsperpage'] = new Smarty_variable(4, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['scolumn'] = new Smarty_variable(3, null, 0);?>
	<div class="block_content boxcarousel">
		<?php $_smarty_tpl->tpl_vars['mcategories'] = new Smarty_variable(array_chunk($_smarty_tpl->tpl_vars['categories_info']->value,$_smarty_tpl->tpl_vars['itemsperpage']->value), null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['category']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['category']->index++;
 $_smarty_tpl->tpl_vars['category']->first = $_smarty_tpl->tpl_vars['category']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['mcategory_name']['first'] = $_smarty_tpl->tpl_vars['category']->first;
?>
			<ul class="category_list row item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['mcategory_name']['first']) {?>active<?php }?>">
				<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
					<li class="ajax_block_product col-xs-12 col-sm-3 col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scolumn']->value, ENT_QUOTES, 'UTF-8', true);?>
 col-lg-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scolumn']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	
		                <div class="categories-right">
			                <?php if ($_smarty_tpl->tpl_vars['show_cat_title']->value) {?>
			                	<h3><a href="<?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['id_category'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_tmp1), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></h3>
			                <?php }?>

			                <?php if ($_smarty_tpl->tpl_vars['show_nb_product']->value) {?>
			                	<span><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['nb_products'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo smartyTranslate(array('s'=>'Products','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</span>
			                <?php }?>
			            </div>

			            <?php if ($_smarty_tpl->tpl_vars['show_image']->value&&($_smarty_tpl->tpl_vars['cat']->value['id_image']||(isset($_smarty_tpl->tpl_vars['cat']->value['icon'])&&$_smarty_tpl->tpl_vars['cat']->value['icon'])||(isset($_smarty_tpl->tpl_vars['cat']->value['icon_class'])&&$_smarty_tpl->tpl_vars['cat']->value['icon_class']))) {?>
							<div class="categories-left">
								<a href="<?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['id_category'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp2=ob_get_clean();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_tmp2), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
									<?php if (isset($_smarty_tpl->tpl_vars['cat']->value['icon'])&&$_smarty_tpl->tpl_vars['cat']->value['icon']) {?>
										<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['icon'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" />
									<?php } elseif (isset($_smarty_tpl->tpl_vars['cat']->value['icon_class'])&&$_smarty_tpl->tpl_vars['cat']->value['icon_class']) {?>
										<icon class="<?php echo $_smarty_tpl->tpl_vars['cat']->value['icon_class'];?>
"></icon>
									<?php } elseif ($_smarty_tpl->tpl_vars['cat']->value['id_image']) {?>
		               		     		<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['cat']->value['link_rewrite'],$_smarty_tpl->tpl_vars['cat']->value['id_image'],'medium_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" />
									<?php }?>
	               		     	</a>
		               		</div>
		                <?php }?>

		                <?php if ($_smarty_tpl->tpl_vars['show_description']->value) {?>
		                    <span><?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['limit_description']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp3=ob_get_clean();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['cat']->value['description']),$_tmp3), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
		                <?php }?>
		                <?php if ($_smarty_tpl->tpl_vars['show_sub_category']->value&&$_smarty_tpl->tpl_vars['cat']->value['subcategories']) {?>
		                    <ul>
		                    <?php  $_smarty_tpl->tpl_vars['subcategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value['subcategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->key => $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->_loop = true;
?>
		                        <li><a href="<?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['id_category'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp4=ob_get_clean();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_tmp4), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></li>
		                    <?php } ?>
		                    </ul>
		                <?php }?>
		                <?php if ($_smarty_tpl->tpl_vars['show_products']->value&&$_smarty_tpl->tpl_vars['cat']->value['products']) {?>
		                    <div class="widget-inner block_content">
						 		<?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable(rand()+count($_smarty_tpl->tpl_vars['cat']->value['products']), null, 0);?>
								<?php if (isset($_smarty_tpl->tpl_vars['display_mode']->value)&&$_smarty_tpl->tpl_vars['display_mode']->value=='carousel') {?>
									<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['items_owl_carousel_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['cat']->value['products']), 0);?>

								<?php } else { ?>
									<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['items_normal_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['cat']->value['products']), 0);?>

								<?php }?>
							</div>
		                <?php }?>
					</li>
				<?php } ?>
			</ul>
		<?php } ?>
	</div>
</div>
<!-- /Block categories module -->
<?php }?>
<?php }} ?>
