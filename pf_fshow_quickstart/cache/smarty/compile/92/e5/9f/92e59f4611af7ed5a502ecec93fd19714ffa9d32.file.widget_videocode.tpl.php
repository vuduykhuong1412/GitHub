<?php /* Smarty version Smarty-3.1.19, created on 2015-11-20 03:21:28
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\psmegamenu\views\templates\front\widgets\widget_videocode.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20500564ed808ba3bf8-60442201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92e59f4611af7ed5a502ecec93fd19714ffa9d32' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\psmegamenu\\views\\templates\\front\\widgets\\widget_videocode.tpl',
      1 => 1447227084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20500564ed808ba3bf8-60442201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'video_link' => 0,
    'widget_heading' => 0,
    'width' => 0,
    'height' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ed808bbeb07_90043469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ed808bbeb07_90043469')) {function content_564ed808bbeb07_90043469($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['video_link']->value)) {?>
<div class="widget-video">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="widget-heading">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>

	</div>
	<?php }?>
	<div class="widget-inner">
		<iframe src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['video_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8', true);?>
;height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['height']->value, ENT_QUOTES, 'UTF-8', true);?>
;" allowfullscreen></iframe>
	</div>
</div>
<?php }?><?php }} ?>
