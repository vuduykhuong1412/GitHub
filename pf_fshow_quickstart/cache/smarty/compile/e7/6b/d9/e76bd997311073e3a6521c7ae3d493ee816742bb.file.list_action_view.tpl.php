<?php /* Smarty version Smarty-3.1.19, created on 2015-11-22 21:18:30
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\admin123\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2330956527776ce6c32-75234721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e76bd997311073e3a6521c7ae3d493ee816742bb' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\admin123\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1447226170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2330956527776ce6c32-75234721',
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
  'unifunc' => 'content_56527776d2c576_37239249',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56527776d2c576_37239249')) {function content_56527776d2c576_37239249($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
