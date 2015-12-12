<?php /* Smarty version Smarty-3.1.19, created on 2015-12-06 22:17:05
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\admin123\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79925664fa318bf132-47906149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '399c7c1588081d8473e85c797fe692ee9bf17bba' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\admin123\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1447226170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79925664fa318bf132-47906149',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5664fa318c8152_33237633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5664fa318c8152_33237633')) {function content_5664fa318c8152_33237633($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
