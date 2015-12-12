<?php /* Smarty version Smarty-3.1.19, created on 2015-11-20 03:21:24
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\pspagebuilder\views\templates\front\widgets\sub\item_blog_grid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2034564ed804e469e6-88710584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '568d1dc22fbae36265635f68e5983151d88ee320' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\pspagebuilder\\views\\templates\\front\\widgets\\sub\\item_blog_grid.tpl',
      1 => 1447836657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2034564ed804e469e6-88710584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'show_image' => 0,
    'show_title_blog' => 0,
    'show_category' => 0,
    'show_dateadd' => 0,
    'show_comment' => 0,
    'show_description' => 0,
    'show_readmore' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ed804ee2a10_29492652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ed804ee2a10_29492652')) {function content_564ed804ee2a10_29492652($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\Project\\htdocs\\pf_fshow_quickstart\\tools\\smarty\\plugins\\modifier.date_format.php';
?>
<div class="blog_container bg-white clearfix">
	<?php if ($_smarty_tpl->tpl_vars['item']->value['image']&&$_smarty_tpl->tpl_vars['show_image']->value) {?>
	<div class="blog-image">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" class="link">
			<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['preview_url'], ENT_QUOTES, 'UTF-8', true);?>
" alt="" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" class="img-responsive"/>
		</a>
	</div>
	<?php }?>
	<div class="blog-meta">
		<?php if ($_smarty_tpl->tpl_vars['show_title_blog']->value) {?>
			<h5>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a>
			</h5>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['show_category']->value) {?>
			<span class="blog-cat"> <span class="icon-list"><?php echo smartyTranslate(array('s'=>'In','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</span> 
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['category_link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['category_title'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['category_title'], ENT_QUOTES, 'UTF-8', true);?>
</a>
			</span>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['show_dateadd']->value) {?>
			<span class="blog-created">
				<span class="day"><?php echo smarty_modifier_date_format(htmlspecialchars(strtotime($_smarty_tpl->tpl_vars['item']->value['date_add']), ENT_QUOTES, 'UTF-8', true),"%e");?>
</span>
				<span class="month"><?php echo smarty_modifier_date_format(htmlspecialchars(strtotime($_smarty_tpl->tpl_vars['item']->value['date_add']), ENT_QUOTES, 'UTF-8', true),"%B");?>
</span>
			</span>
		<?php }?>
		<span class="">/</span>
		<?php if ($_smarty_tpl->tpl_vars['show_comment']->value) {?><span class="blog-ctncomment">
			<span class=""> <?php echo smartyTranslate(array('s'=>'Comment','mod'=>'pspagebuilder'),$_smarty_tpl);?>
:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['comment_count'], ENT_QUOTES, 'UTF-8', true);?>
</span>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['show_description']->value) {?>
			<div class="blog-shortinfo">
				<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['description']),80), ENT_QUOTES, 'UTF-8', true);?>

			</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['show_readmore']->value) {?>
			<div class="readmore">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" class="button text-white radius-6x btn-default">
					<span><?php echo smartyTranslate(array('s'=>'Read more','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</span></a>
			</div>
		<?php }?>
	</div>
</div><?php }} ?>
