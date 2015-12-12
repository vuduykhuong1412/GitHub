<?php /* Smarty version Smarty-3.1.19, created on 2015-12-06 23:09:03
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\admin123\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214835665065fc3cfa8-63223444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcc4535eead6bc8fcf78abbb3519dbe3038a5c17' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\admin123\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1447226170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214835665065fc3cfa8-63223444',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5665065fc56d18_11098935',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5665065fc56d18_11098935')) {function content_5665065fc56d18_11098935($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
