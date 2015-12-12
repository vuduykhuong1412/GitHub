<?php /* Smarty version Smarty-3.1.19, created on 2015-11-27 22:56:21
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\ptsblockrelatedproducts\views\templates\hook\ptsblockrelatedproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23269565832ba65a318-19662503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a70b6fa29ae3740cbd1d71f976d2f58567667ce2' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\ptsblockrelatedproducts\\views\\templates\\hook\\ptsblockrelatedproducts.tpl',
      1 => 1448682977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23269565832ba65a318-19662503',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565832ba69f813_41204198',
  'variables' => 
  array (
    'columnspage' => 0,
    'products' => 0,
    'product_style' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565832ba69f813_41204198')) {function content_565832ba69f813_41204198($_smarty_tpl) {?>

<!-- MODULE Block ptsblockrelatedproducts -->
<?php $_smarty_tpl->tpl_vars['column'] = new Smarty_variable($_smarty_tpl->tpl_vars['columnspage']->value, null, 0);?>
<?php if (count($_smarty_tpl->tpl_vars['products']->value)>0) {?>
<div id="relatedproducts" class="block block-borderbox products_block ptsblockrelatedproducts">
		<h4 class="title_block">
			
		</h4>
		<div class="block_content">	
			<?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
				<?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable("ptsblockrelatedproducts", null, 0);?>
				<?php $_smarty_tpl->tpl_vars['columns'] = new Smarty_variable(4, null, 0);?>
				<?php $_smarty_tpl->tpl_vars['nbr_desktops'] = new Smarty_variable(4, null, 0);?>
				<?php $_smarty_tpl->tpl_vars['nbr_tablets'] = new Smarty_variable(2, null, 0);?>
				<?php $_smarty_tpl->tpl_vars['nbr_mobile'] = new Smarty_variable(1, null, 0);?>
				<?php ob_start();?><?php if (isset($_smarty_tpl->tpl_vars['product_style']->value)&&!empty($_smarty_tpl->tpl_vars['product_style']->value)) {?><?php echo (string)$_smarty_tpl->tpl_vars['product_style']->value;?><?php } else { ?><?php echo "style1";?><?php }?><?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/products_module.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['products']->value,'class'=>"products-block grid ".$_tmp1,'carousel_style'=>"boxcarousel"), 0);?>

			<?php }?>
		</div>
</div>
<?php }?>
 
<?php }} ?>
