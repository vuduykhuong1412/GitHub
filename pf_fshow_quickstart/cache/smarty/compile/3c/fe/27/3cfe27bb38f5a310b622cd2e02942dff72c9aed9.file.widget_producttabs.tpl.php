<?php /* Smarty version Smarty-3.1.19, created on 2015-11-23 04:24:12
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\pspagebuilder\views\templates\front\widgets\widget_producttabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:287325652db3cc26dc8-22268555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cfe27bb38f5a310b622cd2e02942dff72c9aed9' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\pspagebuilder\\views\\templates\\front\\widgets\\widget_producttabs.tpl',
      1 => 1447754604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '287325652db3cc26dc8-22268555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'producttabs' => 0,
    'addition_cls' => 0,
    'sub_title' => 0,
    'ptab' => 0,
    'display_mode' => 0,
    'items_owl_carousel_tpl' => 0,
    'items_normal_tpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5652db3cd29b73_34527517',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652db3cd29b73_34527517')) {function content_5652db3cd29b73_34527517($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['producttabs']->value)) {?>
<div class="widget-producttabs <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addition_cls']->value, ENT_QUOTES, 'UTF-8', true);?>
">
 	<h4 class="title_block">
		<span class="sub-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
		<span class="blog_title"><?php echo smartyTranslate(array('s'=>'Products','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</span>
	</h4>
	<div class="widget-inner  pts-tab clearfix">
		<ul  class="nav nav-theme clearfix">
		<?php  $_smarty_tpl->tpl_vars['ptab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ptab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['producttabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myproducttabs']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['ptab']->key => $_smarty_tpl->tpl_vars['ptab']->value) {
$_smarty_tpl->tpl_vars['ptab']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myproducttabs']['index']++;
?>
			<?php if (!empty($_smarty_tpl->tpl_vars['ptab']->value['products'])) {?>
			<li<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myproducttabs']['index']==0) {?> class="active"<?php }?>>
				<a data-toggle="tab" href="#tab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ptab']->value['key'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ptab']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
<span>/</span></a>
			</li>
			<?php }?>
		<?php } ?>
		</ul>
		<div class="tab-content">
		<?php  $_smarty_tpl->tpl_vars['ptab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ptab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['producttabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myproducttabs']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['ptab']->key => $_smarty_tpl->tpl_vars['ptab']->value) {
$_smarty_tpl->tpl_vars['ptab']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myproducttabs']['index']++;
?>
			<?php if (!empty($_smarty_tpl->tpl_vars['ptab']->value['products'])) {?>
			<div id="tab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ptab']->value['key'], ENT_QUOTES, 'UTF-8', true);?>
" class="producttab-content tab-pane <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myproducttabs']['index']==0) {?>active<?php }?>">
				<?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable($_smarty_tpl->tpl_vars['ptab']->value['key'], null, 0);?>
				<?php if (isset($_smarty_tpl->tpl_vars['display_mode']->value)&&$_smarty_tpl->tpl_vars['display_mode']->value=='carousel') {?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['items_owl_carousel_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['ptab']->value['products'],'class'=>"product_list products-block"), 0);?>

				<?php } else { ?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['items_normal_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['ptab']->value['products'],'class'=>"product_list products-block"), 0);?>

				<?php }?>
			</div>
			<?php }?>
		<?php } ?>
		</div>
	</div>
</div>
<?php }?> <?php }} ?>
