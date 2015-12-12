<?php /* Smarty version Smarty-3.1.19, created on 2015-11-28 02:07:38
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\admin123\themes\default\template\helpers\list\list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20485565952bae7d0f9-50933158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51dcbf257fb5bf0955169fd08f550f499de70932' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\admin123\\themes\\default\\template\\helpers\\list\\list_action_default.tpl',
      1 => 1447226168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20485565952bae7d0f9-50933158',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565952bae90b04_54317425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565952bae90b04_54317425')) {function content_565952bae90b04_54317425($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="default">
	<i class="icon-asterisk"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
