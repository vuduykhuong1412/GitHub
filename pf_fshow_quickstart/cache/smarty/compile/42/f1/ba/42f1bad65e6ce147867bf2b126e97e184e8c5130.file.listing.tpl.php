<?php /* Smarty version Smarty-3.1.19, created on 2015-11-22 23:36:25
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\leoblog\views\templates\front\default\listing.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14892565297c9b94e37-03243956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f1bad65e6ce147867bf2b126e97e184e8c5130' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\leoblog\\views\\templates\\front\\default\\listing.tpl',
      1 => 1447227076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14892565297c9b94e37-03243956',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'no_follow' => 0,
    'filter' => 0,
    'leading_blogs' => 0,
    'secondary_blogs' => 0,
    'listing_leading_column' => 0,
    'listing_secondary_column' => 0,
    'module_tpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565297c9bf09e3_97033991',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565297c9bf09e3_97033991')) {function content_565297c9bf09e3_97033991($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['no_follow']->value)&&$_smarty_tpl->tpl_vars['no_follow']->value) {?>
    <?php $_smarty_tpl->tpl_vars['no_follow_text'] = new Smarty_variable('rel="nofollow"', null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['no_follow_text'] = new Smarty_variable('', null, 0);?>
<?php }?> 
<div id="blog-listing" class="blogs-container">
 	<?php if (isset($_smarty_tpl->tpl_vars['filter']->value['type'])) {?>
	 	<?php if ($_smarty_tpl->tpl_vars['filter']->value['type']=='tag') {?>
			<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'Filter Blogs By Tag','mod'=>'leoblog'),$_smarty_tpl);?>
 : <span><?php echo $_smarty_tpl->tpl_vars['filter']->value['tag'];?>
</span></h1>
		<?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['type']=='author') {?>
			<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'Filter Blogs By Blogger','mod'=>'leoblog'),$_smarty_tpl);?>
 : <span><?php echo $_smarty_tpl->tpl_vars['filter']->value['employee']->firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['filter']->value['employee']->lastname;?>
</span></h1>
		<?php }?>
	<?php } else { ?>
	<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'Lastest Blogs','mod'=>'leoblog'),$_smarty_tpl);?>
</h1>
	<?php }?>

	<div class="inner">
		<?php if (count($_smarty_tpl->tpl_vars['leading_blogs']->value)+count($_smarty_tpl->tpl_vars['secondary_blogs']->value)>0) {?>
			<?php if (count($_smarty_tpl->tpl_vars['leading_blogs']->value)) {?>
			<div class="leading-blog">  
				<?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leading_blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['blog']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['blog']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->_loop = true;
 $_smarty_tpl->tpl_vars['blog']->iteration++;
 $_smarty_tpl->tpl_vars['blog']->last = $_smarty_tpl->tpl_vars['blog']->iteration === $_smarty_tpl->tpl_vars['blog']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['leading_blog']['last'] = $_smarty_tpl->tpl_vars['blog']->last;
?>
				 
					<?php if (($_smarty_tpl->tpl_vars['blog']->iteration%$_smarty_tpl->tpl_vars['listing_leading_column']->value==1)&&$_smarty_tpl->tpl_vars['listing_leading_column']->value>1) {?>
					  <div class="row">
					<?php }?>
					<div class="<?php if ($_smarty_tpl->tpl_vars['listing_leading_column']->value<=1) {?>no<?php }?>col-lg-<?php echo floor(12/$_smarty_tpl->tpl_vars['listing_leading_column']->value);?>
">
						 <?php echo $_smarty_tpl->getSubTemplate ("./_listing_blog_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					</div>	
					<?php if (($_smarty_tpl->tpl_vars['blog']->iteration%$_smarty_tpl->tpl_vars['listing_leading_column']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['leading_blog']['last'])&&$_smarty_tpl->tpl_vars['listing_leading_column']->value>1) {?>
					</div>
					<?php }?>
				<?php } ?>
			</div>
			<?php }?>


			<?php if (count($_smarty_tpl->tpl_vars['secondary_blogs']->value)) {?>
			<div class="secondary-blog">

				<?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['secondary_blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['blog']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['blog']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->_loop = true;
 $_smarty_tpl->tpl_vars['blog']->iteration++;
 $_smarty_tpl->tpl_vars['blog']->last = $_smarty_tpl->tpl_vars['blog']->iteration === $_smarty_tpl->tpl_vars['blog']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['secondary_blog']['last'] = $_smarty_tpl->tpl_vars['blog']->last;
?>
					<?php if (($_smarty_tpl->tpl_vars['blog']->iteration%$_smarty_tpl->tpl_vars['listing_secondary_column']->value==1)&&$_smarty_tpl->tpl_vars['listing_secondary_column']->value>1) {?>
					  <div class="row">
					<?php }?>
					<div class="<?php if ($_smarty_tpl->tpl_vars['listing_secondary_column']->value<=1) {?>no<?php }?>col-lg-<?php echo floor(12/$_smarty_tpl->tpl_vars['listing_secondary_column']->value);?>
">
						 <?php echo $_smarty_tpl->getSubTemplate ("./_listing_blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					</div>	
					<?php if (($_smarty_tpl->tpl_vars['blog']->iteration%$_smarty_tpl->tpl_vars['listing_secondary_column']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['secondary_blog']['last'])&&$_smarty_tpl->tpl_vars['listing_secondary_column']->value>1) {?>
					</div>
					<?php }?>
				<?php } ?>
			</div>
			<?php }?>
			<div class="top-pagination-content clearfix bottom-line">
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_tpl']->value)."_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	        </div>
	    <?php } else { ?>
	    	<div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'Sorry, We are update data, please come back late!!!!','mod'=>'leoblog'),$_smarty_tpl);?>
</div>
	    <?php }?>    

	</div>
</div><?php }} ?>
