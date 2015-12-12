<?php /* Smarty version Smarty-3.1.19, created on 2015-11-20 03:21:24
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\pspagebuilder\views\templates\front\widgets\widget_bloglatest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28413564ed804cb5c17-68104833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f20445730571704ca088189c3e32adc89ade714' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\pspagebuilder\\views\\templates\\front\\widgets\\widget_bloglatest.tpl',
      1 => 1447831754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28413564ed804cb5c17-68104833',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tabname' => 0,
    'addition_cls' => 0,
    'stylecls' => 0,
    'sub_title' => 0,
    'config' => 0,
    'view_all_link' => 0,
    'blogs' => 0,
    'display_mode' => 0,
    'items_owl_carousel_tpl' => 0,
    'items_normal_tpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ed804d7ca97_30681531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ed804d7ca97_30681531')) {function content_564ed804d7ca97_30681531($_smarty_tpl) {?>

<div id="ptsblockblogstabs<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tabname']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="widget widget-latestblog <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addition_cls']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php if (isset($_smarty_tpl->tpl_vars['stylecls']->value)&&$_smarty_tpl->tpl_vars['stylecls']->value) {?>block-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylecls']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
	<h4 class="title_block space-60">
		<span class="sub-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
		<span class="blog_title"><?php echo smartyTranslate(array('s'=>'From Blogs','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</span>
		<?php if ($_smarty_tpl->tpl_vars['config']->value->get('blockpts_blogs_show',1)) {?>
			<a class="pull-right" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_all_link']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View all','mod'=>'pspagebuilder'),$_smarty_tpl);?>
"></a>
		<?php }?>
	</h4>
	<div class="block_content">
		<?php if (!empty($_smarty_tpl->tpl_vars['blogs']->value)) {?>
			<?php if (isset($_smarty_tpl->tpl_vars['display_mode']->value)&&$_smarty_tpl->tpl_vars['display_mode']->value=='carousel') {?>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['items_owl_carousel_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['blogs']->value), 0);?>

			<?php } else { ?>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['items_normal_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['blogs']->value), 0);?>

			<?php }?>
		<?php }?>
	</div>	
</div>
 <?php }} ?>
