<?php /* Smarty version Smarty-3.1.19, created on 2015-12-10 02:22:53
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\blockbestsellers\blockbestsellers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83755669284d59bc41-81928028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bf053b856ec3a3ad2f3fa8a0eb67726524cce7b' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\blockbestsellers\\blockbestsellers.tpl',
      1 => 1447227034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83755669284d59bc41-81928028',
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
  'unifunc' => 'content_5669284d98c261_96937561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5669284d98c261_96937561')) {function content_5669284d98c261_96937561($_smarty_tpl) {?>

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
