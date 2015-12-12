<?php /* Smarty version Smarty-3.1.19, created on 2015-11-22 23:36:25
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\blockbestsellers\blockbestsellers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32223565297c99a2e25-50521173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b40e3c389666ba67274b22cc914b1a714dc037b5' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\blockbestsellers\\blockbestsellers.tpl',
      1 => 1447227034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32223565297c99a2e25-50521173',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_sellers' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565297c9a4f649_48152668',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565297c9a4f649_48152668')) {function content_565297c9a4f649_48152668($_smarty_tpl) {?>

<!-- MODULE Block best sellers -->

	<div id="best-sellers_block_right" class="block block-borderbox products_block">
		<h4 class="title_block">
	    	<?php echo smartyTranslate(array('s'=>'Top sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>

	    </h4>
		<div class="block_content box-content">
		<?php if ($_smarty_tpl->tpl_vars['best_sellers']->value&&count($_smarty_tpl->tpl_vars['best_sellers']->value)>0) {?>
		    <?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['best_sellers']->value, null, 0);?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/product/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value,'mod'=>'blockbestsellers'), 0);?>

		<?php } else { ?>
			<p><?php echo smartyTranslate(array('s'=>'No best sellers at this time','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</p>
		<?php }?>
		</div>
	</div>
<!-- /MODULE Block best sellers --><?php }} ?>
