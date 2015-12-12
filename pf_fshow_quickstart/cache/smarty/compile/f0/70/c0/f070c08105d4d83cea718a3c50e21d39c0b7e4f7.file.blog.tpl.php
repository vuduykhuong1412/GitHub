<?php /* Smarty version Smarty-3.1.19, created on 2015-11-27 05:21:37
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\leoblog\views\templates\front\default\blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1387456582eb13f0429-97109431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f070c08105d4d83cea718a3c50e21d39c0b7e4f7' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\leoblog\\views\\templates\\front\\default\\blog.tpl',
      1 => 1447227076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1387456582eb13f0429-97109431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'is_active' => 0,
    'blog' => 0,
    'config' => 0,
    'blog_count_comment' => 0,
    'module_tpl' => 0,
    'tags' => 0,
    'tag' => 0,
    'samecats' => 0,
    'tagrelated' => 0,
    'cblog' => 0,
    'productrelated' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56582eb18b8445_60562970',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56582eb18b8445_60562970')) {function content_56582eb18b8445_60562970($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\Project\\htdocs\\pf_fshow_quickstart\\tools\\smarty\\plugins\\modifier.date_format.php';
?>	<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
		<div id="blogpage" class="blog-detail blog-container">
			<div class="inner">
				<div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'Sorry, We are updating data, please come back late!!!!','mod'=>'leoblog'),$_smarty_tpl);?>
</div>
			</div>
		</div>
	<?php } else { ?>	
	<div id="blogpage" class="blog-detail blog-container">
		<div class="inner">
			<?php if ($_smarty_tpl->tpl_vars['is_active']->value) {?>
			<h1 class="blog-title page-heading"><?php echo $_smarty_tpl->tpl_vars['blog']->value->meta_title;?>
</h1>
			    <div class="blog-container bg-white space-padding-30">
					<div class="blog-meta">
						<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_author','1')) {?>
						<span class="blog-author">
							<span class="icon-user"> <?php echo smartyTranslate(array('s'=>'Posted By','mod'=>'leoblog'),$_smarty_tpl);?>
: </span>
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->author_link, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['blog']->value->author;?>
"><?php echo $_smarty_tpl->tpl_vars['blog']->value->author;?>
</a>
						</span>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_category','1')) {?>
						<span class="blog-cat"> 
							<span class="icon-list"> <?php echo smartyTranslate(array('s'=>'In','mod'=>'leoblog'),$_smarty_tpl);?>
: </span> 
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->category_link, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->category_title, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['blog']->value->category_title;?>
</a>
						</span>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_created','1')) {?>
						<span class="blog-created">
							<span class="icon-calendar"> <?php echo smartyTranslate(array('s'=>'On','mod'=>'leoblog'),$_smarty_tpl);?>
: </span> 
							<?php echo smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value->date_add),"%A, %B %e, %Y");?>

						</span>
						<?php }?>
						
						<?php if (isset($_smarty_tpl->tpl_vars['blog_count_comment']->value)&&$_smarty_tpl->tpl_vars['config']->value->get('item_show_counter','1')) {?>
						<span class="blog-ctncomment">
							<span class="icon-comment"> <?php echo smartyTranslate(array('s'=>'Comment','mod'=>'leoblog'),$_smarty_tpl);?>
:</span> 
							<?php echo $_smarty_tpl->tpl_vars['blog_count_comment']->value;?>

						</span>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['blog']->value->hits)&&$_smarty_tpl->tpl_vars['config']->value->get('item_show_hit','1')) {?>
						<span class="blog-hit">
							<span class="icon-heart"> <?php echo smartyTranslate(array('s'=>'Hit','mod'=>'leoblog'),$_smarty_tpl);?>
:</span>
							<?php echo $_smarty_tpl->tpl_vars['blog']->value->hits;?>

						</span>
						<?php }?>
					</div>

					<?php if ($_smarty_tpl->tpl_vars['blog']->value->preview_url&&$_smarty_tpl->tpl_vars['config']->value->get('item_show_image','1')) {?>
						<div class="blog-image">
							<img src="<?php echo $_smarty_tpl->tpl_vars['blog']->value->preview_url;?>
" alt="" title="<?php echo $_smarty_tpl->tpl_vars['blog']->value->meta_title;?>
"/>
						</div>
					<?php }?>



					<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_description',1)) {?>
					<div class="blog-description">
					<?php echo $_smarty_tpl->tpl_vars['blog']->value->description;?>

					</div>
					<?php }?>

					<div class="blog-content">
					<?php echo $_smarty_tpl->tpl_vars['blog']->value->content;?>
	
					</div>
					<?php if (trim($_smarty_tpl->tpl_vars['blog']->value->video_code)) {?>
					<div class="blog-video-code">
						<div class="inner ">
							<?php echo $_smarty_tpl->tpl_vars['blog']->value->video_code;?>

						</div>
					</div>
					<?php }?>

					<div class="social-share">
						 <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_tpl']->value)."_social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					</div>
					<?php if ($_smarty_tpl->tpl_vars['tags']->value) {?>
					<div class="blog-tags">
						<span><?php echo smartyTranslate(array('s'=>'Tags:','mod'=>'leoblog'),$_smarty_tpl);?>
</span>
					 
						<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
							 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8', true);?>
"><span><?php echo $_smarty_tpl->tpl_vars['tag']->value['tag'];?>
</span></a> 	
						<?php } ?>
						 
					</div>
					<?php }?>

					<?php if (!empty($_smarty_tpl->tpl_vars['samecats']->value)||!empty($_smarty_tpl->tpl_vars['tagrelated']->value)) {?>
					<div class="extra-blogs row">
					<?php if (!empty($_smarty_tpl->tpl_vars['samecats']->value)) {?>
						<div class="col-lg-6">
							<h4><?php echo smartyTranslate(array('s'=>'In Same Category'),$_smarty_tpl);?>
</h4>
							<ul>
							<?php  $_smarty_tpl->tpl_vars['cblog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cblog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['samecats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cblog']->key => $_smarty_tpl->tpl_vars['cblog']->value) {
$_smarty_tpl->tpl_vars['cblog']->_loop = true;
?>
								<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cblog']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['cblog']->value['meta_title'];?>
</a></li>
							<?php } ?>
							</ul>
						</div>
						<div class="col-lg-6">
							<h4><?php echo smartyTranslate(array('s'=>'Related by Tags'),$_smarty_tpl);?>
</h4>
							<ul>
							<?php  $_smarty_tpl->tpl_vars['cblog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cblog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tagrelated']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cblog']->key => $_smarty_tpl->tpl_vars['cblog']->value) {
$_smarty_tpl->tpl_vars['cblog']->_loop = true;
?>
								<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cblog']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['cblog']->value['meta_title'];?>
</a></li>
							<?php } ?>
							</ul>
						</div>
					<?php }?>
					</div>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['productrelated']->value) {?>

					<?php }?>
					<div class="blog-comment-block">
					<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_comment_engine','local')=='facebook') {?>
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_tpl']->value)."_facebook_comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<?php } elseif ($_smarty_tpl->tpl_vars['config']->value->get('item_comment_engine','local')=='diquis') {?>
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_tpl']->value)."_diquis_comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					
					<?php } else { ?>
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_tpl']->value)."_local_comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<?php }?>
					</div>	
					<?php } else { ?>
					<div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'Sorry, This blog is not avariable. May be this was unpublished or deleted.','module'=>'leoblog'),$_smarty_tpl);?>
</div>
					<?php }?>
				</div>

		</div>
	</div>
 	<?php }?><?php }} ?>
