<?php /* Smarty version Smarty-3.1.19, created on 2015-12-06 22:20:02
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\themes\pf_fshow\sub\products_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166965664fae2aee538-52450406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b03dd04bd067f9331c36532349d430d27a80e3e' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\sub\\products_module.tpl',
      1 => 1447227166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166965664fae2aee538-52450406',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tabname' => 0,
    'items' => 0,
    'columns' => 0,
    'list_mode' => 0,
    'nbr_desktops' => 0,
    'nbr_tablets' => 0,
    'nbr_mobile' => 0,
    'is_pagebuilder' => 0,
    'list_mode_tpl' => 0,
    'item' => 0,
    'product_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5664fae2bc4059_56859053',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5664fae2bc4059_56859053')) {function content_5664fae2bc4059_56859053($_smarty_tpl) {?><div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tabname']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="widget-content boxcarousel owl-carousel-play" data-ride="owlcarousel">
 	<?php if (count($_smarty_tpl->tpl_vars['items']->value)>$_smarty_tpl->tpl_vars['columns']->value) {?>
	 	<div class="carousel-controls">
		 	<a class="carousel-control carousel-sm left left_carousel" href="#"><span class="icon-prev"></span></a>
			<a class="carousel-control carousel-sm right right_carousel" href="#"><span class="icon-next"></span></a>
		</div>
	<?php }?>
	<div class="owl-carousel product_list products-block <?php if (isset($_smarty_tpl->tpl_vars['list_mode']->value)&&$_smarty_tpl->tpl_vars['list_mode']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_mode']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" data-columns="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-pagination="false" data-navigation="true"
		<?php if (isset($_smarty_tpl->tpl_vars['nbr_desktops']->value)) {?>data-desktop="[1200,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbr_desktops']->value, ENT_QUOTES, 'UTF-8', true);?>
]"<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['nbr_tablets']->value)) {?>data-desktopsmall="[992,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbr_tablets']->value, ENT_QUOTES, 'UTF-8', true);?>
]"<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['nbr_mobile']->value)) {?>data-tablet="[768,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbr_mobile']->value, ENT_QUOTES, 'UTF-8', true);?>
]"<?php }?>
		data-mobile="[480,1]">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<div class="item ajax_block_product">
			<?php if (isset($_smarty_tpl->tpl_vars['is_pagebuilder']->value)) {?>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['list_mode_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['item']->value), 0);?>

			<?php } else { ?>
				<?php if (isset($_smarty_tpl->tpl_vars['product_style']->value)&&!empty($_smarty_tpl->tpl_vars['product_style']->value)) {?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/product/".((string)$_smarty_tpl->tpl_vars['product_style']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['item']->value,'class'=>''), 0);?>

				<?php } else { ?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/product/default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['item']->value,'class'=>''), 0);?>

				<?php }?>
			<?php }?>
		</div>
	<?php } ?>
	</div>
</div><?php }} ?>
