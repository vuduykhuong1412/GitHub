<?php /* Smarty version Smarty-3.1.19, created on 2015-11-20 03:21:28
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\psmegamenu\views\templates\front\widgets\widget_manufacture.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22912564ed808ec91b7-92624363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76736c01a3cfefcf071136371673f24749ee911e' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\psmegamenu\\views\\templates\\front\\widgets\\widget_manufacture.tpl',
      1 => 1447227082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22912564ed808ec91b7-92624363',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'widget_heading' => 0,
    'manufacturers' => 0,
    'manufacturer' => 0,
    'link' => 0,
    'img_manu_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ed808f37ae6_88268825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ed808f37ae6_88268825')) {function content_564ed808f37ae6_88268825($_smarty_tpl) {?>
<div class="widget-manufacture">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="widget-heading title_block">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>

	</div>
	<?php }?>
	<div class="widget-inner block_content">
		<div class="manu-logo">
			<?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
?>
			<a  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"  title="<?php echo smartyTranslate(array('s'=>'view products','mod'=>'psmegamenu'),$_smarty_tpl);?>
">
			<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_manu_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-logo_brand.jpg" alt=""/> </a>
			<?php } ?>
		</div>
	</div>
</div>
 <?php }} ?>
