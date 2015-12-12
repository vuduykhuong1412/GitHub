<?php /* Smarty version Smarty-3.1.19, created on 2015-12-06 22:15:37
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\homefeatured\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60975664f9d90fd759-21332614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c32eb52c739f1e0e6c23c4a73c8f28942c692311' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\homefeatured\\tab.tpl',
      1 => 1447227072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60975664f9d90fd759-21332614',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5664f9d914dbb6_05107982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5664f9d914dbb6_05107982')) {function content_5664f9d914dbb6_05107982($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1) {?> class="active"<?php }?>><a data-toggle="tab" href="#homefeatured" class="homefeatured"><?php echo smartyTranslate(array('s'=>'Popular','mod'=>'homefeatured'),$_smarty_tpl);?>
</a></li><?php }} ?>
