<?php /* Smarty version Smarty-3.1.19, created on 2015-11-23 21:07:44
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\pspagebuilder\views\templates\front\widgets\widget_image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30801564ed80290a0c6-20194111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1574f1e6acb9ae1c41adce4b254ac6c4420d3178' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\pspagebuilder\\views\\templates\\front\\widgets\\widget_image.tpl',
      1 => 1448330860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30801564ed80290a0c6-20194111',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ed802961607_27377686',
  'variables' => 
  array (
    'thumbnailurl' => 0,
    'addition_cls' => 0,
    'stylecls' => 0,
    'widget_heading' => 0,
    'ispopup' => 0,
    'imageurl' => 0,
    'link_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ed802961607_27377686')) {function content_564ed802961607_27377686($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['thumbnailurl']->value)) {?>
<div class="widget-images block <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addition_cls']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php if (isset($_smarty_tpl->tpl_vars['stylecls']->value)&&$_smarty_tpl->tpl_vars['stylecls']->value) {?>block-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylecls']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>

	</h4>
	<?php }?>
	<div class="widget-inner block_content clearfix">
		 <div class="image-item">
		 	<?php if ($_smarty_tpl->tpl_vars['ispopup']->value) {?>
		 	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="pts-popup fancybox" title="<?php echo smartyTranslate(array('s'=>'Large Image','mod'=>'pspagebuilder'),$_smarty_tpl);?>
"><span class="icon icon-search-plus"></span></a>
		 	<?php }?>
		 	
		 	<?php if ($_smarty_tpl->tpl_vars['link_url']->value) {?>
		 	<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="pts-btnlink img-animation" title="<?php echo smartyTranslate(array('s'=>'Large Image','mod'=>'pspagebuilder'),$_smarty_tpl);?>
">
		 	<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thumbnailurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" alt="" /></a>
		 	<?php } else { ?>

		 	<span class="img-animation"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thumbnailurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" alt="" /></span>
			<?php }?>
		 </div>
	</div>
</div>
<?php }?> <?php }} ?>
