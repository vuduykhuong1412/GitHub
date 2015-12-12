<?php /* Smarty version Smarty-3.1.19, created on 2015-12-06 22:17:05
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\admin123\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101545664fa31654494-25572312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f98a5c18e9ab7e035c67d3bc385b23258c2660c7' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\admin123\\themes\\default\\template\\content.tpl',
      1 => 1447226144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101545664fa31654494-25572312',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5664fa3168cc05_72817409',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5664fa3168cc05_72817409')) {function content_5664fa3168cc05_72817409($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
