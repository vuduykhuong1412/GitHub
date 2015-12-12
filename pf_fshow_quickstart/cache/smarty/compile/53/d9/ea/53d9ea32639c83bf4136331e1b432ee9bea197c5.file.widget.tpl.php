<?php /* Smarty version Smarty-3.1.19, created on 2015-11-30 04:45:12
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\modules\psmegamenu\views\templates\admin\widget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31828565c1aa8e33ee3-40867429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53d9ea32639c83bf4136331e1b432ee9bea197c5' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\modules\\psmegamenu\\views\\templates\\admin\\widget.tpl',
      1 => 1447226816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31828565c1aa8e33ee3-40867429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resulHtml' => 0,
    'widget_selected' => 0,
    'form' => 0,
    'types' => 0,
    'fb_widget_action' => 0,
    'widget' => 0,
    'text' => 0,
    'backtolist_action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565c1aa924e486_74768922',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565c1aa924e486_74768922')) {function content_565c1aa924e486_74768922($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['resulHtml']->value['error']) {?>
 <div class="alert alert-danger"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['resulHtml']->value['error'], ENT_QUOTES, 'UTF-8', true);?>
</div>
 <?php } elseif ($_smarty_tpl->tpl_vars['resulHtml']->value['confirm']) {?>
 <div class="alert alert-info"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['resulHtml']->value['confirm'], ENT_QUOTES, 'UTF-8', true);?>
</div>    
 <?php }?>
 <?php if ($_smarty_tpl->tpl_vars['widget_selected']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	 <script type="text/javascript">
		$('#widget_type').change( function(){
			location.href = fb_widget_action + '&wtype='+$(this).val();
		} );
	</script>	
 <?php } else { ?>
	<div class="widgets">
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?> <div class="row">
		<?php  $_smarty_tpl->tpl_vars['text'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['text']->_loop = false;
 $_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['text']->key => $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->tpl_vars['text']->_loop = true;
 $_smarty_tpl->tpl_vars['widget']->value = $_smarty_tpl->tpl_vars['text']->key;
?>
			<div class="col-md-3 col-sm-3">
				<div class="widget-item wpo-wg-button">
					<a href="<?php echo htmlspecialchars(html_entity_decode($_smarty_tpl->tpl_vars['fb_widget_action']->value), ENT_QUOTES, 'UTF-8', true);?>
&wtype=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value, ENT_QUOTES, 'UTF-8', true);?>
"><span class="wpo-wicon wpo-icon-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value, ENT_QUOTES, 'UTF-8', true);?>
"></span></a>
					<div class="widget-title"><a href="<?php echo htmlspecialchars(html_entity_decode($_smarty_tpl->tpl_vars['fb_widget_action']->value), ENT_QUOTES, 'UTF-8', true);?>
&wtype=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</a></div>
					<div class="widget-desc"><i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text']->value['explain'], ENT_QUOTES, 'UTF-8', true);?>
</i></div>	
				</div>
			</div>	

		<?php } ?> <div class="row">
	</div>
<?php }?>
<hr>
 
<div class="row"><div class="col-lg-12 col-md-12">
	<a href="<?php echo htmlspecialchars(html_entity_decode($_smarty_tpl->tpl_vars['backtolist_action']->value), ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-primary"><?php echo smartyTranslate(array('s'=>'Back To List','mod'=>'psmegamenu'),$_smarty_tpl);?>
</a></div>
</div>
 <?php }} ?>
