<?php /* Smarty version Smarty-3.1.19, created on 2015-12-06 22:27:14
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\ptsblockrelatedproducts\ptsblockrelatedproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:246355664fc92a74042-64444936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5297a94d1e30c428b4ea1c66ad32e65502f0010e' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\ptsblockrelatedproducts\\ptsblockrelatedproducts.tpl',
      1 => 1448684595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246355664fc92a74042-64444936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'columnspage' => 0,
    'products' => 0,
    'product_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5664fc92b5f309_89518469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5664fc92b5f309_89518469')) {function content_5664fc92b5f309_89518469($_smarty_tpl) {?>

<!-- MODULE Block ptsblockrelatedproducts -->
<?php $_smarty_tpl->tpl_vars['column'] = new Smarty_variable($_smarty_tpl->tpl_vars['columnspage']->value, null, 0);?>
<?php if (count($_smarty_tpl->tpl_vars['products']->value)>0) {?>
<div id="relatedproducts" class="block products_block ptsblockrelatedproducts">
		<h4 class="title_block space-padding-tb-60">
			<span class="sub-title"><?php echo htmlspecialchars('Similar', ENT_QUOTES, 'UTF-8', true);?>
</span>
			<span class="blog_title"><?php echo smartyTranslate(array('s'=>'Products','mod'=>'ptsblockrelatedproducts'),$_smarty_tpl);?>
</span>
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
