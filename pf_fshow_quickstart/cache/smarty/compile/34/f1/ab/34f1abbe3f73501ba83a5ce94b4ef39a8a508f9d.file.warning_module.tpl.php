<?php /* Smarty version Smarty-3.1.19, created on 2015-12-06 23:37:01
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\admin123\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2924656650ceda4f757-28242260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34f1abbe3f73501ba83a5ce94b4ef39a8a508f9d' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\admin123\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1447226164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2924656650ceda4f757-28242260',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56650cedaa7874_97375440',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56650cedaa7874_97375440')) {function content_56650cedaa7874_97375440($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
