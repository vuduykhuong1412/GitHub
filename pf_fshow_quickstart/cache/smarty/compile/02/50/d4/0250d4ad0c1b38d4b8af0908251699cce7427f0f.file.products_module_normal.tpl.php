<?php /* Smarty version Smarty-3.1.19, created on 2015-11-20 03:21:23
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\themes\pf_fshow\sub\products_module_normal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2626564ed8038e3f79-94313073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0250d4ad0c1b38d4b8af0908251699cce7427f0f' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\sub\\products_module_normal.tpl',
      1 => 1447227168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2626564ed8038e3f79-94313073',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'columns' => 0,
    'nbr_desktops' => 0,
    'nbr_tablets' => 0,
    'nbr_mobile' => 0,
    'tabname' => 0,
    'items' => 0,
    'mitems' => 0,
    'titems' => 0,
    'nbItemsPerLine' => 0,
    'nbItemsPerLineDesktop' => 0,
    'nbItemsPerLineTablet' => 0,
    'nbItemsPerLineMobile' => 0,
    'is_pagebuilder' => 0,
    'list_mode_tpl' => 0,
    'item' => 0,
    'product_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ed803932913_69546537',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ed803932913_69546537')) {function content_564ed803932913_69546537($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['columns']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(12/$_smarty_tpl->tpl_vars['columns']->value, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['columns'] = new Smarty_variable(4, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(4, null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['nbr_desktops']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['nbItemsPerLineDesktop'] = new Smarty_variable(12/$_smarty_tpl->tpl_vars['nbr_desktops']->value, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['nbItemsPerLineDesktop'] = new Smarty_variable(4, null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['nbr_tablets']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['nbItemsPerLineTablet'] = new Smarty_variable(12/$_smarty_tpl->tpl_vars['nbr_tablets']->value, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['nbItemsPerLineTablet'] = new Smarty_variable(2, null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['nbr_mobile']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['nbItemsPerLineMobile'] = new Smarty_variable(12/$_smarty_tpl->tpl_vars['nbr_mobile']->value, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['nbItemsPerLineMobile'] = new Smarty_variable(1, null, 0);?>
<?php }?>
<ul id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tabname']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="list-unstyled product_list products-block row">
	<?php $_smarty_tpl->tpl_vars['mitems'] = new Smarty_variable(array_chunk($_smarty_tpl->tpl_vars['items']->value,$_smarty_tpl->tpl_vars['columns']->value), null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['titems'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['titems']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mitems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['titems']->key => $_smarty_tpl->tpl_vars['titems']->value) {
$_smarty_tpl->tpl_vars['titems']->_loop = true;
?>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['titems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<li class="ajax_block_product col-lg-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbItemsPerLine']->value, ENT_QUOTES, 'UTF-8', true);?>
 col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbItemsPerLineDesktop']->value, ENT_QUOTES, 'UTF-8', true);?>
 
			col-sm-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value, ENT_QUOTES, 'UTF-8', true);?>
 col-xs-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value, ENT_QUOTES, 'UTF-8', true);?>
 ">
				<?php if (isset($_smarty_tpl->tpl_vars['is_pagebuilder']->value)) {?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['list_mode_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['item']->value), 0);?>

				<?php } else { ?>
					<?php if (isset($_smarty_tpl->tpl_vars['product_style']->value)&&!empty($_smarty_tpl->tpl_vars['product_style']->value)) {?>
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/product/".((string)$_smarty_tpl->tpl_vars['product_style']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['item']->value,'class'=>''), 0);?>

					<?php } else { ?>
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/product/default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['item']->value,'class'=>''), 0);?>

					<?php }?>
				<?php }?>
			</li>
		<?php } ?>
	<?php } ?>
</ul>
 <?php }} ?>
