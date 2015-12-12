<?php /* Smarty version Smarty-3.1.19, created on 2015-12-10 04:56:40
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\pspagebuilder\views\templates\front\widgets\widget_products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106005664f9d6865a30-78855100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0c67afb4bda9a56339649002b964ecbd9a325ed' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\pspagebuilder\\views\\templates\\front\\widgets\\widget_products.tpl',
      1 => 1449741397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106005664f9d6865a30-78855100',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5664f9d68ec506_39768981',
  'variables' => 
  array (
    'products' => 0,
    'addition_cls' => 0,
    'stylecls' => 0,
    'widget_heading' => 0,
    'sub_title' => 0,
    'description' => 0,
    'banner_imagefile' => 0,
    'bannerurl' => 0,
    'display_mode' => 0,
    'items_owl_carousel_tpl' => 0,
    'items_normal_tpl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5664f9d68ec506_39768981')) {function content_5664f9d68ec506_39768981($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
<div class="widget widget-products <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addition_cls']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php if (isset($_smarty_tpl->tpl_vars['stylecls']->value)&&$_smarty_tpl->tpl_vars['stylecls']->value) {?>block-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylecls']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block space-60">
		<?php if (isset($_smarty_tpl->tpl_vars['sub_title']->value)&&$_smarty_tpl->tpl_vars['sub_title']->value) {?>
			<span class="sub-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
		<?php }?>
		<span class="blog_title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
		
		<?php if (isset($_smarty_tpl->tpl_vars['description']->value)&&$_smarty_tpl->tpl_vars['description']->value) {?>
			<?php echo $_smarty_tpl->tpl_vars['description']->value;?>

		<?php }?>
	</h4>
	<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['banner_imagefile']->value)&&$_smarty_tpl->tpl_vars['banner_imagefile']->value&&$_smarty_tpl->tpl_vars['bannerurl']->value) {?>
			<div class="col-lg-3 col-md-3  col-xs-12 no-padding col-left effect-v10 hidden-sm">
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bannerurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>banner<?php }?>">
			</div>
		<?php }?>


		<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
		    <div class="widget-inner block_content col-right <?php if (isset($_smarty_tpl->tpl_vars['banner_imagefile']->value)&&$_smarty_tpl->tpl_vars['banner_imagefile']->value&&$_smarty_tpl->tpl_vars['bannerurl']->value) {?> col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding <?php } else { ?> col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding <?php }?>">
		 		<?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable(rand()+count($_smarty_tpl->tpl_vars['products']->value), null, 0);?>

				<?php if (isset($_smarty_tpl->tpl_vars['display_mode']->value)&&$_smarty_tpl->tpl_vars['display_mode']->value=='carousel') {?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['items_owl_carousel_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['products']->value,'class'=>"product_list products-block"), 0);?>

				<?php } else { ?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['items_normal_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['products']->value,'class'=>"product_list products-block"), 0);?>

				<?php }?>
			</div>
		<?php }?>
</div>
<?php }?><?php }} ?>
