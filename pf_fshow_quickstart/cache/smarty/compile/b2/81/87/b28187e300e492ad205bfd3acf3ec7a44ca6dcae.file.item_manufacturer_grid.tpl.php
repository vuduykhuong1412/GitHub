<?php /* Smarty version Smarty-3.1.19, created on 2015-11-23 05:30:31
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\pspagebuilder\views\templates\front\widgets\sub\item_manufacturer_grid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130585652eac781cec2-50571336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b28187e300e492ad205bfd3acf3ec7a44ca6dcae' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\pspagebuilder\\views\\templates\\front\\widgets\\sub\\item_manufacturer_grid.tpl',
      1 => 1447227086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130585652eac781cec2-50571336',
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
  'unifunc' => 'content_5652eac7867714_00306971',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652eac7867714_00306971')) {function content_5652eac7867714_00306971($_smarty_tpl) {?>
<div class="manu-logo block_manuf clearfix">
	<a  href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['item']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['item']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'view products','mod'=>'pspagebuilder'),$_smarty_tpl);?>
">
	<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['img_manu_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-logo_brand.jpg" alt=""> </a>
</div><?php }} ?>
