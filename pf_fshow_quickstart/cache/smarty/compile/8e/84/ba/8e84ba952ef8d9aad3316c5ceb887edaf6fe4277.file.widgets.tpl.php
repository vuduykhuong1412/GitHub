<?php /* Smarty version Smarty-3.1.19, created on 2015-12-06 22:17:30
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\modules\pspagebuilder\views\templates\admin\pspagebuilder_profile\widgets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210185664fa4a6b1356-79261066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e84ba952ef8d9aad3316c5ceb887edaf6fe4277' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\modules\\pspagebuilder\\views\\templates\\admin\\pspagebuilder_profile\\widgets.tpl',
      1 => 1447226918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210185664fa4a6b1356-79261066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'groups' => 0,
    'group' => 0,
    'widgets' => 0,
    'widget' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5664fa4a79c067_16416285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5664fa4a79c067_16416285')) {function content_5664fa4a79c067_16416285($_smarty_tpl) {?>
<div class="wpo-widgets clearfix">
	
	<div class="widgets-filter">
		<div class="form-group has-success clearfix">
			<label class="col-lg-2 control-label" for="searchwidgets"><?php echo smartyTranslate(array('s'=>'Filter By Name','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</label>
			<div class="col-lg-10">
				<input type="text" id="searchwidgets"  name="searchwidgets">
			</div>
		</div>

		<div class="form-group clearfix">
			<label class="col-lg-2 control-label" for="searchwidgets"><?php echo smartyTranslate(array('s'=>'Filter By Group','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</label>
			<div class="col-lg-10" id="filterbygroups">
				 <ul class="nav nav-pills">
				 	<li class="filter-option" data-option="all">
						<a href="#"><?php echo smartyTranslate(array('s'=>'All','mod'=>'pspagebuilder'),$_smarty_tpl);?>
<span class="badge"></span></a>
					</li>

				 	<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
					<li class="filter-option" data-option="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['key'], ENT_QUOTES, 'UTF-8', true);?>
">
						<a href="#"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['group'], ENT_QUOTES, 'UTF-8', true);?>
<span class="badge"></span></a>
					</li>
			 		<?php } ?>
				</ul>
	      </div>  
		</div>
 	</div>

	<ul>
		<?php  $_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['widget']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->key => $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->_loop = true;
?>
		<li class="wpo-wg-button" data-group="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['group'], ENT_QUOTES, 'UTF-8', true);?>
">
			<?php echo $_smarty_tpl->tpl_vars['widget']->value['button'];?>

		</li>
		<?php } ?>
 	</ul>
 	<div class="clearfix"></div>
</div>

 <?php }} ?>
