<?php /* Smarty version Smarty-3.1.19, created on 2015-11-22 23:36:25
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\leoblog\views\templates\front\default\_listing_blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27274565297c9d964c9-71287423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d41158842c25c06ddeec557b0dc1bb5ecf79a57' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\leoblog\\views\\templates\\front\\default\\_listing_blog.tpl',
      1 => 1447227076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27274565297c9d964c9-71287423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'blog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565297c9e02295_58852614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565297c9e02295_58852614')) {function content_565297c9e02295_58852614($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\Project\\htdocs\\pf_fshow_quickstart\\tools\\smarty\\plugins\\modifier.date_format.php';
?><div class="blog-item">
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
	<?php if ($_smarty_tpl->tpl_vars['blog']->value['image']&&$_smarty_tpl->tpl_vars['config']->value->get('listing_show_image',1)) {?>
	<div class="blog-image">
		<img class="img-responsive" alt="" src="<?php echo $_smarty_tpl->tpl_vars['blog']->value['preview_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
"/>
	</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_description','1')) {?>
		<div class="blog-shortinfo">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['blog']->value['description']),110,'...');?>

		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_readmore',1)) {?>
		<div class="clearfix">
			<p class="clearfix readmore btn btn-links pull-right">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"><span><?php echo smartyTranslate(array('s'=>'Read more','mod'=>'leoblog'),$_smarty_tpl);?>
</span></a>
			</p>
		</div>
	<?php }?>
</div><?php }} ?>
