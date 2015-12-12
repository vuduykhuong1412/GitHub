<?php /* Smarty version Smarty-3.1.19, created on 2015-11-26 05:23:46
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\pspagebuilder\views\templates\front\widgets\widget_productrecommended.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2192756553b170c6567-50551191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e48f2dd70e1fef3c6d9ab53caa1b970d7f0ebd35' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\pspagebuilder\\views\\templates\\front\\widgets\\widget_productrecommended.tpl',
      1 => 1448533423,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2192756553b170c6567-50551191',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56553b17835097_57495839',
  'variables' => 
  array (
    'products' => 0,
    'addition_cls' => 0,
    'stylecls' => 0,
    'widget_heading' => 0,
    'sub_title' => 0,
    'product' => 0,
    'scolumn' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56553b17835097_57495839')) {function content_56553b17835097_57495839($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
<div class="widget widget-products <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addition_cls']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php if (isset($_smarty_tpl->tpl_vars['stylecls']->value)&&$_smarty_tpl->tpl_vars['stylecls']->value) {?>block-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylecls']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block space-60">
		<span class="sub-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
		<span class="blog_title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
	</h4>
	<?php }?>
	<?php $_smarty_tpl->tpl_vars['scolumn'] = new Smarty_variable(3, null, 0);?>
	<div class="widget-inner block_content">
		<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	 		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['product_name']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['product_name']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
	 			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['product_name']['first']) {?>
	 				<div class="products-style">
	 						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/product/style-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'class'=>''), 0);?>

	 				</div>
	 				<div class="row list-unstyled product_list products-block">
	 			<?php }?>
	 					<div class="col-xs-12 col-sm-6 col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scolumn']->value, ENT_QUOTES, 'UTF-8', true);?>
 col-lg-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scolumn']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	 						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/product/default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'class'=>''), 0);?>

	 					</div>
	 			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['product_name']['last']) {?>
	 				</div>
	 			<?php }?>
	 		<?php } ?>
		<?php }?>
	</div>
</div>
<?php }?><?php }} ?>
