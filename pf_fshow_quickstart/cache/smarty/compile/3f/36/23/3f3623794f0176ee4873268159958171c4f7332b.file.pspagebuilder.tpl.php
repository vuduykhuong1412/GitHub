<?php /* Smarty version Smarty-3.1.19, created on 2015-11-20 03:21:25
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\modules\pspagebuilder\views\templates\hook\pspagebuilder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20035564ed80501bc10-23065820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f3623794f0176ee4873268159958171c4f7332b' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\modules\\pspagebuilder\\views\\templates\\hook\\pspagebuilder.tpl',
      1 => 1447226934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20035564ed80501bc10-23065820',
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
  'unifunc' => 'content_564ed805031b16_62094585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ed805031b16_62094585')) {function content_564ed805031b16_62094585($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['ime'] = new Smarty_variable(time(), null, 0);?>
<div id="pts<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['time']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8', true);?>
 clearfix">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layout_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rows'=>$_smarty_tpl->tpl_vars['layout']->value), 0);?>

</div><?php }} ?>
