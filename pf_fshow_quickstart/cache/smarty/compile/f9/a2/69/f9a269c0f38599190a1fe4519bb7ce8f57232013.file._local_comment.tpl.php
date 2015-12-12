<?php /* Smarty version Smarty-3.1.19, created on 2015-11-27 05:21:37
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\modules\leoblog\views\templates\front\default\_local_comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2585656582eb1d93bb4-89765957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9a269c0f38599190a1fe4519bb7ce8f57232013' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\modules\\leoblog\\views\\templates\\front\\default\\_local_comment.tpl',
      1 => 1447226852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2585656582eb1d93bb4-89765957',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comments' => 0,
    'comment' => 0,
    'default' => 0,
    'blog_link' => 0,
    'blog_count_comment' => 0,
    'module_tpl' => 0,
    'captcha_image' => 0,
    'id_leoblog_blog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56582eb200fe07_45278901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56582eb200fe07_45278901')) {function content_56582eb200fe07_45278901($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\Project\\htdocs\\pf_fshow_quickstart\\tools\\smarty\\plugins\\modifier.date_format.php';
?>

<div id="blog-localengine">
		<h3><?php echo smartyTranslate(array('s'=>'Comments','mod'=>'leoblog'),$_smarty_tpl);?>
</h3>
		
		<div class="comments">
			<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?> <?php $_smarty_tpl->tpl_vars['default'] = new Smarty_variable('', null, 0);?>
			<div class="comment-item" id="comment<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['id_comment'], ENT_QUOTES, 'UTF-8', true);?>
">
				<img src="http://www.gravatar.com/avatar/<?php echo md5(strtolower(trim(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['email'], ENT_QUOTES, 'UTF-8', true))));?>
?d=<?php echo urlencode(htmlspecialchars($_smarty_tpl->tpl_vars['default']->value, ENT_QUOTES, 'UTF-8', true));?>
&s=60" align="left"/>
				<div class="comment-wrap">
					<div class="comment-meta">
						<span class="comment-created"><?php echo smartyTranslate(array('s'=>'Created On','mod'=>'leoblog'),$_smarty_tpl);?>
<span> <?php echo htmlspecialchars(smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['comment']->value['date_add']),"%A, %B %e, %Y"), ENT_QUOTES, 'UTF-8', true);?>
</span></span>
						<span class="comment-postedby"><?php echo smartyTranslate(array('s'=>'Posted By','mod'=>'leoblog'),$_smarty_tpl);?>
<span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['user'], ENT_QUOTES, 'UTF-8', true);?>
</span></span>
						<span class="comment-link"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog_link']->value, ENT_QUOTES, 'UTF-8', true);?>
#comment<?php echo intval($_smarty_tpl->tpl_vars['comment']->value['id_comment']);?>
"><?php echo smartyTranslate(array('s'=>'Comment Link','mod'=>'leoblog'),$_smarty_tpl);?>
</a></span>
					</div>

					<div class="comment-content">
						<?php echo nl2br($_smarty_tpl->tpl_vars['comment']->value['comment']);?>

					</div>
				</div>
			</div>
			<?php } ?>
			<?php if ($_smarty_tpl->tpl_vars['blog_count_comment']->value) {?>
			<div class="top-pagination-content clearfix bottom-line">
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_tpl']->value)."_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	        </div>
	        <?php }?>
		</div>

		<h3><?php echo smartyTranslate(array('s'=>'Leave your comment','mod'=>'leoblog'),$_smarty_tpl);?>
</h3>
		<form class="form-horizontal" method="post" id="comment-form" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog_link']->value, ENT_QUOTES, 'UTF-8', true);?>
" onsubmit="return false;">
			<div class="form-group">
				<label class="col-lg-3 control-label" for="inputFullName"><?php echo smartyTranslate(array('s'=>'Full Name','mod'=>'leoblog'),$_smarty_tpl);?>
</label>
				<div class="col-lg-9">
					<input type="text" name="user" placeholder="<?php echo smartyTranslate(array('s'=>'Enter your full name','mod'=>'leoblog'),$_smarty_tpl);?>
" id="inputFullName" class="form-control">
				</div>
			</div>

			<div class="form-group">
				<label class="col-lg-3 control-label" for="inputEmail"><?php echo smartyTranslate(array('s'=>'Email','mod'=>'leoblog'),$_smarty_tpl);?>
</label>
				<div class="col-lg-9">
					<input type="text" name="email"  placeholder="<?php echo smartyTranslate(array('s'=>'Enter your email','mod'=>'leoblog'),$_smarty_tpl);?>
" id="inputEmail" class="form-control">
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-3 control-label" for="inputComment"><?php echo smartyTranslate(array('s'=>'Comment','mod'=>'leoblog'),$_smarty_tpl);?>
</label>
				<div class="col-lg-9">
					<textarea type="text" name="comment" rows="6"  placeholder="<?php echo smartyTranslate(array('s'=>'Enter your comment','mod'=>'leoblog'),$_smarty_tpl);?>
" id="inputComment" class="form-control"></textarea>
				</div>
			</div>
			 <div class="form-group">
			 	<label class="col-lg-3 control-label" for="inputEmail"><?php echo smartyTranslate(array('s'=>'Captcha','mod'=>'leoblog'),$_smarty_tpl);?>
</label>
			 	<div class="col-lg-8 col-md-8 ipts-captcha">
			 		 <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_image']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="comment-capcha-image" align="left"/>
				 	<input class="form-control" type="text" name="captcha" value="" size="10"  />
				</div>
			 </div>
			 <input type="hidden" name="id_leoblog_blog" value="<?php echo intval($_smarty_tpl->tpl_vars['id_leoblog_blog']->value);?>
">
			<div class="form-group">
				<div class="col-lg-9 col-lg-offset-3"><button class="btn btn-default" name="submitcomment" type="submit"><?php echo smartyTranslate(array('s'=>'Submit','mod'=>'leoblog'),$_smarty_tpl);?>
</button></div>
			</div>
		</form>
</div><?php }} ?>
