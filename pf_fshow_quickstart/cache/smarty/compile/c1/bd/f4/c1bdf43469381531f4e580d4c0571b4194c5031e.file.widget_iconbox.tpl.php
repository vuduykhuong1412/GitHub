<?php /* Smarty version Smarty-3.1.19, created on 2015-12-06 22:15:31
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\pspagebuilder\views\templates\front\widgets\widget_iconbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9895664f9d3017bf2-15064850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1bdf43469381531f4e580d4c0571b4194c5031e' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\pspagebuilder\\views\\templates\\front\\widgets\\widget_iconbox.tpl',
      1 => 1447227090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9895664f9d3017bf2-15064850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'icon_box_style' => 0,
    'text_align' => 0,
    'background' => 0,
    'linkurl' => 0,
    'widget_heading' => 0,
    'iconurl' => 0,
    'iconfile' => 0,
    'iconclass' => 0,
    'htmlcontent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5664f9d3075a84_72528373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5664f9d3075a84_72528373')) {function content_5664f9d3075a84_72528373($_smarty_tpl) {?>
<div class="feature-box <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon_box_style']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text_align']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['background']->value, ENT_QUOTES, 'UTF-8', true);?>
">
    <div class="fbox-icon">
    	<?php if (isset($_smarty_tpl->tpl_vars['linkurl']->value)&&$_smarty_tpl->tpl_vars['linkurl']->value) {?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
        <?php }?>
        	<?php if (isset($_smarty_tpl->tpl_vars['iconurl']->value)&&$_smarty_tpl->tpl_vars['iconfile']->value) {?>
				<img class="fa" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iconurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo smartyTranslate(array('s'=>'icon','mod'=>'pspagebuilder'),$_smarty_tpl);?>
">
			<?php } elseif ($_smarty_tpl->tpl_vars['iconclass']->value) {?>
				<i class="fa <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iconclass']->value, ENT_QUOTES, 'UTF-8', true);?>
"></i>
			<?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['linkurl']->value)&&$_smarty_tpl->tpl_vars['linkurl']->value) {?>
        </a>
        <?php }?>
    </div>
    <div class="fbox-body">                          
        <?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)&&$_smarty_tpl->tpl_vars['icon_box_style']->value!='feature-box-v2') {?>
		<h4 class="fbox-title">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>

		</h4>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['htmlcontent']->value)&&$_smarty_tpl->tpl_vars['htmlcontent']->value) {?>
        <p><?php echo $_smarty_tpl->tpl_vars['htmlcontent']->value;?>
</p>
        <?php }?>
    </div>
</div><?php }} ?>
