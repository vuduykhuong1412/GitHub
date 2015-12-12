<?php /* Smarty version Smarty-3.1.19, created on 2015-11-20 02:58:38
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\admin123\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20782564ed2ae2f2155-92893811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '934c0d1ad269daf8882ad809f413b6100816744a' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\admin123\\themes\\default\\template\\content.tpl',
      1 => 1447226144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20782564ed2ae2f2155-92893811',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ed2ae32e040_91244697',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ed2ae32e040_91244697')) {function content_564ed2ae32e040_91244697($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
