<?php /* Smarty version Smarty-3.1.19, created on 2015-12-06 22:29:13
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\pspagebuilder\views\templates\front\widgets\sub\item_manufacturer_grid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:282255664fd09f11789-97436132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '158ee338c19017bb261a64caa92baf435a37df58' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\pspagebuilder\\views\\templates\\front\\widgets\\sub\\item_manufacturer_grid.tpl',
      1 => 1447227086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282255664fd09f11789-97436132',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'link' => 0,
    'img_manu_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5664fd0a00cea3_58441029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5664fd0a00cea3_58441029')) {function content_5664fd0a00cea3_58441029($_smarty_tpl) {?>
<div class="manu-logo block_manuf clearfix">
	<a  href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['item']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['item']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'view products','mod'=>'pspagebuilder'),$_smarty_tpl);?>
">
	<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['img_manu_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-logo_brand.jpg" alt=""> </a>
</div><?php }} ?>
