<?php /* Smarty version Smarty-3.1.19, created on 2015-12-06 22:15:35
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\modules\pspagebuilder\views\templates\hook\pspagebuilder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157445664f9d7251954-02116834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28b253ca5441350a43bf075dd75dbee209500b36' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\modules\\pspagebuilder\\views\\templates\\hook\\pspagebuilder.tpl',
      1 => 1447226934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157445664f9d7251954-02116834',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefix' => 0,
    'time' => 0,
    'layout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5664f9d726e511_11889481',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5664f9d726e511_11889481')) {function content_5664f9d726e511_11889481($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['ime'] = new Smarty_variable(time(), null, 0);?>
<div id="pts<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['time']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8', true);?>
 clearfix">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layout_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rows'=>$_smarty_tpl->tpl_vars['layout']->value), 0);?>

</div><?php }} ?>
