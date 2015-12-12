<?php /* Smarty version Smarty-3.1.19, created on 2015-12-11 21:45:41
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\leoblog\views\templates\front\default\_listing_blog_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6976566b8a55b09633-57476926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39145634b266bcbbc11f8fcd5b253ff890e3157f' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\leoblog\\views\\templates\\front\\default\\_listing_blog_list.tpl',
      1 => 1447227076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6976566b8a55b09633-57476926',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blog' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_566b8a55c84165_90320828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566b8a55c84165_90320828')) {function content_566b8a55c84165_90320828($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\tools\\smarty\\plugins\\modifier.date_format.php';
?><div class="blog-item">
	<div class="media">
		<?php if ($_smarty_tpl->tpl_vars['blog']->value['image']&&$_smarty_tpl->tpl_vars['config']->value->get('listing_show_image',1)) {?>
			<div class="blog-image pull-left">
				<img class="img-responsive" alt="" src="<?php echo $_smarty_tpl->tpl_vars['blog']->value['preview_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
"/>
			</div>
		<?php }?>
		<div class="media-body">
			<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_title','1')) {?>
				<h4><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
</a></h4>
			<?php }?>
			<div class="blog-meta">
				<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_author','1')&&!empty($_smarty_tpl->tpl_vars['blog']->value['author'])) {?>
				<span class="blog-author">
					<span class="icon-user"> <?php echo smartyTranslate(array('s'=>'Posted By','mod'=>'leoblog'),$_smarty_tpl);?>
:</span> 
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['author_link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['blog']->value['author'];?>
"><?php echo $_smarty_tpl->tpl_vars['blog']->value['author'];?>
</a> 
				</span>
				<?php }?>
				
				<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_category','1')) {?>
				<span class="blog-cat"> 
					<span class="icon-list"> <?php echo smartyTranslate(array('s'=>'In','mod'=>'leoblog'),$_smarty_tpl);?>
:</span> 
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['category_link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['category_title'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['blog']->value['category_title'];?>
</a>
				</span>
				<?php }?>
				
				<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_created','1')) {?>
				<span class="blog-created">
					<span class="icon-calendar"> <?php echo smartyTranslate(array('s'=>'On','mod'=>'leoblog'),$_smarty_tpl);?>
: </span> 
					<?php echo smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%A, %B %e, %Y");?>

				</span>
				<?php }?>
				
				<?php if (isset($_smarty_tpl->tpl_vars['blog']->value['comment_count'])&&$_smarty_tpl->tpl_vars['config']->value->get('listing_show_counter','1')) {?>	
				<span class="blog-ctncomment">
					<span class="icon-comment"> <?php echo smartyTranslate(array('s'=>'Comment','mod'=>'leoblog'),$_smarty_tpl);?>
:</span> 
					<?php echo $_smarty_tpl->tpl_vars['blog']->value['comment_count'];?>

				</span>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_hit','1')) {?>	
				<span class="blog-hit">
					<span class="icon-heart"> <?php echo smartyTranslate(array('s'=>'Hit','mod'=>'leoblog'),$_smarty_tpl);?>
:</span> 
					<?php echo $_smarty_tpl->tpl_vars['blog']->value['hits'];?>

				</span>
				<?php }?>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_description','1')) {?>
				<div class="blog-shortinfo">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['blog']->value['description']),360,'...');?>

				</div>
			<?php }?>
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_readmore',1)) {?>
		<div class="clearfix">
			<p class="clearfix readmore pull-right">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"><span><?php echo smartyTranslate(array('s'=>'Read more','mod'=>'leoblog'),$_smarty_tpl);?>
</span></a>
			</p>
		</div>
	<?php }?>
</div><?php }} ?>
