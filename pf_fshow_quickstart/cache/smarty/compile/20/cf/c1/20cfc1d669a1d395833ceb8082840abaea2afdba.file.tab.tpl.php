<?php /* Smarty version Smarty-3.1.19, created on 2015-11-20 03:21:26
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\homefeatured\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19591564ed806a1f7c6-63782351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20cfc1d669a1d395833ceb8082840abaea2afdba' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\homefeatured\\tab.tpl',
      1 => 1447227072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19591564ed806a1f7c6-63782351',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ed806a6de77_72892687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ed806a6de77_72892687')) {function content_564ed806a6de77_72892687($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'E:\\Project\\htdocs\\pf_fshow_quickstart\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1) {?> class="active"<?php }?>><a data-toggle="tab" href="#homefeatured" class="homefeatured"><?php echo smartyTranslate(array('s'=>'Popular','mod'=>'homefeatured'),$_smarty_tpl);?>
</a></li><?php }} ?>
