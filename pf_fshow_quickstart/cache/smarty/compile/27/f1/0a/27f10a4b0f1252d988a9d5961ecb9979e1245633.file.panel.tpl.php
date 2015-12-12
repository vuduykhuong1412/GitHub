<?php /* Smarty version Smarty-3.1.19, created on 2015-11-20 03:30:45
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\modules\leoblog\views\templates\admin\leoblog_dashboard\panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5528564eda35057b68-26468843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27f10a4b0f1252d988a9d5961ecb9979e1245633' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\modules\\leoblog\\views\\templates\\admin\\leoblog_dashboard\\panel.tpl',
      1 => 1447226850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5528564eda35057b68-26468843',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'globalform' => 0,
    'quicktools' => 0,
    'tool' => 0,
    'count_blogs' => 0,
    'count_cats' => 0,
    'count_comments' => 0,
    'latest_comments' => 0,
    'comment_link' => 0,
    'comment' => 0,
    'blogs' => 0,
    'blog_link' => 0,
    'blog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564eda3516ac34_53381050',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564eda3516ac34_53381050')) {function content_564eda3516ac34_53381050($_smarty_tpl) {?>

<div id="blog-dashboard">

	<div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info">
                        <a href="http://www.leotheme.com/support/prestashop-16x-guides.html"><?php echo smartyTranslate(array('s'=>'Click Here to see Module Guide','mod'=>'leoblog'),$_smarty_tpl);?>
</a>
                    </div>
                </div>
		<div class="col-md-6">
			
			<div class="panel panel-default">
				<div class="panel-heading"><?php echo smartyTranslate(array('s'=>'Global Config','mod'=>'leoblog'),$_smarty_tpl);?>
</div>
				
				<div class="panel-content" id="bloggeneralsetting">
				 	<?php echo $_smarty_tpl->tpl_vars['globalform']->value;?>

				</div>	

			</div>
		</div>

		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading"><?php echo smartyTranslate(array('s'=>'Quick Tools','mod'=>'leoblog'),$_smarty_tpl);?>
</div>
				<div class="panel-content">
					
					<div id="quicktools" class="row">
						<?php  $_smarty_tpl->tpl_vars['tool'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tool']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['quicktools']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tool']->key => $_smarty_tpl->tpl_vars['tool']->value) {
$_smarty_tpl->tpl_vars['tool']->_loop = true;
?>
						<div class="col-xs-3 col-lg-3 active">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tool']->value['href'], ENT_QUOTES, 'UTF-8', true);?>
" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tool']->value['class'], ENT_QUOTES, 'UTF-8', true);?>
">
							<i class="icon icon-3x <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tool']->value['icon'], ENT_QUOTES, 'UTF-8', true);?>
"></i> 
							<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tool']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</p>
						</a>
						</div>
						<?php } ?> 
						
					</div>
				</div>	
			</div>


			<div class="panel panel-default">
				<div class="panel-heading"><?php echo smartyTranslate(array('s'=>'Statistics','mod'=>'leoblog'),$_smarty_tpl);?>
</div>
				<div class="panel-content" id="dashtrends">
						
						<div class="row" id="dashtrends_toolbar">
							<dl   class="col-xs-4 col-lg-4 active">
								<dt><?php echo smartyTranslate(array('s'=>'Blogs','mod'=>'leoblog'),$_smarty_tpl);?>
</dt>
								<dd class="data_value size_l"><span id="sales_score"><?php echo intval($_smarty_tpl->tpl_vars['count_blogs']->value);?>
</span></dd>
								 
							</dl>
							<dl   class="col-xs-4 col-lg-4">
								<dt><?php echo smartyTranslate(array('s'=>'Categories','mod'=>'leoblog'),$_smarty_tpl);?>
</dt>
								<dd class="data_value size_l"><span id="orders_score"><?php echo intval($_smarty_tpl->tpl_vars['count_cats']->value);?>
</span></dd>
							 
							</dl>
							<dl  class="col-xs-4 col-lg-4">
								<dt><?php echo smartyTranslate(array('s'=>'Comments','mod'=>'leoblog'),$_smarty_tpl);?>
</dt>
								<dd class="data_value size_l"><span id="cart_value_score"><?php echo intval($_smarty_tpl->tpl_vars['count_comments']->value);?>
</span></dd>
							 
							</dl>
							 
						</div>


				</div>

			</div>	

			<div class="panel panel-default">
				<div class="panel-heading"><?php echo smartyTranslate(array('s'=>'Modules','mod'=>'leoblog'),$_smarty_tpl);?>
</div>
				<div class="panel-content">
					
					<section>
							<nav>
								<ul class="nav nav-tabs">
									<li class="">
										<a data-toggle="tab" href="#dash_latest_comment">
											<i class="icon-fire"></i> <?php echo smartyTranslate(array('s'=>'Lastest Comments','mod'=>'leoblog'),$_smarty_tpl);?>

										</a>
									</li>
									<li class="active">
										<a data-toggle="tab" href="#dash_most_viewed">
											<i class="icon-trophy"></i> <?php echo smartyTranslate(array('s'=>'Most Viewed','mod'=>'leoblog'),$_smarty_tpl);?>

										</a>
									</li>
								
								 
								</ul>
							</nav>
							<div class="tab-content panel">
								<div id="dash_latest_comment" class="tab-pane">
									
									<div>
										<ul>
										<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['latest_comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
										<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment_link']->value, ENT_QUOTES, 'UTF-8', true);?>
&id_comment=<?php echo intval($_smarty_tpl->tpl_vars['comment']->value['id_comment']);?>
&updateleoblog_comment">
												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['comment']->value['comment']),65,'...');?>
 </a/> <?php echo smartyTranslate(array('s'=>'Date','mod'=>'leoblog'),$_smarty_tpl);?>
(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['date_add'], ENT_QUOTES, 'UTF-8', true);?>
) - <?php echo smartyTranslate(array('s'=>'User :','mod'=>'leoblog'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['user'], ENT_QUOTES, 'UTF-8', true);?>
</li>
										<?php } ?>
										</ul>
									</div> 
								</div>
								<div id="dash_most_viewed" class="tab-pane active">
									 <div>
										<ul>
										<?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->_loop = true;
?>
										<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog_link']->value, ENT_QUOTES, 'UTF-8', true);?>
&id_leoblog_blog=<?php echo intval($_smarty_tpl->tpl_vars['blog']->value['id_leoblog_blog']);?>
&updateleoblog_blog"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
</a/> - <i><?php echo smartyTranslate(array('s'=>'Hits','mod'=>'leoblog'),$_smarty_tpl);?>
: <?php echo intval($_smarty_tpl->tpl_vars['blog']->value['hits']);?>
</i> </li>
										<?php } ?>
										</ul>
									</div> 
								</div>
							</div>
						</section>
				</div>	
			</div>	
		</div>
	</div>
</div><?php }} ?>
